<?php
  //start session
  session_start();
  
  require('../controllers/productcontroller.php');



?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Thumber &mdash; Colorlib Website Template</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Quicksand:300,400,500,700,900" rel="stylesheet">
    <link rel="stylesheet" href="fonts/icomoon/style.css">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/jquery-ui.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">

    <link rel="stylesheet" href="css/bootstrap-datepicker.css">

    <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">

    <link rel="stylesheet" href="css/aos.css">
    <link rel="stylesheet" href="css/jquery.scrollbar.css">
    <link rel="stylesheet" href="css/fancybox.min.css">
    <link rel="stylesheet" href="css/swiper.min.css">

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

  <header class="header-bar d-flex d-lg-flex align-items-center inner-page-header" data-aos="fade-down">
    <div class="site-logo">
      <a href="index.html">Nemy Clothing Gallery</a>
    </div>
    
    <div class="d-inline-block d-xl-block ml-md-0 ml-auto py-3" style="position: relative; top: 3px;"><a href="#" class="site-menu-toggle js-menu-toggle text-white"><span class="icon-menu h3"></span> <span style="position: relative;top: -4px; text-transform: uppercase;">Menu</span></a></div>

    <div class="main-menu d-none">
      <ul class="js-clone-nav">
        <li><a href="../index.php">Home</a></li>
        <li class="active"><a href="photos.php">Photos</a></li>
        
      </ul>
      <ul class="social js-clone-nav">
        <li><a href="#"><span class="icon-facebook"></span></a></li>
        <li><a href="#"><span class="icon-twitter"></span></a></li>
        <li><a href="#"><span class="icon-instagram"></span></a></li>
      </ul>
    </div>
  </header> 
  

  <main class="main-content">
    <div class="container-fluid photos">
      <div class="row align-items-stretch">
        
        <?php
        //run the function to return all product and assign to variable
                  $product_list = view_all_images();
                  if ($product_list) {

                  //loop through returned list of product
                  foreach ($product_list as $product){ 
                   
                    echo 

                  "

        <div class='col-20 col-md-15 col-lg-20' data-aos='fade-up'>
          <a href=".$product['image']." class='d-block photo-item' data-fancybox='gallery'>
            <img src=".$product['image']." alt='Image' class='img-fluid'>
            <div class='photo-text-more'>
              <span class='icon icon-search'></span>
            </div>
          </a>
        </div>

      <div class='row justify-content-center'>
        <div class='col-md-12 text-center py-5'>
          <p>";
            }
          }
?>

      </p>
        </div>
      </div>
    </div>
  </main>

</div> <!-- .site-wrap -->

  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/jquery-ui.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <!-- <script src="js/jquery.stellar.min.js"></script> -->
  <script src="js/jquery.countdown.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/bootstrap-datepicker.min.js"></script>
  <script src="js/aos.js"></script>

  <script src="js/jquery.fancybox.min.js"></script>
  <script src="js/swiper.min.js"></script>
  <script src="js/jquery.scrollbar.js"></script>
  <script src="js/main.js"></script>

  
    
  </body>
</html>