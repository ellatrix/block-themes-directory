<?php
/**
 * Add theme page
 */
function gutenify_blog_menu() {
	add_theme_page( esc_html__( 'Gutenify Blog', 'gutenify-blog' ), esc_html__( 'Gutenify Theme', 'gutenify-blog' ), 'edit_theme_options', 'gutenify-blog-info', 'gutenify_blog_theme_page_display' );
}
add_action( 'admin_menu', 'gutenify_blog_menu' );

/**
 * Display About page
 */
function gutenify_blog_theme_page_display() {
	$theme = wp_get_theme();

	if ( is_child_theme() ) {
		$theme = wp_get_theme()->parent();
	}

	include_once 'templates/theme-info.php';
}

function gutenify_blog_admin_plugin_notice() {
	$hide_notice_bar = get_user_meta( get_current_user_id(), 'gutenify_blog_hide_theme_info_noticebar', true );
	if ( '1' !== $hide_notice_bar ) {
		wp_enqueue_style( 'gutenify-blog-admin-style' );
		wp_enqueue_script( 'gutenify-blog-admin' );
		include 'templates/admin-plugin-notice.php';
	}
}
add_action( 'admin_notices', 'gutenify_blog_admin_plugin_notice' );


function gutenify_blog_hide_theme_info_noticebar() {
	check_ajax_referer( 'gutenify_blog-nonce', 'gutenify_blog-nonce-name' );
	if ( ! current_user_can( 'edit_theme_options' ) ) {
		wp_die( -1 );
	}

	update_user_meta( get_current_user_id(), 'gutenify_blog_hide_theme_info_noticebar', 1 );

	wp_die( 1 );
}
add_action( 'wp_ajax_gutenify_blog_hide_theme_info_noticebar', 'gutenify_blog_hide_theme_info_noticebar' );
