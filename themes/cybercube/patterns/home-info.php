<?php
/**
  * Title: Home Info
  * Slug: cybercube/home-info
  * Categories: page
  */
?>
<?php

register_block_pattern(
	'cybercube/home-info',
	array(
	'title'         => __( 'Home Info', 'cybercube' ),
	'categories' => array( 'page' ),
	'content'       => '<!-- wp:group {"style":{"spacing":{"padding":{"top":"50px","bottom":"50px"}}},"className":"info-box-area","layout":{"inherit":true}} -->
<div class="wp-block-group info-box-area" style="padding-top:50px;padding-bottom:50px"><!-- wp:heading {"textAlign":"center","style":{"color":{"text":"#fb7d58"},"typography":{"fontSize":"15px","textTransform":"uppercase"}}} -->
<h2 class="has-text-align-center has-text-color" style="color:#fb7d58;font-size:15px;text-transform:uppercase">CONTACT US<br></h2>
<!-- /wp:heading -->

<!-- wp:heading {"textAlign":"center","style":{"typography":{"fontSize":"34px","fontStyle":"normal","fontWeight":"800"},"spacing":{"margin":{"bottom":"20px"}}}} -->
<h2 class="has-text-align-center" style="font-size:34px;font-style:normal;font-weight:800;margin-bottom:20px">Say Hello To Us</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center"} -->
<p class="has-text-align-center">Lorem ipsum dolor sit amet, consectetur adipiing elit, sed do eiusmod tempor incididunt ut labore et laborused sed do eiusmod tempor form.</p>
<!-- /wp:paragraph -->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"50px"}}}} -->
<div class="wp-block-group" style="padding-top:50px"><!-- wp:columns -->
<div class="wp-block-columns"><!-- wp:column {"style":{"spacing":{"padding":{"top":"25px","right":"10px","bottom":"25px","left":"10px"}}},"className":"info-contact"} -->
<div class="wp-block-column info-contact" style="padding-top:25px;padding-right:10px;padding-bottom:25px;padding-left:10px"><!-- wp:html -->
<i class="fa-solid fa-map-location-dot"></i>
<!-- /wp:html -->

<!-- wp:heading {"textAlign":"center","style":{"typography":{"fontSize":"22px","fontStyle":"normal","fontWeight":"700"}}} -->
<h2 class="has-text-align-center" style="font-size:22px;font-style:normal;font-weight:700">Address</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","fontSize":"normal"} -->
<p class="has-text-align-center has-normal-font-size">3333 Raleigh St, Houston,<br>TX 77021, USA.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"style":{"spacing":{"padding":{"top":"25px","right":"10px","bottom":"25px","left":"10px"}}},"className":"info-contact"} -->
<div class="wp-block-column info-contact" style="padding-top:25px;padding-right:10px;padding-bottom:25px;padding-left:10px"><!-- wp:html -->
<i class="fa-solid fa-phone-volume"></i>
<!-- /wp:html -->

<!-- wp:heading {"textAlign":"center","style":{"typography":{"fontSize":"22px","fontStyle":"normal","fontWeight":"700"}}} -->
<h2 class="has-text-align-center" style="font-size:22px;font-style:normal;font-weight:700">Call Us</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","fontSize":"normal"} -->
<p class="has-text-align-center has-normal-font-size">012-345-6789,<br>013-385-6684</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"style":{"spacing":{"padding":{"top":"25px","right":"10px","bottom":"25px","left":"10px"}}},"className":"info-contact"} -->
<div class="wp-block-column info-contact" style="padding-top:25px;padding-right:10px;padding-bottom:25px;padding-left:10px"><!-- wp:html -->
<i class="fa-solid fa-map-location-dot"></i>
<!-- /wp:html -->

<!-- wp:heading {"textAlign":"center","style":{"typography":{"fontSize":"22px","fontStyle":"normal","fontWeight":"700"}}} -->
<h2 class="has-text-align-center" style="font-size:22px;font-style:normal;font-weight:700">E-mail Us</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","fontSize":"normal"} -->
<p class="has-text-align-center has-normal-font-size">info@example.com,<br>app@example.com</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->',
)
);
?>