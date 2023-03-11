<?php
/**
 * Paloma FSE: Block Patterns
 *
 * @since Paloma FSE 1.0
 */

/**
 * Registers pattern categories.
 *
 * @since Paloma FSE 1.0
 *
 * @return void
 */
function paloma_fse_register_pattern_category() {

	$patterns = array();

	$block_pattern_categories = array(
		'paloma-fse' => array( 'label' => __( 'Paloma FSE', 'paloma-fse' ) )
	);

	$block_pattern_categories = apply_filters( 'paloma_fse_block_pattern_categories', $block_pattern_categories );

	foreach ( $block_pattern_categories as $name => $properties ) {
		if ( ! WP_Block_Pattern_Categories_Registry::get_instance()->is_registered( $name ) ) {
			register_block_pattern_category( $name, $properties );
		}
	}
}
add_action( 'init', 'paloma_fse_register_pattern_category', 9 );
