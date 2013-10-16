<?php get_header(); /*
Template Name: Plain
*/
?>


<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

	<article>

		<?php the_content(); ?>

		<?php edit_post_link('[Edit]', '<p>', '</p>'); ?>

	</article>

<?php endwhile; endif; ?>


<?php get_footer(); ?>