<?php

/* ======================================================================
	content.php
	Template for post and page content.
 * ====================================================================== */

?>

<article>

	<header>
		<?php if ( !is_page_template( 'plain.php' ) ) : ?>
			<?php if ( is_singular() ) : ?>
			<h1 class="no-space-bottom"><?php the_title(); ?></h1>
			<?php else : ?>
				<h1 class="no-space-bottom"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
			<?php endif; ?>
		<?php endif; ?>
		<?php if ( get_post_type() == 'post' ) : ?>
			<aside>
				<p class="text-muted text-small text-center">
					<time datetime="<?php the_time( 'Y-m-d' ); ?>" pubdate><?php the_time( 'F j, Y' ) ?></time> /
					<a href="<?php comments_link(); ?>">
						<?php comments_number( __( 'Comment', 'kraken' ), __( '1 Comment', 'kraken' ), __( '% Comments', 'kraken' ) ); ?>
					</a>
					<?php edit_post_link( __( 'Edit', 'kraken' ), ' / ', '' ); ?>
				</p>
			</aside>
		<?php else : ?>
			<aside>
				<?php edit_post_link( __( 'Edit', 'kraken' ), '', '' ); ?>
			</aside>
		<?php endif; ?>
	</header>

	<?php the_content( '<p>' . __( 'Read More...', 'kraken' ) . '</p>' ); ?>

	<?php if ( is_single() ) : ?>
		<?php comments_template(); ?>
	<?php endif; ?>

	<?php if ( !is_last_post($wp_query) ) : ?>
	    <hr class="line-secondary">
	<?php endif; ?>

</article>