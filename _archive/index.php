<?php

/**
 * index.php
 * Template for page that displays all of your posts.
 */

get_header(); ?>


<?php if (have_posts()) : ?>

	<?php while (have_posts()) : the_post(); ?>
		<?php get_template_part( 'content', 'Post Content' ); ?>
	<?php endwhile; ?>


	<!-- Previous/Next page navigation -->
	<?php get_template_part( 'nav-page', 'Page Navigation' ); ?>


<?php else : ?>
	<?php get_template_part( 'no-posts', 'No Posts Template' ); ?>
<?php endif; ?>


<?php get_footer(); ?>