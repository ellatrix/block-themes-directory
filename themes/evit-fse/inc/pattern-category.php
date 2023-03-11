<?php
/**
 * Evit FSE: Block Patterns
 *
 * @since Evit FSE 1.0
 */

/**
 * Registers pattern categories.
 *
 * @since Evit FSE 1.0
 *
 * @return void
 */
function evit_fse_register_pattern_category() {

	$patterns = array();

	$block_pattern_categories = array(
		'evit-fse' => array( 'label' => __( 'Evit FSE', 'evit-fse' ) )
	);

	$block_pattern_categories = apply_filters( 'evit_fse_block_pattern_categories', $block_pattern_categories );

	foreach ( $block_pattern_categories as $name => $properties ) {
		if ( ! WP_Block_Pattern_Categories_Registry::get_instance()->is_registered( $name ) ) {
			register_block_pattern_category( $name, $properties );
		}
	}
}
add_action( 'init', 'evit_fse_register_pattern_category');
