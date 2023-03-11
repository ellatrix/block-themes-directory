<?php
/**
 *
 * @package Blockpress
 */

return array(
	'title'         => __( 'Banner with top negative margin', 'blockpress' ),
	'categories'    => array( 'blockpress-general' ),
 
	'content'       => '
	<!-- wp:group {"align":"full","layout":{"inherit":true}} -->
<div class="wp-block-group alignfull"><!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"20px","right":"40px","bottom":"20px","left":"50px"}},"border":{"radius":"8px"}},"gradient":"diagonal-primary-to-secondary","className":"fr-negative-margin-5 fr-animate fr-flip is-style-middleshadow"} -->
<div class="wp-block-group alignwide fr-animate fr-flip fr-negative-margin-5 is-style-middleshadow has-diagonal-primary-to-secondary-gradient-background has-background" style="border-radius:8px;padding-top:20px;padding-right:40px;padding-bottom:20px;padding-left:50px"><!-- wp:columns {"verticalAlignment":"center","style":{"spacing":{"padding":{"top":"0px","right":"0px","bottom":"0px","left":"0px"}}}} -->
<div class="wp-block-columns are-vertically-aligned-center" style="padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px"><!-- wp:column {"verticalAlignment":"center","width":"66.66%","className":"is-style-default"} -->
<div class="wp-block-column is-vertically-aligned-center is-style-default" style="flex-basis:66.66%"><!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"700"},"color":{"text":"#ffffff"}},"className":"is-style-no-margin","fontSize":"large"} -->
<p class="is-style-no-margin has-text-color has-large-font-size" style="font-style:normal;font-weight:700; color:#ffffff">Get advanced design on your website with fastest Gutenberg page and animation builder Greenshift</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"33.33%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:33.33%"><!-- wp:buttons {"layout":{"type":"flex","justifyContent":"right"}} -->
<div class="wp-block-buttons"><!-- wp:button {"textColor":"black","style":{"color":{"gradient":"linear-gradient(135deg,rgb(246,250,255) 0%,rgb(254,254,255) 100%)"},"spacing":{"padding":{"top":"15px","bottom":"15px","left":"40px","right":"40px"}},"border":{"radius":"3px"}},"className":"is-style-cubebtnwhite","fontSize":"medium"} -->
<div class="wp-block-button has-custom-font-size is-style-cubebtnwhite has-medium-font-size"><a class="wp-block-button__link has-black-color has-text-color has-background" href="https://wordpress.org/plugins/greenshift-animation-and-page-builder-blocks" style="border-radius:3px;background:linear-gradient(135deg,rgb(246,250,255) 0%,rgb(254,254,255) 100%);padding-top:15px;padding-right:40px;padding-bottom:15px;padding-left:40px" target="_blank" rel="noreferrer noopener">Download Now</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->


',
);
