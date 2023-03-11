<?php
/**
 * Statistics block pattern
 */
return array(
    'title'      => __( 'Statistics', 'chuo' ),
    'categories' => array( 'theme', 'columns' ),
    'content'    => '<!-- wp:group {"tagName":"section","style":{"spacing":{"padding":{"right":"1em","left":"1em"}}},"className":"statistics"} -->
                    <section class="wp-block-group statistics" style="padding-right:1em;padding-left:1em"><!-- wp:group {"layout":{"inherit":true}} -->
                    <div class="wp-block-group"><!-- wp:columns {"verticalAlignment":"bottom","style":{"spacing":{"blockGap":"5rem","margin":{"top":"5rem"}}}} -->
                    <div class="wp-block-columns are-vertically-aligned-bottom" style="margin-top:5rem"><!-- wp:column {"verticalAlignment":"bottom"} -->
                    <div class="wp-block-column is-vertically-aligned-bottom"><!-- wp:group {"style":{"spacing":{"blockGap":"0.25rem"}},"layout":{"type":"flex","flexWrap":"wrap","verticalAlignment":"center","justifyContent":"center"}} -->
                    <div class="wp-block-group"><!-- wp:paragraph {"style":{"typography":{"lineHeight":1}},"textColor":"highlight","className":"count-on-viewport","fontSize":"huge"} -->
                    <p class="count-on-viewport has-highlight-color has-text-color has-huge-font-size" style="line-height:1">' . esc_html__( '13', 'chuo' ) . '</p>
                    <!-- /wp:paragraph -->
                    
                    <!-- wp:paragraph {"style":{"typography":{"lineHeight":1,"textTransform":"uppercase"}},"textColor":"highlight","fontSize":"huge"} -->
                    <p class="has-highlight-color has-text-color has-huge-font-size" style="line-height:1;text-transform:uppercase">' . esc_html__( 'M', 'chuo' ) . '</p>
                    <!-- /wp:paragraph -->
                    
                    <!-- wp:paragraph {"align":"center","style":{"typography":{"lineHeight":1,"fontStyle":"normal","fontWeight":"100","textTransform":"uppercase"}},"fontSize":"small"} -->
                    <p class="has-text-align-center has-small-font-size" style="font-style:normal;font-weight:100;line-height:1;text-transform:uppercase">' . esc_html__( 'Downloads', 'chuo' ) . '</p>
                    <!-- /wp:paragraph --></div>
                    <!-- /wp:group --></div>
                    <!-- /wp:column -->
                    
                    <!-- wp:column {"verticalAlignment":"bottom"} -->
                    <div class="wp-block-column is-vertically-aligned-bottom"><!-- wp:group {"style":{"spacing":{"blockGap":"0.25rem"}},"layout":{"type":"flex","flexWrap":"wrap","verticalAlignment":"center","justifyContent":"center"}} -->
                    <div class="wp-block-group"><!-- wp:paragraph {"style":{"typography":{"lineHeight":1}},"textColor":"highlight","className":"count-on-viewport","fontSize":"huge"} -->
                    <p class="count-on-viewport has-highlight-color has-text-color has-huge-font-size" style="line-height:1">' . esc_html__( '12', 'chuo' ) . '</p>
                    <!-- /wp:paragraph -->
                    
                    <!-- wp:paragraph {"style":{"typography":{"lineHeight":1,"textTransform":"uppercase"}},"textColor":"highlight","fontSize":"huge"} -->
                    <p class="has-highlight-color has-text-color has-huge-font-size" style="line-height:1;text-transform:uppercase">' . esc_html__( 'M', 'chuo' ) . '</p>
                    <!-- /wp:paragraph -->
                    
                    <!-- wp:paragraph {"align":"center","style":{"typography":{"lineHeight":1,"fontStyle":"normal","fontWeight":"100","textTransform":"uppercase"}},"fontSize":"small"} -->
                    <p class="has-text-align-center has-small-font-size" style="font-style:normal;font-weight:100;line-height:1;text-transform:uppercase">' . esc_html__( 'Users', 'chuo' ) . '</p>
                    <!-- /wp:paragraph --></div>
                    <!-- /wp:group --></div>
                    <!-- /wp:column -->
                    
                    <!-- wp:column {"verticalAlignment":"bottom"} -->
                    <div class="wp-block-column is-vertically-aligned-bottom"><!-- wp:group {"style":{"spacing":{"blockGap":"0.25rem"}},"layout":{"type":"flex","flexWrap":"wrap","verticalAlignment":"center","justifyContent":"center"}} -->
                    <div class="wp-block-group"><!-- wp:paragraph {"style":{"typography":{"lineHeight":1}},"textColor":"highlight","className":"count-on-viewport","fontSize":"huge"} -->
                    <p class="count-on-viewport has-highlight-color has-text-color has-huge-font-size" style="line-height:1">' . esc_html__( '500', 'chuo' ) . '</p>
                    <!-- /wp:paragraph -->
                    
                    <!-- wp:paragraph {"style":{"typography":{"lineHeight":1,"textTransform":"uppercase"}},"textColor":"highlight","fontSize":"huge"} -->
                    <p class="has-highlight-color has-text-color has-huge-font-size" style="line-height:1;text-transform:uppercase">' . esc_html__( '+', 'chuo' ) . '</p>
                    <!-- /wp:paragraph -->
                    
                    <!-- wp:paragraph {"align":"center","style":{"typography":{"lineHeight":1,"fontStyle":"normal","fontWeight":"100","textTransform":"uppercase"}},"fontSize":"small"} -->
                    <p class="has-text-align-center has-small-font-size" style="font-style:normal;font-weight:100;line-height:1;text-transform:uppercase">' . esc_html__( 'Cities', 'chuo' ) . '</p>
                    <!-- /wp:paragraph --></div>
                    <!-- /wp:group --></div>
                    <!-- /wp:column -->
                    
                    <!-- wp:column {"verticalAlignment":"bottom"} -->
                    <div class="wp-block-column is-vertically-aligned-bottom"><!-- wp:group {"style":{"spacing":{"blockGap":"0.25rem"}},"layout":{"type":"flex","flexWrap":"wrap","verticalAlignment":"center","justifyContent":"center"}} -->
                    <div class="wp-block-group"><!-- wp:paragraph {"style":{"typography":{"lineHeight":1}},"textColor":"highlight","className":"count-on-viewport","fontSize":"huge"} -->
                    <p class="count-on-viewport has-highlight-color has-text-color has-huge-font-size" style="line-height:1">' . esc_html__( '5', 'chuo' ) . '</p>
                    <!-- /wp:paragraph -->
                    
                    <!-- wp:paragraph {"style":{"typography":{"lineHeight":1,"textTransform":"uppercase"}},"textColor":"highlight","fontSize":"huge"} -->
                    <p class="has-highlight-color has-text-color has-huge-font-size" style="line-height:1;text-transform:uppercase">' . esc_html__( '/5', 'chuo' ) . '</p>
                    <!-- /wp:paragraph -->
                    
                    <!-- wp:paragraph {"align":"center","style":{"typography":{"lineHeight":1,"fontStyle":"normal","fontWeight":"100","textTransform":"uppercase"}},"fontSize":"small"} -->
                    <p class="has-text-align-center has-small-font-size" style="font-style:normal;font-weight:100;line-height:1;text-transform:uppercase">' . esc_html__( 'Critic Score', 'chuo' ) . '</p>
                    <!-- /wp:paragraph --></div>
                    <!-- /wp:group --></div>
                    <!-- /wp:column --></div>
                    <!-- /wp:columns --></div>
                    <!-- /wp:group --></section>
                    <!-- /wp:group -->',
);
