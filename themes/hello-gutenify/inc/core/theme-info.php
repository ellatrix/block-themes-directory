<?php
/**
 * Add theme page
 */
function hello_gutenify_menu() {
	add_theme_page( esc_html__( 'Hello Gutenify', 'hello-gutenify' ), esc_html__( 'Gutenify Theme', 'hello-gutenify' ), 'edit_theme_options', 'hello-gutenify-info', 'hello_gutenify_theme_page_display' );
}
add_action( 'admin_menu', 'hello_gutenify_menu' );

/**
 * Display About page
 */
function hello_gutenify_theme_page_display() {
	$theme = wp_get_theme();

	if ( is_child_theme() ) {
		$theme = wp_get_theme()->parent();
	}

	include_once 'templates/theme-info.php';
}

function hello_gutenify_admin_plugin_notice() {
	$hide_notice_bar = get_user_meta( get_current_user_id(), 'hello_gutenify_hide_theme_info_noticebar', true );
	if ( '1' !== $hide_notice_bar ) {
		wp_enqueue_style( 'hello-gutenify-admin-style' );
		wp_enqueue_script( 'hello-gutenify-admin' );
		include 'templates/admin-plugin-notice.php';
	}
}
add_action( 'admin_notices', 'hello_gutenify_admin_plugin_notice' );


function hello_gutenify_hide_theme_info_noticebar() {
	check_ajax_referer( 'hello_gutenify-nonce', 'hello_gutenify-nonce-name' );
	if ( ! current_user_can( 'edit_theme_options' ) ) {
		wp_die( -1 );
	}

	update_user_meta( get_current_user_id(), 'hello_gutenify_hide_theme_info_noticebar', 1 );

	wp_die( 1 );
}
add_action( 'wp_ajax_hello_gutenify_hide_theme_info_noticebar', 'hello_gutenify_hide_theme_info_noticebar' );
