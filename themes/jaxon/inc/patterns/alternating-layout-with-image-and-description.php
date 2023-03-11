<?php
/**
 * Pattern
 *
 * @author Themeisle
 * @package jaxon
 * @since 1.0.0
 *
 * slug: alternating-layout-with-image-and-description
 * title: Alternating layout with image and description
 * categories: Jaxon
 * keywords: columns, description, products, images, boxed
 */

use Jaxon\Assets_Manager;



return array(
	'title'      => __( 'Alternating layout with image and description', 'jaxon' ),
	'categories' => array( 'jaxon' ),
	'content'    => '
    <!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"48px","bottom":"48px"},"margin":{"top":"0px","bottom":"0px"},"blockGap":"var:preset|spacing|50"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="margin-top:0px;margin-bottom:0px;padding-top:48px;padding-bottom:48px"><!-- wp:columns {"align":"wide","style":{"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"}}},"backgroundColor":"ti-bg-alt"} -->
<div class="wp-block-columns alignwide has-ti-bg-alt-background-color has-background" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:column {"verticalAlignment":"center","width":"50%","style":{"spacing":{"padding":{"top":"var:preset|spacing|50","right":"var:preset|spacing|50","bottom":"var:preset|spacing|50","left":"var:preset|spacing|50"}}}} -->
<div class="wp-block-column is-vertically-aligned-center" style="padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--50);flex-basis:50%"><!-- wp:heading {"level":6,"style":{"typography":{"textTransform":"uppercase"}},"textColor":"ti-accent"} -->
<h6 class="has-ti-accent-color has-text-color" style="text-transform:uppercase">from $347</h6>
<!-- /wp:heading -->

<!-- wp:heading {"level":1} -->
<h1>' . __( 'Product Name', 'jaxon' ) . '</h1>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>Vestibulum aliquam lacinia aliquet. Sed eget massa erat. Integer viverra, orci quis ultrices porta, orci elit sollicitudin tortor, et venenatis sem neque et dui. Proin id vulputate elit, pellentesque facilisi. </p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"fontSize":"normal"} -->
<div class="wp-block-buttons has-custom-font-size has-normal-font-size"><!-- wp:button -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button">' . __( 'Shop Now', 'jaxon' ) . '</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->

<!-- wp:spacer {"height":"20px"} -->
<div style="height:20px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:image {"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="' . esc_url( Assets_Manager::get_image_url( 'jaxon-col-section-2.png' ) ) . '"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:columns {"align":"wide","style":{"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"}}},"backgroundColor":"ti-bg-alt"} -->
<div class="wp-block-columns alignwide has-ti-bg-alt-background-color has-background" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:column -->
<div class="wp-block-column"><!-- wp:image {"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="' . esc_url( Assets_Manager::get_image_url( 'jaxon-col-section-1.png' ) ) . '"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"50%","style":{"spacing":{"padding":{"top":"var:preset|spacing|50","right":"var:preset|spacing|50","bottom":"var:preset|spacing|50","left":"var:preset|spacing|50"}}}} -->
<div class="wp-block-column is-vertically-aligned-center" style="padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--50);flex-basis:50%"><!-- wp:heading {"level":6,"style":{"typography":{"textTransform":"uppercase"}},"textColor":"ti-accent"} -->
<h6 class="has-ti-accent-color has-text-color" style="text-transform:uppercase">from $347</h6>
<!-- /wp:heading -->

<!-- wp:heading {"level":1} -->
<h1>' . __( 'Product Name', 'jaxon' ) . '</h1>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>Vestibulum aliquam lacinia aliquet. Sed eget massa erat. Integer viverra, orci quis ultrices porta, orci elit sollicitudin tortor, et venenatis sem neque et dui. Proin id vulputate elit, pellentesque facilisi. </p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"fontSize":"normal"} -->
<div class="wp-block-buttons has-custom-font-size has-normal-font-size"><!-- wp:button -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button">' . __( 'Shop Now', 'jaxon' ) . '</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->

<!-- wp:spacer {"height":"20px"} -->
<div style="height:20px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->
',
);

