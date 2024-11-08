<link href="{{ asset('frontend/assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">
<style>
    body {
    background-color: #f8f9fa; /* Light gray background */
}

.card {
    border-radius: 10px; /* Rounded corners */
}

.card-header {
    border-top-left-radius: 10px; /* Rounded corners for the header */
    border-top-right-radius: 10px;
}

.card-body {
    padding: 2rem; /* Increased padding for the card body */
}


.btn-primary {
    background-color: green; /* Primary button color */
    border-color:green;
}
.card-header {
    background-color: green; /* Primary button color */
    border-color:green;
}

.text-gray-600 {
    color: #6c757d; /* Gray color for the text */
}

.text-white {
    color: #ffffff; /* White text for header */
}

</style>

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card shadow-sm">
                <div class="card-header  text-white text-center">
                    <h4>{{ __('Forgot Password') }}</h4>
                </div>
                <div class="card-body">
                    <div class="mb-4 text-sm text-gray-600 dark:text-gray-400">
                        {{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}
                    </div>

                    <!-- Session Status -->
                    <x-auth-session-status class="mb-4" :status="session('status')" />

                    <form method="POST" action="{{ route('password.email') }}">
                        @csrf

                        <!-- Email Address -->
                        <div class="mb-3">
                            <x-input-label for="email" :value="__('Email')" />
                            <x-text-input id="email" class="form-control" type="email" name="email" :value="old('email')" required autofocus />
                            <x-input-error :messages="$errors->get('email')" class="mt-2" />
                        </div>

                        <div class="d-flex justify-content-end">
                            <x-primary-button class="btn btn-primary">
                                {{ __('Email Password Reset Link') }}
                            </x-primary-button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
