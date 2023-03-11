<?php
/**
 * Two column team block pattern
 */
return array(
	'title'	  => __( 'Two Column Team', 'bricksy' ),
	'categories' => array( 'bricksy-general', 'featured' ),
	'content'	=> '<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"right":"2rem","left":"2rem"}}}} -->
	<div class="wp-block-group alignfull" style="padding-right:2rem;padding-left:2rem"><!-- wp:group {"layout":{"inherit":true}} -->
	<div class="wp-block-group"><!-- wp:columns {"align":"wide"} -->
	<div class="wp-block-columns alignwide"><!-- wp:column -->
	<div class="wp-block-column"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":{"topLeft":"0px","topRight":"0px","bottomLeft":null,"bottomRight":null}}},"className":"is-style-nelly-round-edges is-style-dololo-round-edges is-style-default"} -->
	<figure class="wp-block-image size-full is-style-nelly-round-edges is-style-dololo-round-edges is-style-default" style="border-top-left-radius:0px;border-top-right-radius:0px"><img src="' . esc_url( get_template_directory_uri() ) . '/assets/images/people-2.jpg" alt="' . esc_attr__( 'People One', 'bricksy' ) . '"/></figure>
	<!-- /wp:image --></div>
	<!-- /wp:column -->
	
	<!-- wp:column -->
	<div class="wp-block-column"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":{"topLeft":"0px","topRight":"0px","bottomLeft":null,"bottomRight":null}}},"className":"is-style-nelly-round-edges is-style-dololo-round-edges is-style-default"} -->
	<figure class="wp-block-image size-full is-style-nelly-round-edges is-style-dololo-round-edges is-style-default" style="border-top-left-radius:0px;border-top-right-radius:0px"><img src="' . esc_url( get_template_directory_uri() ) . '/assets/images/people-1.jpg" alt="' . esc_attr__( 'People Two', 'bricksy' ) . '"/></figure>
	<!-- /wp:image --></div>
	<!-- /wp:column --></div>
	<!-- /wp:columns -->
	
	<!-- wp:columns {"align":"wide"} -->
	<div class="wp-block-columns alignwide"><!-- wp:column {"verticalAlignment":"top","style":{"spacing":{"padding":{"top":"35px","right":"35px","bottom":"35px","left":"35px"}},"color":{"gradient":"linear-gradient(315deg,rgb(0,0,0) 93%,rgb(255,255,255) 93%)"}},"textColor":"background"} -->
	<div class="wp-block-column is-vertically-aligned-top has-background-color has-text-color has-background" style="background:linear-gradient(315deg,rgb(0,0,0) 93%,rgb(255,255,255) 93%);padding-top:35px;padding-right:35px;padding-bottom:35px;padding-left:35px"><!-- wp:heading {"textAlign":"left","style":{"typography":{"textTransform":"capitalize","fontStyle":"normal","fontWeight":"700","lineHeight":"0.1"},"spacing":{"margin":{"top":"40px"}}},"fontSize":"large"} -->
	<h2 class="has-text-align-left has-large-font-size" style="font-style:normal;font-weight:700;line-height:0.1;text-transform:capitalize;margin-top:40px">' . esc_html__( 'Lily Doe', 'bricksy' ) . '</h2>
	<!-- /wp:heading -->
	
	<!-- wp:paragraph {"align":"left","style":{"typography":{"lineHeight":"0.1","fontStyle":"normal","fontWeight":"400","fontSize":"14px"}}} -->
	<p class="has-text-align-left" style="font-size:14px;font-style:normal;font-weight:400;line-height:0.1">' . esc_html__( 'Artist', 'bricksy' ) . '</p>
	<!-- /wp:paragraph -->
	
	<!-- wp:paragraph {"align":"left","style":{"typography":{"fontStyle":"normal","fontWeight":"300","fontSize":"16px"}}} -->
	<p class="has-text-align-left" style="font-size:16px;font-style:normal;font-weight:300">' . esc_html__( 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'bricksy' ) . '</p>
	<!-- /wp:paragraph --></div>
	<!-- /wp:column -->
	
	<!-- wp:column {"verticalAlignment":"top","style":{"spacing":{"padding":{"top":"35px","right":"35px","bottom":"35px","left":"35px"}},"color":{"gradient":"linear-gradient(315deg,rgb(0,0,0) 93%,rgb(255,255,255) 93%)"}},"textColor":"background"} -->
	<div class="wp-block-column is-vertically-aligned-top has-background-color has-text-color has-background" style="background:linear-gradient(315deg,rgb(0,0,0) 93%,rgb(255,255,255) 93%);padding-top:35px;padding-right:35px;padding-bottom:35px;padding-left:35px"><!-- wp:heading {"textAlign":"left","style":{"typography":{"textTransform":"capitalize","fontStyle":"normal","fontWeight":"700","lineHeight":"0.1"},"spacing":{"margin":{"top":"40px"}}},"fontSize":"large"} -->
	<h2 class="has-text-align-left has-large-font-size" style="font-style:normal;font-weight:700;line-height:0.1;text-transform:capitalize;margin-top:40px">' . esc_html__( 'Amie Smile', 'bricksy' ) . '</h2>
	<!-- /wp:heading -->
	
	<!-- wp:paragraph {"align":"left","style":{"typography":{"lineHeight":"0.1","fontStyle":"normal","fontWeight":"400","fontSize":"14px"}}} -->
	<p class="has-text-align-left" style="font-size:14px;font-style:normal;font-weight:400;line-height:0.1">' . esc_html__( 'Artist', 'bricksy' ) . '</p>
	<!-- /wp:paragraph -->
	
	<!-- wp:paragraph {"align":"left","style":{"typography":{"fontStyle":"normal","fontWeight":"300","fontSize":"16px"}}} -->
	<p class="has-text-align-left" style="font-size:16px;font-style:normal;font-weight:300">' . esc_html__( 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'bricksy' ) . '</p>
	<!-- /wp:paragraph --></div>
	<!-- /wp:column --></div>
	<!-- /wp:columns --></div>
	<!-- /wp:group --></div>
	<!-- /wp:group -->',
);
