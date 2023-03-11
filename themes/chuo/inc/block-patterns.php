<?php

/**
 * chuo: Block Patterns
 *
 * @since chuo 1.0
 */

/**
 * Registers block patterns and categories.
 *
 * @since chuo 1.0
 *
 * @return void
 */
function chuo_register_block_patterns() {
	$block_pattern_categories = array(
		'theme'    => array( 'label' => __( 'chuo Theme', 'chuo' ) ),
		'featured' => array( 'label' => __( 'Featured', 'chuo' ) ),
        'header'   => array( 'label' => __( 'Headers', 'chuo' ) ),
		'footer'   => array( 'label' => __( 'Footers', 'chuo' ) ),
		'posts'    => array( 'label' => __( 'Pages', 'chuo' ) ),
		'pages'    => array( 'label' => __( 'Pages', 'chuo' ) ),
		'widgets'  => array( 'label' => __( 'Widgets', 'chuo' ) ),
	);

	/**
	 * Filters the theme block pattern categories.
	 *
	 * @since chuo 1.0
	 *
	 * @param array[] $block_pattern_categories {
	 *     An associative array of block pattern categories, keyed by category name.
	 *
	 *     @type array[] $properties {
	 *         An array of block category properties.
	 *
	 *         @type string $label A human-readable label for the pattern category.
	 *     }
	 * }
	 */
	$block_pattern_categories = apply_filters( 'chuo_block_pattern_categories', $block_pattern_categories );

	foreach ( $block_pattern_categories as $name => $properties ) {
		if ( ! WP_Block_Pattern_Categories_Registry::get_instance()->is_registered( $name ) ) {
			register_block_pattern_category( $name, $properties );
		}
	}

	$block_patterns = array(
	    'footer-compact',
		'footer-default',
		'general-block-title',
		'general-full-with-button',
		'general-call-to-action-large',
		'general-call-to-action-two-columns',
		'general-feature-left-text',
		'general-feature-right-text',
		'general-featured-companies',
		'general-hero-banner',
		'general-hero-post',
		'general-hidden-404',
		'general-post-archive-three-columns',
		'general-post-list-three-columns',
		'general-statistics',
		'general-text-video',
		'general-three-column-posts',
		'general-post-header',
		'general-pricing-table',
		'general-process-steps',
		'general-subscribe',
		'general-testimonials',
		'header-compact',
		'header-default',
	);

	/**
	 * Filters the theme block patterns.
	 *
	 * @since chuo 1.0
	 *
	 * @param array $block_patterns List of block patterns by name.
	 */
	$block_patterns = apply_filters( 'chuo_block_patterns', $block_patterns );

	foreach ( $block_patterns as $block_pattern ) {
		$pattern_file = get_theme_file_path( '/inc/patterns/' . $block_pattern . '.php' );

		register_block_pattern(
			'chuo/' . $block_pattern,
			require $pattern_file
		);
	}
}
add_action( 'init', 'chuo_register_block_patterns', 9 );
