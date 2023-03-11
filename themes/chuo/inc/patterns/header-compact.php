<?php
/**
 * Header compact block pattern
 */
return array(
    'title'      => __( 'Header (Compact)', 'chuo' ),
    'categories' => array( 'theme', 'footer', 'columns' ),
    'content'    => '<!-- wp:group {"style":{"spacing":{"blockGap":"em","padding":{"right":"1em","left":"1em","top":"1em","bottom":"1em"}}},"className":"header-default"} -->
                    <div class="wp-block-group header-default" style="padding-top:1em;padding-right:1em;padding-bottom:1em;padding-left:1em"><!-- wp:group {"layout":{"inherit":true,"type":"constrained"}} -->
                    <div class="wp-block-group"><!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
                    <div class="wp-block-group"><!-- wp:group {"style":{"spacing":{"blockGap":"1em"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
                    <div class="wp-block-group"><!-- wp:site-logo {"width":42} /-->
                    
                    <!-- wp:site-title {"level":2,"style":{"typography":{"fontStyle":"normal","fontWeight":"700"},"elements":{"link":{"color":{"text":"var:preset|color|foreground"}}}},"fontSize":"medium"} /--></div>
                    <!-- /wp:group -->
                    
                    <!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"right"}} -->
                    <div class="wp-block-group"><!-- wp:navigation {"textColor":"highlight","overlayBackgroundColor":"tertiary","overlayTextColor":"highlight","layout":{"type":"flex","justifyContent":"right"},"style":{"typography":{"fontStyle":"normal","fontWeight":"600"}},"fontSize":"small"} /-->
                    
                    <!-- wp:buttons {"fontSize":"small"} -->
                    <div class="wp-block-buttons has-custom-font-size has-small-font-size"><!-- wp:button {"style":{"border":{"radius":"100px"},"typography":{"fontStyle":"normal","fontWeight":"600"}}} -->
                    <div class="wp-block-button" style="font-style:normal;font-weight:600"><a class="wp-block-button__link wp-element-button" href="#" style="border-radius:100px">' . esc_html__( 'Download', 'chuo' ) . '</a></div>
                    <!-- /wp:button --></div>
                    <!-- /wp:buttons --></div>
                    <!-- /wp:group --></div>
                    <!-- /wp:group --></div>
                    <!-- /wp:group --></div>
                    <!-- /wp:group -->',
);
