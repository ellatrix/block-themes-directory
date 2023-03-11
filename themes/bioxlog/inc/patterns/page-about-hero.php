<?php
/**
 * About Hero
 */
return array(
	'title'      => __( 'About Hero Section', 'bioxlog' ),
	'categories' => array( 'pages' ),
	'content'    => '
    <!-- wp:spacer {"height":"25px"} -->
    <div style="height:25px" aria-hidden="true" class="wp-block-spacer"></div>
    <!-- /wp:spacer -->

    <!-- wp:media-text {"mediaPosition":"right","mediaId":426,"mediaLink":"","mediaType":"image"} -->
    <div class="wp-block-media-text alignwide has-media-on-the-right is-stacked-on-mobile">
    <figure class="wp-block-media-text__media">
    <img src="' . esc_url( get_template_directory_uri() ) . '/assets/images/about-hero.png" alt="' . esc_attr__( 'Man', 'bioxlog' ) . '" class="wp-image-426 size-full"/></figure><div class="wp-block-media-text__content"><!-- wp:heading {"style":{"typography":{"fontSize":"80px","fontStyle":"normal","fontWeight":"800"}}} -->
    <h2 style="font-size:80px;font-style:normal;font-weight:800">' . esc_html__( 'Hello, I\'m', 'bioxlog') .' <br><strong>'. esc_html__( 'Monzur Alam', 'bioxlog' ). '</strong></h2>
    <!-- /wp:heading -->
    
    <!-- wp:paragraph {"style":{"typography":{"fontSize":"30px"}}} -->
    <p style="font-size:30px"><strong>' . esc_html__( 'WordPress Developer', 'bioxlog' ).'</strong></p>
    <!-- /wp:paragraph -->
    
    <!-- wp:social-links {"iconColor":"foreground","iconColorValue":"#000000","className":"is-style-logos-only","layout":{"type":"flex","justifyContent":"left"}} -->
    <ul class="wp-block-social-links has-icon-color is-style-logos-only"><!-- wp:social-link {"service":"facebook","label":"Facebook"} /-->
    
    <!-- wp:social-link {"service":"twitter","label":"Twitter"} /-->
    
    <!-- wp:social-link {"service":"linkedin","label":"Linkedin"} /-->
    
    <!-- wp:social-link {"service":"youtube","label":"Youtube"} /-->
    
    <!-- wp:social-link {"service":"chain","label":"Website"} /--></ul>
    <!-- /wp:social-links --></div></div>
    <!-- /wp:media-text -->

    <!-- wp:spacer {"height":"25px"} -->
    <div style="height:25px" aria-hidden="true" class="wp-block-spacer"></div>
    <!-- /wp:spacer -->
    ',
);
