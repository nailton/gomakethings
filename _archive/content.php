<?php

/**
 * content.php
 * Template for post and page content.
 */

?>

<article>

	<header>
		<?php if ( !is_page() ) : ?>
			<aside>
				<p class="text-muted text-small no-space-bottom">
					<time datetime="<?php the_time( 'Y-m-d' ); ?>" pubdate><?php the_time( 'F j, Y' ) ?></time> <!-- / -->
					<!-- <a href="<?php comments_link(); ?>">
						<?php comments_number( __( 'Comment', 'keel' ), __( '1 Comment', 'keel' ), __( '% Comments', 'keel' ) ); ?>
					</a> -->
					<?php edit_post_link( __( 'Edit', 'keel' ), ' / ', '' ); ?>
				</p>
			</aside>
		<?php endif; ?>
		<?php if ( is_single() ) : ?>
			<h1 class="no-space-top"><?php the_title(); ?></h1>
		<?php elseif ( is_page() ) : ?>
			<?php if ( !is_page_template( 'page-plain.php' ) ) : ?>
				<h1><?php the_title(); ?></h1>
			<?php endif; ?>
		<?php else : ?>
			<h1 class="no-space-bottom no-space-top"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
		<?php endif; ?>
	</header>

	<?php if ( is_singular() ) : ?>
		<?php the_content( '<p>' . __( 'Read More...', 'keel' ) . '</p>' ); ?>
	<?php else : ?>
		<?php the_excerpt(); ?>
	<?php endif; ?>

	<?php if ( is_page() ) : ?>
		<?php edit_post_link( __( 'Edit', 'keel' ), '<p>', '</p>' ); ?>
	<?php endif; ?>

	<?php if ( is_single() ) : ?>
		<?php comments_template(); ?>
	<?php endif; ?>

	<?php if ( !keel_is_last_post($wp_query) ) : ?>
	    <hr class="line-secondary">
	<?php endif; ?>

</article>