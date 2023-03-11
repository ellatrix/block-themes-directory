<?php
/**
 * FSE Study Lite: Block Patterns
 *
 * @since FSE Study Lite 1.0
 */

/**
 * Registers block patterns and categories.
 *
 * @since FSE Study Lite 1.0
 *
 * @return void
 */
function study_lite_register_block_patterns() {
	$block_pattern_categories = array(
		'introduction'    => array( 'label' => __( 'Introduction', 'fse-study-lite' ) ),
		'services' => array( 'label' => __( 'Services','fse-study-lite' ) ),
		'team'    => array( 'label' => __( 'Team Members', 'fse-study-lite' ) ),
		'CTA'    => array( 'label' => __( 'Call To Action', 'fse-study-lite' ) ),
		'fse-study-lite'    => array( 'label' => __( 'Study Lite', 'fse-study-lite' ) ),
	);

	/**
	 * Filters the theme block pattern categories.
	 *
	 * @since FSE Study Lite 1.0
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
	$block_pattern_categories = apply_filters( 'study_lite_block_pattern_categories', $block_pattern_categories );

	foreach ( $block_pattern_categories as $name => $properties ) {
		if ( ! WP_Block_Pattern_Categories_Registry::get_instance()->is_registered( $name ) ) {
			register_block_pattern_category( $name, $properties );
		}
	}
}
add_action( 'init', 'study_lite_register_block_patterns', 9 );
