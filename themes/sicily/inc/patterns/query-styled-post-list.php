<?php
/**
 * Styled post posts block pattern
 */
return array(
	'title'      => __( 'Styled Post List', 'sicily' ),
	'categories' => array( 'theme', 'featured', 'columns' ),
	'content'    => '<!-- wp:group {"tagName":"section","style":{"spacing":{"padding":{"right":"1em","left":"1em"}}},"layout":{"inherit":true}} -->
    <section class="wp-block-group" style="padding-right:1em;padding-left:1em"><!-- wp:heading {"textAlign":"center"} -->
    <h2 class="has-text-align-center">' . esc_html__( 'Recent News', 'sicily' ) . '</h2>
    <!-- /wp:heading -->
    
    <!-- wp:separator {"backgroundColor":"secondary"} -->
    <hr class="wp-block-separator has-text-color has-secondary-color has-alpha-channel-opacity has-secondary-background-color has-background"/>
    <!-- /wp:separator -->
    
    <!-- wp:group {"style":{"spacing":{"margin":{"top":"4em"}}}} -->
    <div class="wp-block-group" style="margin-top:4em"><!-- wp:query {"queryId":1,"query":{"perPage":1,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false},"displayLayout":{"type":"list","columns":3},"layout":{"inherit":false}} -->
    <div class="wp-block-query"><!-- wp:post-template {"align":"full"} -->
    <!-- wp:columns {"style":{"spacing":{}}} -->
    <div class="wp-block-columns"><!-- wp:column {"width":"66.6%"} -->
    <div class="wp-block-column" style="flex-basis:66.6%"><!-- wp:post-featured-image {"isLink":true} /--></div>
    <!-- /wp:column -->
    
    <!-- wp:column {"width":"33.33%"} -->
    <div class="wp-block-column" style="flex-basis:33.33%"><!-- wp:group {"style":{"typography":{"fontStyle":"normal","fontWeight":"600"},"spacing":{"margin":{"bottom":"1em"}}},"layout":{"type":"flex","orientation":"vertical"},"fontSize":"small"} -->
    <div class="wp-block-group has-small-font-size" style="font-style:normal;font-weight:600;margin-bottom:1em"><!-- wp:post-terms {"term":"category"} /--></div>
    <!-- /wp:group -->
    
    <!-- wp:post-title {"isLink":true} /-->
    
    <!-- wp:post-excerpt {"moreText":"Read More","style":{"spacing":{"margin":{"top":"1em"}}}} /--></div>
    <!-- /wp:column --></div>
    <!-- /wp:columns -->
    <!-- /wp:post-template -->
    
    <!-- wp:query-no-results -->
    <!-- wp:paragraph {"align":"center","placeholder":"Add text or blocks that will display when the query returns no results."} -->
    <p class="has-text-align-center">' . esc_html__( 'No posts found!', 'sicily' ) . '</p>
    <!-- /wp:paragraph -->
    <!-- /wp:query-no-results --></div>
    <!-- /wp:query -->
    
    <!-- wp:query {"queryId":1,"query":{"perPage":3,"pages":0,"offset":1,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false},"displayLayout":{"type":"flex","columns":3}} -->
    <div class="wp-block-query"><!-- wp:post-template -->
    <!-- wp:post-featured-image {"isLink":true,"style":{"spacing":{"margin":{"bottom":"1em"}}}} /-->
    
    <!-- wp:group {"style":{"spacing":{"margin":{"bottom":"1em"}}},"layout":{"type":"flex","orientation":"vertical"}} -->
    <div class="wp-block-group" style="margin-bottom:1em"><!-- wp:post-terms {"term":"category","style":{"typography":{"fontStyle":"normal","fontWeight":"600"}},"fontSize":"small"} /--></div>
    <!-- /wp:group -->
    
    <!-- wp:post-title {"isLink":true,"fontSize":"x-large"} /-->
    
    <!-- wp:post-excerpt {"moreText":"Read More","style":{"spacing":{"margin":{"top":"1em"}}}} /-->
    <!-- /wp:post-template -->
    
    <!-- wp:query-no-results -->
    <!-- wp:paragraph {"align":"center","placeholder":"Add text or blocks that will display when the query returns no results."} -->
    <p class="has-text-align-center">' . esc_html__( 'No posts found!', 'sicily' ) . '</p>
    <!-- /wp:paragraph -->
    <!-- /wp:query-no-results --></div>
    <!-- /wp:query --></div>
    <!-- /wp:group --></section>
    <!-- /wp:group -->',
);
