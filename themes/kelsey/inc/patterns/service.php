<?php
/**
 * Service
 */
return array(
	'title'      => esc_html__( 'Services', 'kelsey' ),
	'categories' => array( 'kelsey', 'featured', 'pages' ),
	// 'blockTypes' => array( 'core/template-part/footer' ),
	'content'    => '<!-- wp:group {"align":"full","className":"wp-block-section","layout":{"inherit":true}} -->
	<div class="wp-block-group alignfull wp-block-section">
		
		<!-- wp:columns {"align":"wide","className":"service-columns"} -->
		<div class="wp-block-columns alignwide service-columns"><!-- wp:column -->
		<div class="wp-block-column"><!-- wp:group {"className":"wp-block-kelsey-service"} -->
		<div class="wp-block-group wp-block-kelsey-service"><!-- wp:image {"sizeSlug":"full","linkDestination":"none"} -->
		<figure class="wp-block-image size-full"><img src="' . esc_url( get_theme_file_uri( '/assets/images/icon-1.png' ) ) . '" alt=""/></figure>
		<!-- /wp:image -->
		
		<!-- wp:heading {"style":{"typography":{"lineHeight":"1.75"}},"fontSize":"content-heading"} -->
		<h2 class="has-content-heading-font-size" style="line-height:1.75">' . esc_html__( 'UI/UX Design', 'kelsey' ) . '</h2>
		<!-- /wp:heading -->
		
		<!-- wp:paragraph -->
		<p>' . esc_html__( 'Make your photos look brilliant in today’s article we present tips on how to use colored …', 'kelsey' ) . '</p>
		<!-- /wp:paragraph --></div>
		<!-- /wp:group -->
		
		<!-- wp:buttons -->
		<div class="wp-block-buttons"><!-- wp:button {"className":"is-style-kelsey-button"} -->
		<div class="wp-block-button is-style-kelsey-button"><a class="wp-block-button__link">' . esc_html__( 'Read more', 'kelsey' ) . '</a></div>
		<!-- /wp:button --></div>
		<!-- /wp:buttons --></div>
		<!-- /wp:column -->
		
		<!-- wp:column -->
		<div class="wp-block-column"><!-- wp:group {"className":"wp-block-kelsey-service"} -->
		<div class="wp-block-group wp-block-kelsey-service"><!-- wp:image {"sizeSlug":"full","linkDestination":"none"} -->
		<figure class="wp-block-image size-full"><img src="' . esc_url( get_theme_file_uri( '/assets/images/icon-2.png' ) ) . '" alt=""/></figure>
		<!-- /wp:image -->
		
		<!-- wp:heading {"style":{"typography":{"lineHeight":"1.75"}},"fontSize":"content-heading"} -->
		<h2 class="has-content-heading-font-size" style="line-height:1.75">' . esc_html__( 'Branding', 'kelsey' ) . '</h2>
		<!-- /wp:heading -->
		
		<!-- wp:paragraph -->
		<p>' . esc_html__( 'Make your photos look brilliant in today’s article we present tips on how to use colored …', 'kelsey' ) . '</p>
		<!-- /wp:paragraph -->
		
		<!-- wp:buttons -->
		<div class="wp-block-buttons"><!-- wp:button {"className":"is-style-kelsey-button"} -->
		<div class="wp-block-button is-style-kelsey-button"><a class="wp-block-button__link">' . esc_html__( 'Read more', 'kelsey' ) . '</a></div>
		<!-- /wp:button --></div>
		<!-- /wp:buttons --></div>
		<!-- /wp:group --></div>
		<!-- /wp:column -->
		
		<!-- wp:column -->
		<div class="wp-block-column"><!-- wp:group {"className":"wp-block-kelsey-service"} -->
		<div class="wp-block-group wp-block-kelsey-service"><!-- wp:image {"sizeSlug":"full","linkDestination":"none"} -->
		<figure class="wp-block-image size-full"><img src="' . esc_url( get_theme_file_uri( '/assets/images/icon-3.png' ) ) . '" alt=""/></figure>
		<!-- /wp:image -->
		
		<!-- wp:heading {"style":{"typography":{"lineHeight":"1.75"}},"fontSize":"content-heading"} -->
		<h2 class="has-content-heading-font-size" style="line-height:1.75">' . esc_html__( 'E-Commerce', 'kelsey' ) . '</h2>
		<!-- /wp:heading -->
		
		<!-- wp:paragraph -->
		<p>' . esc_html__( 'Make your photos look brilliant in today’s article we present tips on how to use colored …', 'kelsey' ) . '</p>
		<!-- /wp:paragraph -->
		
		<!-- wp:buttons -->
		<div class="wp-block-buttons"><!-- wp:button {"className":"is-style-kelsey-button"} -->
		<div class="wp-block-button is-style-kelsey-button"><a class="wp-block-button__link">' . esc_html__( 'Read more', 'kelsey' ) . '</a></div>
		<!-- /wp:button --></div>
		<!-- /wp:buttons --></div>
		<!-- /wp:group --></div>
		<!-- /wp:column --></div>
		<!-- /wp:columns --></div>
		<!-- /wp:group -->',
);
