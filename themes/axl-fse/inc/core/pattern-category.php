<?php
/**
 * Axl Fse: Block Patterns
 *
 * @since Axl Fse 1.0
 */

/**
 * Registers pattern categories.
 *
 * @since Axl Fse 1.0
 *
 * @return void
 */
function axl_fse_register_pattern_category() {

	$patterns = array();

	$block_pattern_categories = array(
		'axl-fse' => array( 'label' => __( 'Axl Fse', 'axl-fse' ) )
	);

	$block_pattern_categories = apply_filters( 'axl_fse_block_pattern_categories', $block_pattern_categories );

	foreach ( $block_pattern_categories as $name => $properties ) {
		if ( ! WP_Block_Pattern_Categories_Registry::get_instance()->is_registered( $name ) ) {
			register_block_pattern_category( $name, $properties );
		}
	}
}
add_action( 'init', 'axl_fse_register_pattern_category', 9 );
