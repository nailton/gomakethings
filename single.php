<?php get_header(); ?>


<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

    <article>

			<header>
				<h1 class="no-space-bottom"><?php the_title(); ?></h1>
				<aside>
					<p class="text-muted text-center"><time datetime="<?php the_time( 'Y-m-d' ); ?>" pubdate><?php the_time('F j, Y') ?></time> &bull; <a class="text-muted" href="<?php comments_link(); ?>"><?php comments_number( 'Respond', '1 Response', '% Responses' ); ?></a><?php edit_post_link('Edit', ' &bull; ', ''); ?></p>
				</aside>
			</header>

	    <?php the_content(); ?>

	    <?php comments_template(); ?>

    </article>

<?php endwhile; endif; ?>


<?php get_footer(); ?>
