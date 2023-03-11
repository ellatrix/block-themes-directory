<?php
/**
 * Header Media
 */
return array(
	'title'      => esc_html__( 'Header Media', 'pentatonic' ),
	'categories' => array( 'pentatonic', 'header' ),
	// 'blockTypes' => array( 'core/template-part/footer' ),
	'content'    => '<!-- wp:cover {"align":"full","className":"wp-block-custom-header-media wp-block-section wp-block-no-padding"} -->
<div class="wp-block-cover alignfull wp-block-section wp-block-custom-header-media wp-block-no-padding"><span aria-hidden="true" class="has-background-dim-100 wp-block-cover__gradient-background has-background-dim"></span><div class="wp-block-cover__inner-container"><!-- wp:group {"align":"wide","layout":{"inherit":true}} -->
<div class="wp-block-group alignwide"><!-- wp:media-text {"mediaType":"image"} -->
<div class="wp-block-media-text alignwide is-stacked-on-mobile"><figure class="wp-block-media-text__media"><img src="' . esc_url( get_theme_file_uri( '/assets/images/header-media.png' ) ) . '" alt=""/></figure><div class="wp-block-media-text__content"><!-- wp:heading {"level":6,"style":{"typography":{"textTransform":"uppercase"}},"className":"has-text-link-color has-text-color"} -->
<h6 class="has-body-text-color has-text-color" style="text-transform:uppercase">' . esc_html__( 'Music Demo', 'pentatonic' ) . '</h6>
<!-- /wp:heading -->

<!-- wp:heading {"textColor":"foreground","fontSize":"huge","style":{"typography":{"lineHeight":"1.2"}}} -->
<h2 class="has-foreground-color has-text-color has-huge-font-size" style="line-height:1.2">' . esc_html__( 'Rock Music Podcast', 'pentatonic' ) . '</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"placeholder":"","textColor":"body-text"} -->
<p class="has-body-text-color has-text-color">' . esc_html__( 'A Professional theme libraries for Musicians or Bands.', 'pentatonic' ) . '</p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"style":{"spacing":{"margin":{"top":"14px"}}}} -->
<div class="wp-block-buttons" style="margin-top:14px"><!-- wp:button -->
<div class="wp-block-button"><a class="wp-block-button__link">' . esc_html__( 'Get Started', 'pentatonic' ) . '</a></div>
<!-- /wp:button -->
</div>
<!-- /wp:buttons --></div></div>
<!-- /wp:media-text --></div>
<!-- /wp:group --></div></div>
<!-- /wp:cover -->',
);
