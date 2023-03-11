<?php
/**
 * Hero with three columns block pattern
 */
return array(
	'title'	  => __( 'Hero & Three Columns', 'bricksy' ),
	'categories' => array( 'bricksy-general', 'featured' ),
	'content'	=> '<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"4rem","right":"2rem","bottom":"4rem","left":"2rem"}},"color":{"gradient":"linear-gradient(135deg,rgb(255,255,255) 40%,rgb(0,0,0) 40%)"}},"className":"dololo-team"} -->
	<div class="wp-block-group alignfull dololo-team has-background" style="background:linear-gradient(135deg,rgb(255,255,255) 40%,rgb(0,0,0) 40%);padding-top:4rem;padding-right:2rem;padding-bottom:4rem;padding-left:2rem"><!-- wp:group {"align":"wide","layout":{"inherit":true}} -->
	<div class="wp-block-group alignwide"><!-- wp:columns {"align":"wide","className":"is-style-default"} -->
	<div class="wp-block-columns alignwide is-style-default"><!-- wp:column {"style":{"spacing":{"padding":{"top":"4rem","right":"2rem","bottom":"4rem","left":"2rem"}}},"backgroundColor":"white"} -->
	<div class="wp-block-column has-white-background-color has-background" style="padding-top:4rem;padding-right:2rem;padding-bottom:4rem;padding-left:2rem"><!-- wp:image {"align":"center","sizeSlug":"large","linkDestination":"none","className":"size-full is-style-rounded","extUtilities":[]} -->
	<div class="wp-block-image size-full is-style-rounded"><figure class="aligncenter size-large"><img src="' . esc_url( get_template_directory_uri() ) . '/assets/images/people-1.jpg" alt="' . esc_attr__( 'Team One', 'bricksy' ) . '" /></figure></div>
	<!-- /wp:image -->
	
	<!-- wp:paragraph {"align":"center","backgroundColor":"tertiary"} -->
	<p class="has-text-align-center has-tertiary-background-color has-background"><strong>' . esc_html__( 'Summer', 'bricksy' ) . '<br></strong><em>' . esc_html__( 'Follow our news on social', 'bricksy' ) . '</em></p>
	<!-- /wp:paragraph -->
	
	<!-- wp:separator {"align":"full","className":"is-style-default"} -->
	<hr class="wp-block-separator alignfull is-style-default"/>
	<!-- /wp:separator -->
	
	<!-- wp:social-links {"iconColor":"white","iconColorValue":"#ffffff","iconBackgroundColor":"black","iconBackgroundColorValue":"#000000","className":"items-justified-center is-style-default","layout":{"type":"flex","justifyContent":"center"}} -->
	<ul class="wp-block-social-links has-icon-color has-icon-background-color items-justified-center is-style-default"><!-- wp:social-link {"url":"https://instagram.com","service":"instagram"} /-->
	
	<!-- wp:social-link {"url":"https://facebook.com","service":"facebook"} /-->
	
	<!-- wp:social-link {"url":"https://twitter.com","service":"twitter"} /--></ul>
	<!-- /wp:social-links --></div>
	<!-- /wp:column -->
	
	<!-- wp:column {"style":{"elements":{"link":{"color":[]}},"spacing":{"padding":{"top":"4rem","right":"2rem","bottom":"4rem","left":"2rem"}}},"backgroundColor":"white"} -->
	<div class="wp-block-column has-white-background-color has-background has-link-color" style="padding-top:4rem;padding-right:2rem;padding-bottom:4rem;padding-left:2rem"><!-- wp:image {"align":"center","sizeSlug":"large","linkDestination":"none","className":"size-full is-style-rounded","extUtilities":[]} -->
	<div class="wp-block-image size-full is-style-rounded"><figure class="aligncenter size-large"><img src="' . esc_url( get_template_directory_uri() ) . '/assets/images/people-2.jpg" alt="' . esc_attr__( 'Team One', 'bricksy' ) . '" /></figure></div>
	<!-- /wp:image -->
	
	<!-- wp:paragraph {"align":"center","backgroundColor":"secondary"} -->
	<p class="has-text-align-center has-secondary-background-color has-background"><strong>' . esc_html__( 'Nature Time', 'bricksy' ) . '<br></strong><em>' . esc_html__( 'Our tips &amp; recommendations', 'bricksy' ) . '</em></p>
	<!-- /wp:paragraph -->
	
	<!-- wp:separator {"align":"full","className":"is-style-default"} -->
	<hr class="wp-block-separator alignfull is-style-default"/>
	<!-- /wp:separator -->
	
	<!-- wp:social-links {"customIconColor":"#ffffff","iconColorValue":"#ffffff","customIconBackgroundColor":"#000000","iconBackgroundColorValue":"#000000","className":"items-justified-center","layout":{"type":"flex","justifyContent":"center"}} -->
	<ul class="wp-block-social-links has-icon-color has-icon-background-color items-justified-center"><!-- wp:social-link {"url":"https://instagram.com","service":"instagram"} /-->
	
	<!-- wp:social-link {"url":"https://facebook.com","service":"facebook"} /-->
	
	<!-- wp:social-link {"url":"https://twitter.com","service":"twitter"} /--></ul>
	<!-- /wp:social-links --></div>
	<!-- /wp:column -->
	
	<!-- wp:column {"style":{"elements":{"link":{"color":[]}},"spacing":{"padding":{"top":"4rem","right":"2rem","bottom":"2rem","left":"2rem"}}},"backgroundColor":"white"} -->
	<div class="wp-block-column has-white-background-color has-background has-link-color" style="padding-top:4rem;padding-right:2rem;padding-bottom:2rem;padding-left:2rem"><!-- wp:image {"align":"center","sizeSlug":"large","linkDestination":"none","className":"size-full is-style-rounded","extUtilities":[]} -->
	<div class="wp-block-image size-full is-style-rounded"><figure class="aligncenter size-large"><img src="' . esc_url( get_template_directory_uri() ) . '/assets/images/people-3.jpg" alt="' . esc_attr__( 'Team One', 'bricksy' ) . '" /></figure></div>
	<!-- /wp:image -->
	
	<!-- wp:paragraph {"align":"center","backgroundColor":"primary"} -->
	<p class="has-text-align-center has-primary-background-color has-background"><strong>' . esc_html__( 'Popular Destinations', 'bricksy' ) . '<br></strong><em>' . esc_html__( 'Our latest trends', 'bricksy' ) . '</em></p>
	<!-- /wp:paragraph -->
	
	<!-- wp:separator {"align":"full","className":"is-style-default"} -->
	<hr class="wp-block-separator alignfull is-style-default"/>
	<!-- /wp:separator -->
	
	<!-- wp:social-links {"customIconColor":"#ffffff","iconColorValue":"#ffffff","customIconBackgroundColor":"#000000","iconBackgroundColorValue":"#000000","className":"items-justified-center","layout":{"type":"flex","justifyContent":"center"}} -->
	<ul class="wp-block-social-links has-icon-color has-icon-background-color items-justified-center"><!-- wp:social-link {"url":"https://instagram.com","service":"instagram"} /-->
	
	<!-- wp:social-link {"url":"https://facebook.com","service":"facebook"} /-->
	
	<!-- wp:social-link {"url":"https://twitter.com","service":"twitter"} /--></ul>
	<!-- /wp:social-links --></div>
	<!-- /wp:column --></div>
	<!-- /wp:columns --></div>
	<!-- /wp:group --></div>
	<!-- /wp:group -->',
);
