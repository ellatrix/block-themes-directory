<?php
$screen = get_current_screen();
//
if ( ! empty( $screen->base ) && ( 'appearance_page_gokyo-fse-info' === $screen->base || 'appearance_page_olive-one-click-demo-import' === $screen->base ) ) {
	return false;
}
// Current user object
$user = wp_get_current_user();
// Get display name from user object
$display_name = $user->display_name;
$pro_purchase_url = "https://olivethemes.com/wordpress-themes/gokyo-pro/";
?>
<div class="notice notice-info is-dismissible gokyo-fse-admin-notice">
	<div class="gokyo-fse-admin-notice-wrapper">
		<h2><?php esc_html_e( 'Howdy, ', 'gokyo-fse' ); ?> <?php echo $display_name; ?></h2>
		<h3><?php esc_html_e( 'Welcome to', 'gokyo-fse' ); ?> <?php esc_html_e( 'Gokyo Fse Theme!', 'gokyo-fse' ); ?></h3>
		<p><?php esc_html_e( 'Explore beautiful hand-crafted site templates and setup your site in few clicks.', 'gokyo-fse' ); ?></p>
		<a href="<?php echo esc_url( admin_url( 'themes.php?page=gokyo-fse-info' ) ); ?>" class="gokyo-fse-admin-notice-primary-button"><?php esc_html_e( 'Explore Now!', 'gokyo-fse' ); ?></a>
		<a href="<?php echo esc_url( admin_url( 'themes.php?page=gokyo-fse-info' ) ); ?>"><?php esc_html_e( 'Learn more about Gokyo Pro Theme', 'gokyo-fse' ); ?></a>
	</div>
</div>
<?php
