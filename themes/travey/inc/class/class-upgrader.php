<?php
/**
 * Upgrader Class
 *
 * @author Jegstudio
 * @package travey
 * @since 1.0.0
 */

namespace Travey;

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Block Pattern Class
 *
 * @package travey
 */
class Upgrader {
	/**
	 * Class constructor.
	 */
	public function __construct() {
		add_action( 'admin_notices', array( $this, 'page_content_notice' ) );
		add_action( 'init', array( $this, 'set_upgrader_page_content' ) );
		add_action( 'wp_ajax_themes_upgrader_page_close', array( $this, 'upgrader_page_close' ) );
		add_action( 'wp_ajax_themes_upgrader_page_content_close', array( $this, 'upgrader_page_content_close' ) );
	}

	/**
	 * Enqueue Script.
	 */
	public function enqueue_script() {
		if ( defined( 'GUTENVERSE_URL' ) && defined( 'GUTENVERSE_VERSION' ) ) {
			wp_enqueue_style(
				'fontawesome-gutenverse',
				GUTENVERSE_URL . '/assets/fontawesome/css/all.css',
				array(),
				GUTENVERSE_VERSION
			);
		}
	}

	/**
	 * Change option to false.
	 */
	public function upgrader_page_close() {
		update_option( $this->get_page_option_name(), false );
	}

	/**
	 * Change option to false.
	 */
	public function upgrader_page_content_close() {
		update_option( $this->get_page_content_option_name(), false );
	}

	/**
	 * Get Option Name.
	 *
	 * @return string.
	 */
	public function get_page_option_name() {
		return wp_get_theme()->template . '_upgrader_page';
	}

	/**
	 * Get Option Name.
	 *
	 * @return string.
	 */
	public function get_page_content_option_name() {
		return wp_get_theme()->template . '_upgrader_page_content';
	}

	/**
	 * Set content width upgrader option meta
	 */
	public function set_upgrader_page() {
		$flag = get_option( $this->get_page_option_name() );

		if ( ! $flag ) {
			add_option( $this->get_page_option_name(), true );
		}
	}

	/**
	 * Set content width upgrader option meta
	 */
	public function set_upgrader_page_content() {
		$flag = get_option( $this->get_page_content_option_name() );

		if ( ! $flag ) {
			add_option( $this->get_page_content_option_name(), true );
		}
	}

	/**
	 * Admin Notice.
	 */
	public function page_content_notice() {
		global $pagenow;

		if ( ! current_user_can( 'manage_options' ) ) {
			return;
		}

		if ( defined( 'GUTENVERSE_VERSION' ) ) {
			if ( version_compare( GUTENVERSE_VERSION, '1.5.0', '<=' ) ) {
				if ( get_option( $this->get_page_content_option_name() ) ) {
					$this->enqueue_script();
					?>
					<div class="notice notice-warning has-logo theme-upgrade-notice page-content-upgrade">
						<div class="notice-logo">
							<svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
								<path d="M10 0C4.47754 0 0 4.47915 0 10C0 15.5241 4.47754 20 10 20C15.5225 20 20 15.5241 20 10C20 4.47915 15.5225 0 10 0ZM10 4.43548C10.9353 4.43548 11.6935 5.19371 11.6935 6.12903C11.6935 7.06435 10.9353 7.82258 10 7.82258C9.06468 7.82258 8.30645 7.06435 8.30645 6.12903C8.30645 5.19371 9.06468 4.43548 10 4.43548ZM12.2581 14.6774C12.2581 14.9446 12.0414 15.1613 11.7742 15.1613H8.22581C7.95859 15.1613 7.74194 14.9446 7.74194 14.6774V13.7097C7.74194 13.4425 7.95859 13.2258 8.22581 13.2258H8.70968V10.6452H8.22581C7.95859 10.6452 7.74194 10.4285 7.74194 10.1613V9.19355C7.74194 8.92633 7.95859 8.70968 8.22581 8.70968H10.8065C11.0737 8.70968 11.2903 8.92633 11.2903 9.19355V13.2258H11.7742C12.0414 13.2258 12.2581 13.4425 12.2581 13.7097V14.6774Z" fill="#FFC908"/>
							</svg>
						</div>
						<div class="notice-content">
							<h2><?php echo sprintf( esc_html__( '%s Upgrade Notice!', 'travey' ), wp_get_theme()->name ); ?></h2>
							<p>
								<?php esc_html_e( 'There are some new exciting updates we want to announce. This update will required the latest version of Gutenverse plugin to work smoothly, so we recommend to update your Gutenverse plugin.', 'travey' ); ?>
							</p>
							<div class="themes-upgrade-action">
								<?php
								if ( 'plugins.php' !== $pagenow ) {
									?>
									<a class='button-primary upgrade-themes' href="<?php echo esc_url( admin_url( 'plugins.php' ) ); ?>"><?php esc_html_e( 'Go to plugin page', 'travey' ); ?></a>
									<?php
								}
								?>
								<a class='close-notification' href="#"><?php esc_html_e( 'Close notification', 'travey' ); ?></a>
							</div>
						</div>
					</div>
					<script>
						(function($) {
							$('.theme-upgrade-notice.page-content-upgrade .close-notification').on('click', function() {
								$.post( ajaxurl, {
									action: 'themes_upgrader_page_content_close'
								} );

								$('.theme-upgrade-notice.page-content-upgrade').fadeOut();
							});
						})(jQuery);
					</script>
					<?php
				}
			} else {
				$this->set_upgrader_page();

				if ( get_option( $this->get_page_option_name() ) && ! ( 'admin.php' === $pagenow && isset( $_GET['page'] ) && 'gutenverse-upgrade-notice' === $_GET['page'] ) ) {
					$this->enqueue_script();
					?>
					<div class="notice notice-warning has-logo theme-upgrade-notice page-upgrade">
						<div class="notice-logo">
							<svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
								<path d="M10 0C4.47754 0 0 4.47915 0 10C0 15.5241 4.47754 20 10 20C15.5225 20 20 15.5241 20 10C20 4.47915 15.5225 0 10 0ZM10 4.43548C10.9353 4.43548 11.6935 5.19371 11.6935 6.12903C11.6935 7.06435 10.9353 7.82258 10 7.82258C9.06468 7.82258 8.30645 7.06435 8.30645 6.12903C8.30645 5.19371 9.06468 4.43548 10 4.43548ZM12.2581 14.6774C12.2581 14.9446 12.0414 15.1613 11.7742 15.1613H8.22581C7.95859 15.1613 7.74194 14.9446 7.74194 14.6774V13.7097C7.74194 13.4425 7.95859 13.2258 8.22581 13.2258H8.70968V10.6452H8.22581C7.95859 10.6452 7.74194 10.4285 7.74194 10.1613V9.19355C7.74194 8.92633 7.95859 8.70968 8.22581 8.70968H10.8065C11.0737 8.70968 11.2903 8.92633 11.2903 9.19355V13.2258H11.7742C12.0414 13.2258 12.2581 13.4425 12.2581 13.7097V14.6774Z" fill="#FFC908"/>
							</svg>
						</div>
						<div class="notice-content">
							<h2><?php echo sprintf( esc_html__( '%s Upgrade Notice!', 'travey' ), wp_get_theme()->name ); ?></h2>
							<p>
								<?php esc_html_e( 'We\'ve made some changes to page content layout and global style. Please check ', 'travey' ); ?>
								<a target="_blank" href="<?php echo esc_url( admin_url( 'edit.php?post_type=page' ) ); ?>"><?php esc_html_e( 'your pages', 'travey' ); ?></a>
								<?php esc_html_e( ' to see how the new layout looks on your site. You can always revert back by enable the inherit layout option on the ', 'travey' ); ?>
								<a href="<?php echo esc_url( admin_url( 'admin.php?page=gutenverse-settings' ) ); ?>"><?php esc_html_e( 'Gutenverse settings.', 'travey' ); ?></a>
								<?php esc_html_e( ' dashboard. Learn more about new layout on ', 'travey' ); ?>
								<a href="<?php echo esc_url( admin_url( 'admin.php?page=gutenverse-upgrade-notice&version=1.6.0' ) ); ?>"><?php esc_html_e( 'this page.', 'travey' ); ?></a>
							</p>
							<div class="themes-upgrade-action">
								<a class='close-notification' href="#"><?php esc_html_e( 'Close notification', 'travey' ); ?></a>
								<a class="get-support" href='https://wordpress.org/support/plugin/gutenverse/' target="_blank">
								<?php esc_html_e( 'Got Question?', 'travey' ); ?>
								</a>
							</div>
						</div>
					</div>
					<script>
						(function($) {
							$('.theme-upgrade-notice.page-upgrade .close-notification').on('click', function() {
								$.post( ajaxurl, {
									action: 'themes_upgrader_page_close'
								} );

								$('.theme-upgrade-notice.page-upgrade').fadeOut();
							});
						})(jQuery);
					</script>
					<?php
				}
			}
		}
	}
}
