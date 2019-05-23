<!-- style="background-image: url(img/head_background.jpg);" -->
<header id="header"  data-plugin-options='{"stickyEnabled": true, "stickyEnableOnBoxed": true, "stickyEnableOnMobile": true, "stickyStartAt": 57, "stickySetTop": "-47px", "stickyChangeLogo": true}'>
				<div class="header-body" style="background-color: #fff" >
					<div class="header-container container">
						<div class="header-row">
							<div class="header-column _col-xs-8 _col-md-4">
								<a href="cbsf.php"><img class="mySlides" src="img/logos/c.png" style="width: 128px; height: 100px;"></a>
								<a href="#"><img class="mySlides" src="img/logos/a_z.png" style="width: 128px; height: 100px;"></a>
								<a href="#"><img class="mySlides" src="img/logos/gsp.png" style="width: 128px; height: 100px;"></a>
								<a href="mazoon.php"><img class="mySlides" src="img/logos/msi.png" style="width: 128px; height: 100px;"></a>
								<a href="#"><img class="mySlides" src="img/logos/ah.png" style="width: 128px; height: 100px;"></a>
								<!-- <img class="mySlides" src="img/a.jpg"> -->

								<button class="btn header-btn-collapse-nav" data-toggle="collapse" data-target=".header-nav-main">
											<i class="fa fa-bars"></i>
										</button>
							</div>
							<div class="header-column _col-xs-4 _col-md-8">
								<!-- <div class="header-row">
								
									
								</div> -->
								<div class="header-row">
									<div class="header-nav">
										
										
										<style>
											.menu1:hover{
												color: #fff !important;

											}
										</style>
										<div class="header-nav-main header-nav-main-effect-1 header-nav-main-sub-effect-1 collapse">
											<nav>
												<ul class="nav nav-pills" id="mainNav">
													<li class="dropdown dropdown-mega">
														<a href="index.php" class="menu1" style="color: #01579b">Home</a>
													</li>
													<li class="dropdown dropdown-mega">
														<a href="about_us.php" class="menu1" style="color: #01579b">About Us</a>
													</li>
													<!-- <li class="dropdown dropdown-mega">
														<a href="team.php">Team</a>
													</li> -->
													<li class="dropdown">
														<a class="dropdown-toggle menu1" href="products.php" style="color: #01579b;">Products</a>
														<ul class="dropdown-menu">
															<li><a href="fresh_water_fish.php" >Fresh water Fish</a></li>
															<li><a href="salt_water_fish.php">Sea Water Fish</a></li>
															<li><a href="shrimp_sea_food.php">Shrimp & other Sea Foods</a></li>
															<!-- <li><a href="sea_food.php">Other Sea Foods</a></li> -->
														</ul>
													</li>
													<li class="dropdown">
														<a class="dropdown-toggle menu1" href="sister_concerns.php"  style="color: #01579b">Sister Concerns</a>
														<ul class="dropdown-menu">
															<li><a href="cbsf.php" >Cox's Bazar Sea Foods</a></li>
															<li><a href="a&z.php">A&Z International Co., Ltd. &<br> Global Seafoods Processing Ltd.</a></li>
															<li><a href="mazoon.php">Mazoon Sky International Co. Ltd.</a></li>
														</ul>
													</li>
													<li class="dropdown dropdown-mega">
														<a href="http://farmersmarket.asia/cbsf/login" class="menu1" target="_blank" style="color: #01579b">e-Traceability</a>
													</li>
													<li class="dropdown dropdown-mega">
														<a href="contact_us.php" class="menu1" style="color: #01579b">Contact Us</a>
													</li>		
													
													<!-- <li class="dropdown">
														<a class="dropdown-toggle" href="#">Login</a>
														<ul class="dropdown-menu">
															<li><a href="buyer/index.php" >Buyer</a></li>
															<li><a href="sales/index.php">Seller</a></li>
														</ul>
													</li> -->
												</ul>
											</nav>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</header>

			<script>
				var myIndex = 0;
				carousel();

				function carousel() {
				    var i;
				    var x = document.getElementsByClassName("mySlides");
				    for (i = 0; i < x.length; i++) {
				       x[i].style.display = "none";  
				    }
				    myIndex++;
				    if (myIndex > x.length) {myIndex = 1}    
				    x[myIndex-1].style.display = "block";  
				    setTimeout(carousel, 6000); // Change image every 2 seconds
				}
				</script>
