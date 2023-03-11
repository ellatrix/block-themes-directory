<?php
/**
 * Styled post posts block pattern
 */
return array(
	'title'      => __( 'Post List', 'sicily' ),
	'categories' => array( 'theme', 'featured', 'columns' ),
	'content'    => '<!-- wp:group {"style":{"spacing":{"padding":{"right":"1em","left":"1em"}}},"layout":{"inherit":true}} -->
    <div class="wp-block-group" style="padding-right:1em;padding-left:1em"><!-- wp:query {"queryId":14,"query":{"perPage":10,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false},"className":"default-view","layout":{"inherit":true}} -->
    <div class="wp-block-query default-view"><!-- wp:post-template -->
    <!-- wp:columns -->
    <div class="wp-block-columns"><!-- wp:column {"width":"%"} -->
    <div class="wp-block-column"><!-- wp:post-featured-image {"isLink":true} /--></div>
    <!-- /wp:column -->
    
    <!-- wp:column {"width":"3%"} -->
    <div class="wp-block-column" style="flex-basis:3%"><!-- wp:spacer {"height":"1px"} -->
    <div style="height:1px" aria-hidden="true" class="wp-block-spacer"></div>
    <!-- /wp:spacer --></div>
    <!-- /wp:column -->
    
    <!-- wp:column -->
    <div class="wp-block-column"><!-- wp:post-terms {"term":"category","style":{"typography":{"fontStyle":"normal","fontWeight":"600"}},"fontSize":"small"} /-->
    
    <!-- wp:post-title {"isLink":true} /-->
    
    <!-- wp:post-excerpt {"moreText":"Read More"} /--></div>
    <!-- /wp:column --></div>
    <!-- /wp:columns -->
    
    <!-- wp:spacer {"height":"25px"} -->
    <div style="height:25px" aria-hidden="true" class="wp-block-spacer"></div>
    <!-- /wp:spacer -->
    
    <!-- wp:separator {"backgroundColor":"secondary","className":"is-style-dots"} -->
    <hr class="wp-block-separator has-text-color has-secondary-color has-alpha-channel-opacity has-secondary-background-color has-background is-style-dots"/>
    <!-- /wp:separator -->
    
    <!-- wp:spacer {"height":"25px"} -->
    <div style="height:25px" aria-hidden="true" class="wp-block-spacer"></div>
    <!-- /wp:spacer -->
    <!-- /wp:post-template -->
    
    <!-- wp:query-pagination {"paginationArrow":"arrow","layout":{"type":"flex","justifyContent":"center"}} -->
    <!-- wp:query-pagination-previous /-->
    
    <!-- wp:query-pagination-numbers /-->
    
    <!-- wp:query-pagination-next /-->
    <!-- /wp:query-pagination -->
    
    <!-- wp:query-no-results -->
    <!-- wp:heading {"textAlign":"center"} -->
    <h2 class="has-text-align-center">No posts to show</h2>
    <!-- /wp:heading -->
    <!-- /wp:query-no-results --></div>
    <!-- /wp:query --></div>
    <!-- /wp:group -->',
);
