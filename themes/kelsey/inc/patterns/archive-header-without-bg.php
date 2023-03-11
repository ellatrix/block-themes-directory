<?php
/**
 * Archive Header Without BG
 */
return array(
	'title'      => esc_html__( 'Archive Header Without BG', 'kelsey' ),
	'categories' => array( 'kelsey', 'header' ),
	'content'    => '<!-- wp:group {"class":"no-margin-top archive-header-without-bg-wrapper","layout":{"inherit":true}} -->
	<div class="wp-block-group no-margin-top archive-header-without-bg-wrapper">
		<!-- wp:group {"align":"wide} -->
		<div class="wp-block-group alignwide">
			<!-- wp:query-title {"type":"archive","textAlign":"left"} /-->

			<!-- wp:term-description {"textAlign":"left"} /-->
		</div>
		<!-- /wp:group -->
	</div>
	<!-- /wp:group -->',
);
