<?php
/**
 * Logo
 */
return array(
	'title'      => esc_html__( 'Logo', 'axton' ),
	'categories' => array( 'axton', 'featured' ),
	// 'blockTypes' => array( 'core/template-part/footer' ),
	'content'    => '<!-- wp:group {"align":"full","className":"wp-block-section","layout":{"inherit":true}} -->
	<div class="wp-block-group alignfull wp-block-section"><!-- wp:columns {"align":"wide","className":"logo-columns"} -->
	<div class="wp-block-columns alignwide logo-columns"><!-- wp:column -->
	<div class="wp-block-column"><!-- wp:image {"id":2144,"sizeSlug":"full","linkDestination":"none"} -->
	<figure class="wp-block-image size-full"><img src="' . esc_url( get_parent_theme_file_uri( '/assets/images/logo-1.png' ) ) . '" alt="" class="wp-image-2144"/></figure>
	<!-- /wp:image --></div>
	<!-- /wp:column -->
	
	<!-- wp:column -->
	<div class="wp-block-column"><!-- wp:image {"id":2145,"sizeSlug":"full","linkDestination":"none"} -->
	<figure class="wp-block-image size-full"><img src="' . esc_url( get_parent_theme_file_uri( '/assets/images/logo-2.png' ) ) . '" alt="" class="wp-image-2145"/></figure>
	<!-- /wp:image --></div>
	<!-- /wp:column -->
	
	<!-- wp:column -->
	<div class="wp-block-column"><!-- wp:image {"id":2146,"sizeSlug":"full","linkDestination":"none"} -->
	<figure class="wp-block-image size-full"><img src="' . esc_url( get_parent_theme_file_uri( '/assets/images/logo-3.png' ) ) . '" alt="" class="wp-image-2146"/></figure>
	<!-- /wp:image --></div>
	<!-- /wp:column -->
	
	<!-- wp:column -->
	<div class="wp-block-column"><!-- wp:image {"id":2147,"sizeSlug":"full","linkDestination":"none"} -->
	<figure class="wp-block-image size-full"><img src="' . esc_url( get_parent_theme_file_uri( '/assets/images/logo-4.png' ) ) . '" alt="" class="wp-image-2147"/></figure>
	<!-- /wp:image --></div>
	<!-- /wp:column -->
	
	<!-- wp:column -->
	<div class="wp-block-column"><!-- wp:image {"id":2147,"sizeSlug":"full","linkDestination":"none"} -->
	<figure class="wp-block-image size-full"><img src="' . esc_url( get_parent_theme_file_uri( '/assets/images/logo-5.png' ) ) . '" alt="" class="wp-image-2147"/></figure>
	<!-- /wp:image --></div>
	<!-- /wp:column --></div>
	<!-- /wp:columns --></div>
	<!-- /wp:group -->',
);

