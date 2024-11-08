<style>
    /* General container styling */
.container {
    max-width: 600px;
    background-color: #f9f9f9;
    padding: 1rem;
    border-radius: 8px;
}

/* Header styling */
h2 {
    color: #333;
    font-weight: 600;
    margin-bottom: 1.5rem;
    text-align: center;
}

/* Form group styling */
.form-group {
    margin-bottom: 1.5rem;
}

.form-group label {
    font-weight: 500;
    color: #555;
}

/* Input and textarea styling */
.form-control {
    padding: 10px;
    font-size: 1rem;
    border-radius: 4px;
    border: 1px solid #ccc;
    transition: border-color 0.3s ease;
}

.form-control:focus {
    border-color: #007bff;
    box-shadow: 0px 0px 8px rgba(0, 123, 255, 0.25);
    outline: none;
}

/* Button styling */
.btn-primary {
    background-color: #007bff;
    border: none;
    color: #fff;
    font-weight: 500;
    padding: 10px 20px;
    border-radius: 4px;
    transition: background-color 0.3s ease;
    width: 100%;
}

.btn-primary:hover {
    background-color: #0056b3;
}

.btn-primary:active {
    background-color: #00408f;
    box-shadow: none;
}

/* Image input styling */
.form-group input[type="file"] {
    padding: 5px;
}

.mt-3 {
    margin-top: 1.5rem !important;
}

/* Add a subtle hover effect for the form */

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
<div class="container mt-5" style="background-color: green; color: white;">
    <h2 style="color: white;">Add a New Space</h2>
</div>
<form action="{{ route('spaces.store') }}" method="POST" enctype="multipart/form-data">
    @csrf

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
    <div class="form-group">
        <label for="name">Name</label>
        <input type="text" class="form-control" name="name" required>
    </div>
    <div class="form-group">
        <label for="description">Description</label>
        <textarea class="form-control" name="description" required></textarea>
    </div>
    <div class="form-group">
        <label for="capacity">Capacity</label>
        <input type="number" class="form-control" name="capacity" required>
    </div>
    <div class="form-group">
        <label for="price">Price (per day)</label>
        <input type="number" class="form-control" name="price" required>
    </div>
    <div class="form-group">
        <label for="location">Location</label>
        <input type="text" class="form-control" name="location" required>
    </div>
    <div class="form-group">
        <label for="image">Image</label>
        <input type="file" class="form-control" name="image" accept="image/*">
    </div>
    <div class="form-group">
        <label for="start_time">Start Time</label>
        <input type="datetime-local" class="form-control" name="start_time" required>
    </div>
    <div class="form-group">
        <label for="end_time">End Time</label>
        <input type="datetime-local" class="form-control" name="end_time" required>
    </div>
    <button type="submit" class="button mt-3">Save</button>
</form>

@endsection