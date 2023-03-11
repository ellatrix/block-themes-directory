<?php
/**
 * General promo boxes
 */
return array(
	'title'      => __( 'Promo boxes', 'ona' ),
	'categories' => array( 'ona-general' ),
	'content'    => '
			<!-- wp:group {"style":{"spacing":{"padding":{"top":"70px","bottom":"60px"}}},"backgroundColor":"background-light","className":"is-style-no-spacing","layout":{"inherit":false,"contentSize":"1170px"}} -->
			<div class="wp-block-group is-style-no-spacing has-background-light-background-color has-background" style="padding-top:70px;padding-bottom:60px"><!-- wp:paragraph {"align":"center","textColor":"foreground","className":"ona-text-letter-spacing","fontSize":"tiny"} -->
			<p class="has-text-align-center ona-text-letter-spacing has-foreground-color has-text-color has-tiny-font-size">'
		 . __( 'POPULAR TOPICS', 'ona' ) . '
			</p>
			<!-- /wp:paragraph -->

			<!-- wp:columns -->
			<div class="wp-block-columns"><!-- wp:column -->
			<div class="wp-block-column"><!-- wp:cover {"url":"' . esc_url( get_theme_file_uri( 'assets/img/ona_promo_box_1.jpg' ) ) . '","id":46,"dimRatio":0,"contentPosition":"center center","className":"hover-scale"} -->
			<div class="wp-block-cover hover-scale"><span aria-hidden="true" class="has-background-dim-0 wp-block-cover__gradient-background has-background-dim"></span><img class="wp-block-cover__image-background wp-image-46" alt="ona_promo_box_1" src="' . esc_url( get_theme_file_uri( 'assets/img/ona_promo_box_1.jpg' ) ) . '" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:buttons {"contentJustification":"center"} -->
			<div class="wp-block-buttons is-content-justification-center"><!-- wp:button {"width":50,"style":{"spacing":{"padding":{"top":"16px","bottom":"16px"}}},"className":"is-style-fill","fontSize":"tiny","fontFamily":"base"} -->
			<div class="wp-block-button has-custom-width wp-block-button__width-50 has-custom-font-size is-style-fill has-base-font-family has-tiny-font-size"><a class="wp-block-button__link" href="#" style="padding-top:16px;padding-bottom:16px">' . __( 'FASHION', 'ona' ) . '</a></div>
			<!-- /wp:button --></div>
			<!-- /wp:buttons --></div></div>
			<!-- /wp:cover -->

			<!-- wp:spacer {"height":20} -->
			<div style="height:20px" aria-hidden="true" class="wp-block-spacer"></div>
			<!-- /wp:spacer --></div>
			<!-- /wp:column -->

			<!-- wp:column -->
			<div class="wp-block-column"><!-- wp:cover {"url":"' . esc_url( get_theme_file_uri( 'assets/img/ona_promo_box_2.jpg' ) ) . '","id":48,"dimRatio":0,"contentPosition":"center center","isDark":false,"className":"hover-scale"} -->
			<div class="wp-block-cover is-light hover-scale"><span aria-hidden="true" class="has-background-dim-0 wp-block-cover__gradient-background has-background-dim"></span><img class="wp-block-cover__image-background wp-image-48" alt="ona_promo_box_2" src="' . esc_url( get_theme_file_uri( 'assets/img/ona_promo_box_2.jpg' ) ) . '" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:buttons {"contentJustification":"center"} -->
			<div class="wp-block-buttons is-content-justification-center"><!-- wp:button {"width":50,"style":{"spacing":{"padding":{"top":"16px","bottom":"16px"}}},"className":"is-style-fill","fontSize":"tiny","fontFamily":"base"} -->
			<div class="wp-block-button has-custom-width wp-block-button__width-50 has-custom-font-size is-style-fill has-base-font-family has-tiny-font-size"><a class="wp-block-button__link" href="#" style="padding-top:16px;padding-bottom:16px">' . __( 'LIFESTYLE', 'ona' ) . '</a></div>
			<!-- /wp:button --></div>
			<!-- /wp:buttons --></div></div>
			<!-- /wp:cover -->

			<!-- wp:spacer {"height":20} -->
			<div style="height:20px" aria-hidden="true" class="wp-block-spacer"></div>
			<!-- /wp:spacer --></div>
			<!-- /wp:column -->

			<!-- wp:column -->
			<div class="wp-block-column"><!-- wp:cover {"url":"' . esc_url( get_theme_file_uri( 'assets/img/ona_promo_box_3.jpg' ) ) . '","id":49,"dimRatio":0,"contentPosition":"center center","className":"hover-scale"} -->
			<div class="wp-block-cover hover-scale"><span aria-hidden="true" class="has-background-dim-0 wp-block-cover__gradient-background has-background-dim"></span><img class="wp-block-cover__image-background wp-image-49" alt="ona_promo_box_3" src="' . esc_url( get_theme_file_uri( 'assets/img/ona_promo_box_3.jpg' ) ) . '" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:buttons {"contentJustification":"center"} -->
			<div class="wp-block-buttons is-content-justification-center"><!-- wp:button {"width":50,"style":{"spacing":{"padding":{"top":"16px","bottom":"16px"}}},"className":"is-style-fill","fontSize":"tiny","fontFamily":"base"} -->
			<div class="wp-block-button has-custom-width wp-block-button__width-50 has-custom-font-size is-style-fill has-base-font-family has-tiny-font-size"><a class="wp-block-button__link" href="#" style="padding-top:16px;padding-bottom:16px">' . __( 'TRAVEL', 'ona' ) . '</a></div>
			<!-- /wp:button --></div>
			<!-- /wp:buttons --></div></div>
			<!-- /wp:cover -->

			<!-- wp:spacer {"height":20} -->
			<div style="height:20px" aria-hidden="true" class="wp-block-spacer"></div>
			<!-- /wp:spacer --></div>
			<!-- /wp:column -->

			<!-- wp:column -->
			<div class="wp-block-column"><!-- wp:cover {"url":"' . esc_url( get_theme_file_uri( 'assets/img/ona_promo_box_4.jpg' ) ) . '","id":50,"dimRatio":0,"contentPosition":"center center","isDark":false,"className":"hover-scale"} -->
			<div class="wp-block-cover is-light hover-scale"><span aria-hidden="true" class="has-background-dim-0 wp-block-cover__gradient-background has-background-dim"></span><img class="wp-block-cover__image-background wp-image-50" alt="ona_promo_box_4" src="' . esc_url( get_theme_file_uri( 'assets/img/ona_promo_box_4.jpg' ) ) . '" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:buttons {"contentJustification":"center"} -->
			<div class="wp-block-buttons is-content-justification-center"><!-- wp:button {"width":50,"style":{"spacing":{"padding":{"top":"16px","bottom":"16px"}}},"className":"is-style-fill","fontSize":"tiny","fontFamily":"base"} -->
			<div class="wp-block-button has-custom-width wp-block-button__width-50 has-custom-font-size is-style-fill has-base-font-family has-tiny-font-size"><a class="wp-block-button__link" href="#" style="padding-top:16px;padding-bottom:16px">' . __( 'STORIES', 'ona' ) . '</a></div>
			<!-- /wp:button --></div>
			<!-- /wp:buttons --></div></div>
			<!-- /wp:cover --></div>
			<!-- /wp:column --></div>
			<!-- /wp:columns --></div>
			<!-- /wp:group -->',
);



