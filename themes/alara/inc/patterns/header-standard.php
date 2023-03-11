<?php
return array(
			'title'         => __( 'Header Standard', 'alara' ),
			'categories'    => array( 'alara-headers' ),
			'blockTypes'    => array( 'core/template-part/header' ),
			'viewportWidth' => 1440,
			'content'       => '<!-- wp:group {"align":"full","textColor":"foreground","className":"site-header","layout":{"inherit":true},"style":{"spacing":{"padding":{"top":"1em","bottom":"1em"}}}} -->
<div class="wp-block-group alignfull site-header has-foreground-color has-text-color" style="padding-top:1em;padding-bottom:1em">

	<!-- wp:group {"layout":{"type":"flex","justifyContent":"space-between","flexWrap":"nowrap"}} -->
	<div class="wp-block-group">

		<!-- wp:group {"className":"site-branding"} -->
		<div class="wp-block-group site-branding">

			<!-- wp:group {"layout":{"type":"flex","justifyContent":"left","flexWrap":"nowrap"}} -->
			<div class="wp-block-group">

				<!-- wp:group -->
				<div class="wp-block-group">
					<!-- wp:site-logo {"width":85} /-->
				</div>
				<!-- /wp:group -->

				<!-- wp:group -->
				<div class="wp-block-group">
					<!-- wp:site-title {"className":"is-style-links-plain"} /-->
					<!-- wp:site-tagline {"className":"is-style-no-block-gap"} /-->
				</div>
				<!-- /wp:group -->

			</div>
			<!-- /wp:group -->

		</div>
		<!-- /wp:group -->

		<!-- wp:navigation {"layout":{"type":"flex","setCascadingProperties":true,"justifyContent":"right"}} -->
			<!-- wp:page-list /-->
		<!-- /wp:navigation -->

	</div>
	<!-- /wp:group -->

</div>
<!-- /wp:group -->',
);
