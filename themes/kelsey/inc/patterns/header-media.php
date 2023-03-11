<?php
/**
 * Header Media
 */
return array(
	'title'      => esc_html__( 'Header Media', 'kelsey' ),
	'categories' => array( 'kelsey', 'featured' ),
	// 'blockTypes' => array( 'core/template-part/footer' ),
	'content'    => '<!-- wp:cover {"overlayColor":"background","align":"full","className":"wp-block-section header-media"} -->
	<div class="wp-block-cover alignfull wp-block-section header-media"><span
			aria-hidden="true"
			class="has-background-background-color has-background-dim-100 wp-block-cover__gradient-background has-background-dim"></span>
		<div class="wp-block-cover__inner-container">
			<!-- wp:group {"align":"wide","layout":{"inherit":true}} -->
			<div class="wp-block-group alignwide">
				<!-- wp:media-text {"mediaPosition":"right","mediaId":1840,"mediaLink":"' . esc_url( get_theme_file_uri( '/assets/images/header-media.jpg' ) ) . '","mediaType":"image"} -->
				<div class="wp-block-media-text alignwide has-media-on-the-right is-stacked-on-mobile">
					<figure class="wp-block-media-text__media"><img
							src="' . esc_url( get_theme_file_uri( '/assets/images/header-media.jpg' ) ) . '" alt=""
							class="wp-image-1840 size-full" /></figure>
					<div class="wp-block-media-text__content">
						<!-- wp:heading {"textColor":"foreground","className":"header-media-title","fontSize":"huge"} -->
						<h2 class="header-media-title has-foreground-color has-text-color has-huge-font-size">' . esc_html__( 'Minimalist
						at its finest.', 'kelsey' ) . '</h2>
						<!-- /wp:heading -->
	
						<!-- wp:group {"className":"header-media-content"} -->
						<div class="wp-block-group header-media-content">
							<!-- wp:paragraph {"placeholder":""} -->
							<p>' . esc_html__( 'Make your photos look brilliant in today’s article we
							present tips on how to use colored lightning in the scenery.', 'kelsey' ) . '</p>
							<!-- /wp:paragraph -->
						</div>
						<!-- /wp:group -->
	
						<!-- wp:buttons {"style":{"spacing":{"margin":{"top":"14px"}}}} -->
						<div class="wp-block-buttons" style="margin-top:14px">
							<!-- wp:button -->
							<div class="wp-block-button"><a class="wp-block-button__link">' . esc_html__( 'Get Started', 'kelsey' ) . '</a></div>
							<!-- /wp:button -->
						</div>
						<!-- /wp:buttons -->
					</div>
				</div>
				<!-- /wp:media-text -->
			</div>
			<!-- /wp:group -->
		</div>
	</div>
	<!-- /wp:cover -->',
);
