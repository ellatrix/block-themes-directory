<?php
/**
 * Block patterns
 *
 * @package it-firm
 * @since 1.0.0
 */


/**
 * Registers block patterns and block pattern categories.
 *
 * @since 1.0.0
 *
 * @return void
 */
if(!function_exists("it_firm_register_block_patterns")){
    function it_firm_register_block_patterns() {
    
        /**
         * Register an block pattern category.
         *
         * @since 1.0.0
         */
    
        register_block_pattern_category(
            'it-firm-hero',
            array( 'label' => __( 'IT Firm - Heros', 'it-firm' ) )
        );
    
        register_block_pattern_category(
            'it-firm-counter',
            array( 'label' => __( 'IT Firm - Counters', 'it-firm' ) )
        );

        register_block_pattern_category(
            'it-firm-crew',
            array( 'label' => __( 'IT Firm - Crew', 'it-firm' ) )
        );

        register_block_pattern_category(
            'it-firm-pricing',
            array( 'label' => __( 'IT Firm - Pricing', 'it-firm' ) )
        );

        register_block_pattern_category(
            'it-firm-services',
            array( 'label' => __( 'IT Firm - Services', 'it-firm' ) )
        );

        register_block_pattern_category(
            'it-firm-testimonial',
            array( 'label' => __( 'IT Firm - Testimonial', 'it-firm' ) )
        );

        register_block_pattern_category(
            'it-firm-footer',
            array( 'label' => __( 'IT Firm - Footer Widgets', 'it-firm' ) )
        );

        register_block_pattern_category(
            'it-firm-misc',
            array( 'label' => __( 'IT Firm - Miscellaneous', 'it-firm' ) )
        );
    
        // Array of block pattern names.
        $block_patterns = array(
            'counter/1',
            'counter/2',
            'counter/3',
            'crew/1',
            'crew/2',
            'crew/main',
            'hero/1',
            'hero/2',
            'hero/3',
            'hero/main',
            'pricing/1',
            'pricing/2',
            'pricing/3',
            'pricing/main',
            'services/1',
            'services/2',
            'services/3',
            'services/main',
            'services/main2',
            'testimonial/1',
            'testimonial/2',
            'testimonial/3',
            'testimonial/main',
            'footer/info',
            'misc/about',
            'misc/expertise',
            'misc/port',
            'misc/why',
            'misc/top-bar',
        );
    
        foreach ( $block_patterns as $block_pattern ) {
            $pattern_file = get_theme_file_path( 'grigora_patterns/' . $block_pattern . '.php' );
            register_block_pattern(
                'it-firm/' . $block_pattern,
                require $pattern_file
            );
        }
    
    }
}

add_action( 'init', 'it_firm_register_block_patterns', 9 );