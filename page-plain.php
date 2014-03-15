<?php

/* ======================================================================
	Template Name: Plain
	Template for pages with no heading or meta data.
	(Good for when you want more control over a page layout.)
 * ====================================================================== */

get_header(); ?>


<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

	<article>

		<?php the_content(); ?>

		<?php edit_post_link( __( 'Edit', 'kraken' ), '<p>', '</p>' ); ?>

	</article>

<?php endwhile; endif; ?>


<?php get_footer(); ?>