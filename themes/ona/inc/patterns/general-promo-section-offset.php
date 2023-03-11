<?php
/**
 * General promo section offset
 */
return array(
	'title'      => __( 'Promo section offset', 'ona' ),
	'categories' => array( 'ona-general' ),
	'content'    => '
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
			<!-- /wp:group -->',
);



