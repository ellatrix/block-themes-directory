<?php
/**
 * Page About
 */
return array(
	'title'      => __( 'Page about', 'ona' ),
	'categories' => array( 'ona-pages' ),
	'content'    => '
			<!-- wp:group {"style":{"spacing":{"padding":{"top":"68px"}}},"backgroundColor":"background-light","layout":{"contentSize":"1170px"}} -->
			<div class="wp-block-group has-background-light-background-color has-background" style="padding-top:68px"><!-- wp:columns {"style":{"spacing":{"blockGap":"68px"}}} -->
			<div class="wp-block-columns"><!-- wp:column {"className":"is-style-ona-negative-offset-bottom"} -->
			<div class="wp-block-column is-style-ona-negative-offset-bottom"><!-- wp:image {"id":220,"width":565,"height":637,"sizeSlug":"full","linkDestination":"none"} -->
			<figure class="wp-block-image size-full is-resized"><img src="' . esc_url( get_theme_file_uri( 'assets/img/ona_about_hero.jpg' ) ) . '" alt="ona_about_hero" class="wp-image-220" width="565" height="637"/></figure>
			<!-- /wp:image --></div>
			<!-- /wp:column -->

			<!-- wp:column {"verticalAlignment":"center"} -->
			<div class="wp-block-column is-vertically-aligned-center"><!-- wp:image {"id":223,"width":319,"height":133,"sizeSlug":"full","linkDestination":"none"} -->
			<figure class="wp-block-image size-full is-resized"><img src="' . esc_url( get_theme_file_uri( 'assets/img/ona_about_page_title_signature.png' ) ) . '" alt="ona_about_page_title_signature" class="wp-image-223" width="319" height="133"/></figure>
			<!-- /wp:image -->

			<!-- wp:heading {"level":1,"style":{"spacing":{"margin":{"right":"15%"}}}} -->
			<h1 id="i-am-a-lifestyle-and-fashion-blogger-a-person-who-enjoys-travel" style="margin-right:15%">' . __( 'I am a lifestyle and fashion blogger, a person who enjoys travel.', 'ona' ) . '</h1>
			<!-- /wp:heading --></div>
			<!-- /wp:column --></div>
			<!-- /wp:columns --></div>
			<!-- /wp:group -->

			<!-- wp:group {"className":"ona-container","layout":{"inherit":true}} -->
			<div class="wp-block-group ona-container"><!-- wp:spacer {"height":120} -->
			<div style="height:120px" aria-hidden="true" class="wp-block-spacer"></div>
			<!-- /wp:spacer -->

			<!-- wp:separator {"color":"foreground","className":"is-style-default"} -->
			<hr class="wp-block-separator has-text-color has-background has-foreground-background-color has-foreground-color is-style-default"/>
			<!-- /wp:separator -->

			<!-- wp:paragraph {"align":"center","style":{"typography":{"lineHeight":"1.3"}},"textColor":"foreground","fontSize":"medium-large"} -->
			<p class="has-text-align-center has-foreground-color has-text-color has-medium-large-font-size" style="line-height:1.3"><em>' . __( '“To us, a healthy woman is confident in her own skin, flaws and all.”', 'ona' ) . '</em></p>
			<!-- /wp:paragraph -->

			<!-- wp:separator {"color":"foreground","className":"is-style-default"} -->
			<hr class="wp-block-separator has-text-color has-background has-foreground-background-color has-foreground-color is-style-default"/>
			<!-- /wp:separator -->

			<!-- wp:spacer -->
			<div style="height:100px" aria-hidden="true" class="wp-block-spacer"></div>
			<!-- /wp:spacer --></div>
			<!-- /wp:group -->

			<!-- wp:group -->
			<div class="wp-block-group"><!-- wp:columns {"verticalAlignment":"center","style":{"spacing":{"blockGap":"0px"}}} -->
			<div class="wp-block-columns are-vertically-aligned-center"><!-- wp:column {"verticalAlignment":"center","className":"is-style-ona-shift-right"} -->
			<div class="wp-block-column is-vertically-aligned-center is-style-ona-shift-right"><!-- wp:group {"style":{"spacing":{"padding":{"top":"15%","right":"15%","bottom":"15%","left":"15%"}}},"backgroundColor":"background-light"} -->
			<div class="wp-block-group has-background-light-background-color has-background" style="padding-top:15%;padding-right:15%;padding-bottom:15%;padding-left:15%"><!-- wp:heading {"textAlign":"center","style":{"typography":{"lineHeight":"1.2"}}} -->
			<h2 class="has-text-align-center" id="i-love-working-with-people-who-find-joy-in-the-little-things" style="line-height:1.2">
			' . __( 'I Love working with people who find joy in the little things', 'ona' ) . '
			</h2>
			<!-- /wp:heading -->

			<!-- wp:paragraph {"align":"center"} -->
			<p class="has-text-align-center">' . __( 'Some blogs focus more on fashion advice, featuring how-to articles for the lay reader. Articles discuss clothing fit, the matching and complementing of colors, and other information on clothes wearing and care along with prescriptive advice.', 'ona' ) . '</p>
			<!-- /wp:paragraph --></div>
			<!-- /wp:group --></div>
			<!-- /wp:column -->

			<!-- wp:column {"verticalAlignment":"center","className":"is-style-no-spacing"} -->
			<div class="wp-block-column is-vertically-aligned-center is-style-no-spacing"><!-- wp:cover {"url":"' . esc_url( get_theme_file_uri( 'assets/img/ona_promo.jpg' ) ) . '","id":92,"dimRatio":0,"isDark":false,"className":"ona-promo-image"} -->
			<div class="wp-block-cover is-light ona-promo-image"><span aria-hidden="true" class="has-background-dim-0 wp-block-cover__gradient-background has-background-dim"></span><img class="wp-block-cover__image-background wp-image-92" alt="ona_promo" src="' . esc_url( get_theme_file_uri( 'assets/img/ona_promo.jpg' ) ) . '" data-object-fit="cover"/><div class="wp-block-cover__inner-container"></div></div>
			<!-- /wp:cover --></div>
			<!-- /wp:column --></div>
			<!-- /wp:columns --></div>
			<!-- /wp:group -->

			<!-- wp:group {"className":"ona-container","layout":{"contentSize":"1170px"}} -->
			<div class="wp-block-group ona-container"><!-- wp:spacer {"height":60} -->
			<div style="height:60px" aria-hidden="true" class="wp-block-spacer"></div>
			<!-- /wp:spacer -->

			<!-- wp:columns -->
			<div class="wp-block-columns"><!-- wp:column {"style":{"spacing":{"padding":{"right":"40px","left":"40px","top":"40px","bottom":"40px"}}}} -->
			<div class="wp-block-column" style="padding-top:40px;padding-right:40px;padding-bottom:40px;padding-left:40px"><!-- wp:group -->
			<div class="wp-block-group"><!-- wp:heading {"textAlign":"center","level":3,"fontSize":"large"} -->
			<h3 class="has-text-align-center has-large-font-size" id="99">' . __( '99', 'ona' ) . '</h3>
			<!-- /wp:heading -->

			<!-- wp:paragraph {"align":"center"} -->
			<p class="has-text-align-center">' . __( 'Houses sold in 2021 for my clients', 'ona' ) . '</p>
			<!-- /wp:paragraph --></div>
			<!-- /wp:group --></div>
			<!-- /wp:column -->

			<!-- wp:column {"style":{"spacing":{"padding":{"right":"40px","left":"40px","top":"40px","bottom":"40px"}}}} -->
			<div class="wp-block-column" style="padding-top:40px;padding-right:40px;padding-bottom:40px;padding-left:40px"><!-- wp:group -->
			<div class="wp-block-group"><!-- wp:heading {"textAlign":"center","level":3,"fontSize":"large"} -->
			<h3 class="has-text-align-center has-large-font-size" id="99">' . __( '1,500+', 'ona' ) . '</h3>
			<!-- /wp:heading -->

			<!-- wp:paragraph {"align":"center"} -->
			<p class="has-text-align-center">' . __( 'Cups of coffee drank in courtrooms in 2021', 'ona' ) . '</p>
			<!-- /wp:paragraph --></div>
			<!-- /wp:group --></div>
			<!-- /wp:column -->

			<!-- wp:column {"style":{"spacing":{"padding":{"right":"40px","left":"40px","top":"40px","bottom":"40px"}}}} -->
			<div class="wp-block-column" style="padding-top:40px;padding-right:40px;padding-bottom:40px;padding-left:40px"><!-- wp:group -->
			<div class="wp-block-group"><!-- wp:heading {"textAlign":"center","level":3,"fontSize":"large"} -->
			<h3 class="has-text-align-center has-large-font-size" id="99">' . __( '700K', 'ona' ) . '</h3>
			<!-- /wp:heading -->

			<!-- wp:paragraph {"align":"center"} -->
			<p class="has-text-align-center">' . __( 'Profits gained for my clients and money', 'ona' ) . '</p>
			<!-- /wp:paragraph --></div>
			<!-- /wp:group --></div>
			<!-- /wp:column --></div>
			<!-- /wp:columns -->

			<!-- wp:spacer {"height":80} -->
			<div style="height:80px" aria-hidden="true" class="wp-block-spacer"></div>
			<!-- /wp:spacer --></div>
			<!-- /wp:group -->',
);



