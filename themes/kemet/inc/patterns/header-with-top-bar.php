<?php
/**
 * Header with Top Bar
 */
return array(
	'title'      => __( 'Header with top bar', 'kemet' ),
	'categories' => array( 'kemet-headers', 'header' ),
	'blockTypes' => array( 'core/template-part/header' ),
	'content'    => '
    <!-- wp:group {"style":{"spacing":{"blockGap":"0px"}},"layout":{"inherit":false}} -->
<div class="wp-block-group"><!-- wp:group {"style":{"spacing":{"blockGap":"0px","padding":{"right":"0px","left":"0px"}}},"backgroundColor":"tertiary","textColor":"secondary","layout":{"inherit":true}} -->
<div class="wp-block-group has-secondary-color has-tertiary-background-color has-text-color has-background" style="padding-right:0px;padding-left:0px"><!-- wp:group {"layout":{"inherit":true}} -->
<div class="wp-block-group"><!-- wp:group {"style":{"spacing":{"blockGap":"0px"}},"layout":{"type":"flex","allowOrientation":false,"justifyContent":"space-between"}} -->
<div class="wp-block-group"><!-- wp:group {"layout":{"type":"flex","allowOrientation":false}} -->
<div class="wp-block-group"><!-- wp:site-tagline /--></div>
<!-- /wp:group -->

<!-- wp:group {"layout":{"type":"flex","allowOrientation":false,"justifyContent":"right"}} -->
<div class="wp-block-group"><!-- wp:social-links {"iconColor":"background","iconColorValue":"#ffffff","size":"has-small-icon-size","className":"is-style-logos-only","layout":{"type":"flex","justifyContent":"space-between"},"style":{"spacing":{"blockGap":"15px"}}} -->
<ul class="wp-block-social-links has-small-icon-size has-icon-color is-style-logos-only"><!-- wp:social-link {"url":"#","service":"facebook"} /-->

<!-- wp:social-link {"url":"#","service":"twitter"} /-->

<!-- wp:social-link {"url":"#","service":"instagram"} /-->

<!-- wp:social-link {"url":"#","service":"youtube"} /--></ul>
<!-- /wp:social-links --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"2.5rem","bottom":"2.5rem"},"blockGap":"0px"}},"backgroundColor":"background","layout":{"inherit":true}} -->
<div class="wp-block-group has-background-background-color has-background" style="padding-top:2.5rem;padding-bottom:2.5rem"><!-- wp:group {"layout":{"type":"flex","allowOrientation":false,"justifyContent":"space-between"}} -->
<div class="wp-block-group"><!-- wp:group {"layout":{"type":"flex","allowOrientation":false}} -->
<div class="wp-block-group"><!-- wp:site-logo {"shouldSyncIcon":true} /-->

<!-- wp:site-title {"fontSize":"large"} /--></div>
<!-- /wp:group -->

<!-- wp:group {"layout":{"type":"flex","allowOrientation":false,"justifyContent":"right"}} -->
<div class="wp-block-group"><!-- wp:navigation -->
<!-- wp:page-list /-->
<!-- /wp:navigation --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"border":{"radius":"0px"},"spacing":{"blockGap":"0px"}}} -->
<div class="wp-block-group" style="border-radius:0px"><!-- wp:separator {"color":"cyan-bluish-gray","className":"is-style-wide eplus-wrapper"} -->
<hr class="wp-block-separator has-alpha-channel-opacity has-text-color has-background has-cyan-bluish-gray-background-color has-cyan-bluish-gray-color is-style-wide eplus-wrapper"/>
<!-- /wp:separator --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->',
);