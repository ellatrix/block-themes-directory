<?php
/**
 * Add theme page
 */
function gutenify_university_menu() {
	add_theme_page( esc_html__( 'Gutenify University', 'gutenify-university' ), esc_html__( 'Gutenify Theme', 'gutenify-university' ), 'edit_theme_options', 'gutenify-university-info', 'gutenify_university_theme_page_display' );
}
add_action( 'admin_menu', 'gutenify_university_menu' );

/**
 * Display About page
 */
function gutenify_university_theme_page_display() {
	$theme = wp_get_theme();

	if ( is_child_theme() ) {
		$theme = wp_get_theme()->parent();
	}

	include_once 'templates/theme-info.php';
}

function gutenify_university_admin_plugin_notice() {
	$hide_notice_bar = get_user_meta( get_current_user_id(), 'gutenify_university_hide_theme_info_noticebar', true );
	if ( '1' !== $hide_notice_bar ) {
		wp_enqueue_style( 'gutenify-university-admin-style' );
		wp_enqueue_script( 'gutenify-university-admin' );
		include 'templates/admin-plugin-notice.php';
	}
}
add_action( 'admin_notices', 'gutenify_university_admin_plugin_notice' );


function gutenify_university_hide_theme_info_noticebar() {
	check_ajax_referer( 'gutenify_university-nonce', 'gutenify_university-nonce-name' );
	if ( ! current_user_can( 'edit_theme_options' ) ) {
		wp_die( -1 );
	}

	update_user_meta( get_current_user_id(), 'gutenify_university_hide_theme_info_noticebar', 1 );

	wp_die( 1 );
}
add_action( 'wp_ajax_gutenify_university_hide_theme_info_noticebar', 'gutenify_university_hide_theme_info_noticebar' );
