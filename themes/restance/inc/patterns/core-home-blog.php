<?php
/**
 * Core Home Blog content.
 */
return array(
	'title'      => __( 'Core Home Blog', 'restance' ),
	'categories' => array( 'restance-basic' ),
	'content'    => '<!-- wp:group {"tagName":"main","style":{"spacing":{"padding":{"bottom":"60px","right":"20px","left":"20px"}}},"layout":{"contentSize":"1140px","type":"constrained"}} -->
<main class="wp-block-group" style="padding-right:20px;padding-bottom:60px;padding-left:20px"><!-- wp:columns -->
<div class="wp-block-columns"><!-- wp:column -->
<div class="wp-block-column"><!-- wp:query {"queryId":24,"query":{"perPage":3,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false},"displayLayout":{"type":"flex","columns":3}} -->
<div class="wp-block-query"><!-- wp:paragraph {"align":"center","style":{"typography":{"fontStyle":"normal","fontWeight":"700","textTransform":"uppercase","letterSpacing":"1px","lineHeight":0.9}},"textColor":"secondary","className":"restance-animate restance-move-up restance-delay-1","fontSize":"heading-5"} -->
<p class="has-text-align-center restance-animate restance-move-up restance-delay-1 has-secondary-color has-text-color has-heading-5-font-size" style="font-style:normal;font-weight:700;letter-spacing:1px;line-height:0.9;text-transform:uppercase">Our News</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"textAlign":"center","style":{"typography":{"lineHeight":1},"spacing":{"margin":{"bottom":"60px"}}},"textColor":"primary","className":"restance-animate restance-move-up restance-delay-3","fontSize":"heading-2"} -->
<h2 class="has-text-align-center restance-animate restance-move-up restance-delay-3 has-primary-color has-text-color has-heading-2-font-size" style="margin-bottom:60px;line-height:1">Latest News</h2>
<!-- /wp:heading -->

<!-- wp:post-template {"className":"restance-animate restance-move-up restance-delay-1"} -->
<!-- wp:post-featured-image {"isLink":true,"height":"300px","align":"wide","style":{"spacing":{"padding":{"top":"0px","right":"0px","bottom":"0px","left":"0px"},"margin":{"top":"0px","right":"0px","bottom":"0px","left":"0px"}}}} /-->

<!-- wp:group {"style":{"spacing":{"padding":{"right":"30px","left":"30px","bottom":"30px","top":"30px"}}},"className":"is-style-customboxshadow"} -->
<div class="wp-block-group is-style-customboxshadow" style="padding-top:30px;padding-right:30px;padding-bottom:30px;padding-left:30px"><!-- wp:post-date {"style":{"typography":{"fontSize":"14px"}},"textColor":"third"} /-->

<!-- wp:post-title {"isLink":true,"style":{"elements":{"link":{"color":{"text":"#3a3a4a"}}},"typography":{"fontStyle":"normal","fontWeight":"500"}},"fontSize":"heading-3"} /-->

<!-- wp:post-excerpt {"moreText":"Read More","style":{"spacing":{"margin":{"top":"20px","bottom":"20px"}},"elements":{"link":{"color":{"text":"var:preset|color|secondary"}}}},"textColor":"third"} /--></div>
<!-- /wp:group -->
<!-- /wp:post-template --></div>
<!-- /wp:query --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:buttons {"className":"restance-animate restance-move-up restance-delay-7","layout":{"type":"flex","justifyContent":"center"},"style":{"spacing":{"margin":{"top":"80px"}}}} -->
<div class="wp-block-buttons restance-animate restance-move-up restance-delay-7" style="margin-top:80px"><!-- wp:button {"className":"is-style-custombuttonone"} -->
<div class="wp-block-button is-style-custombuttonone"><a class="wp-block-button__link wp-element-button" href="#">Read More</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></main>
<!-- /wp:group -->',
);
