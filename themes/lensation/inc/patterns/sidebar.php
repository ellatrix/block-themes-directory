<?php
/**
 * Sidebar
 */
return array(
	'title'      => esc_html__( 'Sidebar', 'lensation' ),
	'categories' => array( 'lensation', 'featured', 'pages' ),
	// 'blockTypes' => array( 'core/template-part/footer' ),
	'content'    => '<!-- wp:group {"className":"wp-block-widget-area wp-block-sidebar"} -->
    <div class="wp-block-group wp-block-widget-area wp-block-sidebar"><!-- wp:group {"className":"wp-block-widget"} -->
    <div class="wp-block-group wp-block-widget"><!-- wp:heading {"style":{"spacing":{"margin":{"top":"0px","right":"0px","bottom":"20px","left":"0px"}}}} -->
    <h2 id="about" style="margin-top:0px;margin-right:0px;margin-bottom:20px;margin-left:0px">' . esc_html__( 'About', 'lensation' ) . '</h2>
    <!-- /wp:heading -->
    
    <!-- wp:image {"id":8002,"sizeSlug":"full","linkDestination":"none"} -->
    <figure class="wp-block-image size-full"><img src="' . get_parent_theme_file_uri( '/assets/images/about-image.jpeg' ) . '" alt="" class="wp-image-8002"/></figure>
    <!-- /wp:image -->
    
    <!-- wp:paragraph -->
    <p>' . esc_html__( 'Lorem ipsum dolor sit amet, consec tetur adipiscing elit. Maecenas odio lacus, dignissim sollicitudin finibus commodo, rhoncus et ante', 'lensation' ) . '</p>
    <!-- /wp:paragraph --></div>
    <!-- /wp:group -->
    
    <!-- wp:group {"className":"wp-block-widget"} -->
    <div class="wp-block-group wp-block-widget"><!-- wp:heading {"style":{"spacing":{"margin":{"top":"0px","right":"0px","bottom":"20px","left":"0px"}}}} -->
    <h2 id="categories" style="margin-top:0px;margin-right:0px;margin-bottom:20px;margin-left:0px">' . esc_html__( 'Categories', 'lensation' ) . '</h2>
    <!-- /wp:heading -->
    
    <!-- wp:categories /--></div>
    <!-- /wp:group -->
    
    <!-- wp:group {"className":"wp-block-widget"} -->
    <div class="wp-block-group wp-block-widget"><!-- wp:heading {"style":{"spacing":{"margin":{"top":"0px","right":"0px","bottom":"20px","left":"0px"}}}} -->
    <h2 id="recent-post" style="margin-top:0px;margin-right:0px;margin-bottom:20px;margin-left:0px">' . esc_html__( 'Recent Post', 'lensation' ) . '</h2>
    <!-- /wp:heading -->
    
    <!-- wp:latest-posts {"displayPostDate":true,"displayFeaturedImage":true,"featuredImageAlign":"left","featuredImageSizeWidth":75,"featuredImageSizeHeight":75,"addLinkToFeaturedImage":true} /--></div>
    <!-- /wp:group -->
    
    <!-- wp:group {"className":"wp-block-widget"} -->
    <div class="wp-block-group wp-block-widget"><!-- wp:heading {"style":{"spacing":{"margin":{"top":"0px","right":"0px","bottom":"20px","left":"0px"}}}} -->
    <h2 id="tags" style="margin-top:0px;margin-right:0px;margin-bottom:20px;margin-left:0px">' . esc_html__( 'Tags', 'lensation' ) . '</h2>
    <!-- /wp:heading -->
    
    <!-- wp:tag-cloud {"numberOfTags":15} /--></div>
    <!-- /wp:group --></div>
    <!-- /wp:group -->',
);
