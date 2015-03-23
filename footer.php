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
								<svg xmlns="http://www.w3.org/2000/svg" class="icon margin-right" viewBox="0 0 32 32"><path d="M20.35 16.574L32 24.61V6.11zM0 6.112V24.61l11.65-8.037zm16 14.37l-2.78-2.498L0 26h32l-13.22-8.016zM31.04 6H.96L16 17.308z"/></svg><span class="icon-fallback-text">Email: </span><?php echo antispambot('hello@gomakethings.com'); ?>
							</a>
						</li>
						<li>
							<a href="tel:<?php echo antispambot('(774) 277-8216'); ?>">
								<svg xmlns="http://www.w3.org/2000/svg" class="icon margin-right" viewBox="0 0 32 32"><path d="M23 0H9C7.35 0 6 1.35 6 3v26c0 1.65 1.35 3 3 3h14c1.65 0 3-1.35 3-3V3c0-1.65-1.35-3-3-3zM12 1.5h8v1h-8v-1zM16 30c-1.105 0-2-.895-2-2s.895-2 2-2 2 .895 2 2-.895 2-2 2zm8-6H8V4h16v20z"/></svg><span class="icon-fallback-text">Phone: </span><?php echo antispambot('(774) 277-8216'); ?>
							</a>
						</li>
					</ul>
				</div>
				<div class="grid-half text-right-large">
					<ul class="list-inline text-small margin-bottom-small">
						<li>
							<a href="<?php echo site_url(); ?>/search/">
								<svg xmlns="http://www.w3.org/2000/svg" class="icon margin-right" viewBox="0 0 32 32"><path d="M31.008 27.23l-7.58-6.446c-.784-.705-1.622-1.03-2.3-.998C22.92 17.69 24 14.97 24 12 24 5.37 18.627 0 12 0S0 5.37 0 12c0 6.626 5.374 12 12 12 2.973 0 5.692-1.082 7.788-2.87-.03.676.293 1.514.998 2.298l6.447 7.58c1.105 1.226 2.908 1.33 4.008.23s.997-2.903-.23-4.007zM12 20c-4.418 0-8-3.582-8-8s3.582-8 8-8 8 3.582 8 8-3.582 8-8 8z"/></svg>Search
							</a>
						</li>
						<li>
							<a href="<?php bloginfo( 'rss2_url' ); ?>">
								<svg xmlns="http://www.w3.org/2000/svg" class="icon margin-right" viewBox="0 0 32 32"><path d="M4.26 23.467C1.91 23.467 0 25.384 0 27.72c0 2.348 1.91 4.243 4.26 4.243 2.357 0 4.264-1.895 4.264-4.244 0-2.337-1.907-4.253-4.265-4.253zM.004 10.873v6.133c3.993 0 7.75 1.562 10.577 4.39 2.825 2.823 4.384 6.596 4.384 10.604h6.16c0-11.65-9.478-21.127-21.12-21.127zM.012 0v6.136C14.255 6.136 25.848 17.74 25.848 32H32C32 14.36 17.648 0 .012 0z"/></svg>RSS Feed
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