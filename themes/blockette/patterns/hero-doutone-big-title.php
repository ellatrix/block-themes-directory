<?php
/**
 * Title: Hero duotone image and big title
 * Slug: blockette/hero-doutone-big-title
 * Categories: blockette-featured, blockette-duotones, blockette-hero
 * Block Types: core/cover, core/group
 * Viewport Width: 1024
 *
 * @package blockette
 * @since 1.0.0
 */

$image = get_theme_file_uri( 'assets/images/123572-pxhere.com.jpg' );
?>

<!-- wp:cover {"url":"<?php echo esc_url( $image ); ?>","id":1185,"dimRatio":0,"focalPoint":{"x":"0.50","y":"0.50"},"minHeight":30,"minHeightUnit":"vw","contentPosition":"center center","isDark":false,"align":"wide","style":{"color":{"duotone":["#e07a5f","#F9F9F9"]},"spacing":{"padding":{"top":"2vw","right":"2vw","bottom":"2vw","left":"2vw"}}}} -->
<div class="wp-block-cover alignwide is-light"
	style="padding-top:2vw;padding-right:2vw;padding-bottom:2vw;padding-left:2vw;min-height:30vw"><span
		aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim"></span><img
		class="wp-block-cover__image-background wp-image-1185" alt=""
		src="<?php echo esc_url( $image ); ?>"
		style="object-position:50% 50%" data-object-fit="cover" data-object-position="50% 50%" />
	<div class="wp-block-cover__inner-container">
		<!-- wp:spacer {"height":"4vw"} -->
		<div style="height:4vw" aria-hidden="true" class="wp-block-spacer"></div>
		<!-- /wp:spacer -->

		<!-- wp:heading {"textAlign":"center","level":1,"align":"wide","style":{"typography":{"lineHeight":"1.1"}},"textColor":"background","className":"blockette-animate blockette-move-down is-style-blockette-gradient-3","fontSize":"enormous"} -->
		<h1 class="alignwide has-text-align-center blockette-animate blockette-move-down is-style-blockette-gradient-3 has-background-color has-text-color has-enormous-font-size"
			style="line-height:1.1"><?php echo esc_html_x( 'Make Up / Your Mind', 'Sample text for the hero title', 'blockette' ); ?></h1>
		<!-- /wp:heading -->

		<!-- wp:group {"style":{"spacing":{"padding":{"top":"0vw","right":"0vw","bottom":"4vw","left":"0vw"}}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"center"}} -->
		<div class="wp-block-group" style="padding-top:0vw;padding-right:0vw;padding-bottom:4vw;padding-left:0vw">
			<!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"1.5rem","lineHeight":1.4}},"backgroundColor":"background","textColor":"foreground","className":"blockette-box-shadow-big blockette-rounded-corners blockette-animate blockette-move-down blockette-delay-1"} -->
			<p class="has-text-align-center blockette-box-shadow-big blockette-rounded-corners blockette-animate blockette-move-down blockette-delay-1 has-foreground-color has-background-background-color has-text-color has-background" style="font-size:1.5rem;line-height:1.4">
				<?php echo esc_html_x( 'There are so many things to choose from, so much to learn and discover', 'Sample text for the hero paragraph', 'blockette' ); ?>
			</p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->

		<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
		<div class="wp-block-buttons">
			<!-- wp:button {"className":"blockette-animate blockette-move-down blockette-delay-3"} -->
			<div class="wp-block-button blockette-animate blockette-move-down blockette-delay-3">
				<a class="wp-block-button__link">
					<?php echo esc_html_x( 'Browse clothes', 'Sample text for the button', 'blockette' ); ?>
				</a>
			</div>
			<!-- /wp:button -->

			<!-- wp:button {"backgroundColor":"background","className":"is-style-outline blockette-animate blockette-move-down blockette-delay-3"} -->
			<div class="wp-block-button is-style-outline blockette-animate blockette-move-down blockette-delay-3">
				<a class="wp-block-button__link has-background-background-color has-background">
					<?php echo esc_html_x( 'Browse accessories', 'Sample text for the button', 'blockette' ); ?>
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
