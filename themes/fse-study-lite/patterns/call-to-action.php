<?php
 /**
  * Title: CTA
  * Slug: fse-study-lite/cta
  * Categories: fse-study-lite, call-to-action
  */
return array(
	'title'      => __( 'Call to Action Center Text', 'fse-study-lite' ),
	'categories' => array( 'CTA' ),
	'content'    => '<!-- wp:columns -->
	<div class="wp-block-columns"><!-- wp:column {"className":"has-text-align-center"} -->
	<div class="wp-block-column has-text-align-center"><!-- wp:heading {"textAlign":"center","level":3,"fontSize":"x-large"} -->
	<h3 class="has-text-align-center has-x-large-font-size">'.esc_html('For Inquiry Call Now').'</h3>
	<!-- /wp:heading -->
	
	<!-- wp:spacer {"height":"15px"} -->
	<div style="height:15px" aria-hidden="true" class="wp-block-spacer"></div>
	<!-- /wp:spacer -->
	
	<!-- wp:paragraph -->
	<p>'.esc_html('Praesent in feugiat lectus, vitae tristique diam. Sed laoreet ante sit amet egestas suscipit. Duis facilisis, erat <br>ut tincidunt tristique, ipsum urna accumsan odio, nec posuere elit urna ut massa.<br>Aliquam vehicula eleifend sem interdum sollicitudin.').'</p>
	<!-- /wp:paragraph -->
	
	<!-- wp:spacer {"height":"30px"} -->
	<div style="height:30px" aria-hidden="true" class="wp-block-spacer"></div>
	<!-- /wp:spacer -->
	
	<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
	<div class="wp-block-buttons"><!-- wp:button {"width":25,"style":{"color":{"background":"#ff2660"}}} -->
	<div class="wp-block-button has-custom-width wp-block-button__width-25"><a class="wp-block-button__link has-background" href="tel: +91 2456 254 256" style="background-color:#ff2660">'.esc_html('Call Us Now').'</a></div>
	<!-- /wp:button --></div>
	<!-- /wp:buttons --></div>
	<!-- /wp:column --></div>
	<!-- /wp:columns -->',
);
