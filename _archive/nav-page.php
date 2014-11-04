<?php

/**
 * nav-page.php
 * Template for older/newer page navigation.
 */

?>

<?php if ( keel_is_paginated() ) : ?>
    <nav>
    	<p class="text-center space-top space-bottom-small"><?php posts_nav_link( '&nbsp;&nbsp;&nbsp;/&nbsp;&nbsp;&nbsp;', '&larr; Newer', 'Older &rarr;' ); ?></p>
    </nav>
<?php endif; ?>