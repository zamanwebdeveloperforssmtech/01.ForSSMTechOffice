<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package AccesspressLite
 */
?>
<!DOCTYPE html> 
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
		<!-- Bootstrap Core CSS -->
		<link href="css/bootstrap.min.css" rel="stylesheet">
		
		<link rel="profile" href="http://gmpg.org/xfn/11">
		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
		<!--[if lt IE 9]>
		<script src="<?php //echo get_template_directory_uri(); ?>/js/html5.min.js"></script>
		<![endif]-->
	<?php wp_head(); ?>
	<style>
		.color{color:blue}
	</style>
	</head>

<body <?php body_class(); ?>>
<?php
global $accesspresslite_options;
$accesspresslite_settings = get_option( 'accesspresslite_options', $accesspresslite_options );
?>
<div id="page" class="site">

	<header id="masthead" class="site-header">
    <div id="top-header">
		<div class="ak-container">
			<div class="site-branding">
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>">				
				<?php if ( get_header_image() ) { ?>
					<img src="<?php header_image(); ?>" alt="<?php bloginfo('name') ?>">
				<?php }else{ ?>
					<h1 class="site-title"><?php echo bloginfo('title'); ?></h1>
					<div class="tagline site-description"><?php echo bloginfo('description'); ?></div>
				<?php } ?>		
				</a>
				
			</div><!-- .site-branding -->

			<div class="right-header clearfix">
				<?php 
				do_action( 'accesspresslite_header_text' ); 
                ?>
                <div class="clearfix"></div>
                <?php
				/** 
				* @hooked accesspresslite_social_cb - 10
				*/
				if($accesspresslite_settings['show_social_header'] == 0){
				do_action( 'accesspresslite_social_links' ); 
				}
				
				

				if($accesspresslite_settings['show_search'] == 1){ ?>
				
				<?php } ?>
			<div class="ak-search">
				<a href="https://www.facebook.com/basl71" target="_blank"><img src="social-profiles/facebook.png" width="32" height="32" /></a>
				<a href="https://twitter.com/BengalApparel" target="_blank"><img src="social-profiles/twitter.png" width="32" height="32" /></a>
                <a href="https://www.linkedin.com/company/bengal-apparel-sourcing-limited--basl" target="_blank"><img src="social-profiles/linkedin.png" width="32" height="32" /></a>
                <a href="https://www.youtube.com/channel/UCkl3BL9UnQ-vfSMHlCAONxQ" target="_blank"><img src="social-profiles/youtube.png" width="32" height="32" /></a>
				<a href="https://plus.google.com/b/108403791543949724292/108403791543949724292/posts"><img src="social-profiles/gplus.png" width="32" height="32" /></a>
                <a href="https://www.pinterest.com/bengalapparel"><img src="social-profiles/pinterest.png" width="32" height="32" /></a>
				<a href="#"><img src="social-profiles/rss.png" width="32" height="32" /></a>
			</div>

			</div><!-- .right-header -->
		</div><!-- .ak-container -->
		<!-- Track and Login Part Start Here -->
	<div class="container color">	
		<div class="row">		 
			<form  id="frmtrack" action="ghlbd_up/shipment.php" method="post" style="padding-top:0px;" target="window.open('ghlbd_up/shipment.php','Tracking Info','status=1,toolbar=1,location=no')"> 
				<div class="col-md-2">
					<div class="form-group">
					</br>
					   <input name="track_no" id="track_no" type="text" onfocus="if (this.value==this.defaultValue)
	this.value='';" onblur="if (this.value=='') this.value=this.defaultValue;" class="form-control"  required="" placeholder="Enter way bill no" autofocus>
					</div>
				</div></br>
					<div class="col-md-4">
						 <button type="submit"  class="btn btn-primary">Track</button>
					</div>
			</form> 
			<form name="the_form" id="frmlogin" method="post" action="ghlbd_up/index.php" target="_blank">
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
			</form>
		</div>
	</div>
		<!-- Track and Login End -->

  </div><!-- #top-header -->





		
		<nav id="site-navigation" class="main-navigation <?php do_action( 'accesspresslite_menu_alignment' ); ?>">
		
			<div class="ak-container">
            
				<h1 class="menu-toggle"><?php _e( 'Menu', 'accesspresslite' ); ?></h1>

				<?php wp_nav_menu( array( 
				'theme_location' => 'primary' ) ); ?>
				
			</div>
			<div style="background:#fff; height:5px; width:100%;"></div>
		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->
	
		

	
	

	<section id="slider-banner">
		<?php 
		if(is_home() || is_front_page() ){
			do_action( 'accesspresslite_bxslider' ); 
		}?>
	</section><!-- #slider-banner -->
	<?php
	if((is_home() || is_front_page()) && 'page' == get_option( 'show_on_front' )){	
		$accesspresslite_content_id = "content";	
	}elseif(is_home() || is_front_page() ){
	$accesspresslite_content_id = "home-content";
	}else{
	$accesspresslite_content_id ="content";
	} ?>
	<div id="<?php echo esc_attr($accesspresslite_content_id); ?>" class="site-content">
	