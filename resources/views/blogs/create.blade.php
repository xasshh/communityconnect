@extends('community.layout')

@section('content')

<style>
    /* Custom styles for the blog post form */
.card {
    border-radius: 10px;
    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
    
}
.text {
    color:white;
}
.card-header {
    background-color: green; /* Bootstrap primary color */
 

}

.btn-primary {
    background-color: green; /* Bootstrap primary color */
    border: none;
}

.btn-primary:hover {
    background-color: #0056b3; /* Darker shade on hover */
}

.form-group label {
    font-weight: bold; /* Make labels bold */
}

.form-control {
    border-radius: 5px; /* Rounded corners for input fields */
    border: 1px solid #ced4da; /* Bootstrap's default input border */
    transition: border-color 0.3s; /* Smooth transition for border color */
}

.form-control:focus {
    border-color: #007bff; /* Change border color on focus */
    box-shadow: 0 0 5px rgba(0, 123, 255, 0.5); /* Light shadow on focus */
}

</style>
<div class="container mt-5">
    <div class="card">
        <div class="card-header">
         <h3 class="text">Create a Blog Post</h3> 
        </div>
        <div class="card-body">
            <form action="{{ route('blogs.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                @if(session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
                @endif

                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" name="name" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" name="title" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="content">Content</label>
                    <textarea name="content" class="form-control" rows="5" required></textarea>
                </div>
                <div class="form-group">
                    <label for="image">Blog Post Image (optional)</label>
                    <input type="file" name="image" class="form-control">
                </div>
                <div class="form-group">
                    <label for="profile_pic">Profile Picture (optional)</label>
                    <input type="file" name="profile_pic" class="form-control">
                </div>
                <button type="submit" class="btn btn-primary">Post Blog</button>
            </form>
        </div>
    </div>
</div>

@endsection