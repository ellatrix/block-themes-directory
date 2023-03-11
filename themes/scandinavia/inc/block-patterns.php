<?php

/**
 * Scandinavia: Block Patterns
 *
 * @since Scandinavia 1.0
 */

/**
 * Registers block patterns and categories.
 *
 * @since Scandinavia 1.0
 *
 * @return void
 */
function scandinavia_register_block_patterns() {
	$block_pattern_categories = array(
		'featured' => array( 'label' => __( 'Featured', 'scandinavia' ) ),
        'header'   => array( 'label' => __( 'Headers', 'scandinavia' ) ),
		'footer'   => array( 'label' => __( 'Footers', 'scandinavia' ) ),
		'posts'    => array( 'label' => __( 'Pages', 'scandinavia' ) ),
		'pages'    => array( 'label' => __( 'Pages', 'scandinavia' ) ),
	);

	/**
	 * Filters the theme block pattern categories.
	 *
	 * @since Scandinavia 1.0
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
	$block_pattern_categories = apply_filters( 'scandinavia_block_pattern_categories', $block_pattern_categories );

	foreach ( $block_pattern_categories as $name => $properties ) {
		if ( ! WP_Block_Pattern_Categories_Registry::get_instance()->is_registered( $name ) ) {
			register_block_pattern_category( $name, $properties );
		}
	}

	$block_patterns = array(
		'hidden-404',
		
		'footer-default',
		'footer-simple',

		'general-call-to-action',
		'general-featured-item',
		'general-media-text-left-align',
		'general-media-text-right-align',
		'general-hero-banner',
		'general-company-showcase',
		'general-profile',

		'header-with-background-image',
		
		'query-post-index',
		'query-post-archive',
		'query-post-list-tiles',
		'query-post-list-tiles-3-columns',
	);

	/**
	 * Filters the theme block patterns.
	 *
	 * @since Scandinavia 1.0
	 *
	 * @param array $block_patterns List of block patterns by name.
	 */
	$block_patterns = apply_filters( 'scandinavia_block_patterns', $block_patterns );

	foreach ( $block_patterns as $block_pattern ) {
		$pattern_file = get_theme_file_path( '/inc/patterns/' . $block_pattern . '.php' );

		register_block_pattern(
			'scandinavia/' . $block_pattern,
			require $pattern_file
		);
	}
}
add_action( 'init', 'scandinavia_register_block_patterns', 9 );
