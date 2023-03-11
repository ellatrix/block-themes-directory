<?php
$screen = get_current_screen();
if ( ! empty( $screen->base ) && 'appearance_page_hello-gutenify-info' === $screen->base ) {
	return false;
}

$gutenify_is_installed = file_exists( plugin_dir_path( 'gutenify' ) );
$gutenify_is_active = in_array( 'gutenify/gutenify.php', apply_filters( 'active_plugins', get_option( 'active_plugins' ) ) );

$show_notice = ! ( $gutenify_is_installed && $gutenify_is_active );

if ( ! $show_notice ) {
	return false;
}
?>
<div class="notice notice-success is-dismissible hello-gutenify-admin-notice">
	<div class="hello-gutenify-admin-notice-wrapper">
		<h2><?php esc_html_e( 'Hey, Thank you for installing ', 'hello-gutenify' ); ?> <?php esc_html_e( 'Hello Gutenify Theme!', 'hello-gutenify' ); ?></h2>
		<p><?php esc_html_e( 'We recommend installing plugin: ', 'hello-gutenify' ); ?> <strong><?php esc_html_e( 'Gutenify', 'hello-gutenify' ); ?></strong></p>
		<p><strong><?php esc_html_e( 'Gutenify', 'hello-gutenify' ); ?></strong> <?php esc_html_e( 'provides multiple site demo and add advance features to your site.', 'hello-gutenify' ); ?></p>
		<a href="<?php echo esc_url( admin_url( 'themes.php?page=hello-gutenify-info' ) ); ?>" class="hello-gutenify-admin-notice-primary-button"><?php esc_html_e( 'Get Site Demo', 'hello-gutenify' ); ?></a>
		<a href="<?php echo esc_url( 'https://gutenify.com'); ?>" target="_blank"><?php esc_html_e( 'Learn more about Gutenify', 'hello-gutenify' ); ?></a>
	</div>
</div>
<?php
