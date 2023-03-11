<?php
/**
 * Title: Hero duotone image and gradient title
 * Slug: blockette/hero-doutone-gradient-title
 * Categories: blockette-featured, blockette-duotones, blockette-hero
 * Block Types: core/cover, core/group
 * Viewport Width: 1024
 *
 * @package blockette
 * @since 1.0.0
 */

$image = get_theme_file_uri( 'assets/images/1653509-pxhere.com.jpg' );
?>

<!-- wp:cover {"url":"<?php echo esc_url( $image ); ?>","id":1350,"dimRatio":60,"focalPoint":{"x":"0.50","y":"0.40"},"minHeight":50,"minHeightUnit":"vw","contentPosition":"center center","align":"full","style":{"color":{"duotone":["#2b1c25","#F9F9F9"]}}} -->
<div class="wp-block-cover alignfull" style="min-height:50vw"><span aria-hidden="true"
		class="wp-block-cover__background has-background-dim-60 has-background-dim"></span><img
		class="wp-block-cover__image-background wp-image-1350" alt=""
		src="<?php echo esc_url( $image ); ?>"
		style="object-position:50% 40%" data-object-fit="cover" data-object-position="50% 40%" />
	<div class="wp-block-cover__inner-container">
		<!-- wp:paragraph {"align":"center","textColor":"white","className":"blockette-animate blockette-move-down blockette-delay-7","fontSize":"medium"} -->
		<p class="has-text-align-center blockette-animate blockette-move-down blockette-delay-7 has-white-color has-text-color has-medium-font-size">
			<?php echo esc_html_x( 'Get prepared for the rainy, foggy and brown leafy days', 'Sample text for the hero paragraph', 'blockette' ); ?>
		</p>
		<!-- /wp:paragraph -->

		<!-- wp:heading {"textAlign":"center","style":{"typography":{"fontStyle":"normal"},"spacing":{"margin":{"top":"2vw","bottom":"2vw"}}},"textColor":"white","className":"blockette-txt-shadow-big blockette-animate blockette-move-down blockette-delay-1 is-style-blockette-gradient-3","fontSize":"enormous"} -->
		<h2 class="has-text-align-center blockette-txt-shadow-big blockette-animate blockette-move-down blockette-delay-1 is-style-blockette-gradient-3 has-white-color has-text-color has-enormous-font-size"
			style="font-style:normal;margin-top:2vw;margin-bottom:2vw">
			<?php echo esc_html_x( 'Fall / Winter', 'Sample text for the hero title', 'blockette' ); ?><br>
			<?php echo esc_html_x( 'Season', 'Sample text for the hero title', 'blockette' ); ?>
		</h2>
		<!-- /wp:heading -->

		<!-- wp:spacer {"height":"2vw"} -->
		<div style="height:2vw" aria-hidden="true" class="wp-block-spacer"></div>
		<!-- /wp:spacer -->

		<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
		<div class="wp-block-buttons">
			<!-- wp:button {"className":"blockette-animate blockette-move-right blockette-delay-3 is-style-outline","fontSize":"small"} -->
			<div class="wp-block-button has-custom-font-size blockette-animate blockette-move-right blockette-delay-3 is-style-outline has-small-font-size">
				<a class="wp-block-button__link">
					<?php echo esc_html_x( 'Outdoor clothing', 'Sample text for the button', 'blockette' ); ?>
				</a>
			</div>
			<!-- /wp:button -->

			<!-- wp:button {"className":"blockette-animate blockette-move-left blockette-delay-5 is-style-outline","fontSize":"small"} -->
			<div class="wp-block-button has-custom-font-size blockette-animate blockette-move-left blockette-delay-5 is-style-outline has-small-font-size">
				<a class="wp-block-button__link">
					<?php echo esc_html_x( 'Shoes / Accessories', 'Sample text for the button', 'blockette' ); ?>
				</a>
			</div>
			<!-- /wp:button -->
		</div>
		<!-- /wp:buttons -->

		<!-- wp:spacer {"height":"var(--wp--custom--v-spacing, 4vw)"} -->
		<div style="height:var(--wp--custom--v-spacing, 4vw)" aria-hidden="true" class="wp-block-spacer"></div>
		<!-- /wp:spacer -->

	</div>
</div>
<!-- /wp:cover -->
