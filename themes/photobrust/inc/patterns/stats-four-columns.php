<?php
/**
 * Stats Four Column
 */
return array(
	'title'      => esc_html__( 'Stats Four Column', 'photobrust' ),
	'categories' => array( 'photobrust', 'featured' ),
	'content'    => '<!-- wp:group {"align":"full","className":"wp-block-section mini-section stats-four-columns-section style-one","layout":{"inherit":true}} -->
	<div class="wp-block-group alignfull wp-block-section mini-section stats-four-columns-section style-one">
		<!-- wp:group {"align":"wide","className":"section-heading"} -->
		<div class="wp-block-group alignwide section-heading">
			<!-- wp:heading {"textAlign":"center","level":6,"className":"has-medium-font-size section-subtitle"} -->
				<h6 class="has-medium-font-size section-subtitle has-text-align-center">
								<span>' . esc_html__( 'Events', 'photobrust' ) . '</span>
							</h6>
			<!-- /wp:heading -->
	
			<!-- wp:heading {"textAlign":"center","style":{"typography":{"fontStyle":"normal","fontWeight":"700","lineHeight":"1.43"}}} -->
			<h2 class="has-text-align-center" style="font-style:normal;font-weight:700;line-height:1.43">' . esc_html__( 'Art In Numbers', 'photobrust' ) . '</h2>
			<!-- /wp:heading -->
		</div>
		<!-- /wp:group -->
	
		<!-- wp:columns {"align":"wide","className":"stats-four-columns"} -->
		<div class="wp-block-columns alignwide stats-four-columns">
			<!-- wp:column -->
			<div class="wp-block-column">
				<!-- wp:group {"className":"stat-block"} -->
				<div class="wp-block-group stat-block">
					<!-- wp:heading {"textAlign":"center","textColor":"primary"} -->
					<h2 class="has-text-align-center has-primary-color has-text-color">' . esc_html__( '768', 'photobrust' ) . '</h2>
					<!-- /wp:heading -->
	
					<!-- wp:paragraph {"align":"center"} -->
					<p class="has-text-align-center">' . esc_html__( 'Photographs', 'photobrust' ) . '</p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:group -->
			</div>
			<!-- /wp:column -->
	
			<!-- wp:column -->
			<div class="wp-block-column">
				<!-- wp:group {"className":"stat-block"} -->
				<div class="wp-block-group stat-block">
					<!-- wp:heading {"textAlign":"center","textColor":"primary"} -->
					<h2 class="has-text-align-center has-primary-color has-text-color">' . esc_html__( '47', 'photobrust' ) . '</h2>
					<!-- /wp:heading -->
	
					<!-- wp:paragraph {"align":"center"} -->
					<p class="has-text-align-center">' . esc_html__( 'New Projects', 'photobrust' ) . '</p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:group -->
			</div>
			<!-- /wp:column -->
	
			<!-- wp:column -->
			<div class="wp-block-column">
				<!-- wp:group {"className":"stat-block"} -->
				<div class="wp-block-group stat-block">
					<!-- wp:heading {"textAlign":"center","textColor":"primary"} -->
					<h2 class="has-text-align-center has-primary-color has-text-color">' . esc_html__( '124', 'photobrust' ) . '</h2>
					<!-- /wp:heading -->
	
					<!-- wp:paragraph {"align":"center"} -->
					<p class="has-text-align-center">' . esc_html__( 'Awards', 'photobrust' ) . '</p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:group -->
			</div>
			<!-- /wp:column -->
	
			<!-- wp:column -->
			<div class="wp-block-column">
				<!-- wp:group {"className":"stat-block"} -->
				<div class="wp-block-group stat-block">
					<!-- wp:heading {"textAlign":"center","textColor":"primary"} -->
					<h2 class="has-text-align-center has-primary-color has-text-color">' . esc_html__( '13', 'photobrust' ) . '</h2>
					<!-- /wp:heading -->
	
					<!-- wp:paragraph {"align":"center"} -->
					<p class="has-text-align-center">' . esc_html__( 'Lenses', 'photobrust' ) . '</p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:group -->
			</div>
			<!-- /wp:column -->
		</div>
		<!-- /wp:columns -->
	</div>
	<!-- /wp:group -->',
);
