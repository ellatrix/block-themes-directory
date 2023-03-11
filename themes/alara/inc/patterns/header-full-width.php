<?php
return array(
			'title'         => __( 'Header Full Width', 'alara' ),
			'categories'    => array( 'alara-headers' ),
			'blockTypes'    => array( 'core/template-part/header' ),
			'viewportWidth' => 1440,
			'content'       => '<!-- wp:group {"align":"full","textColor":"foreground","className":"site-header","layout":{"inherit":true}} -->
<div class="wp-block-group alignfull site-header has-foreground-color has-text-color">
	<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"right":"0px","left":"1rem","top":"0px","bottom":"0px"}}},"backgroundColor":"secondary","layout":{"type":"flex","justifyContent":"space-between","flexWrap":"nowrap"}} -->
	<div class="wp-block-group alignfull has-secondary-background-color has-background" style="padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:1rem">
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
					<!-- wp:site-title {"style":{"typography":{"textTransform":"uppercase"}},"className":"is-style-links-plain"} /-->

					<!-- wp:site-tagline {"style":{"typography":{"textTransform":"uppercase"}},"className":"is-style-no-block-gap","fontSize":"smaller"} /-->
				</div>
				<!-- /wp:group -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:group -->

		<!-- wp:group {"style":{"spacing":{"padding":{"right":"1rem","left":"1rem","top":"2rem","bottom":"2rem"}}},"backgroundColor":"primary"} -->
		<div class="wp-block-group has-primary-background-color has-background" style="padding-top:2rem;padding-right:1rem;padding-bottom:2rem;padding-left:1rem">
			<!-- wp:navigation {"textColor":"background","overlayBackgroundColor":"primary","overlayTextColor":"background","layout":{"type":"flex","setCascadingProperties":true,"justifyContent":"right"},"style":{"typography":{"textTransform":"uppercase"}},"fontSize":"smaller"} -->
				<!-- wp:page-list /-->
			<!-- /wp:navigation -->
		</div>
		<!-- /wp:group -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->',
);
