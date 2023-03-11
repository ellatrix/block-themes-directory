<?php
/**
 * Feature left text block pattern
 */
return array(
    'title'      => __( 'Feature (Left Text)', 'chuo' ),
    'categories' => array( 'theme', 'featured', 'columns', 'buttons' ),
    'content'    => '<!-- wp:group {"tagName":"section","style":{"spacing":{"padding":{"top":"0rem","bottom":"0rem","right":"1em","left":"1em"}}},"className":"feature-left-text"} -->
                    <section class="wp-block-group feature-left-text" style="padding-top:0rem;padding-right:1em;padding-bottom:0rem;padding-left:1em"><!-- wp:group {"layout":{"inherit":true}} -->
                    <div class="wp-block-group"><!-- wp:columns {"style":{"spacing":{"blockGap":"5rem","margin":{"bottom":"4rem"}}}} -->
                    <div class="wp-block-columns" style="margin-bottom:4rem"><!-- wp:column {"verticalAlignment":"center"} -->
                    <div class="wp-block-column is-vertically-aligned-center"><!-- wp:paragraph {"textColor":"primary"} -->
                    <p class="has-primary-color has-text-color"><strong>' . esc_html__( 'More Savings', 'chuo' ) . '</strong></p>
                    <!-- /wp:paragraph -->
                    
                    <!-- wp:heading {"fontSize":"xlarge"} -->
                    <h2 class="has-xlarge-font-size">' . wp_kses_post( __( 'Great finds, great deals...<br>Every hour, every day.', 'chuo' ) ) . '</h2>
                    <!-- /wp:heading -->
                    
                    <!-- wp:paragraph -->
                    <p>' . wp_kses_post( __( 'With a huge number of partnered businesses, hunting for deals that will suit your budget was never this easy. Sit amet mattis vulputate enim nulla. Sed id semper risus in hendrerit gravida rutrum quisque non. Risus nullam eget felis eget. Sed pulvinar proin gravida hendrerit. Turpis egestas integer eget aliquet nibh praesent tristique magna. Proin sagittis nisl rhoncus mattis. Ac ut consequat semper viverra nam libero justo laoreet sit.', 'chuo' ) ) . '</p>
                    <!-- /wp:paragraph -->
                    
                    <!-- wp:group {"style":{"spacing":{"margin":{"top":"4rem"}}}} -->
                    <div class="wp-block-group" style="margin-top:4rem"><!-- wp:buttons -->
                    <div class="wp-block-buttons"><!-- wp:button {"textColor":"secondary","className":"is-style-outline"} -->
                    <div class="wp-block-button is-style-outline"><a class="wp-block-button__link has-secondary-color has-text-color" href="#"><strong>' . esc_html__( 'Discover &gt;', 'chuo' ) . '</strong></a></div>
                    <!-- /wp:button --></div>
                    <!-- /wp:buttons --></div>
                    <!-- /wp:group --></div>
                    <!-- /wp:column -->
                    
                    <!-- wp:column {"verticalAlignment":"center"} -->
                    <div class="wp-block-column is-vertically-aligned-center"><!-- wp:image {"sizeSlug":"full","linkDestination":"none"} -->
                    <figure class="wp-block-image size-full"><img src="' . get_template_directory_uri() . '/assets/images/app-shopping.png" alt="' . esc_html__( 'App Shopping', 'chuo' ) . '" class=""/></figure>
                    <!-- /wp:image --></div>
                    <!-- /wp:column --></div>
                    <!-- /wp:columns --></div>
                    <!-- /wp:group --></section>
                    <!-- /wp:group -->',
);
