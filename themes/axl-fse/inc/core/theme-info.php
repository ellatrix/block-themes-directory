<?php
/**
 * Add theme page
 */
function axl_fse_menu() {
	add_theme_page( esc_html__( 'Axl Fse Theme', 'axl-fse' ), esc_html__( 'Axl Fse Theme', 'axl-fse' ), 'edit_theme_options', 'axl-fse-info', 'axl_fse_theme_page_display' );
}
add_action( 'admin_menu', 'axl_fse_menu' );

/**
 * Display About page
 */
function axl_fse_theme_page_display() {
	$theme = wp_get_theme();

	if ( is_child_theme() ) {
		$theme = wp_get_theme()->parent();
	}

	include_once 'templates/theme-info.php';
}

function axl_fse_admin_plugin_notice() {
	$hide_notice_bar = get_user_meta( get_current_user_id(), 'axl_fse_hide_theme_info_noticebar', true );
	if ( '1' !== $hide_notice_bar ) {
		include 'templates/admin-plugin-notice.php';
	}
}
add_action( 'admin_notices', 'axl_fse_admin_plugin_notice' );


function axl_fse_hide_theme_info_noticebar() {
	check_ajax_referer( 'axl_fse-nonce', 'axl-fse-nonce-name' );
	if ( ! current_user_can( 'edit_theme_options' ) ) {
		wp_die( -1 );
	}

	update_user_meta( get_current_user_id(), 'axl_fse_hide_theme_info_noticebar', 1 );

	wp_die( 1 );
}
add_action( 'wp_ajax_axl_fse_hide_theme_info_noticebar', 'axl_fse_hide_theme_info_noticebar' );
