<?php
/**
 * Add theme page
 */
function gutenify_news_menu() {
	add_theme_page( esc_html__( 'Gutenify News', 'gutenify-news' ), esc_html__( 'Gutenify Theme', 'gutenify-news' ), 'edit_theme_options', 'gutenify-news-info', 'gutenify_news_theme_page_display' );
}
add_action( 'admin_menu', 'gutenify_news_menu' );

/**
 * Display About page
 */
function gutenify_news_theme_page_display() {
	$theme = wp_get_theme();

	if ( is_child_theme() ) {
		$theme = wp_get_theme()->parent();
	}

	include_once 'templates/theme-info.php';
}

function gutenify_news_admin_plugin_notice() {
	$hide_notice_bar = get_user_meta( get_current_user_id(), 'gutenify_news_hide_theme_info_noticebar', true );
	if ( '1' !== $hide_notice_bar ) {
		wp_enqueue_style( 'gutenify-news-admin-style' );
		wp_enqueue_script( 'gutenify-news-admin' );
		include 'templates/admin-plugin-notice.php';
	}
}
add_action( 'admin_notices', 'gutenify_news_admin_plugin_notice' );


function gutenify_news_hide_theme_info_noticebar() {
	check_ajax_referer( 'gutenify_news-nonce', 'gutenify_news-nonce-name' );
	if ( ! current_user_can( 'edit_theme_options' ) ) {
		wp_die( -1 );
	}

	update_user_meta( get_current_user_id(), 'gutenify_news_hide_theme_info_noticebar', 1 );

	wp_die( 1 );
}
add_action( 'wp_ajax_gutenify_news_hide_theme_info_noticebar', 'gutenify_news_hide_theme_info_noticebar' );
