<?php
/*
-----------------------------------------------------------
// Customising The Excerpt Lenght
------------------------------------------------------------*/
if ( ! function_exists( 'block_aarambha_excerpt_limit' ) ) {
	function block_aarambha_excerpt_limit( $length ) {
		return 25;
	}
}
add_filter( 'excerpt_length', 'block_aarambha_excerpt_limit' );

/*
-----------------------------------------------------------
// Get Mailchimp Forms
------------------------------------------------------------*/
if ( ! function_exists( 'block_aarambha_get_mailchimp_forms' ) ) {
	/**
	 * Get Mailchimp Forms.
	 *
	 * @param string $style
	 * @return string
	 */
	function block_aarambha_get_mailchimp_forms() {
		$form = '<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
				<div class="wp-block-buttons"><!-- wp:button -->
				<div class="wp-block-button"><a class="wp-block-button__link wp-element-button">' . esc_html__( 'Subscribe', 'block-aarambha' ) . '</a></div>
				<!-- /wp:button --></div>
				<!-- /wp:buttons --></div>';

		if ( function_exists( 'mc4wp' ) ) {
			$forms = mc4wp_get_forms();
			if ( $forms && ! empty( $forms ) ) {
				$form_id = ( isset( $forms[0] ) ? $forms[0]->ID : 0 );
				$form    = '<!-- wp:group {"className":"block-aarambha-newsletter"} -->
					<div class="wp-block-group block-aarambha-newsletter"><!-- wp:mailchimp-for-wp/form {"id":' . absint( $form_id ) . '} /--></div></div>
					<!-- /wp:group -->';
			}
		}

		return $form;
	}
}

/*
-----------------------------------------------------------
// Site logo fallback
------------------------------------------------------------*/
if ( ! function_exists( 'block_aarambha_get_custom_logo' ) ) {

	function block_aarambha_get_custom_logo( $html ) {
		if ( has_custom_logo() ) {
			return $html;
		} else {
			$site_title = get_bloginfo( 'name' );
	
			$html .= '<a href="' . esc_url( get_home_url( null, '/' ) ) . '">';
	
			if ( ( is_front_page() || is_home() ) && ! is_page() ) {
	
				$html .= '<h1 class="site-title">' . esc_html( $site_title ) . '</h1>';
	
			} else {
				$html .= '<h2 class="site-title">' . esc_html( $site_title ) . '</h2>';
			}
	
			$html .= '</a>';
	
			return $html;
		}
	}
}
add_filter( 'get_custom_logo', 'block_aarambha_get_custom_logo' );

/*
-----------------------------------------------------------
// how custom image sizes in the editor image size dropdown.
------------------------------------------------------------*/
if ( ! function_exists( 'block_aarambha_custom_image_sizes' ) ) {
	function block_aarambha_custom_image_sizes( $sizes ) {
		return array_merge(
			$sizes,
			array(
				'block_aarambha_blog' => esc_html__( 'Blog Item', 'block-aarambha' ),
			)
		);
	}
}
add_filter( 'image_size_names_choose', 'block_aarambha_custom_image_sizes' );
