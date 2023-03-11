<?php
return array(
			'title'         => __( 'Media & text with gradient outline', 'sampler' ),
			'categories'    => array( 'sampler-info', 'featured' ),
			'viewportWidth' => 1200,
			'content'       => '
<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"1px","right":"1px","bottom":"1px","left":"1px"}},"border":{"radius":"11px"}},"gradient":"luminous-dusk"} -->
<div class="wp-block-group alignwide has-luminous-dusk-gradient-background has-background" style="border-radius:11px;padding-top:1px;padding-right:1px;padding-bottom:1px;padding-left:1px">

	<!-- wp:group {"align":"wide","style":{"border":{"radius":"10px"}},"backgroundColor":"white"} -->
	<div class="wp-block-group alignwide has-white-background-color has-background" style="border-radius:10px">

		<!-- wp:media-text {"mediaLink":"' . sampler_pattern_content( '5-orange-squares' ) . '","mediaType":"image","imageFill":false,"className":"is-style-hover-zoom-block"} -->
		<div class="wp-block-media-text alignwide is-stacked-on-mobile is-style-hover-zoom-block">

			<figure class="wp-block-media-text__media">
				<img src="' . sampler_pattern_content( '5-orange-squares' ) . '" alt="" />
			</figure>

			<div class="wp-block-media-text__content">

				<!-- wp:paragraph {"placeholder":"Content…","style":{"typography":{"fontStyle":"normal","fontWeight":"700"}},"className":"is-style-gradient-text-3","fontSize":"xx-large"} -->
				<p class="is-style-gradient-text-3 has-xx-large-font-size" style="font-style:normal;font-weight:700">Sign up today and get two FREE widgets</p>
				<!-- /wp:paragraph -->

				<!-- wp:buttons {"layout":{"type":"flex"}} -->
				<div class="wp-block-buttons">

					<!-- wp:button {"gradient":"luminous-dusk"} -->
					<div class="wp-block-button">
						<a class="wp-block-button__link has-luminous-dusk-gradient-background has-background">Register</a>
					</div>
					<!-- /wp:button -->

				</div>
				<!-- /wp:buttons -->

				<!-- wp:spacer {"height":"36px"} -->
				<div style="height:36px" aria-hidden="true" class="wp-block-spacer"></div>
				<!-- /wp:spacer -->

			</div>

		</div>
		<!-- /wp:media-text -->

	</div>
	<!-- /wp:group -->

</div>
<!-- /wp:group -->
',
);
