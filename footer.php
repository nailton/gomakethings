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
				<div class="grid-half grid-flip text-right-large">
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
				<div class="grid-half">
					<p class="text-small margin-bottom-large">
						Made with &lt;3 by Chris Ferdinandi.<br>
						Copyright 2014 Go Make Things, LLC.
					</p>
				</div>
			</div>


		</footer>


		<?php wp_footer(); ?>

	</body>
</html>