<?php
/**
 * Featured Content
 */
return array(
	'title'      => esc_html__( 'Featured Content', 'catch-fse' ),
	'categories' => array( 'catch-fse', 'featured' ),
	// 'blockTypes' => array( 'core/template-part/footer' ),
	'content'    => '<!-- wp:group {"align":"full","className":"wp-block-section","layout":{"inherit":true}} -->
<div class="wp-block-group alignfull wp-block-section"><!-- wp:group {"className":"wp-block-group-heading"} -->
<div class="wp-block-group wp-block-group-heading"><!-- wp:heading {"textAlign":"center","level":6,"style":{"typography":{"textTransform":"uppercase"}},"textColor":"text-link"} -->
<h6 class="has-text-align-center has-text-link-color has-text-color" style="text-transform:uppercase">' . esc_html__( 'Tagline', 'catch-fse' ) . '</h6>
<!-- /wp:heading -->

<!-- wp:heading {"textAlign":"center","style":{"typography":{"fontStyle":"normal","fontWeight":"400"}}} -->
    <h2 class="has-text-align-center" style="font-style:normal;font-weight:400">' . esc_html__( 'Featured Content', 'catch-fse' ) . '</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center"} -->
<p class="has-text-align-center">' . esc_html__( 'Subtitle', 'catch-fse' ) . '</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:columns {"align":"wide","className":"featured-content-columns"} -->
<div class="wp-block-columns alignwide featured-content-columns"><!-- wp:column -->
<div class="wp-block-column"><!-- wp:group {"className":"wp-block-catch-fse-featured-content"} -->
<div class="wp-block-group wp-block-catch-fse-featured-content"><!-- wp:image {"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="' . get_parent_theme_file_uri( '/assets/images/featured-post-1.jpg' ) . '" alt="" class=""/></figure>
<!-- /wp:image -->

<!-- wp:heading {"fontSize":"content-heading"}  -->
<h2 class="has-content-heading-font-size">' . esc_html__( 'Custom Onboarding Strategy: A Guide to Class', 'catch-fse' ) . '</h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>' . esc_html__( 'Lorem ipsum dolor sit amet consecte tur adipiscing elit integer fermentum in orci lorem ipsum.', 'catch-fse' ) . '</p>
<!-- /wp:paragraph -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {className":"is-style-catch-fse-button"} -->
<div class="wp-block-button is-style-catch-fse-button"><a class="wp-block-button__link">' . esc_html__( 'Read More', 'catch-fse' ) . '</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:group {"className":"wp-block-catch-fse-featured-content"} -->
<div class="wp-block-group wp-block-catch-fse-featured-content"><!-- wp:image {"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="' . get_parent_theme_file_uri( '/assets/images/featured-post-2.jpg' ) . '" alt="" class=""/></figure>
<!-- /wp:image -->

<!-- wp:heading {"fontSize":"content-heading"} -->
<h2 class="has-content-heading-font-size">' . esc_html__( 'How Investing in Self-Dependent Increase Business', 'catch-fse' ) . '</h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>' . esc_html__( 'Lorem ipsum dolor sit amet consecte tur adipiscing elit integer fermentum in orci lorem ipsum.', 'catch-fse' ) . '</p>
<!-- /wp:paragraph -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"className":"is-style-catch-fse-button"} -->
<div class="wp-block-button is-style-catch-fse-button"><a class="wp-block-button__link">' . esc_html__( 'Read More', 'catch-fse' ) . '</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:group {"className":"wp-block-catch-fse-featured-content"} -->
<div class="wp-block-group wp-block-catch-fse-featured-content"><!-- wp:image {"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="' . get_parent_theme_file_uri( '/assets/images/featured-post-3.jpg' ) . '" alt="" class=""/></figure>
<!-- /wp:image -->

<!-- wp:heading {"fontSize":"content-heading"}  -->
<h2 class="has-content-heading-font-size">' . esc_html__( '7 Productivity Tips to Avoid Burnout When Working', 'catch-fse' ) . '</h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>' . esc_html__( 'Lorem ipsum dolor sit amet consecte tur adipiscing elit integer fermentum in orci lorem ipsum.', 'catch-fse' ) . '</p>
<!-- /wp:paragraph -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"className":"is-style-catch-fse-button"} -->
<div class="wp-block-button is-style-catch-fse-button"><a class="wp-block-button__link">' . esc_html__( 'Read More', 'catch-fse' ) . '</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->',
);
