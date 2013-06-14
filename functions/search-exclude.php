<?php

/* ======================================================================
    Search Exclude v1.0
    A simple function to exclude pages from your search results, by C. Bavota.
    http://bavotasan.com/2010/excluding-pages-from-wordpress-search/
 * ====================================================================== */

function SearchFilter($query) {
    if ($query->is_search) {
        $query->set('post_type', 'post');
    }
    return $query;
}
add_filter('pre_get_posts','SearchFilter');

?>
