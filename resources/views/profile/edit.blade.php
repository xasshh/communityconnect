<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Profile</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
            font-family: 'Arial', sans-serif;
        }
        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
            padding-left: 300px;
        }
        .card {
            margin-bottom: 20px;
            border: none;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }
        .card-header {
            background-color: #ffffff;
            border-bottom: 1px solid #e0e0e0;
        }
        .card-title {
            font-size: 18px;
            font-weight: bold;
            color: #333;
        }
        .form-group {
            margin-bottom: 15px;
        }
        label {
            font-weight: bold;
            color: #666;
        }
        input[type="text"], input[type="email"] {
            border: 1px solid #ddd;
            border-radius: 4px;
            padding: 8px;
            font-size: 16px;
        }
        button {
            background-color: #007bff;
            color: white;
            border: none;
            border-radius: 4px;
            padding: 8px 20px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }
        button:hover {
            background-color: #0056b3;
        }
        .success-message {
            margin-top: 15px;
            color: #28a745;
            font-weight: bold;
            text-align: center;
        }
        @media (max-width: 768px) {
            .container {
                max-width: 100%;
                padding: 15px;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        
            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title">Profile Information</h5>
                    </div>
                    <div class="card mb-4">
    <div class="card-header">
        <h4>Update Profile Picture</h4>
    </div>
    <div class="card-body">
        @if (session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif
        <form action="{{ route('profilee.update') }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PATCH')
    
            <div class="form-group">
                <label for="profile_pic">Choose a profile picture</label>
                <input type="file" name="profile_pic" class="form-control" id="profile_pic" accept="image/*" required>
            </div>
            <button type="submit" class="btn btn-primary">Upload</button>
        </form>
    </div>
</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('profile.update') }}" class="needs-validation" novalidate>
                            @csrf
                            @method('PATCH')
                            
                            <div class="form-group">
                                <label for="name">Name</label>
                                <input type="text" id="name" name="name" required autofocus autocomplete="name" value="{{ old('name', $user->name) }}">
                                <span class="invalid-feedback" role="alert"></span>
                            </div>

                            <div class="form-group">
                                <label for="email">Email Address</label>
                                <input type="email" id="email" name="email" required autocomplete="username" value="{{ old('email', $user->email) }}">
                                <span class="invalid-feedback" role="alert"></span>
                            </div>

                            <div class="form-group">
                                <button type="submit" class="btn btn-primary">Save Changes</button>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title">Update Password</h5>
                    </div>
                    <div class="card-body">
                    @include('profile.partials.update-password-form')
                    </div>
                </div>

                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title ">Delete Account</h5>
                    </div>
                    <div class="card-body">
                    @include('profile.partials.delete-user-form')
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    </div>
    <script src="//unpkg.com/alpinejs" defer></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        (function() {
            'use strict';
            window.addEventListener('load', function() {
                var forms = document.getElementsByClassName('needs-validation');
                var validation = Array.prototype.filter.call(forms, function(form) {
                    form.addEventListener('submit', function(event) {
                        if (!form.checkValidity()) {
                            event.preventDefault();
                            event.stopPropagation();
                        }
                        form.classList.add('was-validated');
                    }, false);
                });
            });
        })();
    </script>
</body>
</html>


