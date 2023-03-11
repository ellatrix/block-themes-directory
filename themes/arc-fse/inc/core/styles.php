<?php
/**
 * Function to add style variables.
 *
 * @return void
 */
function arc_fse_get_color_value( $value ) {
	if ( strpos($value, 'var:') !== false ) {
		// var:preset|color|vivid-red
		$value = str_replace( 'var:','', $value );
		$value = str_replace( '|', '--', $value );
		return 'var( --wp--' . $value . ')';
	}
	return $value;
}
function arc_fse_global_styles_vars() {
	if ( defined( 'OLIVE_THEMES_VERSION' ) || ! function_exists( 'wp_get_global_styles' ) ) {
		return false;
	}
	$transient_name = 'global_styles_vars_' . get_stylesheet();
	$cached         = get_transient( $transient_name );
	if ( $cached ) {
		wp_add_inline_style( 'global-styles', $cached );
		return false;
	}

	$styles = wp_get_global_styles();

	if ( ! empty( $styles['elements']['button'] ) ) {
		$core_button_styles = $styles['elements']['button'];
	} else {
		$core_button_styles = wp_get_global_styles(
			array(),
			array( 'elements' => 'button' )
		);
	}

	$css_styles         = '';
	$element_css_styles = '';
	if ( ! empty( $core_button_styles['spacing']['padding'] ) ) {
		if ( ! empty( $core_button_styles['spacing']['padding']['left'] ) ) {
			$element_css_styles .= '--wp--custom--core-button--spacing--padding--left: ' . $core_button_styles['spacing']['padding']['left'] . ';';
		}
		if ( ! empty( $core_button_styles['spacing']['padding']['right'] ) ) {
			$element_css_styles .= '--wp--custom--core-button--spacing--padding--right: ' . $core_button_styles['spacing']['padding']['right'] . ';';
		}
		if ( ! empty( $core_button_styles['spacing']['padding']['top'] ) ) {
			$element_css_styles .= '--wp--custom--core-button--spacing--padding--top: ' . $core_button_styles['spacing']['padding']['top'] . ';';
		}
		if ( ! empty( $core_button_styles['spacing']['padding']['bottom'] ) ) {
			$element_css_styles .= '--wp--custom--core-button--spacing--padding--bottom: ' . $core_button_styles['spacing']['padding']['bottom'] . ';';
		}
	}

	if ( ! empty( $core_button_styles['color']['background'] ) ) {
		$element_css_styles .= '--wp--custom--core-button--color--background: ' . arc_fse_get_color_value( $core_button_styles['color']['background'] ) . ';';
	}

	if ( ! empty( $core_button_styles['color']['text'] ) ) {
		// var(--wp--preset--color--vivid-red)
		$element_css_styles .= '--wp--custom--core-button--color: ' . arc_fse_get_color_value( $core_button_styles['color']['text'] ) . ';';
	}

	if ( isset( $core_button_styles['border']['width'] ) ) {
		$element_css_styles .= '--wp--custom--core-button--border--width: ' . $core_button_styles['border']['width'] . ';';
	}

	if ( isset( $core_button_styles['border']['radius'] ) ) {
		$top_left     = is_array( $core_button_styles['border']['radius'] ) ? $core_button_styles['border']['radius']['topLeft'] : $core_button_styles['border']['radius'];
		$top_right    = is_array( $core_button_styles['border']['radius'] ) ? $core_button_styles['border']['radius']['topRight'] : $core_button_styles['border']['radius'];
		$bottom_left  = is_array( $core_button_styles['border']['radius'] ) ? $core_button_styles['border']['radius']['bottomLeft'] : $core_button_styles['border']['radius'];
		$bottom_right = is_array( $core_button_styles['border']['radius'] ) ? $core_button_styles['border']['radius']['bottomRight'] : $core_button_styles['border']['radius'];
		if ( '' !== $top_left ) {
			$element_css_styles .= '--wp--custom--core-button--border-radius--top-left: ' . $top_left . ';';
		}
		if ( '' !== ( $top_right ) ) {
			$element_css_styles .= '--wp--custom--core-button--border-radius--top-right: ' . $top_right . ';';
		}
		if ( '' !== ( $bottom_left ) ) {
			$element_css_styles .= '--wp--custom--core-button--border-radius--bottom-left: ' . $bottom_left . ';';
		}
		if ( '' !== ( $bottom_right ) ) {
			$element_css_styles .= '--wp--custom--core-button--border-radius--bottom-right: ' . $bottom_right . ';';
		}
	}

	if ( isset( $core_button_styles['typography']['fontSize'] ) ) {
		$element_css_styles .= '--wp--custom--core-button--typography--font-size: ' . $core_button_styles['typography']['fontSize'] . ';';
	}

	if ( isset( $core_button_styles['typography']['fontWeight'] ) ) {
		$element_css_styles .= '--wp--custom--core-button--typography--font-weight: ' . $core_button_styles['typography']['fontWeight'] . ';';
	}

	if ( ! empty( $core_button_styles[':hover']['color']['background'] ) ) {
		$element_css_styles .= '--wp--custom--core-button--hover--color--background: ' . arc_fse_get_color_value( $core_button_styles[':hover']['color']['background'] ) . ';';
	}

	if ( ! empty( $core_button_styles[':hover']['color']['text'] ) ) {
		$element_css_styles .= '--wp--custom--core-button--hover--color: ' . arc_fse_get_color_value( $core_button_styles[':hover']['color']['text'] ) . ';';
	}

	if ( ! empty( $element_css_styles ) ) {
		$css_styles .= 'body{' . $element_css_styles . '}';
	}

	set_transient( $transient_name, $css_styles, MINUTE_IN_SECONDS );
	wp_add_inline_style( 'global-styles', $css_styles );

}
add_action( 'wp_enqueue_scripts', 'arc_fse_global_styles_vars', 100 );
