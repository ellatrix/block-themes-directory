<?php
/**
 * Block title block pattern
 */
return array(
    'title'      => __( 'Block title', 'chuo' ),
    'categories' => array( 'theme', 'featured', 'columns', 'buttons' ),
    'content'    => '<!-- wp:group {"tagName":"section","style":{"spacing":{"padding":{"top":"2rem","bottom":"2rem","right":"1em","left":"1em"}}}} -->
                    <section class="wp-block-group" style="padding-top:2rem;padding-right:1em;padding-bottom:2rem;padding-left:1em"><!-- wp:group {"style":{"spacing":{"blockGap":"1rem"}},"layout":{"inherit":true,"type":"constrained"}} -->
                    <div class="wp-block-group"><!-- wp:columns {"style":{"spacing":{"blockGap":"5rem"}}} -->
                    <div class="wp-block-columns"><!-- wp:column -->
                    <div class="wp-block-column"></div>
                    <!-- /wp:column -->
                    
                    <!-- wp:column {"width":"70%"} -->
                    <div class="wp-block-column" style="flex-basis:70%"><!-- wp:heading {"textAlign":"center","fontSize":"gigantic"} -->
                    <h2 class="has-text-align-center has-gigantic-font-size">' . __( 'The Mobile App of the Future', 'chuo' ) . '</h2>
                    <!-- /wp:heading -->
                    
                    <!-- wp:paragraph {"align":"center","textColor":"highlight","fontSize":"large"} -->
                    <p class="has-text-align-center has-highlight-color has-text-color has-large-font-size">' . __( 'Chuo App has partnered with the best to offer you the best service that you can get', 'chuo' ) . '</p>
                    <!-- /wp:paragraph --></div>
                    <!-- /wp:column -->
                    
                    <!-- wp:column -->
                    <div class="wp-block-column"></div>
                    <!-- /wp:column --></div>
                    <!-- /wp:columns --></div>
                    <!-- /wp:group --></section>
                    <!-- /wp:group -->',
);
