@extends('community.layout')

@section('content')
<style>
    /* Inline CSS for Create Event Form */

    /* Card Styles */
    .card {
        border-radius: 0.5rem;
        border: 1px solid #ddd;
        box-shadow: 0 0.125rem 0.25rem rgba(0,0,0,0.075);
    }

    .card-header {
        background-color: green;
        color: #fff;
        border-bottom: 1px solid #ddd;
        border-radius: 0.5rem 0.5rem 0 0;
        height: 10vh;
        
    }

    .card-body {
        padding: 2rem;
    }

    /* Form Styles */
    .form-control {
        border-radius: 0.375rem;
        border: 1px solid #ced4da;
        box-shadow: none;
        transition: border-color 0.2s ease-in-out;
    }

    .form-control:focus {
        border-color: #007bff;
        box-shadow: 0 0 0 0.2rem rgba(38, 143, 255, 0.25);
    }

    /* Form Group Styles */
    .form-group {
        margin-bottom: 1.5rem;
    }

    .form-label {
        font-weight: 600;
        margin-bottom: 0.5rem;
    }

    /* Button Styles */
    .btn-primary {
        background-color: green;
        border: none;
        border-radius: 0.375rem;
        padding: 0.75rem 1.5rem;
        font-size: 1rem;
        font-weight: 600;
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

    /* Responsive Styles */
    @media (max-width: 768px) {
        .container {
            padding-left: 1rem;
            padding-right: 1rem;
        }

        .card-body {
            padding: 1rem;
        }
    }
</style>

<div class="container mt-5">
    <div class="card shadow">
           <center> <h2 class="card-header mb-4">Create an Event</h2></center>
        <div class="card-body">
            <form action="{{ route('events.store') }}" method="POST" enctype="multipart/form-data">
                @csrf

                @if(session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif

                <div class="form-group mb-3">
                    <label for="event_name" class="form-label">Event Name</label>
                    <input type="text" name="title" class="form-control" required>
                </div>

                <div class="form-group mb-3">
                    <label for="description" class="form-label">Description</label>
                    <textarea type="text" rows="5" name="description" class="form-control" required></textarea>
                </div>

                <div class="form-group mb-3">
                    <label for="location" class="form-label">Location</label>
                    <input type="text" name="location" class="form-control" required>
                </div>

                <div class="form-group mb-3">
                    <label for="event_datetime" class="form-label">Event Date & Time</label>
                    <input type="datetime-local" name="event_datetime" class="form-control" required>
                </div>

                 <!-- Category Dropdown -->
            
                 <div class="form-group mb-3">
    <label for="category_id" class="form-label">Category</label>
    <select name="category_id" class="form-control" required>
        <option value="">Select a Category</option>
        @foreach($categories as $category)
            <option value="{{ $category->id }}">{{ $category->name }}</option>
        @endforeach
    </select>
</div>

                <div class="form-group mb-4">
                    <label for="image" class="form-label">Event Image</label>
                    <input type="file" name="image" class="form-control" id="image_path">
                </div>

                <button type="submit" class=" btn-primary " >Create Event</button>
            </form>
        </div>
    </div>
</div>
@endsection

@section('scripts')
<!-- Inline JS for additional functionality if needed -->
@endsection
