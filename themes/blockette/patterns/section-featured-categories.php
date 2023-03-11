<?php
/**
 * Title: Section featured categories
 * Slug: blockette/section-featured-categories
 * Categories: blockette-sections, blockette-shop
 * Block Types: core/columns, core/group
 * Viewport Width: 1024
 *
 * @package blockette
 * @since 1.0.0
 */

// Stock product category images.
$cat_image_01 = get_theme_file_uri( 'assets/images/969555-pxhere.com.jpg' );
$cat_image_02 = get_theme_file_uri( 'assets/images/628707-pxhere.com.jpg' );
$cat_image_03 = get_theme_file_uri( 'assets/images/804917-pxhere.com.jpg' );
?>

<!-- wp:group {"align":"wide"} -->
<div class="wp-block-group alignwide">
	<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"0px","right":"0px","bottom":"0px","left":"0px"},"blockGap":"0px","margin":{"top":"0px","bottom":"0px"}}},"gradient":"vertical-primary-secondary"} -->
	<div class="wp-block-group alignfull has-vertical-primary-secondary-gradient-background has-background"
		style="margin-top:0px;margin-bottom:0px;padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px">
		<!-- wp:spacer {"height":"10px"} -->
		<div style="height:10px" aria-hidden="true" class="wp-block-spacer"></div>
		<!-- /wp:spacer -->
	</div>
	<!-- /wp:group -->

	<!-- wp:spacer {"height":"6vw"} -->
	<div style="height:6vw" aria-hidden="true" class="wp-block-spacer"></div>
	<!-- /wp:spacer -->

	<!-- wp:heading {"textAlign":"left","style":{"typography":{"fontStyle":"normal"}},"className":"blockette-animate blockette-move-down blockette-delay-1"} -->
	<h2 class="has-text-align-left blockette-animate blockette-move-down blockette-delay-1" style="font-style:normal">
		<mark style="background-color:rgba(0, 0, 0, 0)" class="has-inline-color has-primary-color">→ </mark><?php echo esc_html_x( 'Featured product categories', 'Sample text for the heading', 'blockette' ); ?>
	</h2>
	<!-- /wp:heading -->

	<!-- wp:spacer {"height":"2vw"} -->
	<div style="height:2vw" aria-hidden="true" class="wp-block-spacer"></div>
	<!-- /wp:spacer -->

	<!-- wp:columns {"align":"wide"} -->
	<div class="wp-block-columns alignwide">
		<!-- wp:column {"className":"blockette-animate blockette-move-down blockette-delay-1"} -->
		<div class="wp-block-column blockette-animate blockette-move-down blockette-delay-1">

			<!-- wp:cover {"url":"<?php echo esc_url( $cat_image_01 ); ?>","id":850,"isRepeated":true,"dimRatio":30,"minHeight":320,"minHeightUnit":"px","isDark":false,"className":"blockette-rounded-corners"} -->
			<div class="wp-block-cover is-light is-repeated blockette-rounded-corners"
				style="background-image:url(<?php echo esc_url( $cat_image_01 ); ?>);min-height:320px">
				<span aria-hidden="true"
					class="wp-block-cover__background has-background-dim-30 has-background-dim"></span>
				<div class="wp-block-cover__inner-container">
					<!-- wp:heading {"textAlign":"center","textColor":"white","fontSize":"x-large"} -->
					<h2 class="has-text-align-center has-white-color has-text-color has-x-large-font-size">
						<?php echo esc_html_x( 'Accessories', 'Sample text for the heading', 'blockette' ); ?>
					</h2>
					<!-- /wp:heading -->

					<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
					<div class="wp-block-buttons">
						<!-- wp:button -->
						<div class="wp-block-button">
							<a class="wp-block-button__link">
								<?php echo esc_html_x( 'Shop now', 'Sample text for the button', 'blockette' ); ?>
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

		<!-- wp:column {"className":"blockette-animate blockette-move-down blockette-delay-3"} -->
		<div class="wp-block-column blockette-animate blockette-move-down blockette-delay-3">

			<!-- wp:cover {"url":"<?php echo esc_url( $cat_image_02 ); ?>","id":850,"isRepeated":true,"dimRatio":30,"minHeight":420,"minHeightUnit":"px","isDark":false,"className":"blockette-rounded-corners"} -->
			<div class="wp-block-cover is-light is-repeated blockette-rounded-corners"
				style="background-image:url(<?php echo esc_url( $cat_image_02 ); ?>);min-height:420px">
				<span aria-hidden="true"
					class="wp-block-cover__background has-background-dim-30 has-background-dim"></span>
				<div class="wp-block-cover__inner-container">
					<!-- wp:heading {"textAlign":"center","textColor":"white","fontSize":"x-large"} -->
					<h2 class="has-text-align-center has-white-color has-text-color has-x-large-font-size">
						<?php echo esc_html_x( 'Clothing', 'Sample text for the heading', 'blockette' ); ?>
					</h2>
					<!-- /wp:heading -->

					<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
					<div class="wp-block-buttons">
						<!-- wp:button -->
						<div class="wp-block-button">
							<a class="wp-block-button__link">
								<?php echo esc_html_x( 'Shop now', 'Sample text for the button', 'blockette' ); ?>
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

		<!-- wp:column {"className":"blockette-animate blockette-move-down blockette-delay-5"} -->
		<div class="wp-block-column blockette-animate blockette-move-down blockette-delay-5">

			<!-- wp:cover {"url":"<?php echo esc_url( $cat_image_03 ); ?>","id":850,"dimRatio":30,"focalPoint":{"x":"0.50","y":"0.50"},"minHeight":370,"minHeightUnit":"px","isDark":false,"className":"blockette-rounded-corners"} -->
			<div class="wp-block-cover is-light blockette-rounded-corners" style="min-height:370px"><span
					aria-hidden="true"
					class="wp-block-cover__background has-background-dim-30 has-background-dim"></span><img
					class="wp-block-cover__image-background wp-image-850" alt=""
					src="<?php echo esc_url( $cat_image_03 ); ?>"
					style="object-position:50% 50%" data-object-fit="cover" data-object-position="50% 50%" />
				<div class="wp-block-cover__inner-container">
					<!-- wp:heading {"textAlign":"center","textColor":"white","fontSize":"x-large"} -->
					<h2 class="has-text-align-center has-white-color has-text-color has-x-large-font-size">
						<?php echo esc_html_x( 'Beauty', 'Sample text for the button', 'blockette' ); ?>
					</h2>
					<!-- /wp:heading -->

					<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
					<div class="wp-block-buttons">
						<!-- wp:button -->
						<div class="wp-block-button">
							<a class="wp-block-button__link">
								<?php echo esc_html_x( 'Shop now', 'Sample text for the button', 'blockette' ); ?>
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

	<?php if ( ! defined( 'WC_PLUGIN_FILE' ) ) { ?>
	<!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"0.95rem"},"color":{"text":"#aaaaaa"}}} -->
	<p class="has-text-align-center has-text-color" style="color:#aaaaaa;font-size:0.95rem">
			<?php echo esc_html_x( 'Above is a representation of Featured Product Category blocks, using Cover blocks.', 'Explanation for the missing WooCommerce plugin', 'blockette' ); ?><br>
			<?php echo esc_html_x( 'To replace Cover blocks with actual WooCommerce Featured Product Category blocks, please install and activate WooCommerce plugin.', 'Explanation for the missing WooCommerce plugin', 'blockette' ); ?>
	</p>
	<!-- /wp:paragraph -->
	<?php } ?>

	<!-- wp:spacer {"height":"6vw"} -->
	<div style="height:6vw" aria-hidden="true" class="wp-block-spacer"></div>
	<!-- /wp:spacer -->

	<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"0px","right":"0px","bottom":"0px","left":"0px"},"blockGap":"0px","margin":{"top":"0px","bottom":"0px"}}},"gradient":"vertical-primary-secondary"} -->
	<div class="wp-block-group alignfull has-vertical-primary-secondary-gradient-background has-background"
		style="margin-top:0px;margin-bottom:0px;padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px">
		<!-- wp:spacer {"height":"5px"} -->
		<div style="height:5px" aria-hidden="true" class="wp-block-spacer"></div>
		<!-- /wp:spacer -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
