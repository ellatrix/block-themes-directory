<?php
/**
 * Featured Content
 */
return array(
	'title'      => esc_html__( 'Featured Content', 'pentatonic' ),
	'categories' => array( 'pentatonic', 'featured' ),
	// 'blockTypes' => array( 'core/template-part/footer' ),
	'content'    => '<!-- wp:group {"align":"full","className":"wp-block-section wp-block-feature-content-section","layout":{"inherit":true}} -->
<div class="wp-block-group alignfull wp-block-section wp-block-feature-content-section"><!-- wp:group {"align":"wide","className":"wp-block-group-heading"} -->
<div class="wp-block-group alignwide wp-block-group-heading"><!-- wp:heading {"level":6,"style":{"typography":{"textTransform":"uppercase"}},"textColor":"has-body-text-color","className":"has-body-text-color"} -->
<h6 class="has-body-text-color has-has-body-text-color-color has-text-color" style="text-transform:uppercase">' . esc_html__( 'Tagline', 'pentatonic' ) . '</h6>
<!-- /wp:heading -->

<!-- wp:heading -->
    <h2>' . esc_html__( 'Featured Content', 'pentatonic' ) . '</h2>
<!-- /wp:heading -->
</div>
<!-- /wp:group -->

<!-- wp:columns {"align":"wide","className":"featured-content-columns"} -->
<div class="wp-block-columns alignwide featured-content-columns"><!-- wp:column -->
<div class="wp-block-column"><!-- wp:group {"className":"wp-block-pentatonic-featured-content"} -->
<div class="wp-block-group wp-block-pentatonic-featured-content"><!-- wp:image {"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="' . get_parent_theme_file_uri( '/assets/images/featured-post-1.jpg' ) . '" alt="" class=""/></figure>
<!-- /wp:image -->

<!-- wp:heading {"fontSize":"content-heading"}  -->
<h2 class="has-content-heading-font-size">' . esc_html__( 'Custom Onboarding Strategy: A Guide to Class', 'pentatonic' ) . '</h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>' . esc_html__( 'Lorem ipsum dolor sit amet consecte tur adipiscing elit integer fermentum in orci lorem ipsum.', 'pentatonic' ) . '</p>
<!-- /wp:paragraph -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {className":"is-style-button"} -->
<div class="wp-block-button is-style-button"><a class="wp-block-button__link">' . esc_html__( 'Read More', 'pentatonic' ) . '</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:group {"className":"wp-block-pentatonic-featured-content"} -->
<div class="wp-block-group wp-block-pentatonic-featured-content"><!-- wp:image {"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="' . get_parent_theme_file_uri( '/assets/images/featured-post-2.jpg' ) . '" alt="" class=""/></figure>
<!-- /wp:image -->

<!-- wp:heading {"fontSize":"content-heading"} -->
<h2 class="has-content-heading-font-size">' . esc_html__( 'How Investing in Self-Dependent Increase Business', 'pentatonic' ) . '</h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>' . esc_html__( 'Lorem ipsum dolor sit amet consecte tur adipiscing elit integer fermentum in orci lorem ipsum.', 'pentatonic' ) . '</p>
<!-- /wp:paragraph -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"className":"is-style-button"} -->
<div class="wp-block-button is-style-button"><a class="wp-block-button__link">' . esc_html__( 'Read More', 'pentatonic' ) . '</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:group {"className":"wp-block-pentatonic-featured-content"} -->
<div class="wp-block-group wp-block-pentatonic-featured-content"><!-- wp:image {"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="' . get_parent_theme_file_uri( '/assets/images/featured-post-3.jpg' ) . '" alt="" class=""/></figure>
<!-- /wp:image -->

<!-- wp:heading {"fontSize":"content-heading"}  -->
<h2 class="has-content-heading-font-size">' . esc_html__( '7 Productivity Tips to Avoid Burnout When Working', 'pentatonic' ) . '</h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>' . esc_html__( 'Lorem ipsum dolor sit amet consecte tur adipiscing elit integer fermentum in orci lorem ipsum.', 'pentatonic' ) . '</p>
<!-- /wp:paragraph -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"className":"is-style-button"} -->
<div class="wp-block-button is-style-button"><a class="wp-block-button__link">' . esc_html__( 'Read More', 'pentatonic' ) . '</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->',
);
