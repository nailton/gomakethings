<?php

/* ======================================================================
    Load JS v1.0
    Load external JavaScript files in WordPress.
 * ====================================================================== */

function my_scripts_method() {
	wp_register_script('gmt-js', get_template_directory_uri() . '/js/gmt.min.04152013.js', false, null, true);
	wp_enqueue_script('gmt-js');
}
add_action('wp_enqueue_scripts', 'my_scripts_method');

?>
