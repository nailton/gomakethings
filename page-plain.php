<?php

/* ======================================================================
	Template Name: Plain
	Template for pages with no heading or meta data.
	(Good for when you want more control over a page layout.)
 * ====================================================================== */

get_header(); ?>


<?php if (have_posts()) : ?>

	<?php while (have_posts()) : the_post(); ?>
		<?php get_template_part( 'content', 'Post Content' ); ?>
	<?php endwhile; ?>

<?php endif; ?>


<?php get_footer(); ?>