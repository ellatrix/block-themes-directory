<?php
/**
 * Contact Us
 */
return array(
	'title'      => esc_html__( 'Contact Us', 'lensation' ),
	'categories' => array( 'lensation', 'featured' ),
	'content'    => '<!-- wp:group {"align":"full","className":"alignfull wp-block-section contact-section","layout":{"inherit":true}} -->
        <div class="wp-block-group alignfull wp-block-section contact-section"><!-- wp:group {"className":"wp-block-group-heading"} -->
        <div class="wp-block-group wp-block-group-heading"><!-- wp:columns {"align":"wide"} -->
        <div class="wp-block-columns alignwide"><!-- wp:column {"width":"70%","className":"wp-block-column-wrap"} -->
        <div class="wp-block-column wp-block-column-wrap" style="flex-basis:70%"><!-- wp:group {"className":"wp-block-heading-wrap"} -->
        <div class="wp-block-group wp-block-heading-wrap"><!-- wp:heading {"level":6,"className":"section-tagline"} -->
        <h6 class="section-tagline">' . esc_html__( 'Make it Happen', 'lensation' ) . '</h6>
        <!-- /wp:heading -->
        
        <!-- wp:heading -->
        <h2>' . esc_html__( 'Lets Create The Future', 'lensation' ) . '</h2>
        <!-- /wp:heading --></div>
        <!-- /wp:group --></div>
        <!-- /wp:column -->
        
        <!-- wp:column {"width":"30%"} -->
        <div class="wp-block-column" style="flex-basis:30%"></div>
        <!-- /wp:column --></div>
        <!-- /wp:columns --></div>
        <!-- /wp:group -->
        
        <!-- wp:contact-form-7/contact-form-selector {"id":7964,"title":"Contact Form"} -->
        <div class="wp-block-contact-form-7-contact-form-selector">[contact-form-7 id="7964" title="Contact Form"]</div>
        <!-- /wp:contact-form-7/contact-form-selector --></div>
        <!-- /wp:group -->',
);



