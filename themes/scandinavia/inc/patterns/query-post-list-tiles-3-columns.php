<?php
/**
 * 3 Posts tile block pattern
 */
return array(
	'title'      => __( 'Post list 3 items (Tile display)', 'scandinavia' ),
	'categories' => array( 'query' ),
	'blockTypes' => array( 'core/query' ),
	'content'    => '<!-- wp:group {"style":{"spacing":{"margin":{"bottom":"3.75rem"}}}} -->
                    <div class="wp-block-group" style="margin-bottom:3.75rem"><!-- wp:query {"queryId":14,"query":{"perPage":3,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"exclude","inherit":false},"displayLayout":{"type":"flex","columns":3},"layout":{"contentSize":"1200px"}} -->
                    <div class="wp-block-query"><!-- wp:post-template -->
                    <!-- wp:post-featured-image {"isLink":true,"style":{"spacing":{"margin":{"top":"0px"}}}} /-->
                    
                    <!-- wp:post-title {"isLink":true,"style":{"spacing":{"margin":{"top":"0px","right":"0px","bottom":"10px","left":"0px"}},"typography":{"letterSpacing":"-0.01em"},"elements":{"link":{"color":{"text":"var:preset|color|foreground"}}}},"fontSize":"medium"} /-->
                    
                    <!-- wp:post-date {"format":"M j, Y","style":{"typography":{"textTransform":"uppercase","fontStyle":"normal","fontWeight":"700","letterSpacing":"-0.01em"}},"textColor":"secondary","fontSize":"tiny"} /-->
                    <!-- /wp:post-template --></div>
                    <!-- /wp:query --></div>
                    <!-- /wp:group -->',
);
