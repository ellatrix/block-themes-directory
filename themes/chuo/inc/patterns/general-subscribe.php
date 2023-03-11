<?php
/**
 * Subscribe block pattern
 */
return array(
    'title'      => __( 'Subscribe', 'chuo' ),
    'categories' => array( 'theme', 'columns' ),
    'content'    => '<!-- wp:group {"tagName":"section","style":{"spacing":{"padding":{"right":"1em","left":"1em","top":"2rem","bottom":"2rem"}}},"backgroundColor":"primary"} -->
                    <section class="wp-block-group has-primary-background-color has-background" style="padding-top:2rem;padding-right:1em;padding-bottom:2rem;padding-left:1em"><!-- wp:group {"layout":{"inherit":true}} -->
                    <div class="wp-block-group"><!-- wp:group {"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between"}} -->
                    <div class="wp-block-group"><!-- wp:group {"layout":{"type":"flex","orientation":"vertical"}} -->
                    <div class="wp-block-group"><!-- wp:group {"style":{"spacing":{"blockGap":"0.5rem"}},"layout":{"type":"flex","orientation":"vertical"}} -->
                    <div class="wp-block-group"><!-- wp:heading {"textColor":"background"} -->
                    <h2 class="has-background-color has-text-color">' . wp_kses_post( __( 'Sign Up Now', 'chuo' ) ) . '</h2>
                    <!-- /wp:heading -->
                    
                    <!-- wp:paragraph {"textColor":"background"} -->
                    <p class="has-background-color has-text-color">' . wp_kses_post( __( 'For exclusive perks, promotions, and announcements - plus a few surprises', 'chuo' ) ) . '</p>
                    <!-- /wp:paragraph --></div>
                    <!-- /wp:group --></div>
                    <!-- /wp:group -->
                    
                    <!-- wp:buttons -->
                    <div class="wp-block-buttons"><!-- wp:button {"textColor":"background","className":"is-style-outline"} -->
                    <div class="wp-block-button is-style-outline"><a class="wp-block-button__link has-background-color has-text-color" href="#"><strong>' . esc_html__( 'Subscribe', 'chuo' ) . '</strong></a></div>
                    <!-- /wp:button --></div>
                    <!-- /wp:buttons --></div>
                    <!-- /wp:group --></div>
                    <!-- /wp:group --></section>
                    <!-- /wp:group -->',
);
