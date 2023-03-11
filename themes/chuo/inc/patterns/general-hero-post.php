<?php
/**
 * Hero post block pattern
 */
return array(
    'title'      => __( 'Hero post', 'chuo' ),
    'categories' => array( 'theme', 'featured', 'columns', 'buttons' ),
    'content'    => '<!-- wp:group {"align":"full","className":"archive-header"} -->
                    <div class="wp-block-group alignfull archive-header"><!-- wp:query {"queryId":0,"query":{"perPage":"1","pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"only","inherit":false}} -->
                    <div class="wp-block-query"><!-- wp:post-template -->
                    <!-- wp:group {"style":{"spacing":{"padding":{"top":"4rem","right":"1em","bottom":"4rem","left":"1em"}}},"backgroundColor":"tertiary","layout":{"type":"constrained"}} -->
                    <div class="wp-block-group has-tertiary-background-color has-background" style="padding-top:4rem;padding-right:1em;padding-bottom:4rem;padding-left:1em"><!-- wp:group {"layout":{"type":"constrained"}} -->
                    <div class="wp-block-group"><!-- wp:query-title {"type":"archive","textColor":"highlight"} /-->
                    
                    <!-- wp:term-description /--></div>
                    <!-- /wp:group -->
                    
                    <!-- wp:group -->
                    <div class="wp-block-group"><!-- wp:columns -->
                    <div class="wp-block-columns"><!-- wp:column -->
                    <div class="wp-block-column"><!-- wp:post-featured-image {"isLink":true} /--></div>
                    <!-- /wp:column -->
                    
                    <!-- wp:column -->
                    <div class="wp-block-column"><!-- wp:post-title {"isLink":true,"style":{"elements":{"link":{"color":{"text":"var:preset|color|highlight"}}}}} /-->
                    
                    <!-- wp:post-excerpt /-->
                    
                    <!-- wp:group {"style":{"spacing":{"blockGap":"0.25rem"},"typography":{"textTransform":"uppercase","fontStyle":"normal","fontWeight":"600"}},"layout":{"type":"flex","flexWrap":"nowrap"},"fontSize":"tiny"} -->
                    <div class="wp-block-group has-tiny-font-size" style="font-style:normal;font-weight:600;text-transform:uppercase"><!-- wp:post-terms {"term":"category","style":{"elements":{"link":{"color":{"text":"var:preset|color|primary"}}}}} /-->
                    
                    <!-- wp:paragraph -->
                    <p>-</p>
                    <!-- /wp:paragraph -->
                    
                    <!-- wp:post-date /--></div>
                    <!-- /wp:group --></div>
                    <!-- /wp:column --></div>
                    <!-- /wp:columns --></div>
                    <!-- /wp:group --></div>
                    <!-- /wp:group -->
                    <!-- /wp:post-template --></div>
                    <!-- /wp:query --></div>
                    <!-- /wp:group -->',
);
