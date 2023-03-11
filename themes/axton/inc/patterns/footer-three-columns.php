<?php
/**
 * Footer with Three Columns
 */
return array(
	'title'      => esc_html__( 'Footer Three Columns', 'axton' ),
	'categories' => array( 'axton', 'footer' ),
	'content'    => '<!-- wp:group {"align":"full","className":"wp-footer-has-border","layout":{"inherit":true}} -->
	<div class="wp-block-group alignfull  wp-footer-has-border"><!-- wp:group {"align":"full","className":"wp-block-footer wp-block-widget-area","layout":{"inherit":true}} -->
	<div class="wp-block-group alignfull wp-block-footer wp-block-widget-area"><!-- wp:group {"align":"wide"} -->
	<div class="wp-block-group alignwide"><!-- wp:columns {"className":"wp-block-footer-widget-area-columns"} -->
	<div class="wp-block-columns wp-block-footer-widget-area-columns"><!-- wp:column {"className":"wp-block-widget"} -->
	<div class="wp-block-column wp-block-widget"><!-- wp:group -->
	<div class="wp-block-group"><!-- wp:heading {"style":{"spacing":{"margin":{"top":"0px","right":"0px","bottom":"0px","left":"0px"}}}} -->
	<h2 id="about" style="margin-top:0px;margin-right:0px;margin-bottom:0px;margin-left:0px">' . esc_html__( 'Axton', 'axton' ) . '</h2>
	<!-- /wp:heading -->
	
	<!-- wp:paragraph {"textColor":"secondary-link","fontSize":"tiny"} -->
	<p class="has-secondary-link-color has-text-color has-tiny-font-size">' . esc_html__( 'Minimum Wordpress Theme', 'axton' ) . '</p>
	<!-- /wp:paragraph --></div>
	<!-- /wp:group --></div>
	<!-- /wp:column -->
	
	<!-- wp:column {"className":"wp-block-widget"} -->
	<div class="wp-block-column wp-block-widget"><!-- wp:group -->
	<div class="wp-block-group"><!-- wp:paragraph {"textColor":"secondary-link"} -->
	<p class="has-secondary-link-color has-text-color"><strong>Newsletter sign-up. </strong>Get updates &amp; resources</p>
	<!-- /wp:paragraph -->
	
	<!-- wp:tnp/minimal {"padding":0,"className":"site-newsletter"} -->
	<div style="padding:0" class="wp-block-tnp-minimal site-newsletter"><p></p><div>[newsletter_form type="minimal"]</div></div>
	<!-- /wp:tnp/minimal --></div>
	<!-- /wp:group --></div>
	<!-- /wp:column -->
	
	<!-- wp:column {"className":"wp-block-widget"} -->
	<div class="wp-block-column wp-block-widget"><!-- wp:group -->
	
	<div class="wp-block-group"><!-- wp:paragraph {"textColor":"secondary-link"} -->
	<p class="has-secondary-link-color has-text-color">Connect with Social</p>
	<!-- /wp:paragraph -->

	<!-- wp:social-links {"iconColor":"body-text","iconColorValue":"#333333","className":"is-style-logos-only site-social"} -->
	<ul class="wp-block-social-links has-icon-color is-style-logos-only site-social"><!-- wp:social-link {"url":"www.facebook.com","service":"facebook"} /-->

	<!-- wp:social-link {"url":"www.twitter.com","service":"twitter"} /-->

	<!-- wp:social-link {"url":"www.linkedin.com","service":"linkedin"} /--></ul>
	<!-- /wp:social-links --></div>
	<!-- /wp:group --></div>
	<!-- /wp:column --></div>
	<!-- /wp:columns --></div>
	<!-- /wp:group --></div>
	<!-- /wp:group --></div>
	<!-- /wp:group -->',
);



