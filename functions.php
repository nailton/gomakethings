<?php

/* ======================================================================
	functions.php
	For modifying and expanding core WordPress functionality.
 * ====================================================================== */

// Load theme scripts
function kraken_load_theme_js() {
	wp_register_script('gomakethings-js', get_template_directory_uri() . '/dist/js/gmt.min.08082014.js', false, null, true);
	wp_enqueue_script('gomakethings-js');
}
// add_action('wp_enqueue_scripts', 'kraken_load_theme_js');



// Initialize theme scripts
function kraken_initialize_theme_js( $query ) {
	if ( is_front_page() || is_single() || is_search() || is_archive() ) {
		echo
			'<script>' .
				'fluidvids.init({' .
					'selector: ["iframe", "object"],' .
					'players: ["www.youtube.com", "player.vimeo.com", "slideshare.net", "www.hulu.com"]' .
				'});' .
			'</script>';
	}
}
// add_action('wp_footer', 'kraken_initialize_theme_js', 30);



// Add a shortcode for the search form
function kraken_wpsearch() {
	$form = get_search_form();
	return $form;
}
add_shortcode( 'searchform', 'kraken_wpsearch' );



// Replace default password-protected post messaging with custom language
function kraken_post_password_form() {
	global $post;
	$label = 'pwbox-'.( empty( $post->ID ) ? rand() : $post->ID );
	$form =
		'<form class="text-center" action="' . esc_url( site_url( 'wp-login.php?action=postpass', 'login_post' ) ) . '" method="post"><p>' . __( 'This is a password protected post.', 'kraken' ) . '</p><label class="screen-reader" for="' . $label . '">' . __( 'Password', 'kraken' ) . '</label><input id="' . $label . '" name="post_password" type="password"><input class="input-inline btn" type="submit" name="Submit" value="' . __( 'Submit', 'kraken' ) . '"></form>';
	return $form;
}
add_filter( 'the_password_form', 'kraken_post_password_form' );



// Make the `wp_title` function more useful
function kraken_pretty_wp_title( $title, $sep ) {

	global $paged, $page;

	if ( is_feed() )
		return $title;

	// Add the site name
	$title .= get_bloginfo( 'name' );

	// Add a page number if necessary.
	if ( $paged >= 2 || $page >= 2 )
		$title = "$title $sep " . sprintf( __( 'Page %s', 'kraken' ), max( $paged, $page ) );

	return $title;
}
add_filter( 'wp_title', 'kraken_pretty_wp_title', 10, 2 );



// Deregister JetPack's devicepx.js script
function dequeue_devicepx() {
    wp_dequeue_script( 'devicepx' );
}
add_action( 'wp_enqueue_scripts', 'dequeue_devicepx', 20 );



// If more than one page exists, return TRUE.
function is_paginated() {
	global $wp_query;
	if ( $wp_query->max_num_pages > 1 ) {
		return true;
	} else {
		return false;
	}
}



// If last post in query, return TRUE.
function is_last_post($wp_query) {
	$post_current = $wp_query->current_post + 1;
	$post_count = $wp_query->post_count;
	if ( $post_current == $post_count ) {
		return true;
	} else {
		return false;
	}
}

?>