<?php
/**
 * Header Media
 */
return array(
	'title'      => esc_html__( 'Header Media', 'lensation' ),
	'categories' => array( 'lensation', 'featured' ),
	// 'blockTypes' => array( 'core/template-part/footer' ),
	'content'    => '<!-- wp:group {"align":"full","className":"header-media header-media-full-height"} -->
	<div class="wp-block-group alignfull header-media header-media-full-height"><!-- wp:group {"layout":{"inherit":true}} -->
	<div class="wp-block-group"><!-- wp:cover {"url":"' . get_parent_theme_file_uri( '/assets/images/header-media.jpeg' ) . '","id":7867,"dimRatio":50,"align":"full"} -->
	<div class="wp-block-cover alignfull"><span aria-hidden="true" class="wp-block-cover__background has-background-dim"></span><img class="wp-block-cover__image-background wp-image-7867" alt="" src="' . get_parent_theme_file_uri( '/assets/images/header-media.jpeg' ) . '" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:heading {"fontSize":"huge"} -->
	<h2 class="has-huge-font-size">' . esc_html__( 'Magnificient Flamingo', 'lensation' ) . '</h2>
	<!-- /wp:heading -->
	
	<!-- wp:paragraph -->
	<p>' . esc_html__( 'Make your photos look brilliant in today’s article we present tips on how to use colored lightning in the scenery.', 'lensation' ) . '</p>
	<!-- /wp:paragraph -->
	
	<!-- wp:buttons -->
	<div class="wp-block-buttons"><!-- wp:button {"textColor":"secondary","className":"is-style-outline"} -->
	<div class="wp-block-button is-style-outline"><a class="wp-block-button__link has-secondary-color has-text-color">' . esc_html__( 'Read More', 'lensation' ) . '</a></div>
	<!-- /wp:button --></div>
	<!-- /wp:buttons --></div></div>
	<!-- /wp:cover --></div>
	<!-- /wp:group --></div>
	<!-- /wp:group -->',
);


