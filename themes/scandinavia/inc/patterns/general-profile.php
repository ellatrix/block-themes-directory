<?php
/**
 * Profile block pattern
 */
return array(
	'title'      => __( 'Profile', 'scandinavia' ),
	'categories' => array( 'featured', 'columns' ),
	'content'    => '<!-- wp:group {"style":{"spacing":{"padding":{"top":"3.75rem","bottom":"3.75rem"}}}} -->
                    <div class="wp-block-group" style="padding-top:3.75rem;padding-bottom:3.75rem"><!-- wp:columns -->
                    <div class="wp-block-columns"><!-- wp:column -->
                    <div class="wp-block-column"><!-- wp:image {"id":1864,"sizeSlug":"full","linkDestination":"none"} -->
                    <figure class="wp-block-image size-full"><img src="' . esc_url( get_template_directory_uri() ) . '/assets/images/blogger-photo-portrait.jpg" alt="" class="wp-image-1864"/></figure>
                    <!-- /wp:image --></div>
                    <!-- /wp:column -->
                    
                    <!-- wp:column -->
                    <div class="wp-block-column"><!-- wp:group {"layout":{"type":"flex","orientation":"vertical","justifyContent":"center"}} -->
                    <div class="wp-block-group"><!-- wp:heading {"textAlign":"center"} -->
                    <h2 class="has-text-align-center">' . esc_html__( 'Lorem Ipsum', 'scandinavia' ) . '</h2>
                    <!-- /wp:heading -->
                    
                    <!-- wp:paragraph -->
                    <p>' . esc_html__( 'Sociis natoque penatibus et magnis dis parturient. Egestas sed sed risus pretium quam vulputate dignissim.', 'scandinavia' ) . '</p>
                    <!-- /wp:paragraph -->
                    
                    <!-- wp:list {"style":{"typography":{"lineHeight":"2.5"}}} -->
                    <ul style="line-height:2.5"><li>' . esc_html__( 'Worked in a research laboratory', 'scandinavia' ) . '</li><li>' . esc_html__( 'Worked as an engineer at a manufacturing plant', 'scandinavia' ) . '</li><li>' . esc_html__( 'Worked as a marketing analyst', 'scandinavia' ) . '</li><li>' . esc_html__( 'Earned an MBA', 'scandinavia' ) . '</li><li>' . esc_html__( 'Worked as a Project Manager and then a Product Manager', 'scandinavia' ) . '</li></ul>
                    <!-- /wp:list --></div>
                    <!-- /wp:group --></div>
                    <!-- /wp:column --></div>
                    <!-- /wp:columns --></div>
                    <!-- /wp:group -->',
);
