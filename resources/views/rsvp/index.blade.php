@extends('community.layout')

@section('content')
<style>
    /* Inline CSS for RSVP Form */

    .container {
        max-width: 800px;
        margin: 0 auto;
        padding: 1rem;
    }

    h2 {
        font-size: 2rem;
        margin-bottom: 1rem;
        color: #333;
    }

    p {
        font-size: 1rem;
        margin-bottom: 1.5rem;
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
        background-color: #007bff;
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
</style>

<div class="container mt-5">
    <h2>Reservations for {{ ucfirst(str_replace('-', ' ', $space)) }}</h2>
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
        <button type="submit" class="btn btn-primary">Submit RSVP</button>
    </form>
</div>
@endsection
