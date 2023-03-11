<?php
/**
 * Title: Hero Cover
 * Slug: lawson/hero-cover
 * Categories: lawson_hero
*/
?>

<!-- wp:cover {"url":"http://localhost/wp-content/themes/lawson/assets/img/default-image.png","isRepeated":true,"dimRatio":80,"contentPosition":"center center","align":"wide"} -->
<div class="wp-block-cover alignwide is-repeated" style="background-image:url(http://localhost/wp-content/themes/lawson/assets/img/default-image.png)">
	<span aria-hidden="true" class="wp-block-cover__background has-background-dim-80 has-background-dim"></span>

	<div class="wp-block-cover__inner-container">

	<!-- wp:group {"style":{"spacing":{"padding":{"top":"2rem","right":"2rem","bottom":"2rem","left":"2rem"}}},"textColor":"white"} -->
	<div class="wp-block-group has-white-color has-text-color" style="padding-top:2rem;padding-right:2rem;padding-bottom:2rem;padding-left:2rem">

		<!-- wp:paragraph -->
		<p><?php _e( 'Add a subtitle here', 'lawson' ); ?></p>
		<!-- /wp:paragraph -->

		<!-- wp:heading {"level":1,"className":"is-style-underlined-heading"} -->
		<h1 class="is-style-underlined-heading"><?php _e( 'Hero Headline', 'lawson' ); ?></h1>
		<!-- /wp:heading -->

		<!-- wp:paragraph {"fontSize":"medium"} -->
		<p class="has-medium-font-size">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis.</p>
		<!-- /wp:paragraph -->

		<!-- wp:buttons -->
		<div class="wp-block-buttons">
			<!-- wp:button -->
			<div class="wp-block-button"><a class="wp-block-button__link"><?php _e( 'Join now', 'lawson' ); ?></a></div>
			<!-- /wp:button -->

			<!-- wp:button -->
			<div class="wp-block-button"><a class="wp-block-button__link"><?php _e( 'Learn more', 'lawson' ); ?></a></div>
			<!-- /wp:button -->
		</div>
		<!-- /wp:buttons -->

	</div>
	<!-- /wp:group -->

	</div>

</div>
<!-- /wp:cover -->
