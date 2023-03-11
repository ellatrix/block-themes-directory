<?php
/**
 * Add theme page
 */
function exo_menu() {
	add_theme_page( esc_html__( 'Exo Theme', 'exo' ), esc_html__( 'Exo Theme', 'exo' ), 'edit_theme_options', 'exo-info', 'exo_theme_page_display' );
}
add_action( 'admin_menu', 'exo_menu' );

/**
 * Display About page
 */
function exo_theme_page_display() {
	$theme = wp_get_theme();

	if ( is_child_theme() ) {
		$theme = wp_get_theme()->parent();
	}

	include_once 'templates/theme-info.php';
}

function exo_admin_plugin_notice() {
	$hide_notice_bar = get_user_meta( get_current_user_id(), 'exo_hide_theme_info_noticebar', true );
	if ( '1' !== $hide_notice_bar ) {
		include 'templates/admin-plugin-notice.php';
	}
}
add_action( 'admin_notices', 'exo_admin_plugin_notice' );


function exo_hide_theme_info_noticebar() {
	check_ajax_referer( 'exo-nonce', 'exo-nonce-name' );
	if ( ! current_user_can( 'edit_theme_options' ) ) {
		wp_die( -1 );
	}

	update_user_meta( get_current_user_id(), 'exo_hide_theme_info_noticebar', 1 );

	wp_die( 1 );
}
add_action( 'wp_ajax_exo_hide_theme_info_noticebar', 'exo_hide_theme_info_noticebar' );
