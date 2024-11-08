@extends('community.layout')

@section('content')
<style>
    /* Inline CSS for RSVP and Space Listings Page */


    .card {
        border-radius: 0.375rem;
        box-shadow: 0 0 0 1px rgba(0, 0, 0, 0.125);
        margin-bottom: 1.5rem;
    }

    .card-header {
        padding: 1rem;
        background-color: green;
        color: #fff;
        border-bottom: 1px solid rgba(0, 0, 0, 0.125);
    }

    .card-body {
        padding: 1.5rem;
    }

    h2 {
        font-size: 2rem;
        margin-bottom: 1rem;
        color: #333;
    }

    p {
        font-size: 1rem;
        color: #666;
    }

    .alert {
        padding: 1rem;
        border-radius: 0.375rem;
        margin-bottom: 1.5rem;
    }

    .alert-success {
        background-color: #d4edda;
        border-color: #c3e6cb;
        color: #155724;
    }

    .form-label {
        font-weight: 600;
        margin-bottom: 0.5rem;
        display: block;
        color: #333;
    }

    .form-control {
        border-radius: 0.375rem;
        border: 1px solid #ced4da;
        box-shadow: none;
        padding: 0.75rem;
        transition: border-color 0.2s ease-in-out;
    }

    .form-control:focus {
        border-color: #007bff;
        box-shadow: 0 0 0 0.2rem rgba(38, 143, 255, 0.25);
    }

    .btn-primary {
        background-color: green;
        border: none;
        border-radius: 0.375rem;
        padding: 0.75rem 1.5rem;
        font-size: 1rem;
        font-weight: 600;
        color: #fff;
        transition: background-color 0.2s ease-in-out;
    }

    .btn-primary:hover {
        background-color: #0056b3;
        cursor: pointer;
    }

    .btn-primary:focus {
        outline: none;
        box-shadow: 0 0 0 0.2rem rgba(38, 143, 255, 0.5);
    }

    .card-img-top {
        border-radius: 0.375rem;
    }

    .card-title {
        font-size: 1.25rem;
        margin-bottom: 0.5rem;
    }

    .card-text {
        font-size: 1rem;
        margin-bottom: 0.5rem;
    }

    .row {
        margin-top: 1.5rem;
    }
</style>

<div class="container mt-5">
    <div class="card shadow">
           <center> <h2 class="card-header mb-4">RSVP for {{ ucfirst(str_replace('-', ' ', $space)) }}</h2></center>
        <div class="card-body">
            <p>Fill out the form below to reserve your space.</p>

            @if(session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif

            <form action="{{ route('rsvp.store') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" class="form-control" id="name" name="name" required>
                </div>

                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" name="email" required>
                </div>

                <div class="mb-3">
                    <label for="date" class="form-label">Date of Reservation</label>
                    <input type="date" class="form-control" id="date" name="date" required>
                </div>

                <input type="hidden" name="space" value="{{ $space }}">

                <button type="submit" class=" btn-primary ">Submit RSVP</button>
            </form>
        </div>
    </div>
</div>

{{-- <div class="container mt-5">
    <h2>Reserve Your Space</h2>
    <p>Browse available spaces for rent in the community and make an RSVP to reserve your spot.</p>
    
    <!-- Available spaces for rent -->
    <div class="row">
        @foreach ($availableSpaces as $space)
        <div class="col-md-6">
            <div class="card mb-4">
                <img src="{{ asset($space['image']) }}" class="card-img-top" alt="{{ $space['name'] }}">
                <div class="card-body">
                    <h5 class="card-title">{{ $space['name'] }}</h5>
                    <p class="card-text">{{ $space['card'] }}</p>
                    <p><strong>Capacity:</strong> {{ $space['capacity'] }} people</p>
                    <p><strong>Price:</strong> N{{ $space['price'] }}K/day</p>
                    <p><strong>Location:</strong> {{ $space['location'] }}</p>
                    <a href="{{ route('rsvp.create', ['space' => $space['slug']]) }}" class="btn btn-primary">RSVP Now</a>
                </div>
            </div>
        </div>
        @endforeach

        @if (count($availableSpaces) == 0)
            <p>No available spaces left for reservation.</p>
        @endif
    </div>
</div> --}}

<!-- <div class="container mt-5">
    <h2>Reserve Your Space</h2>
    <p>Browse available spaces for rent in the community and make an RSVP to reserve your spot.</p> -->
    
    <!-- Available spaces for rent -->
    <!-- <div class="row"> -->
        <!-- Example rental space 1 -->
        <!-- <div class="col-md-6">
            <div class="card mb-4">
                <img src="{{ asset('images/10.jpeg') }}" class="card-img-top" alt="Community Hall">
                <div class="card-body">
                    <h5 class="card-title">Community Hall</h5>
                    <p class="card-text">A spacious hall perfect for weddings, parties, and community events.</p>
                    <p><strong>Capacity:</strong> 200 people</p>
                    <p><strong>Price:</strong> $500/day</p>
                    <a href="{{ route('rsvp.create', ['space' => 'community-hall']) }}" class=" btn-primary">RSVP Now</a>
                </div>
            </div>
        </div> -->
        <!-- Example rental space 2 -->
        <!-- <div class="col-md-6">
            <div class="card mb-4">
                <img src="{{ asset('images/10.jpeg') }}" class="card-img-top" alt="Conference Room">
                <div class="card-body">
                    <h5 class="card-title">Conference Room</h5>
                    <p class="card-text">A fully equipped room for business meetings, conferences, and workshops.</p>
                    <p><strong>Capacity:</strong> 50 people</p>
                    <p><strong>Price:</strong> $200/day</p>
                    <a href="{{ route('rsvp.create', ['space' => 'conference-room']) }}" class="btn-primary">RSVP Now</a>
                </div>
            </div>
        </div>
    </div>
</div> -->

@endsection
