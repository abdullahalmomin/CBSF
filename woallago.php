<!DOCTYPE html>
<html>
	<head>
		<?php include ("app.php"); ?>
		<link rel="stylesheet" href="fish/css/a.css" charset="utf-8">
	</head>
	<body>

		<div class="body">
			<?php include ('header.php'); ?>


			<div role="main" class="main">

				<section class="page-header">
					<div class="container">
						<div class="row">
							<div class="col-md-12">
								<ul class="breadcrumb">
									<li><a href="#">Home</a></li>
									<li class="active">Products</li>
								</ul>
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<h1>Products</h1>
							</div>
						</div>
					</div>
				</section>


				<div class="container">

					 <div class="row">
						<div class="col-md-6">
							<!--Slider Will goes here-->
								<div id="container">
						            <ul class="slide">
						                <li class="first" id="slide-1"><img src="fish/woallago/1.webp" alt="" /></li>
						            </ul>
						            <br>
						            <ul class="thumbs">
						                <li><a href="#slide-1"><img src="fish/woallago/1.webp" /></a></li>
						            </ul>
						        </div>
						</div> 
						<div class="col-md-6">

							<h4 class="heading-primary mt-lg">Fish <strong>Name</strong></h4>
							<h5>Woallago</h5>				
							<h5>Family: Siluridae</h5>
							<h5>Scientific Name: Wallago attu</h5>

							<hr>

							<h4 class="heading-primary">Fish Details</h4>
							<p>
								<h5>Available sizes: 2, 3, 4-10 Kg Up</h5>
								<h5>Types: Gutted</h5>
								<h5>Wallago is a freshwater popular catfish of South and Southeast Asia.</h5>
							</p>
							</ul>

							<hr>

							<h4 class="heading-primary">Health Benefit</h4>
							<p>Rich source of Fatty acids and Protein.</p>

						</div>

					</div>

				</div>

			</div>

			<?php include('footer.php'); ?>

		</div>

		<!-- Vendor -->
		<script src="../vendor/jquery/jquery.js"></script>
		<script src="../vendor/jquery.appear/jquery.appear.js"></script>
		<script src="../vendor/jquery.easing/jquery.easing.js"></script>
		<script src="../vendor/jquery-cookie/jquery-cookie.js"></script>
		<script src="../vendor/bootstrap/js/bootstrap.js"></script>
		<script src="../vendor/common/common.js"></script>
		<script src="../vendor/jquery.validation/jquery.validation.js"></script>
		<script src="../vendor/jquery.stellar/jquery.stellar.js"></script>
		<script src="../vendor/jquery.easy-pie-chart/jquery.easy-pie-chart.js"></script>
		<script src="../vendor/jquery.gmap/jquery.gmap.js"></script>
		<script src="../vendor/jquery.lazyload/jquery.lazyload.js"></script>
		<script src="../vendor/isotope/jquery.isotope.js"></script>
		<script src="../vendor/owl.carousel/owl.carousel.js"></script>
		<script src="../vendor/magnific-popup/jquery.magnific-popup.js"></script>
		<script src="../vendor/vide/vide.js"></script>
		
		<!-- Theme Base, Components and Settings -->
		<script src="../js/theme.js"></script>

		<!-- Current Page Vendor and Views -->
		<script src="../js/views/view.contact.js"></script>
		
		<!-- Theme Custom -->
		<script src="../js/custom.js"></script>
		
		<!-- Theme Initialization Files -->
		<script src="../js/theme.init.js"></script>

		<script src="../http://maps.google.com/maps/api/js?sensor=false"></script>
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
