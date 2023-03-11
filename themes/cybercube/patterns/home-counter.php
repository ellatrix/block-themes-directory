<?php
/**
  * Title: Home Counter
  * Slug: cybercube/home-counter
  * Categories: page
  */
?>
<?php

register_block_pattern(
	'cybercube/home-counter',
	array(
	'title'         => __( 'Home Counter', 'cybercube' ),
	'categories' => array( 'page' ),
	'content'       => '<!-- wp:group {"style":{"color":{"background":"#fb7d58"},"spacing":{"padding":{"top":"100px","bottom":"100px"}}},"className":"counter-box-area","layout":{"inherit":true}} -->
<div class="wp-block-group counter-box-area has-background" style="background-color:#fb7d58;padding-top:100px;padding-bottom:100px"><!-- wp:heading {"textAlign":"center","style":{"typography":{"fontSize":"35px","fontStyle":"normal","fontWeight":"800"},"spacing":{"margin":{"bottom":"10px"}}},"textColor":"white"} -->
<h2 class="has-text-align-center has-white-color has-text-color" style="font-size:35px;font-style:normal;font-weight:800;margin-bottom:10px">Join of our community of 20,0000 users of the world’s leading organizations</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","textColor":"white","fontSize":"normal"} -->
<p class="has-text-align-center has-white-color has-text-color has-normal-font-size">Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui quaerat fugit quas veniam perferendis repudiandae sequi, dolore illum.</p>
<!-- /wp:paragraph -->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"50px"}}}} -->
<div class="wp-block-group" style="padding-top:50px"><!-- wp:columns -->
<div class="wp-block-columns"><!-- wp:column {"style":{"spacing":{"padding":{"top":"35px","right":"20px","bottom":"35px","left":"20px"}}},"backgroundColor":"white","className":"single-counter-wrap"} -->
<div class="wp-block-column single-counter-wrap has-white-background-color has-background" style="padding-top:35px;padding-right:20px;padding-bottom:35px;padding-left:20px"><!-- wp:heading {"textAlign":"center","style":{"typography":{"fontSize":"35px","fontStyle":"normal","fontWeight":"700"},"spacing":{"margin":{"bottom":"5px"}}}} -->
<h2 class="has-text-align-center" style="font-size:35px;font-style:normal;font-weight:700;margin-bottom:5px">695M</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","style":{"typography":{"fontStyle":"normal","fontWeight":"100"},"color":{"text":"#fb7d58"}},"fontSize":"normal"} -->
<p class="has-text-align-center has-text-color has-normal-font-size" style="color:#fb7d58;font-style:normal;font-weight:100">Total Downloads</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"style":{"spacing":{"padding":{"top":"35px","right":"20px","bottom":"35px","left":"20px"}}},"backgroundColor":"white","className":"single-counter-wrap"} -->
<div class="wp-block-column single-counter-wrap has-white-background-color has-background" style="padding-top:35px;padding-right:20px;padding-bottom:35px;padding-left:20px"><!-- wp:heading {"textAlign":"center","style":{"typography":{"fontSize":"35px","fontStyle":"normal","fontWeight":"700"},"spacing":{"margin":{"bottom":"5px"}}}} -->
<h2 class="has-text-align-center" style="font-size:35px;font-style:normal;font-weight:700;margin-bottom:5px">99%</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","style":{"typography":{"fontStyle":"normal","fontWeight":"100"},"color":{"text":"#fb7d58"}},"fontSize":"normal"} -->
<p class="has-text-align-center has-text-color has-normal-font-size" style="color:#fb7d58;font-style:normal;font-weight:100">Page Speed</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"style":{"spacing":{"padding":{"top":"35px","right":"20px","bottom":"35px","left":"20px"}}},"backgroundColor":"white","className":"single-counter-wrap"} -->
<div class="wp-block-column single-counter-wrap has-white-background-color has-background" style="padding-top:35px;padding-right:20px;padding-bottom:35px;padding-left:20px"><!-- wp:heading {"textAlign":"center","style":{"typography":{"fontSize":"35px","fontStyle":"normal","fontWeight":"700"},"spacing":{"margin":{"bottom":"5px"}}}} -->
<h2 class="has-text-align-center" style="font-size:35px;font-style:normal;font-weight:700;margin-bottom:5px">25k+</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","style":{"typography":{"fontStyle":"normal","fontWeight":"100"},"color":{"text":"#fb7d58"}},"fontSize":"normal"} -->
<p class="has-text-align-center has-text-color has-normal-font-size" style="color:#fb7d58;font-style:normal;font-weight:100">Top Rating App</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"style":{"spacing":{"padding":{"top":"35px","right":"20px","bottom":"35px","left":"20px"}}},"backgroundColor":"white","className":"single-counter-wrap"} -->
<div class="wp-block-column single-counter-wrap has-white-background-color has-background" style="padding-top:35px;padding-right:20px;padding-bottom:35px;padding-left:20px"><!-- wp:heading {"textAlign":"center","style":{"typography":{"fontSize":"35px","fontStyle":"normal","fontWeight":"700"},"spacing":{"margin":{"bottom":"5px"}}}} -->
<h2 class="has-text-align-center" style="font-size:35px;font-style:normal;font-weight:700;margin-bottom:5px">120k+</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","style":{"typography":{"fontStyle":"normal","fontWeight":"100"},"color":{"text":"#fb7d58"}},"fontSize":"normal"} -->
<p class="has-text-align-center has-text-color has-normal-font-size" style="color:#fb7d58;font-style:normal;font-weight:100">Happy Users</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->',
)
);
?>