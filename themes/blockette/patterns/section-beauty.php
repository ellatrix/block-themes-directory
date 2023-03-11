<?php
/**
 * Title: Section beauty
 * Slug: blockette/section-beauty
 * Categories: blockette-sections, blockette-duotone
 * Block Types: core/group, core/cover, cover/columns
 * Viewport Width: 1024
 *
 * @package blockette
 * @since 1.0.0
 */

$image_01 = get_theme_file_uri( 'assets/images/834615-pxhere.com.jpg' );
?>

<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"0px","right":"0px","bottom":"0px","left":"0px"}}},"gradient":"vertical-background-secondary"} -->
<div class="wp-block-group alignwide has-vertical-background-secondary-gradient-background has-background"
	style="padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px">

	<!-- wp:spacer {"height":"var(--wp--custom--v-spacing, 4vw)"} -->
	<div style="height:var(--wp--custom--v-spacing, 4vw)" aria-hidden="true" class="wp-block-spacer"></div>
	<!-- /wp:spacer -->

	<!-- wp:columns {"align":"wide"} -->
	<div class="wp-block-columns alignwide">
		<!-- wp:column {"width":"60%","className":"blockette-animate blockette-move-right blockette-delay-1"} -->
		<div class="wp-block-column blockette-animate blockette-move-right blockette-delay-1" style="flex-basis:60%">
			<!-- wp:image {"align":"right","id":1201,"sizeSlug":"large","linkDestination":"none","className":"blockette-box-shadow-big blockette-rounded-corners"} -->
			<figure class="wp-block-image alignright size-large blockette-box-shadow-big blockette-rounded-corners">
				<img src="<?php echo esc_url( $image_01 ); ?>" alt="" class="wp-image-1201" />
			</figure>
			<!-- /wp:image -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column {"verticalAlignment":"center","width":"40%","style":{"spacing":{"padding":{"top":"2vw","right":"2vw","bottom":"2vw","left":"2vw"}}},"className":"blockette-animate blockette-move-left blockette-delay-3"} -->
		<div class="wp-block-column is-vertically-aligned-center blockette-animate blockette-move-left blockette-delay-3"
			style="padding-top:2vw;padding-right:2vw;padding-bottom:2vw;padding-left:2vw;flex-basis:40%">

			<!-- wp:paragraph -->
			<p><?php echo esc_html_x( 'We have', 'Sample text for the section', 'blockette' ); ?></p>
			<!-- /wp:paragraph -->

			<!-- wp:heading {"level":3} -->
			<h3><?php echo esc_html_x( 'Everything you need to stay beautiful', 'Sample text for the heading', 'blockette' ); ?>
			</h3>
			<!-- /wp:heading -->

			<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"left"}} -->
			<div class="wp-block-buttons">
				<!-- wp:button {"className":"is-style-outline"} -->
				<div class="wp-block-button is-style-outline"><a
						class="wp-block-button__link"><?php echo esc_html_x( 'Check out our Beauty products', 'Sample text for button', 'blockette' ); ?></a>
				</div>
				<!-- /wp:button -->
			</div>
			<!-- /wp:buttons -->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->

	<!-- wp:spacer {"height":"6vw"} -->
	<div style="height:6vw" aria-hidden="true" class="wp-block-spacer"></div>
	<!-- /wp:spacer -->
</div>
<!-- /wp:group -->
