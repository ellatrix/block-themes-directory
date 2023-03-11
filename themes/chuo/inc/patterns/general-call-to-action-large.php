<?php
/**
 * Call to action large block pattern
 */
return array(
    'title'      => __( 'Call to action large', 'chuo' ),
    'categories' => array( 'theme', 'featured', 'columns', 'buttons' ),
    'content'    => '<!-- wp:group {"tagName":"section","style":{"spacing":{"padding":{"top":"12rem","bottom":"12rem","right":"1em","left":"1em"}}},"gradient":"horizontal-secondary"} -->
                    <section class="wp-block-group has-horizontal-secondary-gradient-background has-background" style="padding-top:12rem;padding-right:1em;padding-bottom:12rem;padding-left:1em"><!-- wp:group {"style":{"spacing":{"blockGap":"1rem"}},"layout":{"inherit":true}} -->
                    <div class="wp-block-group"><!-- wp:columns {"style":{"spacing":{"blockGap":"5rem"}}} -->
                    <div class="wp-block-columns"><!-- wp:column -->
                    <div class="wp-block-column"></div>
                    <!-- /wp:column -->
                    
                    <!-- wp:column {"width":"70%"} -->
                    <div class="wp-block-column" style="flex-basis:70%"><!-- wp:heading {"textAlign":"center","fontSize":"huge"} -->
                    <h2 class="has-text-align-center has-huge-font-size">' . wp_kses_post( __( 'Expansive Network', 'chuo' ) ) . '</h2>
                    <!-- /wp:heading -->
                    
                    <!-- wp:paragraph {"align":"center","textColor":"highlight","fontSize":"large"} -->
                    <p class="has-text-align-center has-highlight-color has-text-color has-large-font-size">' . wp_kses_post( __( 'Chuo App has partnered with more than 1,700 lifestyle centers and financial experts nationwide', 'chuo' ) ) . '</p>
                    <!-- /wp:paragraph -->
                    
                    <!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"},"style":{"spacing":{"margin":{"top":"4rem"}}}} -->
                    <div class="wp-block-buttons" style="margin-top:4rem"><!-- wp:button {"textColor":"highlight","style":{"border":{"radius":"100px"}},"className":"is-style-outline"} -->
                    <div class="wp-block-button is-style-outline"><a class="wp-block-button__link has-highlight-color has-text-color" href="#" style="border-radius:100px"><strong>' . esc_html__( 'Register Now', 'chuo' ) . '</strong></a></div>
                    <!-- /wp:button --></div>
                    <!-- /wp:buttons --></div>
                    <!-- /wp:column -->
                    
                    <!-- wp:column -->
                    <div class="wp-block-column"></div>
                    <!-- /wp:column --></div>
                    <!-- /wp:columns --></div>
                    <!-- /wp:group --></section>
                    <!-- /wp:group -->',
);
