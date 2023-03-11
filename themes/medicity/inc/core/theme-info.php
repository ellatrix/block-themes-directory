<?php
/**
 * Add theme page
 */
function medicity_menu() {
	add_theme_page( esc_html__( 'Medicity Theme', 'medicity' ), esc_html__( 'Medicity Theme', 'medicity' ), 'edit_theme_options', 'medicity-info', 'medicity_theme_page_display' );
}
add_action( 'admin_menu', 'medicity_menu' );

/**
 * Display About page
 */
function medicity_theme_page_display() {
	$theme = wp_get_theme();

	if ( is_child_theme() ) {
		$theme = wp_get_theme()->parent();
	}

	include_once 'templates/theme-info.php';
}

function medicity_admin_plugin_notice() {
	$hide_notice_bar = get_user_meta( get_current_user_id(), 'medicity_hide_theme_info_noticebar', true );
	if ( '1' !== $hide_notice_bar ) {
		include 'templates/admin-plugin-notice.php';
	}
}
add_action( 'admin_notices', 'medicity_admin_plugin_notice' );


function medicity_hide_theme_info_noticebar() {
	check_ajax_referer( 'medicity-nonce', 'medicity-nonce-name' );
	if ( ! current_user_can( 'edit_theme_options' ) ) {
		wp_die( -1 );
	}

	update_user_meta( get_current_user_id(), 'medicity_hide_theme_info_noticebar', 1 );

	wp_die( 1 );
}
add_action( 'wp_ajax_medicity_hide_theme_info_noticebar', 'medicity_hide_theme_info_noticebar' );
