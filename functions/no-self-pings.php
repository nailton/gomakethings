<?php

/* ======================================================================
    No Self Pings v1.0
    A simple function to prevent self-pings, by WPMU.
    http://wpmu.org/daily-tip-3-ways-to-remove-wordpress-self-pings/
 * ====================================================================== */

function no_self_ping( &$links ) {
    $home = get_option( 'home' );
    foreach ( $links as $l => $link ) {
        if ( 0 === strpos( $link, $home ) ) {
            unset($links[$l]);
        }
    }
}
add_action( 'pre_ping', 'no_self_ping' );

?>