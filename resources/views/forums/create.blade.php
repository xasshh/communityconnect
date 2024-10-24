@extends('community.layout')

@section('content')
<style>
  
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
        <h2 class="card-header">Create a New Forum</h2>
        <div class="card-body">
            <form action="{{ route('forums.store') }}" method="POST">
                @csrf

                @if(session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
                @endif

                <div class="form-group mb-3">
                    <label for="name" class="form-label">Your Name</label>
                    <input type="text" name="name" class="form-control" required>
                </div>

                <div class="form-group mb-3">
                    <label for="title" class="form-label">Forum Title</label>
                    <input type="text" name="title" class="form-control" required>
                </div>

                <div class="form-group mb-3">
                    <label for="description" class="form-label">Forum Description</label>
                    <textarea name="description" class="form-control" rows="4" required></textarea>
                </div>

                <button type="submit" class="btn btn-primary">Create Forum</button>
            </form>
        </div>
    </div>
</div>
@endsection
