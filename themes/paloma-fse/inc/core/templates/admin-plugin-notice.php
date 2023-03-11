<?php
$screen = get_current_screen();
//
if ( ! empty( $screen->base ) && ( 'appearance_page_paloma-fse-info' === $screen->base || 'appearance_page_olive-one-click-demo-import' === $screen->base ) ) {
	return false;
}
// Current user object
$user = wp_get_current_user();
// Get display name from user object
$display_name = $user->display_name;
$pro_purchase_url = "https://olivethemes.com/wordpress-themes/paloma-fse-pro/";
?>
<div class="notice notice-info is-dismissible paloma-fse-admin-notice">
	<div class="paloma-fse-admin-notice-wrapper">
		<h2><?php esc_html_e( 'Howdy, ', 'paloma-fse' ); ?> <?php echo $display_name; ?></h2>
		<h3><?php esc_html_e( 'Welcome to', 'paloma-fse' ); ?> <?php esc_html_e( 'Paloma FSE Theme!', 'paloma-fse' ); ?></h3>
		<p><?php esc_html_e( 'Explore beautiful hand-crafted site templates and setup your site in few clicks.', 'paloma-fse' ); ?></p>
		<a href="<?php echo esc_url( admin_url( 'themes.php?page=paloma-fse-info' ) ); ?>" class="paloma-fse-admin-notice-primary-button"><?php esc_html_e( 'Explore Now!', 'paloma-fse' ); ?></a>
		<a href="<?php echo esc_url( admin_url( 'themes.php?page=paloma-fse-info' ) ); ?>"><?php esc_html_e( 'Learn more about Paloma FSE Pro Theme', 'paloma-fse' ); ?></a>
	</div>
</div>
<?php
