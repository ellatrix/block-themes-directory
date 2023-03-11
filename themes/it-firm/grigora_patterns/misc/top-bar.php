<?php
/**
 * Top Bar
 * 
 * Title: Top Bar
 * Slug: it-firm/misc/top-bar
 * Categories: it-firm-misc
 *
 * @package it-firm
 * @since 1.0.0
 */

return array(
	'title'      => esc_html__( 'Top Bar', 'it-firm' ),
	'categories' => array( 'it-firm-misc' ),
	'inserter'   => true,
	'content'    => '<!-- wp:group {"style":{"spacing":{"padding":{"top":"0.6%","bottom":"0.6%","right":"3%","left":"3%"}}},"backgroundColor":"button","textColor":"background","className":"is-style-it-firm-hide-mobile","layout":{"inherit":true}} -->
    <div class="wp-block-group is-style-it-firm-hide-mobile has-background-color has-button-background-color has-text-color has-background" style="padding-top:0.6%;padding-right:3%;padding-bottom:0.6%;padding-left:3%"><!-- wp:group {"align":"wide"} -->
        <div class="wp-block-group alignwide"><!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"0px","right":"0px","bottom":"0px","left":"0px"}}},"layout":{"type":"flex","justifyContent":"space-between"}} -->
        <div class="wp-block-group alignfull" style="padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px"><!-- wp:group {"layout":{"type":"flex"}} -->
        <div class="wp-block-group"><!-- wp:paragraph {"style":{"typography":{"fontSize":"0.9rem"}}} -->
        <p style="font-size:0.9rem"><img class="wp-image-105" style="width: 15px;" src="'. esc_url( get_theme_file_uri( "assets/images/location_icon.webp" ) ) .'" alt=""> 5325 Old Middleton Rd Madison West Virginia 53705</p>
        <!-- /wp:paragraph -->
        
        <!-- wp:paragraph {"style":{"typography":{"fontSize":"0.9rem"}}} -->
        <p style="font-size:0.9rem"><img class="wp-image-106" style="width: 15px;" src="'. esc_url( get_theme_file_uri( "assets/images/email_envelope_letter_mail_newsletter_icon-2.webp" ) ) .'" alt=""> demo@example.com</p>
        <!-- /wp:paragraph --></div>
        <!-- /wp:group -->
        
        <!-- wp:social-links {"iconBackgroundColor":"transparent","iconBackgroundColorValue":"transparent","size":"has-small-icon-size"} -->
        <ul class="wp-block-social-links has-small-icon-size has-icon-background-color"><!-- wp:social-link {"url":"#","service":"facebook"} /-->
        
        <!-- wp:social-link {"url":"#","service":"twitter"} /-->
        
        <!-- wp:social-link {"url":"#","service":"instagram"} /--></ul>
        <!-- /wp:social-links --></div>
        <!-- /wp:group --></div>
        <!-- /wp:group --></div>
        <!-- /wp:group -->',
);







