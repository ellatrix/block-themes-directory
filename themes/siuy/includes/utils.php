<?php
/**
 * Helper functions.
 *
 * @link          https://mypreview.github.io/siuy
 * @author        MyPreview (Github: @mahdiyazdani, @gooklani, @mypreview)
 * @since         2.0.0
 *
 * @package       siuy
 * @subpackage    siuy/includes
 */

namespace Siuy\Includes\Utils;

use const Siuy\THEME as THEME;

defined( 'ABSPATH' ) || exit; // Exit if accessed directly.

if ( ! function_exists( 'get_file_asset' ) ) :
	/**
	 * Retrieve dependency extraction array for a given resource.
	 *
	 * @since     2.0.0
	 * @param     string $filename        Asset name (filename).
	 * @param     array  $dependencies    Array of asset dependencies.
	 * @return    array
	 * @phpcs:disable WPThemeReview.CoreFunctionality.FileInclude.FileIncludeFound
	 */
	function get_file_asset( string $filename = '', array $dependencies = array() ): array {
		// Bail early, in case the filename is not provided.
		if ( empty( $filename ) ) {
			return array();
		}

		$file_path       = get_parent_theme_file_path( '/build/' . $filename . '.js' );
		$file_asset_path = get_parent_theme_file_path( '/build/' . $filename . '.asset.php' );
		$file_asset      = file_exists( $file_asset_path ) ? require $file_asset_path : array(
			'dependencies' => $dependencies,
			'version'      => file_exists( $file_path ) ? filemtime( $file_path ) : THEME['version'],
		);

		return $file_asset;
	}
endif;

if ( ! function_exists( 'get_asset_handle' ) ) :
	/**
	 * Retrieve handle of the stylesheet or script to enqueue.
	 *
	 * @since     2.0.0
	 * @param     string $asset_name    Name of the asset.
	 * @param     string $type          Type of the asset, ex. style, script, font, etc.
	 * @return    string
	 */
	function get_asset_handle( string $asset_name = 'frontend', string $type = 'style' ): string {
		$handle = THEME['slug'] . '-' . $asset_name . '-' . $type;
		return $handle;
	}
endif;

if ( ! function_exists( 'enqueue_resources' ) ) :
		/**
		 * Enqueue static resources.
		 *
		 * @since     2.0.0
		 * @param     string $asset_name    Name of the asset.
		 * @return    void
		 */
	function enqueue_resources( string $asset_name = '' ): void {
		// Bail early, in case the asset name is not provided.
		if ( empty( $asset_name ) ) {
			return;
		}

		$asset         = get_file_asset( $asset_name );
		$version       = $asset['version'] ?? '1.0';
		$style_handle  = get_asset_handle( $asset_name, 'style' );
		$script_handle = get_asset_handle( $asset_name, 'script' );

		wp_enqueue_style( $style_handle, get_theme_file_uri( '/build/' . $asset_name . '.css' ), array(), $version, 'screen' );
		wp_enqueue_script( $script_handle, get_theme_file_uri( '/build/' . $asset_name . '.js' ), $asset['dependencies'], $version, true );
		wp_style_add_data( $style_handle, 'rtl', 'replace' );
	}
endif;
