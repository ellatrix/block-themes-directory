<?php
return array(
			'title'         => __( 'Header Boxed Menu', 'sampler' ),
			'categories'    => array( 'sampler-headers' ),
			'blockTypes'    => array( 'core/template-part/header' ),
			'viewportWidth' => 1200,
			'content'       => '
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"1em","right":"2rem","bottom":"1em","left":"2rem"}}},"backgroundColor":"vivid-pink","layout":{"inherit":true}} -->
<div class="wp-block-group alignfull has-vivid-pink-background-color has-background" style="padding-top:1em;padding-right:2rem;padding-bottom:1em;padding-left:2rem">

	<!-- wp:group {"align":"full","layout":{"type":"flex","justifyContent":"space-between","flexWrap":"nowrap"}} -->
	<div class="wp-block-group alignfull">

		<!-- wp:group -->
		<div class="wp-block-group">

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
					<!-- wp:site-tagline {"textColor":"white","className":"is-style-zero-top-margin"} /-->
				</div>
				<!-- /wp:group -->

			</div>
			<!-- /wp:group -->

	</div>
	<!-- /wp:group -->

		<!-- wp:group {"style":{"border":{"width":"1px","style":"solid"}},"borderColor":"white"} -->
		<div class="wp-block-group has-border-color has-white-border-color" style="border-style:solid;border-width:1px">

			<!-- wp:navigation {"textColor":"white","backgroundColor":"vivid-pink","layout":{"type":"flex","setCascadingProperties":true,"justifyContent":"right"}} -->

				<!-- wp:navigation-link {"label":"Services","url":"#","kind":"custom","isTopLevelLink":true} /-->

				<!-- wp:navigation-link {"label":"Gallery","url":"#","kind":"custom","isTopLevelLink":true} /-->

				<!-- wp:navigation-link {"label":"About","url":"#","kind":"custom","isTopLevelLink":true} /-->

				<!-- wp:navigation-link {"label":"News","url":"#","kind":"custom","isTopLevelLink":true} /-->

				<!-- wp:buttons -->
				<div class="wp-block-buttons">

					<!-- wp:button {"backgroundColor":"white","textColor":"black","style":{"border":{"radius":"0px"}},"fontSize":"normal"} -->
					<div class="wp-block-button has-custom-font-size has-normal-font-size"><a class="wp-block-button__link has-black-color has-white-background-color has-text-color has-background" style="border-radius:0px">Contact</a></div>
					<!-- /wp:button -->

				</div>
				<!-- /wp:buttons -->

			<!-- /wp:navigation -->

		</div>
		<!-- /wp:group -->

	</div>
	<!-- /wp:group -->

</div>
<!-- /wp:group -->
',
);
