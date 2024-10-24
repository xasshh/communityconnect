@extends('community.layout')

@section('content')
<style>
    /* Hero Section */
    .hero-section {
        background-size: cover;
        background-position: center;
        padding-top: 7.5rem; /* Adjust as needed */
        padding-bottom: 7.5rem; /* Adjust as needed */
    }

    .hero-section .container {
        color: #000;
    }

    .hero-section .text-4xl {
        font-size: 2.25rem;
        line-height: 1.2;
    }

    .hero-section .font-bold {
        font-weight: 700;
    }

    .hero-section .text-4x1 {
        font-size: 1.25rem;
        font-weight: 700;
    }

    /* Why Join Us Section */
    .swiper-wrapper {
        display: flex;
        overflow: hidden;
    }

    .swiper-slide {
        flex: 0 0 auto;
        width: 100%;
    }

    .feature-item {
        padding: 1.5rem;
        text-align: center;
        background: #fff;
        border-radius: 0.5rem;
        box-shadow: 0 1px 3px rgba(0, 0, 0, 0.1);
    }

    .feature-item img {
        width: 4rem;
        height: 4rem;
    }

    .text-gray-700 {
        color: #4a4a4a;
    }

    .text-gray-600 {
        color: #6b6b6b;
    }

    /* Testimonials Section */
    .services-item {
        background: #f9f9f9;
    }

    .testimonial-item {
        padding: 2rem;
        background: #fff;
        border-radius: 0.5rem;
        box-shadow: 0 1px 3px rgba(0, 0, 0, 0.1);
    }

    .testimonial-item img {
        width: 4rem;
        height: 4rem;
        border-radius: 50%;
    }

    .text-gray-700 {
        color: #4a4a4a;
    }

    .text-gray-800 {
        color: #333;
    }

    /* How It Works Section */
    .step-item {
        text-align: center;
        padding: 1.5rem;
        background: #fff;
        border-radius: 0.5rem;
        box-shadow: 0 1px 3px rgba(0, 0, 0, 0.1);
    }

    .step-item img {
        width: 4rem;
        height: 4rem;
    }

    /* Call to Action Section */
    /* .bg-blue-500 {
        background-color: #007bff;
    } */

    .text-white {
        color: #fff;
    }

    .py-16 {
        padding-top: 4rem;
        padding-bottom: 4rem;
    }

    .text-center {
        text-align: center;
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

    .btn-lg {
        padding: 0.75rem 1.5rem;
        font-size: 1.25rem;
    }

</style>

<!-- Hero Section -->
<div class="hero-section bg-cover bg-center py-30" style="background-image: url('{{ asset('images/hero-bg.jpg') }}');">
    <div class="container text-center text-black">
        <h1 class="text-4xl font-bold mb-4">Join Our Vibrant Community</h1>
        <p class="text-4x1 font-bold mb-4">Become a part of Community Connect and stay updated with the latest events, opportunities, and more!</p>
    </div>
</div>

<!-- Why Join Us Section -->
<div class="swiper-wrapper">
    <div class="container mt-16">
        <h2 class="text-3xl font-bold text-gray-800 text-center mb-8">Why Join Us?</h2>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-12 text-center">
            <!-- Feature 1 -->
            <div class="swiper-slide">
                <div class="feature-item">
                    <img src="{{ asset('images/rsvp.jpg') }}" alt="RSVP" class="mx-auto mb-4 w-50 h-50">
                    <h3 class="text-xl font-semibold text-gray-700">Easy RSVPs</h3>
                    <p class="mt-2 text-gray-600">RSVP to events with just a few clicks and never miss out on exciting activities in your area.</p>
                </div>
            </div>

            <!-- Feature 2 -->
            <div class="swiper-slide">
                <div class="feature-item">
                    <img src="{{ asset('images/notification.jpg') }}" alt="Notifications" class="mx-auto mb-4 w-50 h-50">
                    <h3 class="text-xl font-semibold text-gray-700">Instant Notifications</h3>
                    <p class="mt-2 text-gray-600">Get real-time updates on new events, opportunities, and community discussions.</p>
                </div>
            </div>

            <!-- Feature 3 -->
            <div class="swiper-slide">
                <div class="feature-item">
                    <img src="{{ asset('images/connectwpeople.jpg') }}" alt="Networking" class="mx-auto mb-4 w-50 h-50">
                    <h3 class="text-xl font-semibold text-gray-700">Connect with People</h3>
                    <p class="mt-2 text-gray-600">Build your network by connecting with like-minded individuals from various backgrounds.</p>
                </div>
            </div>
        </div>
    </div>
    <div class="swiper-pagination"></div>
</div>

<!-- Testimonials Section -->

<!-- How It Works Section -->
<div class="container mt-16">
    <h2 class="text-3xl font-bold text-gray-800 text-center mb-8">How It Works</h2>
    <div class="grid grid-cols-1 md:grid-cols-3 gap-12 text-center">
        <div class="step-item">
            <img src="{{ asset('images/sign.jpg') }}" alt="Sign Up" class="mx-auto mb-4 w-50 h-50">
            <h3 class="text-xl font-semibold text-gray-700">Step 1: Sign Up</h3>
            <p class="mt-2 text-gray-600">Create an account and become part of our growing community.</p>
        </div>
        <div class="step-item">
            <img src="{{ asset('images/explore.jpg') }}" alt="Explore" class="mx-auto mb-4 w-50 h-50">
            <h3 class="text-xl font-semibold text-gray-700">Step 2: Explore Events</h3>
            <p class="mt-2 text-gray-600">Browse through our events and find ones that match your interests.</p>
        </div>
        <div class="step-item">
            <img src="{{ asset('images/enjoy.jpg') }}" alt="Connect" class="mx-auto mb-4 w-50 h-50">
            <h3 class="text-xl font-semibold text-gray-700">Step 3: Connect & Enjoy</h3>
            <p class="mt-2 text-gray-600">RSVP, attend events, and connect with fellow community members.</p>
        </div>
    </div>
</div>

<!-- Call to Action Section -->
<div class="bg-blue-500 py-16 mt-16 text-white text-center">
    <div class="container">
        <h2 class="text-3xl font-bold mb-4">Ready to Join?</h2>
        <p class="text-lg mb-6">Don't miss out on exciting events and opportunities. Join Community Connect today!</p>
        <a href="{{ route('register') }}" class="btn btn-primary btn-lg px-6 py-3 font-semibold text-lg">Sign Up Now</a>
    </div>
</div>
@endsection
