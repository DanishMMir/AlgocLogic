<!DOCTYPE html>
<html dir="ltr" lang="en-US">
<head>

	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<link rel="icon" href="images/favicon.png" type="image/gif" sizes="16x16"> 

	<!-- Stylesheets
	============================================= -->
	<!-- <link href="http://fonts.googleapis.com/css?family=Lato:300,400,400italic,600,700|Raleway:300,400,500,600,700|Crete+Round:400italic" rel="stylesheet" type="text/css" /> -->
	<link rel="stylesheet" href="css/bootstrap.css" type="text/css" />
	<link rel="stylesheet" href="css/style.css" type="text/css" />
	<link rel="stylesheet" href="css/swiper.css" type="text/css" />
	<link rel="stylesheet" href="css/dark.css" type="text/css" />
	<link rel="stylesheet" href="css/font-icons.css" type="text/css" />
	<link rel="stylesheet" href="css/animate.css" type="text/css" />
	<link rel="stylesheet" href="css/magnific-popup.css" type="text/css" />

	<link rel="stylesheet" href="css/responsive.css" type="text/css" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />

	<link rel="stylesheet" href="css/custom.css" type="text/css" />

	<!-- Document Title
	============================================= -->
	<title>AlgocLogic</title>

</head>

<body class="stretched">

	<!-- Document Wrapper
	============================================= -->
	<div id="wrapper" class="clearfix">

		<div id="home" class="page-section" style="position:absolute;top:0;left:0;width:100%;height:200px;z-index:-2;"></div>

		<?php include('pages/home.php'); ?>

		<!-- ============== Header =================== -->
		
		<?php include('pages/header.php'); ?>
		
		<!-- =============== header end ============== -->

		<div class="clear"></div>

		<!-- =============== Content  ================ -->
		<section id="content">

			<!-- <div class="content-wrap"> -->
				<div id="about">
					<!-- populated with js -->
				</div>

				<?php include('pages/work.php'); ?>

				<?php include('pages/team.php'); ?>

				<?php include('pages/services.php'); ?>

				<!-- include pricing page if needed -->

				<!-- include blog page if needed -->

				<?php include('pages/testmonial.php'); ?>

				<?php include('pages/contact.php'); ?>
				
			<!-- </div> -->

		</section>
		<!-- =============== content end ============== -->

		<!-- ================= Footer ================= -->
		
		<?php include('pages/footer.php'); ?>

		<!-- #footer end -->

	</div><!-- #wrapper end -->

	<!-- ============== Go To Top ================= -->
	<div id="gotoTop" class="icon-angle-up"></div>

	<!-- External JavaScripts
	============================================= -->
	<script type="text/javascript" src="js/formValidate.js"></script>
	<script type="text/javascript" src="js/jquery.validate.js"></script>

	
	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/plugins.js"></script>

	<!-- custom js  -->
	<script type="text/javascript" src="js/custom.js"></script>

	<!-- Footer Scripts
	============================================= -->
	<script type="text/javascript" src="js/functions.js"></script>

	<!-- <script type="text/javascript" src="https://maps.google.com/maps/api/js?key=AIzaSyDMxJ92oBkSnVNHFX3R8XhtYQPEgk1_IiI"></script> -->
	<script type="text/javascript" src="js/jquery.gmap.js"></script>

	<script type="text/javascript">

		jQuery('#google-map').gMap({

			address: 'Melbourne, Australia',
			maptype: 'ROADMAP',
			zoom: 14,
			markers: [
				{
					address: "Melbourne, Australia",
					html: '<div style="width: 300px;"><h4 style="margin-bottom: 8px;">Hi, we\'re <span>Envato</span></h4><p class="nobottommargin">Our mission is to help people to <strong>earn</strong> and to <strong>learn</strong> online. We operate <strong>marketplaces</strong> where hundreds of thousands of people buy and sell digital goods every day, and a network of educational blogs where millions learn <strong>creative skills</strong>.</p></div>',
					icon: {
						image: "images/icons/map-icon-red.png",
						iconsize: [32, 39],
						iconanchor: [32,39]
					}
				}
			],
			doubleclickzoom: false,
			controls: {
				panControl: true,
				zoomControl: true,
				mapTypeControl: true,
				scaleControl: false,
				streetViewControl: false,
				overviewMapControl: false
			}

		});
	</script>

</body>
</html>