<?php
function carlina_support() {
    // Add support for more opinionated block styles
    add_theme_support( 'wp-block-styles' );
    // Add support for customizing the line height
    add_theme_support( 'custom-line-height' );
    // Enqueue editor styles.
    add_editor_style( 'style.css' );

    $defaults = array(
        'default-color'          => '',
        'default-image'          => '',
        'default-repeat'         => '',
        'default-position-x'     => '',
        'default-attachment'     => '',
        'wp-head-callback'       => '_custom_background_cb',
        'admin-head-callback'    => '',
        'admin-preview-callback' => ''
    );
    add_theme_support( 'custom-background', $defaults );
}
add_action( 'after_setup_theme', 'carlina_support' );

function carlina_scripts() {
    // Main stylesheet
    wp_enqueue_style( 'carlina-style',get_template_directory_uri() . '/style.css', array(), filemtime(get_template_directory() . '/style.css' ));
    // Main javascript
    wp_enqueue_script( 'carlina-script',get_template_directory_uri() .'/script.js?defer', array(), filemtime(get_template_directory() . '/script.js' ));
    // Main fonts
    wp_enqueue_style( 'carlina-google-fonts--abrilfatface','https://fonts.googleapis.com/css2?family=Abril+Fatface&display=swap' );
    wp_enqueue_style( 'carlina-google-fonts--roboto','https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;1,100;1,300;1,400;1,500&display=swap' );
}

// Add the scripts and fonts
add_action( 'wp_enqueue_scripts', 'carlina_scripts' );

function carlina_googlefonts() {
    add_editor_style( 'https://fonts.googleapis.com/css2?family=Abril+Fatface&display=swap' );
    add_editor_style( 'https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;1,100;1,300;1,400;1,500&display=swap' );
}

add_action( 'admin_init', 'carlina_googlefonts' );


// Add block patterns
include get_template_directory() . '/inc/block-patterns.php';
