<?php
/**
 * Approach Block Patterns
 *
 * @since Approach 1.0
 */

/**
 * Registers block patterns and categories.
 *
 * @return void
 */
function approach_register_block_patterns() {
	$block_pattern_categories = array(
		'approach_layout' => array( 'label' => __( 'Approach: Layout', 'approach' ) ),
		'approach_posts'  => array( 'label' => __( 'Approach: Posts', 'approach' ) ),
		'approach-front-page-sections'  => array( 'label' => __( 'Approach-Front-Page-Sections', 'approach' ) ),
	);

	/**
	 * Filters the theme block pattern categories.
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
	$block_pattern_categories = apply_filters( 'approach_block_pattern_categories', $block_pattern_categories );

	foreach ( $block_pattern_categories as $name => $properties ) {
		if ( ! WP_Block_Pattern_Categories_Registry::get_instance()->is_registered( $name ) ) {
			register_block_pattern_category( $name, $properties );
		}
	}

	$block_patterns = array(
		 'about-us',
		'banner',
		'service',
		'informational-table',
		'sidebar-widgets',
	    'pagebanner',
		'404-banner',
		'archivebanner',
		'404-page-not-found',
		'posts-list',
		'footer-default',
		
	);

	/**
	 * Filters the theme block patterns.
	 *
	 * @param array $block_patterns List of block patterns by name.
	 */
	$block_patterns = apply_filters( 'approach_block_patterns', $block_patterns );

	foreach ( $block_patterns as $block_pattern ) {
		$pattern_file = get_theme_file_path( '/inc/patterns/' . $block_pattern . '.php' );

		register_block_pattern(
			'approach/' . $block_pattern,
			require $pattern_file
		);
	}
}
add_action( 'init', 'approach_register_block_patterns', 9 );
