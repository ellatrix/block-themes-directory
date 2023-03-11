<?php
/**
 * About Us
 */
return array(
	'title'      => esc_html__( 'About Us', 'catch-fse' ),
	'categories' => array( 'catch-fse', 'featured', 'pages' ),
	// 'blockTypes' => array( 'core/template-part/footer' ),
	'content'    => '<!-- wp:group {"align":"full","className":"wp-block-section","layout":{"inherit":true}} -->
<div class="wp-block-group alignfull wp-block-section"><!-- wp:media-text {"mediaId":1841,"mediaLink":"' . get_parent_theme_file_uri( '/assets/images/hero-content.png' ) . '","mediaType":"image"} -->
<div class="wp-block-media-text alignwide is-stacked-on-mobile"><figure class="wp-block-media-text__media"><img src="' . get_parent_theme_file_uri( '/assets/images/hero-content.png' ) . '" alt="" class="wp-image-1841 size-full"/></figure><div class="wp-block-media-text__content"><!-- wp:heading {"level":6,"style":{"typography":{"textTransform":"uppercase"}},"className":"has-text-link-color has-text-color"} -->
<h6 class="has-text-link-color has-text-color" style="text-transform:uppercase">' . esc_html__( 'About Us', 'catch-fse' ) . '</h6>
<!-- /wp:heading -->

<!-- wp:heading {"style":{"typography":{"fontStyle":"normal","fontWeight":"400"}}} -->
    <h2 style="font-style:normal;font-weight:400">' . esc_html__( 'Fresh ideas for every business', 'catch-fse' ) . '</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"textColor":"foreground","fontSize":"content-heading"} -->
<p class="has-foreground-color has-text-color has-content-heading-font-size">' . esc_html__( 'Blocks is a creative template that specializes in strategy creativity.', 'catch-fse' ) . '</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p>' . esc_html__( 'Lorem ipsum dolor sit amet, consectetur  Integer pretium condimentum tristique aenean luctus mauris lorem ipsum dolor sit amet consectetur.', 'catch-fse' ) . '</p>
<!-- /wp:paragraph -->
<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button -->
<div class="wp-block-button"><a class="wp-block-button__link">' . esc_html__( 'Get started', 'catch-fse' ) . '</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div></div>
<!-- /wp:media-text --></div>
<!-- /wp:group -->',
);
