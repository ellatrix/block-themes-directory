<?php
/**
  * Title: Home Team
  * Slug: cybercube/home-team
  * Categories: page
  */
?>
<?php

register_block_pattern(
	'cybercube/home-team',
	array(
	'title'         => __( 'Home Team', 'cybercube' ),
	'categories' => array( 'page' ),
	'content'       => '<!-- wp:group {"style":{"spacing":{"padding":{"top":"50px","bottom":"50px"}}},"className":"our-team-member-area","layout":{"inherit":true}} -->
<div class="wp-block-group our-team-member-area" style="padding-top:50px;padding-bottom:50px"><!-- wp:group -->
<div class="wp-block-group"><!-- wp:heading {"textAlign":"center","style":{"typography":{"fontSize":"15px","textTransform":"uppercase"},"color":{"text":"#fb7d58"}}} -->
<h2 class="has-text-align-center has-text-color" style="color:#fb7d58;font-size:15px;text-transform:uppercase">OUR TEAM</h2>
<!-- /wp:heading -->

<!-- wp:heading {"textAlign":"center","style":{"typography":{"fontSize":"34px","fontStyle":"normal","fontWeight":"800"},"spacing":{"margin":{"bottom":"20px"}}}} -->
<h2 class="has-text-align-center" style="font-size:34px;font-style:normal;font-weight:800;margin-bottom:20px">Our Expert Team Member</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","fontSize":"normal"} -->
<p class="has-text-align-center has-normal-font-size">Lorem ipsum dolor sit amet, consectetur adipiing elit, sed do eiusmod tempor incididunt ut labore et laborused sed do eiusmod tempor form.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"70px"}}}} -->
<div class="wp-block-group" style="padding-top:70px"><!-- wp:columns -->
<div class="wp-block-columns"><!-- wp:column {"style":{"spacing":{"padding":{"top":"40px","bottom":"40px"}}},"className":"our-team"} -->
<div class="wp-block-column our-team" style="padding-top:40px;padding-bottom:40px"><!-- wp:image {"align":"center","width":200,"height":200,"sizeSlug":"full","linkDestination":"none","className":"is-style-rounded"} -->
<div class="wp-block-image is-style-rounded"><figure class="aligncenter size-full is-resized"><img src="' . esc_url( get_theme_file_uri( 'assets/images/team/team1.jpg' ) ) . '" width="200" height="200"/></figure></div>
<!-- /wp:image -->

<!-- wp:heading {"textAlign":"center","style":{"typography":{"fontSize":"22px","fontStyle":"normal","fontWeight":"800"}}} -->
<h2 class="has-text-align-center" style="font-size:22px;font-style:normal;font-weight:800">David Jameson</h2>
<!-- /wp:heading -->

<!-- wp:heading {"textAlign":"center","level":6,"style":{"typography":{"fontStyle":"normal","fontWeight":"100"},"color":{"text":"#fb7d58"},"spacing":{"margin":{"bottom":"20px"}}},"fontSize":"normal"} -->
<h6 class="has-text-align-center has-text-color has-normal-font-size" style="color:#fb7d58;font-style:normal;font-weight:100;margin-bottom:20px">Web Developer</h6>
<!-- /wp:heading -->

<!-- wp:social-links {"customIconBackgroundColor":"#fb7d58","iconBackgroundColorValue":"#fb7d58","layout":{"type":"flex","justifyContent":"center"}} -->
<ul class="wp-block-social-links has-icon-background-color"><!-- wp:social-link {"url":"#","service":"facebook"} /-->

<!-- wp:social-link {"url":"#","service":"twitter"} /-->

<!-- wp:social-link {"url":"#","service":"instagram"} /-->

<!-- wp:social-link {"url":"#","service":"linkedin"} /--></ul>
<!-- /wp:social-links --></div>
<!-- /wp:column -->

<!-- wp:column {"style":{"spacing":{"padding":{"top":"40px","bottom":"40px"}}},"className":"our-team"} -->
<div class="wp-block-column our-team" style="padding-top:40px;padding-bottom:40px"><!-- wp:image {"align":"center","sizeSlug":"full","linkDestination":"none","className":"is-style-rounded"} -->
<div class="wp-block-image is-style-rounded"><figure class="aligncenter size-full"><img src="' . esc_url( get_theme_file_uri( 'assets/images/team/team2.jpg' ) ) . '" /></figure></div>
<!-- /wp:image -->

<!-- wp:heading {"textAlign":"center","style":{"typography":{"fontSize":"22px","fontStyle":"normal","fontWeight":"800"}}} -->
<h2 class="has-text-align-center" style="font-size:22px;font-style:normal;font-weight:800">Caren Smith</h2>
<!-- /wp:heading -->

<!-- wp:heading {"textAlign":"center","level":6,"style":{"typography":{"fontStyle":"normal","fontWeight":"100"},"color":{"text":"#fb7d58"},"spacing":{"margin":{"bottom":"20px"}}},"fontSize":"normal"} -->
<h6 class="has-text-align-center has-text-color has-normal-font-size" style="color:#fb7d58;font-style:normal;font-weight:100;margin-bottom:20px">Web Designer</h6>
<!-- /wp:heading -->

<!-- wp:social-links {"customIconBackgroundColor":"#fb7d58","iconBackgroundColorValue":"#fb7d58","layout":{"type":"flex","justifyContent":"center"}} -->
<ul class="wp-block-social-links has-icon-background-color"><!-- wp:social-link {"url":"#","service":"facebook"} /-->

<!-- wp:social-link {"url":"#","service":"twitter"} /-->

<!-- wp:social-link {"url":"#","service":"instagram"} /-->

<!-- wp:social-link {"url":"#","service":"linkedin"} /--></ul>
<!-- /wp:social-links --></div>
<!-- /wp:column -->

<!-- wp:column {"style":{"spacing":{"padding":{"top":"40px","bottom":"40px"}}},"className":"our-team"} -->
<div class="wp-block-column our-team" style="padding-top:40px;padding-bottom:40px"><!-- wp:image {"align":"center","sizeSlug":"full","linkDestination":"none","className":"is-style-rounded"} -->
<div class="wp-block-image is-style-rounded"><figure class="aligncenter size-full"><img src="' . esc_url( get_theme_file_uri( 'assets/images/team/team3.jpg' ) ) . '" /></figure></div>
<!-- /wp:image -->

<!-- wp:heading {"textAlign":"center","style":{"typography":{"fontSize":"22px","fontStyle":"normal","fontWeight":"800"}}} -->
<h2 class="has-text-align-center" style="font-size:22px;font-style:normal;font-weight:800">Kevin Morgan</h2>
<!-- /wp:heading -->

<!-- wp:heading {"textAlign":"center","level":6,"style":{"typography":{"fontStyle":"normal","fontWeight":"100"},"color":{"text":"#fb7d58"},"spacing":{"margin":{"bottom":"20px"}}},"fontSize":"normal"} -->
<h6 class="has-text-align-center has-text-color has-normal-font-size" style="color:#fb7d58;font-style:normal;font-weight:100;margin-bottom:20px">UX Designer</h6>
<!-- /wp:heading -->

<!-- wp:social-links {"customIconBackgroundColor":"#fb7d58","iconBackgroundColorValue":"#fb7d58","layout":{"type":"flex","justifyContent":"center"}} -->
<ul class="wp-block-social-links has-icon-background-color"><!-- wp:social-link {"url":"#","service":"facebook"} /-->

<!-- wp:social-link {"url":"#","service":"twitter"} /-->

<!-- wp:social-link {"url":"#","service":"instagram"} /-->

<!-- wp:social-link {"url":"#","service":"linkedin"} /--></ul>
<!-- /wp:social-links --></div>
<!-- /wp:column -->

<!-- wp:column {"style":{"spacing":{"padding":{"top":"40px","bottom":"40px"}}},"className":"our-team"} -->
<div class="wp-block-column our-team" style="padding-top:40px;padding-bottom:40px"><!-- wp:image {"align":"center","sizeSlug":"full","linkDestination":"none","className":"is-style-rounded"} -->
<div class="wp-block-image is-style-rounded"><figure class="aligncenter size-full"><img src="' . esc_url( get_theme_file_uri( 'assets/images/team/team4.jpg' ) ) . '" /></figure></div>
<!-- /wp:image -->

<!-- wp:heading {"textAlign":"center","style":{"typography":{"fontSize":"22px","fontStyle":"normal","fontWeight":"800"}}} -->
<h2 class="has-text-align-center" style="font-size:22px;font-style:normal;font-weight:800">Megan Daniels</h2>
<!-- /wp:heading -->

<!-- wp:heading {"textAlign":"center","level":6,"style":{"typography":{"fontStyle":"normal","fontWeight":"100"},"color":{"text":"#fb7d58"},"spacing":{"margin":{"bottom":"20px"}}},"fontSize":"normal"} -->
<h6 class="has-text-align-center has-text-color has-normal-font-size" style="color:#fb7d58;font-style:normal;font-weight:100;margin-bottom:20px">Project Manager</h6>
<!-- /wp:heading -->

<!-- wp:social-links {"customIconBackgroundColor":"#fb7d58","iconBackgroundColorValue":"#fb7d58","layout":{"type":"flex","justifyContent":"center"}} -->
<ul class="wp-block-social-links has-icon-background-color"><!-- wp:social-link {"url":"#","service":"facebook"} /-->

<!-- wp:social-link {"url":"#","service":"twitter"} /-->

<!-- wp:social-link {"url":"#","service":"instagram"} /-->

<!-- wp:social-link {"url":"#","service":"linkedin"} /--></ul>
<!-- /wp:social-links --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->',
)
);
?>