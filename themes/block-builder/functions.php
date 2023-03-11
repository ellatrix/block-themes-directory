<?php
add_action( 'after_setup_theme', 'blockbuilder_setup' );
if ( !function_exists( 'blockbuilder_setup' ) ) :
function blockbuilder_setup() {
add_theme_support( 'wp-block-styles' );
add_theme_support( 'core-block-patterns' );
add_theme_support( 'widgets-block-editor' );
add_theme_support( 'custom-spacing' );
add_theme_support( 'custom-line-height' );
add_theme_support( 'custom-units' );
add_theme_support( 'align-wide' );
add_theme_support( 'woocommerce' );
add_editor_style( 'editor-style.css' );
}
endif;

esc_html__( 'text-domain-fix', 'block-builder' );