
<?php
 /**
  * Title: Header Default
  * Slug: gutenify-magazine/header-default
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

				<!-- wp:navigation {"customTextColor":"#b4b4b4","overlayBackgroundColor":"foreground","overlayTextColor":"background"} /-->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:group -->
	</div>
	<!-- /wp:group -->

	<!-- wp:group {"align":"full","style":{"border":{"radius":"0px"}},"layout":{"inherit":true}} -->
	<div class="wp-block-group alignfull" style="border-radius: 0px">
		<!-- wp:cover {"url":"<?php echo esc_url( get_template_directory_uri() ) . '/images/header-banner.jpg'; ?>","id":681,"dimRatio":70,"overlayColor":"foreground","focalPoint":{"x":"0.15","y":"0.87"},"minHeight":220,"align":"full","style":{"spacing":{"padding":{"top":"0px","bottom":"0px"}}}} -->
		<div
			class="wp-block-cover alignfull"
			style="padding-top: 0px; padding-bottom: 0px; min-height: 220px"
		>
			<span
				aria-hidden="true"
				class="wp-block-cover__background has-foreground-background-color has-background-dim-70 has-background-dim"
			></span
			><img
				class="wp-block-cover__image-background wp-image-681"
				alt=""
				src="<?php echo esc_url( get_template_directory_uri() );?>/images/header-banner.jpg"
				style="object-position: 15% 87%"
				data-object-fit="cover"
				data-object-position="15% 87%"
			/>
			<div class="wp-block-cover__inner-container">
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
						<!-- wp:column {"verticalAlignment":"center","width":"33.33%","className":"mobile-aligncenter"} -->
						<div
							class="wp-block-column is-vertically-aligned-center mobile-aligncenter"
							style="flex-basis: 33.33%"
						>
							<!-- wp:group {"style":{"spacing":{"blockGap":"0px"}}} -->
							<div class="wp-block-group">
								<!-- wp:site-title {"style":{"elements":{"link":{"color":{"text":"var:preset|color|background"}}},"typography":{"fontStyle":"normal","fontWeight":"600","fontSize":"2.5em"}}} /-->

								<!-- wp:site-tagline {"style":{"typography":{"letterSpacing":"3px"}},"textColor":"luminous-vivid-amber"} /-->
							</div>
							<!-- /wp:group -->
						</div>
						<!-- /wp:column -->

						<!-- wp:column {"verticalAlignment":"center","width":"66.66%"} -->
						<div
							class="wp-block-column is-vertically-aligned-center"
							style="flex-basis: 66.66%"
						>
							<!-- wp:image {"align":"right","id":378,"sizeSlug":"full","linkDestination":"custom","className":"no-margin mobile-aligncenter"} -->
							<figure
								class="wp-block-image alignright size-full no-margin mobile-aligncenter"
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

				<!-- wp:group {"align":"wide","layout":{"inherit":true}} -->
				<div class="wp-block-group alignwide">
					<!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"0px","padding":{"top":"10px","right":"30px","bottom":"10px","left":"30px"}},"color":{"background":"#af1616"}},"layout":{"inherit":true}} -->
					<div
						class="wp-block-group alignwide has-background"
						style="
							background-color: #af1616;
							padding-top: 10px;
							padding-right: 30px;
							padding-bottom: 10px;
							padding-left: 30px;
						"
					>
						<!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"0px"}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between"}} -->
						<div class="wp-block-group alignwide">
							<!-- wp:navigation {"textColor":"background","overlayBackgroundColor":"foreground","overlayTextColor":"background","align":"full","className":"has-left-submenu","layout":{"type":"flex","setCascadingProperties":true,"justifyContent":"left","flexWrap":"wrap","orientation":"horizontal"},"style":{"typography":{"fontStyle":"normal","fontWeight":"500","textTransform":"capitalize"}}} /-->
						<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"right","flexWrap":"wrap"}} -->
						<div class="wp-block-buttons"><!-- wp:button {"backgroundColor":"luminous-vivid-amber","textColor":"foreground","align":"center","className":"is-style-fill"} -->
						<div class="wp-block-button aligncenter is-style-fill"><a class="wp-block-button__link has-foreground-color has-luminous-vivid-amber-background-color has-text-color has-background">Subscribe Now</a></div>
						<!-- /wp:button --></div>
						<!-- /wp:buttons -->
						</div>
						<!-- /wp:group -->
					</div>
					<!-- /wp:group -->
				</div>
				<!-- /wp:group -->
			</div>
		</div>
		<!-- /wp:cover -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
