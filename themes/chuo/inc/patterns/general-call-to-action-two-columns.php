<?php
/**
 * Call to action two columns block pattern
 */
return array(
    'title'      => __( 'Call to action two columns', 'chuo' ),
    'categories' => array( 'theme', 'featured', 'columns', 'buttons' ),
    'content'    => '<!-- wp:group {"tagName":"section","style":{"spacing":{"padding":{"right":"1em","left":"1em","top":"2rem","bottom":"2rem"}}}} -->
                    <section class="wp-block-group" style="padding-top:2rem;padding-right:1em;padding-bottom:2rem;padding-left:1em"><!-- wp:group {"style":{"spacing":{"padding":{"top":"2rem","right":"2rem","bottom":"2rem","left":"2rem"}}},"gradient":"horizontal-tertiary","layout":{"inherit":true,"type":"constrained"}} -->
                    <div class="wp-block-group has-horizontal-tertiary-gradient-background has-background" style="padding-top:2rem;padding-right:2rem;padding-bottom:2rem;padding-left:2rem"><!-- wp:columns -->
                    <div class="wp-block-columns"><!-- wp:column {"verticalAlignment":"center","width":"25%"} -->
                    <div class="wp-block-column is-vertically-aligned-center" style="flex-basis:25%"><!-- wp:image {"sizeSlug":"full","linkDestination":"none"} -->
                    <figure class="wp-block-image size-full"><img src="' . get_template_directory_uri() . '/assets/images/app-trial.png" alt="Trial"/></figure>
                    <!-- /wp:image --></div>
                    <!-- /wp:column -->
                    
                    <!-- wp:column {"verticalAlignment":"center","width":"75%"} -->
                    <div class="wp-block-column is-vertically-aligned-center" style="flex-basis:75%"><!-- wp:group {"style":{"spacing":{"blockGap":"0.5rem"}},"layout":{"type":"flex","orientation":"vertical"}} -->
                    <div class="wp-block-group"><!-- wp:heading {"textColor":"highlight"} -->
                    <h2 class="has-highlight-color has-text-color">' . wp_kses_post( __( 'Get Free 30 Days Trial', 'chuo' ) ) . '</h2>
                    <!-- /wp:heading -->
                    
                    <!-- wp:paragraph {"textColor":"highlight"} -->
                    <p class="has-highlight-color has-text-color">' . wp_kses_post( __( 'You will enjoy and experience the full power of the Chuo App. See for yourself why more than 12 million users love it. No credit card required.', 'chuo' ) ) . '</p>
                    <!-- /wp:paragraph -->
                    
                    <!-- wp:buttons -->
                    <div class="wp-block-buttons"><!-- wp:button {"backgroundColor":"highlight","textColor":"background","style":{"border":{"radius":"100px"}},"className":"is-style-fill"} -->
                    <div class="wp-block-button is-style-fill"><a class="wp-block-button__link has-background-color has-highlight-background-color has-text-color has-background wp-element-button" href="#" style="border-radius:100px"><strong>' . esc_html__( 'Start Your Trial Now', 'chuo' ) . '</strong></a></div>
                    <!-- /wp:button --></div>
                    <!-- /wp:buttons --></div>
                    <!-- /wp:group --></div>
                    <!-- /wp:column --></div>
                    <!-- /wp:columns --></div>
                    <!-- /wp:group --></section>
                    <!-- /wp:group -->',
);
