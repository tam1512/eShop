<!DOCTYPE html>
<html lang="zxx">
<head>
	<!-- Meta Tag -->
   <meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name='copyright' content=''>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<!-- Title Tag  -->
   <title>Eshop - eCommerce HTML5 Template.</title>
	<!-- Favicon -->
	<link rel="icon" type="image/png" href="<?php echo e(_WEB_HOST_ROOT); ?>/client/assets/images/favicon.png">
	<!-- Web Font -->
	<link href="https://fonts.googleapis.com/css?family=Poppins:200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap" rel="stylesheet">
	
	<!-- StyleSheet -->
	
	<!-- Bootstrap -->
	<link rel="stylesheet" href="<?php echo e(_WEB_HOST_ROOT); ?>/client/assets/css/bootstrap.css">
	<!-- Magnific Popup -->
    <link rel="stylesheet" href="<?php echo e(_WEB_HOST_ROOT); ?>/client/assets/css/magnific-popup.min.css">
	<!-- Font Awesome -->
    <link rel="stylesheet" href="<?php echo e(_WEB_HOST_ROOT); ?>/client/assets/css/font-awesome.css">
	<!-- Fancybox -->
	<link rel="stylesheet" href="<?php echo e(_WEB_HOST_ROOT); ?>/client/assets/css/jquery.fancybox.min.css">
	<!-- Themify Icons -->
    <link rel="stylesheet" href="<?php echo e(_WEB_HOST_ROOT); ?>/client/assets/css/themify-icons.css">
	<!-- Nice Select CSS -->
    <link rel="stylesheet" href="<?php echo e(_WEB_HOST_ROOT); ?>/client/assets/css/niceselect.css">
	<!-- Animate CSS -->
    <link rel="stylesheet" href="<?php echo e(_WEB_HOST_ROOT); ?>/client/assets/css/animate.css">
	<!-- Flex Slider CSS -->
    <link rel="stylesheet" href="<?php echo e(_WEB_HOST_ROOT); ?>/client/assets/css/flex-slider.min.css">
	<!-- Owl Carousel -->
    <link rel="stylesheet" href="<?php echo e(_WEB_HOST_ROOT); ?>/client/assets/css/owl-carousel.css">
	<!-- Slicknav -->
    <link rel="stylesheet" href="<?php echo e(_WEB_HOST_ROOT); ?>/client/assets/css/slicknav.min.css">
	
	<!-- Eshop StyleSheet -->
	<link rel="stylesheet" href="<?php echo e(_WEB_HOST_ROOT); ?>/client/assets/css/reset.css">
	<link rel="stylesheet" href="<?php echo e(_WEB_HOST_ROOT); ?>/client/assets/css/style.css">
    <link rel="stylesheet" href="<?php echo e(_WEB_HOST_ROOT); ?>/client/assets/css/responsive.css">

	
	
</head>
<body class="js">
	
	<!-- Preloader -->
	<div class="preloader">
		<div class="preloader-inner">
			<div class="preloader-icon">
				<span></span>
				<span></span>
			</div>
		</div>
	</div>
	<!-- End Preloader -->
	
	
   <?php echo $__env->make('client.blocks.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
   <?php echo $__env->make('client.blocks.breadcrumb', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
	
	<?php echo $__env->yieldContent('content'); ?>
	
	<?php echo $__env->make('client.blocks.model', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
	<?php echo $__env->make('client.blocks.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
 
	<!-- Jquery -->
   <script src="<?php echo e(_WEB_HOST_ROOT); ?>/client/assets/js/jquery.min.js"></script>
   <script src="<?php echo e(_WEB_HOST_ROOT); ?>/client/assets/js/jquery-migrate-3.0.0.js"></script>
	<script src="<?php echo e(_WEB_HOST_ROOT); ?>/client/assets/js/jquery-ui.min.js"></script>
	<!-- Popper JS -->
	<script src="<?php echo e(_WEB_HOST_ROOT); ?>/client/assets/js/popper.min.js"></script>
	<!-- Bootstrap JS -->
	<script src="<?php echo e(_WEB_HOST_ROOT); ?>/client/assets/js/bootstrap.min.js"></script>
	<!-- Color JS -->
	<script src="<?php echo e(_WEB_HOST_ROOT); ?>/client/assets/js/colors.js"></script>
	<!-- Slicknav JS -->
	<script src="<?php echo e(_WEB_HOST_ROOT); ?>/client/assets/js/slicknav.min.js"></script>
	<!-- Owl Carousel JS -->
	<script src="<?php echo e(_WEB_HOST_ROOT); ?>/client/assets/js/owl-carousel.js"></script>
	<!-- Magnific Popup JS -->
	<script src="<?php echo e(_WEB_HOST_ROOT); ?>/client/assets/js/magnific-popup.js"></script>
	<!-- Waypoints JS -->
	<script src="<?php echo e(_WEB_HOST_ROOT); ?>/client/assets/js/waypoints.min.js"></script>
	<!-- Countdown JS -->
	<script src="<?php echo e(_WEB_HOST_ROOT); ?>/client/assets/js/finalcountdown.min.js"></script>
	<!-- Nice Select JS -->
	<script src="<?php echo e(_WEB_HOST_ROOT); ?>/client/assets/js/nicesellect.js"></script>
	<!-- Flex Slider JS -->
	<script src="<?php echo e(_WEB_HOST_ROOT); ?>/client/assets/js/flex-slider.js"></script>
	<!-- ScrollUp JS -->
	<script src="<?php echo e(_WEB_HOST_ROOT); ?>/client/assets/js/scrollup.js"></script>
	<!-- Onepage Nav JS -->
	<script src="<?php echo e(_WEB_HOST_ROOT); ?>/client/assets/js/onepage-nav.min.js"></script>
	<!-- Easing JS -->
	<script src="<?php echo e(_WEB_HOST_ROOT); ?>/client/assets/js/easing.js"></script>
	<!-- Active JS -->
	<script src="<?php echo e(_WEB_HOST_ROOT); ?>/client/assets/js/active.js"></script>
</body>
</html><?php /**PATH E:\program File\xampp\htdocs\eshop\src\views/client/layouts/app.blade.php ENDPATH**/ ?>