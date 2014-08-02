<?php

/* ======================================================================
	searchform.php
	Template for search form.
	`.screen-reader` class hides label when used with Kraken boilerplate.
 * ====================================================================== */

?>

<article class="row">
	<div class="grid-two-thirds float-center">
		<form method="get" class="text-center no-space-bottom" id="searchform" action="<?php echo esc_url( home_url('/') ); ?>" >
			<label class="screen-reader" for="s">Search this site:</label>
			<input type="text" class="input-search" id="s" name="s" placeholder="Search this site..." value="<?php get_search_query(); ?>">
			<button type="submit" class="btn-search" id="searchsubmit"><svg class="icon" role="img" title="Search"><use xlink:href="#icon-search">Search</use></svg></button>
		</form>
	</div>
</article>