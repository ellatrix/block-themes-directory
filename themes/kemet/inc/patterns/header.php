<?php
/**
 * Default Header
 */
return array(
	'title'      => __( 'Default Header', 'kemet' ),
	'categories' => array( 'kemet-headers', 'header' ),
	'blockTypes' => array( 'core/template-part/header' ),
	'content'    => '
	<!-- wp:group {"style":{"spacing":{"blockGap":"0px","padding":{"top":"0px","right":"0px","bottom":"0px","left":"0px"}}},"backgroundColor":"background","layout":{"inherit":true}} -->
	<div class="wp-block-group has-background-background-color has-background" style="padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px"><!-- wp:group {"style":{"spacing":{"padding":{"top":"25px","bottom":"25px"}}},"layout":{"inherit":false,"wideSize":""}} -->
	<div class="wp-block-group" style="padding-top:25px;padding-bottom:25px"><!-- wp:group {"layout":{"type":"flex","allowOrientation":false,"justifyContent":"space-between"}} -->
	<div class="wp-block-group"><!-- wp:group {"layout":{"type":"flex","allowOrientation":false,"justifyContent":"left"}} -->
	<div class="wp-block-group"><!-- wp:site-title {"level":3} /--></div>
	<!-- /wp:group -->
	
	<!-- wp:group {"layout":{"type":"flex","allowOrientation":false,"justifyContent":"space-between"}} -->
	<div class="wp-block-group"><!-- wp:navigation -->
	<!-- wp:page-list /-->
	<!-- /wp:navigation --></div>
	<!-- /wp:group -->
	
	<!-- wp:group {"className":"hide-on-mobile","layout":{"type":"flex","allowOrientation":false,"justifyContent":"right"}} -->
	<div class="wp-block-group hide-on-mobile"><!-- wp:buttons -->
	<div class="wp-block-buttons"><!-- wp:button {"backgroundColor":"tertiary","textColor":"secondary","className":"hide-on-mobile"} -->
	<div class="wp-block-button hide-on-mobile"><a class="wp-block-button__link has-secondary-color has-tertiary-background-color has-text-color has-background">' . esc_html__('Click Here', 'kemet') . '</a></div>
	<!-- /wp:button --></div>
	<!-- /wp:buttons --></div>
	<!-- /wp:group --></div>
	<!-- /wp:group --></div>
	<!-- /wp:group --></div>
	<!-- /wp:group -->
	
	<!-- wp:separator {"color":"cyan-bluish-gray","className":"is-style-wide eplus-wrapper","style":{"spacing":{"padding":{"top":"0px","right":"0px","bottom":"0px","left":"0px"},"margin":{"top":"0px","right":"0px","bottom":"0px","left":"0px"}}}} -->
	<hr class="wp-block-separator has-alpha-channel-opacity has-text-color has-background has-cyan-bluish-gray-background-color has-cyan-bluish-gray-color is-style-wide eplus-wrapper" style="margin-top:0px;margin-right:0px;margin-bottom:0px;margin-left:0px;padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px"/>
	<!-- /wp:separator -->',
);