<?php
/**
 * Three column posts block pattern
 */
return array(
    'title'      => __( 'Three column posts', 'chuo' ),
    'categories' => array( 'theme', 'footer', 'columns' ),
    'content'    => '<!-- wp:group {"style":{"spacing":{"margin":{"top":"4rem"}}},"layout":{"inherit":true,"type":"constrained"}} -->
                    <div class="wp-block-group" style="margin-top:4rem"><!-- wp:query {"queryId":1,"query":{"perPage":3,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false},"displayLayout":{"type":"flex","columns":3}} -->
                    <div class="wp-block-query"><!-- wp:post-template -->
                    <!-- wp:post-featured-image {"isLink":true} /-->
                    
                    <!-- wp:group {"style":{"spacing":{"blockGap":"0.25rem"}},"layout":{"type":"flex","orientation":"vertical"}} -->
                    <div class="wp-block-group"><!-- wp:post-terms {"term":"category","style":{"elements":{"link":{"color":{"text":"var:preset|color|foreground"}}}},"fontSize":"tiny"} /-->
                    
                    <!-- wp:post-title {"isLink":true,"style":{"elements":{"link":{"color":{"text":"var:preset|color|highlight"}}}},"fontSize":"large"} /--></div>
                    <!-- /wp:group -->
                    
                    <!-- wp:post-excerpt /-->
                    <!-- /wp:post-template --></div>
                    <!-- /wp:query --></div>
                    <!-- /wp:group -->',
);
