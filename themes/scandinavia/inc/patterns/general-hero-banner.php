<?php
/**
 * Featured item block pattern
 */
return array(
	'title'      => __( 'Hero Banner', 'scandinavia' ),
	'categories' => array( 'featured', 'columns' ),
	'content'    => '<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"4rem","bottom":"4rem"}}},"layout":{"inherit":false,"contentSize":"960px"}} -->
                    <div class="wp-block-group alignwide" style="padding-top:4rem;padding-bottom:4rem"><!-- wp:columns -->
                    <div class="wp-block-columns"><!-- wp:column -->
                    <div class="wp-block-column"><!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"center"}} -->
                    <div class="wp-block-group"><!-- wp:image {"width":450,"height":450,"style":{"border":{"radius":"100%"}}} -->
                    <figure class="wp-block-image is-resized" style="border-radius:100%"><img src="' . esc_url( get_template_directory_uri() ) . '/assets/images/blogger-photo.jpg" alt="blogger-photo" width="450" height="450"/></figure>
                    <!-- /wp:image --></div>
                    <!-- /wp:group --></div>
                    <!-- /wp:column -->
                    
                    <!-- wp:column {"verticalAlignment":"center"} -->
                    <div class="wp-block-column is-vertically-aligned-center"><!-- wp:group {"layout":{"type":"flex","orientation":"vertical","justifyContent":"center"}} -->
                    <div class="wp-block-group"><!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"600"}},"fontSize":"large"} -->
                    <p class="has-large-font-size" style="font-style:normal;font-weight:600">' . esc_html__( 'Hi there, my name is', 'scandinavia' ) . '</p>
                    <!-- /wp:paragraph -->
                    
                    <!-- wp:heading {"fontSize":"x-large"} -->
                    <h2 class="has-x-large-font-size">' . esc_html__( 'Mary Jane Doe', 'scandinavia' ) . '</h2>
                    <!-- /wp:heading -->
                    
                    <!-- wp:heading {"level":3,"textColor":"primary","fontSize":"large"} -->
                    <h3 class="has-primary-color has-text-color has-large-font-size">' . esc_html__( 'I\'m a Creative Blogger', 'scandinavia' ) . '</h3>
                    <!-- /wp:heading --></div>
                    <!-- /wp:group --></div>
                    <!-- /wp:column --></div>
                    <!-- /wp:columns --></div>
                    <!-- /wp:group -->',
);
