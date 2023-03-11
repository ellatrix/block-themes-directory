<?php
/**
 * Blockio: Block Patterns
 *
 * Registers block patterns and categories
 *
 */
function blockio_register_block_patterns() {

	register_block_pattern_category(
		'blockio-patterns',
		array( 'label' => esc_html__( 'Blockio - Patterns', 'blockio' ) )
	);



	/* Patterns Array */
    $blockio_patterns = [
        'about-widget',
        'gallery-columns',
        'right-sidebar',
        'our-company',
        'our-feature-section',
        'our-site',
        'pricing-tables',
        'image-content',
        'title-page',
	    'slick-slider'
    ];

        /**
         * Register Patterns
         */
        foreach ($blockio_patterns as $blockio_pattern):

            register_block_pattern('blockio/' . $blockio_pattern, require get_theme_file_path('/inc/patterns/' . $blockio_pattern . '.php'));

        endforeach;

}
add_action('init','blockio_register_block_patterns',10);