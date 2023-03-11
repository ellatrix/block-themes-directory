<?php
return array(
			'title'         => __( 'Header with Top Bar', 'alara' ),
			'categories'    => array( 'alara-headers' ),
			'blockTypes'    => array( 'core/template-part/header' ),
			'viewportWidth' => 1440,
			'content'       => '<!-- wp:group {"align":"full","textColor":"foreground","className":"site-header","layout":{"inherit":true},"style":{"spacing":{"padding":{"bottom":"1em"}}}} -->
<div class="wp-block-group alignfull site-header has-foreground-color has-text-color" style="padding-bottom:1em">

	<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"0.75em","right":"0px","bottom":"0.75em","left":"0px"}}},"backgroundColor":"foreground","textColor":"background","layout":{"inherit":true}} -->
	<div class="wp-block-group alignfull has-background-color has-foreground-background-color has-text-color has-background" style="padding-top:0.75em;padding-right:0px;padding-bottom:0.75em;padding-left:0px">

		<!-- wp:group {"layout":{"type":"flex","allowOrientation":false,"justifyContent":"space-between"}} -->
		<div class="wp-block-group">

			<!-- wp:site-tagline {"fontSize":"smaller"} /-->

			<!-- wp:social-links {"iconColor":"background","iconColorValue":"var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dcolor\u002d\u002dbackground)","size":"has-small-icon-size","className":"is-style-logos-only"} -->
			<ul class="wp-block-social-links has-small-icon-size has-icon-color is-style-logos-only">' . alara_pattern_content( 'social-media' ) . '</ul>
			<!-- /wp:social-links -->

		</div>
		<!-- /wp:group -->
	
	</div>
	<!-- /wp:group -->

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
