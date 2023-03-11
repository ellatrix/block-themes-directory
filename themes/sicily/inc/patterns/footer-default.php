<?php
/**
 * Default footer block pattern
 */
return array(
    'title'      => __( 'Footer (Default)', 'sicily' ),
    'categories' => array( 'theme', 'footer', 'columns' ),
    'content'    => '<!-- wp:cover {"overlayColor":"tertiary","isDark":false} -->
    <div class="wp-block-cover is-light"><span aria-hidden="true" class="wp-block-cover__background has-tertiary-background-color has-background-dim-100 has-background-dim"></span><div class="wp-block-cover__inner-container"><!-- wp:group {"layout":{"inherit":true}} -->
        <div class="wp-block-group"><!-- wp:group {"style":{"spacing":{"padding":{"top":"2em","bottom":"2em"}}}} -->
        <div class="wp-block-group" style="padding-top:2em;padding-bottom:2em"><!-- wp:columns -->
        <div class="wp-block-columns"><!-- wp:column -->
        <div class="wp-block-column"><!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap"}} -->
        <div class="wp-block-group"><!-- wp:image {"width":40,"height":40,"sizeSlug":"full","linkDestination":"none"} -->
        <figure class="wp-block-image size-full is-resized"><img src="' . get_template_directory_uri() . '/assets/images/icon-phone.png" alt="' . esc_html__( 'Phone Icon', 'sicily' ) . '" width="40" height="40"/></figure>
        <!-- /wp:image -->
        
        <!-- wp:group {"style":{"spacing":{"blockGap":"0px"}},"layout":{"type":"flex","orientation":"vertical"}} -->
        <div class="wp-block-group"><!-- wp:heading {"level":5,"fontSize":"medium"} -->
        <h5 class="has-medium-font-size">' . esc_html__( 'Give Us a Call', 'sicily' ) . '</h5>
        <!-- /wp:heading -->
        
        <!-- wp:paragraph -->
        <p>' . esc_html__( '(+021) 645 863 232', 'sicily' ) . '</p>
        <!-- /wp:paragraph --></div>
        <!-- /wp:group --></div>
        <!-- /wp:group --></div>
        <!-- /wp:column -->
        
        <!-- wp:column -->
        <div class="wp-block-column"><!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap"}} -->
        <div class="wp-block-group"><!-- wp:image {"width":40,"height":40,"sizeSlug":"full","linkDestination":"none"} -->
        <figure class="wp-block-image size-full is-resized"><img src="' . get_template_directory_uri() . '/assets/images/icon-message.png" alt="' . esc_html__( 'Mail Icon', 'sicily' ) . '" width="40" height="40"/></figure>
        <!-- /wp:image -->
        
        <!-- wp:group {"style":{"spacing":{"blockGap":"0px"}},"layout":{"type":"flex","orientation":"vertical"}} -->
        <div class="wp-block-group"><!-- wp:heading {"level":5,"fontSize":"medium"} -->
        <h5 class="has-medium-font-size">' . esc_html__( 'Send Us a message', 'sicily' ) . '</h5>
        <!-- /wp:heading -->
        
        <!-- wp:paragraph -->
        <p>' . esc_html__( 'support@lnpthemes.com', 'sicily' ) . '</p>
        <!-- /wp:paragraph --></div>
        <!-- /wp:group --></div>
        <!-- /wp:group --></div>
        <!-- /wp:column -->
        
        <!-- wp:column -->
        <div class="wp-block-column"><!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap"}} -->
        <div class="wp-block-group"><!-- wp:image {"width":40,"height":40,"sizeSlug":"full","linkDestination":"none"} -->
        <figure class="wp-block-image size-full is-resized"><img src="' . get_template_directory_uri() . '/assets/images/icon-map-pin.png" alt="' . esc_html__( 'Pin Icon', 'sicily' ) . '" width="40" height="40"/></figure>
        <!-- /wp:image -->
        
        <!-- wp:group {"style":{"spacing":{"blockGap":"0px"}},"layout":{"type":"flex","orientation":"vertical"}} -->
        <div class="wp-block-group"><!-- wp:heading {"level":5,"fontSize":"medium"} -->
        <h5 class="has-medium-font-size">' . esc_html__( 'Visit Us', 'sicily' ) . '</h5>
        <!-- /wp:heading -->
        
        <!-- wp:paragraph -->
        <p>' . esc_html__( '2468 Via Falsomiele, Palermo, PA 33919', 'sicily' ) . '</p>
        <!-- /wp:paragraph --></div>
        <!-- /wp:group --></div>
        <!-- /wp:group --></div>
        <!-- /wp:column --></div>
        <!-- /wp:columns --></div>
        <!-- /wp:group -->
        
        <!-- wp:separator {"className":"is-style-wide"} -->
        <hr class="wp-block-separator has-alpha-channel-opacity is-style-wide"/>
        <!-- /wp:separator -->
        
        <!-- wp:group {"style":{"spacing":{"padding":{"top":"4em","bottom":"4em"}}}} -->
        <div class="wp-block-group" style="padding-top:4em;padding-bottom:4em"><!-- wp:columns {"style":{"spacing":{"blockGap":"2em"}}} -->
        <div class="wp-block-columns"><!-- wp:column {"width":"25%"} -->
        <div class="wp-block-column" style="flex-basis:25%"><!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"700"}},"fontSize":"small"} -->
        <p class="has-small-font-size" style="font-style:normal;font-weight:700">' . esc_html__( 'About Us', 'sicily' ) . '</p>
        <!-- /wp:paragraph -->
        
        <!-- wp:paragraph {"fontSize":"small"} -->
        <p class="has-small-font-size">' . esc_html__( 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce molestie orci nec bibendum iaculis.', 'sicily' ) . '</p>
        <!-- /wp:paragraph -->
        
        <!-- wp:social-links -->
        <ul class="wp-block-social-links"><!-- wp:social-link {"url":"#","service":"facebook"} /-->
        
        <!-- wp:social-link {"url":"#","service":"twitter"} /-->
        
        <!-- wp:social-link {"url":"#","service":"instagram"} /--></ul>
        <!-- /wp:social-links --></div>
        <!-- /wp:column -->
        
        <!-- wp:column {"width":"50%"} -->
        <div class="wp-block-column" style="flex-basis:50%"><!-- wp:group {"layout":{"type":"flex","orientation":"vertical","justifyContent":"center"}} -->
        <div class="wp-block-group"><!-- wp:site-title {"level":2,"textAlign":"center","isLink":false,"style":{"typography":{"fontStyle":"normal","fontWeight":"700"}},"fontSize":"large"} /-->
        
        <!-- wp:navigation {"overlayMenu":"never","style":{"typography":{"textTransform":"uppercase"}},"fontSize":"small"} /--></div>
        <!-- /wp:group --></div>
        <!-- /wp:column -->
        
        <!-- wp:column {"width":"25%"} -->
        <div class="wp-block-column" style="flex-basis:25%"><!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"700"}},"fontSize":"small"} -->
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
        <!-- /wp:group -->
        
        <!-- wp:separator {"className":"is-style-wide"} -->
        <hr class="wp-block-separator has-alpha-channel-opacity is-style-wide"/>
        <!-- /wp:separator -->
        
        <!-- wp:navigation {"overlayMenu":"never","layout":{"type":"flex","justifyContent":"center"},"fontSize":"tiny"} /--></div>
        <!-- /wp:group --></div></div>
        <!-- /wp:cover -->',
);
