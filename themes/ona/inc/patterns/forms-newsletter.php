<?php
/**
 * Forms: Newsletter
 */

$form = ona_get_mailchimp_forms();

return array(
	'title'      => __( 'Newsletter', 'ona' ),
	'categories' => array( 'ona-forms' ),
	'content'    => '
			<!-- wp:group {"style":{"spacing":{"padding":{"top":"100px","bottom":"100px"}}},"backgroundColor":"secondary","className":"is-style-no-spacing","layout":{"inherit":false,"contentSize":"1170px"}} -->
			<div class="wp-block-group is-style-no-spacing has-secondary-background-color has-background" style="padding-top:100px;padding-bottom:100px"><!-- wp:columns {"style":{"spacing":{"blockGap":"6%"}}} -->
			<div class="wp-block-columns"><!-- wp:column {"width":"52%"} -->
			<div class="wp-block-column" style="flex-basis:52%"><!-- wp:paragraph {"textColor":"foreground","className":"ona-text-letter-spacing","fontSize":"tiny"} -->
			<p class="ona-text-letter-spacing has-foreground-color has-text-color has-tiny-font-size">' . __( 'SUBSCRIBE NOW', 'ona' ) . '</p>
			<!-- /wp:paragraph -->

			<!-- wp:heading {"style":{"typography":{"lineHeight":"1.5"}},"fontSize":"medium"} -->
			<h2 class="has-medium-font-size" id="join-the-newsletter-to-get-the-daily-tips-latest-articles-and-free-stuffs-delivered-directly-to-your-inbox" style="line-height:1.5">' . __( 'Join the newsletter to get the daily tips, latest articles and free stuffs delivered directly to your inbox.', 'ona' ) . '</h2>
			<!-- /wp:heading --></div>
			<!-- /wp:column -->

			<!-- wp:column -->
			<div class="wp-block-column">' . $form . '

			<!-- wp:group {"style":{"spacing":{"padding":{"top":"1.5rem"}}},"layout":{"type":"flex","justifyContent":"center"}} -->
			<div class="wp-block-group" style="padding-top:1.5rem"><!-- wp:heading {"className":"ona-alt-font"} -->
			<h2 class="ona-alt-font" id="follow">' . __( 'Follow', 'ona' ) . '</h2>
			<!-- /wp:heading -->

			<!-- wp:social-links {"iconColor":"foreground","iconColorValue":"#000000","className":"is-style-logos-only","layout":{"type":"flex","justifyContent":"center"},"style":{"spacing":{"blockGap":"16px"}}} -->
			<ul class="wp-block-social-links has-icon-color is-style-logos-only"><!-- wp:social-link {"url":"#","service":"twitter"} /-->

			<!-- wp:social-link {"url":"#","service":"facebook"} /-->

			<!-- wp:social-link {"url":"#","service":"instagram"} /-->

			<!-- wp:social-link {"url":"#","service":"pinterest"} /-->

			<!-- wp:social-link {"url":"#","service":"youtube"} /--></ul>
			<!-- /wp:social-links --></div>
			<!-- /wp:group --></div>
			<!-- /wp:column --></div>
			<!-- /wp:columns --></div>
			<!-- /wp:group -->',
);



