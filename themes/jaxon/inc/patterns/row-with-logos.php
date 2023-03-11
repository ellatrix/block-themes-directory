<?php
/**
 * Pattern
 *
 * @author Themeisle
 * @package jaxon
 * @since 1.0.0
 *
 * slug: row-with-logos
 * title: Row with logos
 * categories: Jaxon
 * keywords: row, clients, images. logos
 */

use Jaxon\Assets_Manager;

$logos = array(
	Assets_Manager::get_image_url( 'jaxon-placeholder-logo-05.1.2.svg' ),
	Assets_Manager::get_image_url( 'jaxon-placeholder-logo-04.1.2.svg' ),
	Assets_Manager::get_image_url( 'jaxon-placeholder-logo-01.1.2.svg' ),
	Assets_Manager::get_image_url( 'jaxon-placeholder-logo-02.1.2.svg' ),
	Assets_Manager::get_image_url( 'jaxon-placeholder-logo-03.1.2.svg' ),
);

$logo_markup = '
<!-- wp:image {"align":"center","sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image aligncenter size-full is-resized"><img src="%s"/></figure>
<!-- /wp:image -->
';

$logos_markup = '';

foreach ( $logos as $logo ) {
	$logos_markup .= sprintf( $logo_markup, esc_url( $logo ) );
}

return array(
	'title'      => __( 'Row with logos', 'jaxon' ),
	'categories' => array( 'jaxon' ),
	'content'    => '
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"40px","right":"var:preset|spacing|20","bottom":"40px","left":"var:preset|spacing|20"}}},"backgroundColor":"ti-accent","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-ti-accent-background-color has-background" style="padding-top:40px;padding-right:var(--wp--preset--spacing--20);padding-bottom:40px;padding-left:var(--wp--preset--spacing--20)"><!-- wp:group {"align":"wide","layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between"}} -->
<div class="wp-block-group alignwide">' . $logos_markup . '</div>
<!-- /wp:group --></div>
<!-- /wp:group -->
',
);

