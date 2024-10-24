<!-- resources/views/threads/edit.blade.php -->

<x-app-layout>
    <div class="max-w-4xl mx-auto py-10 px-6 sm:px-8 lg:px-10 bg-white shadow-md rounded-lg">
        <!-- Page Title -->
        <h2 class="font-bold text-3xl text-gray-800 mb-8">Edit Thread</h2>

        <!-- Edit Thread Form -->
        <form action="{{ route('threads.update', $thread->id) }}" method="POST">
            @csrf
            @method('PUT')

            <!-- Title Field -->
            <div class="mb-6">
                <label for="title" class="block text-lg font-medium text-gray-700">Thread Title</label>
                <input type="text" name="title" id="title" class="mt-2 block w-full border-gray-300 rounded-md shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-200 focus:ring-opacity-50" value="{{ old('title', $thread->title) }}" required>
            </div>

            <!-- Body Field -->
            <div class="mb-6">
                <label for="body" class="block text-lg font-medium text-gray-700">Thread Body</label>
                <textarea name="body" id="body" rows="6" class="mt-2 block w-full border-gray-300 rounded-md shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-200 focus:ring-opacity-50" required>{{ old('body', $thread->body) }}</textarea>
            </div>

            <!-- Submit Button -->
            <div class="flex justify-end">
                <button type="submit" class="bg-blue-500 hover:bg-blue-600 text-black font-bold py-2 px-6 rounded-md shadow-md transition duration-200 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2">
                    Update Thread
                </button>
            </div>
        </form>
    </div>
</x-app-layout>
