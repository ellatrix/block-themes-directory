<?php
/**
 * Sidebar: default
 */

$form = ona_get_mailchimp_forms();

return array(
	'title'      => __( 'Sidebar', 'ona' ),
	'categories' => array( 'ona-sidebars' ),
	'blockTypes' => array( 'core/template-part/sidebar' ),
	'content'    => '
		<!-- wp:group {"style":{"spacing":{"blockGap":"68px"}}} -->
		<div class="wp-block-group"><!-- wp:group {"style":{"spacing":{"blockGap":"40px"}}} -->
		<div class="wp-block-group"><!-- wp:group {"style":{"border":{"width":"1px"},"spacing":{"padding":{"top":"48px","right":"48px","bottom":"48px","left":"48px"},"blockGap":"30px"}},"borderColor":"stroke"} -->
		<div class="wp-block-group has-border-color has-stroke-border-color" style="border-width:1px;padding-top:48px;padding-right:48px;padding-bottom:48px;padding-left:48px"><!-- wp:paragraph {"align":"center","style":{"typography":{"textTransform":"uppercase","letterSpacing":"2px"}},"fontSize":"tiny"} -->
		<p class="has-text-align-center has-tiny-font-size" style="text-transform:uppercase;letter-spacing:2px">' . __( 'About Me', 'ona' ) . '</p>
		<!-- /wp:paragraph -->

		<!-- wp:image {"align":"center","id":279,"sizeSlug":"full","linkDestination":"none"} -->
		<figure class="wp-block-image aligncenter size-full"><img src="' . esc_url( get_theme_file_uri( 'assets/img/ona_sidebar_author.png' ) ) . '" alt="" class="wp-image-279"/></figure>
		<!-- /wp:image -->

		<!-- wp:heading {"textAlign":"center","fontSize":"medium-large"} -->
		<h2 class="has-text-align-center has-medium-large-font-size">' . __( 'Joeby Ragpa', 'ona' ) . '</h2>
		<!-- /wp:heading -->

		<!-- wp:paragraph {"align":"center"} -->
		<p class="has-text-align-center">' . __( 'I am a food lover, traveler, adventurer. I share my impressions and talk about journeys for inspirations.', 'ona' ) . '</p>
		<!-- /wp:paragraph -->

		<!-- wp:heading {"textAlign":"center","level":3,"className":"is-style-ona-alt-font"} -->
		<h3 class="has-text-align-center is-style-ona-alt-font">' . __( 'Joeby Ragpa', 'ona' ) . '</h3>
		<!-- /wp:heading -->

		<!-- wp:social-links {"iconColor":"background","iconColorValue":"#ffffff","iconBackgroundColor":"foreground","iconBackgroundColorValue":"#000000","size":"has-normal-icon-size","className":"is-style-default","layout":{"type":"flex","justifyContent":"center"},"style":{"spacing":{"blockGap":{"top":"10px","left":"10px"}}}} -->
		<ul class="wp-block-social-links has-normal-icon-size has-icon-color has-icon-background-color is-style-default"><!-- wp:social-link {"url":"#","service":"facebook"} /-->

		<!-- wp:social-link {"url":"#","service":"tiktok"} /-->

		<!-- wp:social-link {"url":"#","service":"twitter"} /-->

		<!-- wp:social-link {"url":"#","service":"instagram"} /--></ul>
		<!-- /wp:social-links --></div>
		<!-- /wp:group --></div>
		<!-- /wp:group -->

		<!-- wp:group -->
		<div class="wp-block-group"><!-- wp:paragraph {"align":"center","style":{"typography":{"textTransform":"uppercase","letterSpacing":"2px"}},"textColor":"foreground","fontSize":"tiny"} -->
		<p class="has-text-align-center has-foreground-color has-text-color has-tiny-font-size" style="text-transform:uppercase;letter-spacing:2px">' . __( 'Popular Posts', 'ona' ) . '</p>
		<!-- /wp:paragraph -->

		<!-- wp:latest-posts {"postsToShow":3,"displayPostDate":true,"displayFeaturedImage":true,"featuredImageAlign":"left","featuredImageSizeWidth":100,"featuredImageSizeHeight":100,"addLinkToFeaturedImage":true} /--></div>
		<!-- /wp:group -->

		<!-- wp:group {"style":{"spacing":{"padding":{"top":"48px","bottom":"48px","right":"48px","left":"48px"}}},"backgroundColor":"secondary","layout":{"inherit":false,"contentSize":"1170px"}} -->
		<div class="wp-block-group has-secondary-background-color has-background" style="padding-top:48px;padding-right:48px;padding-bottom:48px;padding-left:48px"><!-- wp:paragraph {"align":"center","textColor":"foreground","className":"ona-text-letter-spacing","fontSize":"tiny"} -->
		<p class="has-text-align-center ona-text-letter-spacing has-foreground-color has-text-color has-tiny-font-size">' . __( 'SUBSCRIBE NOW', 'ona' ) . '</p>
		<!-- /wp:paragraph -->

		<!-- wp:heading {"style":{"typography":{"lineHeight":1.3}},"fontSize":"medium"} -->
		<h2 class="has-medium-font-size" id="join-the-newsletter-to-get-the-daily-tips-latest-articles-and-free-stuffs-delivered-directly-to-your-inbox" style="line-height:1.3">' . __( 'Join the newsletter to get the daily tips, latest articles and free stuffs delivered directly to your inbox.', 'ona' ) . '</h2>
		<!-- /wp:heading -->
		
		' . $form . '

		</div><!-- /wp:group -->

		<!-- wp:group {"style":{"border":{"width":"1px"},"spacing":{"padding":{"top":"34px","right":"34px","bottom":"34px","left":"34px"}}},"borderColor":"stroke"} -->
		<div class="wp-block-group has-border-color has-stroke-border-color" style="border-width:1px;padding-top:34px;padding-right:34px;padding-bottom:34px;padding-left:34px"><!-- wp:image {"id":340,"sizeSlug":"full","linkDestination":"custom"} -->
		<figure class="wp-block-image size-full"><img src="' . esc_url( get_theme_file_uri( 'assets/img/ona_sidebar_banner.jpg' ) ) . '" alt="ona_food_sidebar_banner" class="wp-image-340"/></figure>
		<!-- /wp:image --></div>
		<!-- /wp:group --></div>
		<!-- /wp:group -->',
);



