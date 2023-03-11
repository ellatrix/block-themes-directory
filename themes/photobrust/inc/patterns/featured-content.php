<?php
/**
 * Featured Content
 */
return array(
	'title'      => esc_html__( 'Featured Content', 'photobrust' ),
	'categories' => array( 'photobrust', 'featured' ),
	'content'    => '<!-- wp:group {"align":"full","className":"wp-block-section featured-content-section style-one","layout":{"inherit":true}} -->
    <div class="wp-block-group alignfull wp-block-section featured-content-section style-one">
        <!-- wp:group {"align":"wide","className":"section-heading"} -->
        <div class="wp-block-group alignwide section-heading">
            <!-- wp:heading {"textAlign":"center","level":6,"className":"has-medium-font-size section-subtitle"} -->
            <h6 class="has-text-align-center has-medium-font-size section-subtitle">
                <span>' . esc_html__( 'Featured', 'photobrust' ) . '</span>
            </h6>
            <!-- /wp:heading -->
    
            <!-- wp:heading {"textAlign":"center","style":{"typography":{"fontStyle":"normal","fontWeight":"700","lineHeight":"1.43"}}} -->
            <h2 class="has-text-align-center" style="font-style:normal;font-weight:700;line-height:1.43">' . esc_html__( 'Featured Posts', 'photobrust' ) . '</h2>
            <!-- /wp:heading -->
        </div>
        <!-- /wp:group -->
    
        <!-- wp:columns {"align":"wide","className":"featured-content-columns"} -->
        <div class="wp-block-columns alignwide featured-content-columns">
            <!-- wp:column -->
            <div class="wp-block-column">
                <!-- wp:group {"className":"wp-block-photobrust-featured-content"} -->
                <div class="wp-block-group wp-block-photobrust-featured-content">
                    <!-- wp:image {"sizeSlug":"full","linkDestination":"none"} -->
                    <figure class="wp-block-image size-full"><img src="' . get_parent_theme_file_uri( '/assets/images/featured-post-1.jpg' ) . '" alt="" class="" /></figure>
                    <!-- /wp:image -->
    
                    <!-- wp:group {"className":"content-wrapper"} -->
                    <div class="wp-block-group content-wrapper">
                        <!-- wp:heading {"style":{"typography":{"lineHeight":"1.75"}},"fontSize":"content-heading"} -->
                        <h2 class="has-content-heading-font-size" style="line-height:1.75">' . esc_html__( 'Top Tips Best Photograph', 'photobrust' ) . '</h2>
                        <!-- /wp:heading -->
    
                        <!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap"}} -->
                        <div class="wp-block-group">
                            <!-- wp:post-date {"isLink":true} /-->
    
                            <!-- wp:post-terms {"term":"post_tag"} /-->
                        </div>
                        <!-- /wp:group -->
    
                        <!-- wp:paragraph -->
                        <p>' . esc_html__( 'A negative effect livens up alsoative effect livens up interrupts, fect livens up interrupts', 'photobrust' ) . '</p>
                        <!-- /wp:paragraph -->
    
                        <!-- wp:buttons -->
                        <div class="wp-block-buttons">
                            <!-- wp:button {"className":"is-style-photobrust-button"} -->
                            <div class="wp-block-button is-style-photobrust-button"><a class="wp-block-button__link">' . esc_html__( 'Read More', 'photobrust' ) . '</a></div>
                            <!-- /wp:button -->
                        </div>
                        <!-- /wp:buttons -->
                    </div>
                    <!-- /wp:group -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:column -->
    
            <!-- wp:column -->
            <div class="wp-block-column">
                <!-- wp:group {"className":"wp-block-photobrust-featured-content"} -->
                <div class="wp-block-group wp-block-photobrust-featured-content">
                    <!-- wp:image {"id":20620,"sizeSlug":"full","linkDestination":"none"} -->
                    <figure class="wp-block-image size-full"><img src="' . get_parent_theme_file_uri( '/assets/images/featured-post-2.jpg' ) . '" alt="" class="" /></figure>
                    <!-- /wp:image -->
    
                    <!-- wp:group {"className":"content-wrapper"} -->
                    <div class="wp-block-group content-wrapper">
                        <!-- wp:heading {"style":{"typography":{"lineHeight":"1.75"}},"fontSize":"content-heading"} -->
                        <h2 class="has-content-heading-font-size" style="line-height:1.75">' . esc_html__( 'The Rule of Perfectionist', 'photobrust' ) . '</h2>
                        <!-- /wp:heading -->
    
                        <!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap"}} -->
                        <div class="wp-block-group">
                            <!-- wp:post-date {"isLink":true} /-->
    
                            <!-- wp:post-terms {"term":"post_tag"} /-->
                        </div>
                        <!-- /wp:group -->
    
                        <!-- wp:paragraph -->
                        <p>' . esc_html__( 'Faceting effect livens up at inteative effect livens up interruptsfect livens up.', 'photobrust' ) . '</p>
                        <!-- /wp:paragraph -->
    
                        <!-- wp:buttons -->
                        <div class="wp-block-buttons">
                            <!-- wp:button {"className":"is-style-photobrust-button"} -->
                            <div class="wp-block-button is-style-photobrust-button"><a class="wp-block-button__link">' . esc_html__( 'Read More', 'photobrust' ) . '</a></div>
                            <!-- /wp:button -->
                        </div>
                        <!-- /wp:buttons -->
                    </div>
                    <!-- /wp:group -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:column -->
    
            <!-- wp:column -->
            <div class="wp-block-column">
                <!-- wp:group {"className":"wp-block-photobrust-featured-content"} -->
                <div class="wp-block-group wp-block-photobrust-featured-content">
                    <!-- wp:image {"id":20621,"sizeSlug":"full","linkDestination":"none"} -->
                    <figure class="wp-block-image size-full"><img src="' . get_parent_theme_file_uri( '/assets/images/featured-post-3.jpg' ) . '" alt="" class="" /></figure>
                    <!-- /wp:image -->
    
                    <!-- wp:group {"className":"content-wrapper"} -->
                    <div class="wp-block-group content-wrapper">
                        <!-- wp:heading {"style":{"typography":{"lineHeight":"1.75"}},"fontSize":"content-heading"} -->
                        <h2 class="has-content-heading-font-size" style="line-height:1.75">' . esc_html__( 'Best Ways To Succeed', 'photobrust' ) . '</h2>
                        <!-- /wp:heading -->
    
                        <!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap"}} -->
                        <div class="wp-block-group">
                            <!-- wp:post-date {"isLink":true} /-->
    
                            <!-- wp:post-terms {"term":"post_tag"} /-->
                        </div>
                        <!-- /wp:group -->
    
                        <!-- wp:paragraph -->
                        <p>' . esc_html__( 'A positive effect living and enuative effect livens up interruptsover effect livens up unsuals it.', 'photobrust' ) . '</p>
                        <!-- /wp:paragraph -->
    
                        <!-- wp:buttons -->
                        <div class="wp-block-buttons">
                            <!-- wp:button {"className":"is-style-photobrust-button"} -->
                            <div class="wp-block-button is-style-photobrust-button"><a class="wp-block-button__link">' . esc_html__( 'Read More', 'photobrust' ) . '</a></div>
                            <!-- /wp:button -->
                        </div>
                        <!-- /wp:buttons -->
                    </div>
                    <!-- /wp:group -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:column -->
        </div>
        <!-- /wp:columns -->
    </div>
    <!-- /wp:group -->',
);









