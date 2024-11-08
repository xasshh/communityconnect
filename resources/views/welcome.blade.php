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
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>


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
.card-custom {
    margin: 20px 0; /* Adds margin around the card container */
}

.card {
    border: none; /* Remove default border */
    border-radius: 10px; /* Rounded corners */
    overflow: hidden; /* Prevent overflow of content */
    box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1); /* Subtle shadow */
}



.card-img-top {
    height: 200px; /* Fixed height for image */
    object-fit: cover; /* Ensure image covers area */
}

.card-body {
    background-color: #f8f9fa; /* Light background for the body */
}

.card-title {
    font-size: 1.25rem; /* Increase font size for title */
    font-weight: bold; /* Bold title */
    color: #343a40; /* Darker text color */
}

.card-text {
    color: #6c757d; /* Grey color for text */
}

.card-footer {
    background-color: #fff; /* White background for footer */
    border-top: 1px solid #e9ecef; /* Subtle border at the top */
}

.btn-primary {
    background-color:green; /* Bootstrap primary color */
    color: white; /* White text */
    border: none; /* Remove border */
    padding: 10px 20px; /* Padding for button */
    border-radius: 5px; /* Rounded button */
    transition: background-color 0.3s; /* Smooth transition */
}

.btn-primary:hover {
    background-color: #0056b3; /* Darker shade on hover */
}
/* Card Custom Styling */
.card-custom .event-card {
    border-radius: 10px;
    transition: transform 0.3s, box-shadow 0.3s;
    overflow: hidden;
    border: none;
}

.card-custom .event-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 6px 15px rgba(0, 0, 0, 0.1);
}

.event-image {
    height: 200px;
    width: 100%;
    object-fit: cover;
    border-radius: 10px 10px 0 0;
}

.card-custom .card-body {
    padding: 5px;
}

.card-title {
    font-size: 1.25rem;
    font-weight: bold;
    color: #333;
}

.card-text {
    font-size: 0.9rem;
    color: #555;
}

.card-custom .btn-outline-primary {
    color: #007bff;
    border-color: #007bff;
    padding: 8px 15px;
}

.card-custom .btn-outline-primary:hover {
    background-color: #007bff;
    color: #fff;
}

.card-custom .btn-outline-danger {
    color: #dc3545;
    border-color: #dc3545;
    padding: 8px 15px;
}

.card-custom .btn-outline-danger:hover {
    background-color: #dc3545;
    color: #fff;
}

.text-center {
    margin-top: 15px;
}

.video-section {
    background-color: #f9f9fc;
    padding: 60px 0;
}

.video-section h2 {
    font-size: 2rem;
    color: #333;
}

.video-container iframe {
    border-radius: 8px;
    max-width: 100%;
}
.thumb-img {
    max-width: 200px;
    max-height: 100px;
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
          <li><a href="{{ route('join') }}">Join</a></li>
          <!-- <li><a href="{{ route('events.index') }}">Create Events</a></li>
          <li><a href="{{ route('rsvp.create') }}">Rsvp</a></li> -->
              </li>
              <li class="dropdown"><a href="#"><span>More</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
              <ul>
                <li><a href="{{ route('events.index') }}">Create Events</a></li>
                <a href="{{ route('spaces.index') }}" class="">Reservations</a>
                <li class="dropdown"><a href="{{ route('forums.index') }}" ><span>Forums</span><i class="bi bi-chevron-down toggle-dropdown"></i></a> 
                <ul>
                <a href="{{ route('forums.create') }}" class="">Create Forum</a>
                </ul>
                </li>

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
  <main class="main">
    <!-- About Section -->
    <section id="about" class="about section">

      <div class="container">
        <div class="row align-items-center justify-content-between">
          <div class="col-lg-7 mb-5 mb-lg-0 order-lg-2" data-aos="fade-up" data-aos-delay="400">
            <div class="swiper init-swiper">
              <script type="application/json" class="swiper-config">
                {
                  "loop": true,
                  "speed": 600,
                  "autoplay": {
                    "delay": 5000
                  },
                  "slidesPerView": "auto",
                  "pagination": {
                    "el": ".swiper-pagination",
                    "type": "bullets",
                    "clickable": true
                  },
                  "breakpoints": {
                    "320": {
                      "slidesPerView": 1,
                      "spaceBetween": 40
                    },
                    "1200": {
                      "slidesPerView": 1,
                      "spaceBetween": 1
                    }
                  }
                }
              </script>
              <div class="swiper-wrapper">
                <div class="swiper-slide">
                  <img src="{{ asset('images/cc3.png') }}" alt="Image" class="img-fluid  custom-img">
                </div>
                <div class="swiper-slide">
                  <img src="{{ asset('images/ccc.png') }}" alt="Image" class="img-fluid custom-img">
                </div>
                <div class="swiper-slide">
                  <img src="{{ asset('images/cc2.png') }}" alt="Image" class="img-fluid custom-img">
                </div>
              </div>
              <div class="swiper-pagination"></div>
            </div>
          </div>
          <div class="col-lg-4 order-lg-1">
            <span class="section-subtitle" data-aos="fade-up">Welcome to Community Connect!</span>
            <h1 class="mb-4" data-aos="fade-up">
            Unite, Engage, and Transform Your Neighborhood Today!
            </h1>
            <p data-aos="fade-up">
             Community Connect, We bring people together,
             fostering meaningful connections and empowering communities.
              Whether you're looking to join a group, share your experiences, or find support,
               you've come to the right place. Explore our vibrant community, participate in discussions, 
               and connect with like-minded individuals. Together, we can build a stronger, more connected world.
            </p>
            <p class="mt-5" data-aos="fade-up">
              <!-- <a href="#" class="btn btn-get-started">Get Started</a> -->
              <button type="button" class="btn btn-get-started" data-bs-toggle="modal" data-bs-target="#getStartedModal">
              Get Started  
                  </button>

              <div class="modal fade" id="getStartedModal" tabindex="-1" aria-labelledby="getStartedModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="getStartedModalLabel">Get Started</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p>Do you have an account?</p>
                <div class="d-flex justify-content-between">
                    <a href="{{ route('register') }}" class="btn btn-primary">No, Register Now</a>
                    <a href="{{ route('login') }}" class="btn btn-primary">Yes, Login</a>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
            </p>
          </div>
        </div>
      </div>
    </section><!-- /About Section -->
    <section id="intro-video" class="video-section py-5" style="background-color: #f4f4f9;">
      <div class="container text-center">
          <h2 class="mb-4">Experience Community Connect in Action</h2>
          <p class="mb-4">
              See how our platform brings people together through meaningful events and community engagement.
          </p>
  
          <!-- Video Embed -->
          <div class="video-container" data-aos="fade-up">
            <iframe width="560" height="315" src="https://www.youtube.com/embed/ERnvwXADRZY?si=qdm6OtqHv8QSQLnS" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
          </div>
      </div>
  </section>
  
    <!-- About 2 Section -->
    <section id="about-2" class="about-2 section gradient-bg">

      <div class="container">
        <div class="content">
          <div class="row justify-content-center">
            <div class="col-sm-12 col-md-5 col-lg-4 col-xl-4 order-lg-2 offset-xl-1 mb-4">
              <div class="img-wrap text-center text-md-left" data-aos="fade-up" data-aos-delay="100">
                <div class="img">
                  <img src="{{ asset('images/4.jpeg') }}" alt="circle image" class="img-fluid">
                </div>
              </div>
            </div>

            <div class="offset-md-0 offset-lg-1 col-sm-12 col-md-5 col-lg-5 col-xl-4" data-aos="fade-up">
              <div class="px-3">
                <span class="content-subtitle">Our Mission</span>
                <h2 class="content-title text-start">
                At Community Connect, our mission is to strive to create a safe and inclusive space where everyone can share their stories, 
                </h2>
                <p class="lead">
                support each other, and grow together. By bridging gaps and building relationships,

                </p>
                <p class="mb-5">
                we aim to strengthen community bonds and inspire positive change. Join us in creating a more connected, compassionate world where every voice is heard and valued.

                </p>
                <!-- <p>
                  <a href="#" class="btn-get-started">Get Started</a>
                </p> -->
              </div>
            </div>
          </div>
        </div>
      </div>
    </section><!-- /About 2 Section -->

    <!-- Services Section --><section id="services" class="services section light-background">

  <div class="container">
    <div class="row gy-4 justify-content-center">

      <div class="col-lg-3">
        <div class="services-item" data-aos="fade-up">
          <div class="services-icon">
            <i class="bi bi-people"></i> <!-- Changed icon to represent community -->
          </div>
          <div>
            <h3>Community Building</h3>
            <p>Connect with like-minded individuals and join interest-based groups to share experiences and grow together.</p>
          </div>
        </div>
      </div>

      <div class="col-lg-3">
        <div class="services-item" data-aos="fade-up" data-aos-delay="100">
          <div class="services-icon">
            <i class="bi bi-chat-dots"></i> <!-- Changed icon to represent communication -->
          </div>
          <div>
            <h3>Networking Opportunities</h3>
            <p>Engage in meaningful conversations and network with members to expand your personal and professional circles.</p>
          </div>
        </div>
      </div>

      <div class="col-lg-3">
        <div class="services-item" data-aos="fade-up" data-aos-delay="200">
          <div class="services-icon">
            <i class="bi bi-journal-bookmark"></i> <!-- Changed icon to represent education/resources -->
          </div>
          <div>
            <h3>Educational Resources</h3>
            <p>Access a wealth of resources, including articles, webinars, and workshops to help you grow and learn.</p>
          </div>
        </div>
      </div>

    </div>
  </div>
</section><!-- /Services Section -->


  <!-- Stats Section -->
<section id="stats" class="stats section light-background position-relative">
  <!-- Bouncing Circles -->
  <div class="circle circle-1"></div>
  <div class="circle circle-2"></div>
  <div class="circle circle-3"></div>

  <div class="container">
    <div class="row gy-4 justify-content-center">
      <div class="col-lg-5">
        <div class="images-overlap">
          <img src="{{ asset('images/6.jpeg') }}" alt="Community" class="img-fluid img-1" data-aos="fade-up"> <!-- Changed image to represent community -->
        </div>
      </div>

      <div class="col-lg-4 ps-lg-5">
        <span class="content-subtitle">Why Join Us</span>
        <h2 class="content-title">Building Stronger Communities Together</h2>
        <p class="lead">
          At Community Connect, we believe in the power of bringing people together. Our platform is designed to help you find support, share experiences, and build lasting connections.
        </p>
        <p class="mb-5">
          Join thousands of members who are making a difference in their communities. From engaging events to valuable resources, discover how you can grow and thrive with us.
        </p>
        <div class="row mb-5 count-numbers">

          <!-- Start Stats Item -->
          <div class="col-4 counter" data-aos="fade-up" data-aos-delay="100">
            <span data-purecounter-separator="true" data-purecounter-start="0" data-purecounter-end="{{ $userCount }}" data-purecounter-duration="1" class="purecounter number"></span>
            <span class="d-block">Members</span> <!-- Changed stat to reflect the number of community members -->
          </div>
          <!-- End Stats Item -->

          <!-- Start Stats Item -->
          <div class="col-4 counter" data-aos="fade-up" data-aos-delay="200">
            <span data-purecounter-separator="true" data-purecounter-start="0" data-purecounter-end="{{ $totalEvents }}" data-purecounter-duration="1" class="purecounter number"></span>
            <span class="d-block">Events</span> <!-- Changed stat to reflect the number of events hosted -->
          </div>
          <!-- End Stats Item -->

          <!-- Start Stats Item -->
          {{-- <div class="col-4 counter" data-aos="fade-up" data-aos-delay="300">
            <span data-purecounter-separator="true" data-purecounter-start="0" data-purecounter-end="3400" data-purecounter-duration="1" class="purecounter number"></span>
            <span class="d-block">Connections Made</span> <!-- Changed stat to reflect the number of connections made -->
          </div> --}}
          <!-- End Stats Item -->

        </div>
      </div>
    </div>
  </div>
</section>


    <!-- Blog Posts Section -->
    <!-- Blog Posts Section -->
    <section id="blog-posts" class="blog-posts section">
    <!-- Section Title -->
    <div class="container section-title" data-aos="fade-up">
        <p>Stay Updated</p>
        <h2>Latest Blog Posts</h2>
    </div>
    
    <div class="container" data-aos="fade-up">
    <div class="swiper init-swiper">
    <script type="application/json" class="swiper-config">
          {
                  "loop": true,
                  "speed": 600,
                  "autoplay": {
                    "delay": 5000
                  },
                  "slidesPerView": "auto",
                  "pagination": {
                    "el": ".swiper-pagination",
                    "type": "bullets",
                    "clickable": true
                  },
                  "breakpoints": {
                    "320": {
                      "slidesPerView": 1,
                      "spaceBetween": 40
                    },
                    "1200": {
                      "slidesPerView": 1,
                      "spaceBetween": 1
                    }
                  }
                }
          </script>
          <div class="swiper-wrapper">
    @if($blogs->isEmpty())
        <div class="no-posts-message text-center">
            <p>No blog posts available at the moment. Check back later!</p>
        </div>
    @else
        @foreach($blogs as $post)
        <div class="swiper-slide">
            <div class="post-entry card card-custom">
              <a href="#" class="thumb d-block">                     
    <img src="{{ asset('storage/' . $post->image_path) }}" alt="Blog Image" class="img-fluid rounded" style="max-width: 70vh; max-height: 70vh;">
</a>

                <h3>{{ $post->title }}</h3>
                <p>{{ $post->content }}</p>
        
                <div class="post-content p-3">
                    <div class="d-flex author align-items-center">
                        @if($post->profile_pic)
                            <div class="pic">
                                <img src="{{ asset('storage/' . $post->profile_pic) }}" alt="Profile Picture" class="img-fluid rounded-circle" style="width: 40px; height: 40px;">
                            </div>
                        @endif
                        <div class="author-name ms-2">
                            <strong class="d-block">Posted By: {{ $post->name }}</strong>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    @endif
</div>
          <!-- Pagination for the swiper -->
          <div class="swiper-pagination"></div>
        </div>
    </div>
</section>


     
      
      <!-- Slide 2 -->
  

<div class="container mt-5">
    <h2 class="text-center mb-4">Upcoming Events In Your Area..</h2>


    <!-- Display Filtered Events -->
    <div class="row card-custom">
      @if($events->isEmpty())
          <p class="text-center">No events found matching your search.</p>
      @else
          @foreach($events as $event)
              <div class="col-12 col-md-6 col-lg-4 mb-4 d-flex align-items-stretch">
                  <div class="card shadow-sm event-card">
                      <img src="{{ asset('storage/' . $event->image_path) }}" class="card-img-top event-image" alt="{{ $event->title }}">
                      <div class="card-body">
                          <h5 class="card-title">{{ $event->title }}</h5>
                          <p class="card-text"><strong>Description:</strong> {{ $event->description }}</p>
                          <p class="card-text"><strong>Location:</strong> {{ $event->location }}</p>
                          <p class="card-text"><strong>Date & Time:</strong> {{ $event->event_datetime }}</p>
                          
                          <!-- Display event creator information -->
                          @if($event->user)
                              <p class="card-text"><strong>Followers:</strong> {{ $event->user->followers()->count() }}</p>
                              
                              <!-- Follow/Unfollow Button -->
                              @if(auth()->user()->following->contains($event->user->id))
                                  <form action="{{ route('users.unfollow') }}" method="post" class="text-center">
                                      @csrf
                                      <input type="hidden" name="user_id" value="{{ $event->user->id }}">
                                      <button type="submit" class="btn btn-warning">Unfollow</button>
                                  </form>
                              @else
                                  <form action="{{ route('users.follow') }}" method="post" class="text-center">
                                      @csrf
                                      <input type="hidden" name="user_id" value="{{ $event->user->id }}">
                                      <button type="submit" class="btn btn-secondary">Follow</button>
                                  </form>
                              @endif
                          @else
                          @endif
                      </div>
  
                      <!-- Join button and status message -->
                      <div class="card-footer text-center">
                          <form action="{{ route('events.join') }}" method="post">
                              @csrf
                              @if(session('success_event') == $event->id)
                                  <div class="alert alert-success">
                                      You successfully joined this event!
                                  </div>
                              @endif
                              @if(session('error'))
                                  <div class="alert alert-danger">
                                      {{ session('error') }}
                                  </div>
                              @endif
                              <input type="hidden" name="event_id" value="{{ $event->id }}">
                              
                          </form>
                          <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#getInvolvedModal" data-event-id="{{ $event->id }}">
                            Get Involved
                        </button>
                      </div>
                  </div>
              </div>
          @endforeach
      @endif
  </div>
  <div class="modal fade" id="getInvolvedModal" tabindex="-1" aria-labelledby="getInvolvedModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="getInvolvedModalLabel">Get Involved</h5>
                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
              <form action="{{ route('dashboard.getInvolved.submit') }}" id="getInvolvedForm" method="post" enctype="multipart/form-data">
                @csrf
                
          
                    <input type="hidden" name="event_id" id="event_id">
                    <input type="hidden" name="event_id" value="{{ $event->id }}">
 <!-- Hidden field for event ID -->
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" class="form-control" id="name" name="name" required>
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" id="email" name="email" required>
                    </div>
                    <div class="form-group">
                        <label for="phone">Phone</label>
                        <input type="tel" class="form-control" id="phone" name="phone" required>
                    </div>
                    <div class="form-group">
                        <label for="availability">Availability</label>
                        <textarea class="form-control" id="availability" name="availability" required></textarea>
                    </div>
                    <div class="form-group">
                        <label for="skills">Skills</label>
                        <textarea class="form-control" id="skills" name="skills" required></textarea>
                    </div>
                    @if(session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif
                    <button type="submit" id="submitForm" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>
<script>
  $(document).ready(function () {
      // When the Get Involved button is clicked
      $('[data-bs-target="#getInvolvedModal"]').on('click', function () {
          var eventId = $(this).data('event-id'); // Get the event ID from the button
          $('#event_id').val(eventId); // Set the hidden input field with the event ID
      });
  });
</script>

  


    <!-- Services 2 Section -->
    <section id="services-2" class="services-2 section">

  <div class="container">
    <div class="row justify-content-center" data-aos="fade-up">
      <div class="col-md-6 col-lg-4">
        <span class="content-subtitle">Our Services</span>
        <h2 class="content-title">
          Empowering Connections, Unlocking Opportunities
        </h2>
        <p class="lead">
          Community Connect offers a range of services designed to foster meaningful relationships, promote growth, and help you achieve your goals.
        </p>
        <p class="mb-5">
          From networking to knowledge sharing, we provide the tools you need to connect with others, grow your skills, and make an impact.
        </p>
        
      </div>
      <div class="col-md-6 col-lg-6 ps-lg-5">
        <div class="row">
          <div class="col-6 col-sm-6 col-md-6 col-lg-6">
            <div class="services-item" data-aos="fade-up" data-aos-delay="">
              <div class="services-icon">
                <i class="bi bi-people"></i>
              </div>
              <div>
                <h3>Networking</h3>
                <p>Connect with professionals across various fields to expand your network and discover new opportunities.</p>
              </div>
            </div>
          </div>
          <div class="col-6 col-sm-6 col-md-6 col-lg-6">
            <div class="services-item" data-aos="fade-up" data-aos-delay="100">
              <div class="services-icon">
                <i class="bi bi-lightbulb"></i>
              </div>
              <div>
                <h3>Knowledge Sharing</h3>
                <p>Access and contribute to a wealth of knowledge through community-driven discussions and resources.</p>
              </div>
            </div>
          </div>
          <div class="col-6 col-sm-6 col-md-6 col-lg-6">
            <div class="services-item" data-aos="fade-up" data-aos-delay="200">
              <div class="services-icon">
                <i class="bi bi-briefcase"></i>
              </div>
              <div>
                <h3>Career Development</h3>
                <p>Leverage resources and connections to enhance your skills and advance your career.</p>
              </div>
            </div>
          </div>
          <div class="col-6 col-sm-6 col-md-6 col-lg-6">
            <div class="services-item" data-aos="fade-up" data-aos-delay="300">
              <div class="services-icon">
                <i class="bi bi-calendar-event"></i>
              </div>
              <div>
                <h3>Events & Workshops</h3>
                <p>Participate in events and workshops tailored to your interests and professional growth.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section><!-- /Services 2 Section -->


    <!-- Pricing Section -->
    

    <!-- Faq Section -->
    <section id="faq" class="faq section">
  <!-- Section Title -->
  <div class="container section-title" data-aos="fade-up">
    <p>Plans</p>
    <h2>Frequently Asked Questions</h2>
  </div><!-- End Section Title -->

  <div class="container" data-aos="fade-up">
    <div class="row">
      <div class="col-12">
        <div class="custom-accordion" id="accordion-faq">
          
          <!-- FAQ 1: How to join Community Connect -->
          <div class="accordion-item">
            <h2 class="mb-0">
              <button class="btn btn-link" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-faq-1">
                How do I join Community Connect?
              </button>
            </h2>
            <div id="collapse-faq-1" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion-faq">
              <div class="accordion-body">
                Joining Community Connect is easy! Simply download our app from the App Store or Google Play, and follow the registration process. You'll need to provide basic information, choose your interests, and set up your profile. Once registered, you'll be able to start connecting with other members right away.
              </div>
            </div>
          </div>
          <!-- .accordion-item -->

          <!-- FAQ 2: How to navigate the platform -->
          <div class="accordion-item">
            <h2 class="mb-0">
              <button class="btn btn-link collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-faq-2">
                How do I navigate the platform?
              </button>
            </h2>
            <div id="collapse-faq-2" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion-faq">
              <div class="accordion-body">
                Our platform is designed to be user-friendly. You can explore different communities, join groups based on your interests, and participate in discussions. The main navigation menu provides easy access to your profile, messages, notifications, and settings. For more detailed guidance, check out our tutorial section within the app.
              </div>
            </div>
          </div>
          <!-- .accordion-item -->

          <!-- FAQ 3: How to connect with other members -->
          <div class="accordion-item">
            <h2 class="mb-0">
              <button class="btn btn-link collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-faq-3">
                How can I connect with other members?
              </button>
            </h2>
            <div id="collapse-faq-3" class="collapse" aria-labelledby="headingThree" data-parent="#accordion-faq">
              <div class="accordion-body">
                Connecting with others on Community Connect is straightforward. You can search for members by name, interests, or location. Once you find someone you'd like to connect with, you can send a message or invite them to join a group you're part of. Additionally, our platform suggests connections based on your profile and activity.
              </div>
            </div>
          </div>
          <!-- .accordion-item -->

          <!-- FAQ 4: What resources are available for learning? -->
          <div class="accordion-item">
            <h2 class="mb-0">
              <button class="btn btn-link collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-faq-4">
                What resources are available for learning?
              </button>
            </h2>
            <div id="collapse-faq-4" class="collapse" aria-labelledby="headingFour" data-parent="#accordion-faq">
              <div class="accordion-body">
                Community Connect offers a variety of resources to help you learn and grow. You can access articles, e-books, videos, and podcasts covering a wide range of topics. Additionally, we host webinars and workshops that you can attend live or watch later. These resources are designed to help you develop new skills, advance your career, and enrich your personal life.
              </div>
            </div>
          </div>
          <!-- .accordion-item -->

        </div>
      </div>
    </div>
  </div>
</section><!-- /Faq Section -->


    <!-- Testimonials Section -->
    <section id="testimonials" class="testimonials section">
  <!-- Section Title -->
  <div class="container section-title" data-aos="fade-up">
    <p>Happy Members</p>
    <h2>Testimonials</h2>
  </div><!-- End Section Title -->

  <div class="container" data-aos="fade-up">
    <div class="row justify-content-center">
      <div class="col-lg-7">
        <div class="swiper init-swiper">
          <script type="application/json" class="swiper-config">
            {
              "loop": true,
              "speed": 600,
              "autoplay": {
                "delay": 5000
              },
              "slidesPerView": "auto",
              "pagination": {
                "el": ".swiper-pagination",
                "type": "bullets",
                "clickable": true
              },
              "breakpoints": {
                "320": {
                  "slidesPerView": 1,
                  "spaceBetween": 40
                },
                "1200": {
                  "slidesPerView": 1,
                  "spaceBetween": 1
                }
              }
            }
          </script>
          <div class="swiper-wrapper">
    @foreach($testimonials as $testimonial)
    <div class="swiper-slide">
        <div class="testimonial mx-auto">
            <figure class="img-wrap">
                <img src="{{ $testimonial->image_path ? asset('storage/' . $testimonial->image_path) : asset('images/default.jpg') }}" alt="Image" class="img-fluid">
            </figure>
            <h3 class="name">{{ $testimonial->name }}</h3>
            <blockquote>
                <p>“{{ $testimonial->testimonial }}”</p>
            </blockquote>
        </div>
    </div>
    @endforeach
</div>

<section id="about-2" class="about-2 section light-background">
  <div class="container">
    <div class="content">
      <div class="row justify-content-center">
        <div class="col-sm-12 col-md-5 col-lg-4 col-xl-4 order-lg-2 offset-xl-1 mb-4">
          <div class="img-wrap text-center text-md-left" data-aos="fade-up" data-aos-delay="100">
            <div class="img">
              <!-- <div id="map" style="width: 100%; height: 300px;"> -->
                <!-- <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d105242.33664834352!2d7.367465157320973!3d9.024416368195467!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x104e745f4cd62fd9%3A0x53bd17b4a20ea12b!2sAbuja%2C%20Federal%20Capital%20Territory!5e1!3m2!1sen!2sng!4v1725811490101!5m2!1sen!2sng" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe> -->
              </div>
            </div>
          </div>
        </div>
        <div class="map-container">~
  <div class="search-container">
    <h5>Search for locations near you..</h5>
    <input id="search-input" type="text" placeholder="Search location">
    <button class="btn-primary" id="search-btn">Search</button>
  </div>
  <div class="google-map">
    <iframe id="map-iframe" frameborder="0" style="border:0" src="https://www.google.com/maps?q=Nigeria&output=embed" allowfullscreen></iframe>
  </div>
</div>

<style>
  .map-container {
    display: flex;
    flex-direction: row;
    align-items: flex-start; /* Align items at the top */
    gap: 20px; /* Space between search and map */
  }

  .search-container {
    display: flex;
    flex-direction: column; /* Stack input and button vertically */
    gap: 10px; /* Space between input and button */
  }

  #search-input {
    padding: 10px; /* Add padding for better UI */
    border: 1px solid #ccc;
    border-radius: 5px;
    width: 200px; /* Set a fixed width or max width */
  }

 



  .google-map {
    flex-grow: 1; /* Allow the map to grow and fill the available space */
  }

  iframe {
    width: 100%; /* Make the iframe responsive */
    height: 400px; /* Set a height for the map */
    border: none; /* Remove border */
  }
</style>

<script>
  const searchInput = document.getElementById('search-input');
  const searchBtn = document.getElementById('search-btn');
  const iframe = document.getElementById('map-iframe');

  searchBtn.addEventListener('click', () => {
    const searchValue = searchInput.value.trim();
    if (searchValue) {
      // Update the iframe src with the new search query
      const encodedSearchValue = encodeURIComponent(searchValue);
      iframe.src = `https://www.google.com/maps?q=${encodedSearchValue}&output=embed`;
    }
  });
</script>

</section><!-- /About 2 Section -->
  
  </main>
  <footer id="footer" class="footer light-background">
  <div class="container">
    <div class="row g-4">
      <div class="col-md-6 col-lg-3 mb-3 mb-md-0">
        <div class="widget">
          <h3 class="widget-heading">About Community Connect</h3>
          <p class="mb-4">
            Community Connect is your gateway to engaging with a vibrant community of professionals and enthusiasts. Whether you are looking to network, learn, or share your expertise, we are here to help you connect with like-minded individuals.
          </p>
          <p class="mb-0">
            <a href="#about" class="btn-learn-more">Learn more</a>
          </p>
        </div>
      </div>
      <div class="col-md-6 col-lg-3 ps-lg-5 mb-3 mb-md-0">
        <div class="widget">
          <h3 class="widget-heading">Navigation</h3>
          <ul class="list-unstyled float-start me-5">
            <li><a href="#overview">Overview</a></li>
            <li><a href="#about">About Us</a></li>
            <li><a href="#groups">Find Groups</a></li>
          </ul>
          <ul class="list-unstyled float-start">
            <li><a href="#resources">Resources</a></li>
            <li><a href="#events">Events</a></li>
            <li><a href="#contact">Contact Us</a></li>
          </ul>
        </div>
      </div>
      <div class="col-md-6 col-lg-3 pl-lg-5">
        <div class="widget">
          <h3 class="widget-heading">Recent Posts</h3>
          <ul class="list-unstyled footer-blog-entry">
            <li>
              <span class="d-block date">August 24, 2024</span>
              <a href="#">How to Build a Strong Professional Network</a>
            </li>
            <li>
              <span class="d-block date">August 10, 2024</span>
              <a href="#">Top 10 Resources for Skill Development</a>
            </li>
          </ul>
        </div>
      </div>
      <div class="col-md-6 col-lg-3 pl-lg-5">
        <div class="widget">
          <h3 class="widget-heading">Connect with Us</h3>
          <ul class="list-unstyled social-icons light mb-3">
            <li>
              <a href="https://facebook.com/communityconnect"><span class="bi bi-facebook"></span></a>
            </li>
            <li>
              <a href="https://twitter.com/communityconnect"><span class="bi bi-twitter-x"></span></a>
            </li>
            <li>
              <a href="https://linkedin.com/company/communityconnect"><span class="bi bi-linkedin"></span></a>
            </li>
            <li>
              <a href="https://plus.google.com/communityconnect"><span class="bi bi-google"></span></a>
            </li>
            <li>
              <a href="https://play.google.com/store/apps/details?id=com.communityconnect"><span class="bi bi-google-play"></span></a>
            </li>
          </ul>
        </div>
        <style>
    @import url(https://fonts.googleapis.com/css?family=Open+Sans:400italic,400,300,600);

    
  </style>
</head>

<body>
  <div class="container">
  <form id="email-form">
    @csrf
    <label for="name">Name:</label>
    <input type="text" id="name" name="name" required>

    <label for="email">Email:</label>
    <input type="email" id="email" name="email" required>

    <label for="message">Message:</label>
    <textarea id="message" name="message" required></textarea>

    <button type="submit">Send</button>
</form>


  </div>
<!--  -->

<!-- @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

@if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif -->


    <div class="copyright d-flex flex-column flex-md-row align-items-center justify-content-md-between">
      <p>© <span>Copyright</span> <strong class="px-1 sitename">Community Connect</strong> <span>All Rights Reserved</span></p>
      <div class="credits">
        <!-- You can keep the links below intact or customize them to fit your brand -->
        Designed by <a href="https://yourdesignagency.com/">Your Design Agency</a>
      </div>
    </div>
  </div>
</footer>


  <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Preloader -->
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="{{ asset('frontend/assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('frontend/assets/vendor/php-email-form/validate.js') }}"></script>
<script src="{{ asset('frontend/assets/vendor/aos/aos.js') }}"></script>
<script src="{{ asset('frontend/assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
<script src="{{ asset('frontend/assets/vendor/purecounter/purecounter_vanilla.js') }}"></script>
<script src="{{ asset('frontend/assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
<script src="{{ asset('frontend/assets/vendor/imagesloaded/imagesloaded.pkgd.min.js') }}"></script>
<script src="{{ asset('frontend/Active/assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>

<!-- Main JS File -->
<script src="{{ asset('frontend/assets/js/main.js') }}"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=&libraries=places&callback=initMap" async defer></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
<!-- Font Awesome JS -->

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/js/all.min.js"></script>
<script>
    document.addEventListener('DOMContentLoaded', function () {
        // Show all event cards initially
        const eventCards = document.querySelectorAll('.event-card');
        eventCards.forEach(card => card.classList.add('show'));

        // Handle filter button click
        const filterButtons = document.querySelectorAll('.filter-btn');
        filterButtons.forEach(button => {
            button.addEventListener('click', function () {
                const filter = this.getAttribute('data-filter');
                
                // Remove 'active' class from all buttons
                filterButtons.forEach(btn => btn.classList.remove('active'));
                // Add 'active' class to the clicked button
                this.classList.add('active');

                // Show/Hide event cards based on filter
                eventCards.forEach(card => {
                    if (filter === 'all') {
                        card.classList.add('show');
                    } else if (card.classList.contains(filter)) {
                        card.classList.add('show');
                    } else {
                        card.classList.remove('show');
                    }
                });
            });
        });
    });
</script>

</body>

</html>