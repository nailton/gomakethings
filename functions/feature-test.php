<?php

/* ======================================================================
    Feature Test v1.0
    Load a feature test script in the <head>.
 * ====================================================================== */

function load_feature_test() {
	wp_register_script('feature-test', get_template_directory_uri() . '/js/feature-test.min.08192013.js', false, null, false);
	wp_enqueue_script('feature-test');
}
add_action('wp_enqueue_scripts', 'load_feature_test');

?>
