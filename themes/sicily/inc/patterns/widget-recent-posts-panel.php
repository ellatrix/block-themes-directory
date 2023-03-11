<?php
/**
 * Recent posts widget block pattern
 */
return array(
	'title'      => __( 'Recent Posts Widget Panel', 'sicily' ),
	'categories' => array( 'theme', 'featured', 'widgets' ),
	'content'    => '<!-- wp:group {"className":"panel"} -->
                    <div class="wp-block-group panel"><!-- wp:heading {"fontSize":"large"} -->
                    <h2 class="has-large-font-size">' . esc_html__( 'Recent Posts', 'sicily' ) . '</h2>
                    <!-- /wp:heading -->
                    
                    <!-- wp:latest-posts {"displayPostDate":true,"displayFeaturedImage":true,"featuredImageAlign":"left","featuredImageSizeSlug":"medium","featuredImageSizeWidth":150,"featuredImageSizeHeight":150,"addLinkToFeaturedImage":true} /--></div>
                    <!-- /wp:group -->',
);
