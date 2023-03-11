<?php
/**
 * Footer alternative (with logo) block pattern
 */
return array(
    'title'      => __( 'Footer Alternative (With Logo)', 'sicily' ),
    'categories' => array( 'theme', 'footer', 'columns' ),
    'content'    => '<!-- wp:cover {"overlayColor":"tertiary","isDark":false} -->
    <div class="wp-block-cover is-light"><span aria-hidden="true" class="wp-block-cover__background has-tertiary-background-color has-background-dim-100 has-background-dim"></span><div class="wp-block-cover__inner-container"><!-- wp:group {"layout":{"inherit":true}} -->
    <div class="wp-block-group"><!-- wp:group {"style":{"spacing":{"padding":{"top":"4em","bottom":"4em"}}}} -->
    <div class="wp-block-group" style="padding-top:4em;padding-bottom:4em"><!-- wp:columns -->
    <div class="wp-block-columns"><!-- wp:column {"width":"40%"} -->
    <div class="wp-block-column" style="flex-basis:40%"><!-- wp:site-logo /-->
    
    <!-- wp:paragraph {"fontSize":"small"} -->
    <p class="has-small-font-size">' . esc_html__( 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce molestie orci nec bibendum iaculis.', 'sicily' ) . '</p>
    <!-- /wp:paragraph -->
    
    <!-- wp:paragraph {"fontSize":"small"} -->
    <p class="has-small-font-size">' . esc_html__( 'Company Name: Lemon & Pepper Sicily Inc.', 'sicily' ) . '</p>
    <!-- /wp:paragraph -->
    
    <!-- wp:paragraph {"fontSize":"small"} -->
    <p class="has-small-font-size">' . esc_html__( 'Address: 2468 Via Falsomiele, Palermo, PA 33919', 'sicily' ) . '</p>
    <!-- /wp:paragraph -->
    
    <!-- wp:paragraph {"fontSize":"small"} -->
    <p class="has-small-font-size">' . esc_html__( 'Telephone: (800) 123-1234', 'sicily' ) . '</p>
    <!-- /wp:paragraph -->
    
    <!-- wp:social-links -->
    <ul class="wp-block-social-links"><!-- wp:social-link {"url":"#","service":"facebook"} /-->
    
    <!-- wp:social-link {"url":"#","service":"twitter"} /-->
    
    <!-- wp:social-link {"url":"#","service":"instagram"} /--></ul>
    <!-- /wp:social-links --></div>
    <!-- /wp:column -->
    
    <!-- wp:column {"width":"20%"} -->
    <div class="wp-block-column" style="flex-basis:20%"><!-- wp:navigation {"ref":2219,"style":{"typography":{"textTransform":"uppercase"}},"fontSize":"small"} /--></div>
    <!-- /wp:column -->
    
    <!-- wp:column {"width":"20%"} -->
    <div class="wp-block-column" style="flex-basis:20%"><!-- wp:navigation {"ref":2219,"style":{"typography":{"textTransform":"uppercase"}},"fontSize":"small"} /--></div>
    <!-- /wp:column -->
    
    <!-- wp:column {"width":"20%"} -->
    <div class="wp-block-column" style="flex-basis:20%"><!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"700"}},"fontSize":"small"} -->
    <p class="has-small-font-size" style="font-style:normal;font-weight:700">' . esc_html__( 'Schedule', 'sicily' ) . '</p>
    <!-- /wp:paragraph -->
    
    <!-- wp:group {"style":{"spacing":{"blockGap":"0px"}},"layout":{"type":"flex","orientation":"vertical"}} -->
    <div class="wp-block-group"><!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"500"}},"fontSize":"small"} -->
    <p class="has-small-font-size" style="font-style:normal;font-weight:500">' . esc_html__( 'Monday – Thursday', 'sicily' ) . '</p>
    <!-- /wp:paragraph -->
    
    <!-- wp:paragraph {"fontSize":"small"} -->
    <p class="has-small-font-size">' . esc_html__( '11:30am – 4:00pm', 'sicily' ) . '</p>
    <!-- /wp:paragraph -->
    
    <!-- wp:spacer {"height":"1em"} -->
    <div style="height:1em" aria-hidden="true" class="wp-block-spacer"></div>
    <!-- /wp:spacer -->
    
    <!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"500"}},"fontSize":"small"} -->
    <p class="has-small-font-size" style="font-style:normal;font-weight:500">' . esc_html__( 'Friday – Sunday', 'sicily' ) . '</p>
    <!-- /wp:paragraph -->
    
    <!-- wp:paragraph {"fontSize":"small"} -->
    <p class="has-small-font-size">' . esc_html__( '08:30am – 4:30pm', 'sicily' ) . '</p>
    <!-- /wp:paragraph --></div>
    <!-- /wp:group --></div>
    <!-- /wp:column --></div>
    <!-- /wp:columns --></div>
    <!-- /wp:group --></div>
    <!-- /wp:group --></div></div>
    <!-- /wp:cover -->
    
    <!-- wp:cover {"overlayColor":"foreground","minHeight":1,"minHeightUnit":"em"} -->
    <div class="wp-block-cover" style="min-height:1em"><span aria-hidden="true" class="wp-block-cover__background has-foreground-background-color has-background-dim-100 has-background-dim"></span><div class="wp-block-cover__inner-container"><!-- wp:group {"layout":{"inherit":true}} -->
    <div class="wp-block-group"><!-- wp:paragraph {"fontSize":"small"} -->
    <p class="has-small-font-size">' . esc_html__( 'Copyright © 2022 Lemon & Pepper Sicily Inc. All rights reserved.', 'sicily' ) . '</p>
    <!-- /wp:paragraph --></div>
    <!-- /wp:group --></div></div>
    <!-- /wp:cover -->',
);
