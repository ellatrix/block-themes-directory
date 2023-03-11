<?php
/**
 * Header with Contact Information
 */
return array(
	'title'      => __( 'Header with Contact Information', 'kemet' ),
	'categories' => array( 'kemet-headers', 'header' ),
	'blockTypes' => array( 'core/template-part/header' ),
	'content'    => '
    <!-- wp:group {"align":"full","style":{"spacing":{"blockGap":"0px","padding":{"top":"20px","bottom":"20px"}}},"backgroundColor":"background","className":"is-style-default"} -->
<div class="wp-block-group alignfull is-style-default has-background-background-color has-background" style="padding-top:20px;padding-bottom:20px"><!-- wp:group {"style":{"spacing":{"padding":{"top":"20px","bottom":"20px"}}},"backgroundColor":"background","layout":{"inherit":true}} -->
<div class="wp-block-group has-background-background-color has-background" style="padding-top:20px;padding-bottom:20px"><!-- wp:group {"layout":{"type":"flex","allowOrientation":false,"justifyContent":"space-between"}} -->
<div class="wp-block-group"><!-- wp:group {"layout":{"type":"flex","allowOrientation":false}} -->
<div class="wp-block-group"><!-- wp:paragraph -->
<p>' . esc_html__( 'mail@example.com - 78 Towne Cove St. 289', 'kemet') . '</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"layout":{"type":"flex","allowOrientation":false}} -->
<div class="wp-block-group"><!-- wp:social-links {"iconColor":"foreground","iconColorValue":"#023047","size":"has-small-icon-size","className":"is-style-logos-only","layout":{"type":"flex","justifyContent":"space-between"},"style":{"spacing":{"blockGap":{"top":"17px","left":"17px"}}}} -->
<ul class="wp-block-social-links has-small-icon-size has-icon-color is-style-logos-only"><!-- wp:social-link {"url":"#","service":"facebook"} /-->

<!-- wp:social-link {"url":"#","service":"twitter"} /-->

<!-- wp:social-link {"url":"#","service":"instagram"} /-->

<!-- wp:social-link {"url":"#","service":"youtube"} /--></ul>
<!-- /wp:social-links --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"layout":{"inherit":true}} -->
<div class="wp-block-group"><!-- wp:separator {"style":{"spacing":{"padding":{"top":"0px","right":"0px","bottom":"0px","left":"0px"},"margin":{"top":"0px","right":"0px","bottom":"0px","left":"0px"}}},"className":"has-text-color has-background has-cyan-bluish-gray-background-color has-cyan-bluish-gray-color is-style-wide eplus-wrapper"} -->
<hr class="wp-block-separator has-alpha-channel-opacity has-text-color has-background has-cyan-bluish-gray-background-color has-cyan-bluish-gray-color is-style-wide eplus-wrapper" style="margin-top:0px;margin-right:0px;margin-bottom:0px;margin-left:0px;padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px"/>
<!-- /wp:separator --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"10px","bottom":"10px"}}},"backgroundColor":"background","layout":{"inherit":true}} -->
<div class="wp-block-group has-background-background-color has-background" style="padding-top:10px;padding-bottom:10px"><!-- wp:group {"layout":{"type":"flex","allowOrientation":false,"justifyContent":"space-between"}} -->
<div class="wp-block-group"><!-- wp:group {"layout":{"type":"flex","allowOrientation":false}} -->
<div class="wp-block-group"><!-- wp:site-logo /--></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"blockGap":"10px"}},"layout":{"type":"flex","allowOrientation":false,"justifyContent":"right"}} -->
<div class="wp-block-group">
<!-- wp:navigation {"ref":1768,"layout":{"type":"flex","justifyContent":"center"}} -->
<!-- wp:page-list /-->
<!-- /wp:navigation -->
<!-- wp:paragraph {"style":{"typography":{"fontSize":"37px"}},"textColor":"foreground","className":"hide-on-mobile"} -->
<p class="hide-on-mobile has-foreground-color has-text-color" style="font-size:37px"> 📞</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"hide-on-mobile"} -->
<p class="hide-on-mobile"><strong>' . esc_html__( 'Free Consultation', 'kemet') . '</strong><br>' . esc_html__( '(021)123-456-789', 'kemet') . '</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->',
);