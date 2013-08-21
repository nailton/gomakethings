<?php

/* ======================================================================
    Load JS v1.0
    Load external JavaScript files in WordPress.
 * ====================================================================== */

function load_theme_js() {
	wp_register_script('gmt-js', get_template_directory_uri() . '/js/gmt.min.08212013.js', false, null, true);
	wp_enqueue_script('gmt-js');
}
add_action('wp_enqueue_scripts', 'load_theme_js');

?>
