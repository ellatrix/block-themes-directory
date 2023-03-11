<?php
/**
  * Title: Home About
  * Slug: cybercube/home-about
  * Categories: page
  */
?>
<?php

register_block_pattern(
	'cybercube/home-about',
	array(
	'title'         => __( 'Home About', 'cybercube' ),
	'categories' => array( 'page' ),
	'content'       => '<!-- wp:group {"style":{"spacing":{"padding":{"top":"50px","bottom":"50px"}}},"layout":{"inherit":true}} -->
<div class="wp-block-group" style="padding-top:50px;padding-bottom:50px"><!-- wp:columns -->
<div class="wp-block-columns"><!-- wp:column -->
<div class="wp-block-column"><!-- wp:heading {"style":{"typography":{"fontSize":"45px"},"spacing":{"margin":{"top":"50px","bottom":"20px"}}}} -->
<h2 style="font-size:45px;margin-top:50px;margin-bottom:20px">Easy to use &amp; intuitive design</h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
<!-- /wp:paragraph -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"style":{"border":{"radius":"8px"},"color":{"background":"#fb7d58"}}} -->
<div class="wp-block-button"><a class="wp-block-button__link has-background" style="border-radius:8px;background-color:#fb7d58">Get Started</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:image {"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="' . esc_url( get_theme_file_uri( 'assets/images/app1.png' ) ) . '" /></figure>
<!-- /wp:image --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->',
)
);
?>