<?php
/*******************************************************
 * 
 *  Remove theme support for core block patterns
 *
 *******************************************************/ 
add_action('init', function() {
    remove_theme_support('core-block-patterns');
},  9  );


/*******************************************************
 * 
 *  Register block pattern categories
 * 
 * *****************************************************/
function aploblock_register_block_pattern_categories() {

	register_block_pattern_category(
		'aploblocks/headers',
		array( 'label' => esc_html__( 'Headers', 'aploblocks' ) )
	);

	register_block_pattern_category(
		'aploblocks/columns',
		array( 'label' => esc_html__( 'Columns', 'aploblocks' ) )
	);

	register_block_pattern_category(
		'aploblocks/images',
		array( 'label' => esc_html__( 'Images', 'aploblocks' ) )
	);

	register_block_pattern_category(
		'aploblocks/imagetext',
		array( 'label' => esc_html__( 'Images and Text', 'aploblocks' ) )
	);

	register_block_pattern_category(
		'aploblocks/general',
		array( 'label' => esc_html__( 'General', 'aploblocks' ) )
	);

	register_block_pattern_category(
		'aploblocks/banners',
		array( 'label' => esc_html__( 'Banners', 'aploblocks' ) )
	);

	register_block_pattern_category(
		'aploblocks/layouts',
		array( 'label' => esc_html__( 'Layouts', 'aploblocks' ) )
	);

	register_block_pattern_category(
		'aploblocks/sidebars',
		array( 'label' => esc_html__( 'Sidebars', 'aploblocks' ) )
	);
	register_block_pattern_category(
		'aploblocks/queryloops',
		array( 'label' => esc_html__( 'Query Loops', 'aploblocks' ) )
	);

	register_block_pattern_category(
		'aploblocks/footers',
		array( 'label' => esc_html__( 'Footers', 'aploblocks' ) )
	);
}
add_action( 'init', 'aploblock_register_block_pattern_categories');
