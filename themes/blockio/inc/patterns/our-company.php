<?php
/**
 * Our Company
 */
return array(
	'title'      => __( 'Our Company', 'blockio' ),
	'categories' => ['blockio-patterns'],
	'content'    => '<!-- wp:group {"layout":{"type":"default"}} -->
<div class="wp-block-group"><!-- wp:media-text {"mediaLink":"' . esc_url(get_template_directory_uri()) . '/assets/images/our_img.jpg","linkDestination":"custom","mediaType":"image","imageFill":true,"gradient":"fly-gradient-invert"} -->
<div class="wp-block-media-text alignwide is-stacked-on-mobile is-image-fill has-fly-gradient-invert-gradient-background has-background"><figure class="wp-block-media-text__media" style="background-image:url(' . esc_url(get_template_directory_uri()) . '/assets/images/our_img.jpg);background-position:50% 50%"><a href="#"><img src="' . esc_url(get_template_directory_uri()) . '/assets/images/our_img.jpg" alt="' . esc_attr__('Nature Purple Flowers','blockio') . '"/></a></figure><div class="wp-block-media-text__content"><!-- wp:columns {"style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60"}}},"className":"blockio-our-pcol"} -->
<div class="wp-block-columns blockio-our-pcol" style="padding-top:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60)"><!-- wp:column {"width":"66.66%"} -->
<div class="wp-block-column" style="flex-basis:66.66%"><!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|background"}}}},"textColor":"background"} -->
<p class="has-background-color has-text-color has-link-color"><a href="#">' . esc_html__( 'ABOUT US', 'blockio' ) . '</a></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"textColor":"background"} -->
<h2 class="has-background-color has-text-color">' . esc_html__( 'Our Company', 'blockio' ) . '</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"textColor":"background"} -->
<p class="has-background-color has-text-color">' . esc_html__( 'Nullam luctus quis magna eu consequat. Integer id est non dui posuere placerat. Nullam venenatis, arcu ac bibendum tincidunt, massa lectus ullamcorper mi, et fermentum sem ex nec nunc. Donec sagittis odio sem, vitae congue neque eleifend eget. Fusce in dignissim massa, et commodo mauris. Fusce blandit dictum metus a hendrerit. Phasellus efficitur, neque non iaculis condimentum, est nibh aliquet ligula, at cursus odio nisl aliquam dui. Etiam diam lorem, ultricies sit amet nunc vitae, vehicula sagittis felis. Nunc facilisis vulputate velit, eget commodo lectus dignissim nec.', 'blockio' ) . '</p>
<!-- /wp:paragraph -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button">' . esc_html__( 'Reading more...', 'blockio' ) . '</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"33.33%"} -->
<div class="wp-block-column" style="flex-basis:33.33%"></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div></div>
<!-- /wp:media-text --></div>
<!-- /wp:group -->',
);