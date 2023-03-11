<?php
/**
 * Block Patterns
 *
 * @link https://developer.wordpress.org/reference/functions/register_block_pattern/
 * @link https://developer.wordpress.org/reference/functions/register_block_pattern_category/
 *
 * @package Alara
 */

function alara_pattern_content( $content ) {
	switch ( $content ) {

		case 'image-woman-1':
			return esc_url( get_theme_file_uri( 'assets/images/woman-1.jpg' ) );
			break;

		case 'image-woman-2':
			return esc_url( get_theme_file_uri( 'assets/images/woman-2.jpg' ) );
			break;

		case 'image-man-1':
			return esc_url( get_theme_file_uri( 'assets/images/man-1.jpg' ) );
			break;

		case 'image-man-2':
			return esc_url( get_theme_file_uri( 'assets/images/man-2.jpg' ) );
			break;

		case 'image-man-3':
			return esc_url( get_theme_file_uri( 'assets/images/man-3.jpg' ) );
			break;

		case 'image-man-4':
			return esc_url( get_theme_file_uri( 'assets/images/man-4.jpg' ) );
			break;

		case 'image-man-4-transparent':
			return esc_url( get_theme_file_uri( 'assets/images/man-4-transparent.png' ) );
			break;

		case 'image-camera':
			return esc_url( get_theme_file_uri( 'assets/images/camera.jpg' ) );
			break;

		case 'image-camera-lens':
			return esc_url( get_theme_file_uri( 'assets/images/camera-lens.png' ) );
			break;

		case 'image-camera-lens-2':
			return esc_url( get_theme_file_uri( 'assets/images/camera-lens-2.png' ) );
			break;

		case 'image-camera-lens-medium-2':
			return esc_url( get_theme_file_uri( 'assets/images/camera-lens-medium-2.png' ) );
			break;

		case 'image-driving':
			return esc_url( get_theme_file_uri( 'assets/images/driving.jpg' ) );
			break;

		case 'image-road':
			return esc_url( get_theme_file_uri( 'assets/images/road.jpg' ) );
			break;

		case 'list':
			return '<li>This is feature one</li><li>Item two included</li><li>Optional item three</li><li>Service four included</li><li>And finally, item five</li>';
			break;

		case 'social-media':
			return '<!-- wp:social-link {"url":"https://facebook.com","service":"facebook"} /--><!-- wp:social-link {"url":"https://instagram.com","service":"instagram"} /--><!-- wp:social-link {"url":"https://twitter.com","service":"twitter"} /--><!-- wp:social-link {"url":"mailto:mail@example.com","service":"mail"} /-->';
			break;
						
		default:
			return '';
			break;

	}
}


function alara_pattern_categories() {
	return array(
		/* translators: %s: Name of active theme, Alara if parent, or child theme name */
		'new' => sprintf( __( '★ %s - New ★', 'alara' ), ALARA_THEME_NAME ),
		'headers' => sprintf( __( '%s - Headers', 'alara' ), ALARA_THEME_NAME ),
		'headers-boxed' => sprintf( __( '%s - Headers Boxed', 'alara' ), ALARA_THEME_NAME ),
		'footers' => sprintf( __( '%s - Footers', 'alara' ), ALARA_THEME_NAME ),
		'welcome' => sprintf( __( '%s - Welcome', 'alara' ), ALARA_THEME_NAME ),
		'blog' => sprintf( __( '%s - Blog', 'alara' ), ALARA_THEME_NAME ),
		'about' => sprintf( __( '%s - About', 'alara' ), ALARA_THEME_NAME ),
		'features' => sprintf( __( '%s - Features', 'alara' ), ALARA_THEME_NAME ),
		'cta' => sprintf( __( '%s - Call to Action', 'alara' ), ALARA_THEME_NAME ),
		'reviews' => sprintf( __( '%s - Reviews', 'alara' ), ALARA_THEME_NAME ),
		'pricing-tables' => sprintf( __( '%s - Pricing Tables', 'alara' ), ALARA_THEME_NAME ),
		'recipes' => sprintf( __( '%s - Food Recipes', 'alara' ), ALARA_THEME_NAME ),
		'covers' => sprintf( __( '%s - Covers', 'alara' ), ALARA_THEME_NAME ),
		'full-pages' => sprintf( __( '%s - Full Pages', 'alara' ), ALARA_THEME_NAME )
	);
}


function alara_patterns_full_page() {
	return array(
		'welcome-cover,spacer,specifications-2,spacer,reviews-2,spacer,team-2,spacer,get-in-touch-1',
		'welcome-2,spacer,feature-comparison-2,spacer,specifications-4,spacer,pricing-table-4,spacer,get-in-touch-2'
	);
}


function alara_get_patterns() {
	$patterns_dir = ALARA_TEMPLATE_DIR . '/inc/patterns/';
	if ( file_exists( $patterns_dir ) && is_dir( $patterns_dir ) ) {
		$patterns = scandir( $patterns_dir );
		$patterns_array = array_diff( $patterns, array( '.', '..' ) );
	} else {
		$patterns_array = array();
	}
	return $patterns_array;
}


function alara_register_patterns() {
	$categories = alara_pattern_categories();
	foreach ( $categories as $category_slug => $category_label ) {
		register_block_pattern_category(
			'alara-' . $category_slug,
			array( 'label' => $category_label )
		);
	}
	$patterns = alara_get_patterns();
	foreach ( $patterns as $pattern_slug ) {
		register_block_pattern(
			'alara/' . preg_replace( "/\.php$/", "", $pattern_slug ),
			require ALARA_TEMPLATE_DIR . '/inc/patterns/' . $pattern_slug
		);
	}
}
add_action( 'init', 'alara_register_patterns', 9 );


function alara_register_patterns_full_page() {
	$full_pages_array = alara_patterns_full_page();
	foreach ( $full_pages_array as $full_page ) {
		$pattern_slugs = explode( ',', $full_page );
		$full_pattern = array();
		$full_pattern_slug = '';
		$full_pattern_title = '';
		$full_pattern_content = '';
		foreach ( $pattern_slugs as $pattern_slug ) {
			$sub_pattern = include ALARA_TEMPLATE_DIR . '/inc/patterns/' . $pattern_slug . '.php';
			$full_pattern_slug .= $pattern_slug . '-';
			if ( $pattern_slug !== 'spacer' ) {
				$full_pattern_title .= $sub_pattern['title'] . __( ' + ', 'alara' );
			}
			$full_pattern_content .= $sub_pattern['content'];
		}
		$full_pattern_slug = preg_replace( "/\-$/", "", $full_pattern_slug );
		$full_pattern_title = preg_replace( "/\ \+ $/", "", $full_pattern_title );
		$full_pattern['title'] = $full_pattern_title;
		$full_pattern['content'] = $full_pattern_content;
		register_block_pattern(
			'alara/' . $full_pattern_slug,
			array(
				'title'			=> $full_pattern['title'],
				'categories'	=> array( 'alara-full-pages' ),
				'viewportWidth'	=> 1440,
				'content'		=> $full_pattern['content']
			)
		);
	}
}
add_action( 'init', 'alara_register_patterns_full_page', 9 );


function alara_site_info() {
	return '&copy;' . esc_html( date('Y') ) . ' <a href="' . esc_url( home_url('/') ) . '" target="_blank" rel="noreferrer noopener">' . esc_html( get_bloginfo('name') ) . '</a>';
}


function alara_theme_info() {
	return '<a href="' . esc_url( __( 'https://wordpress.org/', 'alara' ) ) . '" target="_blank" rel="noreferrer noopener">' . esc_html__( 'WordPress', 'alara' ) . '</a> | <a href="' . esc_url( ALARA_THEME_URI ) . '" target="_blank" rel="noreferrer noopener">' . esc_html( ALARA_THEME_NAME ) . '</a>';
}


register_block_pattern(
	'alara/theme-info',
	array(
		'title'		=> __( 'Theme Information', 'alara' ),
		'inserter'	=> false,
		'content'	=> '<!-- wp:group {"layout":{"type":"flex","justifyContent":"space-between"},"style":{"spacing":{"padding":{"top":"1em","bottom":"1em"}}}} -->
<div class="wp-block-group" style="padding-top:1em;padding-bottom:1em">
<!-- wp:paragraph {"align":"center","fontSize":"smaller"} -->
<p class="has-text-align-center has-smaller-font-size">' . alara_site_info() . '</p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"align":"center","fontSize":"smaller"} -->
<p class="has-text-align-center has-smaller-font-size">' . alara_theme_info() . '</p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->',
	)
);

register_block_pattern(
	'alara/theme-info-centered',
	array(
		'title'		=> __( 'Theme Information Centered', 'alara' ),
		'inserter'	=> false,
		'content'	=> '<!-- wp:paragraph {"align":"center","className":"is-style-links-underline-on-hover","fontSize":"smaller"} -->
<p class="has-text-align-center is-style-links-underline-on-hover has-smaller-font-size">' . alara_site_info() . '</p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"align":"center","className":"is-style-links-underline-on-hover","fontSize":"smaller"} -->
<p class="has-text-align-center is-style-links-underline-on-hover has-smaller-font-size">' . alara_theme_info() . '</p>
<!-- /wp:paragraph -->',
	)
);
