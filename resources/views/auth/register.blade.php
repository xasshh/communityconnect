<link href="{{ asset('frontend/assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">

<style>

    /* Overall Form Styles */
form {
    max-width: 500px;
    margin: 50px auto;
    background-color: #ffffff;
    padding: 30px;
    border-radius: 8px;
    box-shadow: 0 9px 15px rgba(0, 0, 0, 3);
}

form div {
    margin-bottom: 20px;
}

form input[type="text"], 
form input[type="email"], 
form input[type="password"] {
    padding: 12px;
    border-radius: 6px;
    border: 1px solid #ced4da;
    width: 100%;
    background-color: #f8f9fa;
    transition: border-color 0.2s ease;
}

form input[type="text"]:focus,
form input[type="email"]:focus,
form input[type="password"]:focus {
    border-color: #007bff;
    outline: none;
    box-shadow: 0 0 4px rgba(0, 123, 255, 0.5);
}

/* Labels and Texts */
form label {
    font-size: 14px;
    color: #495057;
    font-weight: 600;
}

form span.text-sm {
    font-size: 14px;
    color: #495057;
}

/* Buttons */
.x-primary-button {
    padding: 10px 25px;
    background-color: #28a745;
    color: #ffffff;
    font-weight: bold;
    border-radius: 6px;
    border: none;
    cursor: pointer;
    transition: background-color 0.2s ease;
}

.x-primary-button:hover {
    background-color: #218838;
}

form a {
    font-size: 14px;
    color: #007bff;
    text-decoration: none;
}

form a:hover {
    text-decoration: underline;
}

/* General Layout */
.flex {
    display: flex;
    justify-content: space-between;
    align-items: center;
}

.text-sm {
    font-size: 14px;
    color: #6c757d;
}

/* Dark Mode */
.dark {
    background-color: #343a40;
    color: #f8f9fa;
}

.dark form {
    background-color: #495057;
    color: #f8f9fa;
}

.dark form input[type="text"], 
.dark form input[type="email"], 
.dark form input[type="password"] {
    background-color: #6c757d;
    color: #f8f9fa;
    border: none;
}

.dark form input[type="text"]:focus,
.dark form input[type="email"]:focus,
.dark form input[type="password"]:focus {
    border-color: #28a745;
    box-shadow: 0 0 4px rgba(40, 167, 69, 0.5);
}

.dark label,
.dark .text-sm {
    color: #f8f9fa;
}

.dark a {
    color: #28a745;
}
.navbar-logo {
    display: flex;
    justify-content: center;
    align-items: center;
    height: 10%; /* Make sure the navbar has a defined height */
}
.ms-4{
    background-color: green; /* Blue background */
    color: white;              /* White text color */
    padding: 10px 20px;        /* Padding for better button size */
    border: none;              /* Remove default border */
    border-radius: 5px;        /* Rounded corners */
    font-size: 16px;           /* Slightly larger font */
    cursor: pointer;           /* Pointer cursor on hover */
    transition: background-color 0.3s ease; /* Smooth transition for hover effect */
    box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1); /* Slight shadow for depth */
}
.ms-4:hover {
    background-color: #2980b9; /* Darker blue on hover */
}
</style>
    <form method="POST" action="{{ route('register') }}">
        @csrf

        <!-- Name -->
        <div>
        <span class="navbar-logo">
						<img src="{{ asset('images/IMG_0796.jpg') }}"  style="height: 4rem;"><h6>REGISTER FOR COMMUNITYCONNECT</h6>
				</span>
            <x-input-label for="name" :value="__('Name')" />
            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
<!-- Password -->
<div class="mt-4">
    <x-input-label for="password" :value="__('Password')" />
    <div class="input-group">
        <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
        <div class="input-group-append">
            <button type="button" class="btn " id="togglePassword">
                <i class="fas fa-eye"></i>
            </button>
        </div>
    </div>
    <x-input-error :messages="$errors->get('password')" class="mt-2" />
</div>

<!-- Confirm Password -->
<div class="mt-4">
    <x-input-label for="password_confirmation" :value="__('Confirm Password')" />
    <div class="input-group">
        <x-text-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required autocomplete="new-password" />
        <div class="input-group-append">
            <button type="button" class="btn " id="toggleConfirmPassword">
                <i class="fas fa-eye"></i>
            </button>
        </div>
    </div>
    <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
</div>
<script>
document.getElementById('togglePassword').addEventListener('click', function () {
    var passwordField = document.getElementById('password');
    var type = passwordField.getAttribute('type') === 'password' ? 'text' : 'password';
    passwordField.setAttribute('type', type);
    this.querySelector('i').classList.toggle('fa-eye-slash');
});

document.getElementById('toggleConfirmPassword').addEventListener('click', function () {
    var passwordField = document.getElementById('password_confirmation');
    var type = passwordField.getAttribute('type') === 'password' ? 'text' : 'password';
    passwordField.setAttribute('type', type);
    this.querySelector('i').classList.toggle('fa-eye-slash');
});
</script>


        <div class="flex items-center justify-end mt-4">
            <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('login') }}">
                {{ __('Already registered?') }}
            </a>

            <x-primary-button class="ms-4">
                {{ __('Register') }}
            </x-primary-button>
        </div>
    </form>

