<?php
/**
 * Kemet General Patter
 * Simple Call to Action Section.
 */
return array(
	'title'      => __( 'Simple Call to Action Section.', 'kemet' ),
    'blockTypes' => array( 'core/cover' ),
    'categories' => array( 'kemet-patterns' ),
	'content'    => '<!-- wp:cover {"url":"' . esc_url( get_template_directory_uri() ) . '/assets/images/architecture-building.jpeg","id":979,"hasParallax":true,"dimRatio":80,"overlayColor":"tertiary","align":"wide","style":{"spacing":{"padding":{"top":"140px","bottom":"140px"}}}} -->
    <div class="wp-block-cover alignwide has-parallax" style="padding-top:140px;padding-bottom:140px;background-image:url(' . esc_url( get_template_directory_uri() ) . '/assets/images/architecture-building.jpeg)"><span aria-hidden="true" class="has-tertiary-background-color has-background-dim-80 wp-block-cover__gradient-background has-background-dim"></span><div class="wp-block-cover__inner-container"><!-- wp:group -->
    <div class="wp-block-group"><!-- wp:paragraph {"align":"center","textColor":"primary","fontSize":"x-large"} -->
    <p class="has-text-align-center has-primary-color has-text-color has-x-large-font-size">✉</p>
    <!-- /wp:paragraph -->
    
    <!-- wp:heading {"textAlign":"center","style":{"typography":{"fontStyle":"normal","fontWeight":"700","lineHeight":"1"},"spacing":{"margin":{"top":"15px","bottom":"25px"}}},"fontSize":"huge"} -->
    <h2 class="has-text-align-center has-huge-font-size" style="font-style:normal;font-weight:700;line-height:1;margin-top:15px;margin-bottom:25px">' . esc_html__( 'Get in Touch', 'kemet' ) . '</h2>
    <!-- /wp:heading -->
    
    <!-- wp:paragraph {"align":"center","style":{"typography":{"fontStyle":"normal","fontWeight":"400"}},"fontSize":"normal"} -->
    <p class="has-text-align-center has-normal-font-size" style="font-style:normal;font-weight:400"><strong>' . esc_html__( 'Contact us', 'kemet' ) . '</strong>' . esc_html__( ' if you have an inquiry or feedback', 'kemet' ) . '</p>
    <!-- /wp:paragraph -->
    
    <!-- wp:columns {"style":{"spacing":{"margin":{"top":"0px","bottom":"0px"}}}} -->
    <div class="wp-block-columns" style="margin-top:0px;margin-bottom:0px"><!-- wp:column -->
    <div class="wp-block-column"><!-- wp:heading {"textAlign":"right","level":4,"style":{"typography":{"fontStyle":"normal","fontWeight":"400"}}} -->
    <h4 class="has-text-align-right" style="font-style:normal;font-weight:400">' . esc_html__( 'Email: mail@example.com', 'kemet') . '</h4>
    <!-- /wp:heading --></div>
    <!-- /wp:column -->
    
    <!-- wp:column -->
    <div class="wp-block-column"><!-- wp:heading {"textAlign":"left","level":4,"style":{"typography":{"fontStyle":"normal","fontWeight":"400"}}} -->
    <h4 class="has-text-align-left" style="font-style:normal;font-weight:400">' . esc_html__( 'Phone:+(223)17620314780', 'kemet') . '</h4>
    <!-- /wp:heading --></div>
    <!-- /wp:column --></div>
    <!-- /wp:columns -->
    
    <!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
    <div class="wp-block-buttons"><!-- wp:button {"className":"is-style-kmt-rounded","fontSize":"normal"} -->
    <div class="wp-block-button has-custom-font-size is-style-kmt-rounded has-normal-font-size"><a class="wp-block-button__link" href="#"><strong>' . esc_html__( 'Contact With Us', 'kemet') . '</strong><strong>»</strong></a></div>
    <!-- /wp:button --></div>
    <!-- /wp:buttons --></div>
    <!-- /wp:group --></div></div>
    <!-- /wp:cover -->
    ',
);