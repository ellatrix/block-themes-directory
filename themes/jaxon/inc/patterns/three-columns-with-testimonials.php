<?php
/**
 * Pattern
 *
 * @author Themeisle
 * @package jaxon
 * @since 1.0.0
 *
 * slug: three-columns-with-testimonials
 * title: Three columns with testimonials
 * categories: Jaxon
 * keywords: columns, inverted, testimonial, images, boxed
 */

use Jaxon\Assets_Manager;



return array(
	'title'      => __( 'Three columns with testimonials', 'jaxon' ),
	'categories' => array( 'jaxon' ),
	'content'    => '
    <!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"64px","bottom":"64px"},"blockGap":"24px","margin":{"top":"0px","bottom":"0px"}}},"textColor":"ti-fg-alt","layout":{"inherit":true,"type":"constrained"}} -->
<div class="wp-block-group alignfull has-ti-fg-alt-color has-text-color" style="margin-top:0px;margin-bottom:0px;padding-top:64px;padding-bottom:64px"><!-- wp:group {"align":"wide","style":{"border":{"radius":"8px"},"spacing":{"padding":{"top":"var:preset|spacing|70","right":"var:preset|spacing|40","bottom":"var:preset|spacing|70","left":"var:preset|spacing|40"}}},"backgroundColor":"ti-bg-inv","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide has-ti-bg-inv-background-color has-background" style="border-radius:8px;padding-top:var(--wp--preset--spacing--70);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--70);padding-left:var(--wp--preset--spacing--40)"><!-- wp:heading {"textAlign":"center"} -->
<h2 class="has-text-align-center">' . __( 'Clients Testimonials', 'jaxon' ) . '</h2>
<!-- /wp:heading -->

<!-- wp:spacer {"height":"20px"} -->
<div style="height:20px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:columns {"align":"wide"} -->
<div class="wp-block-columns alignwide"><!-- wp:column {"style":{"spacing":{"padding":{"top":"var:preset|spacing|30","right":"var:preset|spacing|30","bottom":"var:preset|spacing|30","left":"var:preset|spacing|30"}}}} -->
<div class="wp-block-column" style="padding-top:var(--wp--preset--spacing--30);padding-right:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--30);padding-left:var(--wp--preset--spacing--30)"><!-- wp:image {"align":"center","sizeSlug":"full","linkDestination":"none","className":"is-style-rounded"} -->
<figure class="wp-block-image aligncenter size-full is-style-rounded"><img src="' . esc_url( Assets_Manager::get_image_url( 'jaxon-avatar-03.png' ) ) . '"/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"align":"center","fontSize":"small"} -->
<p class="has-text-align-center has-small-font-size"><em>Lorem ipsum dolor sit amet consectetur adipiscing elit, sed do eiusmod</em></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"textAlign":"center","level":6} -->
<h6 class="has-text-align-center">Maria G.</h6>
<!-- /wp:heading --></div>
<!-- /wp:column -->

<!-- wp:column {"style":{"spacing":{"padding":{"top":"var:preset|spacing|30","right":"var:preset|spacing|30","bottom":"var:preset|spacing|30","left":"var:preset|spacing|30"}}}} -->
<div class="wp-block-column" style="padding-top:var(--wp--preset--spacing--30);padding-right:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--30);padding-left:var(--wp--preset--spacing--30)"><!-- wp:image {"align":"center","sizeSlug":"full","linkDestination":"none","className":"is-style-rounded"} -->
<figure class="wp-block-image aligncenter size-full is-style-rounded"><img src="' . esc_url( Assets_Manager::get_image_url( 'jaxon-avatar-01.png' ) ) . '"/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"align":"center","fontSize":"small"} -->
<p class="has-text-align-center has-small-font-size"><em>Lorem ipsum dolor sit amet consectetur adipiscing elit, sed do eiusmod</em></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"textAlign":"center","level":6} -->
<h6 class="has-text-align-center">Sonya A.</h6>
<!-- /wp:heading --></div>
<!-- /wp:column -->

<!-- wp:column {"style":{"spacing":{"padding":{"top":"var:preset|spacing|30","right":"var:preset|spacing|30","bottom":"var:preset|spacing|30","left":"var:preset|spacing|30"}}}} -->
<div class="wp-block-column" style="padding-top:var(--wp--preset--spacing--30);padding-right:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--30);padding-left:var(--wp--preset--spacing--30)"><!-- wp:image {"align":"center","sizeSlug":"full","linkDestination":"none","className":"is-style-rounded"} -->
<figure class="wp-block-image aligncenter size-full is-style-rounded"><img src="' . esc_url( Assets_Manager::get_image_url( 'jaxon-avatar-02.png' ) ) . '"/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"align":"center","fontSize":"small"} -->
<p class="has-text-align-center has-small-font-size"><em>Lorem ipsum dolor sit amet consectetur adipiscing elit, sed do eiusmod</em></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"textAlign":"center","level":6} -->
<h6 class="has-text-align-center">Elena S.</h6>
<!-- /wp:heading --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
',
);

