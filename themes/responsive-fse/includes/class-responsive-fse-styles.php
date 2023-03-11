<?php
/**
 * Handle styles enqueuing and inlining.
 *
 * @author         CyberChimps
 * @copyright      Copyright (c) 2021, CyberChimps
 * @license        license.txt
 * @package Responsive_FSE
 * @since 1.0
 */

namespace responsive_fse_Theme;

/**
 * Styles handler.
 */
class Responsive_FSE_Styles {

	/**
	 * An array of styles to load.
	 *
	 * @access protected
	 * @since 1.0
	 * @var array
	 */
	protected $styles = array(
		'main',
	);

	/**
	 * Webfonts URLs.
	 *
	 * @access protected
	 * @since 1.0
	 * @var array
	 */
	protected $webfonts = array(
		'https://fonts.googleapis.com/css2?family=Literata:wght@200..900&display=optional',
	);

	/**
	 * Constructor.
	 *
	 * @access public
	 * @since 1.0
	 */
	public function __construct() {
		require_once get_theme_file_path( 'includes/class-wptt-webfont-loader.php' );

		add_action( 'wp_head', array( $this, 'head' ) );
		add_action( 'enqueue_block_assets', array( $this, 'block_editor_assets' ) );
		add_action( 'wp_enqueue_scripts', array( $this, 'enqueue_scripts' ) );
		remove_filter( 'block_editor_settings_all', 'gutenberg_extend_block_editor_settings_with_default_editor_styles' );
	}

	/**
	 * Add inline styles for blocks.
	 *
	 * @access public
	 * @since 0.6.2
	 * @return void
	 */
	public function enqueue_scripts() {
		foreach ( glob( get_template_directory() . '/styles/blocks/core/*.css' ) as $filename ) {
			$block = str_replace(
				array( get_template_directory() . '/styles/blocks/core/', '.css' ),
				'',
				$filename
			);
			ob_start();
			include get_template_directory() . "/styles/blocks/core/$block.css";
			$styles = ob_get_clean();
			if ( ! defined( 'SCRIPT_DEBUG' ) || ! SCRIPT_DEBUG ) {
				$styles = self::minify( $styles );
			}
			wp_add_inline_style( "wp-block-$block", $styles );

			$suffix = ( defined( 'SCRIPT_DEBUG' ) && SCRIPT_DEBUG ) ? '' : '.min';

			// RTL support.
			$suffix = is_rtl() ? '-rtl' . $suffix : $suffix;
			foreach ( $this->styles as $style ) {
				if ( file_exists( get_theme_file_path( "styles/$style{$suffix}.css" ) ) ) {
					wp_enqueue_style( "responsive-fse-$style", get_template_directory_uri() . "/styles/$style{$suffix}.css", false, wp_get_theme()->get( 'Version' ) );
				}
			}
		}
		if ( ! is_admin() ) {
			wp_enqueue_style( 'dashicons' );
		}
	}

	/**
	 * Print styles in <head>.
	 *
	 * @access public
	 * @since 1.0
	 * @return void
	 */
	public function head() {
		if ( defined( 'REST_REQUEST' ) && REST_REQUEST ) {
			return;
		}
		echo '<style>';

		// Add webfonts.
		foreach ( $this->webfonts as $webfont ) {
			if ( defined( 'SCRIPT_DEBUG' ) && SCRIPT_DEBUG ) {
				echo wptt_get_webfont_styles( $webfont ); // phpcs:ignore
			} else {
				echo self::minify( wptt_get_webfont_styles( $webfont ) ); // phpcs:ignore
			}
		}
		echo '</style>';
	}

	/**
	 * Enqueue assets for the editor.
	 *
	 * @access public
	 * @since 1.0
	 * @return void
	 */
	public function block_editor_assets() {
		$suffix = ( defined( 'SCRIPT_DEBUG' ) && SCRIPT_DEBUG ) ? '' : '.min';

		// RTL support.
		// $suffix = is_rtl() ? '-rtl' . $suffix : $suffix;.
		if ( is_admin() ) {
			if ( file_exists( get_theme_file_path( "styles/responsive-fse-editor-styles$suffix.css" ) ) ) {
				add_editor_style( get_theme_file_uri( "styles/responsive-fse-editor-styles$suffix.css" ) );
			}
			if ( file_exists( get_theme_file_path( "styles/gutenberg-editor$suffix.css" ) ) ) {
				add_editor_style( get_theme_file_uri( "styles/gutenberg-editor$suffix.css" ) );
			}

			// Enqueue webfonts.
			foreach ( $this->webfonts as $webfont ) {
				wp_enqueue_style(
					md5( $webfont ),
					wptt_get_webfont_url( $webfont ),
					array(),
					filemtime( get_theme_file_path( 'style.css' ) )
				);
			}
		}

	}

	/**
	 * Slightly minify styles.
	 *
	 * Removes inline comments and whitespace.
	 *
	 * @static
	 * @since 0.6.1
	 * @param string $styles The styles we want to minify.
	 * @return string
	 */
	public static function minify( $styles ) {
		$re1 = '(?sx)("(?:[^"\\\\]++|\\\\.)*+"|\'(?:[^\'\\\\]++|\\\\.)*+\')|/\\* (?> .*? \\*/ )';
		$re2 = '(?six)("(?:[^"\\\\]++|\\\\.)*+"|\'(?:[^\'\\\\]++|\\\\.)*+\')|\\s*+ ; \\s*+ ( } ) \\s*+|\\s*+ ( [*$~^|]?+= | [{};,>~+-] | !important\\b ) \\s*+|( [[(:] ) \\s++|\\s++ ( [])] )|\\s++ ( : ) \\s*+(?!(?>[^{}"\']++|"(?:[^"\\\\]++|\\\\.)*+"|\'(?:[^\'\\\\]++|\\\\.)*+\')*+{)|^ \\s++ | \\s++ \\z|(\\s)\\s+';

		$styles = preg_replace( "%$re1%", '$1', $styles );
		return preg_replace( "%$re2%", '$1$2$3$4$5$6$7', $styles );
	}
}
new Responsive_FSE_Styles();
