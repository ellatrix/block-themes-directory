<?php
/**
 * Block Patterns
 *
 * @link https://developer.wordpress.org/reference/functions/register_block_pattern/
 * @link https://developer.wordpress.org/reference/functions/register_block_pattern_category/
 *
 * @package Sampler
 */

function sampler_pattern_content( $content ) {
	switch ( $content ) {

		case '5-orange-squares':
			return esc_url( get_theme_file_uri( 'assets/images/5-orange-squares.png' ) );
			break;

		case 'humaaans':
			return esc_url( get_theme_file_uri( 'assets/images/humaaans.png' ) );
			break;
						
		default:
			return '';
			break;

	}
}


function sampler_pattern_categories() {
	return array(
		/* translators: %s: Name of active theme, Sampler if parent, or child theme name */
		'headers' => sprintf( __( '%s - Headers', 'sampler' ), SAMPLER_THEME_NAME ),
		'footers' => sprintf( __( '%s - Footers', 'sampler' ), SAMPLER_THEME_NAME ),
		'posts' => sprintf( __( '%s - Posts', 'sampler' ), SAMPLER_THEME_NAME ),
		'headlines' => sprintf( __( '%s - Headlines', 'sampler' ), SAMPLER_THEME_NAME ),
		'info' => sprintf( __( '%s - Information', 'sampler' ), SAMPLER_THEME_NAME ),
		'full-pages' => sprintf( __( '%s - Full Pages', 'sampler' ), SAMPLER_THEME_NAME ),
		'style-guide' => sprintf( __( '%s - Style Guide', 'sampler' ), SAMPLER_THEME_NAME )
	);
}


function sampler_patterns_full_page() {
	return array(
		'media-text-image-zoom,spacer,informational-table,spacer,about-columns-gradient-background,spacer,posts-bordered-with-heading'
	);
	return array();
}


function sampler_get_patterns() {
	$patterns_dir = SAMPLER_TEMPLATE_DIR . '/inc/patterns/';
	if ( file_exists( $patterns_dir ) && is_dir( $patterns_dir ) ) {
		$patterns = scandir( $patterns_dir );
		$patterns_array = array_diff( $patterns, array( '.', '..' ) );
	} else {
		$patterns_array = array();
	}
	return $patterns_array;
}


function sampler_register_patterns() {
	$categories = sampler_pattern_categories();
	foreach ( $categories as $category_slug => $category_label ) {
		register_block_pattern_category(
			'sampler-' . $category_slug,
			array( 'label' => $category_label )
		);
	}

	$patterns = sampler_get_patterns();
	foreach ( $patterns as $pattern_slug ) {
		register_block_pattern(
			'sampler/' . preg_replace( "/\.php$/", "", $pattern_slug ),
			require SAMPLER_TEMPLATE_DIR . '/inc/patterns/' . $pattern_slug
		);
	}
}
add_action( 'init', 'sampler_register_patterns', 9 );


function sampler_register_patterns_full_page() {
	$full_pages_array = sampler_patterns_full_page();
	foreach ( $full_pages_array as $full_page ) {
		$pattern_slugs = explode( ',', $full_page );
		$full_pattern = array();
		$full_pattern_slug = '';
		$full_pattern_title = '';
		$full_pattern_content = '';
		foreach ( $pattern_slugs as $pattern_slug ) {
			$sub_pattern = include SAMPLER_TEMPLATE_DIR . '/inc/patterns/' . $pattern_slug . '.php';
			$full_pattern_slug .= $pattern_slug . '-';
			if ( $pattern_slug !== 'spacer' ) {
				$full_pattern_title .= $sub_pattern['title'] . __( ' + ', 'sampler' );
			}
			$full_pattern_content .= $sub_pattern['content'];
		}
		$full_pattern_slug = preg_replace( "/\-$/", "", $full_pattern_slug );
		$full_pattern_title = preg_replace( "/\ \+ $/", "", $full_pattern_title );
		$full_pattern['title'] = $full_pattern_title;
		$full_pattern['content'] = $full_pattern_content;
		register_block_pattern(
			'sampler/' . $full_pattern_slug,
			array(
				'title'			=> $full_pattern['title'],
				'categories'	=> array( 'sampler-full-pages' ),
				'viewportWidth'	=> 1200,
				'content'		=> $full_pattern['content']
			)
		);
	}
}
add_action( 'init', 'sampler_register_patterns_full_page', 9 );


function sampler_site_info() {
	return '&copy;' . esc_html( date('Y') ) . ' <a href="' . esc_url( home_url('/') ) . '">' . esc_html( get_bloginfo('name') ) . '</a>';
}


register_block_pattern(
	'sampler/site-info',
	array(
		'title'		=> __( 'Site Information', 'sampler' ),
		'inserter'	=> false,
		'content'	=> '<!-- wp:paragraph {"className":"is-style-links-underline-on-hover"} -->
<p class="is-style-links-underline-on-hover">' . sampler_site_info() . '</p>
<!-- /wp:paragraph -->',
	)
);


register_block_pattern(
	'sampler/site-info-centered',
	array(
		'title'		=> __( 'Site Information Centered', 'sampler' ),
		'inserter'	=> false,
		'content'	=> '<!-- wp:paragraph {"align":"center","className":"is-style-links-underline-on-hover"} -->
<p class="has-text-align-center is-style-links-underline-on-hover">' . sampler_site_info() . '</p>
<!-- /wp:paragraph -->',
	)
);
