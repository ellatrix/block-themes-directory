<?php
/**
 * Exo: Block Patterns
 *
 * @since Exo 1.0
 */

/**
 * Registers pattern categories.
 *
 * @since Exo 1.0
 *
 * @return void
 */
function exo_register_pattern_category() {

	$patterns = array();

	$block_pattern_categories = array(
		'exo' => array( 'label' => __( 'Exo', 'exo' ) )
	);

	$block_pattern_categories = apply_filters( 'exo_block_pattern_categories', $block_pattern_categories );

	foreach ( $block_pattern_categories as $name => $properties ) {
		if ( ! WP_Block_Pattern_Categories_Registry::get_instance()->is_registered( $name ) ) {
			register_block_pattern_category( $name, $properties );
		}
	}
}
add_action( 'init', 'exo_register_pattern_category', 9 );
