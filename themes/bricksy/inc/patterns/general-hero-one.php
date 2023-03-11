<?php
/**
 * Hero with image gallery block pattern
 */
return array(
	'title'	  => __( 'Hero with image gallery', 'bricksy' ),
	'categories' => array( 'bricksy-general', 'featured' ),
	'content'	=> '<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"120px","bottom":"120px"}},"color":{"text":"#40544c","gradient":"linear-gradient(32deg,rgb(0,0,0) 74%,rgb(255,255,255) 74%)"}}} -->
	<div class="wp-block-group alignfull has-text-color has-background" style="background:linear-gradient(32deg,rgb(0,0,0) 74%,rgb(255,255,255) 74%);color:#40544c;padding-top:120px;padding-bottom:120px"><!-- wp:group {"align":"wide"} -->
	<div class="wp-block-group alignwide"><!-- wp:columns {"align":"wide"} -->
	<div class="wp-block-columns alignwide"><!-- wp:column {"verticalAlignment":"center","width":"40%","style":{"spacing":{"padding":{"bottom":"0%","left":"0%","top":"0%","right":"0%"}}}} -->
	<div class="wp-block-column is-vertically-aligned-center" style="padding-top:0%;padding-right:0%;padding-bottom:0%;padding-left:0%;flex-basis:40%"><!-- wp:heading {"level":1,"style":{"typography":{"fontSize":"52px"}},"textColor":"white"} -->
	<h1 class="has-white-color has-text-color" style="font-size:52px"><strong>' . esc_html__( 'Heading One', 'bricksy' ) . '</strong></h1>
	<!-- /wp:heading -->
		
	<!-- wp:paragraph {"textColor":"white"} -->
	<p class="has-white-color has-text-color">' . esc_html__( 'Sed gravida ornare vestibulum turpis quam urna aliquam in feugiat lorem dolor pulvinar a, scelerisque amet ultrices consectetur magna sit.', 'bricksy' ) . '</p>
	<!-- /wp:paragraph -->
		
	<!-- wp:buttons -->
	<div class="wp-block-buttons"><!-- wp:button {"textColor":"background","style":{"border":{"radius":"0px"},"typography":{"fontSize":"16px"}},"className":"is-style-outline"} -->
	<div class="wp-block-button has-custom-font-size is-style-outline" style="font-size:16px"><a class="wp-block-button__link has-background-color has-text-color" style="border-radius:0px">' . esc_html__( 'SHOP TODAY', 'bricksy' ) . '</a></div>
	<!-- /wp:button --></div>
	<!-- /wp:buttons --></div>
	<!-- /wp:column -->
		
	<!-- wp:column -->
	<div class="wp-block-column"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":{"topLeft":"100px","topRight":"10px","bottomLeft":null,"bottomRight":null}}},"className":"is-style-nelly-round-edges is-style-dololo-round-edges is-style-default"} -->
	<figure class="wp-block-image size-full is-style-nelly-round-edges is-style-dololo-round-edges is-style-default" style="border-top-left-radius:100px;border-top-right-radius:10px"><img src="' . esc_url( get_template_directory_uri() ) . '/assets/images/gallery-3.jpg" alt="' . esc_attr__( 'Gallery One', 'bricksy' ) . '"/></figure>
	<!-- /wp:image -->
		
	<!-- wp:image {"sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":{"topLeft":"0px","topRight":"0px","bottomLeft":"100px","bottomRight":"10px"}}},"className":"is-style-nelly-round-edges is-style-dololo-round-edges is-style-default"} -->
	<figure class="wp-block-image size-full is-style-nelly-round-edges is-style-dololo-round-edges is-style-default" style="border-top-left-radius:0px;border-top-right-radius:0px;border-bottom-left-radius:100px;border-bottom-right-radius:10px"><img src="' . esc_url( get_template_directory_uri() ) . '/assets/images/gallery-1.jpg" alt="' . esc_attr__( 'Gallery Two', 'bricksy' ) . '"/></figure>
	<!-- /wp:image --></div>
	<!-- /wp:column -->
		
	<!-- wp:column -->
	<div class="wp-block-column"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":{"topLeft":"10px","topRight":"100px","bottomLeft":null,"bottomRight":null}}},"className":"is-style-nelly-round-edges is-style-dololo-round-edges is-style-default"} -->
	<figure class="wp-block-image size-full is-style-nelly-round-edges is-style-dololo-round-edges is-style-default" style="border-top-left-radius:10px;border-top-right-radius:100px"><img src="' . esc_url( get_template_directory_uri() ) . '/assets/images/gallery-2.jpg" alt="' . esc_attr__( 'Gallery Three', 'bricksy' ) . '"/></figure>
	<!-- /wp:image -->
		
	<!-- wp:image {"sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":{"topLeft":"0px","topRight":"0px","bottomLeft":"10px","bottomRight":"100px"}}},"className":"is-style-nelly-round-edges is-style-dololo-round-edges is-style-default"} -->
	<figure class="wp-block-image size-full is-style-nelly-round-edges is-style-dololo-round-edges is-style-default" style="border-top-left-radius:0px;border-top-right-radius:0px;border-bottom-left-radius:10px;border-bottom-right-radius:100px"><img src="' . esc_url( get_template_directory_uri() ) . '/assets/images/gallery-4.jpg" alt="' . esc_attr__( 'Gallery Four', 'bricksy' ) . '"/></figure>
	<!-- /wp:image --></div>
	<!-- /wp:column --></div>
	<!-- /wp:columns --></div>
	<!-- /wp:group --></div>
	<!-- /wp:group -->',
);
