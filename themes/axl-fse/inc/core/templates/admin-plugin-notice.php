<?php
$screen = get_current_screen();
//
if ( ! empty( $screen->base ) && ( 'appearance_page_axl-fse-info' === $screen->base || 'appearance_page_olive-one-click-demo-import' === $screen->base ) ) {
	return false;
}
// Current user object
$user = wp_get_current_user();
// Get display name from user object
$display_name = $user->display_name;
$pro_purchase_url = "https://olivethemes.com/wordpress-themes/axl-pro/";
?>
<div class="notice notice-info is-dismissible axl-fse-admin-notice">
	<div class="axl-fse-admin-notice-wrapper">
		<h2><?php esc_html_e( 'Howdy, ', 'axl-fse' ); ?> <?php echo $display_name; ?></h2>
		<h3><?php esc_html_e( 'Welcome to', 'axl-fse' ); ?> <?php esc_html_e( 'Axl Fse Theme!', 'axl-fse' ); ?></h3>
		<p><?php esc_html_e( 'Explore beautiful hand-crafted site templates and setup your site in few clicks.', 'axl-fse' ); ?></p>
		<a href="<?php echo esc_url( admin_url( 'themes.php?page=axl-fse-info' ) ); ?>" class="axl-fse-admin-notice-primary-button"><?php esc_html_e( 'Explore Now!', 'axl-fse' ); ?></a>
		<a href="<?php echo esc_url( admin_url( 'themes.php?page=axl-fse-info' ) ); ?>"><?php esc_html_e( 'Learn more about Axl Pro Theme', 'axl-fse' ); ?></a>
	</div>
</div>
<?php
