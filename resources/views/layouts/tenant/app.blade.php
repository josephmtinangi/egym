<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>@yield('title') | {{ tenant('id') }}</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{ asset('landing/img/favicon.png') }}" rel="icon">
  <link href="{{ asset('landing/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{ asset('landing/css/aos.css') }}" rel="stylesheet">
  <link href="{{ asset('landing/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('landing/css/bootstrap-icons.css') }}" rel="stylesheet">
  <link href="{{ asset('landing/css/boxicons.min.css') }}" rel="stylesheet">
  <link href="{{ asset('landing/css/glightbox.min.css') }}" rel="stylesheet">
  <link href="{{ asset('landing/css/swiper-bundle.min.css') }}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{ asset('landing/css/style.css') }}" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Ninestars - v4.5.0
  * Template URL: https://bootstrapmade.com/ninestars-free-bootstrap-3-theme-for-creative/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between">

      <div class="logo">
        <h1 class="text-light"><a href="/"><span>{{ tenant("id") }}</span></a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
      </div>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
          <li><a class="nav-link scrollto" href="#about">About Us</a></li>
          <li><a class="nav-link scrollto" href="#services">Services</a></li>
          <li><a class="nav-link scrollto" href="#portfolio">Portfolio</a></li>
          <li><a class="nav-link scrollto" href="#team">Team</a></li>
          <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
          @if(!Auth::check())
            <li><a class="getstarted" href="/login">Login</a></li>
          @else
            <li><a class="getstarted" href="/admin">Dashboard</a></li>
          @endif
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

    @yield('content')

    <div class="container py-4">
      <div class="copyright">
        &copy; Copyright <strong><span>JM</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        Designed by <a href="https://github.com/josephmtinangi">JM</a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="{{ asset('landing/js/aos.js') }}"></script>
  <script src="{{ asset('landing/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('landing/js/glightbox.min.js') }}"></script>
  <script src="{{ asset('landing/js/isotope.pkgd.min.js') }}"></script>
  <!-- <script src="{{ asset('landing/js/validate.js') }}"></script> -->
  <script src="{{ asset('landing/js/swiper-bundle.min.js') }}"></script>

  <!-- Template Main JS File -->
  <script src="{{ asset('landing/js/main.js') }}"></script>

</body>

</html>