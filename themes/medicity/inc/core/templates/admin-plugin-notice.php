<?php
$screen = get_current_screen();
//
if ( ! empty( $screen->base ) && ( 'appearance_page_medicity-info' === $screen->base || 'appearance_page_olive-one-click-demo-import' === $screen->base ) ) {
	return false;
}
// Current user object
$user = wp_get_current_user();
// Get display name from user object
$display_name = $user->display_name;
$pro_purchase_url = "https://olivethemes.com/wordpress-themes/medicity-pro/";
?>
<div class="notice notice-info is-dismissible medicity-admin-notice">
	<div class="medicity-admin-notice-wrapper">
		<h2><?php esc_html_e( 'Howdy, ', 'medicity' ); ?> <?php echo $display_name; ?></h2>
		<h3><?php esc_html_e( 'Welcome to', 'medicity' ); ?> <?php esc_html_e( 'Medicity Theme!', 'medicity' ); ?></h3>
		<p><?php esc_html_e( 'Explore beautiful hand-crafted site templates and setup your site in few clicks.', 'medicity' ); ?></p>
		<a href="<?php echo esc_url( admin_url( 'themes.php?page=medicity-info' ) ); ?>" class="medicity-admin-notice-primary-button"><?php esc_html_e( 'Explore Now!', 'medicity' ); ?></a>
		<a href="<?php echo esc_url( admin_url( 'themes.php?page=medicity-info' ) ); ?>"><?php esc_html_e( 'Learn more about Medicity Pro Theme', 'medicity' ); ?></a>
	</div>
</div>
<?php
