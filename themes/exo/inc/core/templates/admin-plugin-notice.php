<?php
$screen = get_current_screen();
//
if ( ! empty( $screen->base ) && ( 'appearance_page_exo-info' === $screen->base || 'appearance_page_olive-one-click-demo-import' === $screen->base ) ) {
	return false;
}
// Current user object
$user = wp_get_current_user();
// Get display name from user object
$display_name = $user->display_name;
$pro_purchase_url = "https://olivethemes.com/wordpress-themes/exo-pro/";
?>
<div class="notice notice-info is-dismissible exo-admin-notice">
	<div class="exo-admin-notice-wrapper">
		<h2><?php esc_html_e( 'Howdy, ', 'exo' ); ?> <?php echo $display_name; ?></h2>
		<h3><?php esc_html_e( 'Welcome to', 'exo' ); ?> <?php esc_html_e( 'Exo Theme!', 'exo' ); ?></h3>
		<p><?php esc_html_e( 'Explore beautiful hand-crafted site templates and setup your site in few clicks.', 'exo' ); ?></p>
		<a href="<?php echo esc_url( admin_url( 'themes.php?page=exo-info' ) ); ?>" class="exo-admin-notice-primary-button"><?php esc_html_e( 'Explore Now!', 'exo' ); ?></a>
		<a href="<?php echo esc_url( admin_url( 'themes.php?page=exo-info' ) ); ?>"><?php esc_html_e( 'Learn more about Exo Pro Theme', 'exo' ); ?></a>
	</div>
</div>
<?php
