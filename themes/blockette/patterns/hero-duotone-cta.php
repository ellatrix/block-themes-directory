<?php
/**
 * Title: Duotone hero call to action
 * Slug: blockette/doutone-hero-cta
 * Categories: blockette-duotones, blockette-hero
 * Block Types: core/cover, core/group
 * Viewport Width: 1024
 *
 * @package blockette
 * @since 1.0.0
 */

$image = get_theme_file_uri( 'assets/images/510074-pxhere.com.jpg' );
?>

<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"0px","right":"0px","bottom":"0px","left":"0px"},"blockGap":"0px","margin":{"top":"0px","bottom":"0px"}}}} -->
<div class="wp-block-group alignfull" id="separator-rainbow"
	style="margin-top:0px;margin-bottom:0px;padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px">
	<!-- wp:cover {"url":"<?php echo esc_url( $image ); ?>","id":1202,"dimRatio":0,"focalPoint":{"x":"0.51","y":"0.42"},"minHeight":50,"minHeightUnit":"vh","isDark":false,"align":"full","style":{"color":{"duotone":["#2b1c25","#f2cc8f"]},"spacing":{"padding":{"top":"4vw","right":"4vw","bottom":"4vw","left":"4vw"}}}} -->
	<div class="wp-block-cover alignfull is-light"
		style="padding-top:4vw;padding-right:4vw;padding-bottom:4vw;padding-left:4vw;min-height:50vh"><span
			aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim"></span><img
			class="wp-block-cover__image-background wp-image-1202" alt=""
			src="<?php echo esc_url( $image ); ?>"
			style="object-position:51% 42%" data-object-fit="cover" data-object-position="51% 42%" />
		<div class="wp-block-cover__inner-container">
			<!-- wp:columns {"verticalAlignment":null} -->
			<div class="wp-block-columns">
				<!-- wp:column {"verticalAlignment":"center","width":"60%"} -->
				<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:60%">
					<!-- wp:heading {"textColor":"white","className":"blockette-animate blockette-move-right blockette-delay-1 is-style-blockette-text-shadow","fontSize":"x-large"} -->
					<h2 class="blockette-animate blockette-move-right blockette-delay-1 is-style-blockette-text-shadow has-white-color has-text-color has-x-large-font-size">
						<?php echo esc_html_x( 'Fashionable accessories for every occasion', 'Sample text for the heading', 'blockette' ); ?>
					</h2>
					<!-- /wp:heading -->
				</div>
				<!-- /wp:column -->

				<!-- wp:column {"verticalAlignment":"center","width":"40%"} -->
				<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:40%">
					<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"},"style":{"spacing":{"margin":{"top":"35px"},"blockGap":"20px"}}} -->
					<div class="wp-block-buttons" style="margin-top:35px">
						<!-- wp:button {"backgroundColor":"background","className":"is-style-outline","fontSize":"small"} -->
						<div class="wp-block-button has-custom-font-size is-style-outline has-small-font-size">
							<a class="wp-block-button__link has-background-background-color has-background">
								<?php echo esc_html_x( 'Browse Accessories', 'Sample text for the button', 'blockette' ); ?>
							</a>
						</div>
						<!-- /wp:button -->
					</div>
					<!-- /wp:buttons -->
				</div>
				<!-- /wp:column -->
			</div>
			<!-- /wp:columns -->
		</div>
	</div>
	<!-- /wp:cover -->
</div>
<!-- /wp:group -->
