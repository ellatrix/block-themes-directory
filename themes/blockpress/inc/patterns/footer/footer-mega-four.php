<?php

return array(
	'title'         => __( 'Mega Footer with 4 columns', 'blockpress' ),
	'categories'    => array( 'blockpress-footer' ),
	'blockTypes'    => array( 'core/template-part/footer' ),
 
	'content'       => '<!-- wp:group {"align":"full","style":{"typography":{"fontSize":"18px"}},"backgroundColor":"dark","textColor":"textondark","layout":{"inherit":true}} -->
	<div class="wp-block-group alignfull has-textondark-color has-dark-background-color has-text-color has-background" style="font-size:18px"><!-- wp:columns {"align":"wide","style":{"elements":{"link":{"color":[]}},"spacing":{"padding":{"top":"50px","bottom":"0px"}}},"className":"fr-tablet-collapse"} -->
	<div class="wp-block-columns alignwide fr-tablet-collapse has-link-color" style="padding-top:50px;padding-bottom:0px"><!-- wp:column {"width":"30%"} -->
	<div class="wp-block-column" style="flex-basis:30%"><!-- wp:paragraph {"fontSize":"big"} -->
	<p class="has-big-font-size">Follow Us</p>
	<!-- /wp:paragraph -->
	
	<!-- wp:paragraph {"fontSize":"small"} -->
	<p class="has-small-font-size">Lorem ipsum dolor sit amet, consectetur adipiscing lectus. Vestibulum mi justo, luctus eu pellentesque vitae gravida non.</p>
	<!-- /wp:paragraph -->
	
	<!-- wp:buttons -->
	<div class="wp-block-buttons"><!-- wp:button {"style":{"border":{"radius":"50px"}},"className":"is-style-outline-white"} -->
	<div class="wp-block-button is-style-outline-white"><a class="wp-block-button__link" href="#" style="border-radius:50px">Subscribe</a></div>
	<!-- /wp:button --></div>
	<!-- /wp:buttons --></div>
	<!-- /wp:column -->
	
	<!-- wp:column {"width":"5%"} -->
	<div class="wp-block-column" style="flex-basis:5%"></div>
	<!-- /wp:column -->
	
	<!-- wp:column {"width":"15%"} -->
	<div class="wp-block-column" style="flex-basis:15%"><!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"700"}}} -->
	<p style="font-style:normal;font-weight:700">Our Mission</p>
	<!-- /wp:paragraph -->
	
	<!-- wp:list {"style":{"typography":{"lineHeight":"2"},"elements":{"link":{"color":{"text":"#929ba8"}}}},"className":"is-style-nounderline","fontSize":"small"} -->
	<ul class="is-style-nounderline has-link-color has-small-font-size" style="line-height:2"><li><a href="#">Start Here</a></li><li><a href="#">Our Mission</a></li><li><a href="#">Brand Guide</a></li><li><a href="#">Newsletter</a></li><li><a href="#">Blog reviews</a></li><li><a href="#">Contributors</a></li><li><a href="#">Social Media</a></li></ul>
	<!-- /wp:list --></div>
	<!-- /wp:column -->
	
	<!-- wp:column {"width":"15%"} -->
	<div class="wp-block-column" style="flex-basis:15%"><!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"700"}}} -->
	<p style="font-style:normal;font-weight:700">Services</p>
	<!-- /wp:paragraph -->
	
	<!-- wp:list {"style":{"elements":{"link":{"color":{"text":"#929ba8"}}},"typography":{"lineHeight":"2"}},"className":"is-style-nounderline","fontSize":"small"} -->
	<ul class="is-style-nounderline has-link-color has-small-font-size" style="line-height:2"><li><a href="#">Web Design</a></li><li><a href="#">Development</a></li><li><a href="#">Copywriting</a></li><li><a href="#">Marketing</a></li><li><a href="#">Press Releases</a></li><li><a href="#">Videos</a></li><li><a href="#">Cross media</a></li></ul>
	<!-- /wp:list --></div>
	<!-- /wp:column -->
	
	<!-- wp:column {"width":"15%"} -->
	<div class="wp-block-column" style="flex-basis:15%"><!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"700"}}} -->
	<p style="font-style:normal;font-weight:700">Connect</p>
	<!-- /wp:paragraph -->
	
	<!-- wp:list {"style":{"elements":{"link":{"color":{"text":"#929ba8"}}},"typography":{"lineHeight":"2"}},"className":"is-style-nounderline","fontSize":"small"} -->
	<ul class="is-style-nounderline has-link-color has-small-font-size" style="line-height:2"><li><a href="#">Facebook</a></li><li><a href="#">Instagram</a></li><li><a style="font-family: var(--font-family-primary);font-size: var(--font-size-regular);font-weight: var(--font-weight-regular)" href="#">Twitter</a></li><li><a style="font-family: var(--font-family-primary);font-size: var(--font-size-regular);font-weight: var(--font-weight-regular)" href="#">LinkedIn</a></li><li><a href="#">Dribbble</a></li><li><a href="#">TikTok</a></li></ul>
	<!-- /wp:list --></div>
	<!-- /wp:column -->
	
	<!-- wp:column {"width":"15%"} -->
	<div class="wp-block-column" style="flex-basis:15%"><!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"700"}}} -->
	<p style="font-style:normal;font-weight:700">Resources</p>
	<!-- /wp:paragraph -->
	
	<!-- wp:list {"style":{"elements":{"link":{"color":{"text":"#929ba8"}}},"typography":{"lineHeight":"2"}},"className":"is-style-nounderline","fontSize":"small"} -->
	<ul class="is-style-nounderline has-link-color has-small-font-size" style="line-height:2"><li><a href="#">Bloggers</a></li><li><a href="#">Video releases</a></li><li><a style="font-family: var(--font-family-primary);font-size: var(--font-size-regular);font-weight: var(--font-weight-regular)" href="#">Tutorials</a></li><li><a style="font-family: var(--font-family-primary);font-size: var(--font-size-regular);font-weight: var(--font-weight-regular)" href="#">Adventures</a></li><li><a href="#">Politics</a></li></ul>
	<!-- /wp:list --></div>
	<!-- /wp:column --></div>
	<!-- /wp:columns -->
	
	<!-- wp:separator {"customColor":"#2c333d","align":"wide","className":"is-style-wide"} -->
	<hr class="wp-block-separator alignwide has-text-color has-background is-style-wide" style="background-color:#2c333d;color:#2c333d"/>
	<!-- /wp:separator -->
	
	<!-- wp:group {"align":"full","style":{"elements":{"link":{"color":{"text":"var:preset|color|textondark"}}},"spacing":{"padding":{"top":"0px","bottom":"30px"}}},"backgroundColor":"dark","textColor":"textondark","className":"has-small-font-size","layout":{"inherit":true}} -->
	<div class="wp-block-group alignfull has-small-font-size has-textondark-color has-dark-background-color has-text-color has-background has-link-color" style="padding-top:0px;padding-bottom:30px"><!-- wp:group {"align":"wide","layout":{"type":"flex","allowOrientation":false,"justifyContent":"space-between"}} -->
	<div class="wp-block-group alignwide"><!-- wp:image {"id":6086,"width":175,"height":21,"sizeSlug":"full","linkDestination":"none","className":"is-style-no-margin"} -->
	<figure class="wp-block-image size-full is-resized is-style-no-margin"><img src="'.BLOCKPRESS_THEME_DIR.'/assets/img/blockpress_logo_white.svg" alt="" class="wp-image-6086" width="175" height="21"/></figure>
	<!-- /wp:image -->
	
	<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"#c2cfda"}}}},"fontSize":"xsmall"} -->
	<p class="has-link-color has-xsmall-font-size"><a href="#">Privacy Policy</a> · <a href="#">Terms of Service</a> · <a href="#">Contact Us</a></p>
	<!-- /wp:paragraph -->
	
	<!-- wp:paragraph -->
	<p>Copyright LLC</p>
	<!-- /wp:paragraph --></div>
	<!-- /wp:group --></div>
	<!-- /wp:group --></div>
	<!-- /wp:group -->',
);
