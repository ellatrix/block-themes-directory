<?php
/**
 * Services
 */
return array(
	'title'      => esc_html__( 'Services', 'lensation' ),
	'categories' => array( 'lensation', 'featured' ),
	'content'    => '<!-- wp:group {"align":"full","className":"wp-block-section service-section","layout":{"inherit":true}} -->
        <div class="wp-block-group alignfull wp-block-section service-section"><!-- wp:group {"align":"wide","className":"wp-block-group-heading"} -->
        <div class="wp-block-group alignwide wp-block-group-heading"><!-- wp:heading {"level":6,"className":"section-tagline"} -->
        <h6 class="section-tagline">' . esc_html__( 'Statistics', 'lensation' ) . '</h6>
        <!-- /wp:heading -->
        
        <!-- wp:heading {"style":{"typography":{"fontStyle":"normal","fontWeight":"900"}}} -->
        <h2 style="font-style:normal;font-weight:900">' . esc_html__( 'Featured Services', 'lensation' ) . '</h2>
        <!-- /wp:heading --></div>
        <!-- /wp:group -->
        
        <!-- wp:media-text {"mediaPosition":"right","mediaId":7894,"mediaLink":"' . get_parent_theme_file_uri( '/assets/images/years-experience.png' ) . '","mediaType":"image"} -->
        <div class="wp-block-media-text alignwide has-media-on-the-right is-stacked-on-mobile"><figure class="wp-block-media-text__media"><img src="' . get_parent_theme_file_uri( '/assets/images/years-experience.png' ) . '" alt="" class="wp-image-7894 size-full"/></figure><div class="wp-block-media-text__content"><!-- wp:columns {"className":"wp-service-block-columns"} -->
        <div class="wp-block-columns wp-service-block-columns"><!-- wp:column {"width":"15%"} -->
        <div class="wp-block-column" style="flex-basis:15%"><!-- wp:image {"id":7895,"sizeSlug":"full","linkDestination":"none"} -->
        <figure class="wp-block-image size-full"><img src="' . get_parent_theme_file_uri( '/assets/images/icon-one.png' ) . '" alt="" class="wp-image-7895"/></figure>
        <!-- /wp:image --></div>
        <!-- /wp:column -->
        
        <!-- wp:column {"width":"85%"} -->
        <div class="wp-block-column" style="flex-basis:85%"><!-- wp:heading {"level":4} -->
        <h4>Powerful Options</h4>
        <!-- /wp:heading -->
        
        <!-- wp:paragraph -->
        <p>' . esc_html__( 'Lorem ipsum dolor sit amet, cons ectetur adipiscing elit.', 'lensation' ) . '</p>
        <!-- /wp:paragraph --></div>
        <!-- /wp:column --></div>
        <!-- /wp:columns -->
        
        <!-- wp:columns {"className":"wp-service-block-columns"} -->
        <div class="wp-block-columns wp-service-block-columns"><!-- wp:column {"width":"15%"} -->
        <div class="wp-block-column" style="flex-basis:15%"><!-- wp:image {"id":7896,"sizeSlug":"full","linkDestination":"none"} -->
        <figure class="wp-block-image size-full"><img src="' . get_parent_theme_file_uri( '/assets/images/icon-two.png' ) . '" alt="" class="wp-image-7896"/></figure>
        <!-- /wp:image --></div>
        <!-- /wp:column -->
        
        <!-- wp:column {"width":"85%"} -->
        <div class="wp-block-column" style="flex-basis:85%"><!-- wp:heading {"level":4} -->
        <h4>Unlimited Variations</h4>
        <!-- /wp:heading -->
        
        <!-- wp:paragraph -->
        <p>' . esc_html__( 'Lorem ipsum dolor sit amet, cons ectetur adipiscing elit.', 'lensation' ) . '</p>
        <!-- /wp:paragraph --></div>
        <!-- /wp:column --></div>
        <!-- /wp:columns -->
        
        <!-- wp:columns {"className":"wp-service-block-columns"} -->
        <div class="wp-block-columns wp-service-block-columns"><!-- wp:column {"width":"15%"} -->
        <div class="wp-block-column" style="flex-basis:15%"><!-- wp:image {"id":7897,"sizeSlug":"full","linkDestination":"none"} -->
        <figure class="wp-block-image size-full"><img src="' . get_parent_theme_file_uri( '/assets/images/icon-three.png' ) . '" alt="" class="wp-image-7897"/></figure>
        <!-- /wp:image --></div>
        <!-- /wp:column -->
        
        <!-- wp:column {"width":"85%"} -->
        <div class="wp-block-column" style="flex-basis:85%"><!-- wp:heading {"level":4} -->
        <h4>Effective Strategy</h4>
        <!-- /wp:heading -->
        
        <!-- wp:paragraph -->
        <p>' . esc_html__( 'Lorem ipsum dolor sit amet, cons ectetur adipiscing elit.', 'lensation' ) . '</p>
        <!-- /wp:paragraph --></div>
        <!-- /wp:column --></div>
        <!-- /wp:columns -->
        
        <!-- wp:paragraph -->
        <p>' . esc_html__( 'Are you interested in working with us?', 'lensation' ) . ' <a href="#">' . esc_html__( 'Lets Start Now', 'lensation' ) . '</a></p>
        <!-- /wp:paragraph --></div></div>
        <!-- /wp:media-text --></div>
        <!-- /wp:group -->',
);
