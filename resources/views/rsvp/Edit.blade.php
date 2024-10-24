@extends('community.layout')

@section('content')
<style>
    .mt-4{
        background-color: green;
        color: white;
    }
</style>
<div class="container ">
    <h2 class="text-2xl font-bold text-center mb-6 text-gray-800">Edit RSVP</h2>
    <form method="POST" action="{{ route('reservation.update', $reservation->id) }}" class="space-y-6">
        @csrf
        @method('PATCH')
        
        <!-- Reservation Name -->
        <div class="mb-4">
            <label for="name" class="block text-sm font-medium text-gray-700">Reservation Name</label>
            <input type="text" name="name" id="name" value="{{ old('name', $reservation->name) }}" 
                   class="border border-gray-300 p-3 w-full rounded-lg focus:outline-none focus:ring focus:ring-blue-300" 
                   required>
        </div>

        <!-- Reservation Date -->
        <div class="mb-4">
            <label for="date" class="block text-sm font-medium text-gray-700">Reservation Date</label>
            <input type="date" name="date" id="date" value="{{ old('date', $reservation->date) }}" 
                   class="border border-gray-300 p-3 w-full rounded-lg focus:outline-none focus:ring focus:ring-blue-300" 
                   required>
        </div>
     
        @if(session('success'))
            <div class="alert alert-success bg-green-100 text-green-700 p-4 rounded-lg mb-4">
                {{ session('success') }}
            </div>
        @endif
        <!-- Submit button -->
        <div class="">
    <button type="submit" class="mt-4">
        Update RSVP
    </button>
</div>

        </div>
    </form>
</div>
@endsection
