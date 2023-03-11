<?php
$screen = get_current_screen();
if ( ! empty( $screen->base ) && 'appearance_page_gutenify-magazine-info' === $screen->base ) {
	return false;
}

$gutenify_is_installed = file_exists( plugin_dir_path( 'gutenify' ) );
$gutenify_is_active = in_array( 'gutenify/gutenify.php', apply_filters( 'active_plugins', get_option( 'active_plugins' ) ) );

$show_notice = ! ( $gutenify_is_installed && $gutenify_is_active );

if ( ! $show_notice ) {
	return false;
}
?>
<div class="notice notice-success is-dismissible gutenify-magazine-admin-notice">
	<div class="gutenify-magazine-admin-notice-wrapper">
		<h2><?php esc_html_e( 'Hey, Thank you for installing ', 'gutenify-magazine' ); ?> <?php esc_html_e( 'Gutenify Magazine Theme!', 'gutenify-magazine' ); ?></h2>
		<p><?php esc_html_e( 'We recommend installing plugin: ', 'gutenify-magazine' ); ?> <strong><?php esc_html_e( 'Gutenify', 'gutenify-magazine' ); ?></strong></p>
		<p><strong><?php esc_html_e( 'Gutenify', 'gutenify-magazine' ); ?></strong> <?php esc_html_e( 'provides multiple site demo and add advance features to your site.', 'gutenify-magazine' ); ?></p>
		<a href="<?php echo esc_url( admin_url( 'themes.php?page=gutenify-magazine-info' ) ); ?>" class="gutenify-magazine-admin-notice-primary-button"><?php esc_html_e( 'Get Site Demo', 'gutenify-magazine' ); ?></a>
		<a href="<?php echo esc_url( 'https://gutenify.com'); ?>" target="_blank"><?php esc_html_e( 'Learn more about Gutenify', 'gutenify-magazine' ); ?></a>
	</div>
</div>
<?php
