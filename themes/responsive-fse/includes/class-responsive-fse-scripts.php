<?php
/**
 * Handle scripts enqueuing and inlining.
 *
 * @package Responsive_FSE
 * @author         CyberChimps
 * @copyright      Copyright (c) 2021, CyberChimps
 * @license        license.txt
 * @since 1.0
 */

namespace responsive_fse_Theme;

/**
 * Scripts handler.
 */
class Responsive_FSE_Scripts {

	/**
	 * Constructor.
	 *
	 * @access public
	 * @since 1.0
	 */
	public function __construct() {
		add_action( 'wp_footer', array( $this, 'skip_link' ) );
		add_action( 'wp_enqueue_scripts', array( $this, 'comment_script' ) );
		add_action( 'wp_enqueue_scripts', array( $this, 'assets_script' ) );
	}
	/**
	 * Enqueue the assets script.
	 *
	 * @access public
	 * @since 1.0
	 */
	public function assets_script() {
		$suffix    = ( defined( 'SCRIPT_DEBUG' ) && SCRIPT_DEBUG ) ? '' : '.min';
		$directory = ( defined( 'SCRIPT_DEBUG' ) && SCRIPT_DEBUG ) ? 'js' : 'min-js';
		wp_enqueue_script( 'responsive-fse-layout', get_template_directory_uri() . "/assets/$directory/layout$suffix.js", array( 'jquery' ), wp_get_theme()->get( 'Version' ), true );
		wp_enqueue_script( 'responsive-fse-navigation', get_template_directory_uri() . "/assets/$directory/navigation$suffix.js", array( 'jquery' ), wp_get_theme()->get( 'Version' ), true );
	}
	/**
	 * Enqueue the comments script.
	 *
	 * @access public
	 * @since 1.0
	 */
	public function comment_script() {
		if ( is_singular() ) {
			wp_enqueue_script( 'comment-reply' );
		}
	}

	/**
	 * Print a skip link.
	 *
	 * @access public
	 * @since 1.0
	 * @return void
	 */
	public function skip_link() {
		?>
		<script>
			function injectSkipLink() {
				var searchEl = [
						'.wp-block-post-title',
						'.wp-block-query-loop',
						'.wp-block-post-content',
						'.entry-content',
						'h1',
						'h2',
					],
					contentEl, 
					contentElID, 
					skipLink,
					parentEl,
					i;

				// Find the content element.
				for ( i = 0; i < searchEl.length; i++ ) {
					if ( ! contentEl ) {
						contentEl = document.querySelector( searchEl[ i ] );
					}
				}

				// Early exit if no content element was found.
				if ( ! contentEl ) {
					return;
				}

				// Get the ID of the content element.
				contentElID = contentEl.id;
				if ( ! contentElID ) {
					contentElID = 'auto-skip-link-target';
					contentEl.id = contentElID;
				}

				// Get the parent element. This is where we'll inject the skip-link.
				parentEl = document.querySelector( '.wp-site-blocks' );
				if ( ! parentEl ) {
					parentEl = document.body;
				}

				// Create the skip link.
				skipLink = document.createElement( 'a' );
				skipLink.classList.add( 'skip-link' );
				skipLink.classList.add( 'screen-reader-text' );
				skipLink.href = '#' + contentElID;
				skipLink.innerHTML = '<?php esc_attr_e( 'Skip to content', 'responsive-fse' ); ?>';

				// Inject the skip link.
				parentEl.insertAdjacentElement( 'afterbegin', skipLink );
			}
			injectSkipLink();
		</script>
		<?php
	}
}
new Responsive_FSE_Scripts();
