
<?php
 /**
  * Title: Header Two
  * Slug: gutenify-magazine/header-two
  * Categories: gutenify-magazine
  */
?>
<!-- wp:group {"style":{"spacing":{"blockGap":"0px"}},"className":"has-no-hover-shadow-dark","layout":{"inherit":true}} -->
<div class="wp-block-group has-no-hover-shadow-dark">
	<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"10px","right":"10px","bottom":"10px","left":"10px"}}},"backgroundColor":"foreground","textColor":"background","layout":{"inherit":true}} -->
	<div
		class="wp-block-group alignfull has-background-color has-foreground-background-color has-text-color has-background"
		style="
			padding-top: 10px;
			padding-right: 10px;
			padding-bottom: 10px;
			padding-left: 10px;
		"
	>
		<!-- wp:group {"align":"wide","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
		<div class="wp-block-group alignwide">
			<!-- wp:social-links {"iconColor":"background","iconColorValue":"#ffffff","openInNewTab":true,"size":"has-small-icon-size","className":"is-style-logos-only","layout":{"type":"flex","justifyContent":"right"}} -->
			<ul
				class="wp-block-social-links has-small-icon-size has-icon-color is-style-logos-only"
			>
				<!-- wp:social-link {"url":"#","service":"facebook"} /-->

				<!-- wp:social-link {"url":"#","service":"twitter"} /-->

				<!-- wp:social-link {"url":"#","service":"linkedin"} /-->

				<!-- wp:social-link {"url":"#","service":"instagram"} /-->
			</ul>
			<!-- /wp:social-links -->

			<!-- wp:buttons -->
			<div class="wp-block-buttons">
				<!-- wp:button {"style":{"spacing":{"padding":{"top":"3px","right":"20px","bottom":"3px","left":"20px"}}}} -->
				<div class="wp-block-button">
					<a
						class="wp-block-button__link"
						style="
							padding-top: 3px;
							padding-right: 20px;
							padding-bottom: 3px;
							padding-left: 20px;
						"
						><?php echo esc_html__( 'Subscribe Now', 'gutenify-magazine' ); ?></a
					>
				</div>
				<!-- /wp:button -->
			</div>
			<!-- /wp:buttons -->
		</div>
		<!-- /wp:group -->
	</div>
	<!-- /wp:group -->

	<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"15px","right":"15px","bottom":"15px","left":"15px"}}},"layout":{"inherit":true}} -->
	<div
		class="wp-block-group alignwide"
		style="
			padding-top: 15px;
			padding-right: 15px;
			padding-bottom: 15px;
			padding-left: 15px;
		"
	>
		<!-- wp:group {"align":"wide","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
		<div class="wp-block-group alignwide">
			<!-- wp:group {"style":{"spacing":{"blockGap":"0px"}}} -->
			<div class="wp-block-group">
				<!-- wp:site-title {"style":{"elements":{"link":{"color":{"text":"var:preset|color|vivid-red"}}},"typography":{"fontStyle":"normal","fontWeight":"600"}},"fontSize":"medium"} /-->

				<!-- wp:site-tagline /-->
			</div>
			<!-- /wp:group -->

			<!-- wp:navigation {"textColor":"foreground","overlayBackgroundColor":"foreground","overlayTextColor":"background","align":"full","className":"has-left-submenu","layout":{"type":"flex","setCascadingProperties":true,"justifyContent":"right","flexWrap":"wrap"},"style":{"typography":{"fontStyle":"normal","fontWeight":"500","textTransform":"capitalize"}}} /-->
		</div>
		<!-- /wp:group -->
	</div>
	<!-- /wp:group -->

	<!-- wp:separator {"align":"full","style":{"color":{"background":"#f5f3f3"}},"className":"is-style-wide"} -->
	<hr
		class="wp-block-separator alignfull has-text-color has-alpha-channel-opacity has-background is-style-wide"
		style="background-color: #f5f3f3; color: #f5f3f3"
	/>
	<!-- /wp:separator -->
</div>
<!-- /wp:group -->
