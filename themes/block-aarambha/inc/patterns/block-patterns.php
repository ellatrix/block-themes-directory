<?php
/**
* Registers block patterns and categories.
*/
function block_aaramhba_register_block_patterns() {
	$block_pattern_categories = array(
		'block-aarambha'	=> array( 'label' => esc_html__( 'Block Aarambha', 'block-aarambha' ) )
	);

	/**
	 * Filters the theme block pattern categories.
	 */
	$block_pattern_categories = apply_filters( 'block_aaramhba_block_pattern_categories', $block_pattern_categories );

	foreach ( $block_pattern_categories as $name => $properties ) {
		if ( ! WP_Block_Pattern_Categories_Registry::get_instance()->is_registered( $name ) ) {
			register_block_pattern_category( $name, $properties );
		}
	}

	$block_patterns = array(
		'header-default',
		'hero-cover',
		'follow-subscribe',
		'footer-default',
	);

	/**
	 * Filters the theme block patterns.
	 */
	$block_patterns = apply_filters( 'block_aaramhba_block_patterns', $block_patterns );

	foreach ( $block_patterns as $block_pattern ) {
		$pattern_file = get_theme_file_path( '/inc/patterns/' . $block_pattern . '.php' );

		register_block_pattern(
			'block-aarambha/' . $block_pattern,
			require $pattern_file
		);
	}
}
add_action( 'init', 'block_aaramhba_register_block_patterns', 9 );