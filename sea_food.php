<!DOCTYPE html>
<html>
	<head>

		<?php include ('app.php'); ?>

	</head>
	<body>

		<div class="body" style="background-image: url('img/products_backgrouns.png'); background-repeat: round; background-attachment: fixed">
			<?php include ('header.php'); ?>

			<div role="main" class="main">

				<section class="page-header">
					<div class="container">
						<div class="row">
							<div class="col-md-12">
								<ul class="breadcrumb">
									<li><a href="index.php">Home</a></li>
									<li class="active">Shrimp and Other Sea Food</li>
								</ul>
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<h1>Shrimp and Other Sea Food</h1>
							</div>
						</div>
					</div>
				</section>
				<div style="text-align: center;">
					<h1 style="color:#fff">Sea Food</h1>
				</div>

				<!-- Google Maps - Go to the bottom of the page to change settings and map location. -->
				<div class="container" style="text-align: center;">
					<ul class="portfolio-list sort-destination full-width-spaced mb-xl" data-sort-id="portfolio" id="homeOverview">
					<li class="col-md-3 col-sm-6 col-xs-12 isotope-item classic">
						<div class="portfolio-item center">
							<a href="calamari.php" class="text-decoration-none block-link pt-md">
								<span class="thumb-info thumb-info-preview thumb-info-preview-long mb-md">
									<span class="thumb-info-wrapper">
										<span class="thumb-info-image" data-original="img/fish/calmari.jpg" data-plugin-lazyload></span>
									</span>
								</span>
								<h5 class="mb-xs">Calamari (Squid)</h5>
							</a>
						</div>
					</li>
					<li class="col-md-3 col-sm-6 col-xs-12 isotope-item classic">
						<div class="portfolio-item center">
							<a href="cuttlefish.php" class="text-decoration-none block-link pt-md">
								<span class="thumb-info thumb-info-preview thumb-info-preview-long mb-md">
									<span class="thumb-info-wrapper">
										<span class="thumb-info-image" data-original="img/fish/cuttlefish.jpg" data-plugin-lazyload></span>
									</span>
								</span>
								<h5 class="mb-xs">Cuttlefish</h5>
							</a>
						</div>
					</li>
					
					<li class="col-md-3 col-sm-6 col-xs-12 isotope-item corporate">
						<div class="portfolio-item center">
							<a href="soft-shell-crab.php" class="text-decoration-none block-link pt-md">
								<span class="thumb-info thumb-info-preview thumb-info-preview-long mb-md">
									<span class="thumb-info-wrapper">
										<span class="thumb-info-image" data-original="img/fish/mud_crab.png" data-plugin-lazyload></span>
									</span>
								</span>
								<h5 class="mb-xs">Mud Crab</h5>
							</a>
						</div>
					</li>
				</ul>
				</div>

				

			

			<?php include('footer.php'); ?>
		</div>

		<!-- Vendor -->
		<script src="vendor/jquery/jquery.js"></script>
		<script src="vendor/jquery.appear/jquery.appear.js"></script>
		<script src="vendor/jquery.easing/jquery.easing.js"></script>
		<script src="vendor/jquery-cookie/jquery-cookie.js"></script>
		<script src="vendor/bootstrap/js/bootstrap.js"></script>
		<script src="vendor/common/common.js"></script>
		<script src="vendor/jquery.validation/jquery.validation.js"></script>
		<script src="vendor/jquery.stellar/jquery.stellar.js"></script>
		<script src="vendor/jquery.easy-pie-chart/jquery.easy-pie-chart.js"></script>
		<script src="vendor/jquery.gmap/jquery.gmap.js"></script>
		<script src="vendor/jquery.lazyload/jquery.lazyload.js"></script>
		<script src="vendor/isotope/jquery.isotope.js"></script>
		<script src="vendor/owl.carousel/owl.carousel.js"></script>
		<script src="vendor/magnific-popup/jquery.magnific-popup.js"></script>
		<script src="vendor/vide/vide.js"></script>
		
		<!-- Theme Base, Components and Settings -->
		<script src="js/theme.js"></script>

		<!-- Current Page Vendor and Views -->
		<script src="js/views/view.contact.js"></script>
		
		<!-- Theme Custom -->
		<script src="js/custom.js"></script>
		
		<!-- Theme Initialization Files -->
		<script src="js/theme.init.js"></script>

		<script src="http://maps.google.com/maps/api/js?sensor=false"></script>
		<script>

			/*
			Map Settings

				Find the Latitude and Longitude of your address:
					- http://universimmedia.pagesperso-orange.fr/geo/loc.htm
					- http://www.findlatitudeandlongitude.com/find-address-from-latitude-and-longitude/

			*/

			// Map Markers
			var mapMarkers = [{
				address: "New York, NY 10017",
				html: "<strong>New York Office</strong><br>New York, NY 10017",
				icon: {
					image: "img/pin.png",
					iconsize: [26, 46],
					iconanchor: [12, 46]
				},
				popup: true
			}];

			// Map Initial Location
			var initLatitude = 40.75198;
			var initLongitude = -73.96978;

			// Map Extended Settings
			var mapSettings = {
				controls: {
					draggable: (($.browser.mobile) ? false : true),
					panControl: true,
					zoomControl: true,
					mapTypeControl: true,
					scaleControl: true,
					streetViewControl: true,
					overviewMapControl: true
				},
				scrollwheel: false,
				markers: mapMarkers,
				latitude: initLatitude,
				longitude: initLongitude,
				zoom: 16
			};

			var map = $("#googlemaps").gMap(mapSettings);

			// Map Center At
			var mapCenterAt = function(options, e) {
				e.preventDefault();
				$("#googlemaps").gMap("centerAt", options);
			}

		</script>

		<!-- Google Analytics: Change UA-XXXXX-X to be your site's ID. Go to http://www.google.com/analytics/ for more information.
		<script>
			(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
			(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
			m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
			})(window,document,'script','//www.google-analytics.com/analytics.js','ga');
		
			ga('create', 'UA-12345678-1', 'auto');
			ga('send', 'pageview');
		</script>
		 -->

	</body>
</html>
