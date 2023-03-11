<?php
/**
 * Hero Main Section
 * 
 * slug: hero-main
 * title: Hero main Section
 * categories: blockline
 */
$strings = array(
    'title'    => __( 'Blockline Theme', 'blockline' ),
    'subtitle'    => __( 'OPPURTUNITIES ARE WAITING FOR YOU', 'blockline' ),
    'description' => __( 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor ut labore et dolore magna aliqua.', 'blockline' ),
    'button'   => __( 'Learn More', 'blockline' ),
);

return array(
    'title'      =>__( 'Hero Main Section', 'blockline' ),
    'categories' => array( 'blockline' ),
    'content'    => '<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80"},"margin":{"top":"0","bottom":"0"}},"border":{"bottom":{"width":"0px","style":"none"}},"color":{"background":"bg-prim"}},"layout":{"type":"constrained"}} -->
    <div class="wp-block-group has-background" style="border-bottom-style:none;border-bottom-width:0px;background-color:bg-prim;margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--80)"><!-- wp:spacer {"height":"10px"} -->
        <div style="height:10px" aria-hidden="true" class="wp-block-spacer"></div>
        <!-- /wp:spacer -->
        
        <!-- wp:columns {"align":"wide"} -->
        <div class="wp-block-columns alignwide"><!-- wp:column -->
        <div class="wp-block-column"><!-- wp:heading {"textAlign":"left","style":{"typography":{"fontStyle":"normal","fontWeight":"600","fontSize":"62px"},"elements":{"link":{"color":{"text":"accent"}}},"color":{"text":"accent"}}} -->
        <h2 class="has-text-align-left has-text-color has-link-color" style="color:accent;font-size:62px;font-style:normal;font-weight:600">' . esc_html( $strings['title'] ) . '</h2>
        <!-- /wp:heading -->
        
        <!-- wp:paragraph {"align":"left","style":{"typography":{"fontSize":"22px"}}} -->
        <p class="has-text-align-left" style="font-size:22px">' . esc_html( $strings['subtitle'] ) . '</p>
        <!-- /wp:paragraph -->
        
        <!-- wp:paragraph {"align":"left","fontSize":"small"} -->
        <p class="has-text-align-left has-small-font-size">' . esc_html( $strings['description'] ) . '</p>
        <!-- /wp:paragraph -->
        
        <!-- wp:buttons -->
        <div class="wp-block-buttons"><!-- wp:button {"style":{"color":{"background":"#ffe68d"},"border":{"radius":"34px"}}} -->
        <div class="wp-block-button"><a class="wp-block-button__link has-background wp-element-button" style="border-radius:34px;background-color:#ffe68d">L' . esc_html( $strings['button'] ) . '</a></div>
        <!-- /wp:button --></div>
        <!-- /wp:buttons --></div>
        <!-- /wp:column -->
        
        <!-- wp:column -->
        <div class="wp-block-column"><!-- wp:image {"id":102,"height":436,"sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":"0px"}}} -->
        <figure class="wp-block-image size-full is-resized has-custom-border"><img src="' . esc_url( BLOCKLINE_URL . 'assets/images/').'hero-center.png" alt="blockline" class="wp-image-102" style="border-radius:0px" height="436"/></figure>
        <!-- /wp:image --></div>
        <!-- /wp:column --></div>
        <!-- /wp:columns --></div>
        <!-- /wp:group -->',
);
