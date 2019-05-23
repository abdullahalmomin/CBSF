<!-- style="background-image: url(img/head_background.jpg);" -->
<header id="header" data-plugin-options='{"stickyEnabled": true, "stickyEnableOnBoxed": true, "stickyEnableOnMobile": true, "stickyStartAt": 57, "stickySetTop": "-47px", "stickyChangeLogo": true}'>
				<div class="header-body" >
					<div class="header-container container">
						<div class="header-row">
							<div class="header-column">
								<a href="cbsf.php"><img class="mySlides" src="../img/logos/cbsf.png"></a>
								<a href="#"><img class="mySlides" src="../img/logos/a_z.png"></a>
								<a href="#"><img class="mySlides" src="../img/logos/gsp.png"></a>
								<a href="mazoon.php"><img class="mySlides" src="../img/logos/msi.png"></a>
								<a href="#"><img class="mySlides" src="../img/logos/ah.png"></a>
								<!-- <img class="mySlides" src="img/a.jpg"> -->
							</div>
							<div class="header-column">
								<!-- <div class="header-row">
								
									
								</div> -->
								<div class="header-row">
									<div class="header-nav">
										<button class="btn header-btn-collapse-nav" data-toggle="collapse" data-target=".header-nav-main">
											<i class="fa fa-bars"></i>
										</button>
										
										<div class="header-nav-main header-nav-main-effect-1 header-nav-main-sub-effect-1 collapse">
											<nav>
												<ul class="nav nav-pills" id="mainNav">
													<li class="dropdown dropdown-mega">
														<a href="index.php">Home</a>
													</li>
													<li class="dropdown dropdown-mega">
														<a href="about_us.php">About Us</a>
													</li>
													<!-- <li class="dropdown dropdown-mega">
														<a href="team.php">Team</a>
													</li> -->
													<li class="dropdown">
														<a class="dropdown-toggle" href="products.php">Products</a>
														<ul class="dropdown-menu">
															<li><a href="fresh_water_fish.php" >Fresh water Fish</a></li>
															<li><a href="salt_water_fish.php">Salt water Fish</a></li>
															<li><a href="shrimp_sea_food.php">Shrimp and Other Sea Food</a></li>
														</ul>
													</li>
													<li class="dropdown">
														<a class="dropdown-toggle" href="#">Sister Concerns</a>
														<ul class="dropdown-menu">
															<li><a href="cbsf.php" >Cox's Bazar Sea Foods</a></li>
															<li><a href="a&z.php">A&Z International Co., Ltd. &<br> Global Seafoods Processing Ltd.</a></li>
															<li><a href="mazoon.php">Mazoon Sky International Co. Ltd.</a></li>
														</ul>
													</li>
													<li class="dropdown dropdown-mega">
														<a href="contact_us.php">Contact Us</a>
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
