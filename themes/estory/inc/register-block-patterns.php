<?php
/**
 * Block patterns
 *
 * @package estory
 * @since 1.0.0
 */

/**
 * Registers block patterns and block pattern categories.
 *
 * @since 1.0.0
 *
 * @return void
 */

function estory_register_block_patterns() {

    $block_pattern_categories = apply_filters(
        'estory_block_pattern_categories',
        array(
            'estory-header'  => array( 'label' => __( 'eStory - Headers', 'estory' ) ),
            'estory-footer'  => array( 'label' => __( 'eStory - Footers', 'estory' ) ),
            'estory-home'    => array( 'label' => __( 'eStory - Home', 'estory' ) ),
            'estory-query'   => array( 'label' => __( 'eStory - Query', 'estory' ) ),
            'estory-search'  => array( 'label' => __( 'eStory - Search Bar', 'estory' ) ),
            'estory-404'     => array( 'label' => __( 'eStory - 404', 'estory') ),
            'estory-contact' => array( 'label' => __( 'eStory - Contact', 'estory') ),
            'estory-sidebar' => array( 'label' => __( 'eStory - Sidebar', 'estory') )
        )
    );

    foreach ( $block_pattern_categories as $name => $properties ) {
        register_block_pattern_category( $name, $properties );
    }

    // Array of block pattern names.
    $block_patterns = array(
        'header/default',
        'search/default',
        'search/style-1',
        'footer/default',
        'footer/style-1',
        'home/default',
        'home/style-1',
        'home/style-2',
        'query/default',
        '404/default',
        'contact/default',
        'sidebar/default'
    );

    foreach ( $block_patterns as $block_pattern ) {
        $pattern_file = get_theme_file_path( '/inc/patterns/' . $block_pattern . '.php' );

        register_block_pattern(
            'estory/' . $block_pattern,
            require $pattern_file
        );
    }
}

add_action( 'init', 'estory_register_block_patterns', 9 );
