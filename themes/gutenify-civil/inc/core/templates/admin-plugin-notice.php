<?php
$screen = get_current_screen();
if ( ! empty( $screen->base ) && 'appearance_page_gutenify-civil-info' === $screen->base ) {
	return false;
}

$gutenify_is_installed = file_exists( plugin_dir_path( 'gutenify' ) );
$gutenify_is_active = in_array( 'gutenify/gutenify.php', apply_filters( 'active_plugins', get_option( 'active_plugins' ) ) );

$show_notice = ! ( $gutenify_is_installed && $gutenify_is_active );

if ( ! $show_notice ) {
	return false;
}
?>
<div class="notice notice-success is-dismissible gutenify-civil-admin-notice">
	<div class="gutenify-civil-admin-notice-wrapper">
		<h2><?php esc_html_e( 'Hey, Thank you for installing ', 'gutenify-civil' ); ?> <?php esc_html_e( 'Gutenify Civil Theme!', 'gutenify-civil' ); ?></h2>
		<p><?php esc_html_e( 'We recommend installing plugin: ', 'gutenify-civil' ); ?> <strong><?php esc_html_e( 'Gutenify', 'gutenify-civil' ); ?></strong></p>
		<p><strong><?php esc_html_e( 'Gutenify', 'gutenify-civil' ); ?></strong> <?php esc_html_e( 'provides multiple site demo and add advance features to your site.', 'gutenify-civil' ); ?></p>
		<a href="<?php echo esc_url( admin_url( 'themes.php?page=gutenify-civil-info' ) ); ?>" class="gutenify-civil-admin-notice-primary-button"><?php esc_html_e( 'Get Site Demo', 'gutenify-civil' ); ?></a>
		<a href="<?php echo esc_url( 'https://gutenify.com'); ?>" target="_blank"><?php esc_html_e( 'Learn more about Gutenify', 'gutenify-civil' ); ?></a>
	</div>
</div>
<?php
