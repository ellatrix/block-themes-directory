<?php
/**
 * Hero Section
 * 
 * slug: hero
 * title: Hero Section
 * categories: blockline
 */

$strings = array(
    'title'    => __( 'Blockline Theme', 'blockline' ),
    'subtitle' => __( 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor ut labore et dolore magna aliqua.', 'blockline' ),
    'button'   => __( 'Learn More', 'blockline' ),
    'image'    => ''
);

return array(
    'title'      =>__( 'Hero Section', 'blockline' ),
    'categories' => array( 'blockline' ),
    'content'    => '<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80"},"margin":{"top":"0","bottom":"0"}},"border":{"top":{"style":"none","width":"0px"},"right":{"style":"none","width":"0px"},"bottom":{"color":"#eeeeee","style":"none","width":"0px"},"left":{"style":"none","width":"0px"}}},"background":"bg-prim","layout":{"type":"constrained"}} -->
    <div class="wp-block-group has-bg-prim-background-color has-background" style="border-top-style:none;border-top-width:0px;border-right-style:none;border-right-width:0px;border-bottom-color:#eeeeee;border-bottom-style:none;border-bottom-width:0px;border-left-style:none;border-left-width:0px;margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--80)"><!-- wp:spacer {"height":"60px"} -->
    <div style="height:60px" aria-hidden="true" class="wp-block-spacer"></div>
    <!-- /wp:spacer -->
    
    <!-- wp:heading {"textAlign":"center","style":{"typography":{"fontStyle":"normal","fontWeight":"600","fontSize":"70px"},"elements":{"link":{"color":{"text":"var:preset|color|background"}}}}} -->
    <h2 class="has-text-align-center has-link-color" style="font-size:70px;font-style:normal;font-weight:600">' . esc_html( $strings['title'] ) . '</h2>
    <!-- /wp:heading -->
    
    <!-- wp:paragraph {"align":"center","fontSize":"upper-heading"} -->
    <p class="has-text-align-center has-upper-heading-font-size">' . esc_html( $strings['subtitle'] ) . '</p>
    <!-- /wp:paragraph -->
    
    <!-- wp:spacer {"height":"40px"} -->
    <div style="height:40px" aria-hidden="true" class="wp-block-spacer"></div>
    <!-- /wp:spacer -->

    <!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"},"style":{"spacing":{"blockGap":"0"}}} -->
<div class="wp-block-buttons"><!-- wp:button {"style":{"border":{"radius":"100px"},"spacing":{"padding":{"top":"1rem","right":"2rem","bottom":"1rem","left":"2rem"}}},"className":"is-style-fill","fontSize":"normal"} -->
<div class="wp-block-button has-custom-font-size is-style-fill has-normal-font-size"><a class="wp-block-button__link wp-element-button" style="border-radius:100px;padding-top:1rem;padding-right:2rem;padding-bottom:1rem;padding-left:2rem">' . esc_html( $strings['button'] ) . '</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->

    
    <!-- wp:spacer {"height":"30px"} -->
    <div style="height:30px" aria-hidden="true" class="wp-block-spacer"></div>
    <!-- /wp:spacer -->
    <!-- wp:image {"align":"center","id":13,"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image aligncenter size-full"><img src="' . esc_url( BLOCKLINE_URL . 'assets/images/').'hero-center.png" alt="" class="wp-image-13"/></figure>
<!-- /wp:image --></div>
    ',
);