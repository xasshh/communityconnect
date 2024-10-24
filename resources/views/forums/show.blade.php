<!-- resources/views/forums/show.blade.php -->


<style>
    /* Custom CSS for the Forum Threads Page */

/* Container Styles */
.container {
    max-width: 1140px;
    margin: 0 auto;
}
.btn-primary{
    background-color:green;
    border: none;
        border-radius: 0.375rem;
        padding: 0.75rem 1.5rem;
        font-size: 1rem;
        font-weight: 600;
        color: #fff;
        transition: background-color 0.2s ease-in-out;
    }

/* Sidebar Styles */
.card {
    border: 1px solid #ddd;
    border-radius: 0.375rem;
    box-shadow: 0 0.125rem 0.25rem rgba(0,0,0,0.075);
}

.card-header {
    background-color: #343a40;
    color: #fff;
    font-size: 1.25rem;
}

.card-body {
    padding: 1.25rem;
}

.list-group-item {
    border: none;
    padding: 0.75rem 1.25rem;
}

.list-group-item a {
    color: #343a40;
    text-decoration: none;
}

.list-group-item a:hover {
    text-decoration: underline;
}

.list-group-item i {
    margin-right: 0.5rem;
}

/* Forum Title and Description */
.bg-dark {
    background-color: green;
    color: #fff;
}

.text-gray-800 {
    color: #343a40;
}

.text-gray-600 {
    color: #6c757d;
}

/* Thread List Styles */
.list-group-item {
    background-color: #f8f9fa;
    border: 1px solid #ddd;
    border-radius: 0.375rem;
    padding: 1rem;
    transition: box-shadow 0.3s ease-in-out;
}

.list-group-item:hover {
    box-shadow: 0 0.125rem 0.25rem rgba(0,0,0,0.15);
}

.text-blue-600 {
    color: white;
    text-align: center;

}

.text-blue-800 {
    color: #0056b3;
    text-align: center;

}

.font-medium {
    font-weight: 500;
}

.font-semibold {
    font-weight: 600;
}

.text-gray-500 {
    color: #6c757d;
}

.text-gray-700 {
    color: #495057;
}

/* Create Thread Form Styles */
.bg-gray-100 {
    background-color: #f8f9fa;
}

.bg-blue-500 {
    background-color: #007bff;
}

.bg-blue-700 {
    background-color: #0056b3;
}

.text-white {
    color: #fff;
}

.rounded-lg {
    border-radius: 0.5rem;
}

.shadow-md {
    box-shadow: 0 0.125rem 0.25rem rgba(0,0,0,0.075);
}

.shadow-sm {
    box-shadow: 0 0.0625rem 0.125rem rgba(0,0,0,0.075);
}

.focus\:border-blue-500:focus {
    border-color: #007bff;
}

.focus\:ring-blue-200:focus {
    box-shadow: 0 0 0 0.2rem rgba(38, 143, 255, 0.25);
}

.focus\:ring-opacity-50:focus {
    --tw-ring-opacity: 0.5;
}

.mt-1 {
    margin-top: 0.25rem;
}

.mb-4 {
    margin-bottom: 1rem;
}

.mb-6 {
    margin-bottom: 1.5rem;
}

.block {
    display: block;
}

.inline-block {
    display: inline-block;
}

.w-full {
    width: 100%;
}

.p-6 {
    padding: 1.5rem;
}

.p-4 {
    padding: 1rem;
}

.py-8 {
    padding-top: 2rem;
    padding-bottom: 2rem;
}

.px-4 {
    padding-left: 1rem;
    padding-right: 1rem;
}

.sm\:px-6 {
    padding-left: 1.5rem;
    padding-right: 1.5rem;
}

.lg\:px-8 {
    padding-left: 2rem;
    padding-right: 2rem;
}

@media (max-width: 767.98px) {
    .container {
        padding: 0 1rem;
    }
    .card {
        margin-bottom: 1rem;
    }
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

