<?php
/**
 * Title: Big title hero
 * Slug: blockette/hero-big-title
 * Categories: blockette-hero, blockette-shop
 * Block Types: core/cover, core/group
 * Viewport Width: 1024
 *
 * @package blockette
 * @since 1.0.0
 */

$image = get_theme_file_uri( 'assets/images/834615-pxhere.com.jpg' );
?>

<!-- wp:cover {"url":"<?php echo esc_url( $image ); ?>","id":1201,"dimRatio":30,"overlayColor":"black","minHeight":30,"minHeightUnit":"vw","align":"full","style":{"color":{"duotone":["#2b1c25","#e07a5f"]}}} -->
<div class="wp-block-cover alignfull" style="min-height:30vw"><span aria-hidden="true"
		class="wp-block-cover__background has-black-background-color has-background-dim-30 has-background-dim"></span><img
		class="wp-block-cover__image-background wp-image-1201" alt=""
		src="<?php echo esc_url( $image ); ?>" data-object-fit="cover" />
	<div class="wp-block-cover__inner-container">

		<!-- wp:heading {"textAlign":"center","textColor":"white","className":"blockette-txt-shadow-big","fontSize":"enormous"} -->
		<h2 class="has-text-align-center blockette-txt-shadow-big has-white-color has-text-color has-enormous-font-size">
			<?php echo esc_html_x( 'Big sales!', 'Sample text for the hero heading', 'blockette' ); ?>
		</h2>
		<!-- /wp:heading -->


		<!-- wp:paragraph {"align":"center","textColor":"white"} -->
		<p class="has-text-align-center has-white-color has-text-color">
			<?php echo esc_html_x( 'starting from May 01 - June 01', 'Sample text for the hero paragraph', 'blockette' ); ?>
		</p>
		<!-- /wp:paragraph -->
	</div>
</div>
<!-- /wp:cover -->
