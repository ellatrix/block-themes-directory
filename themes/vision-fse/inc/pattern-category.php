<?php
/**
 * Vision FSE: Block Patterns
 *
 * @since Vision FSE 1.0
 */

/**
 * Registers pattern categories.
 *
 * @since Vision FSE 1.0
 *
 * @return void
 */
function vision_fse_register_pattern_category() {

	$patterns = array();

	$block_pattern_categories = array(
		'vision-fse' => array( 'label' => __( 'Vision FSE', 'vision-fse' ) )
	);

	$block_pattern_categories = apply_filters( 'vision_fse_block_pattern_categories', $block_pattern_categories );

	foreach ( $block_pattern_categories as $name => $properties ) {
		if ( ! WP_Block_Pattern_Categories_Registry::get_instance()->is_registered( $name ) ) {
			register_block_pattern_category( $name, $properties );
		}
	}
}
add_action( 'init', 'vision_fse_register_pattern_category');
