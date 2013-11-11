<?php get_header(); ?>


<?php if (have_posts()) : ?>

	<header>
		<h1 class="no-space">
			<?php /* If this is a category archive */ if (is_category()) { ?>
				On <?php single_cat_title(); ?>...
			<?php /* If this is a tag archive */ } elseif( is_tag() ) { ?>
				On <?php single_tag_title(); ?>...
			<?php /* If this is a daily archive */ } elseif (is_day()) { ?>
				On <?php the_time('F jS, Y'); ?>...
			<?php /* If this is a monthly archive */ } elseif (is_month()) { ?>
				From <?php the_time('F, Y'); ?>...
			<?php /* If this is a yearly archive */ } elseif (is_year()) { ?>
				From <?php the_time('Y'); ?>...
			<?php /* If this is an author archive */ } elseif (is_author()) { ?>
				Author Archive
			<?php /* If this is a paged archive */ } elseif (isset($_GET['paged']) && !empty($_GET['paged'])) { ?>
				Blog Archives
			<?php } ?>
		</h1>
		<hr>
	</header>


	<?php while (have_posts()) : the_post(); ?>

		<article>

			<header>
				<h1 class="no-space-bottom"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
				<aside>
					<p class="text-muted text-center"><time datetime="<?php the_time( 'Y-m-d' ); ?>" pubdate><?php the_time('F j, Y') ?></time> &bull; <a class="text-muted" href="<?php comments_link(); ?>"><?php comments_number( 'Respond', '1 Response', '% Responses' ); ?></a><?php edit_post_link('Edit', ' &bull; ', ''); ?></p>
				</aside>
			</header>

			<?php the_content('<p>Keep reading<span class="screen-reader"> "' . get_the_title() . '"</span>...</p>'); ?>

		</article>

		<hr>

	<?php endwhile; ?>


	<!-- Previous/Next page navigation -->
	<?php get_template_part( 'nav-page', 'Page Navigation' ); ?>


<?php else : ?>
	<?php get_template_part( 'no-posts', 'No Posts Template' ); ?>
<?php endif; ?>


<?php get_footer(); ?>