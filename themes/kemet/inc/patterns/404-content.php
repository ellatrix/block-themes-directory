<?php
/**
 * 404 content.
 */
return array(
	'title'    => __( '404 content', 'kemet' ),
	'inserter' => false,
	'content'  => '<!-- wp:group {"tagName":"main","style":{"spacing":{"padding":{"top":"5rem","bottom":"7rem"}}},"layout":{"inherit":true}} -->
	<main class="wp-block-group" style="padding-top:5rem;padding-bottom:7rem"><!-- wp:heading {"textAlign":"center","align":"wide"} -->
	<h2 class="alignwide has-text-align-center" id="oops-this-page-can-t-be-found-1">' . esc_html__( "Oops! This page can't be found.", "kemet" ) . '</h2>
	<!-- /wp:heading -->
	
	<!-- wp:group {"style":{"spacing":{"padding":{"top":"2px","bottom":"2px"}}},"layout":{"inherit":false,"contentSize":"70%"}} -->
	<div class="wp-block-group" style="padding-top:2px;padding-bottom:2px"><!-- wp:paragraph {"align":"center"} -->
	<p class="has-text-align-center">' . esc_html__( 'The page you are looking for does not exist or may have been moved/renamed. Please try a search.', 'kemet') . '</p>
	<!-- /wp:paragraph -->
	
	<!-- wp:search {"label":"","buttonText":"Search","buttonPosition":"button-inside","buttonUseIcon":true} /--></div>
	<!-- /wp:group --></main>
	<!-- /wp:group -->',
);