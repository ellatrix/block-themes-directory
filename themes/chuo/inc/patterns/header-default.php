<?php
/**
 * Default footer block pattern
 */
return array(
    'title'      => __( 'Header (Default)', 'chuo' ),
    'categories' => array( 'theme', 'footer', 'columns' ),
    'content'    => '<!-- wp:group {"style":{"spacing":{"blockGap":"em","padding":{"right":"1em","left":"1em","top":"1em","bottom":"1em"}}},"className":"header-default"} -->
                    <div class="wp-block-group header-default" style="padding-top:1em;padding-right:1em;padding-bottom:1em;padding-left:1em"><!-- wp:group {"layout":{"inherit":true}} -->
                    <div class="wp-block-group"><!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
                    <div class="wp-block-group"><!-- wp:group {"style":{"spacing":{"blockGap":"1em"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
                    <div class="wp-block-group"><!-- wp:site-logo {"width":57} /-->
                    
                    <!-- wp:site-title {"level":2,"style":{"typography":{"fontStyle":"normal","fontWeight":"700"},"elements":{"link":{"color":{"text":"var:preset|color|foreground"}}}},"fontSize":"xlarge"} /--></div>
                    <!-- /wp:group -->
                    
                    <!-- wp:navigation {"textColor":"highlight","overlayBackgroundColor":"tertiary","overlayTextColor":"highlight","style":{"typography":{"fontStyle":"normal","fontWeight":"600"}},"fontSize":"medium"} /-->
                    
                    <!-- wp:buttons -->
                    <div class="wp-block-buttons"><!-- wp:button {"style":{"border":{"radius":"100px"}}} -->
                    <div class="wp-block-button d-md-none"><a class="wp-block-button__link " href="#" style="border-radius:100px">' . esc_html__( 'Download', 'chuo' ) . '</a></div>
                    <!-- /wp:button --></div>
                    <!-- /wp:buttons --></div>
                    <!-- /wp:group --></div>
                    <!-- /wp:group --></div>
                    <!-- /wp:group -->',
);
