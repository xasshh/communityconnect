<!-- resources/views/community/spot.blade.php -->
<x-app-layout>
    <div class="container mt-5">
        <h2 class="font-semibold text-xl">{{ $spot->name }}</h2>
        <p>{{ $spot->description }}</p>
        <img src="{{ asset($spot->image) }}" alt="{{ $spot->name }}" class="mt-4">
        <p class="mt-4">{{ $spot->more_info }}</p>
    </div>
</x-app-layout>
