<?php
/**
 * Title: Portfolio List
 * Slug: lawson/portfolio-list
 * Categories: lawson_portfolio
*/
?>

<!-- wp:group {"style":{"spacing":{"margin":{"bottom":"4vw"}}}} -->
<div class="wp-block-group" style="margin-bottom:4vw">

	<!-- wp:media-text {"mediaType":"image","verticalAlignment":"center"} -->
	<div class="wp-block-media-text is-stacked-on-mobile is-vertically-aligned-center">

		<figure class="wp-block-media-text__media">
			<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/default-image.png" alt=""/>
		</figure>

		<div class="wp-block-media-text__content">

			<!-- wp:heading -->
			<h2><?php _e( 'Project One', 'lawson' ); ?></h2>
			<!-- /wp:heading -->

			<!-- wp:paragraph -->
			<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor.</p>
			<!-- /wp:paragraph -->

			<!-- wp:buttons -->
			<div class="wp-block-buttons">
				<!-- wp:button -->
				<div class="wp-block-button"><a class="wp-block-button__link"><?php _e( 'Learn more', 'lawson' ); ?></a></div>
				<!-- /wp:button -->
			</div>
			<!-- /wp:buttons -->

		</div>

	</div>
	<!-- /wp:media-text -->

	<!-- wp:media-text {"mediaPosition":"right","mediaType":"image","verticalAlignment":"center"} -->
	<div class="wp-block-media-text has-media-on-the-right is-stacked-on-mobile is-vertically-aligned-center">

		<figure class="wp-block-media-text__media">
			<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/default-image.png" alt=""/>
		</figure>

		<div class="wp-block-media-text__content">

			<!-- wp:heading -->
			<h2><?php _e( 'Project Two', 'lawson' ); ?></h2>
			<!-- /wp:heading -->

			<!-- wp:paragraph -->
			<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor.</p>
			<!-- /wp:paragraph -->

			<!-- wp:buttons -->
			<div class="wp-block-buttons">
				<!-- wp:button -->
				<div class="wp-block-button"><a class="wp-block-button__link"><?php _e( 'Learn more', 'lawson' ); ?></a></div>
				<!-- /wp:button -->
			</div>
			<!-- /wp:buttons -->

		</div>

	</div>
	<!-- /wp:media-text -->

	<!-- wp:media-text {"mediaType":"image","verticalAlignment":"center"} -->
	<div class="wp-block-media-text is-stacked-on-mobile is-vertically-aligned-center">

		<figure class="wp-block-media-text__media">
			<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/default-image.png" alt=""/>
		</figure>

		<div class="wp-block-media-text__content">

			<!-- wp:heading -->
			<h2><?php _e( 'Project Three', 'lawson' ); ?></h2>
			<!-- /wp:heading -->

			<!-- wp:paragraph -->
			<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor.</p>
			<!-- /wp:paragraph -->

			<!-- wp:buttons -->
			<div class="wp-block-buttons">
				<!-- wp:button -->
				<div class="wp-block-button"><a class="wp-block-button__link"><?php _e( 'Learn more', 'lawson' ); ?></a></div>
				<!-- /wp:button -->
			</div>
			<!-- /wp:buttons -->

		</div>

	</div>
	<!-- /wp:media-text -->

</div>
<!-- /wp:group -->
