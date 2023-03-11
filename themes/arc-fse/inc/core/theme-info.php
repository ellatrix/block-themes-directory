<?php
/**
 * Add theme page
 */
function arc_fse_menu() {
	add_theme_page( esc_html__( 'Arc Fse Theme', 'arc-fse' ), esc_html__( 'Arc Fse Theme', 'arc-fse' ), 'edit_theme_options', 'arc-fse-info', 'arc_fse_theme_page_display' );
}
add_action( 'admin_menu', 'arc_fse_menu' );

/**
 * Display About page
 */
function arc_fse_theme_page_display() {
	$theme = wp_get_theme();

	if ( is_child_theme() ) {
		$theme = wp_get_theme()->parent();
	}

	include_once 'templates/theme-info.php';
}

function arc_fse_admin_plugin_notice() {
	$hide_notice_bar = get_user_meta( get_current_user_id(), 'arc_fse_hide_theme_info_noticebar', true );
	if ( '1' !== $hide_notice_bar ) {
		include 'templates/admin-plugin-notice.php';
	}
}
add_action( 'admin_notices', 'arc_fse_admin_plugin_notice' );


function arc_fse_hide_theme_info_noticebar() {
	check_ajax_referer( 'arc_fse-nonce', 'arc-fse-nonce-name' );
	if ( ! current_user_can( 'edit_theme_options' ) ) {
		wp_die( -1 );
	}

	update_user_meta( get_current_user_id(), 'arc_fse_hide_theme_info_noticebar', 1 );

	wp_die( 1 );
}
add_action( 'wp_ajax_arc_fse_hide_theme_info_noticebar', 'arc_fse_hide_theme_info_noticebar' );
