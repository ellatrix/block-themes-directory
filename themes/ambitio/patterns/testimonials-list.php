<?php
/**
 * Title: Testimonials List
 * Slug: ambitio/testimonials-list
 * Categories: ambitio_testimonials
*/
?>

<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"4vw","right":"4vw","bottom":"4vw","left":"4vw"},"blockGap":"3vw"}},"backgroundColor":"white","layout":{"contentSize":"1200px","wideSize":"1200px"}} -->
<div class="wp-block-group alignfull has-white-background-color has-background" style="padding-top:4vw;padding-right:4vw;padding-bottom:4vw;padding-left:4vw">

	<!-- wp:columns {"style":{"spacing":{"blockGap":"2rem"}}} -->
	<div class="wp-block-columns">

		<!-- wp:column {"width":"40%"} -->
		<div class="wp-block-column" style="flex-basis:40%">

			<!-- wp:heading -->
			<h2><?php _e( 'What clients say', 'ambitio' ); ?></h2>
			<!-- /wp:heading -->

			<!-- wp:paragraph -->
			<p><?php _e( 'What customers think about us.', 'ambitio' ); ?></p>
			<!-- /wp:paragraph -->

		</div>
		<!-- /wp:column -->

		<!-- wp:column {"width":"60%"} -->
		<div class="wp-block-column" style="flex-basis:60%">

			<!-- wp:group {"style":{"spacing":{"blockGap":"2rem","padding":{"top":"2rem","right":"2rem","bottom":"2rem","left":"2rem"}},"border":{"width":"2px"}},"layout":{"type":"flex","allowOrientation":false,"flexWrap":"nowrap","verticalAlignment":"top"}} -->
			<div class="wp-block-group" style="border-width:2px;padding-top:2rem;padding-right:2rem;padding-bottom:2rem;padding-left:2rem">

				<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"is-style-rounded"} -->
				<figure class="wp-block-image size-full is-style-rounded">
					<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/default-avatar.png" alt=""/>
				</figure>
				<!-- /wp:image -->

				<!-- wp:group -->
				<div class="wp-block-group">

					<!-- wp:paragraph -->
					<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. </p>
					<!-- /wp:paragraph -->

					<!-- wp:paragraph -->
					<p>— John Doe</p>
					<!-- /wp:paragraph -->

				</div>
				<!-- /wp:group -->

			</div>
			<!-- /wp:group -->

			<!-- wp:group {"style":{"spacing":{"blockGap":"2rem","padding":{"top":"2rem","right":"2rem","bottom":"2rem","left":"2rem"}},"border":{"width":"2px"}},"layout":{"type":"flex","allowOrientation":false,"flexWrap":"nowrap","verticalAlignment":"top"}} -->
			<div class="wp-block-group" style="border-width:2px;padding-top:2rem;padding-right:2rem;padding-bottom:2rem;padding-left:2rem">

				<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"is-style-rounded"} -->
				<figure class="wp-block-image size-full is-style-rounded">
					<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/default-avatar.png" alt=""/>
				</figure>
				<!-- /wp:image -->

				<!-- wp:group -->
				<div class="wp-block-group">

					<!-- wp:paragraph -->
					<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. </p>
					<!-- /wp:paragraph -->

					<!-- wp:paragraph -->
					<p>— John Doe</p>
					<!-- /wp:paragraph -->

				</div>
				<!-- /wp:group -->

			</div>
			<!-- /wp:group -->

		</div>
		<!-- /wp:column -->

	</div>
	<!-- /wp:columns -->

</div>
<!-- /wp:group -->
