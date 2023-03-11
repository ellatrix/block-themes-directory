<?php
/**
 * Add theme page
 */
function gutenify_photography_menu() {
	add_theme_page( esc_html__( 'Gutenify Photography', 'gutenify-photography' ), esc_html__( 'Gutenify Theme', 'gutenify-photography' ), 'edit_theme_options', 'gutenify-photography-info', 'gutenify_photography_theme_page_display' );
}
add_action( 'admin_menu', 'gutenify_photography_menu' );

/**
 * Display About page
 */
function gutenify_photography_theme_page_display() {
	$theme = wp_get_theme();

	if ( is_child_theme() ) {
		$theme = wp_get_theme()->parent();
	}

	include_once 'templates/theme-info.php';
}

function gutenify_photography_admin_plugin_notice() {
	$hide_notice_bar = get_user_meta( get_current_user_id(), 'gutenify_photography_hide_theme_info_noticebar', true );
	if ( '1' !== $hide_notice_bar ) {
		wp_enqueue_style( 'gutenify-photography-admin-style' );
		wp_enqueue_script( 'gutenify-photography-admin' );
		include 'templates/admin-plugin-notice.php';
	}
}
add_action( 'admin_notices', 'gutenify_photography_admin_plugin_notice' );


function gutenify_photography_hide_theme_info_noticebar() {
	check_ajax_referer( 'gutenify_photography-nonce', 'gutenify_photography-nonce-name' );
	if ( ! current_user_can( 'edit_theme_options' ) ) {
		wp_die( -1 );
	}

	update_user_meta( get_current_user_id(), 'gutenify_photography_hide_theme_info_noticebar', 1 );

	wp_die( 1 );
}
add_action( 'wp_ajax_gutenify_photography_hide_theme_info_noticebar', 'gutenify_photography_hide_theme_info_noticebar' );
