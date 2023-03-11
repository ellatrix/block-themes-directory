<?php
/**
 * CTA Horizontal
 */
return array(
	'title'      => esc_html__( 'CTA Horizontal', 'kelsey' ),
	'categories' => array( 'kelsey', 'featured' ),
	// 'blockTypes' => array( 'core/template-part/footer' ),
	'content'    => '<!-- wp:group {"align":"full","backgroundColor":"primary","className":"wp-block-section mini-section","layout":{"inherit":true}} -->
	<div class="wp-block-group alignfull wp-block-section mini-section has-primary-background-color has-background">
		<!-- wp:columns {"verticalAlignment":"center","align":"wide"} -->
		<div class="wp-block-columns alignwide are-vertically-aligned-center">
			<!-- wp:column {"verticalAlignment":"center","width":"66.66%"} -->
			<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:66.66%">
				<!-- wp:group {"className":"cta-horizontal-content"} -->
				<div class="wp-block-group cta-horizontal-content">
					<!-- wp:heading {"textAlign":"left","style":{"typography":{"fontStyle":"normal","fontWeight":"700","lineHeight":"1.43"}},"textColor":"color-light"} -->
					<h2 class="has-text-align-left has-color-light-color has-text-color"
						style="font-style:normal;font-weight:700;line-height:1.43">' . esc_html__( 'Express Your Creativity and Start Bulding
						Your Design', 'kelsey' ) . '</h2>
					<!-- /wp:heading -->
				</div>
				<!-- /wp:group -->
			</div>
			<!-- /wp:column -->
	
			<!-- wp:column {"verticalAlignment":"center","width":"33.33%"} -->
			<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:33.33%">
				<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"right"}} -->
				<div class="wp-block-buttons">
					<!-- wp:button -->
					<div class="wp-block-button"><a class="wp-block-button__link">' . esc_html__( 'Start A Project', 'kelsey' ) . '</a></div>
					<!-- /wp:button -->
				</div>
				<!-- /wp:buttons -->
			</div>
			<!-- /wp:column -->
		</div>
		<!-- /wp:columns -->
	</div>
	<!-- /wp:group -->',
);
