<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "container" div.
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

?>
<!doctype html>
<html style="margin-top:0!important;" class="no-js" <?php language_attributes(); ?> >
	<head>

		<!-- Google Tag Manager -->
	
		<!-- End Google Tag Manager -->
		
		<meta charset="<?php bloginfo( 'charset' ); ?>" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<?php wp_head(); ?>
		<meta name="format-detection" content="telephone=yes">
		<link rel="preconnect" href="https://fonts.gstatic.com">
		<link rel="stylesheet" href="https://use.typekit.net/ipz0adq.css">	
		<title>EMDR Direct</title>
	</head>
	<body <?php body_class(); ?>>

	<!-- Google Tag Manager (noscript) -->
	<!-- GOES HERE -->
	<!-- End Google Tag Manager (noscript) -->

	<div class="cursor replacement" id="#cursor"></div>

	<header class="site-header" role="banner">
		<div class="wrapper">

			<!-- mobile nav -->
			<nav id="navbar" class="navbar">
				<div class="mobileNav">
					<?php wp_nav_menu( array( 'theme_location' => 'mobile' ) ); ?>
					<div class="searchClick">
						<svg xmlns="http://www.w3.org/2000/svg" width="21.62" height="22.049" viewBox="0 0 21.62 22.049"><g transform="translate(-1561 -33)"><g transform="translate(1561 33)" fill="none" stroke="#f7f2eb" stroke-width="1"><circle cx="8.592" cy="8.592" r="8.592" stroke="none"/><circle cx="8.592" cy="8.592" r="8.092" fill="none"/></g><line x2="6.874" y2="6.874" transform="translate(1575.392 47.822)" fill="none" stroke="#f7f2eb" stroke-width="1"/></g></svg>
					</div>
				</div>
				
			</nav>
			<!-- mobile nav ends -->

			<!-- desktop nav -->
			<div class="desktopNav">
				<?php wp_nav_menu( array( 'theme_location' => 'header' ) ); ?>
				<div class="searchClickDesktop">
					<svg xmlns="http://www.w3.org/2000/svg" width="21.62" height="22.049" viewBox="0 0 21.62 22.049"><g transform="translate(-1561 -33)"><g transform="translate(1561 33)" fill="none" stroke="#f7f2eb" stroke-width="1"><circle cx="8.592" cy="8.592" r="8.592" stroke="none"/><circle cx="8.592" cy="8.592" r="8.092" fill="none"/></g><line x2="6.874" y2="6.874" transform="translate(1575.392 47.822)" fill="none" stroke="#f7f2eb" stroke-width="1"/></g></svg>
				</div>
			</div>

			<div class="searchReveal">
				<?php get_search_form(); ?>
				<div class="mobileClose"></div>
			</div>

			<!-- desktop nav ends -->

			<!-- mobile burger icon -->
			<div class="mobileHeader">
				<div class="toggleWrapper">
					<input type='checkbox' id='toggle' style='display:none;' />
					<label id="toggleButton" class='toggle-btn toggle-btn__cross' for='toggle'>

						<div class="bar"></div>
						<div class="bar"></div>
						<div class="bar"></div>

					</label>
				</div>

				<div class="logo-mobile">
					<a href="/">
						<svg xmlns="http://www.w3.org/2000/svg" width="134.304" height="39.323" viewBox="0 0 134.304 39.323"><g transform="translate(4251.672 4108.432)"><circle cx="19.162" cy="19.162" r="19.162" transform="translate(-4156.191 -4107.932)" fill="none" stroke="#0e0a30" stroke-miterlimit="10" stroke-width="1"/><circle cx="17.758" cy="17.758" r="17.758" transform="translate(-4179.937 -4106.529)" fill="none" stroke="#0e0a30" stroke-miterlimit="10" stroke-width="1"/><circle cx="16.355" cy="16.355" r="16.355" transform="translate(-4203.682 -4105.125)" fill="none" stroke="#0e0a30" stroke-miterlimit="10" stroke-width="1"/><circle cx="14.951" cy="14.951" r="14.951" transform="translate(-4227.427 -4103.722)" fill="none" stroke="#0e0a30" stroke-miterlimit="10" stroke-width="1"/><circle cx="13.548" cy="13.548" r="13.548" transform="translate(-4251.172 -4102.318)" fill="none" stroke="#0e0a30" stroke-miterlimit="10" stroke-width="1"/></g></svg>
						<h2 class="logoText">EMDR Direct</h2>
					</a>
				</div>

				<div class="account-mobile">
					<a href="#">
						<svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18"><g fill="none" stroke="#423845" stroke-width="1"><circle cx="9" cy="9" r="9" stroke="none"/><circle cx="9" cy="9" r="8.5" fill="none"/></g><circle cx="3" cy="3" r="3" transform="translate(6 6)" fill="#423845"/><path d="M6.65,0c3.673,0,6.65,1.263,6.65,2.822S9.744,6.7,6.65,6.632,0,4.38,0,2.822,2.977,0,6.65,0Z" transform="translate(2.35 10.663)" fill="#423845"/></svg>
					</a>
				</div>
			</div>

			<!-- mobile burger icon ends -->

		</div>
	</header>

