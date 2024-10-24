


<!-- Mobile Navigation -->


<!-- Main Container -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile Update</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
            font-family: 'Arial', sans-serif;
        }
        .container {
            max-width: 500px;
            margin-top: 40px;
            padding: 20px;
            background-color: white;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }
        .header {
            margin-bottom: 30px;
        }
        .form-group {
            margin-bottom: 15px;
        }
        label {
            font-weight: bold;
            color: #333;
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
        <header>
            <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100 mb-2">Profile Information</h2>
            <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">Update your account's profile information and email address.</p>
        </header>

        <form id="send-verification" method="post" action="{{ route('verification.send') }}">
            @csrf
        </form>

        <form method="post" action="{{ route('profile.update') }}" class="needs-validation" novalidate>
            @csrf
            @method('patch')

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

            @if ($user instanceof \Illuminate\Contracts\Auth\MustVerifyEmail && ! $user->hasVerifiedEmail())
                <div class="form-group">
                    <p class="text-sm mt-2 text-gray-800 dark:text-gray-200">Your email address is unverified.</p>
                    <button form="send-verification" class="btn btn-link p-0">Click here to re-send the verification email.</button>
                </div>

                @if (session('status') === 'verification-link-sent')
                    <div class="form-group">
                        <p class="mt-2 font-medium text-sm text-green-600 dark:text-green-400">A new verification link has been sent to your email address.</p>
                    </div>
                @endif
            @endif

            <div class="form-group">
                <button type="submit" class="btn btn-primary">Save Changes</button>
            </div>
        </form>
        
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="//unpkg.com/alpinejs" defer></script>

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

  