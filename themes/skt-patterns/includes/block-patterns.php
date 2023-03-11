<?php
/**
 * SKT Patterns : Block Patterns
 *
 * @since SKT Patterns 1.0
 */

function skt_patterns_register_block_patterns() {
	$block_pattern_categories = array(
		'skt-patterns' => array( 'label' => __( 'SKT Patterns', 'skt-patterns' ) ),
	);

	/**
	 * Filters the theme block pattern categories.
	 *
	 * @since SKT Patterns 1.0
	 *
	 */
	$block_pattern_categories = apply_filters( 'skt_patterns_block_pattern_categories', $block_pattern_categories );

	foreach ( $block_pattern_categories as $name => $properties ) {
		if ( ! WP_Block_Pattern_Categories_Registry::get_instance()->is_registered( $name ) ) {
			register_block_pattern_category( $name, $properties ); // phpcs:ignore WPThemeReview.PluginTerritory.ForbiddenFunctions.editor_blocks_register_block_pattern_category
		}
	}

	$block_patterns = array(
		'skt-patterns-header',
		'skt-patterns-hero-banner',
		'skt-patterns-about',
		'skt-patterns-services',
		'skt-patterns-latest-news',
		'skt-patterns-project',
		'skt-patterns-how-we-work',
		'skt-patterns-footer',		
	);

	/**
	 * Filters the theme block patterns.
	 *
	 * @since SKT Patterns 1.0
	 * 
	 * @param array $block_patterns List of block patterns by name.
	 *
	 */
	$block_patterns = apply_filters( 'skt_patterns_block_patterns', $block_patterns );

	foreach ( $block_patterns as $block_pattern ) {
		$pattern_file = get_theme_file_path( '/includes/patterns/' . $block_pattern . '.php' );

		register_block_pattern( // phpcs:ignore WPThemeReview.PluginTerritory.ForbiddenFunctions.editor_blocks_register_block_pattern
			'skt-patterns/' . $block_pattern,
			require $pattern_file // phpcs:ignore WPThemeReview.CoreFunctionality.FileInclude.FileIncludeFound
		);
	}
}
add_action( 'init', 'skt_patterns_register_block_patterns', 9 );
