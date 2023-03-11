<?php
/**
 * Medicity: Block Patterns
 *
 * @since Medicity 1.0
 */

/**
 * Registers pattern categories.
 *
 * @since Medicity 1.0
 *
 * @return void
 */
function medicity_register_pattern_category() {

	$patterns = array();

	$block_pattern_categories = array(
		'medicity' => array( 'label' => __( 'Medicity', 'medicity' ) )
	);

	$block_pattern_categories = apply_filters( 'medicity_block_pattern_categories', $block_pattern_categories );

	foreach ( $block_pattern_categories as $name => $properties ) {
		if ( ! WP_Block_Pattern_Categories_Registry::get_instance()->is_registered( $name ) ) {
			register_block_pattern_category( $name, $properties );
		}
	}
}
add_action( 'init', 'medicity_register_pattern_category', 9 );
