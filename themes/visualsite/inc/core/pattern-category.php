<?php
/**
 * VisualSite: Block Patterns
 *
 * @since VisualSite 1.0
 */

/**
 * Registers pattern categories.
 *
 * @since VisualSite 1.0
 *
 * @return void
 */
function visualsite_register_pattern_category() {

	$patterns = array();

	$block_pattern_categories = array(
		'visualsite' => array( 'label' => __( 'VisualSite Theme', 'visualsite' ) )
	);

	$block_pattern_categories = apply_filters( 'visualsite_block_pattern_categories', $block_pattern_categories );

	foreach ( $block_pattern_categories as $name => $properties ) {
		if ( ! WP_Block_Pattern_Categories_Registry::get_instance()->is_registered( $name ) ) {
			register_block_pattern_category( $name, $properties );
		}
	}
}
add_action( 'init', 'visualsite_register_pattern_category', 9 );
