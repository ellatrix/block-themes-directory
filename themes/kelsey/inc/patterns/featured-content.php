<?php
/**
 * Featured Content
 */
return array(
	'title'      => esc_html__( 'Featured Content', 'kelsey' ),
	'categories' => array( 'kelsey', 'featured' ),
	'content'    => '<!-- wp:group {"align":"full","className":"wp-block-section","layout":{"inherit":true}} -->
    <div class="wp-block-group alignfull wp-block-section">
        <!-- wp:group {"align":"wide","className":"wp-block-group-heading"} -->
        <div class="wp-block-group alignwide wp-block-group-heading">
            <!-- wp:columns {"verticalAlignment":"bottom"} -->
            <div class="wp-block-columns are-vertically-aligned-bottom">
                <!-- wp:column {"verticalAlignment":"bottom","width":"33.33%"} -->
                <div class="wp-block-column is-vertically-aligned-bottom" style="flex-basis:33.33%">
                    <!-- wp:group {"className":"heading-content"} -->
                    <div class="wp-block-group heading-content">
                        <!-- wp:heading {"textAlign":"left","level":6,"style":{"typography":{"fontStyle":"normal","fontWeight":"500","textTransform":"uppercase","letterSpacing":"0.1875em"}},"textColor":"foreground","fontSize":"medium"} -->
                        <h6 class="has-text-align-left has-foreground-color has-text-color has-medium-font-size"
                            style="font-style:normal;font-weight:500;text-transform:uppercase;letter-spacing:0.1875em">' . esc_html__( 'Featured Content', 'kelsey' ) . '</h6>
                        <!-- /wp:heading -->
    
                        <!-- wp:heading {"textAlign":"left","style":{"typography":{"fontStyle":"normal","fontWeight":"700"}}} -->
                        <h2 class="has-text-align-left" style="font-style:normal;font-weight:700">' . esc_html__( 'Our Most Popular Posts', 'kelsey' ) . '</h2>
                        <!-- /wp:heading -->
                    </div>
                    <!-- /wp:group -->
                </div>
                <!-- /wp:column -->
    
                <!-- wp:column {"verticalAlignment":"bottom","width":"66.66%"} -->
                <div class="wp-block-column is-vertically-aligned-bottom" style="flex-basis:66.66%">
                    <!-- wp:buttons {"layout":{"type":"flex","justifyContent":"right"}} -->
                    <div class="wp-block-buttons">
                        <!-- wp:button {"className":"is-style-kelsey-button view-all-button"} -->
                        <div class="wp-block-button is-style-kelsey-button view-all-button"><a
                                class="wp-block-button__link" href="#">' . esc_html__( 'View All Posts', 'kelsey' ) . '</a></div>
                        <!-- /wp:button -->
                    </div>
                    <!-- /wp:buttons -->
                </div>
                <!-- /wp:column -->
            </div>
            <!-- /wp:columns -->
        </div>
        <!-- /wp:group -->
    
        <!-- wp:columns {"align":"wide","className":"featured-content-columns"} -->
        <div class="wp-block-columns alignwide featured-content-columns">
            <!-- wp:column -->
            <div class="wp-block-column">
                <!-- wp:group {"className":"wp-block-kelsey-featured-content"} -->
                <div class="wp-block-group wp-block-kelsey-featured-content">
                    <!-- wp:image {"sizeSlug":"full","linkDestination":"none"} -->
                    <figure class="wp-block-image size-full"><img
                            src="' . esc_url( get_theme_file_uri( '/assets/images/featured-post-1.jpg' ) ) . '"
                            alt="" /></figure>
                    <!-- /wp:image -->
    
                    <!-- wp:post-terms {"term":"post_tag"} /-->
    
                    <!-- wp:heading {"style":{"typography":{"lineHeight":"1.75"}},"fontSize":"content-heading"} -->
                    <h2 class="has-content-heading-font-size" style="line-height:1.75">' . esc_html__( 'Photography Lessons', 'kelsey' ) . '</h2>
                    <!-- /wp:heading -->
    
                    <!-- wp:paragraph -->
                    <p>' . esc_html__( 'Make your photos look brilliant in today’s article we present tips on …', 'kelsey' ) . '</p>
                    <!-- /wp:paragraph -->
    
                    <!-- wp:buttons -->
                    <div class="wp-block-buttons">
                        <!-- wp:button {"className":"is-style-kelsey-button"} -->
                        <div class="wp-block-button is-style-kelsey-button"><a class="wp-block-button__link">' . esc_html__( 'Read More', 'kelsey' ) . '</a></div>
                        <!-- /wp:button -->
                    </div>
                    <!-- /wp:buttons -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:column -->
    
            <!-- wp:column -->
            <div class="wp-block-column">
                <!-- wp:group {"className":"wp-block-kelsey-featured-content"} -->
                <div class="wp-block-group wp-block-kelsey-featured-content">
                    <!-- wp:image {"sizeSlug":"full","linkDestination":"none"} -->
                    <figure class="wp-block-image size-full"><img
                            src="' . esc_url( get_theme_file_uri( '/assets/images/featured-post-2.jpg' ) ) . '"
                            alt="" /></figure>
                    <!-- /wp:image -->
    
                    <!-- wp:post-terms {"term":"post_tag"} /-->
    
                    <!-- wp:heading {"style":{"typography":{"lineHeight":"1.75"}},"fontSize":"content-heading"} -->
                    <h2 class="has-content-heading-font-size" style="line-height:1.75">' . esc_html__( 'Greek Sculpture', 'kelsey' ) . '</h2>
                    <!-- /wp:heading -->
    
                    <!-- wp:paragraph -->
                    <p>' . esc_html__( 'Make your photos look brilliant in today’s article we present tips on …', 'kelsey' ) . '</p>
                    <!-- /wp:paragraph -->
    
                    <!-- wp:buttons -->
                    <div class="wp-block-buttons">
                        <!-- wp:button {"className":"is-style-kelsey-button"} -->
                        <div class="wp-block-button is-style-kelsey-button"><a class="wp-block-button__link">' . esc_html__( 'Read More', 'kelsey' ) . '</a></div>
                        <!-- /wp:button -->
                    </div>
                    <!-- /wp:buttons -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:column -->
    
            <!-- wp:column -->
            <div class="wp-block-column">
                <!-- wp:group {"className":"wp-block-kelsey-featured-content"} -->
                <div class="wp-block-group wp-block-kelsey-featured-content">
                    <!-- wp:image {"sizeSlug":"full","linkDestination":"none"} -->
                    <figure class="wp-block-image size-full"><img
                            src="' . esc_url( get_theme_file_uri( '/assets/images/featured-post-3.jpg' ) ) . '"
                            alt="" /></figure>
                    <!-- /wp:image -->
    
                    <!-- wp:post-terms {"term":"post_tag"} /-->
    
                    <!-- wp:heading {"style":{"typography":{"lineHeight":"1.75"}},"fontSize":"content-heading"} -->
                    <h2 class="has-content-heading-font-size" style="line-height:1.75">' . esc_html__( 'Holographic Lenses', 'kelsey' ) . '</h2>
                    <!-- /wp:heading -->
    
                    <!-- wp:paragraph -->
                    <p>' . esc_html__( 'Make your photos look brilliant in today’s article we present tips on …', 'kelsey' ) . '</p>
                    <!-- /wp:paragraph -->
    
                    <!-- wp:buttons -->
                    <div class="wp-block-buttons">
                        <!-- wp:button {"className":"is-style-kelsey-button"} -->
                        <div class="wp-block-button is-style-kelsey-button"><a class="wp-block-button__link">' . esc_html__( 'Read More', 'kelsey' ) . '</a></div>
                        <!-- /wp:button -->
                    </div>
                    <!-- /wp:buttons -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:column -->
        </div>
        <!-- /wp:columns -->
    </div>
    <!-- /wp:group -->',
);









