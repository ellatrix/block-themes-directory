<?php
/**
 * Hero Content
 */
return array(
	'title'      => esc_html__( 'Hero Content', 'photobrust' ),
	'categories' => array( 'photobrust', 'featured', 'pages' ),
	// 'blockTypes' => array( 'core/template-part/footer' ),
	'content'    => '<!-- wp:group {"align":"full","className":"wp-block-section","layout":{"inherit":true}} -->
	<div class="wp-block-group alignfull wp-block-section">
		<!-- wp:columns {"verticalAlignment":"center","align":"wide","className":"about-us-columns"} -->
		<div class="wp-block-columns alignwide are-vertically-aligned-center about-us-columns">
			<!-- wp:column {"verticalAlignment":"center"} -->
			<div class="wp-block-column is-vertically-aligned-center">
				<!-- wp:media-text {"mediaLink":"' . esc_url( get_theme_file_uri( '/assets/images/lizard.png' ) ) . '","mediaType":"image","mediaWidth":43,"imageFill":false} -->
				<div class="wp-block-media-text alignwide is-stacked-on-mobile" style="grid-template-columns:43% auto">
					<figure class="wp-block-media-text__media"><img
							src="' . esc_url( get_theme_file_uri( '/assets/images/lizard.png' ) ) . '"
							alt="" /></figure>
					<div class="wp-block-media-text__content">
						<!-- wp:group {"className":"section-heading"} -->
						<div class="wp-block-group section-heading">
							<!-- wp:heading {"level":6,"className":"has-medium-font-size section-subtitle"} -->
							<h6 class="has-medium-font-size section-subtitle">
								<span>' . esc_html__( 'WHO WE ARE', 'photobrust' ) . '</span>
							</h6>
							<!-- /wp:heading -->
	
							<!-- wp:heading {"style":{"typography":{"fontStyle":"normal","fontWeight":"700","lineHeight":"1.43"}}} -->
							<h2 style="font-style:normal;font-weight:700;line-height:1.43">' . esc_html__( 'Help Us Protect Our
								Animals', 'photobrust' ) . '</h2>
							<!-- /wp:heading -->
						</div>
						<!-- /wp:group -->
	
						<!-- wp:group {"className":"section-content"} -->
						<div class="wp-block-group section-content">
							<!-- wp:paragraph -->
							<p>' . esc_html__( 'Make your photos look brilliant in today’s article we present tips on how to use colored
								lightning in the scenery. Ghost pipefish yellow bass New Zealand sand diver eul.', 'photobrust' ) . '</p>
							<!-- /wp:paragraph -->
						</div>
						<!-- /wp:group -->
	
						<!-- wp:columns {"className":"about-stat"} -->
						<div class="wp-block-columns about-stat">
							<!-- wp:column -->
							<div class="wp-block-column">
								<!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"600"}},"textColor":"foreground","className":"about-stat-heading","fontSize":"normal"} -->
								<p class="about-stat-heading has-foreground-color has-text-color has-normal-font-size"
									style="font-style:normal;font-weight:600">' . esc_html__( 'Poaching Cases', 'photobrust' ) . '</p>
								<!-- /wp:paragraph -->
	
								<!-- wp:paragraph {"textColor":"primary","className":"about-stat-count"} -->
								<p class="about-stat-count has-primary-color has-text-color">' . esc_html__( '850', 'photobrust' ) . '</p>
								<!-- /wp:paragraph -->
							</div>
							<!-- /wp:column -->
	
							<!-- wp:column -->
							<div class="wp-block-column">
								<!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"600"}},"className":"about-stat-heading has-foreground-color has-text-color has-normal-font-size"} -->
								<p class="about-stat-heading has-foreground-color has-text-color has-normal-font-size"
									style="font-style:normal;font-weight:600">' . esc_html__( 'Rescued Animals', 'photobrust' ) . '</p>
								<!-- /wp:paragraph -->
	
								<!-- wp:paragraph {"textColor":"primary","className":"about-stat-count"} -->
								<p class="about-stat-count has-primary-color has-text-color">' . esc_html__( '230', 'photobrust' ) . '</p>
								<!-- /wp:paragraph -->
							</div>
							<!-- /wp:column -->
	
							<!-- wp:column -->
							<div class="wp-block-column">
								<!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"600"}},"className":"about-stat-heading has-foreground-color has-text-color has-normal-font-size"} -->
								<p class="about-stat-heading has-foreground-color has-text-color has-normal-font-size"
									style="font-style:normal;font-weight:600">' . esc_html__( 'Volunteers', 'photobrust' ) . '</p>
								<!-- /wp:paragraph -->
	
								<!-- wp:paragraph {"textColor":"primary","className":"about-stat-count"} -->
								<p class="about-stat-count has-primary-color has-text-color">' . esc_html__( '160', 'photobrust' ) . '</p>
								<!-- /wp:paragraph -->
							</div>
							<!-- /wp:column -->
						</div>
						<!-- /wp:columns -->
	
						<!-- wp:buttons -->
						<div class="wp-block-buttons">
							<!-- wp:button -->
							<div class="wp-block-button"><a class="wp-block-button__link">' . esc_html__( 'Read More', 'photobrust' ) . '</a></div>
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
