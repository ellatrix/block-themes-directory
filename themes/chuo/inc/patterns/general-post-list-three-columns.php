<?php
/**
 * Post list 3 columns block pattern
 */
return array(
    'title'      => __( 'Post list (3 columns)', 'chuo' ),
    'categories' => array( 'theme', 'featured', 'columns', 'buttons' ),
    'content'    => '<!-- wp:group {"style":{"spacing":{"margin":{"top":"4rem"}}},"layout":{"inherit":true,"type":"constrained"}} -->
                    <div class="wp-block-group" style="margin-top:4rem"><!-- wp:group -->
                    <div class="wp-block-group"><!-- wp:heading {"textColor":"highlight","fontSize":"huge"} -->
                    <h2 class="has-highlight-color has-text-color has-huge-font-size">' . wp_kses_post( __( 'All Articles', 'chuo' ) ) . '</h2>
                    <!-- /wp:heading --></div>
                    <!-- /wp:group -->
                    
                    <!-- wp:query {"queryId":1,"query":{"perPage":"9","pages":0,"offset":"1","postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"exclude","inherit":false},"displayLayout":{"type":"flex","columns":3}} -->
                    <div class="wp-block-query"><!-- wp:post-template -->
                    <!-- wp:post-featured-image {"isLink":true,"align":"center"} /-->
                    
                    <!-- wp:post-title {"isLink":true,"style":{"elements":{"link":{"color":{"text":"var:preset|color|highlight"}}}},"fontSize":"large"} /-->
                    
                    <!-- wp:post-excerpt /-->
                    
                    <!-- wp:group {"style":{"spacing":{"blockGap":"0.25rem"},"typography":{"textTransform":"uppercase","fontStyle":"normal","fontWeight":"600"}},"layout":{"type":"flex","flexWrap":"nowrap"},"fontSize":"tiny"} -->
                    <div class="wp-block-group has-tiny-font-size" style="font-style:normal;font-weight:600;text-transform:uppercase"><!-- wp:post-terms {"term":"category","style":{"elements":{"link":{"color":{"text":"var:preset|color|foreground"}}}}} /-->
                    
                    <!-- wp:paragraph -->
                    <p>-</p>
                    <!-- /wp:paragraph -->
                    
                    <!-- wp:post-date /--></div>
                    <!-- /wp:group -->
                    <!-- /wp:post-template -->
                    
                    <!-- wp:query-pagination {"className":"mt-4","layout":{"type":"flex","justifyContent":"space-between"}} -->
                    <!-- wp:query-pagination-previous /-->
                    
                    <!-- wp:query-pagination-numbers /-->
                    
                    <!-- wp:query-pagination-next /-->
                    <!-- /wp:query-pagination -->
                    
                    <!-- wp:group -->
                    <div class="wp-block-group"></div>
                    <!-- /wp:group --></div>
                    <!-- /wp:query --></div>
                    <!-- /wp:group -->',
);
