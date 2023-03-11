<?php
/**
  * Title: Home Hero Section
  * Slug: cybercube/home-hero-2
  * Categories: page
  */
?>
<?php

register_block_pattern(
	'cybercube/home-hero-2',
	array(
	'title'         => __( 'Home Hero Section', 'cybercube' ),
	'categories' => array( 'page' ),
	'content'       => '<!-- wp:group {"style":{"color":{"background":"#fb7d58"},"spacing":{"padding":{"top":"90px","bottom":"90px"}}},"layout":{"inherit":true}} -->
<div class="wp-block-group has-background" style="background-color:#fb7d58;padding-top:90px;padding-bottom:90px"><!-- wp:columns -->
<div class="wp-block-columns"><!-- wp:column -->
<div class="wp-block-column"><!-- wp:heading {"style":{"typography":{"fontSize":"38px","fontStyle":"normal","fontWeight":"800","textTransform":"uppercase"},"spacing":{"margin":{"bottom":"30px"}}},"textColor":"white"} -->
<h2 class="has-white-color has-text-color" style="font-size:38px;font-style:normal;font-weight:800;margin-bottom:30px;text-transform:uppercase">DOWNLOAD OUR LATEST APP</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"textColor":"white","fontSize":"normal"} -->
<p class="has-white-color has-text-color has-normal-font-size">Lorem ipsum dolor sit amet, consectetur adipiing elit, sed do eiusmod tempor incididunt ut labore et laborused sed do eiusmod tempor form.</p>
<!-- /wp:paragraph -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"textColor":"white","style":{"border":{"radius":"8px"}},"className":"is-style-outline"} -->
<div class="wp-block-button is-style-outline"><a class="wp-block-button__link has-white-color has-text-color" style="border-radius:8px">Google Play</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:image {"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="' . esc_url( get_theme_file_uri( 'assets/images/app3.png' ) ) . '" /></figure>
<!-- /wp:image --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->',
)
);
?>