<?php
/**
 * Blockpress: 404 error content
 *
 * @package Blockpress
 */

return array(
	'title'    => __( '404 error content.', 'blockpress' ),
	'inserter' => false,
	'content'  => '<!-- wp:heading {"level":1} -->
				<h1>' . esc_html__( 'Not found, error 404', 'blockpress' ) . '</h1>
				<!-- /wp:heading -->
				<!-- wp:paragraph -->
				<p>' . esc_html__( 'Oops, the page you are looking for does not exist or is no longer available. Everything is still awesome. Just use the search form to find your way.', 'blockpress' ) . '</p>
				<!-- /wp:paragraph -->
				<!-- wp:search {"width":75,"widthUnit":"%","showLabel":false,"buttonText":"Search"} /-->',
);
