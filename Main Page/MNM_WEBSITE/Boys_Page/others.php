<!DOCTYPE html>
<html lang="en">
<head>
  <title>Others</title>
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
<?php
    session_start();
    if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
        // User is not logged in, redirect to login page
        header("Location: http://localhost/MONADIDIMAIN/index.php");
        exit;
    }
    ?>
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
                <h2 class="site-section-heading text-center">Others</h2>
              </div>
            </div>
          </div>

        </div>
        <div class="row" id="lightgallery">

          <div class="col-sm-6 col-md-4 col-lg-3 col-xl-3 item" data-aos="fade" data-src="https://labdh.blob.core.windows.net/mnm2/Boys%20Side%20Photos/Semi-Compressed(Boys)/others/IMG_9617.JPG">
            <a href="#"><img src="https://labdh.blob.core.windows.net/mnm2/Boys%20Side%20Photos/Compressed(Boys)/others/IMG_9617.JPG"   class="img-fluid"></a>
            </div>
             <div class="col-sm-6 col-md-4 col-lg-3 col-xl-3 item" data-aos="fade" data-src="https://labdh.blob.core.windows.net/mnm2/Boys%20Side%20Photos/Semi-Compressed(Boys)/others/IMG_9618.JPG">
            <a href="#"><img src="https://labdh.blob.core.windows.net/mnm2/Boys%20Side%20Photos/Compressed(Boys)/others/IMG_9618.JPG"   class="img-fluid"></a>
            </div>
             <div class="col-sm-6 col-md-4 col-lg-3 col-xl-3 item" data-aos="fade" data-src="https://labdh.blob.core.windows.net/mnm2/Boys%20Side%20Photos/Semi-Compressed(Boys)/others/IMG_9619.JPG">
            <a href="#"><img src="https://labdh.blob.core.windows.net/mnm2/Boys%20Side%20Photos/Compressed(Boys)/others/IMG_9619.JPG"   class="img-fluid"></a>
            </div>
             <div class="col-sm-6 col-md-4 col-lg-3 col-xl-3 item" data-aos="fade" data-src="https://labdh.blob.core.windows.net/mnm2/Boys%20Side%20Photos/Semi-Compressed(Boys)/others/IMG_9620.JPG">
            <a href="#"><img src="https://labdh.blob.core.windows.net/mnm2/Boys%20Side%20Photos/Compressed(Boys)/others/IMG_9620.JPG"   class="img-fluid"></a>
            </div>
             <div class="col-sm-6 col-md-4 col-lg-3 col-xl-3 item" data-aos="fade" data-src="https://labdh.blob.core.windows.net/mnm2/Boys%20Side%20Photos/Semi-Compressed(Boys)/others/IMG_9621.JPG">
            <a href="#"><img src="https://labdh.blob.core.windows.net/mnm2/Boys%20Side%20Photos/Compressed(Boys)/others/IMG_9621.JPG"   class="img-fluid"></a>
            </div>
             <div class="col-sm-6 col-md-4 col-lg-3 col-xl-3 item" data-aos="fade" data-src="https://labdh.blob.core.windows.net/mnm2/Boys%20Side%20Photos/Semi-Compressed(Boys)/others/IMG_9622.JPG">
            <a href="#"><img src="https://labdh.blob.core.windows.net/mnm2/Boys%20Side%20Photos/Compressed(Boys)/others/IMG_9622.JPG"   class="img-fluid"></a>
            </div>
             <div class="col-sm-6 col-md-4 col-lg-3 col-xl-3 item" data-aos="fade" data-src="https://labdh.blob.core.windows.net/mnm2/Boys%20Side%20Photos/Semi-Compressed(Boys)/others/IMG_9623.JPG">
            <a href="#"><img src="https://labdh.blob.core.windows.net/mnm2/Boys%20Side%20Photos/Compressed(Boys)/others/IMG_9623.JPG"   class="img-fluid"></a>
            </div>
             <div class="col-sm-6 col-md-4 col-lg-3 col-xl-3 item" data-aos="fade" data-src="https://labdh.blob.core.windows.net/mnm2/Boys%20Side%20Photos/Semi-Compressed(Boys)/others/IMG_9624.JPG">
            <a href="#"><img src="https://labdh.blob.core.windows.net/mnm2/Boys%20Side%20Photos/Compressed(Boys)/others/IMG_9624.JPG"   class="img-fluid"></a>
            </div>
             <div class="col-sm-6 col-md-4 col-lg-3 col-xl-3 item" data-aos="fade" data-src="https://labdh.blob.core.windows.net/mnm2/Boys%20Side%20Photos/Semi-Compressed(Boys)/others/IMG_9625.JPG">
            <a href="#"><img src="https://labdh.blob.core.windows.net/mnm2/Boys%20Side%20Photos/Compressed(Boys)/others/IMG_9625.JPG"   class="img-fluid"></a>
            </div>
             <div class="col-sm-6 col-md-4 col-lg-3 col-xl-3 item" data-aos="fade" data-src="https://labdh.blob.core.windows.net/mnm2/Boys%20Side%20Photos/Semi-Compressed(Boys)/others/IMG_9626.JPG">
            <a href="#"><img src="https://labdh.blob.core.windows.net/mnm2/Boys%20Side%20Photos/Compressed(Boys)/others/IMG_9626.JPG"   class="img-fluid"></a>
            </div>
             <div class="col-sm-6 col-md-4 col-lg-3 col-xl-3 item" data-aos="fade" data-src="https://labdh.blob.core.windows.net/mnm2/Boys%20Side%20Photos/Semi-Compressed(Boys)/others/IMG_9627.JPG">
            <a href="#"><img src="https://labdh.blob.core.windows.net/mnm2/Boys%20Side%20Photos/Compressed(Boys)/others/IMG_9627.JPG"   class="img-fluid"></a>
            </div>
             <div class="col-sm-6 col-md-4 col-lg-3 col-xl-3 item" data-aos="fade" data-src="https://labdh.blob.core.windows.net/mnm2/Boys%20Side%20Photos/Semi-Compressed(Boys)/others/IMG_9628.JPG">
            <a href="#"><img src="https://labdh.blob.core.windows.net/mnm2/Boys%20Side%20Photos/Compressed(Boys)/others/IMG_9628.JPG"   class="img-fluid"></a>
            </div>
             <div class="col-sm-6 col-md-4 col-lg-3 col-xl-3 item" data-aos="fade" data-src="https://labdh.blob.core.windows.net/mnm2/Boys%20Side%20Photos/Semi-Compressed(Boys)/others/IMG_9629.JPG">
            <a href="#"><img src="https://labdh.blob.core.windows.net/mnm2/Boys%20Side%20Photos/Compressed(Boys)/others/IMG_9629.JPG"   class="img-fluid"></a>
            </div>
             <div class="col-sm-6 col-md-4 col-lg-3 col-xl-3 item" data-aos="fade" data-src="https://labdh.blob.core.windows.net/mnm2/Boys%20Side%20Photos/Semi-Compressed(Boys)/others/IMG_9630.JPG">
            <a href="#"><img src="https://labdh.blob.core.windows.net/mnm2/Boys%20Side%20Photos/Compressed(Boys)/others/IMG_9630.JPG"   class="img-fluid"></a>
            </div>
             <div class="col-sm-6 col-md-4 col-lg-3 col-xl-3 item" data-aos="fade" data-src="https://labdh.blob.core.windows.net/mnm2/Boys%20Side%20Photos/Semi-Compressed(Boys)/others/IMG_9631.JPG">
            <a href="#"><img src="https://labdh.blob.core.windows.net/mnm2/Boys%20Side%20Photos/Compressed(Boys)/others/IMG_9631.JPG"   class="img-fluid"></a>
            </div>
             <div class="col-sm-6 col-md-4 col-lg-3 col-xl-3 item" data-aos="fade" data-src="https://labdh.blob.core.windows.net/mnm2/Boys%20Side%20Photos/Semi-Compressed(Boys)/others/IMG_9632.JPG">
            <a href="#"><img src="https://labdh.blob.core.windows.net/mnm2/Boys%20Side%20Photos/Compressed(Boys)/others/IMG_9632.JPG"   class="img-fluid"></a>
            </div>
             <div class="col-sm-6 col-md-4 col-lg-3 col-xl-3 item" data-aos="fade" data-src="https://labdh.blob.core.windows.net/mnm2/Boys%20Side%20Photos/Semi-Compressed(Boys)/others/IMG_9633.JPG">
            <a href="#"><img src="https://labdh.blob.core.windows.net/mnm2/Boys%20Side%20Photos/Compressed(Boys)/others/IMG_9633.JPG"   class="img-fluid"></a>
            </div>
             <div class="col-sm-6 col-md-4 col-lg-3 col-xl-3 item" data-aos="fade" data-src="https://labdh.blob.core.windows.net/mnm2/Boys%20Side%20Photos/Semi-Compressed(Boys)/others/IMG_9634.JPG">
            <a href="#"><img src="https://labdh.blob.core.windows.net/mnm2/Boys%20Side%20Photos/Compressed(Boys)/others/IMG_9634.JPG"   class="img-fluid"></a>
            </div>
             <div class="col-sm-6 col-md-4 col-lg-3 col-xl-3 item" data-aos="fade" data-src="https://labdh.blob.core.windows.net/mnm2/Boys%20Side%20Photos/Semi-Compressed(Boys)/others/IMG_9635.JPG">
            <a href="#"><img src="https://labdh.blob.core.windows.net/mnm2/Boys%20Side%20Photos/Compressed(Boys)/others/IMG_9635.JPG"   class="img-fluid"></a>
            </div>
             <div class="col-sm-6 col-md-4 col-lg-3 col-xl-3 item" data-aos="fade" data-src="https://labdh.blob.core.windows.net/mnm2/Boys%20Side%20Photos/Semi-Compressed(Boys)/others/IMG_9636.JPG">
            <a href="#"><img src="https://labdh.blob.core.windows.net/mnm2/Boys%20Side%20Photos/Compressed(Boys)/others/IMG_9636.JPG"   class="img-fluid"></a>
            </div>
             <div class="col-sm-6 col-md-4 col-lg-3 col-xl-3 item" data-aos="fade" data-src="https://labdh.blob.core.windows.net/mnm2/Boys%20Side%20Photos/Semi-Compressed(Boys)/others/IMG_9637.JPG">
            <a href="#"><img src="https://labdh.blob.core.windows.net/mnm2/Boys%20Side%20Photos/Compressed(Boys)/others/IMG_9637.JPG"   class="img-fluid"></a>
            </div>
             <div class="col-sm-6 col-md-4 col-lg-3 col-xl-3 item" data-aos="fade" data-src="https://labdh.blob.core.windows.net/mnm2/Boys%20Side%20Photos/Semi-Compressed(Boys)/others/IMG_9638.JPG">
            <a href="#"><img src="https://labdh.blob.core.windows.net/mnm2/Boys%20Side%20Photos/Compressed(Boys)/others/IMG_9638.JPG"   class="img-fluid"></a>
            </div>
             <div class="col-sm-6 col-md-4 col-lg-3 col-xl-3 item" data-aos="fade" data-src="https://labdh.blob.core.windows.net/mnm2/Boys%20Side%20Photos/Semi-Compressed(Boys)/others/IMG_9639.JPG">
            <a href="#"><img src="https://labdh.blob.core.windows.net/mnm2/Boys%20Side%20Photos/Compressed(Boys)/others/IMG_9639.JPG"   class="img-fluid"></a>
            </div>
             <div class="col-sm-6 col-md-4 col-lg-3 col-xl-3 item" data-aos="fade" data-src="https://labdh.blob.core.windows.net/mnm2/Boys%20Side%20Photos/Semi-Compressed(Boys)/others/IMG_9640.JPG">
            <a href="#"><img src="https://labdh.blob.core.windows.net/mnm2/Boys%20Side%20Photos/Compressed(Boys)/others/IMG_9640.JPG"   class="img-fluid"></a>
            </div>
             <div class="col-sm-6 col-md-4 col-lg-3 col-xl-3 item" data-aos="fade" data-src="https://labdh.blob.core.windows.net/mnm2/Boys%20Side%20Photos/Semi-Compressed(Boys)/others/IMG_9641.JPG">
            <a href="#"><img src="https://labdh.blob.core.windows.net/mnm2/Boys%20Side%20Photos/Compressed(Boys)/others/IMG_9641.JPG"   class="img-fluid"></a>
            </div>
             <div class="col-sm-6 col-md-4 col-lg-3 col-xl-3 item" data-aos="fade" data-src="https://labdh.blob.core.windows.net/mnm2/Boys%20Side%20Photos/Semi-Compressed(Boys)/others/IMG_9642.JPG">
            <a href="#"><img src="https://labdh.blob.core.windows.net/mnm2/Boys%20Side%20Photos/Compressed(Boys)/others/IMG_9642.JPG"   class="img-fluid"></a>
            </div>
             <div class="col-sm-6 col-md-4 col-lg-3 col-xl-3 item" data-aos="fade" data-src="https://labdh.blob.core.windows.net/mnm2/Boys%20Side%20Photos/Semi-Compressed(Boys)/others/IMG_9643.JPG">
            <a href="#"><img src="https://labdh.blob.core.windows.net/mnm2/Boys%20Side%20Photos/Compressed(Boys)/others/IMG_9643.JPG"   class="img-fluid"></a>
            </div>
             <div class="col-sm-6 col-md-4 col-lg-3 col-xl-3 item" data-aos="fade" data-src="https://labdh.blob.core.windows.net/mnm2/Boys%20Side%20Photos/Semi-Compressed(Boys)/others/IMG_9645.JPG">
            <a href="#"><img src="https://labdh.blob.core.windows.net/mnm2/Boys%20Side%20Photos/Compressed(Boys)/others/IMG_9645.JPG"   class="img-fluid"></a>
            </div>
             <div class="col-sm-6 col-md-4 col-lg-3 col-xl-3 item" data-aos="fade" data-src="https://labdh.blob.core.windows.net/mnm2/Boys%20Side%20Photos/Semi-Compressed(Boys)/others/IMG_9647.JPG">
            <a href="#"><img src="https://labdh.blob.core.windows.net/mnm2/Boys%20Side%20Photos/Compressed(Boys)/others/IMG_9647.JPG"   class="img-fluid"></a>
            </div>
             <div class="col-sm-6 col-md-4 col-lg-3 col-xl-3 item" data-aos="fade" data-src="https://labdh.blob.core.windows.net/mnm2/Boys%20Side%20Photos/Semi-Compressed(Boys)/others/IMG_9648.JPG">
            <a href="#"><img src="https://labdh.blob.core.windows.net/mnm2/Boys%20Side%20Photos/Compressed(Boys)/others/IMG_9648.JPG"   class="img-fluid"></a>
            </div>
             <div class="col-sm-6 col-md-4 col-lg-3 col-xl-3 item" data-aos="fade" data-src="https://labdh.blob.core.windows.net/mnm2/Boys%20Side%20Photos/Semi-Compressed(Boys)/others/IMG_9649.JPG">
            <a href="#"><img src="https://labdh.blob.core.windows.net/mnm2/Boys%20Side%20Photos/Compressed(Boys)/others/IMG_9649.JPG"   class="img-fluid"></a>
            </div>
             <div class="col-sm-6 col-md-4 col-lg-3 col-xl-3 item" data-aos="fade" data-src="https://labdh.blob.core.windows.net/mnm2/Boys%20Side%20Photos/Semi-Compressed(Boys)/others/IMG_9650.JPG">
            <a href="#"><img src="https://labdh.blob.core.windows.net/mnm2/Boys%20Side%20Photos/Compressed(Boys)/others/IMG_9650.JPG"   class="img-fluid"></a>
            </div>
             <div class="col-sm-6 col-md-4 col-lg-3 col-xl-3 item" data-aos="fade" data-src="https://labdh.blob.core.windows.net/mnm2/Boys%20Side%20Photos/Semi-Compressed(Boys)/others/IMG_9651.JPG">
            <a href="#"><img src="https://labdh.blob.core.windows.net/mnm2/Boys%20Side%20Photos/Compressed(Boys)/others/IMG_9651.JPG"   class="img-fluid"></a>
            </div>
             <div class="col-sm-6 col-md-4 col-lg-3 col-xl-3 item" data-aos="fade" data-src="https://labdh.blob.core.windows.net/mnm2/Boys%20Side%20Photos/Semi-Compressed(Boys)/others/IMG_9652.JPG">
            <a href="#"><img src="https://labdh.blob.core.windows.net/mnm2/Boys%20Side%20Photos/Compressed(Boys)/others/IMG_9652.JPG"   class="img-fluid"></a>
            </div>
             <div class="col-sm-6 col-md-4 col-lg-3 col-xl-3 item" data-aos="fade" data-src="https://labdh.blob.core.windows.net/mnm2/Boys%20Side%20Photos/Semi-Compressed(Boys)/others/IMG_9653.JPG">
            <a href="#"><img src="https://labdh.blob.core.windows.net/mnm2/Boys%20Side%20Photos/Compressed(Boys)/others/IMG_9653.JPG"   class="img-fluid"></a>
            </div>
             <div class="col-sm-6 col-md-4 col-lg-3 col-xl-3 item" data-aos="fade" data-src="https://labdh.blob.core.windows.net/mnm2/Boys%20Side%20Photos/Semi-Compressed(Boys)/others/IMG_9654.JPG">
            <a href="#"><img src="https://labdh.blob.core.windows.net/mnm2/Boys%20Side%20Photos/Compressed(Boys)/others/IMG_9654.JPG"   class="img-fluid"></a>
            </div>
             <div class="col-sm-6 col-md-4 col-lg-3 col-xl-3 item" data-aos="fade" data-src="https://labdh.blob.core.windows.net/mnm2/Boys%20Side%20Photos/Semi-Compressed(Boys)/others/IMG_9655.JPG">
            <a href="#"><img src="https://labdh.blob.core.windows.net/mnm2/Boys%20Side%20Photos/Compressed(Boys)/others/IMG_9655.JPG"   class="img-fluid"></a>
            </div>
             <div class="col-sm-6 col-md-4 col-lg-3 col-xl-3 item" data-aos="fade" data-src="https://labdh.blob.core.windows.net/mnm2/Boys%20Side%20Photos/Semi-Compressed(Boys)/others/IMG_9656.JPG">
            <a href="#"><img src="https://labdh.blob.core.windows.net/mnm2/Boys%20Side%20Photos/Compressed(Boys)/others/IMG_9656.JPG"   class="img-fluid"></a>
            </div>
             <div class="col-sm-6 col-md-4 col-lg-3 col-xl-3 item" data-aos="fade" data-src="https://labdh.blob.core.windows.net/mnm2/Boys%20Side%20Photos/Semi-Compressed(Boys)/others/IMG_9657.JPG">
            <a href="#"><img src="https://labdh.blob.core.windows.net/mnm2/Boys%20Side%20Photos/Compressed(Boys)/others/IMG_9657.JPG"   class="img-fluid"></a>
            </div>
             <div class="col-sm-6 col-md-4 col-lg-3 col-xl-3 item" data-aos="fade" data-src="https://labdh.blob.core.windows.net/mnm2/Boys%20Side%20Photos/Semi-Compressed(Boys)/others/IMG_9658.JPG">
            <a href="#"><img src="https://labdh.blob.core.windows.net/mnm2/Boys%20Side%20Photos/Compressed(Boys)/others/IMG_9658.JPG"   class="img-fluid"></a>
            </div>
             <div class="col-sm-6 col-md-4 col-lg-3 col-xl-3 item" data-aos="fade" data-src="https://labdh.blob.core.windows.net/mnm2/Boys%20Side%20Photos/Semi-Compressed(Boys)/others/IMG_9659.JPG">
            <a href="#"><img src="https://labdh.blob.core.windows.net/mnm2/Boys%20Side%20Photos/Compressed(Boys)/others/IMG_9659.JPG"   class="img-fluid"></a>
            </div>
             <div class="col-sm-6 col-md-4 col-lg-3 col-xl-3 item" data-aos="fade" data-src="https://labdh.blob.core.windows.net/mnm2/Boys%20Side%20Photos/Semi-Compressed(Boys)/others/IMG_9660.JPG">
            <a href="#"><img src="https://labdh.blob.core.windows.net/mnm2/Boys%20Side%20Photos/Compressed(Boys)/others/IMG_9660.JPG"   class="img-fluid"></a>
            </div>
             <div class="col-sm-6 col-md-4 col-lg-3 col-xl-3 item" data-aos="fade" data-src="https://labdh.blob.core.windows.net/mnm2/Boys%20Side%20Photos/Semi-Compressed(Boys)/others/IMG_9661.JPG">
            <a href="#"><img src="https://labdh.blob.core.windows.net/mnm2/Boys%20Side%20Photos/Compressed(Boys)/others/IMG_9661.JPG"   class="img-fluid"></a>
            </div>
             <div class="col-sm-6 col-md-4 col-lg-3 col-xl-3 item" data-aos="fade" data-src="https://labdh.blob.core.windows.net/mnm2/Boys%20Side%20Photos/Semi-Compressed(Boys)/others/IMG_9662.JPG">
            <a href="#"><img src="https://labdh.blob.core.windows.net/mnm2/Boys%20Side%20Photos/Compressed(Boys)/others/IMG_9662.JPG"   class="img-fluid"></a>
            </div>
             <div class="col-sm-6 col-md-4 col-lg-3 col-xl-3 item" data-aos="fade" data-src="https://labdh.blob.core.windows.net/mnm2/Boys%20Side%20Photos/Semi-Compressed(Boys)/others/IMG_9663.JPG">
            <a href="#"><img src="https://labdh.blob.core.windows.net/mnm2/Boys%20Side%20Photos/Compressed(Boys)/others/IMG_9663.JPG"   class="img-fluid"></a>
            </div>
             <div class="col-sm-6 col-md-4 col-lg-3 col-xl-3 item" data-aos="fade" data-src="https://labdh.blob.core.windows.net/mnm2/Boys%20Side%20Photos/Semi-Compressed(Boys)/others/IMG_9664.JPG">
            <a href="#"><img src="https://labdh.blob.core.windows.net/mnm2/Boys%20Side%20Photos/Compressed(Boys)/others/IMG_9664.JPG"   class="img-fluid"></a>
            </div>
             <div class="col-sm-6 col-md-4 col-lg-3 col-xl-3 item" data-aos="fade" data-src="https://labdh.blob.core.windows.net/mnm2/Boys%20Side%20Photos/Semi-Compressed(Boys)/others/IMG_9665.JPG">
            <a href="#"><img src="https://labdh.blob.core.windows.net/mnm2/Boys%20Side%20Photos/Compressed(Boys)/others/IMG_9665.JPG"   class="img-fluid"></a>
            </div>
             <div class="col-sm-6 col-md-4 col-lg-3 col-xl-3 item" data-aos="fade" data-src="https://labdh.blob.core.windows.net/mnm2/Boys%20Side%20Photos/Semi-Compressed(Boys)/others/IMG_9666.JPG">
            <a href="#"><img src="https://labdh.blob.core.windows.net/mnm2/Boys%20Side%20Photos/Compressed(Boys)/others/IMG_9666.JPG"   class="img-fluid"></a>
            </div>
             <div class="col-sm-6 col-md-4 col-lg-3 col-xl-3 item" data-aos="fade" data-src="https://labdh.blob.core.windows.net/mnm2/Boys%20Side%20Photos/Semi-Compressed(Boys)/others/IMG_9667.JPG">
            <a href="#"><img src="https://labdh.blob.core.windows.net/mnm2/Boys%20Side%20Photos/Compressed(Boys)/others/IMG_9667.JPG"   class="img-fluid"></a>
            </div>
             <div class="col-sm-6 col-md-4 col-lg-3 col-xl-3 item" data-aos="fade" data-src="https://labdh.blob.core.windows.net/mnm2/Boys%20Side%20Photos/Semi-Compressed(Boys)/others/IMG_9669.JPG">
            <a href="#"><img src="https://labdh.blob.core.windows.net/mnm2/Boys%20Side%20Photos/Compressed(Boys)/others/IMG_9669.JPG"   class="img-fluid"></a>
            </div>
             <div class="col-sm-6 col-md-4 col-lg-3 col-xl-3 item" data-aos="fade" data-src="https://labdh.blob.core.windows.net/mnm2/Boys%20Side%20Photos/Semi-Compressed(Boys)/others/IMG_9670.JPG">
            <a href="#"><img src="https://labdh.blob.core.windows.net/mnm2/Boys%20Side%20Photos/Compressed(Boys)/others/IMG_9670.JPG"   class="img-fluid"></a>
            </div>
             <div class="col-sm-6 col-md-4 col-lg-3 col-xl-3 item" data-aos="fade" data-src="https://labdh.blob.core.windows.net/mnm2/Boys%20Side%20Photos/Semi-Compressed(Boys)/others/IMG_9671.JPG">
            <a href="#"><img src="https://labdh.blob.core.windows.net/mnm2/Boys%20Side%20Photos/Compressed(Boys)/others/IMG_9671.JPG"   class="img-fluid"></a>
            </div>
             <div class="col-sm-6 col-md-4 col-lg-3 col-xl-3 item" data-aos="fade" data-src="https://labdh.blob.core.windows.net/mnm2/Boys%20Side%20Photos/Semi-Compressed(Boys)/others/IMG_9672.JPG">
            <a href="#"><img src="https://labdh.blob.core.windows.net/mnm2/Boys%20Side%20Photos/Compressed(Boys)/others/IMG_9672.JPG"   class="img-fluid"></a>
            </div>
             <div class="col-sm-6 col-md-4 col-lg-3 col-xl-3 item" data-aos="fade" data-src="https://labdh.blob.core.windows.net/mnm2/Boys%20Side%20Photos/Semi-Compressed(Boys)/others/IMG_9673.JPG">
            <a href="#"><img src="https://labdh.blob.core.windows.net/mnm2/Boys%20Side%20Photos/Compressed(Boys)/others/IMG_9673.JPG"   class="img-fluid"></a>
            </div>
             <div class="col-sm-6 col-md-4 col-lg-3 col-xl-3 item" data-aos="fade" data-src="https://labdh.blob.core.windows.net/mnm2/Boys%20Side%20Photos/Semi-Compressed(Boys)/others/IMG_9674.JPG">
            <a href="#"><img src="https://labdh.blob.core.windows.net/mnm2/Boys%20Side%20Photos/Compressed(Boys)/others/IMG_9674.JPG"   class="img-fluid"></a>
            </div>
             <div class="col-sm-6 col-md-4 col-lg-3 col-xl-3 item" data-aos="fade" data-src="https://labdh.blob.core.windows.net/mnm2/Boys%20Side%20Photos/Semi-Compressed(Boys)/others/IMG_9675.JPG">
            <a href="#"><img src="https://labdh.blob.core.windows.net/mnm2/Boys%20Side%20Photos/Compressed(Boys)/others/IMG_9675.JPG"   class="img-fluid"></a>
            </div>
             <div class="col-sm-6 col-md-4 col-lg-3 col-xl-3 item" data-aos="fade" data-src="https://labdh.blob.core.windows.net/mnm2/Boys%20Side%20Photos/Semi-Compressed(Boys)/others/IMG_9676.JPG">
            <a href="#"><img src="https://labdh.blob.core.windows.net/mnm2/Boys%20Side%20Photos/Compressed(Boys)/others/IMG_9676.JPG"   class="img-fluid"></a>
            </div>
             <div class="col-sm-6 col-md-4 col-lg-3 col-xl-3 item" data-aos="fade" data-src="https://labdh.blob.core.windows.net/mnm2/Boys%20Side%20Photos/Semi-Compressed(Boys)/others/IMG_9677.JPG">
            <a href="#"><img src="https://labdh.blob.core.windows.net/mnm2/Boys%20Side%20Photos/Compressed(Boys)/others/IMG_9677.JPG"   class="img-fluid"></a>
            </div>
             <div class="col-sm-6 col-md-4 col-lg-3 col-xl-3 item" data-aos="fade" data-src="https://labdh.blob.core.windows.net/mnm2/Boys%20Side%20Photos/Semi-Compressed(Boys)/others/IMG_9679.JPG">
            <a href="#"><img src="https://labdh.blob.core.windows.net/mnm2/Boys%20Side%20Photos/Compressed(Boys)/others/IMG_9679.JPG"   class="img-fluid"></a>
            </div>
             <div class="col-sm-6 col-md-4 col-lg-3 col-xl-3 item" data-aos="fade" data-src="https://labdh.blob.core.windows.net/mnm2/Boys%20Side%20Photos/Semi-Compressed(Boys)/others/IMG_9680.JPG">
            <a href="#"><img src="https://labdh.blob.core.windows.net/mnm2/Boys%20Side%20Photos/Compressed(Boys)/others/IMG_9680.JPG"   class="img-fluid"></a>
            </div>
             <div class="col-sm-6 col-md-4 col-lg-3 col-xl-3 item" data-aos="fade" data-src="https://labdh.blob.core.windows.net/mnm2/Boys%20Side%20Photos/Semi-Compressed(Boys)/others/IMG_9682.JPG">
            <a href="#"><img src="https://labdh.blob.core.windows.net/mnm2/Boys%20Side%20Photos/Compressed(Boys)/others/IMG_9682.JPG"   class="img-fluid"></a>
            </div>
             <div class="col-sm-6 col-md-4 col-lg-3 col-xl-3 item" data-aos="fade" data-src="https://labdh.blob.core.windows.net/mnm2/Boys%20Side%20Photos/Semi-Compressed(Boys)/others/IMG_9683.JPG">
            <a href="#"><img src="https://labdh.blob.core.windows.net/mnm2/Boys%20Side%20Photos/Compressed(Boys)/others/IMG_9683.JPG"   class="img-fluid"></a>
            </div>
             <div class="col-sm-6 col-md-4 col-lg-3 col-xl-3 item" data-aos="fade" data-src="https://labdh.blob.core.windows.net/mnm2/Boys%20Side%20Photos/Semi-Compressed(Boys)/others/IMG_9684.JPG">
            <a href="#"><img src="https://labdh.blob.core.windows.net/mnm2/Boys%20Side%20Photos/Compressed(Boys)/others/IMG_9684.JPG"   class="img-fluid"></a>
            </div>
             <div class="col-sm-6 col-md-4 col-lg-3 col-xl-3 item" data-aos="fade" data-src="https://labdh.blob.core.windows.net/mnm2/Boys%20Side%20Photos/Semi-Compressed(Boys)/others/IMG_9686.JPG">
            <a href="#"><img src="https://labdh.blob.core.windows.net/mnm2/Boys%20Side%20Photos/Compressed(Boys)/others/IMG_9686.JPG"   class="img-fluid"></a>
            </div>
             <div class="col-sm-6 col-md-4 col-lg-3 col-xl-3 item" data-aos="fade" data-src="https://labdh.blob.core.windows.net/mnm2/Boys%20Side%20Photos/Semi-Compressed(Boys)/others/IMG_9687.JPG">
            <a href="#"><img src="https://labdh.blob.core.windows.net/mnm2/Boys%20Side%20Photos/Compressed(Boys)/others/IMG_9687.JPG"   class="img-fluid"></a>
            </div>
             <div class="col-sm-6 col-md-4 col-lg-3 col-xl-3 item" data-aos="fade" data-src="https://labdh.blob.core.windows.net/mnm2/Boys%20Side%20Photos/Semi-Compressed(Boys)/others/IMG_9688.JPG">
            <a href="#"><img src="https://labdh.blob.core.windows.net/mnm2/Boys%20Side%20Photos/Compressed(Boys)/others/IMG_9688.JPG"   class="img-fluid"></a>
            </div>
             <div class="col-sm-6 col-md-4 col-lg-3 col-xl-3 item" data-aos="fade" data-src="https://labdh.blob.core.windows.net/mnm2/Boys%20Side%20Photos/Semi-Compressed(Boys)/others/IMG_9691.JPG">
            <a href="#"><img src="https://labdh.blob.core.windows.net/mnm2/Boys%20Side%20Photos/Compressed(Boys)/others/IMG_9691.JPG"   class="img-fluid"></a>
            </div>
             <div class="col-sm-6 col-md-4 col-lg-3 col-xl-3 item" data-aos="fade" data-src="https://labdh.blob.core.windows.net/mnm2/Boys%20Side%20Photos/Semi-Compressed(Boys)/others/IMG_9693.JPG">
            <a href="#"><img src="https://labdh.blob.core.windows.net/mnm2/Boys%20Side%20Photos/Compressed(Boys)/others/IMG_9693.JPG"   class="img-fluid"></a>
            </div>
             <div class="col-sm-6 col-md-4 col-lg-3 col-xl-3 item" data-aos="fade" data-src="https://labdh.blob.core.windows.net/mnm2/Boys%20Side%20Photos/Semi-Compressed(Boys)/others/IMG_9695.JPG">
            <a href="#"><img src="https://labdh.blob.core.windows.net/mnm2/Boys%20Side%20Photos/Compressed(Boys)/others/IMG_9695.JPG"   class="img-fluid"></a>
            </div>
             <div class="col-sm-6 col-md-4 col-lg-3 col-xl-3 item" data-aos="fade" data-src="https://labdh.blob.core.windows.net/mnm2/Boys%20Side%20Photos/Semi-Compressed(Boys)/others/IMG_9696.JPG">
            <a href="#"><img src="https://labdh.blob.core.windows.net/mnm2/Boys%20Side%20Photos/Compressed(Boys)/others/IMG_9696.JPG"   class="img-fluid"></a>
            </div>
             <div class="col-sm-6 col-md-4 col-lg-3 col-xl-3 item" data-aos="fade" data-src="https://labdh.blob.core.windows.net/mnm2/Boys%20Side%20Photos/Semi-Compressed(Boys)/others/IMG_9697.JPG">
            <a href="#"><img src="https://labdh.blob.core.windows.net/mnm2/Boys%20Side%20Photos/Compressed(Boys)/others/IMG_9697.JPG"   class="img-fluid"></a>
            </div>
             <div class="col-sm-6 col-md-4 col-lg-3 col-xl-3 item" data-aos="fade" data-src="https://labdh.blob.core.windows.net/mnm2/Boys%20Side%20Photos/Semi-Compressed(Boys)/others/IMG_9700.JPG">
            <a href="#"><img src="https://labdh.blob.core.windows.net/mnm2/Boys%20Side%20Photos/Compressed(Boys)/others/IMG_9700.JPG"   class="img-fluid"></a>
            </div>
             <div class="col-sm-6 col-md-4 col-lg-3 col-xl-3 item" data-aos="fade" data-src="https://labdh.blob.core.windows.net/mnm2/Boys%20Side%20Photos/Semi-Compressed(Boys)/others/IMG_9701.JPG">
            <a href="#"><img src="https://labdh.blob.core.windows.net/mnm2/Boys%20Side%20Photos/Compressed(Boys)/others/IMG_9701.JPG"   class="img-fluid"></a>
            </div>
             <div class="col-sm-6 col-md-4 col-lg-3 col-xl-3 item" data-aos="fade" data-src="https://labdh.blob.core.windows.net/mnm2/Boys%20Side%20Photos/Semi-Compressed(Boys)/others/IMG_9702.JPG">
            <a href="#"><img src="https://labdh.blob.core.windows.net/mnm2/Boys%20Side%20Photos/Compressed(Boys)/others/IMG_9702.JPG"   class="img-fluid"></a>
            </div>
             <div class="col-sm-6 col-md-4 col-lg-3 col-xl-3 item" data-aos="fade" data-src="https://labdh.blob.core.windows.net/mnm2/Boys%20Side%20Photos/Semi-Compressed(Boys)/others/IMG_9704.JPG">
            <a href="#"><img src="https://labdh.blob.core.windows.net/mnm2/Boys%20Side%20Photos/Compressed(Boys)/others/IMG_9704.JPG"   class="img-fluid"></a>
            </div>
             <div class="col-sm-6 col-md-4 col-lg-3 col-xl-3 item" data-aos="fade" data-src="https://labdh.blob.core.windows.net/mnm2/Boys%20Side%20Photos/Semi-Compressed(Boys)/others/IMG_9706.JPG">
            <a href="#"><img src="https://labdh.blob.core.windows.net/mnm2/Boys%20Side%20Photos/Compressed(Boys)/others/IMG_9706.JPG"   class="img-fluid"></a>
            </div>
             <div class="col-sm-6 col-md-4 col-lg-3 col-xl-3 item" data-aos="fade" data-src="https://labdh.blob.core.windows.net/mnm2/Boys%20Side%20Photos/Semi-Compressed(Boys)/others/IMG_9707.JPG">
            <a href="#"><img src="https://labdh.blob.core.windows.net/mnm2/Boys%20Side%20Photos/Compressed(Boys)/others/IMG_9707.JPG"   class="img-fluid"></a>
            </div>
             <div class="col-sm-6 col-md-4 col-lg-3 col-xl-3 item" data-aos="fade" data-src="https://labdh.blob.core.windows.net/mnm2/Boys%20Side%20Photos/Semi-Compressed(Boys)/others/IMG_9708.JPG">
            <a href="#"><img src="https://labdh.blob.core.windows.net/mnm2/Boys%20Side%20Photos/Compressed(Boys)/others/IMG_9708.JPG"   class="img-fluid"></a>
            </div>
             <div class="col-sm-6 col-md-4 col-lg-3 col-xl-3 item" data-aos="fade" data-src="https://labdh.blob.core.windows.net/mnm2/Boys%20Side%20Photos/Semi-Compressed(Boys)/others/IMG_9710.JPG">
            <a href="#"><img src="https://labdh.blob.core.windows.net/mnm2/Boys%20Side%20Photos/Compressed(Boys)/others/IMG_9710.JPG"   class="img-fluid"></a>
            </div>
             <div class="col-sm-6 col-md-4 col-lg-3 col-xl-3 item" data-aos="fade" data-src="https://labdh.blob.core.windows.net/mnm2/Boys%20Side%20Photos/Semi-Compressed(Boys)/others/IMG_9711.JPG">
            <a href="#"><img src="https://labdh.blob.core.windows.net/mnm2/Boys%20Side%20Photos/Compressed(Boys)/others/IMG_9711.JPG"   class="img-fluid"></a>
            </div>
             <div class="col-sm-6 col-md-4 col-lg-3 col-xl-3 item" data-aos="fade" data-src="https://labdh.blob.core.windows.net/mnm2/Boys%20Side%20Photos/Semi-Compressed(Boys)/others/IMG_9712.JPG">
            <a href="#"><img src="https://labdh.blob.core.windows.net/mnm2/Boys%20Side%20Photos/Compressed(Boys)/others/IMG_9712.JPG"   class="img-fluid"></a>
            </div>
             <div class="col-sm-6 col-md-4 col-lg-3 col-xl-3 item" data-aos="fade" data-src="https://labdh.blob.core.windows.net/mnm2/Boys%20Side%20Photos/Semi-Compressed(Boys)/others/IMG_9713.JPG">
            <a href="#"><img src="https://labdh.blob.core.windows.net/mnm2/Boys%20Side%20Photos/Compressed(Boys)/others/IMG_9713.JPG"   class="img-fluid"></a>
            </div>
             <div class="col-sm-6 col-md-4 col-lg-3 col-xl-3 item" data-aos="fade" data-src="https://labdh.blob.core.windows.net/mnm2/Boys%20Side%20Photos/Semi-Compressed(Boys)/others/IMG_9715.JPG">
            <a href="#"><img src="https://labdh.blob.core.windows.net/mnm2/Boys%20Side%20Photos/Compressed(Boys)/others/IMG_9715.JPG"   class="img-fluid"></a>
            </div>
             <div class="col-sm-6 col-md-4 col-lg-3 col-xl-3 item" data-aos="fade" data-src="https://labdh.blob.core.windows.net/mnm2/Boys%20Side%20Photos/Semi-Compressed(Boys)/others/IMG_9716.JPG">
            <a href="#"><img src="https://labdh.blob.core.windows.net/mnm2/Boys%20Side%20Photos/Compressed(Boys)/others/IMG_9716.JPG"   class="img-fluid"></a>
            </div>
             <div class="col-sm-6 col-md-4 col-lg-3 col-xl-3 item" data-aos="fade" data-src="https://labdh.blob.core.windows.net/mnm2/Boys%20Side%20Photos/Semi-Compressed(Boys)/others/IMG_9717.JPG">
            <a href="#"><img src="https://labdh.blob.core.windows.net/mnm2/Boys%20Side%20Photos/Compressed(Boys)/others/IMG_9717.JPG"   class="img-fluid"></a>
            </div>
             <div class="col-sm-6 col-md-4 col-lg-3 col-xl-3 item" data-aos="fade" data-src="https://labdh.blob.core.windows.net/mnm2/Boys%20Side%20Photos/Semi-Compressed(Boys)/others/IMG_9718.JPG">
            <a href="#"><img src="https://labdh.blob.core.windows.net/mnm2/Boys%20Side%20Photos/Compressed(Boys)/others/IMG_9718.JPG"   class="img-fluid"></a>
            </div>
             <div class="col-sm-6 col-md-4 col-lg-3 col-xl-3 item" data-aos="fade" data-src="https://labdh.blob.core.windows.net/mnm2/Boys%20Side%20Photos/Semi-Compressed(Boys)/others/IMG_9719.JPG">
            <a href="#"><img src="https://labdh.blob.core.windows.net/mnm2/Boys%20Side%20Photos/Compressed(Boys)/others/IMG_9719.JPG"   class="img-fluid"></a>
            </div>
             <div class="col-sm-6 col-md-4 col-lg-3 col-xl-3 item" data-aos="fade" data-src="https://labdh.blob.core.windows.net/mnm2/Boys%20Side%20Photos/Semi-Compressed(Boys)/others/IMG_9720.JPG">
            <a href="#"><img src="https://labdh.blob.core.windows.net/mnm2/Boys%20Side%20Photos/Compressed(Boys)/others/IMG_9720.JPG"   class="img-fluid"></a>
            </div>
             <div class="col-sm-6 col-md-4 col-lg-3 col-xl-3 item" data-aos="fade" data-src="https://labdh.blob.core.windows.net/mnm2/Boys%20Side%20Photos/Semi-Compressed(Boys)/others/IMG_9721.JPG">
            <a href="#"><img src="https://labdh.blob.core.windows.net/mnm2/Boys%20Side%20Photos/Compressed(Boys)/others/IMG_9721.JPG"   class="img-fluid"></a>
            </div>
             <div class="col-sm-6 col-md-4 col-lg-3 col-xl-3 item" data-aos="fade" data-src="https://labdh.blob.core.windows.net/mnm2/Boys%20Side%20Photos/Semi-Compressed(Boys)/others/IMG_9722.JPG">
            <a href="#"><img src="https://labdh.blob.core.windows.net/mnm2/Boys%20Side%20Photos/Compressed(Boys)/others/IMG_9722.JPG"   class="img-fluid"></a>
            </div>
             <div class="col-sm-6 col-md-4 col-lg-3 col-xl-3 item" data-aos="fade" data-src="https://labdh.blob.core.windows.net/mnm2/Boys%20Side%20Photos/Semi-Compressed(Boys)/others/IMG_9724.JPG">
            <a href="#"><img src="https://labdh.blob.core.windows.net/mnm2/Boys%20Side%20Photos/Compressed(Boys)/others/IMG_9724.JPG"   class="img-fluid"></a>
            </div>
             <div class="col-sm-6 col-md-4 col-lg-3 col-xl-3 item" data-aos="fade" data-src="https://labdh.blob.core.windows.net/mnm2/Boys%20Side%20Photos/Semi-Compressed(Boys)/others/IMG_9725.JPG">
            <a href="#"><img src="https://labdh.blob.core.windows.net/mnm2/Boys%20Side%20Photos/Compressed(Boys)/others/IMG_9725.JPG"   class="img-fluid"></a>
            </div>
             <div class="col-sm-6 col-md-4 col-lg-3 col-xl-3 item" data-aos="fade" data-src="https://labdh.blob.core.windows.net/mnm2/Boys%20Side%20Photos/Semi-Compressed(Boys)/others/IMG_9726.JPG">
            <a href="#"><img src="https://labdh.blob.core.windows.net/mnm2/Boys%20Side%20Photos/Compressed(Boys)/others/IMG_9726.JPG"   class="img-fluid"></a>
            </div>
             <div class="col-sm-6 col-md-4 col-lg-3 col-xl-3 item" data-aos="fade" data-src="https://labdh.blob.core.windows.net/mnm2/Boys%20Side%20Photos/Semi-Compressed(Boys)/others/IMG_9727.JPG">
            <a href="#"><img src="https://labdh.blob.core.windows.net/mnm2/Boys%20Side%20Photos/Compressed(Boys)/others/IMG_9727.JPG"   class="img-fluid"></a>
            </div>
             <div class="col-sm-6 col-md-4 col-lg-3 col-xl-3 item" data-aos="fade" data-src="https://labdh.blob.core.windows.net/mnm2/Boys%20Side%20Photos/Semi-Compressed(Boys)/others/IMG_9729.JPG">
            <a href="#"><img src="https://labdh.blob.core.windows.net/mnm2/Boys%20Side%20Photos/Compressed(Boys)/others/IMG_9729.JPG"   class="img-fluid"></a>
            </div>
             <div class="col-sm-6 col-md-4 col-lg-3 col-xl-3 item" data-aos="fade" data-src="https://labdh.blob.core.windows.net/mnm2/Boys%20Side%20Photos/Semi-Compressed(Boys)/others/IMG_9731.JPG">
            <a href="#"><img src="https://labdh.blob.core.windows.net/mnm2/Boys%20Side%20Photos/Compressed(Boys)/others/IMG_9731.JPG"   class="img-fluid"></a>
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