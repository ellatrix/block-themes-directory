<?php
/**
 * Header with Search Bar
 */
return array(
	'title'      => esc_html__( 'Header With Search Bar', 'axton' ),
	'categories' => array( 'axton', 'header' ),
	'content'    => '<!-- wp:group {"align":"full","layout":{"inherit":true}} -->
	<div class="wp-block-group alignfull"><!-- wp:group {"align":"full","className":"main-site-header","layout":{"inherit":true}} -->
	<div class="wp-block-group alignfull main-site-header"><!-- wp:group {"align":"full","layout":{"type":"flex","justifyContent":"space-between"}} -->
	<div class="wp-block-group alignfull"><!-- wp:group {"className":"site-logo","layout":{"type":"flex"}} -->
	<div class="wp-block-group site-logo"><!-- wp:site-logo {"width":44,"shouldSyncIcon":true} /-->
	
	<!-- wp:site-title /--></div>
	<!-- /wp:group -->
	
	<!-- wp:navigation {"className":"site-navigation","layout":{"type":"flex","setCascadingProperties":true,"justifyContent":"left"}} /-->
	
	<!-- wp:group {"className":"site-header-buttons header-with-searchbar","layout":{"type":"flex","allowOrientation":false}} -->
	<div class="wp-block-group site-header-buttons header-with-searchbar"><!-- wp:search {"label":"","showLabel":false,"placeholder":"Search Here...","buttonText":"Search","buttonUseIcon":true} /--></div>
	<!-- /wp:group --></div>
	<!-- /wp:group --></div>
	<!-- /wp:group --></div>
	<!-- /wp:group -->',
);



