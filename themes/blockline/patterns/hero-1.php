<?php
/**
 * Hero Section
 * 
 * slug: hero-1
 * title: Hero 1 Section
 * categories: blockline
 */
$strings = array(
    'title'    => __( 'Blockline Theme', 'blockline' ),
    'subtitle' => __( 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor ut labore et dolore magna aliqua.', 'blockline' ),
    'button'   => __( 'Learn More', 'blockline' ),
);

return array(
    'title'      =>__( 'Hero 1 Section', 'blockline' ),
    'categories' => array( 'blockline' ),
    'content'    => '<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80"},"margin":{"top":"0","bottom":"0"}},"border":{"bottom":{"color":"#eeeeee","width":"1px"}},"color":{"background":"#758490"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group has-background" style="border-bottom-color:#eeeeee;border-bottom-width:1px;background-color:#758490;margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--80)"><!-- wp:spacer {"height":"60px"} -->
<div style="height:60px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:columns {"verticalAlignment":null} -->
<div class="wp-block-columns"><!-- wp:column {"verticalAlignment":"center","width":"50%","layout":{"type":"default"}} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:50%"><!-- wp:heading {"style":{"typography":{"fontSize":"4rem"}},"textColor":"bg-prim"} -->
<h2 class="has-bg-prim-color has-text-color" style="font-size:4rem">' . esc_html( $strings['title'] ) . '</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"textColor":"bg-prim","fontSize":"upper-heading"} -->
<p class="has-bg-prim-color has-text-color has-upper-heading-font-size">' . esc_html( $strings['subtitle'] ) . '</p>
<!-- /wp:paragraph -->

<!-- wp:spacer {"height":"10px"} -->
<div style="height:10px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"backgroundColor":"luminous-vivid-orange","textColor":"background","style":{"border":{"radius":"4px"}}} -->
<div class="wp-block-button"><a class="wp-block-button__link has-background-color has-luminous-vivid-orange-background-color has-text-color has-background wp-element-button" style="border-radius:4px">' . esc_html( $strings['button'] ) . '</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:image {"align":"center","id":1724,"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image aligncenter size-full"><img src="' . esc_url( BLOCKLINE_URL . 'assets/images/').'africa-riano.png" alt="" class="wp-image-1724"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:spacer {"height":"60px"} -->
<div style="height:60px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer --></div>
<!-- /wp:group -->
',
);