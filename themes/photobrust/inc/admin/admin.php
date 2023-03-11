<?php
/**
 * Admin functions.
 *
 * @package PhotoBrust
 */

function photobrust_admin_upgrade_notice() {
    
    $screen = get_current_screen();
    
    if ( ! empty( $screen->base ) && 'appearance_page_photobrust' === $screen->base ) {
        return false;
    }
    ?>
    <div class="notice notice-info is-dismissible photobrust-admin-notice">
        <div class="photobrust-admin-notice-wrapper">
            <h2><?php esc_html_e( 'PhotoBrust Pro', 'photobrust' ); ?></h2>
            <p><?php esc_html_e( 'Get your hands on the WordPress Full Site Editing features. Start building your website with advanced block patterns and custom blocks! Get additional 50+ Pre-Designed Block Patterns, 20 Templates and 11 Template Parts that are highly customizable and fully responsive.', 'photobrust' ); ?></p>
            
            <a target="_blank" class="button-primary button green" href="<?php echo esc_url( 'https://themepalace.com/downloads/photobrust-pro/'); ?>"><?php esc_html_e( 'Get PhotoBrust Pro', 'photobrust' ); ?></a>
            
            <a class="button" href="<?php echo esc_url( admin_url( 'themes.php?page=photobrust' ) ); ?>" ><?php esc_html_e( 'Theme Info', 'photobrust' ); ?></a>
        </div>
    </div>
    <?php
}
add_action( 'admin_notices', 'photobrust_admin_upgrade_notice' );

add_action( 'admin_menu', 'photobrust_admin_menu_page' );

/**
 * Register admin page.
 *
 * @since 1.0.0
 */
function photobrust_admin_menu_page() {

	$theme = wp_get_theme( get_template() );

	add_theme_page(
		$theme->display( 'Name' ),
		$theme->display( 'Name' ),
		'manage_options',
		'photobrust',
		'photobrust_do_admin_page'
	);

}

/**
 * Render admin page.
 *
 * @since 1.0.0
 */
function photobrust_do_admin_page() {

	$theme = wp_get_theme( get_template() );
	?>
	<div class="wrap about-wrap">
		<h1><?php echo $theme->display( 'Name' ); ?></h1>
		<div class="two-col">

			<div class="col about-text">
				<?php
					$description_raw = $theme->display( 'Description' );
					$main_description = explode( 'Official', $description_raw );
					?>
				<?php echo wp_kses_post( $main_description[0] ); ?>
				<p><?php esc_html_e( 'Version', 'photobrust' ); ?>:&nbsp;<?php echo esc_html( $theme->display( 'Version' ) ); ?></p>
			</div><!-- .col -->

			<div class="col about-img">
				<a href="<?php echo esc_url( $theme->display( 'ThemeURI' ) ); ?>" target="_blank"><img src="<?php echo trailingslashit( get_template_directory_uri() ); ?>screenshot.png" alt="<?php echo esc_attr( $theme->display( 'Name' ) ); ?>" /></a>
			</div><!-- .col -->

		</div><!-- .two-col -->
		<div class="four-col">

			<div class="col">

				<h3><i class="dashicons dashicons-cart"></i><?php esc_html_e( 'Upgrade to Pro', 'photobrust' ); ?></h3>

				<p>
					<?php esc_html_e( 'To get more beautiful block patterns and templates, we recommend you to Upgrade to PhotoBrust Pro', 'photobrust' ); ?>
				</p>

				<p>
					<a class="button green button-primary" href="<?php echo esc_url( 'https://themepalace.com/downloads/photobrust-pro/' ); ?>" target="_blank"><?php esc_html_e( 'Upgrade to Pro', 'photobrust' ); ?></a>
				</p>

			</div><!-- .col -->

			<div class="col">

				<h3><i class="dashicons dashicons-admin-customizer"></i><?php esc_html_e( 'Full Site Editing', 'photobrust' ); ?></h3>

				<p>
					<?php esc_html_e( 'We have used Full Site Editing which will help you preview your changes live and fast.', 'photobrust' ); ?>
				</p>

				<p>
					<a class="button button-primary" href="<?php echo esc_url( admin_url( 'site-editor.php' ) ); ?>" ><?php esc_html_e( 'Use Site Editor', 'photobrust' ); ?></a>
				</p>

			</div><!-- .col -->

			<div class="col">

				<h3><i class="dashicons dashicons-book-alt"></i><?php esc_html_e( 'Theme Instructions', 'photobrust' ); ?></h3>
				<p>
					<?php esc_html_e( 'We have prepared detailed theme instructions which will help you to customize theme as you prefer.', 'photobrust' ); ?>
				</p>

				<p>
					<a class="button button-primary" href="<?php echo esc_url( 'https://themepalace.com/instructions/themes/photobrust/' ); ?>" target="_blank"><?php esc_html_e( 'Documentation', 'photobrust' ); ?></a>
				</p>

			</div><!-- .col -->


			<div class="col">

				<h3><i class="dashicons dashicons-sos"></i><?php esc_html_e( 'Help &amp; Support', 'photobrust' ); ?></h3>

				<p>
					<?php esc_html_e( 'If you have any question/feedback regarding theme, please post in our official support forum.', 'photobrust' ); ?>
				</p>

				<p>
					<a class="button button-primary" href="<?php echo esc_url( 'https://themepalace.com/forum/free-themes/photobrust/' ); ?>" target="_blank"><?php esc_html_e( 'Get Support', 'photobrust' ); ?></a>
				</p>

			</div><!-- .col -->

		</div><!-- .four-col -->


	</div><!-- .wrap -->
	<?php

}

/**
 * Load admin scripts.
 *
 * @since 1.0.0
 *
 * @param string $hook Current page hook.
 */
function photobrust_load_admin_scripts( $hook ) {

	$min = defined( 'SCRIPT_DEBUG' ) && SCRIPT_DEBUG ? '' : '.min';

	wp_enqueue_style( 'photobrust-admin', get_template_directory_uri() . '/assets/css/admin' . $min . '.css', false, '2.1.0' );
}

add_action( 'admin_enqueue_scripts', 'photobrust_load_admin_scripts' );
