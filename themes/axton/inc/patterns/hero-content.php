<?php
/**
 * About Us
 */
return array(
	'title'      => esc_html__( 'Hero Content', 'axton' ),
	'categories' => array( 'axton', 'featured' ),
	// 'blockTypes' => array( 'core/template-part/footer' ),
	'content'    => '<!-- wp:group {"align":"full","className":"wp-block-section","layout":{"inherit":true}} -->
	<div class="wp-block-group alignfull wp-block-section"><!-- wp:columns {"verticalAlignment":"center","align":"wide","className":"about-us-columns"} -->
	<div class="wp-block-columns alignwide are-vertically-aligned-center about-us-columns"><!-- wp:column {"verticalAlignment":"center"} -->
	<div class="wp-block-column is-vertically-aligned-center"><!-- wp:media-text {"mediaId":7465,"mediaLink":"#","mediaType":"image","mediaWidth":46.85} -->
	<div class="wp-block-media-text alignwide is-stacked-on-mobile" style="grid-template-columns:46.85% auto"><figure class="wp-block-media-text__media"><img src="' . get_parent_theme_file_uri( '/assets/images/hero-content.jpg' ) . '" alt="" class="wp-image-7465 size-full"/></figure><div class="wp-block-media-text__content"><!-- wp:heading {"level":6,"style":{"typography":{"textTransform":"uppercase"}},"textColor":"foreground","className":"section-tagline"} -->
	<h6 class="section-tagline has-foreground-color has-text-color" style="text-transform:uppercase">' . esc_html__( 'Hero Content', 'axton' ) . '</h6>
	<!-- /wp:heading -->
	
	<!-- wp:heading {"style":{"typography":{"fontStyle":"normal","fontWeight":"400"}}} -->
	<h2 style="font-style:normal;font-weight:400">' . esc_html__( 'Less is more', 'axton' ) . '</h2>
	<!-- /wp:heading -->
	
	<!-- wp:paragraph -->
	<p>' . esc_html__( 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam elementum tempor lorem. Donec quam nibh, consequat sed tincidunt nec, feugiat ut lacus. Quisque eu velit a nunc vehicula luctus.', 'axton' ) . '</p>
	<!-- /wp:paragraph -->
	
	<!-- wp:buttons -->
	<div class="wp-block-buttons"><!-- wp:button {"className":"is-style-outline"} -->
	<div class="wp-block-button is-style-outline"><a class="wp-block-button__link">REad More</a></div>
	<!-- /wp:button --></div>
	<!-- /wp:buttons --></div></div>
	<!-- /wp:media-text --></div>
	<!-- /wp:column --></div>
	<!-- /wp:columns --></div>
	<!-- /wp:group -->',
);

