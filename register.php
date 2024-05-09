<!DOCTYPE html>
<html lang="en">
<head>
<!-- Meta Data -->
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>KlinicQ</title>
<link rel="shortcut icon" type="image/x-icon" href="media/favicon.png">
<link rel="stylesheet" href="dependencies/bootstrap/css/bootstrap.min.css" type="text/css">
<link rel="stylesheet" href="dependencies/fontawesome/css/all.min.css" type="text/css">
<link rel="stylesheet" href="dependencies/select2/css/select2.min.css" type="text/css">
<link rel="stylesheet" href="dependencies/flaticon/flaticon.css" type="text/css">
<link rel="stylesheet" href="dependencies/wow/css/animate.css" type="text/css">
<link rel="stylesheet" href="dependencies/page-piling/css/jquery.pagepiling.min.css" type="text/css">
<link rel="stylesheet" href="dependencies/nivo-slider/css/nivo-slider.css" type="text/css">
<link rel="stylesheet" href="dependencies/meanmenu/css/meanmenu.min.css" type="text/css">
<link rel="stylesheet" href="dependencies/magnific-popup/css/magnific-popup.css" type="text/css">
<link rel="stylesheet" href="dependencies/owl.carousel/css/owl.carousel.min.css" type="text/css">
<link rel="stylesheet" href="dependencies/owl.carousel/css/owl.theme.default.min.css" type="text/css">
<link rel="stylesheet" href="dependencies/slick/css/slick.css" type="text/css">
<link rel="stylesheet" href="dependencies/slick/css/slick-theme.css" type="text/css">
<link rel="stylesheet" href="assets/css/app.css" type="text/css">
<link rel="stylesheet" href="dependencies/animation-css/animation-css.css" type="text/css">
<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700&amp;display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&amp;display=swap" rel="stylesheet">

</head>

<body>


<div id="wrapper" class="wrapper">

<a href="#main_content" data-type="section-switch" class="return-to-top">
<i class="fas fa-angle-double-up"></i>
</a>

<div id="main_content">

<?php include "header.php" ?>



<section class="contact-section" style="background: #e1e1e1;">
<div class="container">
<div class="row  justify-content-center">
<div class="col-lg-10 col-md-12 col-sm-12">
<div class="row">
    <div class="col-lg-8 p-0">
<div class="contact-form-area">

<div class="form-inner">
<form method="post" action="#" id="contact-form" class="default-form"> 
<div class="row justify-content-center">
<div class="col-lg-12 col-md-12 col-sm-12 column">
    <div class="sec-title center register-btw">
<img src="media/webimages/logo.png" style="width: 150px;">
<a class="" href="login.php">Sign Up</a>
    </div>
</div>
<div class="col-lg-6 col-md-12 col-sm-12 column">
<div class="form-group">
<i class="fa fa-user"></i>
<input type="text" name="name" placeholder="Name" required>
</div>
</div>
<div class="col-lg-6 col-md-12 col-sm-12 column">
<div class="form-group">
<i class="fa fa-hospital"></i>
<select class="business_category" name="business_category">
<option value="">Business Category</option>
<option value="Hospital">Hospital</option>
</select>
<!-- <input type="text" name="business_category" placeholder="Business Category" required> -->
</div>
</div>
<div class="col-lg-6 col-md-12 col-sm-12 column">
<div class="form-group">
<i class="fa fa-envelope"></i>
<input type="email" name="email" placeholder="Email Address" required>
</div>
</div>
<div class="col-lg-6 col-md-12 col-sm-12 column">
<div class="form-group">
<i class="fa fa-hospital"></i>
<select class="business_name" name="business_name">
<option value="">Business Name</option>
<option value="Apolla Hospital">Apolla Hospital</option>
</select>
<!-- <input type="text" name="business_category" placeholder="Business Category" required> -->
</div>
</div>
<div class="col-lg-6 col-md-12 col-sm-12 column">
<div class="form-group">
<i class="fa fa-phone"></i>
<input type="text" name="phone" placeholder="Mobile Number" required>
</div>
</div>


<div class="col-lg-6 col-md-12 col-sm-12 column">
<div class="form-group">
<i class="fa fa-flag"></i>
<input type="text" name="country" placeholder="Country" required>
</div>
</div>
<div class="col-lg-6 col-md-12 col-sm-12 column">
<div class="form-group">
<i class="fa fa-lock"></i>
<input type="text" name="password" placeholder="Password" required>
</div>
</div>

<div class="col-lg-6 col-md-12 col-sm-12 column">
<div class="form-group">
<i class="fa fa-search"></i>
<input type="text" name="address" placeholder="Address">
</div>
</div>
<div class="col-lg-12 col-md-12 col-sm-12 column">
	<div class="form-group">
<input type="checkbox" id="check_agree" name="check_agree" value="check_agree">
<label for="check_agree" style="font-size: 16px;font-weight: 400;color: #000;">I agree to our terms and conditions and privacy policies</label>

</div></div>


<div class="col-lg-12 col-md-12 col-sm-12 column">
	<div class="form-group">
<input type="checkbox" id="check_agree1" name="check_agree1" value="check_agree1">
<label for="check_agree1" style="font-size: 16px;font-weight: 400;color: #000;">Receive relevant offers and promotional communication from Nucleo</label>

</div></div>


<div class="col-lg-12 col-md-12 col-sm-12 column">
<div class="form-group message-btn text-center">
<a href="#" class="item-btn btn-ghost btn-new">Login</a>
</div>
</div>
<div class="col-lg-12 col-md-12 col-sm-12 column">
<div class="form-group text-center" style="margin-top: 20px;">
Don’t have an account? <a href="register.php" style="color: #000;font-weight: 500;">Login</a>
</div>
</div>
</div>
</form>
</div>
</div>
</div>
<div class="col-lg-4 p-0"><div class="login-right">
<img class="dis-n" src="media/webimages/login-page.png" style="display:block;">
</div>
</div></div>

</div>

</div>
</div>
</section>



<?php include "footer.php" ?>

</div>
</div>
<script src="dependencies/popper.js/popper.min.js"></script>
<script src="dependencies/jquery/jquery.min.js"></script>
<script src="dependencies/bootstrap/js/bootstrap.min.js"></script>
<script src="dependencies/jquery.appear/jquery.appear.js"></script>
<script src="dependencies/jquery.parallax-scroll/jquery.parallax-scroll.js"></script>
<script src="dependencies/gmap3/js/gmap3.min.js"></script>
<script src="dependencies/owl.carousel/js/owl.carousel.min.js"></script>
<script src="dependencies/slick/js/slick.min.js"></script>
<script src="dependencies/counter-up/jquery.counterup.min.js"></script>
<script src="dependencies/waypoints/jquery.waypoints.min.js"></script>
<script src="dependencies/select2/js/select2.min.js"></script>
<script src="dependencies/isotope-layout/isotope.pkgd.min.js"></script>
<script src="dependencies/imagesloaded/imagesloaded.pkgd.min.js"></script>
<script src="dependencies/meanmenu/js/jquery.meanmenu.min.js"></script>
<script src="dependencies/Parallaxie-master/parallaxie.js"></script>
<script src="dependencies/nivo-slider/js/jquery.nivo.slider.js"></script>
<script src="dependencies/nivo-slider/js/home.js"></script>
<script src="dependencies/wow/js/wow.min.js"></script>
<script src="dependencies/knob/jquery.knob.js"></script>
<script src="dependencies/countdown/jquery.countdown.min.js"></script>
<script src="dependencies/page-piling/js/jquery.pagepiling.min.js"></script>
<script src="dependencies/tilt/tilt.jquery.min.js"></script>
<script src="dependencies/theia-sticky-sidebar/theia-sticky-sidebar.min.js"></script>
<script src="dependencies/theia-sticky-sidebar/resize-sensor.min.js"></script>
<script src="dependencies/magnific-popup/js/jquery.magnific-popup.min.js"></script>
<script src="dependencies/validator/validator.min.js"></script>
<script src="assets/js/app.js"></script>

</body>
</html>