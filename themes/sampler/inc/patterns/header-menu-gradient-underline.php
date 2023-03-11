<?php
return array(
			'title'         => __( 'Header Menu Gradient Underline', 'sampler' ),
			'categories'    => array( 'sampler-headers' ),
			'blockTypes'    => array( 'core/template-part/header' ),
			'viewportWidth' => 1200,
			'content'       => '
<!-- wp:group {"align":"full","layout":{"inherit":true},"style":{"spacing":{"padding":{"top":"1em","right":"2rem","bottom":"1em","left":"2rem"}}}} -->
<div class="wp-block-group alignfull" style="padding-top:1em;padding-right:2rem;padding-bottom:1em;padding-left:2rem">

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
					<!-- wp:site-title {"className":"is-style-links-plain"} /-->
					<!-- wp:site-tagline {"className":"is-style-zero-top-margin"} /-->
				</div>
				<!-- /wp:group -->

			</div>
			<!-- /wp:group -->

		</div>
		<!-- /wp:group -->

		<!-- wp:group -->
		<div class="wp-block-group">

			<!-- wp:navigation {"layout":{"type":"flex","setCascadingProperties":true,"justifyContent":"right"}} -->

				<!-- wp:navigation-link {"label":"Services","url":"#","kind":"custom","isTopLevelLink":true} /-->

				<!-- wp:navigation-link {"label":"Gallery","url":"#","kind":"custom","isTopLevelLink":true} /-->

				<!-- wp:navigation-link {"label":"About","url":"#","kind":"custom","isTopLevelLink":true} /-->

				<!-- wp:navigation-link {"label":"News","url":"#","kind":"custom","isTopLevelLink":true} /-->

				<!-- wp:buttons -->
				<div class="wp-block-buttons">
					<!-- wp:button {"gradient":"pale-cyan-blue-to-vivid-purple","className":"is-style-hover-effect-light","fontSize":"normal"} -->
					<div class="wp-block-button has-custom-font-size is-style-hover-effect-light has-normal-font-size"><a class="wp-block-button__link has-pale-cyan-blue-to-vivid-purple-gradient-background has-background">Contact</a></div>
					<!-- /wp:button -->
				</div>
				<!-- /wp:buttons -->

			<!-- /wp:navigation -->

			<!-- wp:group {"style":{"spacing":{"padding":{"top":"1px","right":"0px","bottom":"0px","left":"0px"}}},"gradient":"pale-cyan-blue-to-vivid-purple"} -->
			<div class="wp-block-group has-pale-cyan-blue-to-vivid-purple-gradient-background has-background" style="padding-top:1px;padding-right:0px;padding-bottom:0px;padding-left:0px"></div>
			<!-- /wp:group -->

		</div>
		<!-- /wp:group -->

	</div>
	<!-- /wp:group -->

</div>
<!-- /wp:group -->
',
);
