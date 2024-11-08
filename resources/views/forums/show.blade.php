<!-- resources/views/forums/show.blade.php -->


<style>
    /* Custom CSS for the Forum Threads Page */

/* Container Styles */
/* Container styling */
.container {
    padding-top: 40px;
    padding-bottom: 40px;
}

/* Forum Title and Description Card */
.bg-dark {
    background-color: green;
    color: #ffffff;
    border-radius: 10px;
    padding: 20px;
    text-align: center;
}
.bg-dark h2 {
    font-size: 2em;
    color: white; /* Light blue for the title */
}
.bg-dark p {
    font-size: 1.1em;
    color: #d4e6f1; /* Softer blue for the description */
}

/* Threads Section */
.bg-white {
    background-color: #ffffff;
    border-radius: 10px;
    padding: 25px;
    box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
}
.bg-white h3 {
    color: #343a40;
    font-weight: bold;
}

/* Thread Items */
.list-group-item {
    background-color: #f8f9fa;
    border-radius: 5px;
    padding: 20px;
    margin-bottom: 10px;
    transition: box-shadow 0.3s ease;
}
.list-group-item:hover {
    box-shadow: 0 6px 15px rgba(0, 0, 0, 0.15);
}
.list-group-item a {
    font-size: 1.25em;
    color: black;
    text-decoration: none;
}
.list-group-item a:hover {
    text-decoration: underline;
}

/* Thread Meta Information */
.text-gray-500 {
    color: #6c757d;
}

/* Edit/Delete Buttons */
.text-green-500 {
    color: #28a745;
}
.text-green-500:hover {
    color: #218838;
}
.text-red-500 {
    color: #dc3545;
}
.text-red-500:hover {
    color: #c82333;
}

/* Create Thread Form */
.bg-gray-100 {
    background-color: #f0f2f5;
    border-radius: 10px;
    padding: 25px;
    box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
}
.bg-gray-100 h3 {
    color: #343a40;
    font-weight: bold;
}
.btn-primary {
    background-color: green;
    color: #ffffff;
    border: none;
    padding: 10px 20px;
    border-radius: 5px;
    transition: background-color 0.3s ease;
}
.btn-primary:hover {
    background-color: green;
}

/* Form Labels */
.block {
    color: #495057;
    font-size: 1em;
    font-weight: 600;
}
input[type="text"],
textarea {
    padding: 10px;
    border: 1px solid #ced4da;
    border-radius: 5px;
    width: 100%;
    transition: border-color 0.3s ease;
}
input[type="text"]:focus,
textarea:focus {
    border-color: #80bdff;
    outline: none;
    box-shadow: 0 0 0 0.2rem rgba(0, 123, 255, 0.25);
}

</style>

    <div class="container py-8">
        <div class="row">
            <!-- Sidebar -->
           

            <!-- Main Content (Forum Details and Threads) -->
            <div class="col-md-8">
                <!-- Forum Title and Description -->
                <div class="bg-dark text-white shadow rounded-lg p-6 mb-6">
                    <div class="text-center">
                        <h2 class="text-blue-600">{{ $forum->title }}</h2>
                        <p class="text-blue-600">{{ $forum->description }}</p>
                    </div>
                </div>

                <!-- Threads Section -->
                <div class="bg-white shadow rounded-lg p-6 mb-6">
                    <h3 class="font-semibold text-2xl text-gray-800 mb-6">Threads</h3>

                    @if($threads->isEmpty())
                        <p class="text-gray-500">No threads have been posted yet.</p>
                    @else
                        <ul class="list-group list-group-flush">
                            @foreach($threads as $thread)
                                <li class="list-group-item bg-gray-50 p-4 rounded-lg shadow-sm hover:shadow-md transition-shadow duration-200">
                                    <!-- Thread Title -->
                                    <a href="{{ route('threads.show', $thread->id) }}" class="text-blue-600">
                                        {{ $thread->title }}
                                    </a>
                                    
                                    <!-- Thread Meta Info -->
                                    <p class="text-sm text-gray-500 mt-2">
                                        Posted by <span class="font-medium">{{ $thread->user->name ?? 'Unknown' }}</span> on {{ $thread->created_at->format('M d, Y') }}
                                    </p>
                                      
                                    <!-- Edit/Delete Buttons (Only for the thread owner) -->
                                    @if($thread->user_id == auth()->id())
                                        <div class="mt-4">
                                            <a href="{{ route('threads.edit', $thread->id) }}" class="text-sm text-green-500 hover:underline inline-block">Edit</a>
                                            <form action="{{ route('threads.destroy', $thread->id) }}" method="POST" class="inline-block ml-2">
                                                @csrf
                                           
                                                @method('DELETE')
                                                <button type="submit" class="text-sm text-red-500 hover:underline">
                                                    Delete
                                                </button>
                                            </form>
                                        </div>
                                    @endif
                                </li>
                            @endforeach
                        </ul>
                    @endif
                </div>

                <!-- Create Thread Form -->
                <div class="bg-gray-100 rounded-lg shadow-md p-6">
                    <h3 class="font-semibold text-2xl text-gray-800 mb-6">Create a New Thread</h3>
                    <form action="{{ route('threads.store') }}" method="POST">
                        @csrf
                        @if(session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif
                        <div class="mb-4">
                            <label for="title" class="block text-lg font-medium text-gray-700">Thread Title</label>
                            <input type="text" name="title" id="title" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-200 focus:ring-opacity-50" required>
                        </div>
                        <div class="mb-6">
                            <label for="body" class="block text-lg font-medium text-gray-700">Thread Body</label>
                            <textarea name="body" id="body" rows="5" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-200 focus:ring-opacity-50" required></textarea>
                        </div>
                        <input type="hidden" name="forum_id" value="{{ $forum->id }}">
                        <button type="submit" class="btn-primary">
                            Create Thread
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>

