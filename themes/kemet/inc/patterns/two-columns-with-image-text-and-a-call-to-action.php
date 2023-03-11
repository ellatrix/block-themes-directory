<?php
/**
 * Kemet General Patter
 * Two Columns with Image, Text, and a Call to Action.
 */
return array(
	'title'      => __( 'Two Columns with Image, Text, and a Call to Action.', 'kemet' ),
	'categories' => array( 'kemet-patterns' ),
	'content'    => '<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"80px","bottom":"80px"}}},"layout":{"inherit":true}} -->
    <div class="wp-block-group alignfull" style="padding-top:80px;padding-bottom:80px"><!-- wp:columns -->
    <div class="wp-block-columns"><!-- wp:column {"verticalAlignment":"center","width":"50%"} -->
    <div class="wp-block-column is-vertically-aligned-center" style="flex-basis:50%"><!-- wp:image {"align":"center","id":1186,"width":500,"height":500,"sizeSlug":"large","linkDestination":"none","className":"is-style-image-mask-sketch"} -->
    <figure class="wp-block-image aligncenter size-large is-resized is-style-image-mask-sketch"><img src="' . esc_url( get_template_directory_uri() ) . '/assets/images/friends-holding-coffee-cups.jpeg" alt="' . esc_attr__( 'Coffee Cups', 'kemet' ) . '" class="wp-image-1186" width="500" height="500"/></figure>
    <!-- /wp:image --></div>
    <!-- /wp:column -->
    
    <!-- wp:column {"verticalAlignment":"center","width":"50%","style":{"spacing":{"padding":{"top":"40px"}}}} -->
    <div class="wp-block-column is-vertically-aligned-center" style="padding-top:40px;flex-basis:50%"><!-- wp:columns {"verticalAlignment":"center"} -->
    <div class="wp-block-columns are-vertically-aligned-center"><!-- wp:column {"verticalAlignment":"center"} -->
    <div class="wp-block-column is-vertically-aligned-center"><!-- wp:heading {"level":5,"style":{"typography":{"letterSpacing":"3px","textTransform":"uppercase","fontStyle":"normal","fontWeight":"500"},"spacing":{"margin":{"top":"0px"}}}} -->
    <h5 style="font-style:normal;font-weight:500;margin-top:0px;text-transform:uppercase;letter-spacing:3px">' . esc_html__( 'Coffee is Awesome', 'kemet' ) . '</h5>
    <!-- /wp:heading -->
    
    <!-- wp:separator {"color":"primary","className":"is-style-wide"} -->
    <hr class="wp-block-separator has-alpha-channel-opacity has-text-color has-background has-primary-background-color has-primary-color is-style-wide"/>
    <!-- /wp:separator -->
    
    <!-- wp:heading {"style":{"typography":{"textTransform":"uppercase","fontStyle":"normal","fontWeight":"700"}}} -->
    <h2 style="font-style:normal;font-weight:700;text-transform:uppercase">' . esc_html__( 'Start your day with a cup of coffee', 'kemet') . '</h2>
    <!-- /wp:heading -->
    
    <!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"400"}}} -->
    <p style="font-style:normal;font-weight:400">' . esc_html__( 'Taste and See Coffee Shop and Gallery offers a unique coffee house environment unlike any other in Macon. We are not only a place to drop in and get your morning cup of coffee, we are a place where you can sit down and enjoy that tailor-made cup of coffee. If you need to work, we have a seating area created specifically for you. If you need to rest, We look forward to serving you at Taste &amp; See Coffee Shop and Gallery.', 'kemet') . '</p>
    <!-- /wp:paragraph -->
    
    <!-- wp:spacer {"height":"40px"} -->
    <div style="height:40px" aria-hidden="true" class="wp-block-spacer"></div>
    <!-- /wp:spacer -->
    
    <!-- wp:buttons -->
    <div class="wp-block-buttons"><!-- wp:button {"className":"is-style-fill","fontSize":"normal"} -->
    <div class="wp-block-button has-custom-font-size is-style-fill has-normal-font-size"><a class="wp-block-button__link" href="#"><strong>' . esc_html__( 'MORE ABOUT US', 'kemet') . '</strong> <strong>»</strong></a></div>
    <!-- /wp:button --></div>
    <!-- /wp:buttons --></div>
    <!-- /wp:column --></div>
    <!-- /wp:columns --></div>
    <!-- /wp:column --></div>
    <!-- /wp:columns --></div>
    <!-- /wp:group -->',
);