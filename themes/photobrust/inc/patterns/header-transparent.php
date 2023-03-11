<?php
/**
 * Header Transparent
 */
return array(
	'title'      => esc_html__( 'Header Transparent', 'photobrust' ),
	'categories' => array( 'photobrust', 'header' ),
	'content'    => '<!-- wp:group {"align":"full","className":"site-header-wrap transparent-absolute-header","layout":{"inherit":true}} -->
	<div class="wp-block-group alignfull site-header-wrap transparent-absolute-header">
	<!-- wp:group {"align":"full","className":"site-header","layout":{"inherit":true}} -->
	<div class="wp-block-group alignfull site-header">
		<!-- wp:group {"align":"full","className":"is-style-photobrust-padding-0","layout":{"type":"flex","justifyContent":"space-between"}} -->
		<div class="wp-block-group alignfull is-style-photobrust-padding-0">
			<!-- wp:group {"layout":{"type":"flex"}} -->
			<div class="wp-block-group">
				<!-- wp:site-logo {"width":64} /-->
	
				<!-- wp:group {"className":"site-branding"} -->
				<div class="wp-block-group site-branding">
					<!-- wp:site-title /-->
	
					<!-- wp:site-tagline {"style":{"spacing":{"margin":{"top":"0px"}}}} /-->
				</div>
				<!-- /wp:group -->
			</div>
			<!-- /wp:group -->
	
			<!-- wp:navigation {"layout":{"type":"flex","setCascadingProperties":true,"justifyContent":"right"}} /-->
		</div>
		<!-- /wp:group -->
	</div>
	<!-- /wp:group -->
	</div>
	<!-- /wp:group -->',
);
