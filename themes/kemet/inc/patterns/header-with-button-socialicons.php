<?php
/**
 * Header with Top Bar
 */
return array(
	'title'      => __( 'Header with Button & Social Icons', 'kemet' ),
	'categories' => array( 'kemet-headers', 'header' ),
	'blockTypes' => array( 'core/template-part/header' ),
	'content'    => '
    <!-- wp:group {"align":"full","backgroundColor":"background"} -->
<div class="wp-block-group alignfull has-background-background-color has-background"><!-- wp:group {"layout":{"inherit":true}} -->
<div class="wp-block-group"><!-- wp:group {"layout":{"type":"flex","allowOrientation":false,"justifyContent":"space-between"}} -->
<div class="wp-block-group"><!-- wp:group {"layout":{"type":"flex","allowOrientation":false}} -->
<div class="wp-block-group"><!-- wp:site-logo /--></div>
<!-- /wp:group -->

<!-- wp:group {"layout":{"type":"flex","allowOrientation":false,"justifyContent":"left"}} -->
<div class="wp-block-group"><!-- wp:navigation -->
<!-- wp:page-list /-->
<!-- /wp:navigation -->

<!-- wp:social-links {"iconColor":"background","iconColorValue":"#ffffff","iconBackgroundColor":"tertiary","iconBackgroundColorValue":"#02273a","size":"has-small-icon-size","className":"is-style-default","layout":{"type":"flex","justifyContent":"space-between"},"style":{"spacing":{"blockGap":"8px"}}} -->
<ul class="wp-block-social-links has-small-icon-size has-icon-color has-icon-background-color is-style-default"><!-- wp:social-link {"url":"#","service":"facebook"} /-->

<!-- wp:social-link {"url":"#","service":"twitter"} /-->

<!-- wp:social-link {"url":"#","service":"instagram"} /-->

<!-- wp:social-link {"url":"#","service":"youtube"} /--></ul>
<!-- /wp:social-links -->

<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"left"}} -->
<div class="wp-block-buttons"><!-- wp:button {"backgroundColor":"primary","textColor":"foreground","className":"is-style-fill"} -->
<div class="wp-block-button is-style-fill"><a class="wp-block-button__link has-foreground-color has-primary-background-color has-text-color has-background">' . esc_html__('Get Started', 'kemet') . '</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->',
);