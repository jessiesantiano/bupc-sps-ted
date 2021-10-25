<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>BUPC Student Profiling System TEd</title>

  <!-- Favicons -->
  <link rel="icon" href="assets/img/polangui-nobg.png" type="image/png">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />


  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

</head>

<body>


  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">

      <h1 class="logo mr-auto">Student Profiling System</h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo mr-auto"><img src="assets/img/logo.png" alt=""></a>-->

      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li><a href="index-main.php?q=home">Home</a></li>
          <li><a href="index-main.php?q=announcement">Announcement</a></li>
          <li><a href="index-main.php?q=faculty">Faculty</a></li>
          <li class="drop-down"><a href="#">My Profile</a>
            <ul>
              <li><a href="#">My Profile</a></li>
              <li><a href="#">Change Password</a></li>
              <li><a href="#">Logout</a></li>
            </ul>
          </li>
          <li><a href="index-main.php?q=about">About Us</a></li>

        </ul>
      </nav><!-- .nav-menu -->

    </div>
  </header><!-- End Header -->

  <main id="main">


  
  <div class="container ">
  
    <?php require_once $content; ?>
  </div>





  </main><!-- End #main -->


<!-- ======= Footer ======= -->
<footer id="footer">
  <div class="container py-4">
    <div class="copyright">
      &copy; Copyright <strong><span>BUPC Student Profiling System TEd</span></strong>. All Rights Reserved
    </div>
    <div class="credits">

      Researchers: <a href="https://github.com/Jety001" target="_blank">Jessie T. Santiano, Paul Justine P. Pintang & Joner L. Rangasajo</a>
    </div>
  </div>
  <div class="container py-2">
    <style>
      .wrapper .button {
        display: inline-block;
        height: 40px;
        width: 40px;

        margin: 0 5px;
        overflow: hidden;
        background: #fff;
        border-radius: 50px;
        cursor: pointer;
        box-shadow: 0px 10px 10px rgba(0, 0, 0, 0.1);
        transition: all 0.3s ease-out;

      }

      .wrapper .button:hover {
        width: 180px;
      }

      .wrapper .button .icon {
        display: inline-block;
        height: 40px;
        width: 40px;
        text-align: center;
        border-radius: 50px;
        box-sizing: border-box;
        line-height: 45px;
        transition: all 0.3s ease-out;
      }

      .wrapper .button:nth-child(1):hover .icon {
        background: #4267B2;
      }

      .wrapper .button:nth-child(2):hover .icon {
        background: #1DA1F2;
      }

      .wrapper .button:nth-child(3):hover .icon {
        background: #E1306C;
      }

      .wrapper .button:nth-child(4):hover .icon {
        background: #f37123;
      }

      .wrapper .button:nth-child(5):hover .icon {
        background: #ff0000;
      }

      .wrapper .button .icon i {
        font-size: 20px;
        line-height: 40zpx;
        transition: all 0.3s ease-out;
      }

      .wrapper .button:hover .icon i {
        color: #fff;
      }

      .wrapper .button span {
        font-size: 15px;
        font-weight: 500;
        line-height: 40px;
        margin-left: 10px;
        transition: all 0.3s ease-out;
      }

      .wrapper .button:nth-child(1) span {
        color: #4267B2;
      }

      .wrapper .button:nth-child(2) span {
        color: #1DA1F2;
      }

      .wrapper .button:nth-child(3) span {
        color: #E1306C;
      }

      .wrapper .button:nth-child(4) span {
        color: #f37123;
      }

      .wrapper .button:nth-child(5) span {
        color: #ff0000;
      }
    </style>

    <div class="row justify-content-center">
      <div class="wrapper">
        <div class="button">
          <div class="icon">
            <i class="fab fa-facebook-f"></i>
          </div>
          <span><a href="https://www.facebook.com/BUPCEduc" target="_blank" style="color: #4267B2;"> Facebook</a></span>
        </div>
        <div class="button">
          <div class="icon">
            <i class="fab fa-twitter"></i>
          </div>
          <span><a href="https://twitter.com/bicoluofficial?lang=en" target="_blank" style="color: #1DA1F2;">Twitter</a> </span>
        </div>
        <div class="button">
          <div class="icon">
            <i class="fab fa-instagram"></i>
          </div>
          <span><a href="https://www.instagram.com/explore/locations/269753202/philippines/polangui-albay-philippines/bicol-university-polangui-campus-bupc/" target="_blank" style=" color: #E1306C;">Instagram</a> </span>
        </div>
        <div class="button">
          <div class="icon">
            <i class="fab fa-google"></i>
          </div>
          <span><a href="https://bicol-u.edu.ph/polangui+campus" target="_blank" style="color: #009bde;">Bicol University</a> </span>
        </div>
        <div class="button">
          <div class="icon">
            <i class="fab fa-youtube"></i>
          </div>
          <span><a href="https://www.youtube.com/user/TheBicolUniversity" target="_blank" style="color: #ff0000;">YouTube</a> </span>
        </div>
      </div>

    </div>

  </div>
</footer><!-- End Footer -->

<div id="preloader"></div>
<a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

<!-- Vendor JS Files -->
<script src="assets/vendor/jquery/jquery.min.js"></script>
<script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
<script src="assets/vendor/php-email-form/validate.js"></script>
<script src="assets/vendor/waypoints/jquery.waypoints.min.js"></script>
<script src="assets/vendor/counterup/counterup.min.js"></script>
<script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>
<script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
<script src="assets/vendor/venobox/venobox.min.js"></script>
<script src="assets/vendor/aos/aos.js"></script>

<!-- Template Main JS File -->
<script src="assets/js/main.js"></script>

</body>

</html>