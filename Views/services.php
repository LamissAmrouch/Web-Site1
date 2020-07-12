<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>BZ Algeria</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->
  <link href="../img/favicon.png" rel="icon">
  <link href="../img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,400i,600,700|Raleway:300,400,400i,500,500i,700,800,900" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="../lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="../lib/nivo-slider/css/nivo-slider.css" rel="stylesheet">
  <link href="../lib/owlcarousel/owl.carousel.css" rel="stylesheet">
  <link href="../lib/owlcarousel/owl.transitions.css" rel="stylesheet">
  <link href="../lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="../lib/animate/animate.min.css" rel="stylesheet">
  <link href="../lib/venobox/venobox.css" rel="stylesheet">

  <!-- Nivo Slider Theme -->
  <link href="../css/nivo-slider-theme.css" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="../css/style.css" rel="stylesheet">
  
  <!-- Other Stylesheet File -->
  <link href="../css/style1.css" rel="stylesheet">

  <!-- OUR Stylesheet File -->
  <link href="../css/mystyle.css" rel="stylesheet">

  <!-- Responsive Stylesheet File -->
  <link href="../css/responsive.css" rel="stylesheet">

</head>

<?php require '../config.php' ?>
<body data-spy="scroll" data-target="#navbar-example">
  <div id="preloader"></div>
  <header>
  	<div class="inner-banner">
      <!-- header-area start -->
      <?php include 'header.php';?>
      <!-- header-area end -->
	  </div>
  </header>

  <div class="sub-header-div">
    <ul class="sub-header">
      <li>
        <a href="../index.php">Home</a>
      <span> / </span>
      </li>
      <li><?php echo $xml->header->services->$lang; ?></li>
    </ul>
  <div>

<!-- Start Service area -->
<div id="services" class="services-area area-padding">
  <div class="container">
    <div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="section-headline services-head text-center">
          <h2>Our <?php echo $xml->header->services->$lang; ?></h2>
        </div>
      </div>
    </div>
    <div class="row text-center">
      <div class="services-contents">
        <!-- Start Left services -->
        <div class="col-md-4 col-sm-4 col-xs-12">
          <div class="about-move">
            <div class="services-details">
              <div class="single-services">
                <a class="services-icon" href="#">
                    <i class="fa fa-code"></i>
                  </a>
                <h4>Expert Coder</h4>
                <p>
                  will have to make sure the prototype looks finished by inserting text or photo.make sure the prototype looks finished by.
                </p>
              </div>
            </div>
            <!-- end about-details -->
          </div>
        </div>
        <div class="col-md-4 col-sm-4 col-xs-12">
          <div class="about-move">
            <div class="services-details">
              <div class="single-services">
                <a class="services-icon" href="#">
                    <i class="fa fa-camera-retro"></i>
                  </a>
                <h4>Creative Designer</h4>
                <p>
                  will have to make sure the prototype looks finished by inserting text or photo.make sure the prototype looks finished by.
                </p>
              </div>
            </div>
            <!-- end about-details -->
          </div>
        </div>
        <div class="col-md-4 col-sm-4 col-xs-12">
          <!-- end col-md-4 -->
          <div class=" about-move">
            <div class="services-details">
              <div class="single-services">
                <a class="services-icon" href="#">
                    <i class="fa fa-wordpress"></i>
                  </a>
                <h4>Wordpress Developer</h4>
                <p>
                  will have to make sure the prototype looks finished by inserting text or photo.make sure the prototype looks finished by.
                </p>
              </div>
            </div>
            <!-- end about-details -->
          </div>
        </div>
        <div class="col-md-4 col-sm-4 col-xs-12">
          <!-- end col-md-4 -->
          <div class=" about-move">
            <div class="services-details">
              <div class="single-services">
                <a class="services-icon" href="#">
                    <i class="fa fa-camera-retro"></i>
                  </a>
                <h4>Social Marketer </h4>
                <p>
                  will have to make sure the prototype looks finished by inserting text or photo.make sure the prototype looks finished by.
                </p>
              </div>
            </div>
            <!-- end about-details -->
          </div>
        </div>
        <!-- End Left services -->
        <div class="col-md-4 col-sm-4 col-xs-12">
          <!-- end col-md-4 -->
          <div class=" about-move">
            <div class="services-details">
              <div class="single-services">
                <a class="services-icon" href="#">
                    <i class="fa fa-bar-chart"></i>
                  </a>
                <h4>Seo Expart</h4>
                <p>
                  will have to make sure the prototype looks finished by inserting text or photo.make sure the prototype looks finished by.
                </p>
              </div>
            </div>
            <!-- end about-details -->
          </div>
        </div>
        <!-- End Left services -->
        <div class="col-md-4 col-sm-4 col-xs-12">
          <!-- end col-md-4 -->
          <div class=" about-move">
            <div class="services-details">
              <div class="single-services">
                <a class="services-icon" href="#">
                    <i class="fa fa-ticket"></i>
                  </a>
                <h4>24/7 Support</h4>
                <p>
                  will have to make sure the prototype looks finished by inserting text or photo.make sure the prototype looks finished by.
                </p>
              </div>
            </div>
            <!-- end about-details -->
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- End Service area -->

<!-- Start Footer bottom Area -->
<footer>
    <?php include 'footer.php';?>
</footer>
  <!-- End Footer bottom Area -->

  
  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

  <!-- JavaScript Libraries -->
  <script src="../lib/jquery/jquery.min.js"></script>
  <script src="../lib/bootstrap/js/bootstrap.min.js"></script>
  <script src="../lib/owlcarousel/owl.carousel.min.js"></script>
  <script src="../lib/venobox/venobox.min.js"></script>
  <script src="../lib/knob/jquery.knob.js"></script>
  <script src="../lib/wow/wow.min.js"></script>
  <script src="../lib/parallax/parallax.js"></script>
  <script src="../lib/easing/easing.min.js"></script>
  <script src="../lib/nivo-slider/js/jquery.nivo.slider.js" type="text/javascript"></script>
  <script src="../lib/appear/jquery.appear.js"></script>
  <script src="../lib/isotope/isotope.pkgd.min.js"></script>

  <!-- Contact Form JavaScript File -->
  <script src="../contactform/contactform.js"></script>
  <script src="../js/script.js"></script>
  <script src="../js/main.js"></script>
</body>

</html>

