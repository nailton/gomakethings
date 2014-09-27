<?php

/**
 * single.php
 * Template for individual blog posts.
 */

get_header(); ?>


<?php if (have_posts()) : ?>

	<?php while (have_posts()) : the_post(); ?>
		<?php get_template_part( 'content', 'Post Content' ); ?>
	<?php endwhile; ?>

<?php else : ?>
	<?php get_template_part( 'no-posts', 'No Posts Template' ); ?>
<?php endif; ?>


<?php get_footer(); ?>