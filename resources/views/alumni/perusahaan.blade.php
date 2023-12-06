@extends('alumni.dashboard')
@section('content') 
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>SoftLand Bootstrap Template - Index</title>
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
        <h1><a href="index.html">SoftLand</a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
      </div>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="active " href="">Home</a></li>
          <li><a href="features">Features</a></li>
          <li><a href="pricing">Pricing</a></li>
          <li><a href="blog  ">Blog</a></li>
          <li><a href="contact">Contact Us</a></li>
          <li><a href="login_alumni">Login</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-600">Lowongan-Input</h1>
</div>
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-600">Perusahaan-Input</h1>
</div>
    <div class="card">
        <div class="card-header">
            <h6 class="m-0 font-bold text-primary">Input Data Perusahaan</h6>
        </div>
        <div class="card-body">
            <form action="{{ $action }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="mb-2">
                    <label for="" class="form-label">Nama</label>
                    <input type="text" name="nama" id="nama" class="form-control" value="{{ $perusahaan->nama }}" placeholder="Masukan Nama Perusahaan ">
                </div>
                <div class="mb-2">
                    <label for="" class="form-label">Telepon</label>
                    <input type="text" name="telepon" id="telepon" class="form-control" value="{{ $perusahaan->telepon }}" placeholder="Masukan Telepon">
                </div> 
                <div class="mb-2">
                    <label for="" class="form-label">Alamat</label>
                    <input type="text" name="alamat" id="alamat" class="form-control" value="{{ $perusahaan->alamat }}" placeholder="Masukan Alamat">
                </div>
                <div class="mb-2">
                    <td colspan="2" align="center">    
                        <input class="btn btn-primary" type="submit" value="{{ $tombol }}" style="width: 100%">
                    </td>
                </div>
            </form>
        </div>
    </div>

  <!-- ======= Footer ======= -->
  <footer class="footer" role="contentinfo">
    <div class="container">

      <div class="row justify-content-center text-center">
        <div class="col-md-7">
          <p class="copyright">&copy; Copyright SoftLand. All Rights Reserved</p>
          <div class="credits">
            <!--
            All the links in the footer should remain intact.
            You can delete the links only if you purchased the pro version.
            Licensing information: https://bootstrapmade.com/license/
            Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=SoftLand
          -->
            Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
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
@endsection