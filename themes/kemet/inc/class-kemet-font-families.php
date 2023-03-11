<?php
/**
 * Helper class for font settings.
 *
 * @package     Kemet
 * @author      Kemet
 * @copyright   Copyright (c) 2019, Kemet
 * @link        https://kemet.io/
 */

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Font info class for System and Google fonts.
 */
if ( ! class_exists( 'Kemet_Font_Families' ) ) :

	/**
	 * Font info class for System and Google fonts.
	 */
	final class Kemet_Font_Families {

		/**
		 * Google Fonts
		 *
		 * @var array
		 */
		public static $google_fonts = array();


		/**
		 * Custom Fonts
		 *
		 * @since 1.0.0
		 *
		 * @return Array All the custom fonts in KEMEt
		 */
		public static function get_custom_fonts() {
			$custom_fonts = array();

			return apply_filters( 'kemet_custom_fonts', $custom_fonts );
		}

		/**
		 * Google Fonts used in kemet.
		 * Array is generated from the google-fonts.json file.
		 *
		 * @return Array Array of Google Fonts.
		 */
		public static function get_google_fonts() {

			if ( empty( self::$google_fonts ) ) {

				$google_fonts_file = apply_filters( 'kemet_google_fonts_json_file', KEMET_THEME_DIR . 'assets/fonts/google-fonts.json' );

				if ( ! file_exists( KEMET_THEME_DIR . 'assets/fonts/google-fonts.json' ) ) {
					return array();
				}

				$file_contants     = file_get_contents( $google_fonts_file );
				$google_fonts_json = json_decode( $file_contants, 1 );
				$google_fonts_json = $google_fonts_json['items'];

				foreach ( $google_fonts_json as $font ) {
					$variants = array();
					foreach ( $font['variants'] as $variant_key => $variant ) {

						$prefix = 'n';
						$sufix  = '4';
						$value  = strtolower( trim( $variant ) );
						$value  = str_replace( ' ', '', $variant );
						if ( is_numeric( $value ) && isset( $value[0] ) ) {
							$sufix  = $value[0];
							$prefix = 'n';
						}
						if ( preg_match( '#italic#', $value ) ) {
							if ( 'italic' === $value ) {
								$sufix  = 4;
								$prefix = 'i';
							} else {
								$value = trim( str_replace( 'italic', '', $value ) );
								if ( is_numeric( $value ) && isset( $value[0] ) ) {
									$sufix  = $value[0];
									$prefix = 'i';
								}
							}
						}
						if ( preg_match( '#regular|normal#', $value ) ) {
							if ( 'regular' === $value ) {
								$sufix  = 4;
								$prefix = 'n';
							} else {
								$value = trim( str_replace( array( 'regular', 'normal' ), '', $value ) );

								if ( is_numeric( $value ) && isset( $value[0] ) ) {
									$sufix  = $value[0];
									$prefix = 'n';
								}
							}
						}
						$variants[ $variant_key ] = "{$prefix}{$sufix}";
					}

					$font_data                             = array(
						$variants,
						$font['category'],
					);
					self::$google_fonts[ $font['family'] ] = $font_data;
				}
			}

			return apply_filters( 'kemet_google_fonts', self::$google_fonts );
		}

	}

endif;
