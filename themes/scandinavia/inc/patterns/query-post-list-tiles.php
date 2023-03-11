<?php
/**
 * 6 Post tile block pattern
 */
return array(
	'title'      => __( 'Post list (Tile display)', 'scandinavia' ),
	'categories' => array( 'query' ),
	'blockTypes' => array( 'core/query' ),
	'content'    => '<!-- wp:group {"tagName":"aside","style":{"spacing":{"margin":{"top":"3.75rem"}}},"layout":{"contentSize":"960px"}} -->
                    <aside class="wp-block-group" style="margin-top:3.75rem"><!-- wp:query {"queryId":36,"query":{"perPage":6,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"exclude","inherit":false},"displayLayout":{"type":"flex","columns":3}} -->
                    <div class="wp-block-query"><!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"700"}},"fontSize":"large"} -->
                    <p class="has-large-font-size" style="font-style:normal;font-weight:700">' . esc_html__( 'You might also like...', 'scandinavia' ) . '</p>
                    <!-- /wp:paragraph -->
                    
                    <!-- wp:post-template -->
                    <!-- wp:post-featured-image {"isLink":true,"style":{"spacing":{"margin":{"top":"0px"}}}} /-->
                    
                    <!-- wp:post-title {"isLink":true,"style":{"typography":{"letterSpacing":"-0.01em","fontStyle":"normal","fontWeight":"700"},"spacing":{"margin":{"bottom":"10px"}},"elements":{"link":{"color":{"text":"var:preset|color|foreground"}}}},"fontSize":"medium"} /-->
                    
                    <!-- wp:post-date {"format":"M j, Y","style":{"typography":{"fontStyle":"normal","fontWeight":"700","letterSpacing":"-0.01em"}},"textColor":"secondary","fontSize":"tiny"} /-->
                    <!-- /wp:post-template --></div>
                    <!-- /wp:query --></aside>
                    <!-- /wp:group -->',
);
