<?php
/**
 * Title: Portfolio List
 * Slug: ambitio/portfolio-list
 * Categories: ambitio_portfolio
*/
?>

<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"4vw","right":"4vw","bottom":"4vw","left":"4vw"}}},"backgroundColor":"white","layout":{"contentSize":"800px","wideSize":"1200px"}} -->
<div class="wp-block-group alignfull has-white-background-color has-background" style="padding-top:4vw;padding-right:4vw;padding-bottom:4vw;padding-left:4vw">

	<!-- wp:media-text {"mediaType":"image","verticalAlignment":"center"} -->
	<div class="wp-block-media-text alignwide is-stacked-on-mobile is-vertically-aligned-center">

		<figure class="wp-block-media-text__media">
			<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/default-image.png" alt=""/>
		</figure>

		<div class="wp-block-media-text__content">

			<!-- wp:heading {"level":3} -->
			<h3><?php _e( 'Project One', 'ambitio' ); ?></h3>
			<!-- /wp:heading -->

			<!-- wp:paragraph -->
			<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis diss parturient.</p>
			<!-- /wp:paragraph -->

			<!-- wp:buttons -->
			<div class="wp-block-buttons">
				<!-- wp:button -->
				<div class="wp-block-button"><a class="wp-block-button__link"><?php _e( 'Learn more', 'ambitio' ); ?></a></div>
				<!-- /wp:button -->
			</div>
			<!-- /wp:buttons -->

		</div>

	</div>
	<!-- /wp:media-text -->

	<!-- wp:media-text {"mediaPosition":"right","mediaType":"image","verticalAlignment":"center"} -->
	<div class="wp-block-media-text alignwide has-media-on-the-right is-stacked-on-mobile is-vertically-aligned-center">

		<figure class="wp-block-media-text__media">
			<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/default-image.png" alt=""/>
		</figure>

		<div class="wp-block-media-text__content">

			<!-- wp:heading {"level":3} -->
			<h3><?php _e( 'Project Two', 'ambitio' ); ?></h3>
			<!-- /wp:heading -->

			<!-- wp:paragraph -->
			<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis diss parturient.</p>
			<!-- /wp:paragraph -->

			<!-- wp:buttons -->
			<div class="wp-block-buttons">
				<!-- wp:button -->
				<div class="wp-block-button"><a class="wp-block-button__link"><?php _e( 'Learn more', 'ambitio' ); ?></a></div>
				<!-- /wp:button -->
			</div>
			<!-- /wp:buttons -->

		</div>

	</div>
	<!-- /wp:media-text -->

	<!-- wp:media-text {"mediaType":"image","verticalAlignment":"center"} -->
	<div class="wp-block-media-text alignwide is-stacked-on-mobile is-vertically-aligned-center">

		<figure class="wp-block-media-text__media">
			<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/default-image.png" alt=""/>
		</figure>

		<div class="wp-block-media-text__content">

			<!-- wp:heading {"level":3} -->
			<h3><?php _e( 'Project Three', 'ambitio' ); ?></h3>
			<!-- /wp:heading -->

			<!-- wp:paragraph -->
			<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis diss parturient.</p>
			<!-- /wp:paragraph -->

			<!-- wp:buttons -->
			<div class="wp-block-buttons">
				<!-- wp:button -->
				<div class="wp-block-button"><a class="wp-block-button__link"><?php _e( 'Learn more', 'ambitio' ); ?></a></div>
				<!-- /wp:button -->
			</div>
			<!-- /wp:buttons -->

		</div>

	</div>
	<!-- /wp:media-text -->

</div>
<!-- /wp:group -->
