<?php
/**
 * Feature right text block pattern
 */
return array(
    'title'      => __( 'Feature (Right Text)', 'chuo' ),
    'categories' => array( 'theme', 'featured', 'columns', 'buttons' ),
    'content'    => '<!-- wp:group {"tagName":"section","style":{"spacing":{"padding":{"top":"0rem","bottom":"0rem","right":"1em","left":"1em"}}},"className":"feature-right-text"} -->
                    <section class="wp-block-group feature-right-text" style="padding-top:0rem;padding-right:1em;padding-bottom:0rem;padding-left:1em"><!-- wp:group {"layout":{"inherit":true}} -->
                    <div class="wp-block-group"><!-- wp:columns {"style":{"spacing":{"blockGap":"5rem"}}} -->
                    <div class="wp-block-columns"><!-- wp:column {"verticalAlignment":"center"} -->
                    <div class="wp-block-column is-vertically-aligned-center"><!-- wp:paragraph {"textColor":"primary"} -->
                    <p class="has-primary-color has-text-color"><strong>' . esc_html__( 'Security', 'chuo' ) . '</strong></p>
                    <!-- /wp:paragraph -->
                    
                    <!-- wp:heading {"fontSize":"xlarge"} -->
                    <h2 class="has-xlarge-font-size">' . wp_kses_post( __( 'Manage and monitor...<br>With confidence', 'chuo' ) ) . '</h2>
                    <!-- /wp:heading -->
                    
                    <!-- wp:paragraph -->
                    <p>' . wp_kses_post( __( 'Equipped with the latest security technologies, the World App Group commended Chuo App for its initiative to provide 2FA on mobile apps. Tincidunt ornare massa eget egestas purus viverra accumsan in. Ac ut consequat semper viverra nam libero justo laoreet sit. Tristique nulla aliquet enim tortor at auctor urna. Sagittis nisl rhoncus mattis rhoncus. Velit scelerisque in dictum non. Elit sed vulputate mi sit. Turpis egestas pretium aenean pharetra magna nulla aliquet enim.', 'chuo' ) ) . '</p>
                    <!-- /wp:paragraph -->
                    
                    <!-- wp:group {"style":{"spacing":{"margin":{"top":"4rem"}}}} -->
                    <div class="wp-block-group" style="margin-top:4rem"><!-- wp:buttons -->
                    <div class="wp-block-buttons"><!-- wp:button {"textColor":"secondary","className":"is-style-outline"} -->
                    <div class="wp-block-button is-style-outline"><a class="wp-block-button__link has-secondary-color has-text-color" href="#"><strong>' . esc_html__( 'Details &gt;', 'chuo' ) . '</strong></a></div>
                    <!-- /wp:button --></div>
                    <!-- /wp:buttons --></div>
                    <!-- /wp:group --></div>
                    <!-- /wp:column -->
                    
                    <!-- wp:column {"verticalAlignment":"center"} -->
                    <div class="wp-block-column is-vertically-aligned-center"><!-- wp:image {"sizeSlug":"full","linkDestination":"none"} -->
                    <figure class="wp-block-image size-full"><img src="' . get_template_directory_uri() . '/assets/images/app-login.png" alt="' . esc_html__( 'App Login', 'chuo' ) . '" class=""/></figure>
                    <!-- /wp:image --></div>
                    <!-- /wp:column --></div>
                    <!-- /wp:columns --></div>
                    <!-- /wp:group --></section>
                    <!-- /wp:group -->',
);
