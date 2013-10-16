<?php get_header(); ?>


<?php if (have_posts()) : ?>

	<?php while (have_posts()) : the_post(); ?>
		<article>

			<header>
				<h1 class="no-space-bottom"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
				<aside>
					<p class="text-muted text-center"><time datetime="<?php the_time( 'Y-m-d' ); ?>" pubdate><?php the_time('F j, Y') ?></time> &bull; <a class="text-muted" href="<?php comments_link(); ?>"><?php comments_number( 'Respond', '1 Response', '% Responses' ); ?></a><?php edit_post_link('Edit', ' &bull; ', ''); ?></p>
				</aside>
			</header>

			<?php the_content('<p>Keep reading...</p>'); ?>

		</article>

		<hr>

	<?php endwhile; ?>


	<!-- Previous/Next page navigation -->
	<?php get_template_part( 'nav-page', 'Page Navigation' ); ?>


<?php else : ?>
	<?php get_template_part( 'no-posts', 'No Posts Template' ); ?>
<?php endif; ?>


<?php get_footer(); ?>