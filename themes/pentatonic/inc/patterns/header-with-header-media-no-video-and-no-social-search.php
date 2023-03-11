<?php
/**
 * Header With Header Media No Video And No Social Search
 */
return array(
	'title'      => esc_html__( 'Header With Header Media No Video And No Social Search', 'pentatonic' ),
	'categories' => array( 'pentatonic', 'header' ),
	'content'    => '<!-- wp:cover {"url":"' . esc_url( get_theme_file_uri( '/assets/images/header-media-bg.jpg' ) ) . '","align":"full","dimRatio":0,"className":"wp-block-custom-header-media-with-title-and-nav wp-block-section wp-block-no-padding"} -->
<div class="wp-block-cover alignfull wp-block-section wp-block-custom-header-media-with-title-and-nav wp-block-no-padding"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim""></span><img
        class="wp-block-cover__image-background" alt=""
        src="' . esc_url( get_theme_file_uri( '/assets/images/header-media-bg.jpg' ) ) . '" data-object-fit="cover" /><div class="wp-block-cover__inner-container">

<!-- wp:group {"className":"social-and-toggle-search","align":"wide","layout":{"inherit":true}} -->
<div class="wp-block-group alignwide social-and-toggle-search">
    <!-- wp:group {"align":"wide","className":"wp-block-main-header","layout":{"inherit":true}} -->
    <div class="wp-block-group alignwide wp-block-main-header">
        <!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"bottom":"var(--wp--custom--spacing--extra-small)","top":"var(--wp--custom--spacing--extra-small)"}}},"className":"wp-block-main-header-container","layout":{"type":"flex","justifyContent":"space-between"}} -->
        <div class="wp-block-group alignwide wp-block-main-header-container"
            style="padding-top:var(--wp--custom--spacing--extra-small);padding-bottom:var(--wp--custom--spacing--extra-small)">
            <!-- wp:group {"style":{"spacing":{"blockGap":"15px"}},"layout":{"type":"flex"}} -->
            <div class="wp-block-group">
                <!-- wp:site-logo {"width":64,"shouldSyncIcon":false} /-->

                <!-- wp:group -->
                <div class="wp-block-group">
                    <!-- wp:site-title /-->

                    <!-- wp:site-tagline {"style":{"spacing":{"margin":{"top":"4px"}}}} /-->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:group -->

            <!-- wp:navigation {"layout":{"type":"flex","setCascadingProperties":true,"justifyContent":"right"}} /-->
        </div>
        <!-- /wp:group -->
    </div>
    <!-- /wp:group -->
</div>
<!-- /wp:group -->

<!-- wp:group {"align":"wide","layout":{"inherit":true}} -->
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
