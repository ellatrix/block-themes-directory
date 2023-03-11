<?php
/**
  * Title: Home Client
  * Slug: cybercube/home-client
  * Categories: page
  */
?>
<?php

register_block_pattern(
	'cybercube/home-client',
	array(
	'title'         => __( 'Home Client', 'cybercube' ),
	'categories' => array( 'page' ),
	'content'       => '<!-- wp:group {"style":{"spacing":{"padding":{"top":"50px","bottom":"50px"}},"color":{"background":"#f9f9f9"}},"layout":{"inherit":true}} -->
<div class="wp-block-group has-background" style="background-color:#f9f9f9;padding-top:50px;padding-bottom:50px"><!-- wp:heading {"textAlign":"center","style":{"typography":{"fontSize":"15px","textTransform":"uppercase"},"color":{"text":"#fb7d58"}}} -->
<h2 class="has-text-align-center has-text-color" style="color:#fb7d58;font-size:15px;text-transform:uppercase">OUR TESTIMONIAL</h2>
<!-- /wp:heading -->

<!-- wp:heading {"textAlign":"center","style":{"typography":{"fontSize":"34px","fontStyle":"normal","fontWeight":"800"},"spacing":{"margin":{"bottom":"20px"}}}} -->
<h2 class="has-text-align-center" style="font-size:34px;font-style:normal;font-weight:800;margin-bottom:20px">What Our Clients Says</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","fontSize":"normal"} -->
<p class="has-text-align-center has-normal-font-size">Lorem ipsum dolor sit amet, consectetur adipiing elit, sed do eiusmod tempor incididunt ut labore et laborused sed do eiusmod tempor form.</p>
<!-- /wp:paragraph -->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"50px"}}}} -->
<div class="wp-block-group" style="padding-top:50px"><!-- wp:columns -->
<div class="wp-block-columns"><!-- wp:column {"style":{"spacing":{"padding":{"top":"30px","right":"30px","bottom":"30px","left":"30px"}}}} -->
<div class="wp-block-column" style="padding-top:30px;padding-right:30px;padding-bottom:30px;padding-left:30px"><!-- wp:image {"align":"center","sizeSlug":"full","linkDestination":"none","className":"is-style-rounded"} -->
<figure class="wp-block-image aligncenter size-full is-style-rounded"><img src="' . esc_url( get_theme_file_uri( 'assets/images/team/team1.jpg' ) ) . '" /></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"align":"center","fontSize":"normal"} -->
<p class="has-text-align-center has-normal-font-size">Lorem ipsum dolor sit amet, consectetur adipiing elit, sed do eiusmod tempor incididunt ut labore et laborused sed do eiusmod tempor form.</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"textAlign":"center","style":{"typography":{"fontSize":"22px"}}} -->
<h2 class="has-text-align-center" style="font-size:22px">Megan Daniels</h2>
<!-- /wp:heading -->

<!-- wp:heading {"textAlign":"center","level":6,"style":{"typography":{"fontSize":"15px"},"color":{"text":"#fb7d58"}}} -->
<h6 class="has-text-align-center has-text-color" style="color:#fb7d58;font-size:15px"><small>UX Designer</small><br></h6>
<!-- /wp:heading --></div>
<!-- /wp:column -->

<!-- wp:column {"style":{"spacing":{"padding":{"top":"30px","right":"30px","bottom":"30px","left":"30px"}}}} -->
<div class="wp-block-column" style="padding-top:30px;padding-right:30px;padding-bottom:30px;padding-left:30px"><!-- wp:image {"align":"center","sizeSlug":"full","linkDestination":"none","className":"is-style-rounded"} -->
<figure class="wp-block-image aligncenter size-full is-style-rounded"><img src="' . esc_url( get_theme_file_uri( 'assets/images/team/team2.jpg' ) ) . '" /></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"align":"center","fontSize":"normal"} -->
<p class="has-text-align-center has-normal-font-size">Lorem ipsum dolor sit amet, consectetur adipiing elit, sed do eiusmod tempor incididunt ut labore et laborused sed do eiusmod tempor form.</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"textAlign":"center","style":{"typography":{"fontSize":"22px"}}} -->
<h2 class="has-text-align-center" style="font-size:22px">Caren Smith</h2>
<!-- /wp:heading -->

<!-- wp:heading {"textAlign":"center","level":6,"style":{"typography":{"fontSize":"15px"},"color":{"text":"#fb7d58"}}} -->
<h6 class="has-text-align-center has-text-color" style="color:#fb7d58;font-size:15px"><small>Web Designer</small><br></h6>
<!-- /wp:heading --></div>
<!-- /wp:column -->

<!-- wp:column {"style":{"spacing":{"padding":{"top":"30px","right":"30px","bottom":"30px","left":"30px"}}}} -->
<div class="wp-block-column" style="padding-top:30px;padding-right:30px;padding-bottom:30px;padding-left:30px"><!-- wp:image {"align":"center","sizeSlug":"full","linkDestination":"none","className":"is-style-rounded"} -->
<figure class="wp-block-image aligncenter size-full is-style-rounded"><img src="' . esc_url( get_theme_file_uri( 'assets/images/team/team3.jpg' ) ) . '" /></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"align":"center","fontSize":"normal"} -->
<p class="has-text-align-center has-normal-font-size">Lorem ipsum dolor sit amet, consectetur adipiing elit, sed do eiusmod tempor incididunt ut labore et laborused sed do eiusmod tempor form.</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"textAlign":"center","style":{"typography":{"fontSize":"22px"}}} -->
<h2 class="has-text-align-center" style="font-size:22px">Kevin Morgan</h2>
<!-- /wp:heading -->

<!-- wp:heading {"textAlign":"center","level":6,"style":{"typography":{"fontSize":"15px"},"color":{"text":"#fb7d58"}}} -->
<h6 class="has-text-align-center has-text-color" style="color:#fb7d58;font-size:15px">Web Developer<br></h6>
<!-- /wp:heading --></div>
<!-- /wp:column -->

<!-- wp:column {"style":{"spacing":{"padding":{"top":"30px","right":"30px","bottom":"30px","left":"30px"}}}} -->
<div class="wp-block-column" style="padding-top:30px;padding-right:30px;padding-bottom:30px;padding-left:30px"><!-- wp:image {"align":"center","sizeSlug":"full","linkDestination":"none","className":"is-style-rounded"} -->
<figure class="wp-block-image aligncenter size-full is-style-rounded"><img src="' . esc_url( get_theme_file_uri( 'assets/images/team/team4.jpg' ) ) . '" /></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"align":"center","fontSize":"normal"} -->
<p class="has-text-align-center has-normal-font-size">Lorem ipsum dolor sit amet, consectetur adipiing elit, sed do eiusmod tempor incididunt ut labore et laborused sed do eiusmod tempor form.</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"textAlign":"center","style":{"typography":{"fontSize":"22px"}}} -->
<h2 class="has-text-align-center" style="font-size:22px">David Jameson</h2>
<!-- /wp:heading -->

<!-- wp:heading {"textAlign":"center","level":6,"style":{"typography":{"fontSize":"15px"},"color":{"text":"#fb7d58"}}} -->
<h6 class="has-text-align-center has-text-color" style="color:#fb7d58;font-size:15px"><small>UX Designer</small><br></h6>
<!-- /wp:heading --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->',
)
);
?>