<?php
return array(
			'title'         => __( 'Header Cover Boxed', 'alara' ),
			'categories'    => array( 'alara-headers-boxed' ),
			'blockTypes'    => array( 'core/template-part/header' ),
			'viewportWidth' => 1440,
			'content'       => '<!-- wp:cover {"url":"' . esc_url( ALARA_TEMPLATE_DIR_URI ) . '/assets/images/road.jpg","dimRatio":70,"overlayColor":"foreground","align":"full","className":"is-dark"} -->
<div class="wp-block-cover alignfull is-dark">
	<span aria-hidden="true" class="has-foreground-background-color has-background-dim-70 wp-block-cover__gradient-background has-background-dim"></span>
	<img class="wp-block-cover__image-background" alt="" src="' . esc_url( ALARA_TEMPLATE_DIR_URI ) . '/assets/images/road.jpg" data-object-fit="cover" />
	<div class="wp-block-cover__inner-container">

		<!-- wp:group {"align":"full","className":"site-header","layout":{"inherit":true}} -->
		<div class="wp-block-group alignfull site-header">

			<!-- wp:group {"backgroundColor":"background","layout":{"type":"flex","justifyContent":"space-between","flexWrap":"nowrap"}} -->
			<div class="wp-block-group has-background-background-color has-background">

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
							<!-- wp:site-tagline {"textColor":"foreground","className":"is-style-no-block-gap"} /-->
						</div>
						<!-- /wp:group -->

					</div>
					<!-- /wp:group -->

				</div>
				<!-- /wp:group -->

				<!-- wp:navigation {"textColor":"foreground","layout":{"type":"flex","setCascadingProperties":true,"justifyContent":"right"}} -->
					<!-- wp:page-list /-->
				<!-- /wp:navigation -->

			</div>
			<!-- /wp:group -->

			<!-- wp:group {"style":{"spacing":{"padding":{"top":"5px","right":"5px","bottom":"5px","left":"5px"}},"className":"is-style-no-block-gap"},"gradient":"primary-tertiary-quaternary"} -->
			<div class="wp-block-group has-primary-tertiary-quaternary-gradient-background has-background is-style-no-block-gap" style="padding-top:5px;padding-right:5px;padding-bottom:5px;padding-left:5px"></div>
			<!-- /wp:group -->

		</div>
		<!-- /wp:group -->

		<!-- wp:spacer {"height":128} -->
		<div style="height:128px" aria-hidden="true" class="wp-block-spacer"></div>
		<!-- /wp:spacer -->

		<!-- wp:post-title {"textAlign":"center","level":1,"textColor":"background"} /-->

	</div>

</div>
<!-- /wp:cover -->',
);
