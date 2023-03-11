<?php
/**
 * Bioxlog : Block Patterns
 *
 * @since Bioxlog 1.0
 */

/**
 * Registers block patterns and categories.
 *
 * @since Bioxlog 1.0
 *
 * @return void
 */
function bioxlog_register_block_patterns() {
	$block_pattern_categories = array(
		'featured' => array( 'label' => __( 'Featured', 'bioxlog' ) ),
		'footer'   => array( 'label' => __( 'Footers', 'bioxlog' ) ),
		'header'   => array( 'label' => __( 'Headers', 'bioxlog' ) ),
		'query'    => array( 'label' => __( 'Query', 'bioxlog' ) ),
		'pages'    => array( 'label' => __( 'Pages', 'bioxlog' ) ),
	);

	/**
	 * Filters the theme block pattern categories.
	 *
	 * @since Bioxlog 1.0
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
	$block_pattern_categories = apply_filters( 'bioxlog_block_pattern_categories', $block_pattern_categories );

	foreach ( $block_pattern_categories as $name => $properties ) {
		if ( ! WP_Block_Pattern_Categories_Registry::get_instance()->is_registered( $name ) ) {
			register_block_pattern_category( $name, $properties );
		}
	}

	$block_patterns = array(
		'page-hero',
		'page-about-hero',
		'page-about-me',
		'page-service-light',
		'page-service-dark',
		'page-experience',
		'page-education',
		'page-gallery',
		'page-clients',
		'page-clients-alt',
		'page-work-with-me',
		'page-call-to-action',
		'page-latest-post',
		'page-404',
	);

	/**
	 * Filters the theme block patterns.
	 *
	 * @since Bioxlog 1.0
	 *
	 * @param array $block_patterns List of block patterns by name.
	 */
	$block_patterns = apply_filters( 'bioxlog_block_patterns', $block_patterns );

	foreach ( $block_patterns as $block_pattern ) {
		$pattern_file = get_theme_file_path( '/inc/patterns/' . $block_pattern . '.php' );

		register_block_pattern(
			'bioxlog/' . $block_pattern,
			require $pattern_file
		);
	}
}
add_action( 'init', 'bioxlog_register_block_patterns', 9 );


