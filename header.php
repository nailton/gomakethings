<?php

/* ======================================================================
	header.php
	Template for header content.
 * ====================================================================== */

?><!DOCTYPE html>
<!-- Conditional class for older versions of IE -->
<!--[if lt IE 9 & !IEMobile]><html class="ie" <?php language_attributes(); ?>><![endif]-->
<!--[if gt IE 8 | IEMobile]><!--><html <?php language_attributes(); ?>><!--<![endif]-->

	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<title><?php wp_title( '|', true, 'right' ); ?></title>
		<?php if ( is_home () ) : ?><meta name="description" content="<?php bloginfo('description'); ?>"><?php endif; ?>

		<!-- Mobile Screen Resizing -->
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<!-- Favicon -->
		<link rel="shortcut icon" type="image/ico" href="<?php bloginfo('stylesheet_directory'); ?>/img/favicon.ico">

		<!-- Apple Touch Icons -->
		<link rel="apple-touch-icon" href="<?php bloginfo('stylesheet_directory'); ?>/img/apple-touch-icon.png">
		<link rel="apple-touch-icon" sizes="72x72" href="<?php bloginfo('stylesheet_directory'); ?>/img/apple-touch-icon-72.png">
		<link rel="apple-touch-icon" sizes="114x114" href="<?php bloginfo('stylesheet_directory'); ?>/img/apple-touch-icon-114.png">
		<link rel="apple-touch-icon" sizes="144x144" href="<?php bloginfo('stylesheet_directory'); ?>/img/apple-touch-icon-144.png">

		<!-- MS Homescreen Icons -->
		<meta name="msapplication-TileColor" content="#ffffff">
		<meta name="msapplication-TileImage" content="<?php bloginfo('stylesheet_directory'); ?>/img/ms-touch-icon.png">

		<!-- Feeds & Pings -->
		<link rel="alternate" type="application/rss+xml" title="<?php printf( __( '%s RSS Feed', 'kraken' ), get_bloginfo( 'name' ) ); ?>" href="<?php bloginfo( 'rss2_url' ); ?>">
		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

		<!-- HTML5 Shim for IE 6-8 -->
		<!--[if lt IE 9]>
			<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->

		<!-- Stylesheet -->
		<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/gomakethings.min.03152014.css">

		<?php wp_head(); ?>

	</head>

	<body>

		<!-- Old Browser Warning -->
		<!--[if lt IE 9]>
			<section class="container">
				<p>Did you know that your web browser is a bit old? Some of the content on this site might not work right as a result. <a href="http://whatbrowser.org">Upgrade your browser</a> for a faster, better, and safer web experience.</p>
			</section>
		<![endif]-->

		<?php get_template_part( 'nav-main', 'Site Navigation' ); ?>

		<section class="container">