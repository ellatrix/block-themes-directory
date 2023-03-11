<?php
/**
 * Blockline: Block Patterns
 *
 * @since Blockline 1.0
 */

/**
 * Registers block patterns and categories.
 *
 * @since Blockline 1.0
 *
 * @return void
 */
  function blockline_register_block_patterns() {
	$block_pattern_categories = array(
		'featured' => array( 'label' => __( 'Featured', 'blockline' ) ),
		'footer'   => array( 'label' => __( 'Footers', 'blockline' ) ),
		'header'   => array( 'label' => __( 'Headers', 'blockline' ) ),
		'query'    => array( 'label' => __( 'Query', 'blockline' ) ),
		'pages'    => array( 'label' => __( 'Pages', 'blockline' ) ),
		'blockline'    => array( 'label' => __( 'Blockline', 'blockline' ) ),
	);

	/**
	 * Filters the theme block pattern categories.
	 *
	 * @since Blockline 1.0
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
	$block_pattern_categories = apply_filters( 'blockline_block_pattern_categories', $block_pattern_categories );

	foreach ( $block_pattern_categories as $name => $properties ) {
		if ( ! WP_Block_Pattern_Categories_Registry::get_instance()->is_registered( $name ) ) {
			register_block_pattern_category( $name, $properties );
		}
	}

	$block_patterns = array(
		'hero-main',
		'hero',
		'hero-1',
		'service',
		'ribbon',
		'team',
		'testimonial',
		'pricing',
		'primary-sidebar',
		'footer-default'
	);

	/**
	 * Filters the theme block patterns.
	 *
	 * @since Blockline 1.0
	 *
	 * @param array $block_patterns List of block patterns by name.
	 */
	$block_patterns = apply_filters( 'blockline_block_patterns', $block_patterns );

	foreach ( $block_patterns as $block_pattern ) {
		$pattern_file = get_theme_file_path( '/patterns/' . $block_pattern . '.php' );

		register_block_pattern(
			'blockline/' . $block_pattern,
			require $pattern_file
		);
	}
}
add_action( 'init', 'blockline_register_block_patterns', 9 );