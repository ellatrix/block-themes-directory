<?php
/**
 * Block styles.
 *
 * @package it-firm
 * @since 1.0.0
 */

/**
 * Register block styles
 *
 * @since 1.0.0
 *
 * @return void
 */
if(!function_exists("it_firm_register_block_styles")){
    function it_firm_register_block_styles() {

        register_block_style( // phpcs:ignore WPThemeReview.PluginTerritory.ForbiddenFunctions.editor_blocks_register_block_style
            'core/group',
            array(
                'name'  => 'it-firm-hide-mobile',
                'label' => __( 'Hide on Mobile', 'it-firm' ),
            )
        );

    }
}

add_action( 'init', 'it_firm_register_block_styles' );