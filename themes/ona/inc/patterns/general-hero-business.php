<?php
/**
 * General: hero business
 */
return array(
	'title'      => __( 'Hero business', 'ona' ),
	'categories' => array( 'ona-general' ),
	'content'    => '
			<!-- wp:group {"style":{"spacing":{"padding":{"bottom":"96px","right":"1.5rem","left":"1.5rem","top":"96px"}}},"className":"is-style-no-spacing","layout":{"inherit":false,"contentSize":"1170px","type":"constrained"}} -->
			<div class="wp-block-group is-style-no-spacing" style="padding-top:96px;padding-right:1.5rem;padding-bottom:96px;padding-left:1.5rem"><!-- wp:columns -->
			<div class="wp-block-columns"><!-- wp:column {"width":"70%"} -->
			<div class="wp-block-column" style="flex-basis:70%"><!-- wp:heading {"level":1,"fontSize":"x-large"} -->
			<h1 class="has-x-large-font-size">'. __( 'We believe in incredible business with Ona', 'ona' ) . '</h1>
			<!-- /wp:heading --></div>
			<!-- /wp:column --></div>
			<!-- /wp:columns --></div>
			<!-- /wp:group -->
			<!-- wp:image {"align":"full","id":284,"sizeSlug":"full","linkDestination":"none"} -->
			<figure class="wp-block-image alignfull size-full"><img src="' . esc_url( get_template_directory_uri() ) . '/assets/img/business/ona_business_hero.jpg" alt="" class="wp-image-284"/></figure>
			<!-- /wp:image -->
			',
);



