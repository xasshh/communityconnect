<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>COMMUNITYCONNECT</title>
  <meta name="description" content="">
  <meta name="keywords" content="">

  <!-- Favicons -->
  <link href="{{ asset('frontend/assets/img/favicon.png') }}" rel="icon">
  <link href="{{ asset('frontend/assets/img/apple-touch-icon.png') }}" rel="apple-touch-icon">


  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{ asset('frontend/assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
<link href="{{ asset('frontend/assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
<link href="{{ asset('frontend/assets/vendor/aos/aos.css') }}" rel="stylesheet">
<link href="{{ asset('frontend/assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">
<link href="{{ asset('frontend/assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>


<!-- Main CSS File -->
<link href="{{ asset('frontend/assets/css/main.css') }}" rel="stylesheet">


  <!-- =======================================================
  * Template Name: Active
  * Template URL: https://bootstrapmade.com/active-bootstrap-website-template/
  * Updated: Aug 07 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>
<style>
        /* Custom styles for hiding and showing cards */
        .event-card { display: none; }
        .event-card.show { display: block; }
        .btn-primary {
          background-color: green;
          border: none;
        border-radius: 0.375rem;
        padding: 0.75rem 1.5rem;
        font-size: 1rem;
        font-weight: 600;
        }
        .custom-img {
    width: 100%;
    height: auto; /* Maintain aspect ratio */
    max-height: 500px;
        }
    .body {
      font-family: 'Poppins', sans-serif;
    /* Optional: You can control the maximum height */
}
.card-custom {
  box-shadow: 0px 6px 20px rgba(0, 0, 0, 0.15), 0px 8px 30px rgba(0, 0, 0, 0.1);
}
.gradient-bg {
  background: linear-gradient(90deg, #a8e063, #56ab2f, #ffffff);
}

.stats {
  position: relative;
  overflow: hidden; /* Ensures the circles don't extend beyond the section */
  z-index: 1;
}

.circle {
  position: absolute;
  border-radius: 50%;
  background-color: rgba(76, 175, 80, 0.7); /* Green color with some transparency */
  animation: bounce 4s ease-in-out infinite;
  z-index: 0; /* Send circles to the background */
}

.circle-1 {
  width: 150px;
  height: 150px;
  top: 20%;
  left: 10%;
}

.circle-2 {
  width: 200px;
  height: 200px;
  top: 60%;
  left: 70%;
  animation-delay: 0.5s;
}

.circle-3 {
  width: 100px;
  height: 100px;
  top: 80%;
  left: 30%;
  animation-delay: 1s;
}

@keyframes bounce {
  0%, 100% {
    transform: translateY(0);
  }
  50% {
    transform: translateY(-30px);
  }
}


    </style>
<body class="index-page body">

  <header id="header" class="header d-flex align-items-center sticky-top">
    <div class="container-fluid container-xl position-relative d-flex align-items-center justify-content-between">

      <a href="" class="logo d-flex align-items-center">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <span class="navbar-logo">
					
						<img src="{{ asset('images/IMG_0796.jpg') }}"  style="height: 7.5rem;">
				</span>
        <h1 class="sitename">COMMUNITYCONNECT</h1>
      </a>
      
<form action="{{ route('welcome') }}" method="GET" class="d-flex ms-3">
    <div class="form-group me-2">
        <input type="text" name="search" placeholder="Search events" class="form-control me-2" value="{{ request('search') }}">
    </div>
    
    <div class="form-group me-2">
        <select name="category" class="form-control">
            <option value="">Select Category</option>
            @foreach($categories as $category)
                <option value="{{ $category->id }}" {{ request('category') == $category->id ? 'selected' : '' }}>
                    {{ $category->name }}
                </option>
            @endforeach
        </select>
    </div>
    
    <button class="btn-primary" type="submit">
        <i class="fas fa-search"></i>
    </button>
</form>

      <nav id="navmenu" class="navmenu">
        <ul>
          <li><a href="{{ route('discover.index') }}"class="hover">Discover</a></li>
          <li><a href="{{ route('join') }}">Join Community</a></li>
          <!-- <li><a href="{{ route('events.index') }}">Create Events</a></li>
          <li><a href="{{ route('rsvp.create') }}">Rsvp</a></li> -->
              </li>
              <li class="dropdown"><a href="#"><span>More</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
              <ul>
                <li><a href="{{ route('events.index') }}">Create Events</a></li>
                <a href="{{ route('rsvp.create') }}" class="">Rsvps</a>
                <li class="dropdown"><a href="{{ route('forums.index') }}" ><span>Forums</span><i class="bi bi-chevron-down toggle-dropdown"></i></a> 
                <ul>
                <a href="{{ route('forums.create') }}" class="">Create Forum</a>
                </ul>
                </li>
                <a href="{{ route('blogs.create') }}" class="">Create Blogs</a>
                <a href="{{ route('testimonial.create') }}" class="">Submit Testimonial</a>

                </ul>
              </li>
              <li class="dropdown"><a href="#"><span>Accounts</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
              <ul>
                <li><a href="{{ route('dashboard') }}">Dashboard</a></li>
                <a href="{{ route('register') }}" class="">Register</a>
                <a href="{{ route('login') }}" class="">LogIn</a>
                </ul>
             
        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav>
  </header>