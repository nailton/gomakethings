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
			<button type="submit" class="btn-search" id="searchsubmit">
				<i class="icon icon-search"></i>
				<span class="icon-fallback-text">Search</span>
			</button>
		</form>
	</div>
</article>