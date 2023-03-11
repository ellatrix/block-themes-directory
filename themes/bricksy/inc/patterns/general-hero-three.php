<?php
/**
 * Hero with image & content block pattern
 */
return array(
	'title'	  => __( 'Hero with image & content on diagonal background', 'bricksy' ),
	'categories' => array( 'bricksy-general', 'featured' ),
	'content'	=> '<!-- wp:group {"align":"full","style":{"color":{"gradient":"linear-gradient(135deg,rgb(167,198,216) 59%,rgb(167,213,210) 59%)"},"spacing":{"padding":{"top":"3%","bottom":"3%"}}},"layout":{"inherit":true}} -->
    <div class="wp-block-group alignfull has-background" style="background:linear-gradient(135deg,rgb(167,198,216) 59%,rgb(167,213,210) 59%);padding-top:3%;padding-bottom:3%"><!-- wp:columns {"verticalAlignment":"center","align":"wide","style":{"spacing":{"blockGap":"3rem"}}} -->
    <div class="wp-block-columns alignwide are-vertically-aligned-center"><!-- wp:column {"verticalAlignment":"center","width":"","style":{"spacing":{"blockGap":"3rem"}}} -->
    <div class="wp-block-column is-vertically-aligned-center"><!-- wp:group {"style":{"spacing":{"blockGap":"1rem"}}} -->
    <div class="wp-block-group"><!-- wp:heading {"textAlign":"left"} -->
    <h2 class="has-text-align-left">' . esc_html__( 'Flower Power', 'bricksy' ) . '</h2>
    <!-- /wp:heading -->
        
    <!-- wp:paragraph -->
    <p>' . esc_html__( 'Malesuada nibh montes fusce cum eleifend fringilla commodo mattis tempor platea montes. Commodo metus adipiscing odio.', 'bricksy' ) . '</p>
    <!-- /wp:paragraph -->
        
    <!-- wp:social-links {"iconColor":"foreground","iconColorValue":"#000000","iconBackgroundColor":"background","iconBackgroundColorValue":"#ffffff","size":"has-normal-icon-size","className":"is-style-default","layout":{"type":"flex","justifyContent":"right","flexWrap":"wrap"},"style":{"spacing":{"margin":{"top":"2rem","bottom":"0px"}}}} -->
    <ul class="wp-block-social-links has-normal-icon-size has-icon-color has-icon-background-color is-style-default" style="margin-top:2rem;margin-bottom:0px"><!-- wp:social-link {"url":"#","service":"facebook"} /-->
        
    <!-- wp:social-link {"url":"#","service":"twitter"} /-->
        
    <!-- wp:social-link {"url":"#","service":"instagram"} /--></ul>
    <!-- /wp:social-links --></div>
    <!-- /wp:group --></div>
    <!-- /wp:column -->
        
    <!-- wp:column {"verticalAlignment":"center","width":"","style":{"spacing":{"blockGap":"3rem"}}} -->
    <div class="wp-block-column is-vertically-aligned-center"><!-- wp:image {"sizeSlug":"large","linkDestination":"none","style":{"border":{"radius":{"topLeft":"250px","topRight":"250px","bottomLeft":null,"bottomRight":null}}}} -->
    <figure class="wp-block-image size-large" style="border-top-left-radius:250px;border-top-right-radius:250px"><img src="' . esc_url( get_theme_file_uri( '/assets/images/people-1.jpg' ) ) . '" alt=""/></figure>
    <!-- /wp:image --></div>
    <!-- /wp:column --></div>
    <!-- /wp:columns --></div>
    <!-- /wp:group -->',
);
