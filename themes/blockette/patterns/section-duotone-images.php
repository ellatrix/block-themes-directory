<?php
/**
 * Title: Duotone images section
 * Slug: blockette/section-duotone-images
 * Categories: blockette-sections, blockette-duotones
 * Block Types: core/group, core/columns
 * Viewport Width: 1024
 *
 * @package blockette
 * @since 1.0.0
 */

$image_01 = get_theme_file_uri( 'assets/images/1653509-pxhere.com.jpg' );
$image_02 = get_theme_file_uri( 'assets/images/123572-pxhere.com.jpg' );
$image_03 = get_theme_file_uri( 'assets/images/510074-pxhere.com.jpg' );
?>

<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"8vw","bottom":"8vw"}}},"backgroundColor":"secondary","layout":{"inherit":true}} -->
<div class="wp-block-group alignfull has-secondary-background-color has-background"
	style="padding-top:8vw;padding-bottom:8vw">
	<!-- wp:columns {"align":"wide","className":"is-style-default"} -->
	<div class="wp-block-columns alignwide is-style-default">
		<!-- wp:column {"width":"30%","className":"blockette-offset-right blockette-offset-top"} -->
		<div class="wp-block-column blockette-offset-right blockette-offset-top" style="flex-basis:30%">
			<!-- wp:image {"id":1350,"sizeSlug":"large","linkDestination":"none","style":{"color":{"duotone":["#2b1c25","#e07a5f"]}}} -->
			<figure class="wp-block-image size-large">
				<img src="<?php echo esc_url( $image_01 ); ?>" alt="" class="wp-image-1350" />
			</figure>
			<!-- /wp:image -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column {"verticalAlignment":"center","width":"40%","style":{"spacing":{"padding":{"top":"2vw","right":"2vw","bottom":"2vw","left":"2vw"}}},"backgroundColor":"background","className":"blockette-z-index-top blockette-box-shadow-big"} -->
		<div class="wp-block-column is-vertically-aligned-center blockette-z-index-top blockette-box-shadow-big has-background-background-color has-background"
			style="padding-top:2vw;padding-right:2vw;padding-bottom:2vw;padding-left:2vw;flex-basis:40%">
			<!-- wp:heading {"textAlign":"center","className":"is-style-blockette-gradient-1"} -->
			<h2 class="has-text-align-center is-style-blockette-gradient-1">
				<?php echo esc_html_x( 'The duality in doutones', 'Sample text for the title', 'blockette' ); ?>
			</h2>
			<!-- /wp:heading -->

			<!-- wp:image {"id":1185,"sizeSlug":"large","linkDestination":"none","style":{"color":{"duotone":["#e07a5f","#F9F9F9"]}}} -->
			<figure class="wp-block-image size-large">
				<img src="<?php echo esc_url( $image_02 ); ?>" alt="" class="wp-image-1185" />
			</figure>
			<!-- /wp:image -->

			<!-- wp:quote -->
			<blockquote class="wp-block-quote">
				<p>
					<?php echo esc_html_x( 'The duotone image are looking so cool. Especially in combination with offset columns.', 'Sample text for the quote paragaph', 'blockette' ); ?>
				</p>
				<cite>
					<?php echo esc_html_x( 'The Micemaker', 'Sample text for the quote cite', 'blockette' ); ?>
				</cite>
			</blockquote>
			<!-- /wp:quote -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column {"width":"30%","className":"blockette-offset-left blockette-offset-bottom"} -->
		<div class="wp-block-column blockette-offset-left blockette-offset-bottom" style="flex-basis:30%">
			<!-- wp:image {"id":1202,"sizeSlug":"large","linkDestination":"none","style":{"color":{"duotone":["#2b1c25","#f2cc8f"]}}} -->
			<figure class="wp-block-image size-large">
				<img src="<?php echo esc_url( $image_03 ); ?>" alt="" class="wp-image-1202" />
			</figure>
			<!-- /wp:image -->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->
</div>
<!-- /wp:group -->
