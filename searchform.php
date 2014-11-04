<?php

/**
 * searchform.php
 * Template for search form.
 */

?>

<form method="get" id="searchform" action="<?php echo esc_url( home_url('/') ); ?>" >
	<label class="screen-reader" for="search"><?php _e( 'Search this site:', 'keel' ) ?></label>
	<input type="text" class="input-inline input-search no-margin-bottom" id="search" name="s" placeholder="<?php _e( 'Search this site...', 'keel' ) ?>" value="<?php get_search_query(); ?>">
	<button type="submit" class="btn-search" id="searchsubmit">
		<svg class="icon">
		    <use xlink:href="#icon-search"></use>
		</svg>
		<span class="icon-fallback-text"><?php _e( 'Search', 'keel' ) ?></span>
	</button>
</form>