<?php
/**
 * Title: Landing page fashion hero
 * Slug: blockette/hero-fashion
 * Categories: blockette-hero, blockette-featured
 * Block Types: core/cover
 * Viewport Width: 1024
 *
 * @package blockette
 * @since 1.0.0
 */

$cover_image_url = get_theme_file_uri( 'assets/images/123572-pxhere.com.jpg' );
?>

<!-- wp:cover {"url":"<?php echo esc_url( $cover_image_url ); ?>","id":841,"hasParallax":true,"dimRatio":540,"minHeight":50,"minHeightUnit":"vh","contentPosition":"center center","align":"full"} -->
<div class="wp-block-cover alignfull has-parallax" style="background-image:url(<?php echo esc_url( $cover_image_url ); ?>);min-height:50vh">

	<span aria-hidden="true" class="wp-block-cover__background has-background-dim-540 has-background-dim"></span>

	<div class="wp-block-cover__inner-container">
	
		<!-- wp:heading {"textAlign":"center","style":{"typography":{"fontStyle":"normal","letterSpacing":"-0.03em","lineHeight":"1.2"},"spacing":{"margin":{"bottom":"10px"}}},"textColor":"white","className":"blockette-animate blockette-move-down","fontSize":"big"} -->
		<h2 class="has-text-align-center blockette-animate blockette-move-down has-white-color has-text-color has-big-font-size" style="font-style:normal;line-height:1.2;letter-spacing:-0.03em;margin-bottom:10px">
			<?php echo esc_html_x( 'Blockette Store for Apparel', 'Sample text for the heading', 'blockette' ); ?>
		</h2>
		<!-- /wp:heading -->

		<!-- wp:paragraph {"align":"center","textColor":"white","className":"blockette-animate blockette-move-down blockette-delay-1","fontSize":"medium"} -->
		<p class="has-text-align-center blockette-animate blockette-move-down blockette-delay-1 has-white-color has-text-color has-medium-font-size">
			<?php echo esc_html_x( 'Browse our store for newest collection', 'Sample text for the section', 'blockette' ); ?>
		</p>
		<!-- /wp:paragraph -->

		<!-- wp:spacer {"height":"1vw"} -->
		<div style="height:1vw" aria-hidden="true" class="wp-block-spacer"></div>
		<!-- /wp:spacer -->

		<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
		<div class="wp-block-buttons">
			<!-- wp:button {"className":"blockette-animate blockette-move-right blockette-delay-5"} -->
			<div class="wp-block-button blockette-animate blockette-move-right blockette-delay-5">
				<a class="wp-block-button__link">
					<?php echo esc_html_x( 'Browse Women', 'Sample text for the button', 'blockette' ); ?>
				</a>
			</div>
			<!-- /wp:button -->

			<!-- wp:button {"className":"blockette-animate blockette-move-left blockette-delay-7"} -->
			<div class="wp-block-button blockette-animate blockette-move-left blockette-delay-7">
				<a class="wp-block-button__link">
					<?php echo esc_html_x( 'Browse Men', 'Sample text for the button', 'blockette' ); ?>
				</a>
			</div>
			<!-- /wp:button -->
		</div>
		<!-- /wp:buttons -->

		<!-- wp:spacer {"height":"calc(var(--wp--custom--v-spacing, 4vw) *3)"} -->
		<div style="height:calc(var(--wp--custom--v-spacing, 4vw) *3)" aria-hidden="true" class="wp-block-spacer"></div>
		<!-- /wp:spacer -->

	</div>
</div>
<!-- /wp:cover -->
