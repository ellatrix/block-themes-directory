<?php
/**
 * Footer compact block pattern
 */
return array(
    'title'      => __( 'Footer (Compact)', 'chuo' ),
    'categories' => array( 'theme', 'footer', 'columns' ),
    'content'    => '<!-- wp:group {"tagName":"section","style":{"spacing":{"padding":{"top":"6rem","right":"1em","left":"1em","bottom":"6rem"}}},"backgroundColor":"tertiary","className":"footer-compact"} -->
                    <section class="wp-block-group footer-compact has-tertiary-background-color has-background" style="padding-top:6rem;padding-right:1em;padding-bottom:6rem;padding-left:1em"><!-- wp:group {"className":"navigations","layout":{"inherit":true,"type":"constrained"}} -->
                    <div class="wp-block-group navigations"><!-- wp:group {"style":{"spacing":{"blockGap":"1rem"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"center"}} -->
                    <div class="wp-block-group"><!-- wp:site-logo {"width":75,"style":{"color":{"duotone":["#4f4c59","#E9E9E9"]}}} /-->
                    
                    <!-- wp:paragraph {"fontSize":"small"} -->
                    <p class="has-small-font-size">' . esc_html__( 'Copyright 2022 All Rights Reserved', 'chuo' ) . '</p>
                    <!-- /wp:paragraph -->
                    
                    <!-- wp:paragraph {"fontSize":"small"} -->
                    <p class="has-small-font-size">' . esc_html__( '® Chuo and the Chuo logo are registered trademarks of Chuo, Inc. in Japan and other selected countries.', 'chuo' ) . '</p>
                    <!-- /wp:paragraph --></div>
                    <!-- /wp:group -->
                    
                    <!-- wp:group {"style":{"spacing":{"blockGap":"1rem"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"center"}} -->
                    <div class="wp-block-group"><!-- wp:navigation {"ref":2808} /-->
                    
                    <!-- wp:social-links {"iconBackgroundColor":"foreground","iconBackgroundColorValue":"#150A33","style":{"spacing":{"blockGap":{"top":"0.5em","left":"0.5em"}}},"layout":{"type":"flex","justifyContent":"right","flexWrap":"wrap"}} -->
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
