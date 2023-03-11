<?php
/**
 * Featured item block pattern
 */
return array(
	'title'      => __( 'Company Showcase', 'scandinavia' ),
	'categories' => array( 'featured', 'columns' ),
	'content'    => '<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"3.75rem","bottom":"3.75rem"}}}} -->
                    <div class="wp-block-group alignfull" style="padding-top:3.75rem;padding-bottom:3.75rem"><!-- wp:heading {"textAlign":"center","style":{"typography":{"fontStyle":"normal","fontWeight":"900"}}} -->
                    <h2 class="has-text-align-center" style="font-style:normal;font-weight:900">Trusted By The Experts</h2>
                    <!-- /wp:heading -->
                    
                    <!-- wp:columns {"style":{"spacing":{"margin":{"top":"1.8rem"}}}} -->
                    <div class="wp-block-columns" style="margin-top:1.8rem"><!-- wp:column -->
                    <div class="wp-block-column"><!-- wp:image {"id":1860,"sizeSlug":"full","linkDestination":"none"} -->
                    <figure class="wp-block-image size-full"><img src="' . esc_url( get_template_directory_uri() ) . '/assets/images/companies/1.png" alt="company-logo" class="wp-image-1860"/></figure>
                    <!-- /wp:image --></div>
                    <!-- /wp:column -->
                    
                    <!-- wp:column -->
                    <div class="wp-block-column"><!-- wp:image {"id":1860,"sizeSlug":"full","linkDestination":"none"} -->
                    <figure class="wp-block-image size-full"><img src="' . esc_url( get_template_directory_uri() ) . '/assets/images/companies/2.png" alt="company-logo" class="wp-image-1860"/></figure>
                    <!-- /wp:image --></div>
                    <!-- /wp:column -->
                    
                    <!-- wp:column -->
                    <div class="wp-block-column"><!-- wp:image {"id":1860,"sizeSlug":"full","linkDestination":"none"} -->
                    <figure class="wp-block-image size-full"><img src="' . esc_url( get_template_directory_uri() ) . '/assets/images/companies/3.png" alt="company-logo" class="wp-image-1860"/></figure>
                    <!-- /wp:image --></div>
                    <!-- /wp:column -->
                    
                    <!-- wp:column -->
                    <div class="wp-block-column"><!-- wp:image {"id":1860,"sizeSlug":"full","linkDestination":"none"} -->
                    <figure class="wp-block-image size-full"><img src="' . esc_url( get_template_directory_uri() ) . '/assets/images/companies/4.png" alt="company-logo" class="wp-image-1860"/></figure>
                    <!-- /wp:image --></div>
                    <!-- /wp:column -->
                    
                    <!-- wp:column -->
                    <div class="wp-block-column"><!-- wp:image {"id":1860,"sizeSlug":"full","linkDestination":"none"} -->
                    <figure class="wp-block-image size-full"><img src="' . esc_url( get_template_directory_uri() ) . '/assets/images/companies/5.png" alt="company-logo" class="wp-image-1860"/></figure>
                    <!-- /wp:image --></div>
                    <!-- /wp:column -->
                    
                    <!-- wp:column -->
                    <div class="wp-block-column"><!-- wp:image {"id":1860,"sizeSlug":"full","linkDestination":"none"} -->
                    <figure class="wp-block-image size-full"><img src="' . esc_url( get_template_directory_uri() ) . '/assets/images/companies/6.png" alt="company-logo" class="wp-image-1860"/></figure>
                    <!-- /wp:image --></div>
                    <!-- /wp:column -->
                    
                    <!-- wp:column -->
                    <div class="wp-block-column"><!-- wp:image {"id":1860,"sizeSlug":"full","linkDestination":"none"} -->
                    <figure class="wp-block-image size-full"><img src="' . esc_url( get_template_directory_uri() ) . '/assets/images/companies/7.png" alt="company-logo" class="wp-image-1860"/></figure>
                    <!-- /wp:image --></div>
                    <!-- /wp:column -->
                    
                    <!-- wp:column -->
                    <div class="wp-block-column"><!-- wp:image {"id":1860,"sizeSlug":"full","linkDestination":"none"} -->
                    <figure class="wp-block-image size-full"><img src="' . esc_url( get_template_directory_uri() ) . '/assets/images/companies/8.png" alt="company-logo" class="wp-image-1860"/></figure>
                    <!-- /wp:image --></div>
                    <!-- /wp:column --></div>
                    <!-- /wp:columns --></div>
                    <!-- /wp:group -->',
);
