<?php
/**
 * Pattern
 *
 * @author Themeisle
 * @package jaxon
 * @since 1.0.0
 *
 * slug: three-columns-with-products
 * title: Three columns with products
 * categories: Jaxon
 * keywords: columns, cover, products, images
 */

use Jaxon\Assets_Manager;



return array(
	'title'      => __( 'Three columns with products', 'jaxon' ),
	'categories' => array( 'jaxon' ),
	'content'    => '
    <!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"64px","bottom":"64px"},"margin":{"top":"0px","bottom":"0px"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="margin-top:0px;margin-bottom:0px;padding-top:64px;padding-bottom:64px"><!-- wp:columns {"align":"wide"} -->
<div class="wp-block-columns alignwide"><!-- wp:column {"style":{"spacing":{"padding":{"right":"var:preset|spacing|50","bottom":"var:preset|spacing|50","left":"var:preset|spacing|50"}}},"backgroundColor":"ti-bg-alt"} -->
<div class="wp-block-column has-ti-bg-alt-background-color has-background" style="padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--50)"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"size-full"} -->
<figure class="wp-block-image size-full"><img src="' . esc_url( Assets_Manager::get_image_url( '4.2.png' ) ) . '"/></figure>
<!-- /wp:image -->

<!-- wp:heading {"level":3} -->
<h3>' . __( 'Product Name', 'jaxon' ) . '</h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>$43,87</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p>Lorem ipsum doloet consectetur adipiscing elit, sed do eiusmod.</p>
<!-- /wp:paragraph -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"className":"is-style-fill"} -->
<div class="wp-block-button is-style-fill"><a class="wp-block-button__link wp-element-button">Buy Now</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:column -->

<!-- wp:column {"style":{"spacing":{"padding":{"right":"var:preset|spacing|50","bottom":"var:preset|spacing|50","left":"var:preset|spacing|50"}}},"backgroundColor":"ti-bg-alt"} -->
<div class="wp-block-column has-ti-bg-alt-background-color has-background" style="padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--50)"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"size-full"} -->
<figure class="wp-block-image size-full"><img src="' . esc_url( Assets_Manager::get_image_url( '5.2.png' ) ) . '"/></figure>
<!-- /wp:image -->

<!-- wp:heading {"level":3} -->
<h3>' . __( 'Product Name', 'jaxon' ) . '</h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>$82</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p>Lorem ipsum doloet consectetur adipiscing elit, sed do eiusmod.</p>
<!-- /wp:paragraph -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"className":"is-style-fill"} -->
<div class="wp-block-button is-style-fill"><a class="wp-block-button__link wp-element-button">Buy Now</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:column -->

<!-- wp:column {"style":{"spacing":{"padding":{"right":"var:preset|spacing|50","bottom":"var:preset|spacing|50","left":"var:preset|spacing|50"}}},"backgroundColor":"ti-bg-alt"} -->
<div class="wp-block-column has-ti-bg-alt-background-color has-background" style="padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--50)"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"size-full"} -->
<figure class="wp-block-image size-full"><img src="' . esc_url( Assets_Manager::get_image_url( '1.2.png' ) ) . '"/></figure>
<!-- /wp:image -->

<!-- wp:heading {"level":3} -->
<h3>' . __( 'Product Name', 'jaxon' ) . '</h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>$33</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p>Lorem ipsum doloet consectetur adipiscing elit, sed do eiusmod.</p>
<!-- /wp:paragraph -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"className":"is-style-fill"} -->
<div class="wp-block-button is-style-fill"><a class="wp-block-button__link wp-element-button">' . __( 'Buy Now', 'jaxon' ) . '</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->
',
);

