<?php

/**
 * Call to action large block pattern
 */
return array(
    'title'      => __('Call to Action (Large)', 'sicily'),
    'categories' => array('theme', 'featured', 'buttons', 'columns'),
    'content'    => '<!-- wp:group {"tagName":"section"} -->
    <section class="wp-block-group"><!-- wp:cover {"url":"' . get_template_directory_uri() . '/assets/images/vineyard.jpg","hasParallax":true,"dimRatio":80,"gradient":"diagonal-primary-to-foreground","style":{"spacing":{"padding":{"top":"10rem","bottom":"10rem"}}}} -->
    <div class="wp-block-cover has-parallax" style="padding-top:10rem;padding-bottom:10rem;background-image:url(' . get_template_directory_uri() . '/assets/images/vineyard.jpg)"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-80 has-background-dim wp-block-cover__gradient-background has-background-gradient has-diagonal-primary-to-foreground-gradient-background"></span><div class="wp-block-cover__inner-container"><!-- wp:group {"layout":{"inherit":true}} -->
    <div class="wp-block-group"><!-- wp:columns -->
    <div class="wp-block-columns"><!-- wp:column {"width":"20%"} -->
    <div class="wp-block-column" style="flex-basis:20%"></div>
    <!-- /wp:column -->
    
    <!-- wp:column {"width":"60%"} -->
    <div class="wp-block-column" style="flex-basis:60%"><!-- wp:paragraph {"align":"center","placeholder":"Write title…","textColor":"background","fontSize":"small","textTransform":"uppercase"} -->
    <p class="has-text-align-center has-background-color has-text-color has-small-font-size" style="text-transform:uppercase">' . esc_html__( 'Visit The Estate', 'sicily' ) . '</p>
    <!-- /wp:paragraph -->
    
    <!-- wp:heading {"textAlign":"center","fontSize":"x-large"} -->
    <h2 class="has-text-align-center has-x-large-font-size">' . esc_html__( 'Enjoy an Array of Tasting Experiences', 'sicily' ) . '</h2>
    <!-- /wp:heading -->
    
    <!-- wp:paragraph {"align":"center","style":{"elements":{"link":{"color":{"text":"var:preset|color|secondary"}}}}} -->
    <p class="has-text-align-center has-link-color">' . wp_kses_post( __( 'Named a Top 100 Winery in 2003 &amp; 2014 by Acme Magazine &amp; Italian Spirits, we invite you to visit our Marsala winery in person or virtually and immerse yourself in a true sense of place.', 'sicily' ) ) . '</p>
    <!-- /wp:paragraph -->
    
    <!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"},"style":{"spacing":{"margin":{"top":"2em"}}}} -->
    <div class="wp-block-buttons" style="margin-top:2em"><!-- wp:button {"className":"is-style-outline"} -->
    <div class="wp-block-button is-style-outline"><a class="wp-block-button__link" href="#">' . esc_html__( 'Reserve Now', 'sicily' ) . '</a></div>
    <!-- /wp:button --></div>
    <!-- /wp:buttons --></div>
    <!-- /wp:column -->
    
    <!-- wp:column {"width":"20%"} -->
    <div class="wp-block-column" style="flex-basis:20%"></div>
    <!-- /wp:column --></div>
    <!-- /wp:columns --></div>
    <!-- /wp:group --></div></div>
    <!-- /wp:cover --></section>
    <!-- /wp:group -->',
);
