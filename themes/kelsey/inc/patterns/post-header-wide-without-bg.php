<?php
/**
 * Post Header Wide Without BG
 */
return array(
	'title'      => esc_html__( 'Post Header Wide Without BG', 'kelsey' ),
	'categories' => array( 'kelsey', 'header' ),
	'content'    => '<!-- wp:group {"align":"full","className":"no-margin-top post-header-without-bg-wrapper"} -->
	<div class="wp-block-group alignfull no-margin-top post-header-without-bg-wrapper">
		<!-- wp:group {"align":"wide","layout":{"inherit":true}} -->
		<div class="wp-block-group alignwide">
			<!-- wp:post-title {"textAlign":"left","level":1,"align":"wide"} /-->
		</div>
		<!-- /wp:group -->
	</div>
	<!-- /wp:group -->',
);
