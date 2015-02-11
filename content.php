<?php

/**
 * content.php
 * Template for post and page content.
 */

?>

<article>

	<?php
		/**
		 * Headers
		 * Unlinked h1 for pages and invidual blog posts.
		 * Linked h1 for collections of posts.
		 * None added for page-plain.php templates
		 */
		if ( !is_page_template( 'page-plain.php' ) ) :
	?>
		<header>
			<?php
				/**
				 * Add meta data for blog posts.
				 * 1. Published date
				 * 2. Author
				 * 3. Number of comments
				 * 4. Quick edit link
				 */
				if ( !is_page() ) :
			?>
				<aside class="text-muted">
					<time datetime="<?php the_time( 'Y-m-d' ); ?>" pubdate><?php the_time( 'F j, Y' ) ?></time>
					<?php edit_post_link( __( 'Edit', 'keel' ), ' / ', '' ); ?>
				</aside>
			<?php endif; ?>
			<?php if ( is_single() ) : ?>
				<h1 class="no-padding-top"><?php the_title(); ?></h1>
			<?php elseif ( is_page() ) : ?>
					<h1><?php the_title(); ?></h1>
			<?php else : ?>
				<h1 class="no-padding-top"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
			<?php endif; ?>
		</header>
	<?php endif; ?>

	<?php
		// The page or post content
		// if ( is_singular() ) {
			the_content( '<p>' . __( 'Read More...', 'keel' ) . '</p>' );
		// } else {
		// 	the_excerpt();
		// }
	?>

	<?php if ( is_page() ) : ?>
		<?php
			// Add link to edit pages
			edit_post_link( __( 'Edit', 'keel' ), '<p>', '</p>' );
		?>
	<?php endif; ?>

	<?php if ( is_single() ) : ?>
		<?php
			// Add comments template to blog posts
			comments_template();
		?>
	<?php endif; ?>

	<?php
		// If this is not the last post on the page, insert a divider
		if ( !keel_is_last_post($wp_query) ) :
	?>
	    <hr class="line-secondary">
	<?php endif; ?>

</article>