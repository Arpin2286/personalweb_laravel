<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  
  <meta name="copyright" content="MACode ID, https://www.macodeid.com/">
  
  <title>Web | {{ $header }}</title>

  <link rel="shortcut icon" href="assets/img/favicon.png" type="image/x-icon">
  
  <link rel="stylesheet" type="text/css" href="assets/css/themify-icons.css">
  
  <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css">

  <link rel="stylesheet" type="text/css" href="assets/vendor/animate/animate.css">
  
  <link rel="stylesheet" type="text/css" href="assets/vendor/owl-carousel/owl.carousel.css">
  
  <link rel="stylesheet" type="text/css" href="assets/vendor/perfect-scrollbar/css/perfect-scrollbar.css">
  
  <link rel="stylesheet" type="text/css" href="assets/vendor/nice-select/css/nice-select.css">
  
  <link rel="stylesheet" type="text/css" href="assets/vendor/fancybox/css/jquery.fancybox.min.css">
  
  <link rel="stylesheet" type="text/css" href="assets/css/virtual.css">
  
  <link rel="stylesheet" type="text/css" href="assets/css/topbar.virtual.css">
  
</head>
<body class="theme-blue">
  
  <!-- Back to top button -->
  <div class="btn-back_to_top">
    <span class="ti-arrow-up"></span>
  </div>
  
  <!-- Setting button -->
  <div class="config">
    <div class="template-config">
      <!-- Settings -->
      <div class="d-block">
        <button class="btn btn-fab btn-sm" id="sideel" title="Settings"><span class="ti-settings"></span></button>
      </div>
    </div>
    <div class="set-menu">
      <p>Select Color</p>
      <div class="color-bar" data-toggle="selected">
        <span class="color-item bg-theme-red" data-class="theme-red"></span>
        <span class="color-item bg-theme-blue selected" data-class="theme-blue"></span>
        <span class="color-item bg-theme-green" data-class="theme-green"></span>
        <span class="color-item bg-theme-orange" data-class="theme-orange"></span>
        <span class="color-item bg-theme-purple" data-class="theme-purple"></span>
      </div>
    </div>
  </div>
  
  <div class="vg-page page-home" id="home" style="background-image: url(assets/img/bgbgbg.jpg); background-size: cover;">
    <!-- Navbar -->
    <div class="navbar navbar-expand-lg navbar-dark sticky" data-offset="500">
      <div class="container">
        <a href="/" class="navbar-brand">{{$header}}</a>
        <button class="navbar-toggler" data-toggle="collapse" data-target="#main-navbar" aria-expanded="true">
          <span class="ti-menu"></span>
        </button>
        <div class="collapse navbar-collapse" id="main-navbar">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a href="/" class="nav-link {{ ($header === "My Profile") ? 'active' : ''}}" data-animate="scrolling">Home</a>
            </li>
            <li class="nav-item">
              <a href="/portofolio1" class="nav-link {{ ($header === "My Product") ? 'active' : ''}}" data-animate="scrolling">Product</a>
            </li>
          </ul>
        </div>
      </div>
    </div> <!-- End Navbar -->

    @yield('content')

  <!-- Footer -->
  <div class="vg-footer">
    <h1 class="text-center">Virtual Folio</h1>
    <div class="container" >
      <div class="row">
        <div class="col-lg-4 py-3">
          <div class="footer-info">
            <p>Where to find me</p>
            <hr class="divider">
            <p class="fs-large fg-white">Banjar Tegal, Kubutambahan Village, Buleleng 81172 Indonesia</p>
          </div>
        </div>
        <div class="col-md-6 col-lg-3 py-3">
          <div class="float-lg-right">
            <p>Contact me</p>
            <hr class="divider">
            <ul class="list-unstyled">
              <li>anggie.arpin.1@gmail.com</li>
              <li><a href="https://api.whatsapp.com/send?phone=6282237256677">+6282237256677</a></li>
            </ul>
          </div>
        </div>
        <div class="col-md-6 col-lg-3 py-3">
          <div class="float-lg-right">
            <p>Follow me</p>
            <hr class="divider">
            <ul class="list-unstyled">
              <li><a href="https://www.instagram.com/anggie.arpin/" target="blank">Instagram</a></li>
              <li><a href="https://www.facebook.com/anggie.arpin.9/" target="blank">Facebook</a></li>
              <li><a href="https://www.linkedin.com/in/i-gede-anggie-suardika-arpin-53802b1a2/" target="blank">LinkedIn</a></li>
              <li><a href="https://www.youtube.com/channel/UCp7c0cAkSYwmvBEUd969yew" target="blank">Youtube</a></li>
            </ul>
          </div>
        </div>
      </div>
        <div class="col-12">
          <p class="text-center mb-0 mt-4">Copyright &copy;2021.</p>
        </div>
      </div>
    </div>
  </div> <!-- End footer -->
  
  <script src="assets/js/jquery-3.5.1.min.js"></script>
    
  <script src="assets/js/bootstrap.bundle.min.js"></script>
    
  <script src="assets/vendor/owl-carousel/owl.carousel.min.js"></script>
    
  <script src="assets/vendor/perfect-scrollbar/js/perfect-scrollbar.js"></script>
    
  <script src="assets/vendor/isotope/isotope.pkgd.min.js"></script>
    
  <script src="assets/vendor/nice-select/js/jquery.nice-select.min.js"></script>
    
  <script src="assets/vendor/fancybox/js/jquery.fancybox.min.js"></script>

  <script src="assets/vendor/wow/wow.min.js"></script>

  <script src="assets/vendor/animateNumber/jquery.animateNumber.min.js"></script>

  <script src="assets/vendor/waypoints/jquery.waypoints.min.js"></script>

  <script src="assets/js/google-maps.js"></script>
    
  <script src="assets/js/topbar-virtual.js"></script>

  <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAIA_zqjFMsJM_sxP9-6Pde5vVCTyJmUHM&callback=initMap"></script>
  
</body>
</html>
