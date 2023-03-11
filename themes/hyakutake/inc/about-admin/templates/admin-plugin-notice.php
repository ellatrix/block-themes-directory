<?php
$screen = get_current_screen();
if ( ! empty( $screen->base ) && 'appearance_page_hyakutake-info' === $screen->base ) {
	return false;
}

?>
<div class="notice notice-info is-dismissible hyakutake-admin-notice">
	<div class="hyakutake-admin-notice-wrapper">
		<h2><?php esc_html_e( 'Howdy, Welcome to', 'hyakutake' ); ?> <?php esc_html_e( 'Hyakutake!', 'hyakutake' ); ?></h2>
		<p><?php esc_html_e( 'Do you know you can get more features in Hyakutake? Upgrade to Hyakutake Pro!!!', 'hyakutake' ); ?></p>
		<a href="<?php echo esc_url( admin_url( 'themes.php?page=hyakutake-info' ) ); ?>" class="hyakutake-admin-notice-primary-button"><?php esc_html_e( 'Hyakutake Pro Details', 'hyakutake' ); ?></a>
		<a class="button" href="<?php echo esc_url( 'https://fireflythemes.com/themes/hyakutake-pro'); ?>" target="_blank"><?php esc_html_e( 'Learn more about Hyakutake Pro Theme', 'hyakutake' ); ?></a>
	</div>
</div>
<?php
