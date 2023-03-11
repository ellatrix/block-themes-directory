<?php
/**
 * Arc Fse: Block Patterns
 *
 * @since Arc Fse 1.0
 */

/**
 * Registers pattern categories.
 *
 * @since Arc Fse 1.0
 *
 * @return void
 */
function arc_fse_register_pattern_category() {

	$patterns = array();

	$block_pattern_categories = array(
		'arc-fse' => array( 'label' => __( 'Arc Fse', 'arc-fse' ) )
	);

	$block_pattern_categories = apply_filters( 'arc_fse_block_pattern_categories', $block_pattern_categories );

	foreach ( $block_pattern_categories as $name => $properties ) {
		if ( ! WP_Block_Pattern_Categories_Registry::get_instance()->is_registered( $name ) ) {
			register_block_pattern_category( $name, $properties );
		}
	}
}
add_action( 'init', 'arc_fse_register_pattern_category', 9 );
