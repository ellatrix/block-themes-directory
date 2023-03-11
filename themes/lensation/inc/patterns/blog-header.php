<?php
/**
 * Blog Header
 */
return array(
	'title'      => esc_html__( 'Blog Header', 'lensation' ),
	'categories' => array( 'lensation', 'header' ),
	'content'    => '<!-- wp:group {"align":"full","className":"no-margin-top wp-inner-post-header","layout":{"inherit":true}} -->
	<div class="wp-block-group alignfull no-margin-top wp-inner-post-header"><!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"0px","right":"0px","bottom":"0px","left":"0px"}}},"layout":{"inherit":false}} -->
	<div class="wp-block-group alignfull" style="padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px"><!-- wp:cover {"url":"' . get_parent_theme_file_uri( '/assets/images/header-background.jpg' ) . '","dimRatio":20,"overlayColor":"body-text"} -->
	<div class="wp-block-cover"><span aria-hidden="true" class="wp-block-cover__background has-body-text-background-color has-background-dim-20 has-background-dim"></span><img class="wp-block-cover__image-background" alt="" src="' . get_parent_theme_file_uri( '/assets/images/header-background.jpg' ) . '" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:group {"layout":{"inherit":true}} -->
	<div class="wp-block-group"><!-- wp:group {"className":"alignwide"} -->
	<div class="wp-block-group alignwide"><!-- wp:heading {"textAlign":"center","level":1,"className":"wp-block-query-title"} -->
	<h1 class="has-text-align-center wp-block-query-title">' . esc_html__( 'Blog', 'lensation' ) . '</h1>
	<!-- /wp:heading --></div>
	<!-- /wp:group --></div>
	<!-- /wp:group --></div></div>
	<!-- /wp:cover --></div>
	<!-- /wp:group --></div>
	<!-- /wp:group -->',
);


