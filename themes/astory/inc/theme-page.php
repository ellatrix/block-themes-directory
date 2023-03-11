<?php

/**
 * Theme Page
 *
 * @package Astory
 * @since 1.0
 */

function astory_theme_page_admin_style( $hook ) {
	if ( 'appearance_page_astory-theme' === $hook ) {
		// Register theme stylesheet.
		$theme_version = wp_get_theme()->get( 'Version' );

		$version_string = is_string( $theme_version ) ? $theme_version : false;
		wp_enqueue_style(
			'astory-theme-admin-style',
			get_theme_file_uri( 'assets/css/theme-page.css' ),
			array(),
			$version_string
		);
	}
}
add_action( 'admin_enqueue_scripts', 'astory_theme_page_admin_style' );

/**
 * Add theme page
 */
function astory_menu() {
	add_theme_page( 'Astory', 'Astory', 'edit_theme_options', 'astory-theme', 'astory_theme_page_display', 4 );
}
add_action( 'admin_menu', 'astory_menu' );

/**
 * Display About page
 */
function astory_theme_page_display() {
	$theme = wp_get_theme();

	if ( is_child_theme() ) {
		$theme = wp_get_theme()->parent();
	}
	?>

	<div id="welcome-panel" class="welcome-panel">
		<div class="welcome-panel-content">
			<div class="welcome-panel-header">
				<h2><?php echo esc_html( $theme->name ); ?></h2>
				<p><?php esc_html_e( 'Free Full Site Editing WordPress Theme', 'astory' ); ?></p>
			</div>

			<div class="welcome-panel-column-container">
				<div class="container-wrap">
					<div class="welcome-panel-column two-columns">
						<!-- <div class="welcome-panel-icon-pages"></div> -->
						<div class="welcome-panel-column-content">
							<h3><?php esc_html_e( 'Getting Started', 'astory' ); ?></h3>
							<p><?php esc_html_e( 'Great! Astory has been installed and activated successfully. Now, you can start building your your website with a Astory theme customizable block patterns, templates, and template parts.', 'astory' ); ?></p>
							<a target="_blank" href="https://codeclove.com/themes/astory/#theme-instructions"><?php esc_html_e( 'Theme instructions', 'astory' ); ?></a>
						</div>
					</div>

					<?php if ( ! class_exists( 'ASTORY_PRO' ) ) : ?>
						<div class="welcome-panel-column two-columns">
							<div class="welcome-panel-column-content">
								<h3><?php esc_html_e( 'More Features with Astory Pro', 'astory' ); ?></h3>
								<p><?php esc_html_e( 'With Astory Pro you get more options, blocks, block patterns, templates and template parts. Faster support and faster updates with trending and easy to use patterns.', 'astory' ); ?></p>
								<a target="_blank" class="button button-primary button-hero" href="https://codeclove.com/astory"><?php esc_html_e( 'Buy Astory Pro', 'astory' ); ?></a>
							</div>
						</div>
					<?php else : ?>
						<div class="welcome-panel-column two-columns">
							<div class="welcome-panel-column-content">
								<h3><?php esc_html_e( 'Astory plugin', 'astory' ); ?></h3>
								<p><?php esc_html_e( 'Astory plugin is installed and activated. Start using Pro Features Now!!!', 'astory' ); ?></p>
							</div>
						</div>
					<?php endif; ?>
					<div class="welcome-panel-column two-columns">
						<div class="welcome-panel-column-content">
							<h3><?php esc_html_e( 'Compare Free Vs Pro', 'astory' ); ?></h3>
							<table>
								<thead>
									<tr>
										<th><?php esc_html_e( 'Features', 'astory' ); ?></th>
										<th><?php esc_html_e( 'Free', 'astory' ); ?></th>
										<th><?php esc_html_e( 'Astory PRO', 'astory' ); ?></th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td><?php esc_html_e( 'Responsive Design', 'astory' ); ?></td>
										<td><span class="dashicons dashicons-yes"></span></td>
										<td><span class="dashicons dashicons-yes"></span></td>
									</tr>
									<tr>
										<td><?php esc_html_e( 'Super Easy Setup', 'astory' ); ?></td>
										<td><span class="dashicons dashicons-yes"></span></td>
										<td><span class="dashicons dashicons-yes"></span></td>
									</tr>
									<tr>
										<td><?php esc_html_e( 'Color Options for various sections', 'astory' ); ?></td>
										<td><span class="dashicons dashicons-yes"></span></td>
										<td><span class="dashicons dashicons-yes"></span></td>
									</tr>
									<tr>
										<td><?php esc_html_e( 'Pattern  : Header Media', 'astory' ); ?></td>
										<td><span class="dashicons dashicons-yes"></span></td>
										<td><span class="dashicons dashicons-yes"></span></td>
									</tr>
									<tr>
										<td><?php esc_html_e( 'Pattern  : Featured Content', 'astory' ); ?></td>
										<td><span class="dashicons dashicons-yes"></span></td>
										<td><span class="dashicons dashicons-yes"></span></td>
									</tr>
									<tr>
										<td><?php esc_html_e( 'Pattern  : Featured Content Two/Tdree', 'astory' ); ?></td>
										<td><span class="dashicons dashicons-no"></span></td>
										<td><span class="dashicons dashicons-yes"></span></td>
									</tr>
									<tr>
										<td><?php esc_html_e( 'Pattern  : Homepage One', 'astory' ); ?></td>
										<td><span class="dashicons dashicons-no"></span></td>
										<td><span class="dashicons dashicons-yes"></span></td>
									</tr>
									<tr>
										<td><?php esc_html_e( 'Pattern  : Footer Four Column', 'astory' ); ?></td>
										<td><span class="dashicons dashicons-no"></span></td>
										<td><span class="dashicons dashicons-yes"></span></td>
									</tr>
									<tr>
										<td><?php esc_html_e( 'Pattern  : Header Witd Center Logo', 'astory' ); ?></td>
										<td><span class="dashicons dashicons-no"></span></td>
										<td><span class="dashicons dashicons-yes"></span></td>
									</tr>
									<tr>
										<td><?php esc_html_e( 'Pattern  : Header Witd Buttons', 'astory' ); ?></td>
										<td><span class="dashicons dashicons-no"></span></td>
										<td><span class="dashicons dashicons-yes"></span></td>
									</tr>
									<tr>
										<td><?php esc_html_e( 'Pattern  : Logo', 'astory' ); ?></td>
										<td><span class="dashicons dashicons-no"></span></td>
										<td><span class="dashicons dashicons-yes"></span></td>
									</tr>
									<tr>
										<td><?php esc_html_e( 'Pattern  : Pricing Table One/Two/Tdree', 'astory' ); ?></td>
										<td><span class="dashicons dashicons-no"></span></td>
										<td><span class="dashicons dashicons-yes"></span></td>
									</tr>
									<tr>
										<td><?php esc_html_e( 'Pattern  : Service One/Two/Tdree/Four', 'astory' ); ?></td>
										<td><span class="dashicons dashicons-no"></span></td>
										<td><span class="dashicons dashicons-yes"></span></td>
									</tr>
									<tr>
										<td><?php esc_html_e( 'Pattern  : Testimonial One/Two/Tdree', 'astory' ); ?></td>
										<td><span class="dashicons dashicons-no"></span></td>
										<td><span class="dashicons dashicons-yes"></span></td>
									</tr>
									<tr>
										<td><?php esc_html_e( 'Pattern  : Footer Four Columns', 'astory' ); ?></td>
										<td><span class="dashicons dashicons-no"></span></td>
										<td><span class="dashicons dashicons-yes"></span></td>
									</tr>
									<tr>
										<td><?php esc_html_e( 'Extra Pattern    : Team Member', 'astory' ); ?></td>
										<td><span class="dashicons dashicons-no"></span></td>
										<td><span class="dashicons dashicons-yes"></span></td>
									</tr>
									<tr>
										<td><?php esc_html_e( 'Extra Pattern    : Call to Action', 'astory' ); ?></td>
										<td><span class="dashicons dashicons-no"></span></td>
										<td><span class="dashicons dashicons-yes"></span></td>
									</tr>
									<tr>
										<td><?php esc_html_e( 'SideBar', 'astory' ); ?></td>
										<td><span class="dashicons dashicons-no"></span></td>
										<td><span class="dashicons dashicons-yes"></span></td>
									</tr>
									<tr>
										<td colspan="3">
											<h3 class="green-text"><?php esc_html_e( 'More Coming Soon...', 'astory' ); ?></h3>
										</td>
									</tr>
								</tbody>
							</table>
						</div>
					</div>

				</div>
				<div class="sidebar">
					<div class="welcome-panel-column important-links">
						<!-- <div class="welcome-panel-icon-pages"></div> -->
						<div class="welcome-panel-column-content">
							<h3><?php esc_html_e( 'Useful Links', 'astory' ); ?></h3>
							<a target="_blank" href="https://codeclove.com/astory"><?php esc_html_e( 'Theme Info', 'astory' ); ?></a>
							<a target="_blank" href="https://demo.codeclove.com/astory"><?php esc_html_e( 'View Demo', 'astory' ); ?></a>
							<a target="_blank" href="<?php echo esc_url( 'https://codeclove.com/contact-us/' ); ?>"><?php esc_html_e( 'Support', 'astory' ); ?></a>
						</div>
					</div>

					<div class="welcome-panel-column review">
						<!-- <div class="welcome-panel-icon-pages"></div> -->
						<div class="welcome-panel-column-content">
							<h3><?php esc_html_e( 'Leave us a review', 'astory' ); ?></h3>
							<p><?php esc_html_e( 'Loved Astory? Feel free to leave your feedback. Your opinion helps us reach more audiences!', 'astory' ); ?></p>
							<a href="https://wordpress.org/support/theme/astory/reviews/" class="button button-primary button-hero" style="text-decoration: none;" target="_blank"><?php esc_html_e( 'Review', 'astory' ); ?></a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<?php
}
