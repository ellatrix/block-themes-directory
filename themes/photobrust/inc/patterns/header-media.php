<?php
/**
 * Header Media
 */
return array(
	'title'      => esc_html__( 'Header Media', 'photobrust' ),
	'categories' => array( 'photobrust', 'featured' ),
	// 'blockTypes' => array( 'core/template-part/footer' ),
	'content'    => '<!-- wp:cover {"url":"' . esc_url( get_theme_file_uri( '/assets/images/bird.png' ) ) . '","dimRatio":0,"align":"full","className":"wp-block-section header-media"} -->
	<div class="wp-block-cover alignfull wp-block-section header-media">
		<span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim"></span>
		<img class="wp-block-cover__image-background" alt="" src="' . esc_url( get_theme_file_uri( '/assets/images/bird.png' ) ) . '" data-object-fit="cover" />
		<div class="wp-block-cover__inner-container">
						<!-- wp:group {"layout":{"inherit":true}} -->
						<div class="wp-block-group">
							<!-- wp:group {"align":"wide","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"left"}} -->
							<div class="wp-block-group alignwide">
								<!-- wp:group {"className":"header-media-content-wrap is-style-default","layout":{"inherit":false}} -->
								<div class="wp-block-group header-media-content-wrap is-style-default">
									<!-- wp:heading {"level":6,"className":"section-subtitle","fontSize":"medium"} -->
									<h6 class="section-subtitle has-medium-font-size"><span>' . esc_html__( 'Fantastic', 'photobrust' ) . '</span></h6>
									<!-- /wp:heading -->
	
									<!-- wp:heading {"className":"header-media-title","fontSize":"huge"} -->
									<h2 class="header-media-title has-huge-font-size">' . esc_html__( 'Weaving Feathers', 'photobrust' ) . '</h2>
									<!-- /wp:heading -->
	
									<!-- wp:group {"className":"header-media-content"} -->
									<div class="wp-block-group header-media-content">
										<!-- wp:paragraph -->
										<p>' . esc_html__( 'Make your photos look brilliant', 'photobrust' ) . '</p>
										<!-- /wp:paragraph -->
									</div>
									<!-- /wp:group -->
	
									<!-- wp:buttons -->
									<div class="wp-block-buttons">
										<!-- wp:button {"className":"is-style-outline"} -->
										<div class="wp-block-button is-style-outline"><a class="wp-block-button__link">' . esc_html__( 'Get Started', 'photobrust' ) . '</a></div>
										<!-- /wp:button -->
									</div>
									<!-- /wp:buttons -->
								</div>
								<!-- /wp:group -->
							</div>
							<!-- /wp:group -->
						</div>
						<!-- /wp:group -->
					</div>
	</div>
	<!-- /wp:cover -->',
);
