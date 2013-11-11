<?php get_header(); ?>


<?php if (have_posts()) : ?>
	<header>
		<h1 class="no-space">Search Results for "<?php the_search_query(); ?>"</h1>
		<hr>
	</header>

	<?php while (have_posts()) : the_post(); ?>

		<article>

			<header>
				<h1 class="no-space-bottom"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
				<?php if ( get_post_type() == 'post' ) : ?>
					<aside>
						<p class="text-muted text-center"><time datetime="<?php the_time( 'Y-m-d' ); ?>" pubdate><?php the_time('F j, Y') ?></time> &bull; <a class="text-muted" href="<?php comments_link(); ?>"><?php comments_number( 'Respond', '1 Response', '% Responses' ); ?></a><?php edit_post_link('Edit', ' &bull; ', ''); ?></p>
					</aside>
				<?php else : ?>
					<aside>
						<p class="text-muted text-center"><?php edit_post_link('Edit', '', ''); ?></p>
					</aside>
				<?php endif; ?>
			</header>

			<?php the_content('<p>Keep reading<span class="screen-reader"> "' . get_the_title() . '"</span>...</p>'); ?>

		</article>

		<hr>

	<?php endwhile; ?>


	<!-- Previous/Next page navigation -->
	<?php get_template_part( 'nav-page', 'Page Navigation' ); ?>


<?php else : ?>
	<article>
		<header>
			<h1>No Results Found for "<?php the_search_query(); ?>"</h1>
		</header>
		<p>Sorry, your search didn't turn up any results. Maybe try using different keywords?</p>

		<?php get_search_form(); ?>
	</article>
<?php endif; ?>


<?php get_footer(); ?>