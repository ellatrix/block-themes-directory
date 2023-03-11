
<?php
 /**
  * Title: Header Five
  * Slug: gutenify-magazine/header-five
  * Categories: gutenify-magazine
  */
?>
<!-- wp:group {"align":"full","style":{"spacing":{"blockGap":"0px"}},"layout":{"inherit":true}} -->
<div class="wp-block-group alignfull">
	<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"10px","right":"10px","bottom":"10px","left":"10px"}},"color":{"background":"#191717"}},"textColor":"background","layout":{"inherit":true}} -->
	<div
		class="wp-block-group alignfull has-background-color has-text-color has-background"
		style="
			background-color: #191717;
			padding-top: 10px;
			padding-right: 10px;
			padding-bottom: 10px;
			padding-left: 10px;
		"
	>
		<!-- wp:group {"align":"wide","layout":{"inherit":true}} -->
		<div class="wp-block-group alignwide">
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

				<!-- wp:navigation {"ref":2852,"customTextColor":"#b4b4b4","overlayBackgroundColor":"foreground","overlayTextColor":"background"} /-->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:group -->
	</div>
	<!-- /wp:group -->

	<!-- wp:group {"align":"full","layout":{"inherit":false}} -->
	<div class="wp-block-group alignfull">
		<!-- wp:group {"style":{"spacing":{"padding":{"bottom":"20px","top":"20px"}}},"layout":{"inherit":true}} -->
		<div
			class="wp-block-group"
			style="padding-top: 20px; padding-bottom: 20px"
		>
			<!-- wp:columns {"verticalAlignment":"center","align":"wide","style":{"spacing":{"padding":{"right":"0px","left":"0px"}}}} -->
			<div
				class="wp-block-columns alignwide are-vertically-aligned-center"
				style="padding-right: 0px; padding-left: 0px"
			>
				<!-- wp:column {"verticalAlignment":"center","width":"33.33%"} -->
				<div
					class="wp-block-column is-vertically-aligned-center"
					style="flex-basis: 33.33%"
				>
					<!-- wp:group {"style":{"spacing":{"blockGap":"0px"}}} -->
					<div class="wp-block-group">
						<!-- wp:site-title {"style":{"elements":{"link":{"color":{"text":"var:preset|color|vivid-red"}}},"typography":{"fontStyle":"normal","fontWeight":"600","fontSize":"2rem"}}} /-->

						<!-- wp:site-tagline /-->
					</div>
					<!-- /wp:group -->
				</div>
				<!-- /wp:column -->

				<!-- wp:column {"verticalAlignment":"center","width":"66.66%"} -->
				<div
					class="wp-block-column is-vertically-aligned-center"
					style="flex-basis: 66.66%"
				>
					<!-- wp:image {"align":"right","id":378,"sizeSlug":"full","linkDestination":"custom","className":"no-margin"} -->
					<figure
						class="wp-block-image alignright size-full no-margin"
					>
						<a href="#"
							><img
								src="<?php echo esc_url( get_template_directory_uri() );?>/images/site-advertisement.jpeg"
								alt=""
								class="wp-image-378"
						/></a>
					</figure>
					<!-- /wp:image -->
				</div>
				<!-- /wp:column -->
			</div>
			<!-- /wp:columns -->
		</div>
		<!-- /wp:group -->
	</div>
	<!-- /wp:group -->

	<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"0px","right":"0px","bottom":"0px","left":"0px"},"blockGap":"0px"}},"backgroundColor":"background","className":"has-no-hover-shadow-dark","layout":{"inherit":true}} -->
	<div
		class="wp-block-group alignfull has-no-hover-shadow-dark has-background-background-color has-background"
		style="
			padding-top: 0px;
			padding-right: 0px;
			padding-bottom: 0px;
			padding-left: 0px;
		"
	>
		<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"10px","right":"0px","bottom":"10px","left":"0px"}}},"layout":{"inherit":false}} -->
		<div
			class="wp-block-group alignwide"
			style="
				padding-top: 10px;
				padding-right: 0px;
				padding-bottom: 10px;
				padding-left: 0px;
			"
		>
			<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"left":"0px"}}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between"}} -->
			<div class="wp-block-group alignwide" style="padding-left: 0px">
				<!-- wp:navigation {"textColor":"foreground","overlayBackgroundColor":"foreground","overlayTextColor":"background","align":"full","className":"has-left-submenu","layout":{"type":"flex","setCascadingProperties":true,"justifyContent":"left","flexWrap":"wrap","orientation":"horizontal"},"style":{"typography":{"fontStyle":"normal","fontWeight":"500","textTransform":"capitalize"}}} /-->

				<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"space-between"}} -->
				<div class="wp-block-buttons">
					<!-- wp:button {"backgroundColor":"luminous-vivid-amber","textColor":"foreground","align":"center","className":"is-style-outline"} -->
					<div class="wp-block-button aligncenter is-style-outline">
						<a
							class="wp-block-button__link has-foreground-color has-luminous-vivid-amber-background-color has-text-color has-background"
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
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
