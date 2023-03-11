<?php
/**
 * Blockpress: Footer with text, button, links, black background
 *
 * @package Blockpress
 */

return array(
	'title'         => __( 'Dark Footer with text, button, links', 'blockpress' ),
	'categories'    => array( 'blockpress-footer' ),
	'blockTypes'    => array( 'core/template-part/footer' ),
 
	'content'       => '<!-- wp:group {"align":"full","style":{"typography":{"fontSize":"18px"}},"backgroundColor":"dark","textColor":"textondark","layout":{"inherit":true}} -->
	<div class="wp-block-group alignfull has-textondark-color has-dark-background-color has-text-color has-background" style="font-size:18px"><!-- wp:columns {"align":"wide","style":{"elements":{"link":{"color":[]}},"spacing":{"padding":{"top":"80px","bottom":"50px"}}}} -->
	<div class="wp-block-columns alignwide has-link-color" style="padding-top:80px;padding-bottom:50px"><!-- wp:column {"width":"50%"} -->
	<div class="wp-block-column" style="flex-basis:50%"><!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"700"}},"fontSize":"big"} -->
	<p class="has-big-font-size" style="font-style:normal;font-weight:700">Our Company</p>
	<!-- /wp:paragraph -->
	
	<!-- wp:paragraph -->
	<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi</p>
	<!-- /wp:paragraph -->
	
	<!-- wp:buttons -->
	<div class="wp-block-buttons"><!-- wp:button {"style":{"border":{"radius":0}},"className":"is-style-fill-white"} -->
	<div class="wp-block-button is-style-fill-white"><a class="wp-block-button__link no-border-radius" href="#">Learn More</a></div>
	<!-- /wp:button --></div>
	<!-- /wp:buttons --></div>
	<!-- /wp:column -->
	
	<!-- wp:column {"width":"5%"} -->
	<div class="wp-block-column" style="flex-basis:5%"></div>
	<!-- /wp:column -->
	
	<!-- wp:column {"width":"15%"} -->
	<div class="wp-block-column" style="flex-basis:15%"><!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"700"}},"fontSize":"medium"} -->
	<p class="has-medium-font-size" style="font-style:normal;font-weight:700">About Us</p>
	<!-- /wp:paragraph -->
	
	<!-- wp:list {"style":{"typography":{"lineHeight":"2"},"elements":{"link":{"color":{"text":"#92a7c6"}}}},"className":"is-style-nounderline","fontSize":"small"} -->
	<ul class="is-style-nounderline has-link-color has-small-font-size" style="line-height:2"><li><a href="#">Start Here</a></li><li><a href="#">Our Mission</a></li><li><a href="#">Brand Guide</a></li><li><a href="#">Newsletter</a></li><li><a href="#">Accessibility</a></li></ul>
	<!-- /wp:list --></div>
	<!-- /wp:column -->
	
	<!-- wp:column {"width":"15%"} -->
	<div class="wp-block-column" style="flex-basis:15%"><!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"700"}},"fontSize":"medium"} -->
	<p class="has-medium-font-size" style="font-style:normal;font-weight:700">Services</p>
	<!-- /wp:paragraph -->
	
	<!-- wp:list {"style":{"typography":{"lineHeight":"2"},"elements":{"link":{"color":{"text":"#92a7c6"}}}},"className":"is-style-nounderline","fontSize":"small"} -->
	<ul class="is-style-nounderline has-link-color has-small-font-size" style="line-height:2"><li><a href="#">Web Design</a></li><li><a href="#">Development</a></li><li><a href="#">Copywriting</a></li><li><a href="#">Marketing</a></li><li><a href="#">Social Media</a></li></ul>
	<!-- /wp:list --></div>
	<!-- /wp:column -->
	
	<!-- wp:column {"width":"15%"} -->
	<div class="wp-block-column" style="flex-basis:15%"><!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"700"}},"fontSize":"medium"} -->
	<p class="has-medium-font-size" style="font-style:normal;font-weight:700">Connect</p>
	<!-- /wp:paragraph -->
	
	<!-- wp:list {"style":{"typography":{"lineHeight":"2"},"elements":{"link":{"color":{"text":"#92a7c6"}}}},"className":"is-style-nounderline","fontSize":"small"} -->
	<ul class="is-style-nounderline has-link-color has-small-font-size" style="line-height:2"><li><a href="#">Facebook</a></li><li><a href="#">Instagram</a></li><li><a style="font-family: var(--font-family-primary);font-size: var(--font-size-regular);font-weight: var(--font-weight-regular)" href="#">Twitter</a></li><li><a style="font-family: var(--font-family-primary);font-size: var(--font-size-regular);font-weight: var(--font-weight-regular)" href="#">LinkedIn</a></li><li><a href="#">Dribbble</a></li></ul>
	<!-- /wp:list --></div>
	<!-- /wp:column --></div>
	<!-- /wp:columns --></div>
	<!-- /wp:group -->',
);
