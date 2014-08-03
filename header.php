<?php

/**
 * 	header.php
 *	Template for header content.
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>

	<head>
		<meta charset="<?php bloginfo('charset'); ?>">

		<!-- Force latest available IE rendering engine and Chrome Frame (if installed) -->
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

		<!-- Document Title & Description -->
		<title><?php wp_title( '|', true, 'right' ); ?></title>
		<?php if ( is_home () ) : ?><meta name="description" content="<?php bloginfo('description'); ?>"><?php endif; ?>

		<!-- Mobile Screen Resizing -->
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<!-- Icons: place in the root directory -->
		<!-- https://github.com/audreyr/favicon-cheat-sheet -->
		<link rel="shortcut icon" type="image/ico" href="<?php bloginfo('stylesheet_directory'); ?>/dist/img/favicon.ico">
		<link rel="apple-touch-icon" sizes="144x144" href="<?php bloginfo('stylesheet_directory'); ?>/dist/img/apple-touch-icon-144.png">
		<meta name="msapplication-TileColor" content="#ffffff">
		<meta name="msapplication-TileImage" content="<?php bloginfo('stylesheet_directory'); ?>/dist/img/ms-touch-icon.png">

		<!-- Feeds & Pings -->
		<link rel="alternate" type="application/rss+xml" title="<?php printf( __( '%s RSS Feed', 'kraken' ), get_bloginfo( 'name' ) ); ?>" href="<?php bloginfo( 'rss2_url' ); ?>">
		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

		<!-- Feature Test -->
		<script><?php include_once( get_template_directory() . '/dist/js/detects.min.js' ); ?></script>

		<!-- HTML5 Shim for IE 6-8 -->
		<!--[if lt IE 9]>
			<script src="<?php bloginfo('stylesheet_directory'); ?>/dist/js/html5.min.js"></script>
		<![endif]-->

		<!-- Stylesheet -->
		<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/dist/css/gmt.min.08022014.css">

		<?php wp_head(); ?>

	</head>

	<body>

		<!-- SVG sprite -->
		<div hidden><?php include_once( get_template_directory() . '/dist/svg/icons.svg' ); ?></div>

		<!-- Old Browser Warning -->
		<!--[if lt IE 9]>
			<section class="container">
				<p>Did you know that your web browser is a bit old? Some of the content on this site might not work right as a result. <a href="http://whatbrowser.org">Upgrade your browser</a> for a faster, better, and safer web experience.</p>
			</section>
		<![endif]-->

		<!-- Skip link for better accessibility -->
		<a class="screen-reader" href="#main">Skip to main content</a>

		<?php get_template_part( 'nav-main', 'Site Navigation' ); ?>

		<section class="container">