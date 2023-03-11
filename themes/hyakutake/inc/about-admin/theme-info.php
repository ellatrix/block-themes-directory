<?php
/**
 * Add theme page
 */
function Hyakutake_menu() {
	add_theme_page( esc_html__( 'Hyakutake Theme', 'hyakutake' ), esc_html__( 'Hyakutake Theme', 'hyakutake' ), 'edit_theme_options', 'hyakutake-info', 'Hyakutake_theme_page_display' );
}
add_action( 'admin_menu', 'Hyakutake_menu' );

/**
 * Display About page
 */
function Hyakutake_theme_page_display() {
    require get_parent_theme_file_path( '/inc/about-admin/templates/theme-info.php' );
}

function Hyakutake_admin_plugin_notice() {
    require get_parent_theme_file_path( '/inc/about-admin/templates/admin-plugin-notice.php' );
}
add_action( 'admin_notices', 'Hyakutake_admin_plugin_notice' );

/**
 * Enqueue admin scripts and styles.
 */
function Hyakutake_admin_scripts() {
	
    wp_enqueue_style(
        'hyakutake-admin-style',
        get_template_directory_uri() . '/assets/css/admin-style.css',
        array(),
        hyakutake_file_version( '/assets/css/admin-style.css' )
    );
    
}
add_action( 'admin_enqueue_scripts', 'Hyakutake_admin_scripts' );
