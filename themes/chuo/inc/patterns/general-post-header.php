<?php
/**
 * Post header block pattern
 */
return array(
    'title'      => __( 'Post header', 'chuo' ),
    'categories' => array( 'theme', 'header' ),
    'content'    => '<!-- wp:group {"className":"post-card","layout":{"type":"constrained","contentSize":"960px","wideSize":"1200px"}} -->
                    <div class="wp-block-group post-card"><!-- wp:post-title {"textAlign":"center","level":1,"style":{"spacing":{"margin":{"top":"0px","right":"0px","bottom":"0px","left":"0px"}}}} /-->
                    
                    <!-- wp:group {"style":{"spacing":{"margin":{"bottom":"16px"},"blockGap":"0.25rem"}},"className":"post-meta","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"center"}} -->
                    <div class="wp-block-group post-meta" style="margin-bottom:16px"><!-- wp:paragraph -->
                    <p>Filed under</p>
                    <!-- /wp:paragraph -->
                    
                    <!-- wp:post-terms {"term":"category","style":{"typography":{"fontStyle":"normal","fontWeight":"700"}},"className":"muted","fontSize":"small"} /-->
                    
                    <!-- wp:paragraph -->
                    <p>' . esc_html__( 'on', 'chuo' ) . '</p>
                    <!-- /wp:paragraph -->
                    
                    <!-- wp:post-date /-->
                    
                    <!-- wp:paragraph -->
                    <p>' . esc_html__( 'by', 'chuo' ) . '</p>
                    <!-- /wp:paragraph -->
                    
                    <!-- wp:post-author {"showAvatar":false,"showBio":false} /--></div>
                    <!-- /wp:group --></div>
                    <!-- /wp:group -->',
);
