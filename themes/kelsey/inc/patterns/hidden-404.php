<?php
/**
 * 404 content.
 */
return array(
	'title'    => esc_html__( '404 content', 'kelsey' ),
	'inserter' => false,
	'content'  => '<!-- wp:heading {"textAlign":"center","level":1} -->
    <h1 class="has-text-align-center">' . esc_html__( '404 Nothing Found', 'kelsey' ) . '</h1>
    <!-- /wp:heading -->
	<!-- wp:paragraph {"align":"center"} -->
					<p class="has-text-align-center">' . esc_html__( 'This page could not be found. Maybe try a search?', 'kelsey' ) . '</p>
					<!-- /wp:paragraph -->
					<!-- wp:search {"label":"Search","showLabel":false,"placeholder":"Search...","widthUnit":"%","buttonText":"Search","buttonUseIcon":true,"align":"center"} /-->',
);
