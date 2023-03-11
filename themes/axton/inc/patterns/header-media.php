<?php
/**
 * Header Media
 */
return array(
	'title'      => esc_html__( 'Header Media', 'axton' ),
	'categories' => array( 'axton', 'featured' ),
	// 'blockTypes' => array( 'core/template-part/footer' ),
	'content'    => '<!-- wp:group {"align":"full"} -->
	<div class="wp-block-group alignfull"><!-- wp:group {"layout":{"inherit":true}} -->
	<div class="wp-block-group"><!-- wp:group {"align":"wide","className":"wp-block-section"} -->
	<div class="wp-block-group alignwide wp-block-section"><!-- wp:columns -->
	<div class="wp-block-columns"><!-- wp:column {"width":"70%","className":"wp-block-column-wrap  wp-header-media-wrap"} -->
	<div class="wp-block-column wp-block-column-wrap  wp-header-media-wrap" style="flex-basis:70%"><!-- wp:group {"className":"wp-block-heading-wrap"} -->
	<div class="wp-block-group wp-block-heading-wrap"><!-- wp:heading {"level":6,"style":{"typography":{"textTransform":"uppercase"}},"className":"section-tagline"} -->
	<h6 class="section-tagline" style="text-transform:uppercase">' . esc_html__( 'Selected Works', 'axton' ) . '</h6>
	<!-- /wp:heading -->
	
	<!-- wp:heading {"level":1,"fontSize":"huge"} -->
	<h1 class="has-huge-font-size">' . esc_html__( 'Build a Portfolio Design & Photography', 'axton' ) . '</h1>
	<!-- /wp:heading --></div>
	<!-- /wp:group --></div>
	<!-- /wp:column -->
	
	
	<!-- wp:column {"width":"30%"} -->
	<div class="wp-block-column" style="flex-basis:30%"></div>
	<!-- /wp:column --></div>
	<!-- /wp:columns --></div>
	<!-- /wp:group -->
	
	<!-- wp:group {"align":"full","className":"wp-block-media-wrap"} -->
	<div class="wp-block-group alignfull wp-block-media-wrap"><!-- wp:image {"align":"full","id":7332,"sizeSlug":"large","linkDestination":"none"} -->
	<figure class="wp-block-image alignfull size-large"><img src="' . get_parent_theme_file_uri( '/assets/images/header-media.jpg' ) . '" alt="" class="wp-image-7332"/></figure>
	<!-- /wp:image --></div>
	<!-- /wp:group --></div>
	<!-- /wp:group --></div>
	<!-- /wp:group -->',
);


