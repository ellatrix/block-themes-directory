<?php
/**
 * About Us
 */
return array(
	'title'      => esc_html__( 'Hero Content', 'lensation' ),
	'categories' => array( 'lensation', 'featured' ),
	// 'blockTypes' => array( 'core/template-part/footer' ),
	'content'    => '<!-- wp:group {"align":"full","className":"wp-block-section hero-content","layout":{"inherit":true}} -->
	<div class="wp-block-group alignfull wp-block-section hero-content"><!-- wp:columns {"verticalAlignment":"center","align":"wide","className":"about-us-columns"} -->
	<div class="wp-block-columns alignwide are-vertically-aligned-center about-us-columns"><!-- wp:column {"verticalAlignment":"center"} -->
	<div class="wp-block-column is-vertically-aligned-center"><!-- wp:media-text {"mediaId":7465,"mediaLink":"#","mediaType":"image","mediaWidth":40} -->
	<div class="wp-block-media-text alignwide is-stacked-on-mobile" style="grid-template-columns:40% auto"><figure class="wp-block-media-text__media"><img src="' . get_parent_theme_file_uri( '/assets/images/hero-content.jpg' ) . '" alt="" class="wp-image-7465 size-full"/></figure><div class="wp-block-media-text__content"><!-- wp:group {"className":"wp-block-group-heading"} -->
	<div class="wp-block-group wp-block-group-heading"><!-- wp:heading {"level":6,"className":"section-tagline"} -->
	<h6 class="section-tagline">' . esc_html__( 'Hero Content', 'lensation' ) . '</h6>
	<!-- /wp:heading -->
	
	<!-- wp:heading {"style":{"typography":{"fontStyle":"normal","fontWeight":"900"}}} -->
	<h2 style="font-style:normal;font-weight:900">' . esc_html__( 'Another Planet', 'lensation' ) . '</h2>
	<!-- /wp:heading --></div>
	<!-- /wp:group -->
	
	<!-- wp:paragraph -->
	<p>' . esc_html__( 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam elementum tempor lorem. Donec quam nibh, consequat sed tincidunt nec, feugiat ut lacus. Quisque eu velit a nunc vehicula luctus.', 'lensation' ) . '</p>
	<!-- /wp:paragraph -->
	
	<!-- wp:buttons -->
	<div class="wp-block-buttons"><!-- wp:button {"className":"is-style-outline"} -->
	<div class="wp-block-button is-style-outline"><a class="wp-block-button__link">' . esc_html__( 'Get Started', 'lensation' ) . '</a></div>
	<!-- /wp:button --></div>
	<!-- /wp:buttons --></div></div>
	<!-- /wp:media-text --></div>
	<!-- /wp:column --></div>
	<!-- /wp:columns --></div>
	<!-- /wp:group -->',
);

