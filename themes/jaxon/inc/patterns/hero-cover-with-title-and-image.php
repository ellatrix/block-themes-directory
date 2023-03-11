<?php
/**
 * Pattern
 *
 * @author Themeisle
 * @package jaxon
 * @since 1.0.0
 *
 * slug: hero-cover-with-title-and-image
 * title: Hero cover with title and image
 * categories: Jaxon
 * keywords: hero, cover
 */

use Jaxon\Assets_Manager;


return array(
	'title'      => __( 'Hero cover with title and button', 'jaxon' ),
	'categories' => array( 'jaxon' ),
	'content'    => '
    <!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"48px","bottom":"48px"},"margin":{"top":"0px","bottom":"0px"}}},"layout":{"type":"constrained"}} -->
    <div class="wp-block-group alignfull" style="margin-top:0px;margin-bottom:0px;padding-top:48px;padding-bottom:48px"><!-- wp:columns {"align":"wide"} -->
    <div class="wp-block-columns alignwide"><!-- wp:column {"verticalAlignment":"center","width":"50%"} -->
    <div class="wp-block-column is-vertically-aligned-center" style="flex-basis:50%"><!-- wp:heading {"level":6,"style":{"typography":{"textTransform":"uppercase"}},"textColor":"ti-accent"} -->
    <h6 class="has-ti-accent-color has-text-color" style="text-transform:uppercase">Starting from $347</h6>
    <!-- /wp:heading -->
    
    <!-- wp:heading {"level":1} -->
    <h1>New Autumn <br>Collection</h1>
    <!-- /wp:heading -->
    
    <!-- wp:paragraph -->
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor ut labore et dolore.</p>
    <!-- /wp:paragraph -->
    
    <!-- wp:buttons {"fontSize":"normal"} -->
    <div class="wp-block-buttons has-custom-font-size has-normal-font-size"><!-- wp:button -->
    <div class="wp-block-button"><a class="wp-block-button__link wp-element-button">' . __( 'This is a button', 'jaxon' ) . '</a></div>
    <!-- /wp:button --></div>
    <!-- /wp:buttons -->
    
    <!-- wp:spacer {"height":"20px"} -->
    <div style="height:20px" aria-hidden="true" class="wp-block-spacer"></div>
    <!-- /wp:spacer --></div>
    <!-- /wp:column -->
    
    <!-- wp:column -->
    <div class="wp-block-column"><!-- wp:group {"style":{"border":{"radius":{"topLeft":"160px","topRight":"0px","bottomLeft":"0px","bottomRight":"160px"}},"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"}}},"backgroundColor":"ti-bg-alt","layout":{"type":"constrained"}} -->
    <div class="wp-block-group has-ti-bg-alt-background-color has-background" style="border-top-left-radius:160px;border-top-right-radius:0px;border-bottom-left-radius:0px;border-bottom-right-radius:160px;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:image {"align":"center","width":466,"height":675,"sizeSlug":"full","linkDestination":"none","className":"is-style-default"} -->
    <figure class="wp-block-image aligncenter size-full is-resized is-style-default"><img src="' . esc_url( Assets_Manager::get_image_url( 'jaxon-main-image-9.png' ) ) . '" width="466" height="675"/></figure>
    <!-- /wp:image --></div>
    <!-- /wp:group --></div>
    <!-- /wp:column --></div>
    <!-- /wp:columns --></div>
    <!-- /wp:group -->
',
);

