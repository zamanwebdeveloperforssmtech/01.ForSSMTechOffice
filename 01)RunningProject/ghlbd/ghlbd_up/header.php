<!DOCTYPE html>
<html lang="en">

	<head>
	    <meta charset="utf-8">
	    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	    <meta name="viewport" content="width=device-width, initial-scale=1">
	    <meta name="description" content="">
	    <meta name="author" content="">
        <link rel="icon" href="favicon.ico" type="image/x-icon">
	    <title>GHL International</title>
	    <!-- Web Fonts -->
        <link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700,900,200italic,300italic,400italic,600italic,700italic,900italic' rel='stylesheet' type='text/css'>
        <!-- Bootstrap Core CSS -->
	    <link href="css/bootstrap.min.css" rel="stylesheet">
	    <!-- Flaticon CSS -->
	    <link href="fonts/flaticon/flaticon.css" rel="stylesheet">
	    <!-- font-awesome CSS -->
	    <link href="css/font-awesome.min.css" rel="stylesheet">
	    <!-- Offcanvas CSS -->
	    <link href="css/hippo-off-canvas.css" rel="stylesheet">
	    <!-- animate CSS -->
	    <link href="css/animate.css" rel="stylesheet">
	    <!-- language CSS -->
	    <link href="css/language-select.css" rel="stylesheet">
	    <!-- owl.carousel CSS -->
	    <link href="owl.carousel/assets/owl.carousel.css" rel="stylesheet">
		<!-- magnific-popup -->
    	<link href="css/magnific-popup.css" rel="stylesheet">
    	<!-- Main menu -->
    	<link href="css/menu.css" rel="stylesheet">
    	<!-- Template Common Styles -->
    	<link href="css/template.css" rel="stylesheet">
	    <!-- Custom CSS -->
	    <link href="css/style.css" rel="stylesheet">
	    <!-- Responsive CSS -->
	    <link href="css/responsive.css" rel="stylesheet">

	    <script src="js/vendor/modernizr-2.8.1.min.js"></script>
	    <!-- HTML5 Shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	    <!--[if lt IE 9]>
		    <script src="js/vendor/html5shim.js"></script>
		    <script src="js/vendor/respond.min.js"></script>
	    <![endif]-->
		
		
	
<script type="text/javascript" src="canvas.js"></script>
<script type="text/javascript">
	var cSpeed=16;
	var cWidth=64;
	var cHeight=64;
	var cTotalFrames=20;
	var cFrameWidth=64;
	var cImageSrc='animation/sprites.gif';
	
	var cImageTimeout=false;
	
	function startAnimation(){
		
		document.getElementById('loaderImage').innerHTML='<canvas id="canvas" width="'+cWidth+'" height="'+cHeight+'"><p>Your browser does not support the canvas element.</p></canvas>';
		
		//FPS = Math.round(100/(maxSpeed+2-speed));
		FPS = Math.round(100/cSpeed);
		SECONDS_BETWEEN_FRAMES = 1 / FPS;
		g_GameObjectManager = null;
		g_run=genImage;

		g_run.width=cTotalFrames*cFrameWidth;
		genImage.onload=function (){cImageTimeout=setTimeout(fun, 0)};
		initCanvas();
	}
	
	
	function imageLoader(s, fun)//Pre-loads the sprites image
	{
		clearTimeout(cImageTimeout);
		cImageTimeout=0;
		genImage = new Image();
		genImage.onload=function (){cImageTimeout=setTimeout(fun, 0)};
		genImage.onerror=new Function('alert(\'Could not load the image\')');
		genImage.src=s;
	}
	
	//The following code starts the animation
	new imageLoader(cImageSrc, 'startAnimation()');
</script>
		
		
	</head>


	<body id="page-top">
		<div id="st-container" class="st-container">
		    <div class="st-pusher">
	        	<div class="st-content">
				  	<header class="header">
				  		<nav class="top-bar">
				  			<div class="overlay-bg">
					  			<div class="container">
					  				<div class="row">
					  					
					  					<div class="col-sm-6 col-xs-12">
						  					<div class="call-to-action">
						  						<ul class="list-inline">
						  							<li><a href="#"><i class="fa fa-phone"></i> +88-01707073438</a></li>
						  							<li><a href="#"><i class="fa fa-envelope"></i>texcourier@gmail.com</a></li>
						  						<li><a href="#"><i class="fa fa-envelope"></i>info@shifaintl.com</a></li>
												</ul>
						  					</div><!-- /.call-to-action -->
					  					</div><!-- /.col-sm-6 -->

					  						<div class="col-sm-6 hidden-xs">
						  					<div class="topbar-right">
							  					<div class="lang-support pull-right">
													<select class="cs-select cs-skin-elastic">
														<option value="" disabled selected>Language</option>
														<option value="united-kingdom" data-class="flag-uk">English</option>
														<option value="france" data-class="flag-france">French</option>
														<option value="spain" data-class="flag-spain">Spanish</option>
														<option value="south-africa" data-class="flag-bd">Bengali</option>
													</select>
												</div>

						  						<ul class="social-links list-inline pull-right">
						  							<li><a href="#"><i class="fa fa-facebook"></i></a></li>
						  							<li><a href="#"><i class="fa fa-twitter"></i></a></li>
						  							<li><a href="#"><i class="fa fa-instagram"></i></a></li>
						  							<li><a href="#"><i class="fa fa-tumblr"></i></a></li>
						  						</ul>
						  					</div><!-- /.social-links -->
					  					</div><!-- /.col-sm-6 -->
						  				
					  				</div><!-- /.row -->
					  			</div><!-- /.container -->
				  			</div><!-- /.overlay-bg -->
				  		</nav><!-- /.top-bar -->

				  	
						
						<nav class="navbar navbar-default" role="navigation">
						
							<div class="container mainnav">
							
							
								<div class="navbar-header">
									
								

									<!-- offcanvas-trigger -->
			                       
								</div>

								<!-- Collect the nav links, forms, and other content for toggling -->
								<div class="collapse navbar-collapse navbar-collapse">

									

					                <span class="search-button pull-right"></span>

									<ul class="nav navbar-nav navbar-right">
										<!-- Home --><li><div id="loaderImag"></div></li>
										<li>	<img src="img/SAN_EXPRESS_logo.gif" alt=""></li>
                                        <li class="dropdown active"><a href="index.php">Home</a></li>
                                        <!-- /Home -->
									
											<li><a href="index.php?page=about_company">About Company</a></li>
											<li><a href="index.php?page=our_service">Our Service</a></li>
											

											<li><a href="index.php?page=terms_condition">Terms And Condition</a></li>

											<li><a href="index.php?page=contact_us">Contact Us</a></li>

											

											<li><a href="index.php?page=webmail">Webmail</a></li>
                                        <!-- Pages -->
                                       <!--  <li class="dropdown"><a href="#">Pages <span class="fa fa-angle-down"></span></a>
                                             submenu-wrapper
                                            <div class="submenu-wrapper">
                                                <div class="submenu-inner">
                                                    <ul class="dropdown-menu">
                                                    	<li><a href="about.html">About</a></li>
                                                        <li><a href="service.html">Service</a></li>
                                                        <li><a href="our-people.html">Our people</a></li>
                                                        <li><a href="career.html">Career</a></li>
                                                        <li><a href="faq.html">FAQ Page</a></li>
                                                        <li><a href="typography.html">Typography</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                             /submenu-wrapper
                                        </li> -->
										
										
										
										
										
										
										
										
                                        <!-- /Pages -->

                                        <!-- Services -->
                                        <!-- <li class="dropdown"><a href="#">Services <span class="fa fa-angle-down"></span></a>
                                             submenu-wrapper
                                            <div class="submenu-wrapper">
                                                <div class="submenu-inner">
                                                    <ul class="dropdown-menu">
                                                    	<li><a href="air.html">Air transportation</a></li>
                                                        <li><a href="marine.html">Marine transportation</a></li>
                                                        <li><a href="moving.html">Moving & storage</a></li>
                                                        <li><a href="shipping.html">Shipping & operations</a></li>
                                                        <li><a href="transportation.html">Transportation logistics</a></li>
                                                        <li><a href="trucking.html">Trucking</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                             /submenu-wrapper
                                        </li>-->
                                        <!-- MEGA MENU -->
											
											
											
											
											
											 <!--<li class="dropdown mega-fw has-megamenu"><a href="#" data-toggle="dropdown" class="dropdown-toggle">Features <span class="fa fa-angle-down"></span></a>
												 megamenu-wrapper
												<div class="submenu-wrapper megamenu-wrapper">
													<div class="submenu-inner megamenu-inner">
													
														<ul class="dropdown-menu">
															<li>
																<div class="mega-content">
																	<div class="row">
																	
																		<div class="col-sm-3 mega-col">
																			<ul>
																				<li class="dropdown-header">Features</li>
																				<li><a href="#">100% Responsive</a></li>
																				<li><a href="#">Animations</a></li>
																				<li><a href="#">Bootstrap 3+</a></li>
																				<li><a href="#">Valid Markups</a></li>
																				<li><a href="#">Mega Menu</a></li>
																				<li><a href="#">Free Supports And Update</a></li>
																			</ul>
																		</div> /.col
																		
																		
																		<div class="col-sm-3 mega-col">
																			<ul>
																				<li class="dropdown-header">Pages</li>
																				<li><a href="about.html">About</a></li>
						                                                        <li><a href="service.html">Service</a></li>
						                                                        <li><a href="our-people.html">Our people</a></li>
						                                                        <li><a href="career.html">Career</a></li>
						                                                        <li><a href="faq.html">FAQ Page</a></li>
						                                                        <li><a href="typography.html">Typography</a></li>
																			</ul>
																		</div> /.col


																		<div class="col-sm-3 mega-col">
																			<ul>
																				<li class="dropdown-header">Services</li>
																				<li><a href="air.html">Air transportation</a></li>
						                                                        <li><a href="marine.html">Marine transportation</a></li>
						                                                        <li><a href="moving.html">Moving & storage</a></li>
						                                                        <li><a href="shipping.html">Shipping & operations</a></li>
						                                                        <li><a href="transportation.html">Transportation logistics</a></li>
						                                                        <li><a href="trucking.html">Trucking</a></li>
																			</ul>
																		</div> /.col


																		<div class="col-sm-3 mega-col">
																			<ul>
																				<li class="dropdown-header">Typography</li>
																				<li><a href="#">Bootstrap grids</a></li>
																				<li><a href="#">Google fonts</a></li>
																				<li><a href="#">Fontawesome icons</a></li>
																				<li><a href="#">Flat icons</a></li>
																				<li><a href="#">Tabs</a></li>
																				<li><a href="#">Button elements</a></li>
																			</ul>
																		</div> /.col
																	</div>/.row
																</div>/.mega-content
															</li>
														</ul>/.dropdown menu
													</div>/.megamenu-inner
												</div>/.megamenu-wrapper
											</li>--> <!-- /MEGA MENU -->
                                        <!-- /Pages -->
										<!-- Blog -->
                                       


									   <!--<li class="dropdown"><a href="#">Blog <span class="fa fa-angle-down"></span></a>
                                             submenu-wrapper
                                            <div class="submenu-wrapper">
                                                <div class="submenu-inner">
                                                    <ul class="dropdown-menu">
                                                    	<li><a href="blog.html">Standard blog</a></li>
                                                        <li><a href="blog-single.html">Single blog</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            /submenu-wrapper
                                        </li>-->
										<!--<li><a href="contact.html">Contact</a></li>-->
									</ul>
								</div><!-- /.navbar-collapse -->
							</div><!-- /.container -->

							
						</nav>
					</header>

                    <div id="main-carousel" class="carousel slide hero-slide" data-ride="carousel">
                        <!-- Indicators -->
                        <ol class="carousel-indicators">
                            <li data-target="#main-carousel" data-slide-to="0" class="active"></li>
                            <li data-target="#main-carousel" data-slide-to="1"></li>
                        </ol>

                        <!-- Wrapper for slides -->
                        <div class="carousel-inner" role="listbox">
                            <div class="item active">
                                <img src="img/slider/slide-1.jpg" alt="Hero Slide">
                                <!--Slide Image-->

                                <div class="container">
                                    <div class="carousel-caption">
                                        <small class="animated fadeIn">CALL US TODAY :</small>
                                        <div class="phone animated lightSpeedIn">+8801707073438/ +8801910400776</div>
                                          <h1 class="animated bounceIn">T.EX INTERNATIONAL</h1><BR/>
										<h1 class="animated bounceIn">WORLD WIDE COURIER</h1>

                                        <p class="lead animated lightSpeedIn"></p>

                                        <a class="btn btn-primary animated lightSpeedIn" href="#">Work With Us Today</a>
                                    </div>
                                    <!--.carousel-caption-->
                                </div>
                                <!--.container-->
                            </div>
                            <!--.item-->

                            <div class="item">
                                <img src="img/slider/slide-2.jpg" alt="Hero Slide">
                                <!--Slide Image-->

                                <div class="container">
                                    <div class="carousel-caption">

                                        <h1 class="animated bounceIn">.</h1><BR/>
										<h1 class="animated bounceIn">.</h1>

                                        <p class="lead animated bounceIn">.</p>
                                        <a class="btn btn-primary animated bounceIn" href="#">Work With Us Today</a>
                                    </div>
                                    <!--.carousel-caption-->
                                </div>
                                <!--.container-->
                            </div>
                            <!--.item-->
                        </div>
                        <!--.carousel-inner-->

                        <!-- Controls -->
                        <a class="left carousel-control" href="#main-carousel" role="button" data-slide="prev">
                            <i class="fa fa-angle-left" aria-hidden="true"></i>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="right carousel-control" href="#main-carousel" role="button" data-slide="next">
                            <i class="fa fa-angle-right" aria-hidden="true"></i>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                    <!-- #main-carousel-->
					
					
	<section class="cta-section">
		<div class="container">			 
		<form  id="frmtrack" action="shipment.php" method="post" style="padding-top:0px;" target="window.open('shipment.php','Tracking Info','status=1,toolbar=1,location=no')"> 
			<div class="row">
											<div class="col-md-2">
												<div class="form-group"></br>
												   
												    <input name="track_no" id="track_no" type="text" onfocus="if (this.value==this.defaultValue) 
						this.value='';" onblur="if (this.value=='') this.value=this.defaultValue;" class="form-control"  required="" placeholder="Enter way bill no" autofocus>
												</div>
											</div></br>
											<div class="col-md-4">
											 <button type="submit"  class="btn btn-primary">Track</button>
										</div>
		</form> 
			<form name="the_form" id="frmlogin" method="post" action="index.php">
											<div class="col-md-2">
												<div class="form-group">
											
												    <input id="userid" name="user_id" type="text" class="form-control"  required="" placeholder="User ID">
												</div>
											</div>
											<div class="col-md-2">
											  <div class="form-group">
											 
											    <input id="password" name="user_pass" type="user_pass" class="form-control" placeholder="Password">
											  </div>
											</div>
											<div class="col-md-2">
											 <button type="submit" class="btn btn-primary">Login</button>
										</div>
							      </div>
			
							  	
			</form>
		</div>
	</section>
 <?php

	
	?>