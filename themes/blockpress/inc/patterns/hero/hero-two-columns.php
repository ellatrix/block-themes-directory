<?php

return array(
	'title'         => __( 'Section with media, text, buttons.', 'blockpress' ),
	'categories'    => array( 'blockpress-hero' ),
 
	'content'       => '<!-- wp:group {"align":"full","style":{"color":{"gradient":"linear-gradient(177deg,rgb(255,255,255) 0%,rgb(248,248,248) 100%)"}},"layout":{"inherit":true}} -->
	<div class="wp-block-group alignfull has-background" style="background:linear-gradient(177deg,rgb(255,255,255) 0%,rgb(248,248,248) 100%)"><!-- wp:spacer -->
		<div style="height:100px" aria-hidden="true" class="wp-block-spacer"></div>
		<!-- /wp:spacer -->
		
		<!-- wp:media-text {"mediaPosition":"right","mediaId":3485,"mediaLink":"https://blockpresswp.com/","mediaType":"image","mediaWidth":40} -->
		<div class="wp-block-media-text alignwide has-media-on-the-right is-stacked-on-mobile" style="grid-template-columns:auto 40%"><figure class="wp-block-media-text__media"><img src="' . esc_url( get_theme_file_uri( 'assets/patterns/white_1200_1200.jpg' ) ) . '"  alt="' . esc_attr__( 'Sample Image', 'blockpress' ) . '" class="wp-image-3485 size-full"/></figure><div class="wp-block-media-text__content"><!-- wp:heading {"style":{"typography":{"lineHeight":"1.2"},"spacing":{"margin":{"bottom":"30px","top":"30px"}}},"fontSize":"max-gigantic"} -->
		<h2 class="has-max-gigantic-font-size" id="text-on-left-image-on-right" style="line-height:1.2;margin-top:30px;margin-bottom:30px">Lorem ipsum dolor sit amet, consectetur </h2>
		<!-- /wp:heading -->
		
		<!-- wp:paragraph {"textColor":"lightgrey"} -->
		<p class="has-lightgrey-color has-text-color">Lorem ipsum dolor sit amet, consectetur adipiscing vestibulum. Fringilla nec accumsan eget, facilisis mi justo, luctus pellentesque gravida vitae non diam accumsan posuere, venenatis mi turpis.</p>
		<!-- /wp:paragraph -->
		
		<!-- wp:buttons -->
		<div class="wp-block-buttons"><!-- wp:button {"backgroundColor":"primary","textColor":"textonprimary","style":{"spacing":{"padding":{"top":"15px","right":"40px","bottom":"15px","left":"40px"}},"border":{"radius":"3px"}},"className":"is-style-cubebtndark"} -->
		<div class="wp-block-button is-style-cubebtndark"><a class="wp-block-button__link has-textonprimary-color has-primary-background-color has-text-color has-background" style="border-radius:3px;padding-top:15px;padding-right:40px;padding-bottom:15px;padding-left:40px">Get Started</a></div>
		<!-- /wp:button -->
		
		<!-- wp:button {"backgroundColor":"white","style":{"spacing":{"padding":{"top":"15px","bottom":"15px","left":"40px","right":"40px"}}},"className":"is-style-cubebtnwhite"} -->
		<div class="wp-block-button is-style-cubebtnwhite"><a class="wp-block-button__link has-white-background-color has-background" style="padding-top:15px;padding-right:40px;padding-bottom:15px;padding-left:40px">Learn More</a></div>
		<!-- /wp:button --></div>
		<!-- /wp:buttons --></div></div>
		<!-- /wp:media-text -->
		
		<!-- wp:spacer -->
		<div style="height:100px" aria-hidden="true" class="wp-block-spacer"></div>
		<!-- /wp:spacer --></div>
		<!-- /wp:group -->',
);
