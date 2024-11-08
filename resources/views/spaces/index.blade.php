<style>
    /* General container styling */
.container {
    max-width: 900px;
    margin: auto;
    padding: 20px;
    background-color: #f9f9f9;
    border-radius: 10px;
  
}

/* Heading styling */
h2 {
    font-size: 2rem;
    font-weight: 700;
    color: #333;
    text-align: center;
    margin-bottom: 1.5rem;
}

/* Add New Space button */
.btn-primary.mb-3 {
    display: block;
    width: fit-content;
    margin: 0 auto 2rem auto;
    font-weight: 500;
    background-color: green;
}

/* Card styling */
.card {
    border: none;
    overflow: hidden;
    border-radius: 8px;
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.15);
}

.card img {
    height: 450px;
    object-fit: cover;
    border-top-left-radius: 8px;
    border-top-right-radius: 8px;
}

.card-body {
    padding: 20px;
    background-color: #fff;
}

/* Card title styling */
.card-title {
    font-size: 1.5rem;
    font-weight: 600;
    color: #333;
    margin-bottom: 0.5rem;
}

/* Card text styling */
.card-text, .card p {
    font-size: 1rem;
    color: #555;
    margin-bottom: 0.75rem;
   
}

/* RSVP button */



/* Edit and Delete buttons */
.btn-secondary {
    background-color: #6c757d;
    border-color: #6c757d;
    font-weight: 500;
}



.btn-danger {
    background-color: #e3342f;
    border-color: #e3342f;
    font-weight: 500;
}

.btn-danger:hover {
    background-color: #cc1f1a;
    border-color: #cc1f1a;
}

/* Align Edit/Delete buttons */
.card-body .btn-secondary,
.card-body .btn-danger {
    margin-top: 10px;
    margin-right: 10px;
}
.button {
    display: inline-block;
    padding: 10px 20px;
    color: #fff;
    background-color: green;
    text-align: center;
    text-decoration: none;
    border-radius: 4px;
    transition: background-color 0.3s ease;
}

.card-header {
        padding: 1rem;
        background-color: green;
        color: #fff;
        border-bottom: 1px solid rgba(0, 0, 0, 0.125);
    }

</style>

@extends('community.layout')

@section('content')
<div class="card-header mb-4" style="background-color: green; color: white;">
    <h2 style="color: white;">Available Spaces for Rent</h2>
</div>


    <div class="container mt-5">
        
        @if ($availableSpaces->isEmpty())
            <p>No available spaces left for reservation.</p>
        @else
            @foreach ($availableSpaces as $space)
                <div class="card mb-3">
                    <img src="{{ asset('storage/' . $space->image_path) }}" class="card-img-top" alt="{{ $space->name }}">
                    <div class="card-body">
                        <h5 class="card-title">{{ $space->name }}</h5>
                        <p class="card-text">{{ $space->description }}</p>
                        <p><strong>Capacity:</strong> {{ $space->capacity }} people</p>
                        <p><strong>Price:</strong> N{{ $space->price }} per day</p>
                        <p><strong>Location:</strong> {{ $space->location }}</p>
                        <a href="{{ route('rsvp.create', ['space' => $space->slug]) }}" class="button">RSVP Now</a>
                    </div>
                </div>
            @endforeach
        @endif
    </div>
   
</div>
@endsection