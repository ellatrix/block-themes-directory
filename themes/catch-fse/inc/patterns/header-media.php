<?php
/**
 * Header Media
 */
return array(
	'title'      => esc_html__( 'Header Media', 'catch-fse' ),
	'categories' => array( 'catch-fse', 'featured' ),
	// 'blockTypes' => array( 'core/template-part/footer' ),
	'content'    => '<!-- wp:cover {"align":"full","className":"wp-block-custom-header-media wp-block-section wp-block-no-padding"} -->
<div class="wp-block-cover alignfull wp-block-section wp-block-custom-header-media wp-block-no-padding"><span aria-hidden="true" class="has-background-dim-100 wp-block-cover__gradient-background has-background-dim"></span><div class="wp-block-cover__inner-container"><!-- wp:group {"align":"wide","layout":{"inherit":true}} -->
<div class="wp-block-group alignwide"><!-- wp:media-text {"mediaPosition":"right","mediaType":"image"} -->
<div class="wp-block-media-text alignwide has-media-on-the-right is-stacked-on-mobile"><figure class="wp-block-media-text__media"><img src="' . esc_url( get_theme_file_uri( '/assets/images/header-media.png' ) ) . '" alt=""/></figure><div class="wp-block-media-text__content"><!-- wp:heading {"textColor":"foreground","fontSize":"huge"} -->
<h2 class="has-foreground-color has-text-color has-huge-font-size">' . esc_html__( 'Build beautiful websites faster.', 'catch-fse' ) . '</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"placeholder":"","textColor":"foreground"} -->
<p class="has-foreground-color has-text-color">' . esc_html__( 'A professional theme libraries for Individual or Business.', 'catch-fse' ) . '</p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"style":{"spacing":{"margin":{"top":"14px"}}}} -->
<div class="wp-block-buttons" style="margin-top:14px"><!-- wp:button -->
<div class="wp-block-button"><a class="wp-block-button__link">' . esc_html__( 'Get Started', 'catch-fse' ) . '</a></div>
<!-- /wp:button -->
</div>
<!-- /wp:buttons --></div></div>
<!-- /wp:media-text --></div>
<!-- /wp:group --></div></div>
<!-- /wp:cover -->',
);
