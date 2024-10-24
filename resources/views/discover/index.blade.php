@extends('community.layout')

@section('content')



<style>
    /* Inline CSS for Hero Section */
    .bg-cover {
        background-size: cover;
        background-position: center;
    }

    .bg-center {
        background-position: center;
    }

    .py-32 {
        padding-top: 8rem;
        padding-bottom: 8rem;
    }

    .text-black {
        color: #000;
    }

    .text-5xl {
        font-size: 3rem;
        line-height: 1.2;
    }

    .font-extrabold {
        font-weight: 800;
    }

    .drop-shadow-lg {
        text-shadow: 0 1px 3px rgba(0, 0, 0, 0.3);
    }

    .text-2xl {
        font-size: 1.5rem;
    }

    .font-light {
        font-weight: 300;
    }

    .leading-relaxed {
        line-height: 1.625;
    }

    .text-gray-800 {
        color: #4a4a4a;
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


    /* Inline CSS for Community Leaders Section */
    .media {
        display: flex;
        align-items: flex-start;
        margin-bottom: 1.5rem;
    }

    .media-object {
        border-radius: 50%;
    }

    .media-body {
        margin-left: 1rem;
    }
    

    /* Inline CSS for Get Involved Section */
    .modal-content {
        border-radius: 0.375rem;
        box-shadow: 0 0 0 1px rgba(0, 0, 0, 0.125);
    }

    .modal-header {
        border-bottom: 1px solid rgba(0, 0, 0, 0.125);
        background-color: green;
        color: black;
    }

    .modal-body {
        padding: 1.5rem;
    }
    .modal-title {
        color: black;
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
        /* background-color: green; */
        cursor: pointer;
    }

    .btn-lg {
        padding: 0.75rem 1.5rem;
        font-size: 1.25rem;
    }
/* 
    .bg-blue-500 {
        background-color: #007bff;
    } */

    .text-white {
        color: black;
    }

    .text-center {
        text-align: center;
    }

    .mt-16 {
        margin-top: 4rem;
    }

    .py-16 {
        padding-top: 4rem;
        padding-bottom: 4rem;
    }

</style>

<!-- Hero Section -->


<!-- Carousel Section -->
<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"> -->
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script> -->
  </head>
  <body>
<!-- Page Title -->


<!-- Discover Section -->
<section id="discover" class="discover section">
  <div class="container">
    <div class="content">
      <div class="row justify-content-center">
        <!-- Image Section -->
        <div class="col-sm-12 col-md-5 col-lg-4 col-xl-4 order-lg-2 offset-xl-1 mb-4">
  <div class="img-wrap text-center text-md-left" data-aos="fade-up" data-aos-delay="100">
    <div class="img">
      <img src="{{ asset('images/discover.jpg') }}" alt="Discover Image" class="img-fluid rounded-lg" style="border-radius: 50%; max-width: 100%; height: auto;">
    </div>
  </div>
</div>


        <!-- Text Content Section -->
        <div class="offset-md-0 offset-lg-1 col-sm-12 col-md-5 col-lg-5 col-xl-4" data-aos="fade-up">
  <div class="px-3">
    <span class="content-subtitle">Connect & Grow</span>
    <h2 class="content-title text-start">
      Join a Thriving Community, Share Experiences, and Build Lasting Relationships
    </h2>
    <p class="lead">
      Whether it's meeting like-minded individuals, participating in engaging discussions, or collaborating on projects, Community Connect helps you find your place.
    </p>
    <p class="mb-5">
      Discover new friendships, share your passions, and learn from others. Together, we build a supportive space that fosters growth and connection.
    </p>
    
  </div>
</div>

        </div>
      </div>
    </div>
  </div>
</section><!-- /Discover Section -->


<!-- Community Leaders Section -->
<div class="container mt-16">
    <h2 class="text-3xl font-bold text-center mb-8 text-gray-800">Meet Our Community Leaders</h2>
    <section id="team" class="team section">

<div class="site-section slider-team-wrap">
  <div class="container">

    <div class="slider-nav d-flex justify-content-end mb-3">
      <a href="#" class="js-prev js-custom-prev"><i class="bi bi-arrow-left-short"></i></a>
      <a href="#" class="js-next js-custom-next"><i class="bi bi-arrow-right-short"></i></a>
    </div>

    <div class="swiper init-swiper" data-aos="fade-up" data-aos-delay="100">
      <script type="application/json" class="swiper-config">
        {
          "loop": true,
          "speed": 600,
          "autoplay": {
            "delay": 5000
          },
          "slidesPerView": "1",
          "pagination": {
            "el": ".swiper-pagination",
            "type": "bullets",
            "clickable": true
          },
          "navigation": {
            "nextEl": ".js-custom-next",
            "prevEl": ".js-custom-prev"
          },
          "breakpoints": {
            "640": {
              "slidesPerView": 2,
              "spaceBetween": 30
            },
            "768": {
              "slidesPerView": 3,
              "spaceBetween": 30
            },
            "1200": {
              "slidesPerView": 3,
              "spaceBetween": 30
            }
          }
        }
      </script>
      <div class="swiper-wrapper">
        <!-- <div class="swiper-slide">
          <div class="team">
            <div class="pic">
              <img src="{{ asset('images/8.jpeg') }}" alt="Image" class="img-fluid">
            </div>
            <h3 clas="">
              <a href="#"><span class="">Jeremy</span> Walker</a>
            </h3>
            <span class="d-block position">CEO, Founder, Atty.</span>
            <p>
              Separated they live in. Separated they live in Bookmarksgrove
              right at the coast of the Semantics, a large language ocean.
            </p>
            <p class="mb-0">
              <a href="#" class="more dark">Learn More <span class="bi bi-arrow-right-short"></span></a>
            </p>
          </div> -->
        <!-- </div> -->
        <div class="swiper-slide">
          <div class="team">
            <div class="pic">
              <img src="{{ asset('images/ugonna.jpg') }}" alt="Image" class="img-fluid">
            </div>
            <h3 clas="">
              <a href="#"><span class="">Fabian</span> Ugonna</a>
            </h3>
            <span class="d-block position">Event Coordinator.</span>
            <p>
              Fabian is our Event Coordinator , he handles on site event planning and organisation with
              effective cordination for personnals that do not have an idea on how to startup an event.
            </p>
          
          </div>
        </div>
        <div class="swiper-slide">
          <div class="team">
            <div class="pic">
              <img src="{{ asset('images/xash.jpg') }}" alt="Image" class="img-fluid">
            </div>
            <h3 clas="">
              <a href="#"><span class="">Meshack</span> Adeoye</a>
            </h3>
            <span class="d-block position">CEO, Founder.</span>
            <p>
              Meshack is a  Software Engineer, He specializes in building website , by doing this He Decided to
              do something for the community by building a website that connects the community in so many ways.

            </p>
           
          </div>
        </div>
        <div class="swiper-slide">
          <div class="team">
            <div class="pic">
              <img src="{{ asset('images/doy.jpg') }}" alt="Image" class="img-fluid">
            </div>
            <h3 clas="">
              <a href="#"><span class="">Dikeoma</span> Yasita</a>
            </h3>
            <span class="d-block position">Website Manager,</span>
            <p>
              Dikeoma Yasita is one of the community leaders,He is also a business man ,
              he handles the website and all the necessary information and details relating to the community.
            </p> 
           
          </div>
        </div>
        <!-- <div class="swiper-slide"></div> -->
      </div>
    </div>
  </div>
  <!-- /.container -->
</div>
</section><!-- /Team Section -->
<!-- Get Involved Section -->
<div class="bg-blue-500 py-16 mt-16 text-white text-center">
    <div class="container">
        <h2 class="text-3xl font-bold mb-4">Ready to Get Involved?</h2>
        <p class="text-lg mb-6">Join us and start making a difference in your community. Whether it's volunteering, attending events, or spreading the word, your contribution matters!</p>
        
        <!-- Button to trigger modal -->
        <button type="button" class="btn btn-primary btn-lg px-6 py-3 font-semibold text-lg" data-bs-toggle="modal" data-bs-target="#getInvolvedModal">
            Get Involved
        </button>
    </div>
</div>

<script>
    document.getElementById('submitForm').addEventListener('click', function(event) {

        // Get form data
        var formData = new FormData(document.getElementById('getInvolvedForm'));

        // Send the form data via AJAX
        fetch('{{ route("getinvolved.submit") }}', {
            method: 'POST',
            body: formData,
            headers: {
                'X-CSRF-TOKEN': '{{ csrf_token() }}'
            }
        })
        .then(response => response.json())
        .then(data => {
            if (data.success) {
                // Success feedback
                alert('Thank you for getting involved!');
                document.getElementById('getInvolvedForm').reset();
                // Close the modal
                var modalElement = document.getElementById('getInvolvedModal');
                var modalInstance = bootstrap.Modal.getInstance(modalElement);
                modalInstance.hide();
            } else {
                // Handle validation errors
                alert('There was an issue with your submission.');
            }
        })
        .catch(error => {
            console.error('Error:', error);
        });
    });
</script>

<!-- Get Involved Modal -->
<div class="modal fade" id="getInvolvedModal" tabindex="-1" aria-labelledby="getInvolvedModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="#getInvolvedModal">Get Involved</h5>
                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{ route('getinvolved.submit') }}" id="getInvolvedForm" method="post" enctype="multipart/form-data">
                    @csrf
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

@endsection
