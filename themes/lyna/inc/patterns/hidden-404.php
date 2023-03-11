<?php
/**
 * 404 content.
 */
return array(
	'title'    => esc_html__( '404 content', 'lyna' ),
	'inserter' => false,
	'content'  => '<!-- wp:paragraph {"align":"center"} -->
					<p class="has-text-align-center">' . esc_html__( 'This page could not be found. Maybe try a search?', 'lyna' ) . '</p>
					<!-- /wp:paragraph -->
					<!-- wp:search {"label":"Search","showLabel":false,"placeholder":"Search...","widthUnit":"%","buttonText":"Search","buttonUseIcon":true,"align":"center"} /-->',
);
