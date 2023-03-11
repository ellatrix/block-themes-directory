<?php

// Set Default font for the child theme.
if(!function_exists("grigora_it_firm_setup")){
    function grigora_it_firm_setup() {
        // load translations
        load_theme_textdomain( 'it-firm' );

        // Set default typography for theme
        $typoflag = get_option('grigora_blocks_it_firm_typography_set', false);
        if(!$typoflag){
            update_option('grigora_blocks_typography', array(
                array(
                    "font" => "Open Sans",
                    "target" => "body"
                ),
                array(
                    "font" => "Hanuman",
                    "target" => "h*"
                ),
            ));
            update_option('grigora_blocks_it_firm_typography_set', true);
        }    
    }
}

// Change Excerpt Length
if(!function_exists("grigora_it_firm_excerpt_length")){
    function grigora_it_firm_excerpt_length( $length ) {
        if ( is_admin() ){
            return $length;
        }
        return 15;
    }
}

// Block pattern and block category examples.
require_once get_theme_file_path( 'inc/register-block-patterns-child.php' );

// Block Styles
require_once get_theme_file_path( 'inc/register-block-styles-child.php' );

// Smart Styles
require_once get_theme_file_path( 'inc/smart-styles-child.php' );

add_filter( 'excerpt_length', 'grigora_it_firm_excerpt_length');
add_action( 'after_setup_theme', 'grigora_it_firm_setup' );