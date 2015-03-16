<?php

/**
 * footer.php
 * Template for footer content.
 */

?>

			</div><!-- /.container -->
		</main><!-- /#main -->

		<footer class="container container-large">

			<hr class="margin-bottom">

			<div class="row">
				<div class="grid-half">
					<ul class="list-inline text-small margin-bottom-small">
						<li>
							<a class="icon-link-wrap" href="mailto:<?php echo antispambot('hello@gomakethings.com'); ?>">
								<svg class="icon margin-right"><use xlink:href="#icon-email"></use></svg>
								<span class="icon-fallback-text">Email: </span><?php echo antispambot('hello@gomakethings.com'); ?>
							</a>
						</li>
						<li>
							<a href="tel:<?php echo antispambot('(774) 277-8216'); ?>">
								<svg class="icon margin-right"><use xlink:href="#icon-phone"></use></svg>
								<span class="icon-fallback-text">Phone: </span><?php echo antispambot('(774) 277-8216'); ?>
							</a>
						</li>
					</ul>
				</div>
				<div class="grid-half text-right-large">
					<ul class="list-inline text-small margin-bottom-small">
						<li>
							<a href="<?php echo site_url(); ?>/search/">
								<svg class="icon margin-right"><use xlink:href="#icon-search"></use></svg>Search
							</a>
						</li>
						<li>
							<a href="<?php bloginfo( 'rss2_url' ); ?>">
								<svg class="icon margin-right"><use xlink:href="#icon-rss"></use></svg>RSS Feed
							</a>
						</li>
					</ul>
				</div>
			</div>
			<p class="text-small margin-bottom-large">
				Made with &lt;3 by Chris Ferdinandi.<br>
				Copyright <?php echo date( 'Y' ); ?> Go Make Things, LLC.
			</p>


		</footer>


		<?php wp_footer(); ?>

	</body>
</html>