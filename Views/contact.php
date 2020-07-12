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
		<li><?php echo $xml->header->contact->$lang; ?></li>
	</ul>
  <div>
  <!-- Map Section -->
  <div class="contact" id="contact-div">
	<div class="container">
  		<div class="about-heading">
				<h3><?php echo $xml->map->$lang; ?></h3>
				<p></p>
		</div>
		<!-- Start Google Map -->
		<div>
			<!-- Start Map -->
			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d22864.11283411948!2d-73.96468908098944!3d40.630720240038435!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c24fa5d33f083b%3A0xc80b8f06e177fe62!2sNew+York%2C+NY%2C+USA!5e0!3m2!1sen!2sbg!4v1540447494452" width="100%" height="380" frameborder="0" style="border:0" allowfullscreen></iframe>
			<!-- End Map -->
		</div>
  </div>
    <!-- contact -->
  <div class="contact" id="contact-div">
	<div class="container">
			<div class="about-heading">
				<h3><?php echo $xml->header->contact->$lang; ?></h3>
				<p><?php echo $xml->contact->description->$lang; ?></p>
			</div>
			<div class="address">
				<div class="col-sm-4 address-grids">
					<h4>Address :</h4>
					<p>Eiusmod Tempor inc<br>
						<span>St Dolore Place,</span>
						San Francisco 56777
					</p>	
				</div>
				<div class="col-sm-4 address-grids">
					<h4>Phone :</h4>
					<p>+2 123 456 789</p>
					<p>+2 987 654 321</p>
				</div>
				<div class="col-sm-4 address-grids">
					<h4>Email :</h4>
					<p><a href="mailto:example@email.com">mail@example.com</a></p>
				</div>
				<div class="clearfix"> </div>
			</div>
			<div class="contact-form">
				<h4>Contact Form</h4>
				<form action="#" method="post">
					<div class="fields-grid">
						<div class="styled-input agile-styled-input-top">
							<input type="text" name="Full Name" required="">
							<label>Full Name</label>
							<span></span>
						</div>
						<div class="styled-input agile-styled-input-top">
							<input type="text" name="Phone" required=""> 
							<label>Phone</label>
							<span></span>
						</div>
						<div class="styled-input">
							<input type="text" name="Email" required=""> 
							<label>Email</label>
							<span></span>
 						</div> 
						<div class="styled-input">
							<input type="text" name="Subject" required="">
							<label>Subject</label>
							<span></span>
						</div>
						<div class="clearfix"> </div>
					</div>
					<div class="styled-input textarea-grid">
						<textarea name="Message" required=""></textarea>
						<label>Message</label>
						<span></span>
					</div>	 
					<input type="submit" value="SEND">
				</form>
			</div>
		</div>
	</div>
  </div>
<!-- Start Footer bottom Area -->
<footer>
    <?php include 'footer.php';?>
</footer>
  <!-- End Footer bottom Area -->

  
  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

  <!-- JavaScript Libraries -->
  <script src="../lib/jquery/jquery.min.js"></script>
<!--  <script src="../lib/bootstrap/js/bootstrap.min.js"></script> -->
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

  <script src="../js/main.js"></script>
  <script src="../js/script.js"></script>
</body>

</html>
