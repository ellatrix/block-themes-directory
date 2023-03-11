<?php
$screen = get_current_screen();
if ( ! empty( $screen->base ) && 'appearance_page_gutenify-medical-info' === $screen->base ) {
	return false;
}

$gutenify_is_installed = file_exists( plugin_dir_path( 'gutenify' ) );
$gutenify_is_active = in_array( 'gutenify/gutenify.php', apply_filters( 'active_plugins', get_option( 'active_plugins' ) ) );

$show_notice = ! ( $gutenify_is_installed && $gutenify_is_active );

if ( ! $show_notice ) {
	return false;
}
?>
<div class="notice notice-success is-dismissible gutenify-medical-admin-notice">
	<div class="gutenify-medical-admin-notice-wrapper">
		<h2><?php esc_html_e( 'Hey, Thank you for installing ', 'gutenify-medical' ); ?> <?php esc_html_e( 'Gutenify Medical Theme!', 'gutenify-medical' ); ?></h2>
		<p><?php esc_html_e( 'We recommend installing plugin: ', 'gutenify-medical' ); ?> <strong><?php esc_html_e( 'Gutenify', 'gutenify-medical' ); ?></strong></p>
		<p><strong><?php esc_html_e( 'Gutenify', 'gutenify-medical' ); ?></strong> <?php esc_html_e( 'provides multiple site demo and add advance features to your site.', 'gutenify-medical' ); ?></p>
		<a href="<?php echo esc_url( admin_url( 'themes.php?page=gutenify-medical-info' ) ); ?>" class="gutenify-medical-admin-notice-primary-button"><?php esc_html_e( 'Get Site Demo', 'gutenify-medical' ); ?></a>
		<a href="<?php echo esc_url( 'https://gutenify.com'); ?>" target="_blank"><?php esc_html_e( 'Learn more about Gutenify', 'gutenify-medical' ); ?></a>
	</div>
</div>
<?php
