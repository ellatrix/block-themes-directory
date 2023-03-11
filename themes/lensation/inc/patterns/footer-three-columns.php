<?php
/**
 * Footer with Three Columns
 */
return array(
	'title'      => esc_html__( 'Footer Three Columns', 'lensation' ),
	'categories' => array( 'lensation', 'footer' ),
	'content'    => '<!-- wp:group {"align":"full","className":"wp-footer-has-border footer-dark","layout":{"inherit":true}} -->
	<div class="wp-block-group alignfull wp-footer-has-border footer-dark"><!-- wp:group {"align":"full","className":"wp-block-footer wp-block-widget-area","layout":{"inherit":true}} -->
	<div class="wp-block-group alignfull wp-block-footer wp-block-widget-area"><!-- wp:group {"align":"wide"} -->
	<div class="wp-block-group alignwide"><!-- wp:columns {"className":"wp-block-footer-widget-area-columns"} -->
	<div class="wp-block-columns wp-block-footer-widget-area-columns"><!-- wp:column {"className":"wp-block-widget"} -->
	<div class="wp-block-column wp-block-widget"><!-- wp:group -->
	<div class="wp-block-group"><!-- wp:group {"className":"wp-footer-site-identity"} -->
	<div class="wp-block-group wp-footer-site-identity"><!-- wp:heading {"style":{"spacing":{"margin":{"top":"0px","right":"0px","bottom":"0px","left":"0px"}},"typography":{"textTransform":"uppercase"}},"fontSize":"normal"} -->
	<h2 class="has-normal-font-size" id="about" style="text-transform:uppercase;margin-top:0px;margin-right:0px;margin-bottom:0px;margin-left:0px">Lensation</h2>
	<!-- /wp:heading -->
	
	<!-- wp:paragraph {"fontSize":"tiny"} -->
	<p class="has-tiny-font-size">Modern WP Theme</p>
	<!-- /wp:paragraph --></div>
	<!-- /wp:group -->
	
	<!-- wp:paragraph -->
	<p>Lorem ipsum dolor sit amet, cons ectetur adipiscing elit lorem ipsum dolor sit amet …</p>
	<!-- /wp:paragraph -->
	
	<!-- wp:social-links {"iconColor":"body-text","iconColorValue":"#333333","className":"is-style-logos-only site-social"} -->
	<ul class="wp-block-social-links has-icon-color is-style-logos-only site-social"><!-- wp:social-link {"url":"www.facebook.com","service":"facebook"} /-->
	
	<!-- wp:social-link {"url":"www.twitter.com","service":"twitter"} /-->
	
	<!-- wp:social-link {"url":"www.linkedin.com","service":"linkedin"} /--></ul>
	<!-- /wp:social-links --></div>
	<!-- /wp:group --></div>
	<!-- /wp:column -->
	
	<!-- wp:column {"className":"wp-block-widget"} -->
	<div class="wp-block-column wp-block-widget"><!-- wp:group -->
	<div class="wp-block-group"><!-- wp:heading {"level":6} -->
	<h6><strong>Recent Posts</strong></h6>
	<!-- /wp:heading -->
	
	<!-- wp:latest-posts {"postsToShow":3,"displayPostDate":true,"displayFeaturedImage":true,"featuredImageAlign":"left","featuredImageSizeWidth":70,"featuredImageSizeHeight":70} /--></div>
	<!-- /wp:group --></div>
	<!-- /wp:column -->
	
	<!-- wp:column {"className":"wp-block-widget"} -->
	<div class="wp-block-column wp-block-widget"><!-- wp:group -->
	<div class="wp-block-group"><!-- wp:heading {"level":6} -->
	<h6><strong>Subscribe</strong></h6>
	<!-- /wp:heading -->
	
	<!-- wp:tnp/minimal {"padding":0,"className":"site-newsletter"} -->
	<div style="padding:0" class="wp-block-tnp-minimal site-newsletter"><p></p><div>[newsletter_form type="minimal"]</div></div>
	<!-- /wp:tnp/minimal --></div>
	<!-- /wp:group --></div>
	<!-- /wp:column --></div>
	<!-- /wp:columns --></div>
	<!-- /wp:group --></div>
	<!-- /wp:group --></div>
	<!-- /wp:group -->',
);



