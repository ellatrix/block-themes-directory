<?php
return array(
			'title'         => __( 'Header Split Background', 'sampler' ),
			'categories'    => array( 'sampler-headers' ),
			'blockTypes'    => array( 'core/template-part/header' ),
			'viewportWidth' => 1200,
			'content'       => '
<!-- wp:group {"align":"full","layout":{"inherit":true}} -->
<div class="wp-block-group alignfull">

	<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"0px","right":"2rem","bottom":"0px","left":"0px"}}},"backgroundColor":"vivid-cyan-blue","layout":{"type":"flex","justifyContent":"space-between","flexWrap":"nowrap"}} -->
	<div class="wp-block-group alignfull has-vivid-cyan-blue-background-color has-background" style="padding-top:0px;padding-right:2rem;padding-bottom:0px;padding-left:0px">

		<!-- wp:group {"style":{"spacing":{"padding":{"top":"1em","right":"2rem","bottom":"1em","left":"2rem"}}},"backgroundColor":"vivid-pink"} -->
		<div class="wp-block-group has-vivid-pink-background-color has-background" style="padding-top:1em;padding-right:2rem;padding-bottom:1em;padding-left:2rem">

			<!-- wp:group {"layout":{"type":"flex","justifyContent":"left","flexWrap":"nowrap"}} -->
			<div class="wp-block-group">

				<!-- wp:group -->
				<div class="wp-block-group">
					<!-- wp:site-logo {"width":120} /-->
				</div>
				<!-- /wp:group -->

				<!-- wp:group -->
				<div class="wp-block-group">
					<!-- wp:site-title {"style":{"elements":{"link":{"color":{"text":"var:preset|color|white"}}}},"textColor":"white","className":"is-style-links-plain"} /-->
					<!-- wp:site-tagline {"textColor":"very-light-gray","className":"is-style-zero-top-margin"} /-->
				</div>
				<!-- /wp:group -->

			</div>
			<!-- /wp:group -->

		</div>
		<!-- /wp:group -->

		<!-- wp:navigation {"ref":11562,"textColor":"white","layout":{"type":"flex","setCascadingProperties":true,"justifyContent":"right"}} /-->

	</div>
	<!-- /wp:group -->

</div>
<!-- /wp:group -->
',
);
