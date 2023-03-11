<?php
/**
 * Theme admin functions.
 *
 * @package Bricksy
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit( 'Direct script access denied.' );
}

/**
* Add admin menu
*
* @since 1.0.0
*/
function bricksy_theme_admin_menu() {
	add_theme_page(
		esc_html__( 'Bricksy Getting Started', 'bricksy' ),
		esc_html__( 'Bricksy Info', 'bricksy' ),
		'manage_options',
		'bricksy-theme',
		'bricksy_admin_page_content',
		30
	);
}
add_action( 'admin_menu', 'bricksy_theme_admin_menu' );


/**
* Add admin page content
*
* @since 1.0.0
*/
function bricksy_admin_page_content() {
	$theme = wp_get_theme();
	$theme_name = 'Bricksy';
	$active_theme_name = $theme->get('Name');

	?>

		<div class="bricksy-page-header">
			<div class="bricksy-page-header__container">
				<div class="bricksy-page-header__branding">
					<img src="<?php echo esc_url( get_template_directory_uri() . '/assets/admin/img/theme_logo.png' ); ?>" class="bricksy-page-header__logo" alt="<?php echo esc_attr__( 'Bricksy', 'bricksy' ); ?>" />
				</div>
				<div class="bricksy-page-header__tagline">
					<span  class="bricksy-page-header__tagline-text">				
						<?php echo esc_html__( 'Made by ', 'bricksy' ); ?>
						<a href="https://anarieldesign.com/"><?php echo esc_html__( 'Anariel Design', 'bricksy' ); ?></a>						
					</span>					
				</div>				
			</div>
		</div>

		<div class="wrap bricksy-container">
			<div class="bricksy-grid">

				<div class="bricksy-grid-content">
					<div class="bricksy-body">

						<h1 class="bricksy-title"><?php esc_html_e( 'Getting Started', 'bricksy' ); ?></h1>
						<p class="bricksy-intro-text">
							<?php echo esc_html__( 'Bricksy is now installed and ready to use. You can start building something beautiful from scratch using a selection of block and page patterns available in the page/post editor.', 'bricksy' ); ?>
						</p>
						<p class="bricksy-intro-text">
						<a href="https://www.anarieldesign.com/documentation/bricksy/" target="_blank"><?php echo esc_html__( 'Bricksy Documentation', 'bricksy' ); ?></a>
						</p>
						<br><br><hr>
						<br><br>

						<h1 class="bricksy-title"><?php esc_html_e( 'Get More with Bricksy Pro', 'bricksy' ); ?></h1>
						<p class="bricksy-intro-text">
							<?php echo esc_html__( 'More professionally designed block and page patterns categorized for easier navigation. More header, footer, and blog layouts. 4 distinctive-looking demos that can easily be imported with a built-in one-click import system. Option to mix and match patterns from different demos. Competent, reliable, and friendly support via HelpDesk. Risk-free with our 30 days money-back guarantee. Check it out!', 'bricksy' ); ?>
						</p>
						<p><a href="https://rdar.li/bricksy" class="button button-primary button-hero" style="text-decoration: none;" target="_blank"><?php esc_html_e( 'View Bricksy Pro', 'bricksy' ); ?></a></p>
						<img class="center" src="<?php echo esc_url( get_template_directory_uri() . '/assets/admin/img/bricksy-pro.jpg' ); ?>" alt="<?php echo esc_attr__( 'Bricksy', 'bricksy' ); ?>" />


					</div> <!-- .body -->

				</div> <!-- .content -->
				
				<!-- Sidebar -->
				<aside class="bricksy-grid-sidebar">
					<div class="bricksy-grid-sidebar-widget-area">

						<div class="bricksy-widget">
							<h2 class="bricksy-widget-title"><?php echo esc_html__( 'Useful Links', 'bricksy' ); ?></h2>
							<ul class="bricksy-useful-links">
								<li>
									<a href="https://www.anarieldesign.com/documentation/bricksy/" target="_blank"><?php echo esc_html__( 'Bricksy Documentation', 'bricksy' ); ?></a>
								</li>
								<li>
									<a href="https://wordpress.org/support/theme/bricksy/" target="_blank"><?php echo esc_html__( 'Support', 'bricksy' ); ?></a>
								</li>
								<li>
									<a href="https://www.youtube.com/playlist?list=PLiPorWuYVbztdvJxv3ZEbdnPYricJ1XwY" target="_blank"><?php echo esc_html__( 'Block Editor Tips & Tricks', 'bricksy' ); ?></a>
								</li>
								<li>
									<a href="https://www.anarieldesign.com/news/" target="_blank"><?php echo esc_html__( 'Anariel Design Blog', 'bricksy' ); ?></a>
								</li>
							</ul>
						</div>

						<div class="bricksy-widget">
							<h2 class="bricksy-widget-title"><?php echo esc_html__( 'Leave us a review', 'bricksy' ); ?></h2>
							<p><?php echo esc_html__( 'Are you are enjoying Bricksy? We would love to hear your feedback.', 'bricksy' ); ?></p>
							<a href="https://wordpress.org/support/theme/bricksy/reviews/" class="button button-primary button-hero" style="text-decoration: none;" target="_blank"><?php esc_html_e( 'Submit a review', 'bricksy' ); ?></a>
						</div>

					</div>					
				</aside>	

			</div> <!-- .grid -->

		</div>
	<?php
}
