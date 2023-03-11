<?php
/**
 * Gokyo Fse: Block Patterns
 *
 * @since Gokyo Fse 1.0
 */

/**
 * Registers pattern categories.
 *
 * @since Gokyo Fse 1.0
 *
 * @return void
 */
function gokyo_fse_register_pattern_category() {

	$patterns = array();

	$block_pattern_categories = array(
		'gokyo-fse' => array( 'label' => __( 'Gokyo Fse', 'gokyo-fse' ) )
	);

	$block_pattern_categories = apply_filters( 'gokyo_fse_block_pattern_categories', $block_pattern_categories );

	foreach ( $block_pattern_categories as $name => $properties ) {
		if ( ! WP_Block_Pattern_Categories_Registry::get_instance()->is_registered( $name ) ) {
			register_block_pattern_category( $name, $properties );
		}
	}
}
add_action( 'init', 'gokyo_fse_register_pattern_category', 9 );
