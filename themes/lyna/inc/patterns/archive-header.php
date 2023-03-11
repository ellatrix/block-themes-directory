<?php
/**
 * Archive Header
 */
return array(
	'title'      => esc_html__( 'Archive Header', 'lyna' ),
	'categories' => array( 'lyna', 'header' ),
	'content'    => '<!-- wp:group {"align":"full","className":"no-margin-top banner","style":{"spacing":{"padding":{"top":"0px","right":"0px","bottom":"0px","left":"0px"}}},"layout":{"inherit":false}} -->
	<div class="wp-block-group alignfull banner" style="padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px"><!-- wp:cover {"url":"' . esc_url( get_theme_file_uri( '/assets/images/banner.jpg' ) ) . '","dimRatio":0,"overlayColor":"body-text"} -->
	<div class="wp-block-cover"><span aria-hidden="true" class="wp-block-cover__background has-body-text-background-color has-background-dim-0 has-background-dim"></span><img class="wp-block-cover__image-background" alt="" src="' . esc_url( get_theme_file_uri( '/assets/images/banner.jpg' ) ) . '" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:group {"layout":{"inherit":true}} -->
	<div class="wp-block-group"><!-- wp:group {"className":"alignwide"} -->
	<div class="wp-block-group alignwide"><!-- wp:query-title {"type":"archive","textAlign":"center","textColor":"foreground"} /-->
	
	<!-- wp:term-description {"textAlign":"center"} /--></div>
	<!-- /wp:group --></div>
	<!-- /wp:group --></div></div>
	<!-- /wp:cover --></div>
	<!-- /wp:group -->',
);
