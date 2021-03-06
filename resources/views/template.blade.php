<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>APP-Test</title>
  <meta content="" name="descriptison">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{URL('asets/assets/img/favicon.png')}}" rel="icon">
  <link href="{{URL('asets/assets/img/apple-touch-icon.png')}}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{url('asets/assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{url('asets/assets/vendor/icofont/icofont.min.css')}}" rel="stylesheet">
  <link href="{{url('asets/assets/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
  <link href="{{url('asets/assets/vendor/remixicon/remixicon.css')}}" rel="stylesheet">
  <link href="{{url('asets/assets/vendor/venobox/venobox.css')}}" rel="stylesheet">
  <link href="{{url('asets/assets/vendor/owl.carousel/assets/owl.carousel.min.css')}}" rel="stylesheet">
  <link href="{{url('asets/assets/vendor/aos/aos.css')}}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{url('asets/assets/css/style.css')}}" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Bethany - v2.0.0
  * Template URL: https://bootstrapmade.com/bethany-free-onepage-bootstrap-theme/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center">
    <div class="container">
      <div class="header-container d-flex align-items-center">
        <div class="logo mr-auto">
          <h1 class="text-light"><a href="{{url('/')}}"><span>APP-Test</span></a></h1>
          <!-- Uncomment below if you prefer to use an image logo -->
          <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
        </div>


        <nav class="nav-menu d-none d-lg-block">
            
          <ul>
            <li><a href="{{url('/')}}">Beranda</a></li>
            <li><a href="{{url('about')}}">About</a></li>
            
            
            
            <li class="drop-down"><a href="">Master Data</a>
              @if (Route::has('login'))
              <ul>
                
                <li><a href="{{url('pemasukkans')}}">Input Pemasukkan</a></li>
                <li><a href="{{url('pengeluarans')}}">Input Pengeluaran</a>
                  
                </li>
                <li><a href="{{url('posts/laporan')}}">Laporan</a></li>
                
              </ul>
            </li>
            @else
            <li class="navbar-right">
                <a href="{{url('login')}}">Login</a>
            </li>  
              
            <li href="" class="navbar-right">
                  <a href="{{url('register')}}">Register</a>
                </li>
           
            
          @endif
          </ul>
        </nav><!-- .nav-menu -->
        <!-- Tombol Login -->



      </div><!-- End Header Container -->
    </div>
  </header><!-- End Header -->

  

  

    

   

  <!-- ======= Footer ======= -->
  <footer id="footer">

    <div class="footer-top">
      <div class="container">
        <div class="row">

          
          <!-- <div class="col-lg-2 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="{{url('/')}}">Beranda</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="{{url('about')}}">About</a></li>
              
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Our Services</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Web Design</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Web Development</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Product Management</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Marketing</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Graphic Design</a></li>
            </ul>
          </div> -->

          

        </div>
      </div>
    </div>

    <div class="container d-md-flex py-4">

      <div class="mr-md-auto text-center text-md-left">
        <div class="copyright">
          &copy; Copyright <strong><span>Christian</span></strong>. All Rights Reserved
        </div>
        
      </div>
      <div class="social-links text-center text-md-right pt-3 pt-md-0">
        <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
        <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
        <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
        <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
        <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

  <!-- Vendor JS Files -->
  <script src="{{url('asets/assets/vendor/jquery/jquery.min.js')}}"></script>
  <script src="{{url('asets/assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{url('asets/assets/vendor/jquery.easing/jquery.easing.min.js')}}"></script>
  <script src="{{url('asets/assets/vendor/php-email-form/validate.js')}}"></script>
  <script src="{{url('asets/assets/vendor/waypoints/jquery.waypoints.min.js')}}"></script>
  <script src="{{url('asets/assets/vendor/counterup/counterup.min.js')}}"></script>
  <script src="{{url('asets/assets/vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
  <script src="{{url('asets/assets/vendor/venobox/venobox.min.js')}}"></script>
  <script src="{{url('asets/assets/vendor/owl.carousel/owl.carousel.min.js')}}"></script>
  <script src="{{url('asets/assets/vendor/aos/aos.js')}}"></script>

  <!-- Template Main JS File -->
  <script src="{{url('asets/assets/js/main.js')}}"></script>

</body>

</html>