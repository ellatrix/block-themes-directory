<?php
/**
 * Process steps block pattern
 */
return array(
    'title'      => __( 'Process steps', 'chuo' ),
    'categories' => array( 'theme', 'featured', 'columns', 'buttons' ),
    'content'    => '<!-- wp:cover {"url":"' . get_template_directory_uri() . '/assets/images/elements-background-secondary-30.png","dimRatio":10,"overlayColor":"secondary","minHeight":50,"isDark":false,"className":"process-steps","style":{"spacing":{"padding":{"top":"12rem","bottom":"12rem","right":"1em","left":"1em"}}}} -->
                    <div class="wp-block-cover is-light process-steps" style="padding-top:12rem;padding-right:1em;padding-bottom:12rem;padding-left:1em;min-height:50px"><span aria-hidden="true" class="wp-block-cover__background has-secondary-background-color has-background-dim-10 has-background-dim"></span><img class="wp-block-cover__image-background" alt="" src="' . get_template_directory_uri() . '/assets/images/elements-background-secondary-30.png" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:group {"style":{"color":{}},"layout":{"inherit":true}} -->
                    <div class="wp-block-group"><!-- wp:heading {"textAlign":"center","style":{"spacing":{"margin":{"bottom":"4rem"}}},"fontSize":"huge"} -->
                    <h2 class="has-text-align-center has-huge-font-size" style="margin-bottom:4rem">' . wp_kses_post( __( 'Joining as Easy as 3 Steps', 'chuo' ) ) . '</h2>
                    <!-- /wp:heading -->
                    
                    <!-- wp:columns {"style":{"spacing":{"blockGap":"1%","margin":{"top":"6px"}}},"className":"process-step-items"} -->
                    <div class="wp-block-columns process-step-items" style="margin-top:6px"><!-- wp:column -->
                    <div class="wp-block-column"><!-- wp:group {"style":{"border":{"width":"3px","radius":"1em"}},"borderColor":"secondary"} -->
                    <div class="wp-block-group has-border-color has-secondary-border-color" style="border-radius:1em;border-width:3px"><!-- wp:paragraph {"align":"center","textColor":"highlight","fontSize":"large"} -->
                    <p class="has-text-align-center has-highlight-color has-text-color has-large-font-size"><strong>' . wp_kses_post( __( 'Registration', 'chuo' ) ) . '</strong></p>
                    <!-- /wp:paragraph -->
                    
                    <!-- wp:paragraph {"align":"center","placeholder":"Write title…","fontSize":"normal"} -->
                    <p class="has-text-align-center has-normal-font-size">' . wp_kses_post( __( 'Download the Chuo App from the mobile application store. Volutpat est velit egestas dui. Sodales ut eu sem integer vitae justo eget magna fermentum. Egestas egestas fringilla phasellus faucibus scelerisque eu vitae  eleifend.', 'chuo' ) ) . '</p>
                    <!-- /wp:paragraph --></div>
                    <!-- /wp:group --></div>
                    <!-- /wp:column -->
                    
                    <!-- wp:column {"verticalAlignment":"center","width":"5rem"} -->
                    <div class="wp-block-column is-vertically-aligned-center" style="flex-basis:5rem"><!-- wp:paragraph {"align":"center","textColor":"cyan-bluish-gray","fontSize":"colossal"} -->
                    <p class="has-text-align-center has-cyan-bluish-gray-color has-text-color has-colossal-font-size">&gt;</p>
                    <!-- /wp:paragraph --></div>
                    <!-- /wp:column -->
                    
                    <!-- wp:column -->
                    <div class="wp-block-column"><!-- wp:group {"style":{"border":{"width":"3px","radius":"1em"}},"borderColor":"secondary"} -->
                    <div class="wp-block-group has-border-color has-secondary-border-color" style="border-radius:1em;border-width:3px"><!-- wp:paragraph {"align":"center","textColor":"highlight","fontSize":"large"} -->
                    <p class="has-text-align-center has-highlight-color has-text-color has-large-font-size"><strong>' . wp_kses_post( __( 'Requirements', 'chuo' ) ) . '</strong></p>
                    <!-- /wp:paragraph -->
                    
                    <!-- wp:paragraph {"align":"center","placeholder":"Write title…","fontSize":"normal"} -->
                    <p class="has-text-align-center has-normal-font-size">' . wp_kses_post( __( 'Submit the required documents via email or snail mail. Egestas egestas fringilla phasellus faucibus scelerisque eleifend. Volutpat est velit egestas dui. Sodales ut eu sem integer vitae justo eget magna dui est fermentum.', 'chuo' ) ) . '</p>
                    <!-- /wp:paragraph --></div>
                    <!-- /wp:group --></div>
                    <!-- /wp:column -->
                    
                    <!-- wp:column {"verticalAlignment":"center","width":"5rem"} -->
                    <div class="wp-block-column is-vertically-aligned-center" style="flex-basis:5rem"><!-- wp:paragraph {"align":"center","textColor":"cyan-bluish-gray","fontSize":"colossal"} -->
                    <p class="has-text-align-center has-cyan-bluish-gray-color has-text-color has-colossal-font-size">&gt;</p>
                    <!-- /wp:paragraph --></div>
                    <!-- /wp:column -->
                    
                    <!-- wp:column -->
                    <div class="wp-block-column"><!-- wp:group {"style":{"border":{"width":"3px","radius":"1em"}},"borderColor":"secondary"} -->
                    <div class="wp-block-group has-border-color has-secondary-border-color" style="border-radius:1em;border-width:3px"><!-- wp:paragraph {"align":"center","textColor":"highlight","fontSize":"large"} -->
                    <p class="has-text-align-center has-highlight-color has-text-color has-large-font-size"><strong>' . wp_kses_post( __( 'Validation', 'chuo' ) ) . '</strong></p>
                    <!-- /wp:paragraph -->
                    
                    <!-- wp:paragraph {"align":"center","placeholder":"Write title…","fontSize":"normal"} -->
                    <p class="has-text-align-center has-normal-font-size">' . wp_kses_post( __( 'Our friendly team will check and validate the submitted documents. Sed elementum tempus egestas sed sed risus. Sodales ut eu sem vitae justo eget magna fermentum. Egestas egestas fringilla faucibus scelerisque imperdiet.', 'chuo' ) ) . '</p>
                    <!-- /wp:paragraph --></div>
                    <!-- /wp:group --></div>
                    <!-- /wp:column --></div>
                    <!-- /wp:columns -->
                    
                    <!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"},"style":{"spacing":{"margin":{"top":"4rem"}}}} -->
                    <div class="wp-block-buttons" style="margin-top:4rem"><!-- wp:button {"backgroundColor":"secondary","style":{"border":{"radius":"100px"}},"className":"is-style-fill"} -->
                    <div class="wp-block-button is-style-fill"><a class="wp-block-button__link has-secondary-background-color has-background" href="#" style="border-radius:100px"><strong>' . esc_html__( 'Start Now', 'chuo' ) . '</strong></a></div>
                    <!-- /wp:button --></div>
                    <!-- /wp:buttons --></div>
                    <!-- /wp:group --></div></div>
                    <!-- /wp:cover -->',
);
