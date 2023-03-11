<?php
/**
 * Default footer block pattern
 */
return array(
    'title'      => __( 'Footer (Default)', 'chuo' ),
    'categories' => array( 'theme', 'footer', 'columns' ),
    'content'    => '<!-- wp:group {"tagName":"section","style":{"spacing":{"padding":{"top":"6rem","right":"1em","left":"1em","bottom":"1em"}}},"backgroundColor":"tertiary","className":"footer-default"} -->
                    <section class="wp-block-group footer-default has-tertiary-background-color has-background" style="padding-top:6rem;padding-right:1em;padding-bottom:1em;padding-left:1em"><!-- wp:group {"className":"navigations","layout":{"inherit":true}} -->
                    <div class="wp-block-group navigations"><!-- wp:columns -->
                    <div class="wp-block-columns"><!-- wp:column -->
                    <div class="wp-block-column"><!-- wp:group {"style":{"spacing":{"blockGap":"1rem"}}} -->
                    <div class="wp-block-group"><!-- wp:paragraph {"fontSize":"medium"} -->
                    <p class="has-medium-font-size"><strong><a href="#">' . esc_html__( 'Chuo', 'chuo' ) . '</a></strong></p>
                    <!-- /wp:paragraph -->
                    
                    <!-- wp:navigation {"overlayMenu":"never","layout":{"type":"flex","orientation":"vertical"},"style":{"typography":{"fontStyle":"normal","fontWeight":"600"},"spacing":{"blockGap":"0.5rem"}}} /--></div>
                    <!-- /wp:group --></div>
                    <!-- /wp:column -->
                    
                    <!-- wp:column -->
                    <div class="wp-block-column"><!-- wp:group {"style":{"spacing":{"blockGap":"1rem"}}} -->
                    <div class="wp-block-group"><!-- wp:paragraph {"fontSize":"medium"} -->
                    <p class="has-medium-font-size"><strong><a href="#">' . esc_html__( 'Get Support', 'chuo' ) . '</a></strong></p>
                    <!-- /wp:paragraph -->
                    
                    <!-- wp:navigation {"overlayMenu":"never","layout":{"type":"flex","orientation":"vertical"},"style":{"typography":{"fontStyle":"normal","fontWeight":"600"},"spacing":{"blockGap":"0.5rem"}}} /--></div>
                    <!-- /wp:group --></div>
                    <!-- /wp:column -->
                    
                    <!-- wp:column -->
                    <div class="wp-block-column"><!-- wp:group {"style":{"spacing":{"blockGap":"1rem"}}} -->
                    <div class="wp-block-group"><!-- wp:paragraph {"fontSize":"medium"} -->
                    <p class="has-medium-font-size"><strong><a href="#">' . esc_html__( 'Resources', 'chuo' ) . '</a></strong></p>
                    <!-- /wp:paragraph -->
                    
                    <!-- wp:navigation {"overlayMenu":"never","layout":{"type":"flex","orientation":"vertical"},"style":{"typography":{"fontStyle":"normal","fontWeight":"600"},"spacing":{"blockGap":"0.5rem"}}} /--></div>
                    <!-- /wp:group --></div>
                    <!-- /wp:column -->
                    
                    <!-- wp:column -->
                    <div class="wp-block-column"><!-- wp:group {"style":{"spacing":{"blockGap":"1rem"}}} -->
                    <div class="wp-block-group"><!-- wp:paragraph {"fontSize":"medium"} -->
                    <p class="has-medium-font-size"><strong><a href="#">' . esc_html__( 'Chuo App', 'chuo' ) . '</a></strong></p>
                    <!-- /wp:paragraph -->
                    
                    <!-- wp:navigation {"overlayMenu":"never","layout":{"type":"flex","orientation":"vertical"},"style":{"typography":{"fontStyle":"normal","fontWeight":"600"},"spacing":{"blockGap":"0.5rem"}}} /--></div>
                    <!-- /wp:group --></div>
                    <!-- /wp:column --></div>
                    <!-- /wp:columns --></div>
                    <!-- /wp:group -->
                    
                    <!-- wp:group {"style":{"spacing":{"margin":{"top":"4rem"}}},"layout":{"inherit":true}} -->
                    <div class="wp-block-group" style="margin-top:4rem"><!-- wp:group {"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between"}} -->
                    <div class="wp-block-group"><!-- wp:site-title {"level":0,"style":{"typography":{"fontStyle":"normal","fontWeight":"700"},"elements":{"link":{"color":{"text":"var:preset|color|foreground"}}}},"fontSize":"large"} /-->
                    
                    <!-- wp:paragraph {"align":"center","fontSize":"small"} -->
                    <p class="has-text-align-center has-small-font-size">' . esc_html__( '© 2022 Chuo App. All rights reserved. Chuo® and Acme® are registered trademarks. Legal information.', 'chuo' ) . '</p>
                    <!-- /wp:paragraph -->
                    
                    <!-- wp:social-links {"iconBackgroundColor":"foreground","iconBackgroundColorValue":"#150A33","layout":{"type":"flex","justifyContent":"right","flexWrap":"wrap"},"style":{"spacing":{"blockGap":{"top":"0.5em","left":"0.5em"}}}} -->
                    <ul class="wp-block-social-links has-icon-background-color"><!-- wp:social-link {"url":"#","service":"linkedin"} /-->
                    
                    <!-- wp:social-link {"url":"#","service":"facebook"} /-->
                    
                    <!-- wp:social-link {"url":"#","service":"twitter"} /-->
                    
                    <!-- wp:social-link {"url":"#","service":"instagram"} /-->
                    
                    <!-- wp:social-link {"url":"#","service":"youtube"} /--></ul>
                    <!-- /wp:social-links --></div>
                    <!-- /wp:group --></div>
                    <!-- /wp:group --></section>
                    <!-- /wp:group -->',
);
