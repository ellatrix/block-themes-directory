<?php
/**
 * Hero 1
 * 
 * Title: Hero 1
 * Slug: it-firm/hero/1
 * Categories: it-firm-hero
 *
 * @package it-firm
 * @since 1.0.0
 */

return array(
	'title'      => esc_html__( 'Hero 1', 'it-firm' ),
	'categories' => array( 'it-firm-hero' ),
	'inserter'   => true,
	'content'    => '<!-- wp:group {"align":"full","backgroundColor":"background","layout":{"inherit":true}} -->
    <div class="wp-block-group alignfull has-background-background-color has-background"><!-- wp:separator {"align":"full","backgroundColor":"canvas","className":"is-style-wide"} -->
        <hr class="wp-block-separator alignfull has-text-color has-canvas-color has-alpha-channel-opacity has-canvas-background-color has-background is-style-wide"/>
        <!-- /wp:separator -->
        
        <!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"3%","right":"3%","bottom":"3%","left":"3%"}}}} -->
        <div class="wp-block-group alignwide" style="padding-top:3%;padding-right:3%;padding-bottom:3%;padding-left:3%"><!-- wp:spacer {"height":"40px"} -->
        <div style="height:40px" aria-hidden="true" class="wp-block-spacer"></div>
        <!-- /wp:spacer -->
        
        <!-- wp:columns {"verticalAlignment":"center"} -->
        <div class="wp-block-columns are-vertically-aligned-center"><!-- wp:column {"verticalAlignment":"center"} -->
        <div class="wp-block-column is-vertically-aligned-center"><!-- wp:heading {"textAlign":"left","level":6,"style":{"typography":{"fontStyle":"normal","fontWeight":"100"}}} -->
        <h6 class="has-text-align-left" style="font-style:normal;font-weight:100">Best In Market</h6>
        <!-- /wp:heading -->
        
        <!-- wp:heading {"textAlign":"left","style":{"typography":{"lineHeight":"1.3"}},"className":"marign-top-0"} -->
        <h2 class="has-text-align-left marign-top-0" style="line-height:1.3">We are not just an IT company,<br>we are a think-tank</h2>
        <!-- /wp:heading -->
        
        <!-- wp:paragraph {"align":"left"} -->
        <p class="has-text-align-left">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam ultrices ipsum nibh,<br>in malesuada purus fermentum vel.</p>
        <!-- /wp:paragraph -->
        
        <!-- wp:buttons {"layout":{"type":"flex","justifyContent":"left"}} -->
        <div class="wp-block-buttons"><!-- wp:button {"backgroundColor":"transparent","className":"is-style-grigora-button-diagonal-swipe"} -->
        <div class="wp-block-button is-style-grigora-button-diagonal-swipe"><a class="wp-block-button__link has-transparent-background-color has-background" href="#">Lets Begin</a></div>
        <!-- /wp:button --></div>
        <!-- /wp:buttons --></div>
        <!-- /wp:column -->
        
        <!-- wp:column {"verticalAlignment":"center"} -->
        <div class="wp-block-column is-vertically-aligned-center"><!-- wp:cover {"url":"'. esc_url( get_theme_file_uri( "assets/images/american-analyzing-brainstorming-business-business-people-businessman-1453379-pxhere.com_.webp" ) ) .'","id":318,"minHeight":644,"minHeightUnit":"px","customGradient":"radial-gradient(rgba(252,252,252,0) 56%,rgb(255,255,255) 56%)"} -->
        <div class="wp-block-cover" style="min-height:644px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-100 has-background-dim wp-block-cover__gradient-background has-background-gradient" style="background:radial-gradient(rgba(252,252,252,0) 56%,rgb(255,255,255) 56%)"></span><img class="wp-block-cover__image-background wp-image-318" alt="" src="'. esc_url( get_theme_file_uri( "assets/images/american-analyzing-brainstorming-business-business-people-businessman-1453379-pxhere.com_.webp" ) ) .'" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:paragraph {"align":"center","placeholder":"Write title…","fontSize":"large"} -->
        <p class="has-text-align-center has-large-font-size"></p>
        <!-- /wp:paragraph --></div></div>
        <!-- /wp:cover --></div>
        <!-- /wp:column --></div>
        <!-- /wp:columns -->
        
        <!-- wp:spacer {"height":"40px"} -->
        <div style="height:40px" aria-hidden="true" class="wp-block-spacer"></div>
        <!-- /wp:spacer --></div>
        <!-- /wp:group --></div>
        <!-- /wp:group -->',
);