<?php
/**
 * Post Header Without BG
 */
return array(
	'title'      => esc_html__( 'Post Header Without BG', 'kelsey' ),
	'categories' => array( 'kelsey', 'header' ),
	'content'    => '<!-- wp:group {"className":"no-margin-top post-header-without-bg-wrapper"} -->
	<div class="wp-block-group no-margin-top post-header-without-bg-wrapper">
		<!-- wp:group {"align":"wide","layout":{"inherit":true}} -->
		<div class="wp-block-group alignwide">
			<!-- wp:post-title {"textAlign":"left","level":1} /-->
		</div>
		<!-- /wp:group -->
	</div>
	<!-- /wp:group -->',
);
