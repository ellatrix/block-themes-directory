<?php
/**
 * Hero banner block pattern
 */
return array(
    'title'      => __( 'Hero banner', 'chuo' ),
    'categories' => array( 'theme', 'featured', 'columns', 'buttons' ),
    'content'    => '<!-- wp:cover {"url":"' . get_template_directory_uri() . '/assets/images/hero-background-primary.png","dimRatio":50,"overlayColor":"background","minHeight":50} -->
                    <div class="wp-block-cover" style="min-height:50px"><span aria-hidden="true" class="wp-block-cover__background has-background-background-color has-background-dim"></span><img class="wp-block-cover__image-background" alt="' . esc_html__( 'Hero Section Background Image', 'chuo' ) . '" src="' . get_template_directory_uri() . '/assets/images/hero-background-primary.png" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:group {"style":{"color":{}},"layout":{"inherit":true}} -->
                    <div class="wp-block-group"><!-- wp:columns {"style":{"spacing":{"blockGap":"4em"}}} -->
                    <div class="wp-block-columns"><!-- wp:column {"verticalAlignment":"center"} -->
                    <div class="wp-block-column is-vertically-aligned-center"><!-- wp:group {"layout":{"type":"flex","orientation":"vertical"}} -->
                    <div class="wp-block-group"><!-- wp:heading {"level":1,"textColor":"highlight"} -->
                    <h1 class="has-highlight-color has-text-color">' . wp_kses_post( __( 'Everything You Need <br>In One App', 'chuo' ) ) . '</h1>
                    <!-- /wp:heading -->
                    
                    <!-- wp:paragraph {"textColor":"foreground","fontSize":"medium"} -->
                    <p class="has-foreground-color has-text-color has-medium-font-size">' . wp_kses_post( __( 'Increase productivity with a simple yet powerful lifestyle app. Manage your finance and control your spending.', 'chuo' ) ) . '</p>
                    <!-- /wp:paragraph --></div>
                    <!-- /wp:group -->
                    
                    <!-- wp:group {"style":{"spacing":{"margin":{"top":"4rem"}}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
                    <div class="wp-block-group" style="margin-top:4rem"><!-- wp:buttons -->
                    <div class="wp-block-buttons"><!-- wp:button {"backgroundColor":"primary","style":{"border":{"radius":"100px"}}} -->
                    <div class="wp-block-button"><a class="wp-block-button__link has-primary-background-color has-background" href="#" style="border-radius:100px">' . esc_html__( 'Download App', 'chuo' ) . '</a></div>
                    <!-- /wp:button -->
                    
                    <!-- wp:button {"textColor":"primary","style":{"border":{"radius":"100px"}},"className":"is-style-outline outline-primary"} -->
                    <div class="wp-block-button is-style-outline outline-primary"><a class="wp-block-button__link has-primary-color has-text-color" href="#" style="border-radius:100px">' . esc_html__( 'Features', 'chuo' ) . '</a></div>
                    <!-- /wp:button --></div>
                    <!-- /wp:buttons --></div>
                    <!-- /wp:group --></div>
                    <!-- /wp:column -->
                    
                    <!-- wp:column -->
                    <div class="wp-block-column"><!-- wp:cover {"url":"' . get_template_directory_uri() . '/assets/images/hero-image-background.png","dimRatio":80,"overlayColor":"background","isDark":false,"style":{"color":{}}} -->
                                        <div class="wp-block-cover is-light"><span aria-hidden="true" class="wp-block-cover__background has-background-background-color has-background-dim-80 has-background-dim"></span><img class="wp-block-cover__image-background" alt="' . esc_html__( 'Hero Image Background', 'chuo' ) . '" src="' . get_template_directory_uri() . '/assets/images/hero-image-background.png" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:image {"sizeSlug":"full","linkDestination":"none"} -->
                                        <figure class="wp-block-image size-full"><img src="' . get_template_directory_uri() . '/assets/images/app-dashboard.png" alt="' . esc_html__( 'App Dashboard', 'chuo' ) . '" class=""/></figure>
                    <!-- /wp:image --></div></div>
                    <!-- /wp:cover --></div>
                    <!-- /wp:column --></div>
                    <!-- /wp:columns --></div>
                    <!-- /wp:group --></div></div>
                    <!-- /wp:cover -->',
);





