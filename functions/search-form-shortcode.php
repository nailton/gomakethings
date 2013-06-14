<?php

/* ======================================================================
    Search Form Shortcode v1.0
    A PHP script and shortcode for the WordPress search form, by Elliot Jay Stocks.
    http://viewportindustries.com/products/starkers/
 * ====================================================================== */

function gmt_wpsearch() {
    $form = '<div class="row"><div class="grid-4 offset-1">
        <form method="get" class="text-center no-space-bottom" id="searchform" action="' . home_url( '/' ) . '" >
            <label class="screen-reader" for="s">Search this site:</label>
            <input type="text" class="input-search" placeholder="Search this site..." value="' . get_search_query() . '" name="s" id="s">
            <button type="submit" class="btn-search" id="searchsubmit"><i class="icon-search"></i><span class="screen-reader">Search</span></button>
        </form>
    </div></div>';
    return $form;
}
add_shortcode( 'searchform', 'gmt_wpsearch' );

?>
