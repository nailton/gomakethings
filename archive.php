<?php

/* ======================================================================
	archive.php
	Template for posts by category, tag, author, date, etc.
 * ====================================================================== */

get_header(); ?>


<?php if (have_posts()) : ?>

	<header>
		<h1 class="text-muted no-space-top space-bottom">
			<?php /* If this is a category archive */ if (is_category()) { ?>
				On <?php single_cat_title(); ?>...
			<?php /* If this is a tag archive */ } elseif( is_tag() ) { ?>
				On <?php single_tag_title(); ?>...
			<?php /* If this is a daily archive */ } elseif (is_day()) { ?>
				<?php the_time('F jS, Y'); ?>...
			<?php /* If this is a monthly archive */ } elseif (is_month()) { ?>
				<?php the_time('F, Y'); ?>...
			<?php /* If this is a yearly archive */ } elseif (is_year()) { ?>
				<?php the_time('Y'); ?>...
			<?php /* If this is an author archive */ } elseif (is_author()) { ?>
				By <?php _e( 'Author Archive', 'kraken' ) ?>...
			<?php /* If this is a paged archive */ } elseif (isset($_GET['paged']) && !empty($_GET['paged'])) { ?>
				<?php _e( 'Blog Archive', 'kraken' ) ?>...
			<?php } ?>
		</h1>
	</header>


	<?php while (have_posts()) : the_post(); ?>
		<?php get_template_part( 'content', 'Post Content' ); ?>
	<?php endwhile; ?>


	<!-- Previous/Next page navigation -->
	<?php get_template_part( 'nav-page', 'Page Navigation' ); ?>


<?php else : ?>
	<?php get_template_part( 'no-posts', 'No Posts Template' ); ?>
<?php endif; ?>


<?php get_footer(); ?>