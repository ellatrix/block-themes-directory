<?php
/**
 * Text video block pattern
 */
return array(
    'title'      => __( 'Text video', 'chuo' ),
    'categories' => array( 'theme', 'featured', 'columns', 'buttons' ),
    'content'    => '<!-- wp:group {"layout":{"type":"default"}} -->
                    <div class="wp-block-group"><!-- wp:cover {"url":"' . get_template_directory_uri() . '/assets/videos/video-update.mp4","dimRatio":0,"backgroundType":"video","isDark":false,"style":{"spacing":{"padding":{"top":"2rem","bottom":"2rem"}}}} -->
                    <div class="wp-block-cover is-light" style="padding-top:2rem;padding-bottom:2rem"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim"></span><video class="wp-block-cover__video-background intrinsic-ignore" autoplay muted loop playsinline src="' . get_template_directory_uri() . '/assets/videos/video-update.mp4" data-object-fit="cover"></video><div class="wp-block-cover__inner-container"><!-- wp:columns -->
                    <div class="wp-block-columns"><!-- wp:column -->
                    <div class="wp-block-column"><!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"right"}} -->
                    <div class="wp-block-group"><!-- wp:group {"layout":{"contentSize":"600px","type":"constrained"}} -->
                    <div class="wp-block-group"><!-- wp:paragraph {"style":{"typography":{"textTransform":"uppercase"}},"textColor":"primary"} -->
                    <p class="has-primary-color has-text-color" style="text-transform:uppercase"><strong>New Version</strong></p>
                    <!-- /wp:paragraph -->
                    
                    <!-- wp:heading {"textColor":"foreground","fontSize":"xlarge"} -->
                    <h2 class="has-foreground-color has-text-color has-xlarge-font-size">' . wp_kses_post( __( 'V.16 Update Released', 'chuo' ) ) . '</h2>
                    <!-- /wp:heading -->
                    
                    <!-- wp:paragraph {"textColor":"foreground"} -->
                    <p class="has-foreground-color has-text-color">' . wp_kses_post( __( 'The new version of the Chuo App has added new features that will make your lifestyle and financial management more easy and more fun.', 'chuo' ) ) . '</p>
                    <!-- /wp:paragraph -->
                    
                    <!-- wp:list {"textColor":"foreground"} -->
                    <ul class="has-foreground-color has-text-color"><!-- wp:list-item -->
                    <li>' . wp_kses_post( __( 'New AI advisor Tamaya', 'chuo' ) ) . '</li>
                    <!-- /wp:list-item -->
                    
                    <!-- wp:list-item -->
                    <li>' . wp_kses_post( __( 'App video calls with friends', 'chuo' ) ) . '</li>
                    <!-- /wp:list-item -->
                    
                    <!-- wp:list-item -->
                    <li>' . wp_kses_post( __( 'Voice search', 'chuo' ) ) . '</li>
                    <!-- /wp:list-item -->
                    
                    <!-- wp:list-item -->
                    <li>' . wp_kses_post( __( 'Lifestyle center virtual tours', 'chuo' ) ) . '</li>
                    <!-- /wp:list-item -->
                    
                    <!-- wp:list-item -->
                    <li>' . wp_kses_post( __( 'Advanced sleek design', 'chuo' ) ) . '</li>
                    <!-- /wp:list-item --></ul>
                    <!-- /wp:list -->
                    
                    <!-- wp:group {"style":{"spacing":{"margin":{"top":"4rem"}}}} -->
                    <div class="wp-block-group" style="margin-top:4rem"><!-- wp:buttons -->
                    <div class="wp-block-buttons"><!-- wp:button {"textColor":"foreground","style":{"border":{"radius":"100px"}},"className":"is-style-outline"} -->
                    <div class="wp-block-button is-style-outline"><a class="wp-block-button__link has-foreground-color has-text-color wp-element-button" href="#" style="border-radius:100px"><strong>Update Now</strong></a></div>
                    <!-- /wp:button --></div>
                    <!-- /wp:buttons --></div>
                    <!-- /wp:group --></div>
                    <!-- /wp:group --></div>
                    <!-- /wp:group --></div>
                    <!-- /wp:column -->
                    
                    <!-- wp:column -->
                    <div class="wp-block-column"></div>
                    <!-- /wp:column --></div>
                    <!-- /wp:columns --></div></div>
                    <!-- /wp:cover --></div>
                    <!-- /wp:group -->',
);
