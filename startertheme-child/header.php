<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Startertheme
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon.png" type="image/x-icon" /><link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500" rel="stylesheet">

<?php wp_head(); ?>
	
	<!-- Facebook Pixel Code -->
<script>
!function(f,b,e,v,n,t,s){if(f.fbq)return;n=f.fbq=function(){n.callMethod?
n.callMethod.apply(n,arguments):n.queue.push(arguments)};if(!f._fbq)f._fbq=n;
n.push=n;n.loaded=!0;n.version='2.0';n.queue=[];t=b.createElement(e);t.async=!0;
t.src=v;s=b.getElementsByTagName(e)[0];s.parentNode.insertBefore(t,s)}(window,
document,'script','https://connect.facebook.net/en_US/fbevents.js');
// Insert Your Facebook Pixel ID below. 
fbq('init', '2083943325221957');
fbq('track', 'PageView');
</script>
<!-- Insert Your Facebook Pixel ID below. --> 
<noscript><img height="1" width="1" style="display:none"
src="https://www.facebook.com/tr?id=2083943325221957&amp;ev=PageView&amp;noscript=1"
/></noscript>
<!-- End Facebook Pixel Code -->

	
	<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-22261906-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-22261906-1');
</script>
	
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'startertheme' ); ?></a>
	
	<!-- Top Bar Widget -->
	<div id="topBar" class="widget-area" role="complementary" <?php echo ( get_theme_mod( 'starter_topbar' ) ) ?>
    		<ul>
      			<?php if ( ! dynamic_sidebar( 'topbar-widget' ) ) : ?>
    		</ul>
                <?php endif; // end sidebar widget area ?>
  		</div>
  		
  	<!-- Preloader -->
	<div id="cssload-wrapper">              
		<div align="center" class="cssload-fond animated fadeIn">
		<div class="custom-loader"></div>
	</div>
	</div>        

	<header id="masthead" class="site-header" role="banner">
		<nav id="site-navigation" class="main-navigation" role="navigation">
           <div class="site-title"><a href="<?php echo home_url(); ?>"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/logo.gif" style="width:203px; height:66px;" alt="<?php bloginfo('name'); ?> | <?php bloginfo('description'); ?>" /></a> </div>
    		<div class="screen-reader-text skip-link"><a href="#content" title="<?php esc_attr_e( 'Skip to content', 'startertheme' ); ?>">
      		<?php _e( 'Skip to content', 'startertheme' ); ?>
      		</a></div>
    		<label for="show-menu" class="show-menu"><i class="fa fa-bars" aria-hidden="true"></i></label>
    		<input type="checkbox" id="show-menu" role="button">
   			<?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
			<img id="search_btn" src="<?php echo get_stylesheet_directory_uri(); ?>/images/search.jpg" />
    		<div id="ajax_search">
    		<?php echo do_shortcode('[wpdreams_ajaxsearchlite]'); ?>
    		</div>
  		</nav>
  	<!-- #site-navigation -->
</header>
<!-- #masthead -->

<div id="main" class="site-main">