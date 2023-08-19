<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Mentor Bootstrap Template - Index</title>
  <meta content="" name="description">
  <meta content="" name="keywords">
  
  <!-- Favicons -->
  <link href="{{asset('front/img/family.jpg')}}" rel="icon">
  <link href="{{asset('front/img/apple-touch-icon.png')}}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{asset('front/vendor/animate.css/animate.min.css')}}" rel="stylesheet">
  <link href="{{asset('front/vendor/aos/aos.css" rel="stylesheet')}}">
  <link href="{{asset('front/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{asset('front/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
  <link href="{{asset('front/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
  <link href="{{asset('front/vendor/remixicon/remixicon.css')}}" rel="stylesheet">
  <link href="{{asset('front/vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{asset('front/css/style.css')}}" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Mentor
  * Updated: May 30 2023 with Bootstrap v5.3.0
  * Template URL: https://bootstrapmade.com/mentor-free-education-bootstrap-theme/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">

      <h1 class="logo me-auto"><a href="index.html">Family</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo me-auto"><img src="front/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a class="active" href="{{url('/home')}}">Home</a></li>
          <li><a href="{{url('/About')}}">About</a></li>
          <li><a href="{{url('/Courses')}}">Courses</a></li>
          <li><a href="{{url('/Trainers')}}">Trainers</a></li>
          <li><a href="{{url('/Events')}}">Events</a></li>
          <li><a href="{{url('/Pricing')}}">Pricing</a></li>

          <li class="dropdown"><a href="#"><span>Drop Down</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="#">Drop Down 1</a></li>
              <li class="dropdown"><a href="#"><span>Deep Drop Down</span> <i class="bi bi-chevron-right"></i></a>
                <ul>
                  <li><a href="#">Deep Drop Down 1</a></li>
                  <li><a href="#">Deep Drop Down 2</a></li>
                  <li><a href="#">Deep Drop Down 3</a></li>
                  <li><a href="#">Deep Drop Down 4</a></li>
                  <li><a href="#">Deep Drop Down 5</a></li>
                </ul>
              </li>
              <li><a href="#">Drop Down 2</a></li>
              <li><a href="#">Drop Down 3</a></li>
              <li><a href="#">Drop Down 4</a></li>
            </ul>
          </li>
          <li><a href="{{url('/Contact')}}">Contact</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

      <a href="{{url('/Courses')}}" class="get-started-btn">Get Started</a>

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex justify-content-center align-items-center">
    <div class="container position-relative" data-aos="zoom-in" data-aos-delay="100">
      @foreach($result as $key=>$data)
      {{$key+1}}
      <h1> {{$data->titel}}</h1>
      <h2>{{$data->description}}</h2>
      @endforeach
      <a href="{{url('/Courses')}}" class="btn-get-started">Get Started</a>
    </div>
  </section>
  <!-- End Hero-->
  
<!-- ======= Why Us Section ======= -->
<section id="why-us" class="why-us">
  <div class="container" data-aos="fade-up">

    <div class="row">
      <div class="col-lg-4 d-flex align-items-stretch">
        <div class="content">
          <h3>Why Choose Mentor?</h3>
          <p>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Duis aute irure dolor in reprehenderit
            Asperiores dolores sed et. Tenetur quia eos. Autem tempore quibusdam vel necessitatibus optio ad corporis.
          </p>
          <div class="text-center">
            <a href="about.html" class="more-btn">Learn More <i class="bx bx-chevron-right"></i></a>
          </div>
        </div>
      </div>
      <div class="col-lg-8 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
        <div class="icon-boxes d-flex flex-column justify-content-center">
          <div class="row">
            <div class="col-xl-4 d-flex align-items-stretch">
              <div class="icon-box mt-4 mt-xl-0">
                <i class="bx bx-receipt"></i>
                <h4>Corporis voluptates sit</h4>
                <p>Consequuntur sunt aut quasi enim aliquam quae harum pariatur laboris nisi ut aliquip</p>
              </div>
            </div>
            <div class="col-xl-4 d-flex align-items-stretch">
              <div class="icon-box mt-4 mt-xl-0">
                <i class="bx bx-cube-alt"></i>
                <h4>Ullamco laboris ladore pan</h4>
                <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt</p>
              </div>
            </div>
            <div class="col-xl-4 d-flex align-items-stretch">
              <div class="icon-box mt-4 mt-xl-0">
                <i class="bx bx-images"></i>
                <h4>Labore consequatur</h4>
                <p>Aut suscipit aut cum nemo deleniti aut omnis. Doloribus ut maiores omnis facere</p>
              </div>
            </div>
          </div>
        </div><!-- End .content-->
      </div>
    </div>

  </div>
</section><!-- End Why Us Section -->

<!-- ======= Features Section ======= -->
<section id="features" class="features">
  <div class="container" data-aos="fade-up">

    <div class="row" data-aos="zoom-in" data-aos-delay="100">
      <div class="col-lg-3 col-md-4">
        <div class="icon-box">
          <i class="ri-store-line" style="color: #ffbb2c;"></i>
          <h3><a href="">Lorem Ipsum</a></h3>
        </div>
      </div>
      <div class="col-lg-3 col-md-4 mt-4 mt-md-0">
        <div class="icon-box">
          <i class="ri-bar-chart-box-line" style="color: #5578ff;"></i>
          <h3><a href="">Dolor Sitema</a></h3>
        </div>
      </div>
      <div class="col-lg-3 col-md-4 mt-4 mt-md-0">
        <div class="icon-box">
          <i class="ri-calendar-todo-line" style="color: #e80368;"></i>
          <h3><a href="">Sed perspiciatis</a></h3>
        </div>
      </div>
      <div class="col-lg-3 col-md-4 mt-4 mt-lg-0">
        <div class="icon-box">
          <i class="ri-paint-brush-line" style="color: #e361ff;"></i>
          <h3><a href="">Magni Dolores</a></h3>
        </div>
      </div>
      <div class="col-lg-3 col-md-4 mt-4">
        <div class="icon-box">
          <i class="ri-database-2-line" style="color: #47aeff;"></i>
          <h3><a href="">Nemo Enim</a></h3>
        </div>
      </div>
      <div class="col-lg-3 col-md-4 mt-4">
        <div class="icon-box">
          <i class="ri-gradienter-line" style="color: #ffa76e;"></i>
          <h3><a href="">Eiusmod Tempor</a></h3>
        </div>
      </div>
      <div class="col-lg-3 col-md-4 mt-4">
        <div class="icon-box">
          <i class="ri-file-list-3-line" style="color: #11dbcf;"></i>
          <h3><a href="">Midela Teren</a></h3>
        </div>
      </div>
      <div class="col-lg-3 col-md-4 mt-4">
        <div class="icon-box">
          <i class="ri-price-tag-2-line" style="color: #4233ff;"></i>
          <h3><a href="">Pira Neve</a></h3>
        </div>
      </div>
      <div class="col-lg-3 col-md-4 mt-4">
        <div class="icon-box">
          <i class="ri-anchor-line" style="color: #b2904f;"></i>
          <h3><a href="">Dirada Pack</a></h3>
        </div>
      </div>
      <div class="col-lg-3 col-md-4 mt-4">
        <div class="icon-box">
          <i class="ri-disc-line" style="color: #b20969;"></i>
          <h3><a href="">Moton Ideal</a></h3>
        </div>
      </div>
      <div class="col-lg-3 col-md-4 mt-4">
        <div class="icon-box">
          <i class="ri-base-station-line" style="color: #ff5828;"></i>
          <h3><a href="">Verdo Park</a></h3>
        </div>
      </div>
      <div class="col-lg-3 col-md-4 mt-4">
        <div class="icon-box">
          <i class="ri-fingerprint-line" style="color: #29cc61;"></i>
          <h3><a href="">Flavor Nivelanda</a></h3>
        </div>
      </div>
    </div>

  </div>
</section><!-- End Features Section -->

</main><!-- End #main -->
