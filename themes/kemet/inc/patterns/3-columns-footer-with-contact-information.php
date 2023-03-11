<?php
/**
 * 3 Columns Footer with Contact Information
 */
return array(
	'title'      => __( '3 Columns Footer with Contact Information', 'kemet' ),
	'categories' => array( 'kemet-footers' ),
	'blockTypes' => array( 'core/template-part/footer' ),
	'content'    => '<!-- wp:cover {"url":"' . esc_url( get_template_directory_uri() ) . '/assets/images/lined-bg.jpg","id":2119,"dimRatio":90,"overlayColor":"tertiary","contentPosition":"center center","align":"full"} -->
<div class="wp-block-cover alignfull"><span aria-hidden="true" class="has-tertiary-background-color has-background-dim-90 wp-block-cover__gradient-background has-background-dim"></span><img class="wp-block-cover__image-background wp-image-2119" alt="" src="' . esc_url( get_template_directory_uri() ) . '/assets/images/lined-bg.jpg" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"60px","bottom":"60px","left":"10px","right":"10px"}}},"layout":{"inherit":true}} -->
<div class="wp-block-group alignfull" style="padding-top:60px;padding-right:10px;padding-bottom:60px;padding-left:10px"><!-- wp:group {"layout":{"inherit":true}} -->
<div class="wp-block-group"><!-- wp:columns -->
<div class="wp-block-columns"><!-- wp:column -->
<div class="wp-block-column"><!-- wp:heading {"level":4,"className":"is-style-kmt-horizontal-border"} -->
<h4 class="is-style-kmt-horizontal-border"><strong>' . esc_html__( 'About Us', 'kemet') . '</strong></h4>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>' . esc_html__( 'Leap13 is a 5 Stars rated WordPress-focused web development firm specialized in building Premium WordPress Themes and Plugins.', 'kemet') . '</p>
<!-- /wp:paragraph -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button -->
<div class="wp-block-button"><a class="wp-block-button__link">' . esc_html__( 'View More', 'kemet') . ' →</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:heading {"level":4,"className":"is-style-kmt-horizontal-border"} -->
<h4 class="is-style-kmt-horizontal-border"><strong>' . esc_html__( 'Contact Info', 'kemet') . '</strong></h4>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>' . esc_html__( '☎ (+132)1-001-234-5678', 'kemet') . '</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p>' . esc_html__( '✉ info@example.com', 'kemet') . '</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p>' . esc_html__( '🏛️ 3 Rockaway St., New Rochelle, NY 10801', 'kemet') . '</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:heading {"level":4,"className":"is-style-kmt-horizontal-border"} -->
<h4 class="is-style-kmt-horizontal-border"><strong>' . esc_html__( 'Recent Articles' , 'kemet' ) . '</strong></h4>
<!-- /wp:heading -->

<!-- wp:query {"queryId":51,"query":{"perPage":3,"pages":0,"offset":0,"postType":"post","order":"asc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false},"displayLayout":{"type":"list","columns":3}} -->
<div class="wp-block-query"><!-- wp:post-template -->
<!-- wp:post-title {"level":5,"isLink":true,"style":{"spacing":{"margin":{"bottom":"3px"}},"elements":{"link":{"color":{"text":"var:preset|color|background"}}},"typography":{"fontStyle":"normal","fontWeight":"500"}}} /-->

<!-- wp:post-date /-->
<!-- /wp:post-template --></div>
<!-- /wp:query --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"padding":{"left":"10px","right":"10px"}}},"layout":{"inherit":true}} -->
<div class="wp-block-group" style="padding-right:10px;padding-left:10px"><!-- wp:separator {"className":"has-text-color has-alpha-channel-opacity has-background is-style-wide"} -->
<hr class="wp-block-separator has-text-color has-alpha-channel-opacity has-background is-style-wide"/>
<!-- /wp:separator --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"20px","bottom":"20px","left":"10px","right":"10px"}}},"layout":{"inherit":true}} -->
<div class="wp-block-group" style="padding-top:20px;padding-right:10px;padding-bottom:20px;padding-left:10px"><!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
<div class="wp-block-group"><!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"left"}} -->
<div class="wp-block-group"><!-- wp:navigation -->
<!-- wp:page-list /-->
<!-- /wp:navigation --></div>
<!-- /wp:group -->

<!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group"><!-- wp:social-links {"iconColor":"background","iconColorValue":"#ffffff","size":"has-small-icon-size","className":"is-style-logos-only","layout":{"type":"flex","justifyContent":"right"},"style":{"spacing":{"blockGap":"15px"}}} -->
<ul class="wp-block-social-links has-small-icon-size has-icon-color is-style-logos-only"><!-- wp:social-link {"url":"#","service":"facebook"} /-->

<!-- wp:social-link {"url":"#","service":"twitter"} /-->

<!-- wp:social-link {"url":"#","service":"instagram"} /-->

<!-- wp:social-link {"url":"#","service":"youtube"} /--></ul>
<!-- /wp:social-links --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div></div>
<!-- /wp:cover -->',
);