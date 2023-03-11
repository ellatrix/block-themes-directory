<?php
/**
 * Add theme page
 */
function gokyo_fse_menu() {
	add_theme_page( esc_html__( 'Gokyo Fse Theme', 'gokyo-fse' ), esc_html__( 'Gokyo Fse Theme', 'gokyo-fse' ), 'edit_theme_options', 'gokyo-fse-info', 'gokyo_fse_theme_page_display' );
}
add_action( 'admin_menu', 'gokyo_fse_menu' );

/**
 * Display About page
 */
function gokyo_fse_theme_page_display() {
	$theme = wp_get_theme();

	if ( is_child_theme() ) {
		$theme = wp_get_theme()->parent();
	}

	include_once 'templates/theme-info.php';
}

function gokyo_fse_admin_plugin_notice() {
	$hide_notice_bar = get_user_meta( get_current_user_id(), 'gokyo_fse_hide_theme_info_noticebar', true );
	if ( '1' !== $hide_notice_bar ) {
		include 'templates/admin-plugin-notice.php';
	}
}
add_action( 'admin_notices', 'gokyo_fse_admin_plugin_notice' );


function gokyo_fse_hide_theme_info_noticebar() {
	check_ajax_referer( 'gokyo_fse-nonce', 'gokyo-fse-nonce-name' );
	if ( ! current_user_can( 'edit_theme_options' ) ) {
		wp_die( -1 );
	}

	update_user_meta( get_current_user_id(), 'gokyo_fse_hide_theme_info_noticebar', 1 );

	wp_die( 1 );
}
add_action( 'wp_ajax_gokyo_fse_hide_theme_info_noticebar', 'gokyo_fse_hide_theme_info_noticebar' );
