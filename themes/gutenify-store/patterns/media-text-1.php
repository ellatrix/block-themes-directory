<?php
 /**
  * Title: Media Text One
  * Slug: gutenify-store/media-text-1
  * Categories: gutenify-store
  */
?>
<!-- wp:group {"style":{"spacing":{"padding":{"top":"80px","bottom":"80px"}}},"layout":{"inherit":true}} -->
<div class="wp-block-group" style="padding-top:80px;padding-bottom:80px">
	<!-- wp:columns {"verticalAlignment":null,"align":"wide"} -->
	<div class="wp-block-columns alignwide">
			<!-- wp:column -->
			<div class="wp-block-column">
					<!-- wp:image { "sizeSlug":"full","linkDestination":"none"} -->
					<figure class="wp-block-image size-full"><img
									src="<?php echo esc_url( get_template_directory_uri() );?>/images/info.png"
									alt="" class="wp-image-3489" /></figure>
					<!-- /wp:image -->
			</div>
			<!-- /wp:column -->

			<!-- wp:column {"verticalAlignment":"center","style":{"spacing":{"padding":{"top":"40px","right":"40px","bottom":"40px","left":"40px"}}}} -->
			<div class="wp-block-column is-vertically-aligned-center"
					style="padding-top:40px;padding-right:40px;padding-bottom:40px;padding-left:40px">
					<!-- wp:group {"align":"wide","layout":{"inherit":true}} -->
					<div class="wp-block-group alignwide">
							<!-- wp:paragraph {"fontSize":"small"} -->
							<p class="has-small-font-size"><?php echo esc_html__( 'Full Site Editing Theme ( FSE ) With Multiple Kits', 'gutenify-store' ); ?></p>
							<!-- /wp:paragraph -->

							<!-- wp:heading {"fontSize":"huge"} -->
							<h2 class="has-huge-font-size"><?php echo esc_html__( 'Meet Gutenify Store – Powerful Block theme', 'gutenify-store' ); ?></h2>
							<!-- /wp:heading -->

							<!-- wp:paragraph -->
							<p><?php echo esc_html__( 'Change the workflow for your WordPress site, control everything from Site editor
									without using any extra plugins. Improved speed, web vitals score and SEO to get
									better positions', 'gutenify-store' ); ?></p>
							<!-- /wp:paragraph -->

							<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"left"},"style":{"spacing":{"margin":{"top":"20px","bottom":"20px"}}}} -->
							<div class="wp-block-buttons" style="margin-top:20px;margin-bottom:20px">
									<!-- wp:button {"style":{"border":{"radius":"0px"}},"className":"is-style-fill"} -->
									<div class="wp-block-button is-style-fill"><a class="wp-block-button__link"
													href="#" style="border-radius:0px"><?php echo esc_html__( 'More Demo', 'gutenify-store' ); ?></a></div>
									<!-- /wp:button -->
							</div>
							<!-- /wp:buttons -->
					</div>
					<!-- /wp:group -->
			</div>
			<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->
</div>
<!-- /wp:group -->
