<?php

/* ======================================================================
	search.php
	Template for search results.
 * ====================================================================== */

get_header(); ?>


<?php if (have_posts()) : ?>
	<header>
		<h1 class="text-muted space-bottom"><?php _e( 'Search results for', 'kraken' ); ?> "<?php the_search_query() ?>"</h1>
	</header>

	<?php while (have_posts()) : the_post(); ?>
		<?php get_template_part( 'content', 'Post Content' ); ?>
	<?php endwhile; ?>


	<!-- Previous/Next page navigation -->
	<?php get_template_part( 'nav-page', 'Page Navigation' ); ?>


<?php else : ?>
	<article>
		<header>
			<h1><?php _e( 'No results found for', 'kraken' ); ?> "<?php the_search_query() ?>"</h1>
		</header>
		<p><?php _e( 'Sorry, your search didn\'t turn up any results. Maybe try using different keywords?', 'kraken' ) ?></p>

		<?php get_search_form(); ?>
	</article>
<?php endif; ?>


<?php get_footer(); ?>