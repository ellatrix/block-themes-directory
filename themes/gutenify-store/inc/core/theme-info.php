<?php
/**
 * Add theme page
 */
function gutenify_store_menu() {
	add_theme_page( esc_html__( 'Gutenify Store', 'gutenify-store' ), esc_html__( 'Gutenify Theme', 'gutenify-store' ), 'edit_theme_options', 'gutenify-store-info', 'gutenify_store_theme_page_display' );
}
add_action( 'admin_menu', 'gutenify_store_menu' );

/**
 * Display About page
 */
function gutenify_store_theme_page_display() {
	$theme = wp_get_theme();

	if ( is_child_theme() ) {
		$theme = wp_get_theme()->parent();
	}

	include_once 'templates/theme-info.php';
}

function gutenify_store_admin_plugin_notice() {
	$hide_notice_bar = get_user_meta( get_current_user_id(), 'gutenify_store_hide_theme_info_noticebar', true );
	if ( '1' !== $hide_notice_bar ) {
		wp_enqueue_style( 'gutenify-store-admin-style' );
		wp_enqueue_script( 'gutenify-store-admin' );
		include 'templates/admin-plugin-notice.php';
	}
}
add_action( 'admin_notices', 'gutenify_store_admin_plugin_notice' );


function gutenify_store_hide_theme_info_noticebar() {
	check_ajax_referer( 'gutenify_store-nonce', 'gutenify_store-nonce-name' );
	if ( ! current_user_can( 'edit_theme_options' ) ) {
		wp_die( -1 );
	}

	update_user_meta( get_current_user_id(), 'gutenify_store_hide_theme_info_noticebar', 1 );

	wp_die( 1 );
}
add_action( 'wp_ajax_gutenify_store_hide_theme_info_noticebar', 'gutenify_store_hide_theme_info_noticebar' );
