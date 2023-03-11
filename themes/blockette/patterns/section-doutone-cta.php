<?php
/**
 * Title: Duotone section call to action
 * Slug: blockette/section-doutone-cta
 * Categories: blockette-duotones, blockette-sections
 * Block Types: core/cover, core/group
 * Viewport Width: 1024
 *
 * @package blockette
 * @since 1.0.0
 */

$image = get_theme_file_uri( 'assets/images/1653509-pxhere.com.jpg' );
?>

<!-- wp:group {"align":"full","style":{"spacing":{"margin":{"top":"12vh","bottom":"12vh"}}},"layout":{"inherit":true}} -->
<div class="wp-block-group alignfull" style="margin-top:12vh;margin-bottom:12vh">
	<!-- wp:columns {"align":"wide"} -->
	<div class="wp-block-columns alignwide">
		<!-- wp:column {"verticalAlignment":"center","width":"","className":"blockette-offset-right blockette-offset-top blockette-z-index-top "} -->
		<div class="wp-block-column is-vertically-aligned-center blockette-offset-right blockette-offset-top blockette-z-index-top">
			<!-- wp:group {"backgroundColor":"foreground","textColor":"background","className":"blockette-box-shadow-big","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"center","verticalAlignment":"top"}} -->
			<div
				class="wp-block-group blockette-box-shadow-big has-background-color has-foreground-background-color has-text-color has-background">
				<!-- wp:heading {"textAlign":"left","className":"is-style-default"} -->
				<h2 class="has-text-align-left is-style-default">
					<?php echo esc_html_x( 'This season\'s offer →', 'Sample text for the heading', 'blockette' ); ?>
				</h2>
				<!-- /wp:heading -->
			</div>
			<!-- /wp:group -->

			<!-- wp:list {"ordered":true,"fontSize":"medium"} -->
			<ol class="has-medium-font-size">
				<li><?php echo esc_html_x( 'The duotone dresses', 'Sample text for the list item', 'blockette' ); ?></li>
				<li><?php echo esc_html_x( 'The full-tone accessories', 'Sample text for the list item', 'blockette' ); ?></li>
				<li><?php echo esc_html_x( 'Missing the points', 'Sample text for the list item', 'blockette' ); ?></li>
				<li><?php echo esc_html_x( 'Clearing the floats', 'Sample text for the list item', 'blockette' ); ?></li>
				<li><?php echo esc_html_x( 'Floating points and barrels', 'Sample text for the list item', 'blockette' ); ?></li>
			</ol>
			<!-- /wp:list -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column {"verticalAlignment":"center","className":"blockette-z-index-zero"} -->
		<div class="wp-block-column is-vertically-aligned-center blockette-z-index-zero">
			<!-- wp:spacer {"height":"4vw"} -->
			<div style="height:4vw" aria-hidden="true" class="wp-block-spacer"></div>
			<!-- /wp:spacer -->

			<!-- wp:cover {"url":"<?php echo esc_url( $image ); ?>","id":1350,"dimRatio":0,"minHeight":30,"minHeightUnit":"vw","contentPosition":"bottom center","style":{"color":{"duotone":["#e07a5f","#F9F9F9"]},"spacing":{"padding":{"top":"4vw","right":"4vw","bottom":"4vw","left":"4vw"}}}} -->
			<div class="wp-block-cover has-custom-content-position is-position-bottom-center"
				style="padding-top:4vw;padding-right:4vw;padding-bottom:4vw;padding-left:4vw;min-height:30vw"><span
					aria-hidden="true"
					class="wp-block-cover__background has-background-dim-0 has-background-dim"></span><img
					class="wp-block-cover__image-background wp-image-1350" alt=""
					src="<?php echo esc_url( $image ); ?>"
					data-object-fit="cover" />
				<div class="wp-block-cover__inner-container">
					<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
					<div class="wp-block-buttons">
						<!-- wp:button {"className":"is-style-fill","fontSize":"medium"} -->
						<div class="wp-block-button has-custom-font-size is-style-fill has-medium-font-size">
							<a class="wp-block-button__link">
								<?php echo esc_html_x( 'See the offer', 'Sample text for the button', 'blockette' ); ?>
							</a>
						</div>
						<!-- /wp:button -->
					</div>
					<!-- /wp:buttons -->
				</div>
			</div>
			<!-- /wp:cover -->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->
</div>
<!-- /wp:group -->
