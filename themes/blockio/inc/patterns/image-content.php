<?php
/**
 * Image Content
 */
return array(
	'title'      => __( 'Image Content', 'blockio' ),
	'categories' => [ 'blockio-patterns' ],
	'content'    => '<!-- wp:group {"style":{"spacing":{"blockGap":"20px","padding":{"top":"100px","bottom":"100px"}},"border":{"radius":"0px"}},"textColor":"purple-main","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"center"}} -->
<div class="wp-block-group has-purple-main-color has-text-color" style="border-radius:0px;padding-top:100px;padding-bottom:100px"><!-- wp:columns -->
  <div class="wp-block-columns"><!-- wp:column {"textColor":"purple-main","layout":{"inherit":true}} -->
    <div class="wp-block-column has-purple-main-color has-text-color">
    
    
	    <!-- wp:media-text {"mediaLink":"' . esc_url(get_template_directory_uri()) . '/assets/images/monstera.jpg","mediaType":"image","mediaWidth":60,"imageFill":false,"focalPoint":{"x":"0.60","y":"0.53"},"className":"media-shadow"} -->
		<div class="wp-block-media-text alignwide is-stacked-on-mobile media-shadow" style="grid-template-columns:60% auto"><figure class="wp-block-media-text__media"><img src="' . esc_url(get_template_directory_uri()) . '/assets/images/monstera.jpg" alt="' . esc_attr__( 'Build your website', 'blockio' ) . '"/></figure><div class="wp-block-media-text__content"><!-- wp:heading {"textColor":"purple-main","fontSize":"regular"} -->
		<h2 class="has-purple-main-color has-text-color has-regular-font-size">' . esc_html__( 'Monstera Deliciosa', 'blockio' ) . '</h2>
		<!-- /wp:heading -->
		
		<!-- wp:paragraph {"fontSize":"extra-small"} -->
		<p class="has-extra-small-font-size">' . esc_html__( 'All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet.', 'blockio' ) . '</p>
		<!-- /wp:paragraph -->
		
		<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"textColor":"color-main","style":{"border":{"radius":"1px"}},"className":"is-style-outline","fontSize":"extra-small"} -->
<div class="wp-block-button has-custom-font-size is-style-outline has-extra-small-font-size"><a class="wp-block-button__link has-color-main-color has-text-color wp-element-button" style="border-radius:1px">' . esc_html('Show view...','blockio') . '</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>		
		
		</div>
		<!-- /wp:media-text -->
      
      </div>
    <!-- /wp:column --></div>
  <!-- /wp:columns --></div>
<!-- /wp:group -->',
);