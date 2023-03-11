<?php
/**
  * Title: Home Slider
  * Slug: cybercube/home-slider
  * Categories: page
  */
?>
<?php

register_block_pattern(
	'cybercube/home-slider',
	array(
	'title'         => __( 'Home Slider', 'cybercube' ),
	'categories' => array( 'page' ),
	'content'       => '<!-- wp:group {"style":{"color":{"background":"#ffe0d3"}},"layout":{"inherit":true}} -->
<div class="wp-block-group has-background" style="background-color:#ffe0d3"><!-- wp:columns {"style":{"spacing":{"padding":{"top":"50px","bottom":"50px"}}}} -->
<div class="wp-block-columns" style="padding-top:50px;padding-bottom:50px"><!-- wp:column -->
<div class="wp-block-column"><!-- wp:heading {"style":{"typography":{"fontSize":"45px","fontStyle":"normal","fontWeight":"700"},"spacing":{"margin":{"top":"50px","bottom":"20px"}}}} -->
<h2 style="font-size:45px;font-style:normal;font-weight:700;margin-top:50px;margin-bottom:20px">WE CREATE AWESOME MOBILE APPS</h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>Lorem ipsum dolor sit amet, consectetur adipiing elit, sed do eiusmod tempor incididunt ut labore et laborused sed do eiusmod tempor incididunt ut labore et laborused.</p>
<!-- /wp:paragraph -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"style":{"border":{"radius":"8px"},"color":{"background":"#fb7d58"}}} -->
<div class="wp-block-button"><a class="wp-block-button__link has-background" style="border-radius:8px;background-color:#fb7d58">App Store</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:image {"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="' . esc_url( get_theme_file_uri( 'assets/images/slider.png' ) ) . '" /></figure>
<!-- /wp:image --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->',
)
);
?>