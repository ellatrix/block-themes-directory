<?php
/**
 * Gallery Columns
 */
return array(
	'title'      => __( 'Gallery Columns', 'blockio' ),
	'categories' => ['blockio-patterns'],
	'content'    => '<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80"}}},"layout":{"inherit":true,"type":"constrained"}} -->
<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--80)"><!-- wp:heading {"textAlign":"center","style":{"spacing":{"margin":{"top":"40px","right":"0","bottom":"40px","left":"0"}}}} -->
<h2 class="has-text-align-center" style="margin-top:40px;margin-right:0;margin-bottom:40px;margin-left:0">- ' . esc_html__( 'GALLERY', 'blockio' ) . ' -</h2>
<!-- /wp:heading -->

<!-- wp:gallery {"linkTo":"none"} -->
<figure class="wp-block-gallery has-nested-images columns-default is-cropped"><!-- wp:image {"sizeSlug":"large","linkDestination":"none"} -->
<figure class="wp-block-image size-large"><img src="' . esc_url(get_template_directory_uri()) . '/assets/images/gallery01.jpg" alt="' . esc_attr__( 'Gallery Image 1', 'blockio' ) . '"/><figcaption class="wp-element-caption">' . esc_html__( 'Wood & White', 'blockio' ) . '</figcaption></figure>
<!-- /wp:image -->

<!-- wp:image {"sizeSlug":"large","linkDestination":"none"} -->
<figure class="wp-block-image size-large"><img src="' . esc_url(get_template_directory_uri()) . '/assets/images/gallery02.jpg" alt="' . esc_attr__( 'Gallery Image 2', 'blockio' ) . '"/><figcaption class="wp-element-caption">' . esc_html__( 'Wood & White', 'blockio' ) . '</figcaption></figure>
<!-- /wp:image -->

<!-- wp:image {"sizeSlug":"large","linkDestination":"none"} -->
<figure class="wp-block-image size-large"><img src="' . esc_url(get_template_directory_uri()) . '/assets/images/gallery03.jpg" alt="' . esc_attr__( 'Gallery Image 3', 'blockio' ) . '"/><figcaption class="wp-element-caption">' . esc_html__( 'Wood & White', 'blockio' ) . '</figcaption></figure>
<!-- /wp:image --></figure>
<!-- /wp:gallery --></div>
<!-- /wp:group -->',
);


