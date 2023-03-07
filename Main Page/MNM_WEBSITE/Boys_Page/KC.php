<?php
    session_start();
    if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
        // User is not logged in, redirect to login page
            $URL="https://www.barkhawedsmridul.site";
            echo "<script type='text/javascript'>document.location.href='{$URL}';</script>";
            echo '<META HTTP-EQUIV="refresh" content="0;URL=' . $URL . '">';
    }
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Kaam Chhedna</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@400;700&family=Roboto+Mono:wght@400;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="fonts/icomoon/style.css">

  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/magnific-popup.css">
  <link rel="stylesheet" href="css/jquery-ui.css">
  <link rel="stylesheet" href="css/owl.carousel.min.css">
  <link rel="stylesheet" href="css/owl.theme.default.min.css">

  <link rel="stylesheet" href="css/lightgallery.min.css">    

  <link rel="stylesheet" href="css/bootstrap-datepicker.css">

  <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">

  <link rel="stylesheet" href="css/swiper.css">

  <link rel="stylesheet" href="css/aos.css">

  <link rel="stylesheet" href="css/style.css">

</head>
<body>

  <div class="site-wrap">

    <div class="site-mobile-menu">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div>
    



    <header class="site-navbar py-3" role="banner">

      <div class="container-fluid">
        <div class="row align-items-center">

          <div class="col-6 col-xl-2" data-aos="fade-down">
            <h1 class="mb-0"><a href="index.php" class="text-white h2 mb-0">Back</a></h1>
          </div>
          <!-- <div class="col-10 col-md-8 d-none d-xl-block" data-aos="fade-down">
            <nav class="site-navigation position-relative text-right text-lg-center" role="navigation">

              <ul class="site-menu js-clone-nav mx-auto d-none d-lg-block">
                <li><a href="index.html">Home</a></li>
                <li>
                  <a href="single.html">Gallery</a>
                </li>
              </ul>
            </nav>
          </div> -->
<!-- 
          <div class="col-6 col-xl-2 text-right" data-aos="fade-down">
            <div class="d-none d-xl-inline-block">
              <ul class="site-menu js-clone-nav ml-auto list-unstyled d-flex text-right mb-0" data-class="social">
                <li>
                  <a href="#" class="pl-0 pr-3"><span class="icon-facebook"></span></a>
                </li>
                <li>
                  <a href="#" class="pl-3 pr-3"><span class="icon-twitter"></span></a>
                </li>
                <li>
                  <a href="#" class="pl-3 pr-3"><span class="icon-instagram"></span></a>
                </li>
                <li>
                  <a href="#" class="pl-3 pr-3"><span class="icon-youtube-play"></span></a>
                </li>
              </ul>
            </div>

            <div class="d-inline-block d-xl-none ml-md-0 mr-auto py-3" style="position: relative; top: 3px;"><a href="#" class="site-menu-toggle js-menu-toggle text-black"><span class="icon-menu h3"></span></a></div>

          </div> -->

        </div>
      </div>
      
    </header>



    <div class="site-section"  data-aos="fade">
      <div class="container-fluid">

        <div class="row justify-content-center">

          <div class="col-md-7">
            <div class="row mb-5">
              <div class="col-12 ">
                <h2 class="site-section-heading text-center">Kaam Chhedna</h2>
              </div>
            </div>
          </div>

        </div>
        <div class="row" id="lightgallery">
          <div class="col-sm-6 col-md-4 col-lg-3 col-xl-3 item" data-aos="fade" data-src="https://labdh.blob.core.windows.net/mnm2/Boys%20Side%20Photos/Semi-Compressed(Boys)/kaam_chedna/MF9A1192.JPG">
            <a href="#"><img src="https://labdh.blob.core.windows.net/mnm2/Boys%20Side%20Photos/Compressed(Boys)/kaam_chedna/MF9A1192.JPG"   class="img-fluid"></a>
            </div>
             <div class="col-sm-6 col-md-4 col-lg-3 col-xl-3 item" data-aos="fade" data-src="https://labdh.blob.core.windows.net/mnm2/Boys%20Side%20Photos/Semi-Compressed(Boys)/kaam_chedna/MF9A1194.JPG">
            <a href="#"><img src="https://labdh.blob.core.windows.net/mnm2/Boys%20Side%20Photos/Compressed(Boys)/kaam_chedna/MF9A1194.JPG"   class="img-fluid"></a>
            </div>
             <div class="col-sm-6 col-md-4 col-lg-3 col-xl-3 item" data-aos="fade" data-src="https://labdh.blob.core.windows.net/mnm2/Boys%20Side%20Photos/Semi-Compressed(Boys)/kaam_chedna/MF9A1198.JPG">
            <a href="#"><img src="https://labdh.blob.core.windows.net/mnm2/Boys%20Side%20Photos/Compressed(Boys)/kaam_chedna/MF9A1198.JPG"   class="img-fluid"></a>
            </div>
             <div class="col-sm-6 col-md-4 col-lg-3 col-xl-3 item" data-aos="fade" data-src="https://labdh.blob.core.windows.net/mnm2/Boys%20Side%20Photos/Semi-Compressed(Boys)/kaam_chedna/MF9A1200.JPG">
            <a href="#"><img src="https://labdh.blob.core.windows.net/mnm2/Boys%20Side%20Photos/Compressed(Boys)/kaam_chedna/MF9A1200.JPG"   class="img-fluid"></a>
            </div>
             <div class="col-sm-6 col-md-4 col-lg-3 col-xl-3 item" data-aos="fade" data-src="https://labdh.blob.core.windows.net/mnm2/Boys%20Side%20Photos/Semi-Compressed(Boys)/kaam_chedna/MF9A1201.JPG">
            <a href="#"><img src="https://labdh.blob.core.windows.net/mnm2/Boys%20Side%20Photos/Compressed(Boys)/kaam_chedna/MF9A1201.JPG"   class="img-fluid"></a>
            </div>
             <div class="col-sm-6 col-md-4 col-lg-3 col-xl-3 item" data-aos="fade" data-src="https://labdh.blob.core.windows.net/mnm2/Boys%20Side%20Photos/Semi-Compressed(Boys)/kaam_chedna/MF9A1204.JPG">
            <a href="#"><img src="https://labdh.blob.core.windows.net/mnm2/Boys%20Side%20Photos/Compressed(Boys)/kaam_chedna/MF9A1204.JPG"   class="img-fluid"></a>
            </div>
             <div class="col-sm-6 col-md-4 col-lg-3 col-xl-3 item" data-aos="fade" data-src="https://labdh.blob.core.windows.net/mnm2/Boys%20Side%20Photos/Semi-Compressed(Boys)/kaam_chedna/MF9A1212.JPG">
            <a href="#"><img src="https://labdh.blob.core.windows.net/mnm2/Boys%20Side%20Photos/Compressed(Boys)/kaam_chedna/MF9A1212.JPG"   class="img-fluid"></a>
            </div>
             <div class="col-sm-6 col-md-4 col-lg-3 col-xl-3 item" data-aos="fade" data-src="https://labdh.blob.core.windows.net/mnm2/Boys%20Side%20Photos/Semi-Compressed(Boys)/kaam_chedna/MF9A1218.JPG">
            <a href="#"><img src="https://labdh.blob.core.windows.net/mnm2/Boys%20Side%20Photos/Compressed(Boys)/kaam_chedna/MF9A1218.JPG"   class="img-fluid"></a>
            </div>
             <div class="col-sm-6 col-md-4 col-lg-3 col-xl-3 item" data-aos="fade" data-src="https://labdh.blob.core.windows.net/mnm2/Boys%20Side%20Photos/Semi-Compressed(Boys)/kaam_chedna/MF9A1220.JPG">
            <a href="#"><img src="https://labdh.blob.core.windows.net/mnm2/Boys%20Side%20Photos/Compressed(Boys)/kaam_chedna/MF9A1220.JPG"   class="img-fluid"></a>
            </div>
             <div class="col-sm-6 col-md-4 col-lg-3 col-xl-3 item" data-aos="fade" data-src="https://labdh.blob.core.windows.net/mnm2/Boys%20Side%20Photos/Semi-Compressed(Boys)/kaam_chedna/MF9A1221.JPG">
            <a href="#"><img src="https://labdh.blob.core.windows.net/mnm2/Boys%20Side%20Photos/Compressed(Boys)/kaam_chedna/MF9A1221.JPG"   class="img-fluid"></a>
            </div>
             <div class="col-sm-6 col-md-4 col-lg-3 col-xl-3 item" data-aos="fade" data-src="https://labdh.blob.core.windows.net/mnm2/Boys%20Side%20Photos/Semi-Compressed(Boys)/kaam_chedna/MF9A1222.JPG">
            <a href="#"><img src="https://labdh.blob.core.windows.net/mnm2/Boys%20Side%20Photos/Compressed(Boys)/kaam_chedna/MF9A1222.JPG"   class="img-fluid"></a>
            </div>
             <div class="col-sm-6 col-md-4 col-lg-3 col-xl-3 item" data-aos="fade" data-src="https://labdh.blob.core.windows.net/mnm2/Boys%20Side%20Photos/Semi-Compressed(Boys)/kaam_chedna/MF9A1223.JPG">
            <a href="#"><img src="https://labdh.blob.core.windows.net/mnm2/Boys%20Side%20Photos/Compressed(Boys)/kaam_chedna/MF9A1223.JPG"   class="img-fluid"></a>
            </div>
             <div class="col-sm-6 col-md-4 col-lg-3 col-xl-3 item" data-aos="fade" data-src="https://labdh.blob.core.windows.net/mnm2/Boys%20Side%20Photos/Semi-Compressed(Boys)/kaam_chedna/MF9A1225.JPG">
            <a href="#"><img src="https://labdh.blob.core.windows.net/mnm2/Boys%20Side%20Photos/Compressed(Boys)/kaam_chedna/MF9A1225.JPG"   class="img-fluid"></a>
            </div>
             <div class="col-sm-6 col-md-4 col-lg-3 col-xl-3 item" data-aos="fade" data-src="https://labdh.blob.core.windows.net/mnm2/Boys%20Side%20Photos/Semi-Compressed(Boys)/kaam_chedna/MF9A1228.JPG">
            <a href="#"><img src="https://labdh.blob.core.windows.net/mnm2/Boys%20Side%20Photos/Compressed(Boys)/kaam_chedna/MF9A1228.JPG"   class="img-fluid"></a>
            </div>
             <div class="col-sm-6 col-md-4 col-lg-3 col-xl-3 item" data-aos="fade" data-src="https://labdh.blob.core.windows.net/mnm2/Boys%20Side%20Photos/Semi-Compressed(Boys)/kaam_chedna/MF9A1231.JPG">
            <a href="#"><img src="https://labdh.blob.core.windows.net/mnm2/Boys%20Side%20Photos/Compressed(Boys)/kaam_chedna/MF9A1231.JPG"   class="img-fluid"></a>
            </div>
             <div class="col-sm-6 col-md-4 col-lg-3 col-xl-3 item" data-aos="fade" data-src="https://labdh.blob.core.windows.net/mnm2/Boys%20Side%20Photos/Semi-Compressed(Boys)/kaam_chedna/MF9A1232.JPG">
            <a href="#"><img src="https://labdh.blob.core.windows.net/mnm2/Boys%20Side%20Photos/Compressed(Boys)/kaam_chedna/MF9A1232.JPG"   class="img-fluid"></a>
            </div>
             <div class="col-sm-6 col-md-4 col-lg-3 col-xl-3 item" data-aos="fade" data-src="https://labdh.blob.core.windows.net/mnm2/Boys%20Side%20Photos/Semi-Compressed(Boys)/kaam_chedna/MF9A1236.JPG">
            <a href="#"><img src="https://labdh.blob.core.windows.net/mnm2/Boys%20Side%20Photos/Compressed(Boys)/kaam_chedna/MF9A1236.JPG"   class="img-fluid"></a>
            </div>
             <div class="col-sm-6 col-md-4 col-lg-3 col-xl-3 item" data-aos="fade" data-src="https://labdh.blob.core.windows.net/mnm2/Boys%20Side%20Photos/Semi-Compressed(Boys)/kaam_chedna/MF9A1238.JPG">
            <a href="#"><img src="https://labdh.blob.core.windows.net/mnm2/Boys%20Side%20Photos/Compressed(Boys)/kaam_chedna/MF9A1238.JPG"   class="img-fluid"></a>
            </div>
             <div class="col-sm-6 col-md-4 col-lg-3 col-xl-3 item" data-aos="fade" data-src="https://labdh.blob.core.windows.net/mnm2/Boys%20Side%20Photos/Semi-Compressed(Boys)/kaam_chedna/MF9A1239.JPG">
            <a href="#"><img src="https://labdh.blob.core.windows.net/mnm2/Boys%20Side%20Photos/Compressed(Boys)/kaam_chedna/MF9A1239.JPG"   class="img-fluid"></a>
            </div>
             <div class="col-sm-6 col-md-4 col-lg-3 col-xl-3 item" data-aos="fade" data-src="https://labdh.blob.core.windows.net/mnm2/Boys%20Side%20Photos/Semi-Compressed(Boys)/kaam_chedna/MF9A1240.JPG">
            <a href="#"><img src="https://labdh.blob.core.windows.net/mnm2/Boys%20Side%20Photos/Compressed(Boys)/kaam_chedna/MF9A1240.JPG"   class="img-fluid"></a>
            </div>
             <div class="col-sm-6 col-md-4 col-lg-3 col-xl-3 item" data-aos="fade" data-src="https://labdh.blob.core.windows.net/mnm2/Boys%20Side%20Photos/Semi-Compressed(Boys)/kaam_chedna/MF9A1243.JPG">
            <a href="#"><img src="https://labdh.blob.core.windows.net/mnm2/Boys%20Side%20Photos/Compressed(Boys)/kaam_chedna/MF9A1243.JPG"   class="img-fluid"></a>
            </div>
             <div class="col-sm-6 col-md-4 col-lg-3 col-xl-3 item" data-aos="fade" data-src="https://labdh.blob.core.windows.net/mnm2/Boys%20Side%20Photos/Semi-Compressed(Boys)/kaam_chedna/MF9A1245.JPG">
            <a href="#"><img src="https://labdh.blob.core.windows.net/mnm2/Boys%20Side%20Photos/Compressed(Boys)/kaam_chedna/MF9A1245.JPG"   class="img-fluid"></a>
            </div>
             <div class="col-sm-6 col-md-4 col-lg-3 col-xl-3 item" data-aos="fade" data-src="https://labdh.blob.core.windows.net/mnm2/Boys%20Side%20Photos/Semi-Compressed(Boys)/kaam_chedna/MF9A1246.JPG">
            <a href="#"><img src="https://labdh.blob.core.windows.net/mnm2/Boys%20Side%20Photos/Compressed(Boys)/kaam_chedna/MF9A1246.JPG"   class="img-fluid"></a>
            </div>
             <div class="col-sm-6 col-md-4 col-lg-3 col-xl-3 item" data-aos="fade" data-src="https://labdh.blob.core.windows.net/mnm2/Boys%20Side%20Photos/Semi-Compressed(Boys)/kaam_chedna/MF9A1247.JPG">
            <a href="#"><img src="https://labdh.blob.core.windows.net/mnm2/Boys%20Side%20Photos/Compressed(Boys)/kaam_chedna/MF9A1247.JPG"   class="img-fluid"></a>
            </div>
             <div class="col-sm-6 col-md-4 col-lg-3 col-xl-3 item" data-aos="fade" data-src="https://labdh.blob.core.windows.net/mnm2/Boys%20Side%20Photos/Semi-Compressed(Boys)/kaam_chedna/MF9A1248.JPG">
            <a href="#"><img src="https://labdh.blob.core.windows.net/mnm2/Boys%20Side%20Photos/Compressed(Boys)/kaam_chedna/MF9A1248.JPG"   class="img-fluid"></a>
            </div>
             <div class="col-sm-6 col-md-4 col-lg-3 col-xl-3 item" data-aos="fade" data-src="https://labdh.blob.core.windows.net/mnm2/Boys%20Side%20Photos/Semi-Compressed(Boys)/kaam_chedna/MF9A1249.JPG">
            <a href="#"><img src="https://labdh.blob.core.windows.net/mnm2/Boys%20Side%20Photos/Compressed(Boys)/kaam_chedna/MF9A1249.JPG"   class="img-fluid"></a>
            </div>
             <div class="col-sm-6 col-md-4 col-lg-3 col-xl-3 item" data-aos="fade" data-src="https://labdh.blob.core.windows.net/mnm2/Boys%20Side%20Photos/Semi-Compressed(Boys)/kaam_chedna/MF9A1250.JPG">
            <a href="#"><img src="https://labdh.blob.core.windows.net/mnm2/Boys%20Side%20Photos/Compressed(Boys)/kaam_chedna/MF9A1250.JPG"   class="img-fluid"></a>
            </div>
             <div class="col-sm-6 col-md-4 col-lg-3 col-xl-3 item" data-aos="fade" data-src="https://labdh.blob.core.windows.net/mnm2/Boys%20Side%20Photos/Semi-Compressed(Boys)/kaam_chedna/MF9A1254.JPG">
            <a href="#"><img src="https://labdh.blob.core.windows.net/mnm2/Boys%20Side%20Photos/Compressed(Boys)/kaam_chedna/MF9A1254.JPG"   class="img-fluid"></a>
            </div>
             <div class="col-sm-6 col-md-4 col-lg-3 col-xl-3 item" data-aos="fade" data-src="https://labdh.blob.core.windows.net/mnm2/Boys%20Side%20Photos/Semi-Compressed(Boys)/kaam_chedna/MF9A1257.JPG">
            <a href="#"><img src="https://labdh.blob.core.windows.net/mnm2/Boys%20Side%20Photos/Compressed(Boys)/kaam_chedna/MF9A1257.JPG"   class="img-fluid"></a>
            </div>
             <div class="col-sm-6 col-md-4 col-lg-3 col-xl-3 item" data-aos="fade" data-src="https://labdh.blob.core.windows.net/mnm2/Boys%20Side%20Photos/Semi-Compressed(Boys)/kaam_chedna/MF9A1259.JPG">
            <a href="#"><img src="https://labdh.blob.core.windows.net/mnm2/Boys%20Side%20Photos/Compressed(Boys)/kaam_chedna/MF9A1259.JPG"   class="img-fluid"></a>
            </div>
             <div class="col-sm-6 col-md-4 col-lg-3 col-xl-3 item" data-aos="fade" data-src="https://labdh.blob.core.windows.net/mnm2/Boys%20Side%20Photos/Semi-Compressed(Boys)/kaam_chedna/MF9A1261.JPG">
            <a href="#"><img src="https://labdh.blob.core.windows.net/mnm2/Boys%20Side%20Photos/Compressed(Boys)/kaam_chedna/MF9A1261.JPG"   class="img-fluid"></a>
            </div>
             <div class="col-sm-6 col-md-4 col-lg-3 col-xl-3 item" data-aos="fade" data-src="https://labdh.blob.core.windows.net/mnm2/Boys%20Side%20Photos/Semi-Compressed(Boys)/kaam_chedna/MF9A1263.JPG">
            <a href="#"><img src="https://labdh.blob.core.windows.net/mnm2/Boys%20Side%20Photos/Compressed(Boys)/kaam_chedna/MF9A1263.JPG"   class="img-fluid"></a>
            </div>
             <div class="col-sm-6 col-md-4 col-lg-3 col-xl-3 item" data-aos="fade" data-src="https://labdh.blob.core.windows.net/mnm2/Boys%20Side%20Photos/Semi-Compressed(Boys)/kaam_chedna/MF9A1264.JPG">
            <a href="#"><img src="https://labdh.blob.core.windows.net/mnm2/Boys%20Side%20Photos/Compressed(Boys)/kaam_chedna/MF9A1264.JPG"   class="img-fluid"></a>
            </div>
             <div class="col-sm-6 col-md-4 col-lg-3 col-xl-3 item" data-aos="fade" data-src="https://labdh.blob.core.windows.net/mnm2/Boys%20Side%20Photos/Semi-Compressed(Boys)/kaam_chedna/MF9A1265.JPG">
            <a href="#"><img src="https://labdh.blob.core.windows.net/mnm2/Boys%20Side%20Photos/Compressed(Boys)/kaam_chedna/MF9A1265.JPG"   class="img-fluid"></a>
            </div>
             <div class="col-sm-6 col-md-4 col-lg-3 col-xl-3 item" data-aos="fade" data-src="https://labdh.blob.core.windows.net/mnm2/Boys%20Side%20Photos/Semi-Compressed(Boys)/kaam_chedna/MF9A1267.JPG">
            <a href="#"><img src="https://labdh.blob.core.windows.net/mnm2/Boys%20Side%20Photos/Compressed(Boys)/kaam_chedna/MF9A1267.JPG"   class="img-fluid"></a>
            </div>
             <div class="col-sm-6 col-md-4 col-lg-3 col-xl-3 item" data-aos="fade" data-src="https://labdh.blob.core.windows.net/mnm2/Boys%20Side%20Photos/Semi-Compressed(Boys)/kaam_chedna/MF9A1268.JPG">
            <a href="#"><img src="https://labdh.blob.core.windows.net/mnm2/Boys%20Side%20Photos/Compressed(Boys)/kaam_chedna/MF9A1268.JPG"   class="img-fluid"></a>
            </div>
             <div class="col-sm-6 col-md-4 col-lg-3 col-xl-3 item" data-aos="fade" data-src="https://labdh.blob.core.windows.net/mnm2/Boys%20Side%20Photos/Semi-Compressed(Boys)/kaam_chedna/MF9A1269.JPG">
            <a href="#"><img src="https://labdh.blob.core.windows.net/mnm2/Boys%20Side%20Photos/Compressed(Boys)/kaam_chedna/MF9A1269.JPG"   class="img-fluid"></a>
            </div>
             <div class="col-sm-6 col-md-4 col-lg-3 col-xl-3 item" data-aos="fade" data-src="https://labdh.blob.core.windows.net/mnm2/Boys%20Side%20Photos/Semi-Compressed(Boys)/kaam_chedna/MF9A1270.JPG">
            <a href="#"><img src="https://labdh.blob.core.windows.net/mnm2/Boys%20Side%20Photos/Compressed(Boys)/kaam_chedna/MF9A1270.JPG"   class="img-fluid"></a>
            </div>
             <div class="col-sm-6 col-md-4 col-lg-3 col-xl-3 item" data-aos="fade" data-src="https://labdh.blob.core.windows.net/mnm2/Boys%20Side%20Photos/Semi-Compressed(Boys)/kaam_chedna/MF9A1271.JPG">
            <a href="#"><img src="https://labdh.blob.core.windows.net/mnm2/Boys%20Side%20Photos/Compressed(Boys)/kaam_chedna/MF9A1271.JPG"   class="img-fluid"></a>
            </div>
             <div class="col-sm-6 col-md-4 col-lg-3 col-xl-3 item" data-aos="fade" data-src="https://labdh.blob.core.windows.net/mnm2/Boys%20Side%20Photos/Semi-Compressed(Boys)/kaam_chedna/MF9A1272.JPG">
            <a href="#"><img src="https://labdh.blob.core.windows.net/mnm2/Boys%20Side%20Photos/Compressed(Boys)/kaam_chedna/MF9A1272.JPG"   class="img-fluid"></a>
            </div>
             <div class="col-sm-6 col-md-4 col-lg-3 col-xl-3 item" data-aos="fade" data-src="https://labdh.blob.core.windows.net/mnm2/Boys%20Side%20Photos/Semi-Compressed(Boys)/kaam_chedna/MF9A1273.JPG">
            <a href="#"><img src="https://labdh.blob.core.windows.net/mnm2/Boys%20Side%20Photos/Compressed(Boys)/kaam_chedna/MF9A1273.JPG"   class="img-fluid"></a>
            </div>
             <div class="col-sm-6 col-md-4 col-lg-3 col-xl-3 item" data-aos="fade" data-src="https://labdh.blob.core.windows.net/mnm2/Boys%20Side%20Photos/Semi-Compressed(Boys)/kaam_chedna/MF9A1277.JPG">
            <a href="#"><img src="https://labdh.blob.core.windows.net/mnm2/Boys%20Side%20Photos/Compressed(Boys)/kaam_chedna/MF9A1277.JPG"   class="img-fluid"></a>
            </div>
             <div class="col-sm-6 col-md-4 col-lg-3 col-xl-3 item" data-aos="fade" data-src="https://labdh.blob.core.windows.net/mnm2/Boys%20Side%20Photos/Semi-Compressed(Boys)/kaam_chedna/MF9A1278.JPG">
            <a href="#"><img src="https://labdh.blob.core.windows.net/mnm2/Boys%20Side%20Photos/Compressed(Boys)/kaam_chedna/MF9A1278.JPG"   class="img-fluid"></a>
            </div>
             <div class="col-sm-6 col-md-4 col-lg-3 col-xl-3 item" data-aos="fade" data-src="https://labdh.blob.core.windows.net/mnm2/Boys%20Side%20Photos/Semi-Compressed(Boys)/kaam_chedna/MF9A1280.JPG">
            <a href="#"><img src="https://labdh.blob.core.windows.net/mnm2/Boys%20Side%20Photos/Compressed(Boys)/kaam_chedna/MF9A1280.JPG"   class="img-fluid"></a>
            </div>
             <div class="col-sm-6 col-md-4 col-lg-3 col-xl-3 item" data-aos="fade" data-src="https://labdh.blob.core.windows.net/mnm2/Boys%20Side%20Photos/Semi-Compressed(Boys)/kaam_chedna/MF9A1281.JPG">
            <a href="#"><img src="https://labdh.blob.core.windows.net/mnm2/Boys%20Side%20Photos/Compressed(Boys)/kaam_chedna/MF9A1281.JPG"   class="img-fluid"></a>
            </div>
             <div class="col-sm-6 col-md-4 col-lg-3 col-xl-3 item" data-aos="fade" data-src="https://labdh.blob.core.windows.net/mnm2/Boys%20Side%20Photos/Semi-Compressed(Boys)/kaam_chedna/MF9A1282.JPG">
            <a href="#"><img src="https://labdh.blob.core.windows.net/mnm2/Boys%20Side%20Photos/Compressed(Boys)/kaam_chedna/MF9A1282.JPG"   class="img-fluid"></a>
            </div>
             <div class="col-sm-6 col-md-4 col-lg-3 col-xl-3 item" data-aos="fade" data-src="https://labdh.blob.core.windows.net/mnm2/Boys%20Side%20Photos/Semi-Compressed(Boys)/kaam_chedna/MF9A1285.JPG">
            <a href="#"><img src="https://labdh.blob.core.windows.net/mnm2/Boys%20Side%20Photos/Compressed(Boys)/kaam_chedna/MF9A1285.JPG"   class="img-fluid"></a>
            </div>
             <div class="col-sm-6 col-md-4 col-lg-3 col-xl-3 item" data-aos="fade" data-src="https://labdh.blob.core.windows.net/mnm2/Boys%20Side%20Photos/Semi-Compressed(Boys)/kaam_chedna/MF9A1287.JPG">
            <a href="#"><img src="https://labdh.blob.core.windows.net/mnm2/Boys%20Side%20Photos/Compressed(Boys)/kaam_chedna/MF9A1287.JPG"   class="img-fluid"></a>
            </div>
             <div class="col-sm-6 col-md-4 col-lg-3 col-xl-3 item" data-aos="fade" data-src="https://labdh.blob.core.windows.net/mnm2/Boys%20Side%20Photos/Semi-Compressed(Boys)/kaam_chedna/MF9A1289.JPG">
            <a href="#"><img src="https://labdh.blob.core.windows.net/mnm2/Boys%20Side%20Photos/Compressed(Boys)/kaam_chedna/MF9A1289.JPG"   class="img-fluid"></a>
            </div>
             <div class="col-sm-6 col-md-4 col-lg-3 col-xl-3 item" data-aos="fade" data-src="https://labdh.blob.core.windows.net/mnm2/Boys%20Side%20Photos/Semi-Compressed(Boys)/kaam_chedna/MF9A1294.JPG">
            <a href="#"><img src="https://labdh.blob.core.windows.net/mnm2/Boys%20Side%20Photos/Compressed(Boys)/kaam_chedna/MF9A1294.JPG"   class="img-fluid"></a>
            </div>
             <div class="col-sm-6 col-md-4 col-lg-3 col-xl-3 item" data-aos="fade" data-src="https://labdh.blob.core.windows.net/mnm2/Boys%20Side%20Photos/Semi-Compressed(Boys)/kaam_chedna/MF9A1295.JPG">
            <a href="#"><img src="https://labdh.blob.core.windows.net/mnm2/Boys%20Side%20Photos/Compressed(Boys)/kaam_chedna/MF9A1295.JPG"   class="img-fluid"></a>
            </div>
             <div class="col-sm-6 col-md-4 col-lg-3 col-xl-3 item" data-aos="fade" data-src="https://labdh.blob.core.windows.net/mnm2/Boys%20Side%20Photos/Semi-Compressed(Boys)/kaam_chedna/MF9A1301.JPG">
            <a href="#"><img src="https://labdh.blob.core.windows.net/mnm2/Boys%20Side%20Photos/Compressed(Boys)/kaam_chedna/MF9A1301.JPG"   class="img-fluid"></a>
            </div>
             <div class="col-sm-6 col-md-4 col-lg-3 col-xl-3 item" data-aos="fade" data-src="https://labdh.blob.core.windows.net/mnm2/Boys%20Side%20Photos/Semi-Compressed(Boys)/kaam_chedna/MF9A1302.JPG">
            <a href="#"><img src="https://labdh.blob.core.windows.net/mnm2/Boys%20Side%20Photos/Compressed(Boys)/kaam_chedna/MF9A1302.JPG"   class="img-fluid"></a>
            </div>
             <div class="col-sm-6 col-md-4 col-lg-3 col-xl-3 item" data-aos="fade" data-src="https://labdh.blob.core.windows.net/mnm2/Boys%20Side%20Photos/Semi-Compressed(Boys)/kaam_chedna/MF9A1304.JPG">
            <a href="#"><img src="https://labdh.blob.core.windows.net/mnm2/Boys%20Side%20Photos/Compressed(Boys)/kaam_chedna/MF9A1304.JPG"   class="img-fluid"></a>
            </div>
             <div class="col-sm-6 col-md-4 col-lg-3 col-xl-3 item" data-aos="fade" data-src="https://labdh.blob.core.windows.net/mnm2/Boys%20Side%20Photos/Semi-Compressed(Boys)/kaam_chedna/MF9A1306.JPG">
            <a href="#"><img src="https://labdh.blob.core.windows.net/mnm2/Boys%20Side%20Photos/Compressed(Boys)/kaam_chedna/MF9A1306.JPG"   class="img-fluid"></a>
            </div>
             <div class="col-sm-6 col-md-4 col-lg-3 col-xl-3 item" data-aos="fade" data-src="https://labdh.blob.core.windows.net/mnm2/Boys%20Side%20Photos/Semi-Compressed(Boys)/kaam_chedna/MF9A1307.JPG">
            <a href="#"><img src="https://labdh.blob.core.windows.net/mnm2/Boys%20Side%20Photos/Compressed(Boys)/kaam_chedna/MF9A1307.JPG"   class="img-fluid"></a>
            </div>
             <div class="col-sm-6 col-md-4 col-lg-3 col-xl-3 item" data-aos="fade" data-src="https://labdh.blob.core.windows.net/mnm2/Boys%20Side%20Photos/Semi-Compressed(Boys)/kaam_chedna/MF9A1308.JPG">
            <a href="#"><img src="https://labdh.blob.core.windows.net/mnm2/Boys%20Side%20Photos/Compressed(Boys)/kaam_chedna/MF9A1308.JPG"   class="img-fluid"></a>
            </div>
             <div class="col-sm-6 col-md-4 col-lg-3 col-xl-3 item" data-aos="fade" data-src="https://labdh.blob.core.windows.net/mnm2/Boys%20Side%20Photos/Semi-Compressed(Boys)/kaam_chedna/MF9A1309.JPG">
            <a href="#"><img src="https://labdh.blob.core.windows.net/mnm2/Boys%20Side%20Photos/Compressed(Boys)/kaam_chedna/MF9A1309.JPG"   class="img-fluid"></a>
            </div>
             <div class="col-sm-6 col-md-4 col-lg-3 col-xl-3 item" data-aos="fade" data-src="https://labdh.blob.core.windows.net/mnm2/Boys%20Side%20Photos/Semi-Compressed(Boys)/kaam_chedna/MF9A1311.JPG">
            <a href="#"><img src="https://labdh.blob.core.windows.net/mnm2/Boys%20Side%20Photos/Compressed(Boys)/kaam_chedna/MF9A1311.JPG"   class="img-fluid"></a>
            </div>
             <div class="col-sm-6 col-md-4 col-lg-3 col-xl-3 item" data-aos="fade" data-src="https://labdh.blob.core.windows.net/mnm2/Boys%20Side%20Photos/Semi-Compressed(Boys)/kaam_chedna/MF9A1312.JPG">
            <a href="#"><img src="https://labdh.blob.core.windows.net/mnm2/Boys%20Side%20Photos/Compressed(Boys)/kaam_chedna/MF9A1312.JPG"   class="img-fluid"></a>
            </div>
             <div class="col-sm-6 col-md-4 col-lg-3 col-xl-3 item" data-aos="fade" data-src="https://labdh.blob.core.windows.net/mnm2/Boys%20Side%20Photos/Semi-Compressed(Boys)/kaam_chedna/MF9A1317.JPG">
            <a href="#"><img src="https://labdh.blob.core.windows.net/mnm2/Boys%20Side%20Photos/Compressed(Boys)/kaam_chedna/MF9A1317.JPG"   class="img-fluid"></a>
            </div>
             <div class="col-sm-6 col-md-4 col-lg-3 col-xl-3 item" data-aos="fade" data-src="https://labdh.blob.core.windows.net/mnm2/Boys%20Side%20Photos/Semi-Compressed(Boys)/kaam_chedna/MF9A1319.JPG">
            <a href="#"><img src="https://labdh.blob.core.windows.net/mnm2/Boys%20Side%20Photos/Compressed(Boys)/kaam_chedna/MF9A1319.JPG"   class="img-fluid"></a>
            </div>
             <div class="col-sm-6 col-md-4 col-lg-3 col-xl-3 item" data-aos="fade" data-src="https://labdh.blob.core.windows.net/mnm2/Boys%20Side%20Photos/Semi-Compressed(Boys)/kaam_chedna/MF9A1320.JPG">
            <a href="#"><img src="https://labdh.blob.core.windows.net/mnm2/Boys%20Side%20Photos/Compressed(Boys)/kaam_chedna/MF9A1320.JPG"   class="img-fluid"></a>
            </div>
             <div class="col-sm-6 col-md-4 col-lg-3 col-xl-3 item" data-aos="fade" data-src="https://labdh.blob.core.windows.net/mnm2/Boys%20Side%20Photos/Semi-Compressed(Boys)/kaam_chedna/MF9A1322.JPG">
            <a href="#"><img src="https://labdh.blob.core.windows.net/mnm2/Boys%20Side%20Photos/Compressed(Boys)/kaam_chedna/MF9A1322.JPG"   class="img-fluid"></a>
            </div>
             <div class="col-sm-6 col-md-4 col-lg-3 col-xl-3 item" data-aos="fade" data-src="https://labdh.blob.core.windows.net/mnm2/Boys%20Side%20Photos/Semi-Compressed(Boys)/kaam_chedna/MF9A1325.JPG">
            <a href="#"><img src="https://labdh.blob.core.windows.net/mnm2/Boys%20Side%20Photos/Compressed(Boys)/kaam_chedna/MF9A1325.JPG"   class="img-fluid"></a>
            </div>
             <div class="col-sm-6 col-md-4 col-lg-3 col-xl-3 item" data-aos="fade" data-src="https://labdh.blob.core.windows.net/mnm2/Boys%20Side%20Photos/Semi-Compressed(Boys)/kaam_chedna/MF9A1326.JPG">
            <a href="#"><img src="https://labdh.blob.core.windows.net/mnm2/Boys%20Side%20Photos/Compressed(Boys)/kaam_chedna/MF9A1326.JPG"   class="img-fluid"></a>
            </div>
             <div class="col-sm-6 col-md-4 col-lg-3 col-xl-3 item" data-aos="fade" data-src="https://labdh.blob.core.windows.net/mnm2/Boys%20Side%20Photos/Semi-Compressed(Boys)/kaam_chedna/MF9A1327.JPG">
            <a href="#"><img src="https://labdh.blob.core.windows.net/mnm2/Boys%20Side%20Photos/Compressed(Boys)/kaam_chedna/MF9A1327.JPG"   class="img-fluid"></a>
            </div>
             <div class="col-sm-6 col-md-4 col-lg-3 col-xl-3 item" data-aos="fade" data-src="https://labdh.blob.core.windows.net/mnm2/Boys%20Side%20Photos/Semi-Compressed(Boys)/kaam_chedna/MF9A1328.JPG">
            <a href="#"><img src="https://labdh.blob.core.windows.net/mnm2/Boys%20Side%20Photos/Compressed(Boys)/kaam_chedna/MF9A1328.JPG"   class="img-fluid"></a>
            </div>
             <div class="col-sm-6 col-md-4 col-lg-3 col-xl-3 item" data-aos="fade" data-src="https://labdh.blob.core.windows.net/mnm2/Boys%20Side%20Photos/Semi-Compressed(Boys)/kaam_chedna/MF9A1329.JPG">
            <a href="#"><img src="https://labdh.blob.core.windows.net/mnm2/Boys%20Side%20Photos/Compressed(Boys)/kaam_chedna/MF9A1329.JPG"   class="img-fluid"></a>
            </div>
             <div class="col-sm-6 col-md-4 col-lg-3 col-xl-3 item" data-aos="fade" data-src="https://labdh.blob.core.windows.net/mnm2/Boys%20Side%20Photos/Semi-Compressed(Boys)/kaam_chedna/MF9A1331.JPG">
            <a href="#"><img src="https://labdh.blob.core.windows.net/mnm2/Boys%20Side%20Photos/Compressed(Boys)/kaam_chedna/MF9A1331.JPG"   class="img-fluid"></a>
            </div>
             <div class="col-sm-6 col-md-4 col-lg-3 col-xl-3 item" data-aos="fade" data-src="https://labdh.blob.core.windows.net/mnm2/Boys%20Side%20Photos/Semi-Compressed(Boys)/kaam_chedna/MF9A1332.JPG">
            <a href="#"><img src="https://labdh.blob.core.windows.net/mnm2/Boys%20Side%20Photos/Compressed(Boys)/kaam_chedna/MF9A1332.JPG"   class="img-fluid"></a>
            </div>
             <div class="col-sm-6 col-md-4 col-lg-3 col-xl-3 item" data-aos="fade" data-src="https://labdh.blob.core.windows.net/mnm2/Boys%20Side%20Photos/Semi-Compressed(Boys)/kaam_chedna/MF9A1333.JPG">
            <a href="#"><img src="https://labdh.blob.core.windows.net/mnm2/Boys%20Side%20Photos/Compressed(Boys)/kaam_chedna/MF9A1333.JPG"   class="img-fluid"></a>
            </div>
             <div class="col-sm-6 col-md-4 col-lg-3 col-xl-3 item" data-aos="fade" data-src="https://labdh.blob.core.windows.net/mnm2/Boys%20Side%20Photos/Semi-Compressed(Boys)/kaam_chedna/MF9A1334.JPG">
            <a href="#"><img src="https://labdh.blob.core.windows.net/mnm2/Boys%20Side%20Photos/Compressed(Boys)/kaam_chedna/MF9A1334.JPG"   class="img-fluid"></a>
            </div>
             <div class="col-sm-6 col-md-4 col-lg-3 col-xl-3 item" data-aos="fade" data-src="https://labdh.blob.core.windows.net/mnm2/Boys%20Side%20Photos/Semi-Compressed(Boys)/kaam_chedna/MF9A1335.JPG">
            <a href="#"><img src="https://labdh.blob.core.windows.net/mnm2/Boys%20Side%20Photos/Compressed(Boys)/kaam_chedna/MF9A1335.JPG"   class="img-fluid"></a>
            </div>
             <div class="col-sm-6 col-md-4 col-lg-3 col-xl-3 item" data-aos="fade" data-src="https://labdh.blob.core.windows.net/mnm2/Boys%20Side%20Photos/Semi-Compressed(Boys)/kaam_chedna/MF9A1336.JPG">
            <a href="#"><img src="https://labdh.blob.core.windows.net/mnm2/Boys%20Side%20Photos/Compressed(Boys)/kaam_chedna/MF9A1336.JPG"   class="img-fluid"></a>
            </div>
             <div class="col-sm-6 col-md-4 col-lg-3 col-xl-3 item" data-aos="fade" data-src="https://labdh.blob.core.windows.net/mnm2/Boys%20Side%20Photos/Semi-Compressed(Boys)/kaam_chedna/MF9A1339.JPG">
            <a href="#"><img src="https://labdh.blob.core.windows.net/mnm2/Boys%20Side%20Photos/Compressed(Boys)/kaam_chedna/MF9A1339.JPG"   class="img-fluid"></a>
            </div>
             <div class="col-sm-6 col-md-4 col-lg-3 col-xl-3 item" data-aos="fade" data-src="https://labdh.blob.core.windows.net/mnm2/Boys%20Side%20Photos/Semi-Compressed(Boys)/kaam_chedna/MF9A1341.JPG">
            <a href="#"><img src="https://labdh.blob.core.windows.net/mnm2/Boys%20Side%20Photos/Compressed(Boys)/kaam_chedna/MF9A1341.JPG"   class="img-fluid"></a>
            </div>
             <div class="col-sm-6 col-md-4 col-lg-3 col-xl-3 item" data-aos="fade" data-src="https://labdh.blob.core.windows.net/mnm2/Boys%20Side%20Photos/Semi-Compressed(Boys)/kaam_chedna/MF9A1342.JPG">
            <a href="#"><img src="https://labdh.blob.core.windows.net/mnm2/Boys%20Side%20Photos/Compressed(Boys)/kaam_chedna/MF9A1342.JPG"   class="img-fluid"></a>
            </div>
             <div class="col-sm-6 col-md-4 col-lg-3 col-xl-3 item" data-aos="fade" data-src="https://labdh.blob.core.windows.net/mnm2/Boys%20Side%20Photos/Semi-Compressed(Boys)/kaam_chedna/MF9A1343.JPG">
            <a href="#"><img src="https://labdh.blob.core.windows.net/mnm2/Boys%20Side%20Photos/Compressed(Boys)/kaam_chedna/MF9A1343.JPG"   class="img-fluid"></a>
            </div>
             <div class="col-sm-6 col-md-4 col-lg-3 col-xl-3 item" data-aos="fade" data-src="https://labdh.blob.core.windows.net/mnm2/Boys%20Side%20Photos/Semi-Compressed(Boys)/kaam_chedna/MF9A1346.JPG">
            <a href="#"><img src="https://labdh.blob.core.windows.net/mnm2/Boys%20Side%20Photos/Compressed(Boys)/kaam_chedna/MF9A1346.JPG"   class="img-fluid"></a>
            </div>
             <div class="col-sm-6 col-md-4 col-lg-3 col-xl-3 item" data-aos="fade" data-src="https://labdh.blob.core.windows.net/mnm2/Boys%20Side%20Photos/Semi-Compressed(Boys)/kaam_chedna/MF9A1348.JPG">
            <a href="#"><img src="https://labdh.blob.core.windows.net/mnm2/Boys%20Side%20Photos/Compressed(Boys)/kaam_chedna/MF9A1348.JPG"   class="img-fluid"></a>
            </div>
             <div class="col-sm-6 col-md-4 col-lg-3 col-xl-3 item" data-aos="fade" data-src="https://labdh.blob.core.windows.net/mnm2/Boys%20Side%20Photos/Semi-Compressed(Boys)/kaam_chedna/MF9A1349.JPG">
            <a href="#"><img src="https://labdh.blob.core.windows.net/mnm2/Boys%20Side%20Photos/Compressed(Boys)/kaam_chedna/MF9A1349.JPG"   class="img-fluid"></a>
            </div>
             <div class="col-sm-6 col-md-4 col-lg-3 col-xl-3 item" data-aos="fade" data-src="https://labdh.blob.core.windows.net/mnm2/Boys%20Side%20Photos/Semi-Compressed(Boys)/kaam_chedna/MF9A1350.JPG">
            <a href="#"><img src="https://labdh.blob.core.windows.net/mnm2/Boys%20Side%20Photos/Compressed(Boys)/kaam_chedna/MF9A1350.JPG"   class="img-fluid"></a>
            </div>
             <div class="col-sm-6 col-md-4 col-lg-3 col-xl-3 item" data-aos="fade" data-src="https://labdh.blob.core.windows.net/mnm2/Boys%20Side%20Photos/Semi-Compressed(Boys)/kaam_chedna/MF9A1351.JPG">
            <a href="#"><img src="https://labdh.blob.core.windows.net/mnm2/Boys%20Side%20Photos/Compressed(Boys)/kaam_chedna/MF9A1351.JPG"   class="img-fluid"></a>
            </div>
             <div class="col-sm-6 col-md-4 col-lg-3 col-xl-3 item" data-aos="fade" data-src="https://labdh.blob.core.windows.net/mnm2/Boys%20Side%20Photos/Semi-Compressed(Boys)/kaam_chedna/MF9A1353.JPG">
            <a href="#"><img src="https://labdh.blob.core.windows.net/mnm2/Boys%20Side%20Photos/Compressed(Boys)/kaam_chedna/MF9A1353.JPG"   class="img-fluid"></a>
            </div>
             <div class="col-sm-6 col-md-4 col-lg-3 col-xl-3 item" data-aos="fade" data-src="https://labdh.blob.core.windows.net/mnm2/Boys%20Side%20Photos/Semi-Compressed(Boys)/kaam_chedna/MF9A1354.JPG">
            <a href="#"><img src="https://labdh.blob.core.windows.net/mnm2/Boys%20Side%20Photos/Compressed(Boys)/kaam_chedna/MF9A1354.JPG"   class="img-fluid"></a>
            </div>
             <div class="col-sm-6 col-md-4 col-lg-3 col-xl-3 item" data-aos="fade" data-src="https://labdh.blob.core.windows.net/mnm2/Boys%20Side%20Photos/Semi-Compressed(Boys)/kaam_chedna/MF9A1356.JPG">
            <a href="#"><img src="https://labdh.blob.core.windows.net/mnm2/Boys%20Side%20Photos/Compressed(Boys)/kaam_chedna/MF9A1356.JPG"   class="img-fluid"></a>
            </div>
             <div class="col-sm-6 col-md-4 col-lg-3 col-xl-3 item" data-aos="fade" data-src="https://labdh.blob.core.windows.net/mnm2/Boys%20Side%20Photos/Semi-Compressed(Boys)/kaam_chedna/MF9A1358.JPG">
            <a href="#"><img src="https://labdh.blob.core.windows.net/mnm2/Boys%20Side%20Photos/Compressed(Boys)/kaam_chedna/MF9A1358.JPG"   class="img-fluid"></a>
            </div>
             <div class="col-sm-6 col-md-4 col-lg-3 col-xl-3 item" data-aos="fade" data-src="https://labdh.blob.core.windows.net/mnm2/Boys%20Side%20Photos/Semi-Compressed(Boys)/kaam_chedna/MF9A1359.JPG">
            <a href="#"><img src="https://labdh.blob.core.windows.net/mnm2/Boys%20Side%20Photos/Compressed(Boys)/kaam_chedna/MF9A1359.JPG"   class="img-fluid"></a>
            </div>
             <div class="col-sm-6 col-md-4 col-lg-3 col-xl-3 item" data-aos="fade" data-src="https://labdh.blob.core.windows.net/mnm2/Boys%20Side%20Photos/Semi-Compressed(Boys)/kaam_chedna/MF9A1361.JPG">
            <a href="#"><img src="https://labdh.blob.core.windows.net/mnm2/Boys%20Side%20Photos/Compressed(Boys)/kaam_chedna/MF9A1361.JPG"   class="img-fluid"></a>
            </div>
             <div class="col-sm-6 col-md-4 col-lg-3 col-xl-3 item" data-aos="fade" data-src="https://labdh.blob.core.windows.net/mnm2/Boys%20Side%20Photos/Semi-Compressed(Boys)/kaam_chedna/MF9A1362.JPG">
            <a href="#"><img src="https://labdh.blob.core.windows.net/mnm2/Boys%20Side%20Photos/Compressed(Boys)/kaam_chedna/MF9A1362.JPG"   class="img-fluid"></a>
            </div>
             <div class="col-sm-6 col-md-4 col-lg-3 col-xl-3 item" data-aos="fade" data-src="https://labdh.blob.core.windows.net/mnm2/Boys%20Side%20Photos/Semi-Compressed(Boys)/kaam_chedna/MF9A1368.JPG">
            <a href="#"><img src="https://labdh.blob.core.windows.net/mnm2/Boys%20Side%20Photos/Compressed(Boys)/kaam_chedna/MF9A1368.JPG"   class="img-fluid"></a>
            </div>
             <div class="col-sm-6 col-md-4 col-lg-3 col-xl-3 item" data-aos="fade" data-src="https://labdh.blob.core.windows.net/mnm2/Boys%20Side%20Photos/Semi-Compressed(Boys)/kaam_chedna/MF9A1369.JPG">
            <a href="#"><img src="https://labdh.blob.core.windows.net/mnm2/Boys%20Side%20Photos/Compressed(Boys)/kaam_chedna/MF9A1369.JPG"   class="img-fluid"></a>
            </div>
             <div class="col-sm-6 col-md-4 col-lg-3 col-xl-3 item" data-aos="fade" data-src="https://labdh.blob.core.windows.net/mnm2/Boys%20Side%20Photos/Semi-Compressed(Boys)/kaam_chedna/MF9A1370.JPG">
            <a href="#"><img src="https://labdh.blob.core.windows.net/mnm2/Boys%20Side%20Photos/Compressed(Boys)/kaam_chedna/MF9A1370.JPG"   class="img-fluid"></a>
            </div>
             <div class="col-sm-6 col-md-4 col-lg-3 col-xl-3 item" data-aos="fade" data-src="https://labdh.blob.core.windows.net/mnm2/Boys%20Side%20Photos/Semi-Compressed(Boys)/kaam_chedna/MF9A1373.JPG">
            <a href="#"><img src="https://labdh.blob.core.windows.net/mnm2/Boys%20Side%20Photos/Compressed(Boys)/kaam_chedna/MF9A1373.JPG"   class="img-fluid"></a>
            </div>
             
<!-- 
          <div class="col-sm-6 col-md-4 col-lg-3 col-xl-3 item" data-aos="fade" data-src="images/big-images/nature_big_9.jpg" data-sub-html="<h4>Fading Light</h4><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laboriosam, unde quis minus ex impedit necessitatibus nostrum, neque veniam repellat officiis!</p>">
            <a href="#"><img src="images/nature_small_9.jpg"   class="img-fluid"></a>
          </div>
          <div class="col-sm-6 col-md-4 col-lg-3 col-xl-3 item" data-aos="fade" data-src="images/big-images/nature_big_8.jpg" data-sub-html="<h4>Fading Light</h4><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vel eveniet sequi assumenda deserunt ab, tempora commodi autem debitis iusto sed.</p>">
            <a href="#"><img src="images/nature_small_8.jpg"   class="img-fluid"></a>
          </div>
          <div class="col-sm-6 col-md-4 col-lg-3 col-xl-3 item" data-aos="fade" data-src="images/big-images/nature_big_7.jpg" data-sub-html="<h4>Fading Light</h4><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempore, quasi, pariatur. Minima provident repellat cum, impedit, nemo exercitationem distinctio consequuntur.</p>">
            <a href="#"><img src="images/nature_small_7.jpg"   class="img-fluid"></a>
          </div>
          <div class="col-sm-6 col-md-4 col-lg-3 col-xl-3 item" data-aos="fade" data-src="images/big-images/nature_big_6.jpg" data-sub-html="<h4>Fading Light</h4><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellendus nostrum expedita consequatur rerum laboriosam tempore nisi autem animi eveniet perspiciatis.</p>">
            <a href="#"><img src="images/nature_small_6.jpg"   class="img-fluid"></a>
          </div>
          <div class="col-sm-6 col-md-4 col-lg-3 col-xl-3 item" data-aos="fade" data-src="images/big-images/nature_big_5.jpg" data-sub-html="<h4>Fading Light</h4><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eaque consectetur error deserunt facilis facere, consequatur at officia quae culpa voluptatibus!</p>">
            <a href="#"><img src="images/nature_small_5.jpg"   class="img-fluid"></a>
          </div>
          <div class="col-sm-6 col-md-4 col-lg-3 col-xl-3 item" data-aos="fade" data-src="images/big-images/nature_big_4.jpg" data-sub-html="<h4>Fading Light</h4><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corrupti minima porro, hic dolores. Ab, doloremque facilis numquam, ipsa repellendus voluptas.</p>">
            <a href="#"><img src="images/nature_small_4.jpg"   class="img-fluid"></a>
          </div>

          <div class="col-sm-6 col-md-4 col-lg-3 col-xl-3 item" data-aos="fade" data-src="images/big-images/nature_big_3.jpg" data-sub-html="<h4>Fading Light</h4><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Distinctio, dolor alias. Dignissimos hic voluptatibus dolorum expedita recusandae, consequatur distinctio est.</p>">
            <a href="#"><img src="images/nature_small_3.jpg"   class="img-fluid"></a>
          </div>
          <div class="col-sm-6 col-md-4 col-lg-3 col-xl-3 item" data-aos="fade" data-src="images/big-images/nature_big_2.jpg" data-sub-html="<h4>Fading Light</h4><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rerum similique, dolore esse quaerat incidunt ullam sit neque laboriosam velit quas.</p>">
            <a href="#"><img src="images/nature_small_2.jpg"   class="img-fluid"></a>
          </div>
          <div class="col-sm-6 col-md-4 col-lg-3 col-xl-3 item" data-aos="fade" data-src="images/big-images/nature_big_1.jpg" data-sub-html="<h4>Fading Light</h4><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem tempora deleniti, consectetur quisquam labore vitae quod quae debitis hic ab!</p>">
            <a href="#"><img src="images/nature_small_1.jpg"   class="img-fluid"></a>
          </div> -->

        </div>
      </div>
    </div>

    <div class="footer py-4">
      <div class="container-fluid text-center">
        <p>
          <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
          Developed By Labdh Purohit <i class="icon-heart-o" aria-hidden="true"></i>
          <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
        </p>
      </div>
    </div>

    

    
    
  </div>

  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/jquery-ui.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/jquery.countdown.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/bootstrap-datepicker.min.js"></script>
  <script src="js/swiper.min.js"></script>
  <script src="js/aos.js"></script>

  <script src="js/picturefill.min.js"></script>
  <script src="js/lightgallery-all.min.js"></script>
  <script src="js/jquery.mousewheel.min.js"></script>

  <script src="js/main.js"></script>
  
  <script>
    $(document).ready(function(){
      $('#lightgallery').lightGallery();
    });
  </script>

</body>
</html>
