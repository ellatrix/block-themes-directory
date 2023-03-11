<?php
$screen = get_current_screen();
//
if ( ! empty( $screen->base ) && ( 'appearance_page_arc-fse-info' === $screen->base || 'appearance_page_olive-one-click-demo-import' === $screen->base ) ) {
	return false;
}
// Current user object
$user = wp_get_current_user();
// Get display name from user object
$display_name = $user->display_name;
$pro_purchase_url = "https://olivethemes.com/wordpress-themes/arc-pro/";
?>
<div class="notice notice-info is-dismissible arc-fse-admin-notice">
	<div class="arc-fse-admin-notice-wrapper">
		<h2><?php esc_html_e( 'Howdy, ', 'arc-fse' ); ?> <?php echo $display_name; ?></h2>
		<h3><?php esc_html_e( 'Welcome to', 'arc-fse' ); ?> <?php esc_html_e( 'Arc Fse Theme!', 'arc-fse' ); ?></h3>
		<p><?php esc_html_e( 'Explore beautiful hand-crafted site templates and setup your site in few clicks.', 'arc-fse' ); ?></p>
		<a href="<?php echo esc_url( admin_url( 'themes.php?page=arc-fse-info' ) ); ?>" class="arc-fse-admin-notice-primary-button"><?php esc_html_e( 'Explore Now!', 'arc-fse' ); ?></a>
		<a href="<?php echo esc_url( admin_url( 'themes.php?page=arc-fse-info' ) ); ?>"><?php esc_html_e( 'Learn more about Arc Pro Theme', 'arc-fse' ); ?></a>
	</div>
</div>
<?php
