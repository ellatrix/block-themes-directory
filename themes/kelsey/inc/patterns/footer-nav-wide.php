<?php
/**
 * Footer Nav Wide
 */
return array(
	'title'      => esc_html__( 'Footer Nav Wide', 'kelsey' ),
	'categories' => array( 'kelsey', 'footer' ),
	'content'    => '<!-- wp:group {"align":"full","className":"site-footer","layout":{"inherit":true}} -->
	<div class="wp-block-group alignfull site-footer">
		<!-- wp:group {"align":"wide","className":"is-style-kelsey-padding-0","layout":{"type":"flex","justifyContent":"space-between"}} -->
		<div class="wp-block-group alignwide is-style-kelsey-padding-0">
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
	<!-- /wp:group -->',
);
