<?php
/**
 * Pattern WooCommerce featured categories

 * @package blockette
 * @since 1.0.0
 */

// Stock product category images.
$cat_image_01 = get_theme_file_uri( 'assets/images/969555-pxhere.com.jpg' );
$cat_image_02 = get_theme_file_uri( 'assets/images/628707-pxhere.com.jpg' );
$cat_image_03 = get_theme_file_uri( 'assets/images/804917-pxhere.com.jpg' );

$prod_cats = array();
// Get WooCommerce product category term IDs.
$terms = get_terms(
	array(
		'taxonomy'   => 'product_cat',
		'hide_empty' => true,
		'fields'     => 'ids',
		'orderby'    => 'rand',
		'number'     => 10,
	)
);

// Take 3 random product categories.
if ( ! is_wp_error( $terms ) ) {
	shuffle( $terms );
	$prod_cats = array_slice( $terms, 0, 3 );
}

$missing = '<!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"0.95rem"},"color":{"text":"#aaaaaa"}}} --><p class="has-text-align-center has-text-color" style="color:#aaaaaa;font-size:0.95rem">' . esc_html_x( 'No product category found, "Featured category block" removed. Please add some product categories, and use the "Featured category block" to add category.', 'Explanation for missing product categories', 'blockette' ) . '</p><!-- /wp:paragraph -->';

return array(
	'title'         => __( 'WooCommerce featured categories', 'blockette' ),
	'categories'    => array( 'blockette-shop', 'woo-commerce' ),
	'blockTypes'    => array( 'core/columns' ),
	'viewportWidth' => 1024,
	'content'       => '<!-- wp:group {"align":"wide"} -->
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
		<mark style="background-color:rgba(0, 0, 0, 0)" class="has-inline-color has-primary-color"> → </mark>' . esc_html_x( 'Featured product categories', 'Sample text for the heading', 'blockette' ) . '
	</h2>
	<!-- /wp:heading -->

	<!-- wp:spacer {"height":"2vw"} -->
	<div style="height:2vw" aria-hidden="true" class="wp-block-spacer"></div>
	<!-- /wp:spacer -->

	<!-- wp:columns {"align":"wide"} -->
	<div class="wp-block-columns alignwide">
		<!-- wp:column {"className":"blockette-animate blockette-move-down blockette-delay-1"} -->
		<div class="wp-block-column blockette-animate blockette-move-down blockette-delay-1">' .

			( ( ! empty( $prod_cats ) && isset( $prod_cats[0] ) ) ? '
			<!-- wp:woocommerce/featured-category {"dimRatio":30,"editMode":false,"mediaSrc":"' . esc_url( $cat_image_01 ) . '","mediaId":850,"minHeight":320,"categoryId":' . (int) $prod_cats[0] . ',"className":"blockette-rounded-corners"} -->
			<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
			<div class="wp-block-buttons">
				<!-- wp:button -->
				<div class="wp-block-button">
					<a class="wp-block-button__link" href="">
						' . esc_html_x( 'Shop now', 'Sample text for the button', 'blockette' ) . '
					</a>
				</div>
				<!-- /wp:button -->
			</div>
			<!-- /wp:buttons -->
			<!-- /wp:woocommerce/featured-category -->

			' : wp_kses_post( $missing ) ) . '

		</div>
		<!-- /wp:column -->

		<!-- wp:column {"className":"blockette-animate blockette-move-down blockette-delay-3"} -->
		<div class="wp-block-column blockette-animate blockette-move-down blockette-delay-3">' .

			( ( ! empty( $prod_cats ) && isset( $prod_cats[0] ) ) ? '
			<!-- wp:woocommerce/featured-category {"dimRatio":30,"editMode":false,"mediaId":841,"mediaSrc":"' . esc_url( $cat_image_02 ) . '","minHeight":420,"categoryId":' . (int) $prod_cats[1] . ',"className":"blockette-rounded-corners"} -->
			<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
			<div class="wp-block-buttons">
				<!-- wp:button -->
				<div class="wp-block-button">
					<a class="wp-block-button__link" href="">' .
						esc_html_x( 'Shop now', 'Sample text for the button', 'blockette' ) . '
					</a>
				</div>
				<!-- /wp:button -->
			</div>
			<!-- /wp:buttons -->
			<!-- /wp:woocommerce/featured-category -->

			' : wp_kses_post( $missing ) ) . '

		</div>
		<!-- /wp:column -->

		<!-- wp:column {"className":"blockette-animate blockette-move-down blockette-delay-5"} -->
		<div class="wp-block-column blockette-animate blockette-move-down blockette-delay-5">' .

			( ( ! empty( $prod_cats ) && isset( $prod_cats[0] ) ) ? '
			<!-- wp:woocommerce/featured-category {"dimRatio":30,"editMode":false,"imageFit":"cover","mediaId":949,"mediaSrc":"' . esc_url( $cat_image_03 ) . '","minHeight":370,"categoryId":' . (int) $prod_cats[2] . ',"className":"blockette-rounded-corners"} -->
			<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
			<div class="wp-block-buttons">
				<!-- wp:button -->
				<div class="wp-block-button">
					<a class="wp-block-button__link" href="">' .
						esc_html_x( 'Shop now', 'Sample text for the button', 'blockette' ) . '
					</a>
				</div>
				<!-- /wp:button -->
			</div>
			<!-- /wp:buttons -->
			<!-- /wp:woocommerce/featured-category -->

			' : wp_kses_post( $missing ) ) . '

		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->

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
<!-- /wp:group -->',
);
