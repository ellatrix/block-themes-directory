<?php
/**
 * Title: Hero Cover
 * Slug: ambitio/hero-cover
 * Categories: ambitio_hero
*/
?>

<!-- wp:cover {"url":"http://localhost/wp-content/themes/ambitio/assets/img/default-image.png","isRepeated":true,"dimRatio":80,"contentPosition":"center center","align":"full"} -->
<div class="wp-block-cover alignfull is-repeated" style="background-image:url(http://localhost/wp-content/themes/ambitio/assets/img/default-image.png)">
	<span aria-hidden="true" class="wp-block-cover__background has-background-dim-80 has-background-dim"></span>

	<div class="wp-block-cover__inner-container">

	<!-- wp:group {"style":{"spacing":{"padding":{"top":"4vw","right":"4vw","bottom":"4vw","left":"4vw"}}},"textColor":"white","layout":{"type":"default","contentSize":"1200px"}} -->
	<div class="wp-block-group has-white-color has-text-color" style="padding-top:4vw;padding-right:4vw;padding-bottom:4vw;padding-left:4vw">

		<!-- wp:paragraph -->
		<p><?php _e( 'Add a subtitle here', 'ambitio' ); ?></p>
		<!-- /wp:paragraph -->

		<!-- wp:heading {"level":1} -->
		<h1><?php _e( 'Hero Headline', 'ambitio' ); ?></h1>
		<!-- /wp:heading -->

		<!-- wp:paragraph {"fontSize":"medium"} -->
		<p class="has-medium-font-size">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis.</p>
		<!-- /wp:paragraph -->

		<!-- wp:buttons -->
		<div class="wp-block-buttons">
			<!-- wp:button {"textColor":"white","className":"is-style-outline"} -->
			<div class="wp-block-button is-style-outline"><a class="wp-block-button__link has-white-color has-text-color"><?php _e( 'Get started', 'ambitio' ); ?></a></div>
			<!-- /wp:button -->

			<!-- wp:button {"textColor":"white","className":"is-style-outline"} -->
			<div class="wp-block-button is-style-outline"><a class="wp-block-button__link has-white-color has-text-color"><?php _e( 'Learn more', 'ambitio' ); ?></a></div>
			<!-- /wp:button -->
		</div>
		<!-- /wp:buttons -->

	</div>
	<!-- /wp:group -->

	</div>

</div>
<!-- /wp:cover -->
