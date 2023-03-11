<?php
/**
 * Default Header
 */
return array(
	'title'      => esc_html__( 'Default Header', 'lyna' ),
	'categories' => array( 'lyna', 'header' ),
	'content'    => '<!-- wp:group {"align":"full","className":"header","layout":{"inherit":true}} -->

					<div class="wp-block-group alignfull header"><!-- wp:group {"align":"wide","layout":{"type":"flex","justifyContent":"space-between"}} -->
					<div class="wp-block-group alignwide"><!-- wp:group {"layout":{"type":"flex"}} -->
					<div class="wp-block-group">
					<!-- wp:group -->
					<div class="wp-block-group">
					<!-- wp:site-title /--><!-- wp:site-tagline {"style":{"spacing":{"margin":{"top":"4px"}}}} /--></div>
					<!-- /wp:group -->
					</div>
					<!-- /wp:group -->

					<!-- wp:navigation {"layout":{"type":"flex","setCascadingProperties":true,"justifyContent":"right"}} -->
					<!-- /wp:navigation -->
					</div>
					<!-- /wp:group --></div>
					<!-- /wp:group -->',
);
