<?php
/**
 * Default Header
 */
return array(
	'title'      => __( 'Left Right Blog', 'kemet' ),
	'categories' => array( 'kemet-patterns', 'query' ),
	'content'    => '
	<!-- wp:query {"queryId":7,"query":{"perPage":3,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false},"className":"kemet-right-left-loop","layout":{"inherit":true}} -->
<div class="wp-block-query kemet-right-left-loop"><!-- wp:post-template -->
    <!-- wp:columns {"verticalAlignment":"center"} -->
    <div class="wp-block-columns are-vertically-aligned-center"><!-- wp:column {"verticalAlignment":"center"} -->
    <div class="wp-block-column is-vertically-aligned-center"><!-- wp:post-featured-image {"isLink":true,"align":"wide"} /--></div>
    <!-- /wp:column -->
    
    <!-- wp:column {"verticalAlignment":"center"} -->
    <div class="wp-block-column is-vertically-aligned-center"><!-- wp:group {"style":{"spacing":{"blockGap":"10px"}}} -->
    <div class="wp-block-group"><!-- wp:post-title {"isLink":true} /-->
    
    <!-- wp:post-date /-->
    
    <!-- wp:post-excerpt /--></div>
    <!-- /wp:group --></div>
    <!-- /wp:column --></div>
    <!-- /wp:columns -->
    <!-- /wp:post-template --></div>
    <!-- /wp:query -->',
);