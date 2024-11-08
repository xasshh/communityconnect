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
        .header .logo {
    display: flex;
    align-items: center;
    gap: 15px; /* space between logo image and text */
}
.header .container-xl {
    display: flex;
    justify-content: space-between;
    align-items: center;
}

.nav-spacing {
    margin-left: 2rem; /* Adjust spacing as needed */
}

.navmenu ul {
    list-style: none;
    padding-left: 0;
}

.navmenu ul li {
    display: inline-block;
    margin-right: 1rem;
}

.navmenu ul li a {
    font-size: 1rem;
    color: #333;
    text-decoration: none;
    padding: 10px;
    transition: color 0.3s;
}

.navmenu ul li a:hover {
    color: green;
}

.sitename {
    font-size: 2rem;
    font-weight: bold;
}

    </style>
<body class="index-page">
  <header id="header" class="header d-flex align-items-center sticky-top">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">
      <a href="" class="logo d-flex align-items-center">
        <span class="navbar-logo">
          <img src="{{ asset('images/IMG_0796.jpg') }}" style="height: 7.5rem;">
        </span>
        <h1 class="sitename ms-3">COMMUNITYCONNECT</h1>
      </a>

      <nav id="navmenu" class="navmenu nav-spacing">
        <ul>
          <li><a href="{{ route('welcome') }}" class="hover">Home</a></li>
          <li><a href="{{ route('discover.index') }}">Discover</a></li>
          <li><a href="{{ route('join') }}">Join</a></li>
          <li class="dropdown">
            <a href="#"><span>More</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
            <ul>
              <li><a href="{{ route('events.index') }}">Create Events</a></li>
              <li><a href="{{ route('spaces.index') }}">Reservations</a></li>
              <li><a href="{{ route('forums.index') }}">Forums</a></li>
            </ul>
          </li>
          <li class="dropdown">
            <a href="#"><span>Accounts</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
            <ul>
              <li><a href="{{ route('dashboard') }}">Dashboard</a></li>
              <li><a href="{{ route('register') }}">Register</a></li>
              <li><a href="{{ route('login') }}">LogIn</a></li>
            </ul>
          </li>
        </ul>
        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav>
    </div>
  </header>
</body>


    <!-- Main Content -->
    <div class="container mt-5">
        @yield('content')
    </div>

    <!-- Footer -->
    @include('layouts.footer')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
