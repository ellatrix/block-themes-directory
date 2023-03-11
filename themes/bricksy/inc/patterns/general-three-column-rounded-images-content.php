<?php
/**
 * Three column rounded images and content block pattern
 */
return array(
	'title'	  => __( 'Three Column Rounded Images with Content', 'bricksy' ),
	'categories' => array( 'bricksy-general' ),
	'content'	=> '<!-- wp:group {"align":"full","style":{"spacing":{"blockGap":"3rem","padding":{"bottom":"5%"}}},"layout":{"inherit":true},"extUtilities":[]} -->
    <div class="wp-block-group alignfull" style="padding-bottom:5%"><!-- wp:group {"style":{"spacing":{"blockGap":"1rem"}}} -->
    <div class="wp-block-group"><!-- wp:heading {"textAlign":"center"} -->
    <h2 class="has-text-align-center">' . esc_html__( 'Flower Packages', 'bricksy' ) . '</h2>
    <!-- /wp:heading -->
    
    <!-- wp:paragraph {"align":"center"} -->
    <p class="has-text-align-center">' . esc_html__( 'Malesuada nibh montes fusce cum eleifend fringilla commodo mattis tempor platea montes. Commodo metus adipiscing odio.', 'bricksy' ) . '</p>
    <!-- /wp:paragraph --></div>
    <!-- /wp:group -->
    
    <!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":"2rem"}}} -->
    <div class="wp-block-columns alignwide"><!-- wp:column {"width":"33.34%","style":{"spacing":{"blockGap":"0rem"}},"extUtilities":[]} -->
    <div class="wp-block-column" style="flex-basis:33.34%"><!-- wp:image {"sizeSlug":"large","linkDestination":"none","style":{"border":{"radius":{"topLeft":"250px","topRight":"250px","bottomLeft":null,"bottomRight":null}}},"extUtilities":["editor:no-caption","editor:no-resize"]} -->
    <figure class="wp-block-image size-large editor:no-caption editor:no-resize" style="border-top-left-radius:250px;border-top-right-radius:250px"><img src="' . esc_url( get_theme_file_uri( '/assets/images/gallery-1.jpg' ) ) . '" alt=""/></figure>
    <!-- /wp:image -->
    
    <!-- wp:group {"style":{"spacing":{"blockGap":"1rem","padding":{"top":"3rem","right":"2rem","bottom":"3rem","left":"2rem"}},"color":{"background":"#a7c6d8"}},"extUtilities":["ext-h-full"]} -->
    <div class="wp-block-group has-background ext-h-full" style="background-color:#a7c6d8;padding-top:3rem;padding-right:2rem;padding-bottom:3rem;padding-left:2rem"><!-- wp:heading {"textAlign":"left","level":3,"style":{"typography":{"fontStyle":"normal","fontWeight":"600"}},"fontSize":"medium","extUtilities":[]} -->
    <h3 class="has-text-align-left has-medium-font-size" style="font-style:normal;font-weight:600">' . esc_html__( 'Birthday', 'bricksy' ) . '</h3>
    <!-- /wp:heading -->
    
    <!-- wp:separator {"style":{"color":{"background":"#ffffff4f"}},"className":"is-style-wide"} -->
    <hr class="wp-block-separator has-text-color has-alpha-channel-opacity has-background is-style-wide" style="background-color:#ffffff4f;color:#ffffff4f"/>
    <!-- /wp:separator -->
    
    <!-- wp:paragraph {"align":"left","extUtilities":[]} -->
    <p class="has-text-align-left">' . esc_html__( 'Malesuada nibh montes fusce cum eleifend fringilla commodo mattis tempor platea montes. Commodo metus adipiscing odio.', 'bricksy' ) . '</p>
    <!-- /wp:paragraph --></div>
    <!-- /wp:group --></div>
    <!-- /wp:column -->
    
    <!-- wp:column {"width":"33.34%","style":{"spacing":{"blockGap":"0rem"}},"extUtilities":[]} -->
    <div class="wp-block-column" style="flex-basis:33.34%"><!-- wp:image {"sizeSlug":"large","linkDestination":"none","style":{"border":{"radius":{"topLeft":"250px","topRight":"250px","bottomLeft":null,"bottomRight":null}}},"extUtilities":["editor:no-caption","editor:no-resize"]} -->
    <figure class="wp-block-image size-large editor:no-caption editor:no-resize" style="border-top-left-radius:250px;border-top-right-radius:250px"><img src="' . esc_url( get_theme_file_uri( '/assets/images/gallery-2.jpg' ) ) . '" alt=""/></figure>
    <!-- /wp:image -->
    
    <!-- wp:group {"style":{"spacing":{"blockGap":"1rem","padding":{"top":"3rem","right":"2rem","bottom":"3rem","left":"2rem"}},"color":{"background":"#a7d5d2"}},"extUtilities":["ext-h-full"]} -->
    <div class="wp-block-group has-background ext-h-full" style="background-color:#a7d5d2;padding-top:3rem;padding-right:2rem;padding-bottom:3rem;padding-left:2rem"><!-- wp:heading {"textAlign":"left","level":3,"style":{"typography":{"fontStyle":"normal","fontWeight":"600"}},"fontSize":"medium","extUtilities":[]} -->
    <h3 class="has-text-align-left has-medium-font-size" style="font-style:normal;font-weight:600">' . esc_html__( 'Weddings', 'bricksy' ) . '</h3>
    <!-- /wp:heading -->
    
    <!-- wp:separator {"style":{"color":{"background":"#ffffff4f"}},"className":"is-style-wide"} -->
    <hr class="wp-block-separator has-text-color has-alpha-channel-opacity has-background is-style-wide" style="background-color:#ffffff4f;color:#ffffff4f"/>
    <!-- /wp:separator -->
    
    <!-- wp:paragraph {"align":"left","extUtilities":[]} -->
    <p class="has-text-align-left">' . esc_html__( 'Malesuada nibh montes fusce cum eleifend fringilla commodo mattis tempor platea montes. Commodo metus adipiscing odio.', 'bricksy' ) . '</p>
    <!-- /wp:paragraph --></div>
    <!-- /wp:group --></div>
    <!-- /wp:column -->
    
    <!-- wp:column {"width":"33.34%","style":{"spacing":{"blockGap":"0rem"}},"extUtilities":[]} -->
    <div class="wp-block-column" style="flex-basis:33.34%"><!-- wp:image {"sizeSlug":"large","linkDestination":"none","style":{"border":{"radius":{"topLeft":"250px","topRight":"250px","bottomLeft":null,"bottomRight":null}}},"extUtilities":["editor:no-caption","editor:no-resize"]} -->
    <figure class="wp-block-image size-large editor:no-caption editor:no-resize" style="border-top-left-radius:250px;border-top-right-radius:250px"><img src="' . esc_url( get_theme_file_uri( '/assets/images/gallery-3.jpg' ) ) . '" alt=""/></figure>
    <!-- /wp:image -->
    
    <!-- wp:group {"style":{"spacing":{"blockGap":"1rem","padding":{"top":"3rem","right":"2rem","bottom":"3rem","left":"2rem"}},"color":{"background":"#c3d9e7"}},"extUtilities":["ext-h-full"]} -->
    <div class="wp-block-group has-background ext-h-full" style="background-color:#c3d9e7;padding-top:3rem;padding-right:2rem;padding-bottom:3rem;padding-left:2rem"><!-- wp:heading {"textAlign":"left","level":3,"style":{"typography":{"fontStyle":"normal","fontWeight":"600"}},"fontSize":"medium","extUtilities":[]} -->
    <h3 class="has-text-align-left has-medium-font-size" style="font-style:normal;font-weight:600">' . esc_html__( 'Events', 'bricksy' ) . '</h3>
    <!-- /wp:heading -->
    
    <!-- wp:separator {"style":{"color":{"background":"#ffffff4f"}},"className":"is-style-wide"} -->
    <hr class="wp-block-separator has-text-color has-alpha-channel-opacity has-background is-style-wide" style="background-color:#ffffff4f;color:#ffffff4f"/>
    <!-- /wp:separator -->
    
    <!-- wp:paragraph {"align":"left","extUtilities":[]} -->
    <p class="has-text-align-left">' . esc_html__( 'Malesuada nibh montes fusce cum eleifend fringilla commodo mattis tempor platea montes. Commodo metus adipiscing odio.', 'bricksy' ) . '</p>
    <!-- /wp:paragraph --></div>
    <!-- /wp:group --></div>
    <!-- /wp:column --></div>
    <!-- /wp:columns --></div>
    <!-- /wp:group -->',
);
