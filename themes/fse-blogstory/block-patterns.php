<?php
/**
 * FSE Blogstory: Block Patterns
 *
 * @since FSE Blogstory 1.0
 */

/**
 * Registers block patterns and categories.
 *
 * @since FSE Blogstory 1.0
 *
 * @return void
 */
function fse_blogstory_register_block_patterns() {
	$block_pattern_categories = array(
		'introduction'    => array( 'label' => __( 'Introduction', 'fse-blogstory' ) ),
		'cta'    => array( 'label' => __( 'Call To Action', 'fse-blogstory' ) ),
		'fse-blogstory'    => array( 'label' => __( 'FSE Blogstory', 'fse-blogstory' ) ),
	);

	/**
	 * Filters the theme block pattern categories.
	 *
	 * @since FSE Blogstory 1.0
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
	$block_pattern_categories = apply_filters( 'fse_blogstory_block_pattern_categories', $block_pattern_categories );

	foreach ( $block_pattern_categories as $name => $properties ) {
		if ( ! WP_Block_Pattern_Categories_Registry::get_instance()->is_registered( $name ) ) {
			register_block_pattern_category( $name, $properties );
		}
	}
}
add_action( 'init', 'fse_blogstory_register_block_patterns', 9 );
