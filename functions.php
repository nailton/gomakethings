<?php

require_once('functions/remove-header-junk.php'); // Remove the unneccessary junk WordPress adds to the header
require_once('functions/search-exclude.php'); // Exclude pages from your search results
require_once('functions/remove-trackbacks.php'); // Remove trackbacks from comments
require_once('functions/no-self-pings.php'); // Prevent self-pings


function load_theme_js() {
	// Feature Test (in header)
	wp_register_script('feature-test', get_template_directory_uri() . '/js/feature-test.min.08192013.js', false, null, false);
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

?>