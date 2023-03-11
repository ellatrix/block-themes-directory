<?php
/**
 * Hero Content
 */
return array(
	'title'      => esc_html__( 'Hero Content', 'kelsey' ),
	'categories' => array( 'kelsey', 'featured', 'pages' ),
	// 'blockTypes' => array( 'core/template-part/footer' ),
	'content'    => '<!-- wp:group {"align":"full","className":"wp-block-section","layout":{"inherit":true}} -->
	<div class="wp-block-group alignfull wp-block-section">
		<!-- wp:columns {"verticalAlignment":"center","align":"wide","className":"about-us-columns"} -->
		<div class="wp-block-columns alignwide are-vertically-aligned-center about-us-columns">
			<!-- wp:column {"verticalAlignment":"center"} -->
			<div class="wp-block-column is-vertically-aligned-center">
				<!-- wp:media-text {"mediaPosition":"right","mediaId":1841,"mediaLink":"' . esc_url( get_theme_file_uri( '/assets/images/hero-content.jpg' ) ) . '","mediaType":"image","mediaWidth":40,"imageFill":false} -->
				<div class="wp-block-media-text alignwide has-media-on-the-right is-stacked-on-mobile"
					style="grid-template-columns:auto 40%">
					<figure class="wp-block-media-text__media"><img
							src="' . esc_url( get_theme_file_uri( '/assets/images/hero-content.jpg' ) ) . '" alt=""
							class="wp-image-1841 size-full" /></figure>
					<div class="wp-block-media-text__content">
						<!-- wp:group {"className":"section-heading"} -->
						<div class="wp-block-group section-heading">
							<!-- wp:heading {"level":6,"style":{"typography":{"textTransform":"uppercase","letterSpacing":"0.1875em","lineHeight":"1.75","fontStyle":"normal","fontWeight":"500"}},"fontSize":"medium"} -->
							<h6 class="has-medium-font-size"
								style="font-style:normal;font-weight:500;line-height:1.75;text-transform:uppercase;letter-spacing:0.1875em">
								' . esc_html__( 'Design Services', 'kelsey' ) . '</h6>
							<!-- /wp:heading -->
	
							<!-- wp:heading {"style":{"typography":{"fontStyle":"normal","fontWeight":"700","lineHeight":"1.43"}}} -->
							<h2 style="font-style:normal;font-weight:700;line-height:1.43">' . esc_html__( 'We Create Stylish designs.', 'kelsey' ) . '</h2>
							<!-- /wp:heading -->
						</div>
						<!-- /wp:group -->
	
						<!-- wp:group {"className":"section-content"} -->
						<div class="wp-block-group section-content">
							<!-- wp:paragraph -->
							<p>' . esc_html__( 'Make your photos look brilliant in today’s article we present tips on how to use colored
							lightning in the scenery.', 'kelsey' ) . '</p>
							<!-- /wp:paragraph -->
						</div>
						<!-- /wp:group -->
	
						<!-- wp:columns {"className":"about-stat"} -->
						<div class="wp-block-columns about-stat">
							<!-- wp:column -->
							<div class="wp-block-column">
								<!-- wp:paragraph {"style":{"typography":{"textTransform":"uppercase","letterSpacing":"0.1875em"}},"textColor":"foreground","className":"about-stat-heading","fontSize":"medium"} -->
								<p class="about-stat-heading has-foreground-color has-text-color has-medium-font-size"
									style="text-transform:uppercase;letter-spacing:0.1875em">' . esc_html__( 'Experience', 'kelsey' ) . '</p>
								<!-- /wp:paragraph -->
	
								<!-- wp:paragraph {"textColor":"foreground","className":"about-stat-count"} -->
								<p class="about-stat-count has-foreground-color has-text-color">' . esc_html__( '12+', 'kelsey' ) . '</p>
								<!-- /wp:paragraph -->
							</div>
							<!-- /wp:column -->
	
							<!-- wp:column -->
							<div class="wp-block-column">
								<!-- wp:paragraph {"style":{"typography":{"textTransform":"uppercase","letterSpacing":"0.1875em"}},"textColor":"foreground","className":"about-stat-heading","fontSize":"medium"} -->
								<p class="about-stat-heading has-foreground-color has-text-color has-medium-font-size"
									style="text-transform:uppercase;letter-spacing:0.1875em">' . esc_html__( 'Projects', 'kelsey' ) . '</p>
								<!-- /wp:paragraph -->
	
								<!-- wp:paragraph {"textColor":"foreground","className":"about-stat-count"} -->
								<p class="about-stat-count has-foreground-color has-text-color">' . esc_html__( '1400+', 'kelsey' ) . '</p>
								<!-- /wp:paragraph -->
							</div>
							<!-- /wp:column -->
						</div>
						<!-- /wp:columns -->
	
						<!-- wp:buttons -->
						<div class="wp-block-buttons">
							<!-- wp:button -->
							<div class="wp-block-button"><a class="wp-block-button__link">' . esc_html__( 'Get started', 'kelsey' ) . '</a></div>
							<!-- /wp:button -->
						</div>
						<!-- /wp:buttons -->
					</div>
				</div>
				<!-- /wp:media-text -->
			</div>
			<!-- /wp:column -->
		</div>
		<!-- /wp:columns -->
	</div>
	<!-- /wp:group -->',
);
