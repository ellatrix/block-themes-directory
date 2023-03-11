<?php
/**
 * Title: Simple CTA section
 * Slug: blockette/section-simple-cta
 * Categories: blockette-sections, blockette-duotone
 * Block Types: core/group, core/cover, cover/columns
 * Viewport Width: 1024
 *
 * @package blockette
 * @since 1.0.0
 */

$image = get_theme_file_uri( 'assets/images/628707-pxhere.com.jpg' );
?>

<!-- wp:group {"align":"wide","style":{"spacing":{"margin":{"top":"0px","bottom":"0px"},"padding":{"top":"0px","right":"0px","bottom":"0px","left":"0px"}}},"gradient":"vertical-background-secondary","layout":{"inherit":false}} -->
<div class="wp-block-group alignwide has-vertical-background-secondary-gradient-background has-background"
	style="margin-top:0px;margin-bottom:0px;padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px">
	<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"0px","right":"0px","bottom":"0px","left":"0px"},"blockGap":"0px","margin":{"top":"0px","bottom":"0px"}}},"gradient":"vertical-primary-secondary"} -->
	<div class="wp-block-group alignwide has-vertical-primary-secondary-gradient-background has-background"
		style="margin-top:0px;margin-bottom:0px;padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px">
		<!-- wp:spacer {"height":"2vw"} -->
		<div style="height:2vw" aria-hidden="true" class="wp-block-spacer"></div>
		<!-- /wp:spacer -->
	</div>
	<!-- /wp:group -->

	<!-- wp:spacer {"height":"4vw"} -->
	<div style="height:4vw" aria-hidden="true" class="wp-block-spacer"></div>
	<!-- /wp:spacer -->

	<!-- wp:columns {"className":"is-style-default"} -->
	<div class="wp-block-columns is-style-default">
		<!-- wp:column {"verticalAlignment":"center","width":"","backgroundColor":"background","className":"is-style-blockette-box-shadow blockette-offset-right","layout":{"inherit":true}} -->
		<div
			class="wp-block-column is-vertically-aligned-center is-style-blockette-box-shadow blockette-offset-right has-background-background-color has-background">
			<!-- wp:cover {"url":"<?php echo esc_url( $image ); ?>","id":1191,"dimRatio":20,"focalPoint":{"x":"0.50","y":"0.50"},"minHeight":35,"minHeightUnit":"vw","contentPosition":"center left","style":{"spacing":{"padding":{"top":"4vw","right":"4vw","bottom":"4vw","left":"4vw"}},"color":{"duotone":["#2b1c25","#e07a5f"]}}} -->
			<div class="wp-block-cover has-custom-content-position is-position-center-left"
				style="padding-top:4vw;padding-right:4vw;padding-bottom:4vw;padding-left:4vw;min-height:35vw"><span
					aria-hidden="true"
					class="wp-block-cover__background has-background-dim-20 has-background-dim"></span><img
					class="wp-block-cover__image-background wp-image-1191" alt=""
					src="<?php echo esc_url( $image ); ?>"
					style="object-position:50% 50%" data-object-fit="cover" data-object-position="50% 50%" />
				<div class="wp-block-cover__inner-container">
					<!-- wp:heading {"align":"wide","textColor":"white","className":"is-style-blockette-text-shadow","fontSize":"big"} -->
					<h2 class="alignwide is-style-blockette-text-shadow has-white-color has-text-color has-big-font-size">
						<?php echo esc_html_x( 'get the idea.', 'Sample text for heading', 'blockette' ); ?>
					</h2>
					<!-- /wp:heading -->
				</div>
			</div>
			<!-- /wp:cover -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column {"verticalAlignment":"center","width":"","className":"blockette-offset-left blockette-z-index-top","layout":{"inherit":true}} -->
		<div class="wp-block-column is-vertically-aligned-center blockette-offset-left blockette-z-index-top">
			<!-- wp:group {"style":{"spacing":{"padding":{"top":"3vw","right":"3vw","bottom":"3vw","left":"3vw"},"blockGap":"1vw"}},"backgroundColor":"background","className":"is-style-blockette-box-shadow","layout":{"type":"flex","orientation":"vertical"}} -->
			<div class="wp-block-group is-style-blockette-box-shadow has-background-background-color has-background"
				style="padding-top:3vw;padding-right:3vw;padding-bottom:3vw;padding-left:3vw">
				<!-- wp:paragraph -->
				<p>
					<?php echo esc_html_x( 'Get more for your valet → Get your deals', 'Sample text for paragraph', 'blockette' ); ?>
				</p>
				<!-- /wp:paragraph -->

				<!-- wp:buttons -->
				<div class="wp-block-buttons">
					<!-- wp:button {"fontSize":"small"} -->
					<div class="wp-block-button has-custom-font-size has-small-font-size">
						<a class="wp-block-button__link">
							<?php echo esc_html_x( 'Shop women', 'Sample text for button', 'blockette' ); ?>
						</a>
					</div>
					<!-- /wp:button -->
				</div>
				<!-- /wp:buttons -->
			</div>
			<!-- /wp:group -->

			<!-- wp:group {"style":{"spacing":{"padding":{"top":"3vw","right":"3vw","bottom":"3vw","left":"3vw"},"blockGap":"1vw"}},"backgroundColor":"background","className":"is-style-blockette-box-shadow","layout":{"type":"flex","orientation":"vertical"}} -->
			<div class="wp-block-group is-style-blockette-box-shadow has-background-background-color has-background"
				style="padding-top:3vw;padding-right:3vw;padding-bottom:3vw;padding-left:3vw">
				<!-- wp:paragraph -->
				<p>
					<?php echo esc_html_x( 'Get excited with quality → Get your coupon', 'Sample text for paragraph', 'blockette' ); ?>
				</p>
				<!-- /wp:paragraph -->

				<!-- wp:buttons -->
				<div class="wp-block-buttons">
					<!-- wp:button {"fontSize":"small"} -->
					<div class="wp-block-button has-custom-font-size has-small-font-size">
						<a class="wp-block-button__link">
							<?php echo esc_html_x( 'Shop men', 'Sample text for button', 'blockette' ); ?>
						</a>
					</div>
					<!-- /wp:button -->
				</div>
				<!-- /wp:buttons -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->

	<!-- wp:spacer {"height":"var(--wp--custom--v-spacing, 4vw)"} -->
	<div style="height:var(--wp--custom--v-spacing, 4vw)" aria-hidden="true" class="wp-block-spacer"></div>
	<!-- /wp:spacer -->

</div>
<!-- /wp:group -->
