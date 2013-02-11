<?php get_header(); /*
Template Name: Plain
*/
?>


<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

    <article>

	    <header class="screen-reader">
		    <h1><?php the_title(); ?></h1>
	    </header>

	    <?php the_content(); ?>

	    <?php edit_post_link('[Edit]', '<p>', '</p>'); ?>

    </article>

<?php endwhile; endif; ?>


<?php get_footer(); ?>
