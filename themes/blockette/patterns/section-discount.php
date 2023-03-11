<?php
/**
 * Title: Landing discount section
 * Slug: blockette/section-discount
 * Categories: blockette-sections
 * Block Types: core/group, core/cover
 * Viewport Width: 1024
 *
 * @package blockette
 * @since 1.0.0
 */

$image = get_theme_file_uri( 'assets/images/510074-pxhere.com.jpg' );
?>

<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"0px","right":"0px","bottom":"0px","left":"0px"},"blockGap":"0px","margin":{"top":"0px","bottom":"0px"}}},"layout":{"inherit":true}} -->
<div class="wp-block-group alignfull"
	style="margin-top:0px;margin-bottom:0px;padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px">

	<!-- wp:spacer {"height":"8vw"} -->
	<div style="height:8vw" aria-hidden="true" class="wp-block-spacer"></div>
	<!-- /wp:spacer -->

	<!-- wp:cover {"url":"<?php echo esc_url( $image ); ?>","id":1202,"dimRatio":50,"focalPoint":{"x":"0.72","y":"0.25"},"minHeight":35,"minHeightUnit":"vh","contentPosition":"bottom center","isDark":false,"align":"full","style":{"spacing":{"padding":{"top":"0px","right":"0px","bottom":"0px","left":"0px"}}}} -->
	<div class="wp-block-cover alignfull is-light has-custom-content-position is-position-bottom-center"
		style="padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px;min-height:35vh"><span
			aria-hidden="true" class="wp-block-cover__background has-background-dim"></span><img
			class="wp-block-cover__image-background wp-image-1202" alt=""
			src="<?php echo esc_url( $image ); ?>"
			style="object-position:72% 25%" data-object-fit="cover" data-object-position="72% 25%" />
		<div class="wp-block-cover__inner-container">
			<!-- wp:group {"className":"blockette-z-index-top","layout":{"inherit":true}} -->
			<div class="wp-block-group blockette-z-index-top">

				<!-- wp:columns -->
				<div class="wp-block-columns">
					<!-- wp:column {"width":"50%","className":"blockette-offset-bottom"} -->
					<div class="wp-block-column blockette-offset-bottom" style="flex-basis:50%">
						<!-- wp:spacer {"height":"4vw"} -->
						<div style="height:4vw" aria-hidden="true" class="wp-block-spacer"></div>
						<!-- /wp:spacer -->

						<!-- wp:group {"style":{"spacing":{"padding":{"top":"2vw","right":"2vw","bottom":"2vw","left":"2vw"}},"border":{"width":"0px","style":"none"}},"backgroundColor":"primary","className":"blockette-animate blockette-move-right blockette-box-shadow-big blockette-rounded-corners","layout":{"type":"flex","orientation":"vertical","justifyContent":"center"}} -->
						<div class="wp-block-group blockette-animate blockette-move-right blockette-box-shadow-big blockette-rounded-corners has-primary-background-color has-background"
							style="border-style:none;border-width:0px;padding-top:2vw;padding-right:2vw;padding-bottom:2vw;padding-left:2vw">
							<!-- wp:paragraph {"align":"center","textColor":"white","className":"blockette-animate blockette-move-right blockette-delay-1"} -->
							<p class="has-text-align-center blockette-animate blockette-move-right blockette-delay-1 has-white-color has-text-color">
								<?php echo esc_html_x( 'Spring/Summer Dresses', 'Sample text for the paragraph', 'blockette' ); ?>
							</p>
							<!-- /wp:paragraph -->

							<!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"300"}},"textColor":"secondary","className":"blockette-txt-shadow-big blockette-animate blockette-move-left blockette-delay-3","fontSize":"enormous"} -->
							<p class="blockette-txt-shadow-big blockette-animate blockette-move-left blockette-delay-3 has-secondary-color has-text-color has-enormous-font-size" style="font-style:normal;font-weight:300">
								<?php echo esc_html_x( '10%', 'Sample text for the paragraph', 'blockette' ); ?>
							</p>
							<!-- /wp:paragraph -->

							<!-- wp:paragraph {"textColor":"secondary","className":"blockette-animate blockette-move-left blockette-delay-","fontSize":"medium"} -->
							<p class="blockette-animate blockette-move-left blockette-delay- has-secondary-color has-text-color has-medium-font-size">
								→ <?php echo esc_html_x( 'Browse dresses', 'Sample text for the paragraph', 'blockette' ); ?>
							</p>
							<!-- /wp:paragraph -->
						</div>
						<!-- /wp:group -->
					</div>
					<!-- /wp:column -->

					<!-- wp:column {"width":"50%","className":"blockette-offset-top"} -->
					<div class="wp-block-column blockette-offset-top" style="flex-basis:50%">
						<!-- wp:group {"style":{"spacing":{"padding":{"top":"2vw","right":"2vw","bottom":"2vw","left":"2vw"}},"border":{"width":"0px","style":"none"}},"backgroundColor":"secondary","className":"blockette-animate blockette-move-right blockette-box-shadow-big blockette-rounded-corners","layout":{"type":"flex","orientation":"vertical","justifyContent":"center"}} -->
						<div class="wp-block-group blockette-animate blockette-move-right blockette-box-shadow-big blockette-rounded-corners has-secondary-background-color has-background"
							style="border-style:none;border-width:0px;padding-top:2vw;padding-right:2vw;padding-bottom:2vw;padding-left:2vw">
							<!-- wp:paragraph {"align":"center","textColor":"primary","className":"blockette-animate blockette-move-right blockette-delay-1"} -->
							<p class="has-text-align-center blockette-animate blockette-move-right blockette-delay-1 has-primary-color has-text-color">
								<?php echo esc_html_x( 'All natural and eco-friendly products', 'Sample text for the paragraph', 'blockette' ); ?>
							</p>
							<!-- /wp:paragraph -->

							<!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"300"}},"textColor":"foreground","className":"blockette-txt-shadow-big blockette-animate blockette-move-left blockette-delay-3","fontSize":"enormous"} -->
							<p class="blockette-txt-shadow-big blockette-animate blockette-move-left blockette-delay-3 has-foreground-color has-text-color has-enormous-font-size" style="font-style:normal;font-weight:300">
								<?php echo esc_html_x( '15%', 'Sample text for the paragraph', 'blockette' ); ?>
							</p>
							<!-- /wp:paragraph -->

							<!-- wp:paragraph {"className":"blockette-animate blockette-move-left blockette-delay-","fontSize":"medium"} -->
							<p class="blockette-animate blockette-move-left blockette-delay- has-medium-font-size"> →
								<?php echo esc_html_x( 'Beauty products', 'Sample text for the paragraph', 'blockette' ); ?>
							</p>
							<!-- /wp:paragraph -->
						</div>
						<!-- /wp:group -->

						<!-- wp:spacer {"height":"4vw"} -->
						<div style="height:4vw" aria-hidden="true" class="wp-block-spacer"></div>
						<!-- /wp:spacer -->
					</div>
					<!-- /wp:column -->
				</div>
				<!-- /wp:columns -->
			</div>
			<!-- /wp:group -->
		</div>
	</div>
	<!-- /wp:cover -->

	<!-- wp:spacer {"height":"12vw"} -->
	<div style="height:12vw" aria-hidden="true" class="wp-block-spacer"></div>
	<!-- /wp:spacer -->
</div>
<!-- /wp:group -->
