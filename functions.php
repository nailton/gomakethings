<?php

function load_theme_js() {
	// Feature Test (in header)
	wp_register_script('feature-test', get_template_directory_uri() . '/js/feature-test.min.11222013.js', false, null, false);
	wp_enqueue_script('feature-test');

	// Theme scripts (in footer)
	wp_register_script('gmt-js', get_template_directory_uri() . '/js/gmt.min.08212013.js', false, null, true);
	wp_enqueue_script('gmt-js');
}
add_action('wp_enqueue_scripts', 'load_theme_js');



function gmt_wpsearch() {
	$form = get_search_form();
	return $form;
}
add_shortcode( 'searchform', 'gmt_wpsearch' );



function my_password_form() {
	global $post;
	$label = 'pwbox-'.( empty( $post->ID ) ? rand() : $post->ID );
	$form =
		'<div class="row"><div class="grid-4 offset-1"><form class="text-center" action="' . esc_url( site_url( 'wp-login.php?action=postpass', 'login_post' ) ) . '" method="post"><p>This is a password protected post.</p><label class="screen-reader" for="' . $label . '">Password</label><input id="' . $label . '" name="post_password" type="password"><input type="submit" class="input-inline btn" name="Submit" value="Submit"></form></div></div>';
	return $form;
}
add_filter( 'the_password_form', 'my_password_form' );



function pretty_wp_title( $title, $sep ) {

	global $paged, $page;

	if ( is_feed() )
		return $title;

	// Add the site name.
	$title .= get_bloginfo( 'name' );

	// Add a page number if necessary.
	if ( $paged >= 2 || $page >= 2 )
		$title = "$title $sep " . sprintf( __( 'Page %s', 'twentytwelve' ), max( $paged, $page ) );

	return $title;
}
add_filter( 'wp_title', 'pretty_wp_title', 10, 2 );

?>