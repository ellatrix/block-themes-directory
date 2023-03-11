<?php
return array(
    'title'      => __( 'Default', 'estory' ),
    'categories' => array( 'estory-query' ),
    'blockTypes' => array('core/query'),
    'content'    => '<!-- wp:query {"query":{"perPage":10,"pages":0,"offset":"0","postType":"post","categoryIds":[],"tagIds":[],"order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"exclude","inherit":false},"displayLayout":{"type":"list","columns":3},"layout":{"inherit":true}} -->
    <div class="wp-block-query"><!-- wp:post-template {"className":"estory-post-loop"} -->
    <!-- wp:group {"layout":{"inherit":true}} -->
    <div class="wp-block-group"><!-- wp:post-featured-image {"isLink":true,"height":""} /-->
    
    <!-- wp:group {"className":"no-margin-top","style":{"spacing":{"padding":{"top":"3.125em","right":"3.125em","bottom":"3.125em","left":"3.125em"}}},"backgroundColor":"white"} -->
    <div class="wp-block-group has-white-background-color has-background no-margin-top" style="padding-top:3.125em;padding-right:3.125em;padding-bottom:3.125em;padding-left:3.125em"><!-- wp:group {"style":{"spacing":{"blockGap":"0px"}},"className":"no-margin-top","layout":{"type":"flex","allowOrientation":false}} -->
    <div class="wp-block-group no-margin-top"><!-- wp:post-terms {"term":"category","className":"estory-terms"} /--></div>
    <!-- /wp:group -->
    
    <!-- wp:post-title {"level":4,"isLink":true,"style":{"spacing":{"margin":{"top":"0px","bottom":"0.3em"}}}} /-->
    
    <!-- wp:post-date {"textColor":"text-color","className":"no-margin-top"} /-->
    
    <!-- wp:post-excerpt {"moreText":"Read More","style":{"spacing":{"margin":{"top":"1.25em"}}}} /--></div>
    <!-- /wp:group --></div>
    <!-- /wp:group -->
    <!-- /wp:post-template -->
    
    <!-- wp:query-pagination {"align":"left"} -->
    <!-- wp:query-pagination-previous /-->
    
    <!-- wp:query-pagination-numbers /-->
    
    <!-- wp:query-pagination-next {"label":"Next"} /-->
    <!-- /wp:query-pagination --></div>
    <!-- /wp:query -->    
    
    <!-- wp:spacer {"height":"36px"} -->
    <div style="height:36px" aria-hidden="true" class="wp-block-spacer"></div>
    <!-- /wp:spacer -->
    
    <!-- wp:image {"id":1986,"sizeSlug":"full","linkDestination":"none"} -->
    <figure class="wp-block-image size-full"><img src="' . esc_url( get_theme_file_uri( '/assets/images/banner-728x90.jpg' ) ) . '" alt="" class="wp-image-1986"/></figure>
    <!-- /wp:image -->'
);
