<?php

/**
 * header.php
 * Template for header content.
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>

	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<title><?php wp_title( '|', true, 'right' ); ?></title>
		<?php if ( is_home () ) : ?><meta name="description" content="<?php bloginfo('description'); ?>"><?php endif; ?>

		<!-- Mobile Screen Resizing -->
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<!-- Icons: place in the root directory -->
		<!-- https://github.com/audreyr/favicon-cheat-sheet -->
		<link rel="apple-touch-icon" href="<?php echo get_stylesheet_directory_uri(); ?>/dist/img/favicon-144.png">
		<meta name="msapplication-TileColor" content="#0088cc">
		<meta name="msapplication-TileImage" content="<?php echo get_stylesheet_directory_uri(); ?>/dist/img/favicon-ms.png">
		<link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/dist/img/favicon.ico">
		<link rel="icon" sizes="16x16 32x32" href="<?php echo get_stylesheet_directory_uri(); ?>/dist/img/favicon.ico">

		<!-- Feeds & Pings -->
		<link rel="alternate" type="application/rss+xml" title="<?php printf( __( '%s RSS Feed', 'keel' ), get_bloginfo( 'name' ) ); ?>" href="<?php bloginfo( 'rss2_url' ); ?>">
		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

		<?php wp_head(); ?>

	</head>

	<body>

		<div hidden>
			<?php
				echo file_get_contents( get_template_directory_uri() . '/dist/svg/icons.svg' );
				if ( is_front_page() ) {
					echo file_get_contents( get_template_directory_uri() . '/dist/svg/landing.svg' );
				}
				if ( is_page('projects') ) {
					echo file_get_contents( get_template_directory_uri() . '/dist/svg/portfolio.svg' );
				}
			?>
		</div>

		<!-- Old Browser Warning -->
		<!--[if lt IE 9]>
			<aside class="container">
				<p>Did you know that your web browser is a bit old? Some of the content on this site might not work right as a result. <a href="http://whatbrowser.org">Upgrade your browser</a> for a faster, safer, and better web experience.</p>
			</aside>
		<![endif]-->

		<!-- Skip link for better accessibility -->
		<a class="screen-reader screen-reader-focusable" href="#main">Skip to main content</a>

		<?php
			// Get site navigation
			get_template_part( 'nav-main', 'Site Navigation' );
		?>

		<?php
			// Get page width
			if ( is_page() ) {
				global $post;
				$container = ( get_post_meta( $post->ID, 'keel_page_width', true ) === 'wide' ? 'container-large' : '' );
			}
		?>

		<main id="main">

			<?php
				/**
				 * Landing Page Hero Content
				 */
				if ( is_front_page() ) :
			?>
				<?php
					$theme_options = keel_get_theme_options();
					$keel_hero_image = get_header_image();
					if ( !empty( $theme_options['landing_hero_text'] ) ) :
				?>
					<header class="bg bg-hero margin-bottom" <?php if ( !empty( $keel_hero_image ) ) { echo 'style="background-image: url(' . $keel_hero_image . ');"'; } ?>>
						<?php echo stripslashes( $theme_options['landing_hero_text'] ); ?>
					</header>
				<?php endif; ?>
			<?php endif; ?>

			<div class="container <?php echo $container; ?>">