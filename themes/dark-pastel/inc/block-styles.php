<?php
/**
 * Register theme specific block styles.
 *
 * @since Dark Pastel 0.1
 *
 * @return void
 */
function dark_pastel_register_block_styles() {
	register_block_style(
		'core/separator',
		array(
			'name'         => 'narrow-ornament',
			'label'        => __( 'Narrow Ornament', 'dark-pastel' ),
		)
	);

	register_block_style(
		'core/separator',
		array(
			'name'         => 'double-ornament',
			'label'        => __( 'Double Ornament', 'dark-pastel' ),
		)
	);

	register_block_style(
		'core/separator',
		array(
			'name'         => 'double-ornament-inverted',
			'label'        => __( 'Double Ornament (inverted)', 'dark-pastel' ),
		)
	);

	register_block_style(
		'core/separator',
		array(
			'name'         => 'ornament-left',
			'label'        => __( 'Ornament (left)', 'dark-pastel' ),
		)
	);

	register_block_style(
		'core/separator',
		array(
			'name'         => 'ornament-right',
			'label'        => __( 'Ornament (right)', 'dark-pastel' ),
		)
	);

	register_block_style(
		'core/separator',
		array(
			'name'         => 'star-ornament',
			'label'        => __( 'Star Ornament', 'dark-pastel' ),
		)
	);

	register_block_style(
		'core/separator',
		array(
			'name'         => 'cutout-circle-up',
			'label'        => __( 'Cutout circle (up)', 'dark-pastel' ),
		)
	);

	register_block_style(
		'core/separator',
		array(
			'name'         => 'cutout-circle-down',
			'label'        => __( 'Cutout circle (down)', 'dark-pastel' ),
		)
	);

	register_block_style(
		'core/separator',
		array(
			'name'         => 'diamond',
			'label'        => __( 'Diamond', 'dark-pastel' ),
		)
	);
}

add_action( 'init', 'dark_pastel_register_block_styles' );
