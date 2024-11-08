<style>
    /* Center the form container */
.container {
    max-width: 600px;
    margin: auto;
    padding: 20px;
    background-color: #f9f9f9;
    border-radius: 10px;
}

/* Page heading */
h2 {
    font-size: 1.75rem;
    font-weight: 700;
    color: #333;
    text-align: center;
    margin-bottom: 1.5rem;
}

/* Form labels */
.form-group label {
    font-weight: 600;
    color: #555;
    margin-bottom: 5px;
}

/* Form input fields */
.form-control {
    border: 1px solid #ddd;
    padding: 10px;
    border-radius: 5px;
    font-size: 1rem;
    color: #333;
}

.form-control:focus {
    border-color: #3490dc;
    box-shadow: 0 0 5px rgba(52, 144, 220, 0.3);
}

/* Update button styling */
.btn-primary {
    background-color: green;
    border-color: #3490dc;
    font-weight: 600;
    width: 100%;
    padding: 10px;
    border-radius: 5px;
    font-size: 1rem;
}

.btn-primary:hover {
    background-color: #2779bd;
    border-color: #2779bd;
}

/* Add spacing to the bottom of each form group */
.form-group {
    margin-bottom: 1.25rem;
}

/* Adjust spacing for the submit button */
.btn-primary.mt-3 {
    margin-top: 1.5rem;
}
.button{
    background-color: green;
        border: none;
        border-radius: 0.375rem;
        padding: 0.75rem 1.5rem;
        font-size: 1rem;
        font-weight: 600;
        color: #fff;
}

</style>
@extends('community.layout')

@section('content')
<div class="container mt-5" style="background-color: green; color: white; ">
    <h2 style="color: white;">Edit Space</h2>
    <form action="{{ route('spaces.update', $space) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PATCH')
        
        @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
        <!-- Name Field -->
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" class="form-control" name="name" value="{{ $space->name }}" required>
        </div>

        <!-- Description Field -->
        <div class="form-group">
            <label for="description">Description</label>
            <textarea class="form-control" name="description" rows="4" required>{{ $space->description }}</textarea>
        </div>

        <!-- Capacity Field -->
        <div class="form-group">
            <label for="capacity">Capacity</label>
            <input type="number" class="form-control" name="capacity" value="{{ $space->capacity }}" required>
        </div>

        <!-- Price Field -->
        <div class="form-group">
            <label for="price">Price per Day</label>
            <input type="number" class="form-control" name="price" value="{{ $space->price }}" step="0.01" required>
        </div>

        <!-- Location Field -->
        <div class="form-group">
            <label for="location">Location</label>
            <input type="text" class="form-control" name="location" value="{{ $space->location }}" required>
        </div>

        <!-- Image Field -->
        <div class="form-group">
            <label for="image">Update Image</label>
            <input type="file" class="form-control" name="image" accept="image/*">
            <small class="form-text text-muted">Leave blank if you don't want to change the image.</small>
        </div>

        <!-- Submit Button -->
        <button type="submit" class=" button mt-3">Update</button>
    </form>
</div>

@endsection