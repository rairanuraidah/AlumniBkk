<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Blog - SoftLand Bootstrap Template</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{ asset('SoftLand/assets/vendor/aos/aos.css') }}" rel="stylesheet">
  <link href="{{ asset('SoftLand/assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('SoftLand/assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
  <link href="{{ asset('SoftLand/assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
  <link href="{{ asset('SoftLand/assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{ asset('SoftLand/assets/css/style.css') }}" rel="stylesheet">

  <!-- =======================================================
  * Template Name: SoftLand
  * Updated: Sep 18 2023 with Bootstrap v5.3.2
  * Template URL: https://bootstrapmade.com/softland-bootstrap-app-landing-page-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center">
    <div class="container d-flex justify-content-between align-items-center">

      <div class="logo">
        <h1><a href="landing_page">BKK SMK YPC Tasikmalaya</a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
      </div>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="" href="landing_page">Home</a></li>
          <li><a href="features">Perusahaan</a></li>
          <li><a class="active" href="blog">Lowongan</a></li>
          <li><a href="contact">Contact Us</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <main id="main">

    <!-- ======= Blog Section ======= -->
    <section class="hero-section inner-page">
      <div class="wave">

        <svg width="1920px" height="265px" viewBox="0 0 1920 265" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
          <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
            <g id="Apple-TV" transform="translate(0.000000, -402.000000)" fill="#FFFFFF">
              <path d="M0,439.134243 C175.04074,464.89273 327.944386,477.771974 458.710937,477.771974 C654.860765,477.771974 870.645295,442.632362 1205.9828,410.192501 C1429.54114,388.565926 1667.54687,411.092417 1920,477.771974 L1920,667 L1017.15166,667 L0,667 L0,439.134243 Z" id="Path"></path>
            </g>
          </g>
        </svg>

      </div>

      <div class="container">
        <div class="row align-items-center">
          <div class="col-12">
            <div class="row justify-content-center">
              <div class="col-md-7 text-center hero-text">
                <h1 data-aos="fade-up" data-aos-delay="">Lowongan Pekerjaan</h1>
                <p class="mb-5" data-aos="fade-up" data-aos-delay="100"></p>
              </div>
            </div>
          </div>
        </div>
      </div>

    </section>

    <section class="section">
      <div class="container">
        <div class="row mb-5">
          <div class="col-md-4">
            @foreach ($perusahaan as $item)
            <div class="post-entry">
              <a href="blog-single.html" class="d-block mb-4">
                <img src="/storage/{{ $item->foto}}" alt="Image" class="img-fluid">
              </a>
            @endforeach
            @foreach ($lowongan as $item)
              <h3>{{ $item->judul}}</h3>
            </div>
            @endforeach
            <a href="/lamaran/add">Daftar</a>
          </div>

        </div>

        {{-- <div class="row">
          <div class="col-12 text-center">
            <span class="p-3 active text-primary">1</span>
            <a href="#" class="p-3">2</a>
            <a href="#" class="p-3">3</a>
            <a href="#" class="p-3">4</a>
          </div>
        </div> --}}
      </div>

    </section>

    <!-- ======= CTA Section ======= -->
    <section class="section cta-section">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-md-6 me-auto text-center text-md-start mb-5 mb-md-0">
            <h2>BKK SMK YPC Tasikmalaya</h2>
          </div>
          <div class="col-md-5 text-center text-md-end">
            <p class="social">
              <a href="#"><span class="bi bi-twitter"></span></a>
              <a href="#"><span class="bi bi-facebook"></span></a>
              <a href="#"><span class="bi bi-instagram"></span></a>
              <a href="#"><span class="bi bi-linkedin"></span></a>
            </p>
           
          </div>
        </div>
      </div>
    </section><!-- End CTA Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer class="footer" role="contentinfo">
    <div class="container">
      <div class="row justify-content-center text-center">
        <div class="col-md-7">
          <p class="copyright">&copy; Copyright BKK SMK YPC Tasikmalaya</p>
          <div class="credits">
            <!--
            All the links in the footer should remain intact.
            You can delete the links only if you purchased the pro version.
            Licensing information: https://bootstrapmade.com/license/
            Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=SoftLand
          -->
            {{-- Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a> --}}
          </div>
        </div>
      </div>

    </div>
  </footer>

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="{{ asset('SoftLand/assets/vendor/aos/aos.js') }}"></script>
  <script src="{{ asset('SoftLand/assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('SoftLand/assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
  <script src="{{ asset('SoftLand/assets/vendor/php-email-form/validate.js') }}"></script>

  <!-- Template Main JS File -->
  <script src="{{ asset('SoftLand/assets/js/main.js') }}"></script>

</body>

</html>