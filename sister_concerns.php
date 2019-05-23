<!DOCTYPE html>
<html>
	<head>

		<?php include ('app.php'); ?>

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
									<li class="active">Sister Concerns</li>
								</ul>
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<h1>Sister Concerns</h1>
							</div>
						</div>
					</div>
				</section>

				<!-- Google Maps - Go to the bottom of the page to change settings and map location. -->
				<div style="text-align: center;">
					<img src="img/map.png" style="height: 560px; width: 960px;">
				</div>
				<div style="background-image: url('img/products_backgrouns.png'); background-repeat: round; background-attachment: fixed">
					<div class="container" >
						<div style="text-align: center;">
							<h2><p style="color:#fff;padding: 30px 0px;">Our Companies</p></h2>
						</div>
						

						<p style="color: #fff; margin-top: 8px"><font size="3">Cox's Bazar Seafood (CBSF) and its group of companies offer the finest frozen seafood and freshwater fish products to wholesale businesses and retail trades around the world. They are established on the foundation of quality, reliability, variety, and consistency. They take sincere and well-deserved pride in sourcing its products from the grassroots fishermen, fish farmers and companies that focus on sustainability. Since CBSF is directly sourcing its products, it avoids several layers in the procurement and distribution process with zero compromises to quality. This allows FresHeaven and CBSF to supply high-quality products at competitive prices. CBSF and its group of companies currently supply to clients located in Canada, Australia, China, Dubai, United Kingdom, and the United States.</font></p>

						<div class="row" style="margin-bottom: 16px;">
					        <div class="col-lg-4 mb-4"> 
					        	<img src="img/sister_concerns/1.jpg" style="width: 348px; height: 258px;">
					        	<h3 style="color: #fff; margin-top: 8px;">Cox's Bazar Seafood</h3>
					        	<h4 style="color: #fff;">Dhaka and Cox's Bazar, Bangladesh.</h4>
					        	<p style="color: #fff;">Cox's Bazar Seafood (CBSF) was established in 1986 and strategically located itself in the seaside city of Cox's Bazar, Bangladesh, with the goal to source and export the highest quality and sustainable frozen seafood and freshwater fish products. Using its state of the art processing plant, freezers, and packaging machines, CBSF has successfully maintained consistent quality and supplies seafood and freshwater fish to clients around the world.</p>
					        	<p style="color: #fff;">Address: Hajee Para, Zhilongja, Main Road, Cox's Bazar, Bangladesh.</p>
					        </div>

					        
					        <div class="col-lg-4 mb-4">
					        	<img src="img/sister_concerns/2.jpg" style="width: 348px; height: 258px;">
					        	<h3 style="color: #fff; margin-top: 8px;">A&Z International Co. Ltd. & Global Seafood Processing Limited</h3>
					        	<h4 style="color: #fff;">Yangon, Myanmar.</h4>
					        	<p style="color: #fff;">The pursuit of quality and variety led CBSF to expand to its neighbouring country Myanmar in 1991. A&Z International Co. Ltd. (A&Z) and Global Seafood Processing (GSP) ware established and a new state of the art processing factory, including freezing and packaging, was built. Using this strategic location, A&Z and GSP continue to purchase, freeze, package, and export the highest quality of sustainable seafood and freshwater fish.</p>

					        	<p style="color: #fff;">Address:No - 46/B, New Excellent Condo, Room# 4 (C), Pantra Street, Paya Gyi Ward, Dangon Township, Yangon, Myanmar.</p>
					        </div>
					        

					        <div class="col-lg-4 mb-4">
					        	<img src="img/sister_concerns/3.jpg" style="width: 348px; height: 258px;">
					        	<h3 style="color: #fff; margin-top: 8px;">Mazoon Sky International L.L.C.</h3>
					        	<h4 style="color: #fff;">Muscat, Oman.</h4>
					        	<p style="color: #fff;">The increasing reputation for consistent  quality seafood and freshwater fish, and respecting the client's urgency helped the group to grow more. Mazoon Sky International (MSI) LLC was strategically established in Muscat, Oman's seaport capital, in 2016, to meet the increasing demand for seafood. MSI continues to source and export premium quality sustainable seafood to clients around the world.</p>
					        	<p style="color: #fff;">Address: C.R. No. 1294513, P.O. Box: 91, P.C.: 114, Sultanate of Oman</p>
					      	</div>
						</div>
					</div>

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
