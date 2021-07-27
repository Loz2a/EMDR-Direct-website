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
		<!--<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script> -->
		<link rel="preconnect" href="https://fonts.gstatic.com">
		<link href="https://fonts.googleapis.com/css2?family=DM+Serif+Display&family=Montserrat:wght@100;300;400&display=swap" rel="stylesheet">	
		<link rel="stylesheet" href="https://use.typekit.net/nki4hcs.css">	
		<title>Poole Dick Associates</title>
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

			<div class="toggleWrapper">
				<input type='checkbox' id='toggle' style='display:none;' />
				<label id="toggleButton" class='toggle-btn toggle-btn__cross' for='toggle'>

					<div class="bar"></div>
					<div class="bar"></div>
					<div class="bar"></div>

				</label>
			</div>

			<!-- mobile burger icon ends -->

		</div>
	</header>

