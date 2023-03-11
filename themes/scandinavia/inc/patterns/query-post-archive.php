<?php
/**
 * Featured item block pattern
 */
return array(
	'title'      => __( 'Archive Post (List)', 'scandinavia' ),
	'categories' => array( 'query' ),
    'blockTypes' => array( 'core/query' ),
	'content'    => '<!-- wp:group {"tagName":"main","style":{"spacing":{"margin":{"bottom":"60px","top":"0px"},"padding":{"top":"60px"}}},"layout":{"contentSize":"960px"}} -->
                    <main class="wp-block-group" style="margin-top:0px;margin-bottom:60px;padding-top:60px"><!-- wp:group {"style":{"spacing":{"padding":{"bottom":"3.75rem"}}}} -->
                    <div class="wp-block-group" style="padding-bottom:3.75rem"><!-- wp:query-title {"type":"archive","textAlign":"center","style":{"typography":{"fontStyle":"normal","fontWeight":"700"}}} /-->
                    
                    <!-- wp:term-description {"textAlign":"center"} /--></div>
                    <!-- /wp:group -->
                    
                    <!-- wp:query {"queryId":11,"query":{"perPage":10,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false},"displayLayout":{"type":"list","columns":3}} -->
                    <div class="wp-block-query"><!-- wp:post-template -->
                    <!-- wp:group -->
                    <div class="wp-block-group"><!-- wp:post-featured-image {"isLink":true,"style":{"spacing":{"margin":{"top":"0px","right":"0px","bottom":"40px","left":"0px"}}}} /-->
                    
                    <!-- wp:group {"style":{"spacing":{"margin":{"top":"0rem","bottom":"0rem"}}},"className":"post-summary","layout":{"contentSize":"720px"}} -->
                    <div class="wp-block-group post-summary" style="margin-top:0rem;margin-bottom:0rem"><!-- wp:group {"style":{"spacing":{"blockGap":"0px"}},"className":"post-meta","layout":{"type":"flex","flexWrap":"nowrap"}} -->
                    <div class="wp-block-group post-meta"><!-- wp:post-date {"format":"M j, Y","style":{"typography":{"textTransform":"uppercase","fontStyle":"normal","fontWeight":"700"}},"fontSize":"tiny"} /-->
                    
                    <!-- wp:post-terms {"term":"category","style":{"typography":{"textTransform":"uppercase","fontStyle":"normal","fontWeight":"700"}},"fontSize":"tiny"} /--></div>
                    <!-- /wp:group -->
                    
                    <!-- wp:post-title {"isLink":true,"style":{"spacing":{"margin":{"top":"0.5rem","bottom":"0.5rem"}},"elements":{"link":{"color":{"text":"var:preset|color|foreground"}}}}} /-->
                    
                    <!-- wp:post-excerpt {"style":{"spacing":{"margin":{"top":"0px","right":"0px","bottom":"0px","left":"0px"},"padding":{"top":"0px","right":"0px","bottom":"0px","left":"0px"}}}} /-->
                    
                    <!-- wp:spacer -->
                    <div style="height:100px" aria-hidden="true" class="wp-block-spacer"></div>
                    <!-- /wp:spacer --></div>
                    <!-- /wp:group --></div>
                    <!-- /wp:group -->
                    <!-- /wp:post-template -->
                    
                    <!-- wp:query-pagination {"layout":{"type":"flex","justifyContent":"space-between"}} -->
                    <!-- wp:query-pagination-previous /-->
                    
                    <!-- wp:query-pagination-numbers /-->
                    
                    <!-- wp:query-pagination-next /-->
                    <!-- /wp:query-pagination -->
                    
                    <!-- wp:query-no-results -->
                    <!-- wp:group {"style":{"spacing":{"padding":{"top":"40px","bottom":"40px"}}},"layout":{"contentSize":"720px"}} -->
                    <div class="wp-block-group" style="padding-top:40px;padding-bottom:40px"><!-- wp:paragraph {"align":"center","className":"text-center","fontSize":"x-large"} -->
                    <p class="has-text-align-center text-center has-x-large-font-size">' . esc_html__( 'No posts found!', 'scandinavia' ) . '</p>
                    <!-- /wp:paragraph -->
                    
                    <!-- wp:paragraph {"align":"center","className":"text-center"} -->
                    <p class="has-text-align-center text-center">' . esc_html__( 'Please log in to WordPress Dashboard and create your first post.', 'scandinavia' ) . '</p>
                    <!-- /wp:paragraph --></div>
                    <!-- /wp:group -->
                    <!-- /wp:query-no-results --></div>
                    <!-- /wp:query --></main>
                    <!-- /wp:group -->',
);


