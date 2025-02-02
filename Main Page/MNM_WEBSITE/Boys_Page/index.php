<?php
    session_start();
    if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
        // User is not logged in, redirect to login page
            $URL="https://barkhawedsmridul.azurewebsites.net/";
            echo "<script type='text/javascript'>document.location.href='{$URL}';</script>";
            echo '<META HTTP-EQUIV="refresh" content="0;URL=' . $URL . '">';
    }
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Barkha Weds Mridul</title>
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
            <h1 class="mb-0"><a href="http://localhost/MONADIDIMAIN/index.php" class="text-white h2 mb-0">Back</a></h1>
          </div>
          <!-- <div class="col-10 col-md-8 d-none d-xl-block" data-aos="fade-down">
            <nav class="site-navigation position-relative text-right text-lg-center" role="navigation">

              <ul class="site-menu js-clone-nav mx-auto d-none d-lg-block">
                <li class="active"><a href="index.html">Home</a></li>
                <li>
                  <a href="single.html">Gallery</a>
                </li>
                <li><a href="about.html">About</a></li>
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



    <div class="container-fluid" data-aos="fade" data-aos-delay="500">
      <div class="row">

        <div class="col-lg-4">
          <div class="image-wrap-2">
            <div class="image-info">
              <h2 class="mb-3">Kaam Chhedna</h2>
              <a href="KC.php" class="btn btn-outline-white py-2 px-4">More Photos</a>
            </div>
            <img src="https://labdh.blob.core.windows.net/mnm2/Boys%20Side%20Photos/Compressed(Boys)/kaam_chedna/MF9A1212.JPG"   class="img-fluid">
          </div>
        </div>



        <div class="col-lg-4">
          <div class="image-wrap-2">
            <div class="image-info">
              <h2 class="mb-3">Haldi</h2>
              <a href="haldi.php" class="btn btn-outline-white py-2 px-4">More Photos</a>
            </div>
            <img src="https://labdh.blob.core.windows.net/mnm2/Boys%20Side%20Photos/Compressed(Boys)/candid/0J0A4972.JPG"   class="img-fluid">
          </div>
        </div>

        <div class="col-lg-4">
          <div class="image-wrap-2">
            <div class="image-info">
              <h2 class="mb-3">Haldi 2.0</h2>
              <a href="haldi2_0.php" class="btn btn-outline-white py-2 px-4">More Photos</a>
            </div>
            <img src="https://labdh.blob.core.windows.net/mnm2/Boys%20Side%20Photos/Compressed(Boys)/candid/0J0A5151.JPG"   class="img-fluid">
          </div>
        </div>

        <div class="col-lg-4">
          <div class="image-wrap-2">
            <div class="image-info">
              <h2 class="mb-3">Ladies Sangeet</h2>
              <a href="LS.php" class="btn btn-outline-white py-2 px-4">More Photos</a>
            </div>
            <img src="https://labdh.blob.core.windows.net/mnm2/Boys%20Side%20Photos/Compressed(Boys)/candid/0J0A5507.JPG"   class="img-fluid">
          </div>
        </div>

        <div class="col-lg-4">
          <div class="image-wrap-2">
            <div class="image-info">
              <h2 class="mb-3">Shaadi</h2>
              <a href="shaadi.php" class="btn btn-outline-white py-2 px-4">More Photos</a>
            </div>
            <img src="https://labdh.blob.core.windows.net/mnm2/Boys%20Side%20Photos/Compressed(Boys)/candid/0J0A6154.JPG"   class="img-fluid">
          </div>
        </div>

        
        <div class="col-lg-4">
          <div class="image-wrap-2">
            <div class="image-info">
              <h2 class="mb-3">Reception</h2>
              <a href="reception.php" class="btn btn-outline-white py-2 px-4">More Photos</a>
            </div>
            <img src="https://labdh.blob.core.windows.net/mnm2/Boys%20Side%20Photos/Compressed(Boys)/candid/0J0A6426.JPG"   class="img-fluid">
          </div>
        </div>

        
        <div class="col-lg-4">
          <div class="image-wrap-2">
            <div class="image-info">
              <h2 class="mb-3">Candids</h2>
              <a href="candids.php" class="btn btn-outline-white py-2 px-4">More Photos</a>
            </div>
            <img src="https://labdh.blob.core.windows.net/mnm2/Boys%20Side%20Photos/Compressed(Boys)/portraits/DSC01484.JPG"   class="img-fluid">
          </div>
        </div>


        
        <div class="col-lg-4">
          <div class="image-wrap-2">
            <div class="image-info">
              <h2 class="mb-3">Portraits</h2>
              <a href="portraits.php" class="btn btn-outline-white py-2 px-4">More Photos</a>
            </div>
            <img src="https://labdh.blob.core.windows.net/mnm2/Boys%20Side%20Photos/Compressed(Boys)/candid/0J0A6188.JPG"   class="img-fluid">
          </div>
        </div>


        <div class="col-lg-4">
          <div class="image-wrap-2">
            <div class="image-info">
              <h2 class="mb-3">Others</h2>
              <a href="others.php" class="btn btn-outline-white py-2 px-4">More Photos</a>
            </div>
            <img src="https://labdh.blob.core.windows.net/mnm2/Boys%20Side%20Photos/Compressed(Boys)/others/IMG_9636.JPG"   class="img-fluid">
          </div>
        </div>

      </div>
    </div>

    <div class="footer py-4">
      <div class="container-fluid text-center">
        <p>
          Developed by Labdh Purohit <i class="icon-heart-o" aria-hidden="true"></i>
        </p>
        <p>
        Some Images may take some time to load. Please be patient.
        </p>
        <p>
        If there is any issue regarding the website, Please contact me.
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
