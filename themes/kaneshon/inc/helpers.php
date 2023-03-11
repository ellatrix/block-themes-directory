<?php
/**
 * Conditionally returns a Javascript/CSS asset's version number.
 *
 * When the site is in debug mode, the normal asset's version is returned.
 * When it's not in debug mode, the theme's version is returned, so that caches can be invalidated on theme updates.
 *
 * @since 1.0.0
 *
 * @param bool $version The version string of the asset.
 *
 * @return false|string Theme version if SCRIPT_DEBUG or WP_DEBUG are enabled. Otherwise, $version is returned.
 */
function kaneshon_asset_version( $version = false ) {
	static $theme_version = false;

	if ( ! $theme_version ) {
		$theme = wp_get_theme();

		if ( is_child_theme() ) {
			$theme_version = $theme->parent()->get( 'Version' ) . '-' . $theme->get( 'Version' );
		} else {
			$theme_version = $theme->get( 'Version' );
		}
	}

	if ( $version ) {
		if ( ( defined( 'SCRIPT_DEBUG' ) && SCRIPT_DEBUG ) ||
			( defined( 'WP_DEBUG' ) && WP_DEBUG )
		) {
			return $version;
		}
	}

	return $theme_version;
}

add_filter( 'stylesheet_uri', 'kaneshon_stylesheet_uri', 10, 2 );
/**
 * Modifies the stylesheet path if needed (non-debug modes).
 *
 * @since 1.0.0
 *
 * @param string $stylesheet_uri
 * @param string $stylesheet_dir_uri
 *
 * @return string
 */
function kaneshon_stylesheet_uri( $stylesheet_uri, $stylesheet_dir_uri ) {
	if ( ! is_child_theme() ) {
		$suffix         = kaneshon_scripts_styles_suffix();
		$stylesheet_uri = preg_replace( '/\.css$/', "{$suffix}.css", $stylesheet_uri );
	}

	return $stylesheet_uri;
}


/**
 * Returns the filename suffix to be used when enqueuing scripts and styles.
 *
 * @since 1.0.0
 *
 * @return string
 */
function kaneshon_scripts_styles_suffix() {
	$suffix = '.min';

	if ( ( defined( 'SCRIPT_DEBUG' ) && SCRIPT_DEBUG ) ||
		( defined( 'WP_DEBUG' ) && WP_DEBUG ) ) {
		$suffix = '';
	}

	return apply_filters( 'kaneshon_scripts_styles_suffix', $suffix );
}
