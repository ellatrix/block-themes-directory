<?php
/**
 * Register block patterns.
 * Include this file in your theme, and update image paths, prefix and text domain.
 *
 * @link https://developer.wordpress.org/block-editor/developers/block-api/block-patterns/
 * @author         CyberChimps
 * @copyright      Copyright (c) 2021, CyberChimps
 * @license        license.txt
 * @package Responsive_FSE
 */

/**
 * Make sure that block patterns are enabled before registering.
 * Requires WordPress version 5.5 or Gutenberg version 7.8.
 */
if ( function_exists( 'register_block_pattern' ) ) {

	/**
	 * Check if the register_block_pattern_category exists.
	 * Requires WordPress 5.5 or Gutenberg version 8.2.
	 */
	if ( function_exists( 'register_block_pattern_category' ) ) {
		register_block_pattern_category(
			'responsive-fse-template-parts',
			array( 'label' => __( 'Responsive-FSE - Template Parts', 'responsive-fse' ) )
		);
		register_block_pattern_category(
			'responsive-fse-design',
			array( 'label' => __( 'Responsive-FSE - Design', 'responsive-fse' ) )
		);
		register_block_pattern_category(
			'responsive-fse-blog',
			array( 'label' => __( 'Responsive-FSE - Blog', 'responsive-fse' ) )
		);
	}

	/**
	 * Sidebar block patern
	 */
	register_block_pattern(
		'responsive-fse/content-sidebar',
		array(
			'title'         => __( 'Sidebar', 'responsive-fse' ),
			'categories'    => array( 'responsive-fse-template-parts' ),
			'keywords'      => array( 'sidebar', 'front-page sidebar' ),
			'viewportWidth' => 1440,
			'content'       => '<!-- wp:group {"className":"sidebar is-style-align-full"} -->
								<div class="wp-block-group sidebar is-style-align-full">
									<!-- wp:template-part {"slug":"sidebar","theme":"responsive-fse"} /-->
								</div>
								<!-- /wp:group -->',
		)
	);

	/**
	 * Post template
	 */
	$pattern_block_query_template = '<div class="wp-block-query">
										<!-- wp:column {"className":"post-content"} -->
										<div class="wp-block-column post-content">
											<!-- wp:post-template -->
											<!-- wp:post-title {"isLink":true,"style":{"color":{"link":"var:preset|color|primary"}},"fontSize":"large"} /-->

											<!-- wp:post-featured-image {"isLink":true} /-->

											<!-- wp:columns -->
											<div class="wp-block-columns">
												<!-- wp:column {"width":"100%","className":"post-meta-block"} -->
												<div class="wp-block-column post-meta-block" style="flex-basis:100%">
													<!-- wp:columns -->
													<div class="wp-block-columns">
														<!-- wp:column -->
														<div class="wp-block-column">
															<!-- wp:post-author {"showAvatar":false,"byline":"by","style":{"color":{"text":"#999999"}},"className":"is-style-with-icon","fontSize":"small"} /-->
														</div>
														<!-- /wp:column -->

														<!-- wp:column -->
														<div class="wp-block-column">
															<!-- wp:post-date {"textAlign":"left","style":{"color":{"text":"#999999"}},"className":"is-style-with-icon","fontSize":"small"} /-->
														</div>
														<!-- /wp:column -->

														<!-- wp:column -->
														<div class="wp-block-column">
															<!-- wp:post-comments-count {"style":{"color":{"text":"#999999"}},"className":"is-style-with-icon","fontSize":"small"} /-->
														</div>
														<!-- /wp:column -->
													</div>
													<!-- /wp:columns -->

													<!-- wp:post-terms {"term":"category","className":"is-style-with-icon"} /-->

													<!-- wp:spacer {"height":7} -->
													<div style="height:7px" aria-hidden="true" class="wp-block-spacer"></div>
													<!-- /wp:spacer -->

													<!-- wp:post-terms {"term":"post_tag","className":"is-style-with-icon"} /-->
												</div>
												<!-- /wp:column -->
											</div>
											<!-- /wp:columns -->

											<!-- wp:post-excerpt {"moreText":"Read more..."} /-->
											<!-- /wp:post-template -->

											<!-- wp:query-pagination -->
											<div class="wp-block-query-pagination">
												<!-- wp:query-pagination-previous /-->

												<!-- wp:query-pagination-numbers /-->

												<!-- wp:query-pagination-next /-->
											</div>
											<!-- /wp:query-pagination -->
										</div>
										<!-- /wp:column -->
									</div>';
	/**
	 * Latest posts block
	 */
	register_block_pattern(
		'responsive-fse/latest-posts-blog-column',
		array(
			'title'         => __( 'Latest Posts', 'responsive-fse' ),
			'categories'    => array( 'responsive-fse-blog' ),
			'keywords'      => array( 'blog', 'latest posts blog' ),
			'viewportWidth' => 1440,
			'content'       => '<!-- wp:query {"queryId":6,"query":{"perPage":10,"pages":0,"offset":0,"postType":"post","categoryIds":[],"tagIds":[],"order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":true},"displayLayout":{"type":"list"}} -->
									' . $pattern_block_query_template . '
								<!-- /wp:query -->',
		)
	);


	/**
	 * Latest posts block
	 */
	register_block_pattern(
		'responsive-fse/latest-posts-2-columns',
		array(
			'title'         => __( 'Latest Posts in 2 columns', 'responsive-fse' ),
			'categories'    => array( 'responsive-fse-blog' ),
			'keywords'      => array( 'blogs', 'latest posts blog' ),
			'viewportWidth' => 1440,
			'content'       => '<!-- wp:query {"query":{"perPage":4,"pages":0,"offset":0,"postType":"post","categoryIds":[],"tagIds":[],"order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":true},"displayLayout":{"type":"flex","columns":2}} -->
									' . $pattern_block_query_template . '
								<!-- /wp:query -->',
		)
	);
	register_block_pattern(
		'responsive-fse/latest-posts-3-columns',
		array(
			'title'         => __( 'Latest Posts in 3 columns', 'responsive-fse' ),
			'categories'    => array( 'responsive-fse-blog' ),
			'keywords'      => array( 'blog' ),
			'viewportWidth' => 1440,
			'content'       => '<!-- wp:query {"queryId":5,"query":{"perPage":4,"pages":0,"offset":0,"postType":"post","categoryIds":[],"tagIds":[],"order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":true},"displayLayout":{"type":"flex","columns":3}} -->
									' . $pattern_block_query_template . '
								<!-- /wp:query -->',
		)
	);

	/**
	 * Transparent Header block patern
	 */
	register_block_pattern(
		'responsive-fse/header-transparent',
		array(
			'title'         => __( 'Transparent Header', 'responsive-fse' ),
			'categories'    => array( 'responsive-fse-template-parts' ),
			'keywords'      => array( 'header', 'transparent' ),
			'viewportWidth' => 1440,
			'content'       => '<!-- wp:group {"className":"site-header is-style-tranparent-header"} -->
								<div class="wp-block-group site-header is-style-tranparent-header"><!-- wp:columns {"className":"header-main"} -->
								<div class="wp-block-columns header-main"><!-- wp:column {"width":"33.33%","className":"site-branding"} -->
								<div class="wp-block-column site-branding" style="flex-basis:33.33%"><!-- wp:site-title {"textAlign":"left","style":{"color":{"link":"var:preset|color|light"},"elements":{"link":{"color":{"text":"var:preset|color|light"}}}},"fontSize":"medium"} /--></div>
								<!-- /wp:column -->
								
								<!-- wp:column {"className":"main-menu-toggle"} -->
								<div class="wp-block-column main-menu-toggle"><!-- wp:html -->
								<button class="menu-toggle" aria-controls="top-menu" aria-expanded="false">
																					<svg class="icon icon-menu" aria-hidden="true" role="img"></svg>
																					<svg class="icon icon-close" aria-hidden="true" role="img"></svg>
																					<span class="menu-toggle-text">Menu</span>
																				</button>
								<!-- /wp:html --></div>
								<!-- /wp:column -->
								
								<!-- wp:column {"width":"66.66%","className":"primary-navigation"} -->
								<div class="wp-block-column primary-navigation" style="flex-basis:66.66%"><!-- wp:navigation {"orientation":"horizontal","textColor":"white","itemsJustification":"right","style":{"typography":{"fontStyle":"normal","fontWeight":"600"}},"className":"main-navigation"} -->
								<!-- wp:navigation-link {"label":"Home","type":"page","url":"/","title":"Home"} /-->
								
								<!-- wp:navigation-link {"label":"Services","url":"/services","title":"Services"} /-->
								
								<!-- wp:navigation-link {"label":"About","url":"/about","title":"About"} /-->
								
								<!-- wp:navigation-link {"label":"Blog","url":"/blog","title":"Blog"} /-->
								<!-- /wp:navigation --></div>
								<!-- /wp:column --></div>
								<!-- /wp:columns --></div>
								<!-- /wp:group -->',
		)
	);

	/**
	 * Sticky Header block patern
	 */
	register_block_pattern(
		'responsive-fse/header-sticky',
		array(
			'title'         => __( 'Sticky Header', 'responsive-fse' ),
			'categories'    => array( 'responsive-fse-template-parts' ),
			'keywords'      => array( 'sticky', 'transparent' ),
			'viewportWidth' => 1440,
			'content'       => '<!-- wp:template-part {"slug":"header","theme":"responsive-fse","tagName":"header","className":"is-style-sticky-header"} /-->',
		)
	);


	/**
	 * Contact Information block patern
	 */
	register_block_pattern(
		'responsive-fse/contact-information',
		array(
			'title'         => esc_html__( 'Contact Information', 'responsive-fse' ),
			'categories'    => array( 'responsive-fse-template-parts' ),
			'keywords'      => array( 'template', 'contact', 'information' ),
			'viewportWidth' => 1440,
			'description'   => esc_html_x( 'A block with 3 columns that display contact information and social media links.', 'Block pattern description', 'responsive-fse' ),
			'content'       => '<!-- wp:columns {"align":"wide"} -->
								<div class="wp-block-columns alignwide"><!-- wp:column -->
								<div class="wp-block-column"><!-- wp:paragraph {"align":"center"} -->
								<p class="has-text-align-center"><a href="mailto:#">example@example.com<br></a>123-456-7890</p>
								<!-- /wp:paragraph --></div>
								<!-- /wp:column -->
								
								<!-- wp:column -->
								<div class="wp-block-column"><!-- wp:paragraph {"align":"center"} -->
								<p class="has-text-align-center">123 Main Street<br>Cambridge, MA, 02139</p>
								<!-- /wp:paragraph --></div>
								<!-- /wp:column -->
								
								<!-- wp:column {"verticalAlignment":"center"} -->
								<div class="wp-block-column is-vertically-aligned-center"><!-- wp:social-links {"align":"center","className":"is-style-default"} -->
								<ul class="wp-block-social-links aligncenter items-justified-center is-style-default"><!-- wp:social-link {"url":"https://wordpress.org","service":"wordpress"} /-->
								
								<!-- wp:social-link {"url":"https://www.facebook.com/WordPress/","service":"facebook"} /-->
								
								<!-- wp:social-link {"url":"https://twitter.com/WordPress","service":"twitter"} /-->
								
								<!-- wp:social-link {"service":"instagram"} /-->
								
								<!-- wp:social-link {"service":"linkedin"} /-->
								
								<!-- wp:social-link {"service":"youtube"} /-->
								
								<!-- wp:social-link {"url":"https://www.youtube.com/wordpress","service":"youtube"} /--></ul>
								<!-- /wp:social-links --></div>
								<!-- /wp:column --></div>
								<!-- /wp:columns -->',
		)
	);

	/**
	 * Call now button
	 */
	$call_now_content = '<!-- wp:group {"style":{"spacing":{"padding":{"top":"5px"}}},"className":"is-style-align-full","layout":{"inherit":true}} -->
<div class="wp-block-group is-style-align-full" style="padding-top:5px">
    <!-- wp:buttons -->
    <div class="wp-block-buttons">
        <!-- wp:button {"backgroundColor":"white","textColor":"grey-20","style":{"typography":{"fontSize":"17px"}},"className":"is-style-call-now"} -->
        <div class="wp-block-button has-custom-font-size is-style-call-now" style="font-size:17px"><a
                class="wp-block-button__link has-grey-20-color has-white-background-color has-text-color has-background"
                href="tel:+6281332767">(+62) 81 332 767</a></div>
        <!-- /wp:button -->
    </div>
    <!-- /wp:buttons -->
</div>
<!-- /wp:group -->';

	register_block_pattern(
		'responsive-fse/call-now',
		array(
			'title'      => __( 'Call Now Button', 'responsive-fse' ),
			'categories' => array( 'responsive-fse-design' ),
			'keywords'   => array( 'Call', 'contact' ),
			'content'    => $call_now_content,
		)
	);

	/**
	 * Service Patter
	 */
	$services_pattern_content = '<!-- wp:cover {"overlayColor":"whisper","style":{"spacing":{"padding":{"top":"70px","bottom":"70px","right":"0px","left":"0px"}}}} -->
										<div class="wp-block-cover has-whisper-background-color has-background-dim"
											style="padding-top:70px;padding-right:0px;padding-bottom:70px;padding-left:0px">
											<div class="wp-block-cover__inner-container">
												<!-- wp:paragraph {"align":"center","style":{"color":{"text":"#f9636b"},"typography":{"lineHeight":"1.6"}},"fontSize":"normal"} -->
												<p class="has-text-align-center has-text-color has-normal-font-size" style="color:#f9636b;line-height:1.6">Our Services</p>
												<!-- /wp:paragraph -->

												<!-- wp:heading {"textAlign":"center","style":{"typography":{"fontSize":"50px","fontWeight":"600","lineHeight":"1"}},"textColor":"dark"} -->
												<h2 class="has-text-align-center has-dark-color has-text-color"
													style="font-size:50px;font-weight:600;line-height:1">What We Do</h2>
												<!-- /wp:heading -->

												<!-- wp:paragraph {"align":"center","style":{"typography":{"lineHeight":"1.6"},"color":{"text":"#000000"}},"fontSize":"normal"} -->
												<p class="has-text-align-center has-text-color has-normal-font-size" style="color:#000000;line-height:1.6">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
												<!-- /wp:paragraph -->

												<!-- wp:spacer {"height":20} -->
												<div style="height:20px" aria-hidden="true" class="wp-block-spacer"></div>
												<!-- /wp:spacer -->

												<!-- wp:columns -->
												<div class="wp-block-columns">
													<!-- wp:column {"style":{"spacing":{"padding":{"top":"29px","right":"20px","bottom":"0px","left":"20px"}}},"backgroundColor":"white"} -->
													<div class="wp-block-column has-white-background-color has-background"
														style="padding-top:29px;padding-right:20px;padding-bottom:0px;padding-left:20px">
														<!-- wp:media-text {"mediaId":18,"mediaLink":"' . esc_url( get_theme_file_uri( 'assets/images/corpicon2.png' ) ) . '","mediaType":"image","mediaWidth":23,"verticalAlignment":"center"} -->
														<div class="wp-block-media-text alignwide is-stacked-on-mobile is-vertically-aligned-center"
															style="grid-template-columns:23% auto">
															<figure class="wp-block-media-text__media"><img
																	src="' . esc_url( get_theme_file_uri( 'assets/images/corpicon2.png' ) ) . '" alt=""
																	class="wp-image-18 size-full" /></figure>
															<div class="wp-block-media-text__content">
																<!-- wp:heading {"style":{"typography":{"lineHeight":"1","fontWeight":"700"}},"textColor":"dark","fontSize":"medium"} -->
																<h2 class="has-dark-color has-text-color has-medium-font-size"
																	style="font-weight:700;line-height:1">Brand Strategy</h2>
																<!-- /wp:heading -->

																<!-- wp:paragraph {"style":{"typography":{"lineHeight":1.6}},"textColor":"dark","fontSize":"normal"} -->
																<p class="has-dark-color has-text-color has-normal-font-size" style="line-height:1.6">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum.</p>
																<!-- /wp:paragraph -->
															</div>
														</div>
														<!-- /wp:media-text -->
													</div>
													<!-- /wp:column -->

													<!-- wp:column {"style":{"spacing":{"padding":{"top":"29px","right":"20px","bottom":"0px","left":"20px"}}},"backgroundColor":"white"} -->
													<div class="wp-block-column has-white-background-color has-background"
														style="padding-top:29px;padding-right:20px;padding-bottom:0px;padding-left:20px">
														<!-- wp:media-text {"mediaId":36,"mediaLink":"' . esc_url( get_theme_file_uri( 'assets/images/corpicon3.png' ) ) . '","mediaType":"image","mediaWidth":23,"verticalAlignment":"center"} -->
														<div class="wp-block-media-text alignwide is-stacked-on-mobile is-vertically-aligned-center"
															style="grid-template-columns:23% auto">
															<figure class="wp-block-media-text__media"><img
																	src="' . esc_url( get_theme_file_uri( 'assets/images/corpicon3.png' ) ) . '" alt=""
																	class="wp-image-36 size-full" /></figure>
															<div class="wp-block-media-text__content">
																<!-- wp:heading {"style":{"typography":{"lineHeight":"1","fontWeight":"700"}},"textColor":"dark","fontSize":"medium"} -->
																<h2 class="has-dark-color has-text-color has-medium-font-size"
																	style="font-weight:700;line-height:1">Modern Design</h2>
																<!-- /wp:heading -->

																<!-- wp:paragraph {"style":{"typography":{"lineHeight":1.6}},"textColor":"dark","fontSize":"normal"} -->
																<p class="has-dark-color has-text-color has-normal-font-size" style="line-height:1.6">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum.</p>
																<!-- /wp:paragraph -->
															</div>
														</div>
														<!-- /wp:media-text -->
													</div>
													<!-- /wp:column -->
												</div>
												<!-- /wp:columns -->

												<!-- wp:columns -->
												<div class="wp-block-columns">
													<!-- wp:column {"style":{"spacing":{"padding":{"top":"29px","right":"20px","bottom":"0px","left":"20px"}}},"backgroundColor":"white"} -->
													<div class="wp-block-column has-white-background-color has-background"
														style="padding-top:29px;padding-right:20px;padding-bottom:0px;padding-left:20px">
														<!-- wp:media-text {"mediaId":37,"mediaLink":"' . esc_url( get_theme_file_uri( 'assets/images/corpicon4.png' ) ) . '","mediaType":"image","mediaWidth":23,"verticalAlignment":"center"} -->
														<div class="wp-block-media-text alignwide is-stacked-on-mobile is-vertically-aligned-center"
															style="grid-template-columns:23% auto">
															<figure class="wp-block-media-text__media"><img
																	src="' . esc_url( get_theme_file_uri( 'assets/images/corpicon4.png' ) ) . '" alt=""
																	class="wp-image-37 size-full" /></figure>
															<div class="wp-block-media-text__content">
																<!-- wp:heading {"style":{"typography":{"lineHeight":"1","fontWeight":"700"}},"textColor":"dark","fontSize":"medium"} -->
																<h2 class="has-dark-color has-text-color has-medium-font-size"
																	style="font-weight:700;line-height:1">Security Data</h2>
																<!-- /wp:heading -->

																<!-- wp:paragraph {"style":{"typography":{"lineHeight":1.6}},"textColor":"dark","fontSize":"normal"} -->
																<p class="has-dark-color has-text-color has-normal-font-size" style="line-height:1.6">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum.</p>
																<!-- /wp:paragraph -->
															</div>
														</div>
														<!-- /wp:media-text -->
													</div>
													<!-- /wp:column -->

													<!-- wp:column {"style":{"spacing":{"padding":{"top":"29px","right":"20px","bottom":"0px","left":"20px"}}},"backgroundColor":"white"} -->
													<div class="wp-block-column has-white-background-color has-background"
														style="padding-top:29px;padding-right:20px;padding-bottom:0px;padding-left:20px">
														<!-- wp:media-text {"mediaId":38,"mediaLink":"' . esc_url( get_theme_file_uri( 'assets/images/corpicon6.png' ) ) . '","mediaType":"image","mediaWidth":23,"verticalAlignment":"center"} -->
														<div class="wp-block-media-text alignwide is-stacked-on-mobile is-vertically-aligned-center"
															style="grid-template-columns:23% auto">
															<figure class="wp-block-media-text__media"><img
																	src="' . esc_url( get_theme_file_uri( 'assets/images/corpicon6.png' ) ) . '" alt=""
																	class="wp-image-38 size-full" /></figure>
															<div class="wp-block-media-text__content">
																<!-- wp:heading {"style":{"typography":{"lineHeight":"1","fontWeight":"700"}},"textColor":"dark","fontSize":"medium"} -->
																<h2 class="has-dark-color has-text-color has-medium-font-size"
																	style="font-weight:700;line-height:1">Data Analysis</h2>
																<!-- /wp:heading -->

																<!-- wp:paragraph {"style":{"typography":{"lineHeight":1.6}},"textColor":"dark","fontSize":"normal"} -->
																<p class="has-dark-color has-text-color has-normal-font-size" style="line-height:1.6">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum.</p>
																<!-- /wp:paragraph -->
															</div>
														</div>
														<!-- /wp:media-text -->
													</div>
													<!-- /wp:column -->
												</div>
												<!-- /wp:columns -->

												<!-- wp:columns -->
												<div class="wp-block-columns">
													<!-- wp:column {"style":{"spacing":{"padding":{"top":"29px","right":"20px","bottom":"0px","left":"20px"}}},"backgroundColor":"white"} -->
													<div class="wp-block-column has-white-background-color has-background"
														style="padding-top:29px;padding-right:20px;padding-bottom:0px;padding-left:20px">
														<!-- wp:media-text {"mediaId":39,"mediaLink":"' . esc_url( get_theme_file_uri( 'assets/images/corpicon5.png' ) ) . '","mediaType":"image","mediaWidth":23,"verticalAlignment":"center"} -->
														<div class="wp-block-media-text alignwide is-stacked-on-mobile is-vertically-aligned-center"
															style="grid-template-columns:23% auto">
															<figure class="wp-block-media-text__media"><img
																	src="' . esc_url( get_theme_file_uri( 'assets/images/corpicon5.png' ) ) . '" alt=""
																	class="wp-image-39 size-full" /></figure>
															<div class="wp-block-media-text__content">
																<!-- wp:heading {"style":{"typography":{"lineHeight":"1","fontWeight":"700"}},"textColor":"dark","fontSize":"medium"} -->
																<h2 class="has-dark-color has-text-color has-medium-font-size"
																	style="font-weight:700;line-height:1">SEO Optimization</h2>
																<!-- /wp:heading -->

																<!-- wp:paragraph {"style":{"typography":{"lineHeight":1.6}},"textColor":"dark","fontSize":"normal"} -->
																<p class="has-dark-color has-text-color has-normal-font-size" style="line-height:1.6">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum.</p>
																<!-- /wp:paragraph -->
															</div>
														</div>
														<!-- /wp:media-text -->
													</div>
													<!-- /wp:column -->

													<!-- wp:column {"style":{"spacing":{"padding":{"top":"29px","right":"20px","bottom":"0px","left":"20px"}}},"backgroundColor":"white"} -->
													<div class="wp-block-column has-white-background-color has-background"
														style="padding-top:29px;padding-right:20px;padding-bottom:0px;padding-left:20px">
														<!-- wp:media-text {"mediaId":40,"mediaLink":"' . esc_url( get_theme_file_uri( 'assets/images/corpicon1.png' ) ) . '","mediaType":"image","mediaWidth":23,"verticalAlignment":"center"} -->
														<div class="wp-block-media-text alignwide is-stacked-on-mobile is-vertically-aligned-center"
															style="grid-template-columns:23% auto">
															<figure class="wp-block-media-text__media"><img
																	src="' . esc_url( get_theme_file_uri( 'assets/images/corpicon1.png' ) ) . '" alt=""
																	class="wp-image-40 size-full" /></figure>
															<div class="wp-block-media-text__content">
																<!-- wp:heading {"style":{"typography":{"lineHeight":"1","fontWeight":"700"}},"textColor":"dark","fontSize":"medium"} -->
																<h2 class="has-dark-color has-text-color has-medium-font-size"
																	style="font-weight:700;line-height:1">Best Marketing</h2>
																<!-- /wp:heading -->

																<!-- wp:paragraph {"style":{"typography":{"lineHeight":1.6}},"textColor":"dark","fontSize":"normal"} -->
																<p class="has-dark-color has-text-color has-normal-font-size" style="line-height:1.6">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum.</p>
																<!-- /wp:paragraph -->
															</div>
														</div>
														<!-- /wp:media-text -->
													</div>
													<!-- /wp:column -->
												</div>
												<!-- /wp:columns -->
											</div>
										</div>
										<!-- /wp:cover -->';


	register_block_pattern(
		'responsive-fse/our-services',
		array(
			'title'      => __( 'Our Services', 'responsive-fse' ),
			'categories' => array( 'responsive-fse-design' ),
			'keywords'   => array( 'services' ),
			'content'    => $services_pattern_content,
		)
	);

	/**
	 * Video Text & Button Pattern
	 */
	$video_text_button_content = '<!-- wp:cover {"overlayColor":"whisper","style":{"spacing":{"padding":{"top":"70px","bottom":"70px","right":"0px","left":"0px"}}}} -->
								<div class="wp-block-cover has-whisper-background-color has-background-dim"
									style="padding-top:70px;padding-right:0px;padding-bottom:70px;padding-left:0px">
									<div class="wp-block-cover__inner-container">
										<!-- wp:columns {"verticalAlignment":"top"} -->
										<div class="wp-block-columns are-vertically-aligned-top">
											<!-- wp:column {"verticalAlignment":"top"} -->
											<div class="wp-block-column is-vertically-aligned-top">
												<!-- wp:embed {"url":"https://youtu.be/Gs-h74Qnrlw","type":"video","providerNameSlug":"youtube","responsive":true,"className":"wp-embed-aspect-16-9 wp-has-aspect-ratio"} -->
												<figure
													class="wp-block-embed is-type-video is-provider-youtube wp-block-embed-youtube wp-embed-aspect-16-9 wp-has-aspect-ratio">
													<div class="wp-block-embed__wrapper">
														https://youtu.be/Gs-h74Qnrlw
													</div>
												</figure>
												<!-- /wp:embed -->
											</div>
											<!-- /wp:column -->

											<!-- wp:column {"verticalAlignment":"top"} -->
											<div class="wp-block-column is-vertically-aligned-top">
												<!-- wp:heading {"style":{"typography":{"fontSize":"32px","fontWeight":"700","lineHeight":"1"},"color":{"text":"#111111"}}} -->
												<h2 class="has-text-color" style="color:#111111;font-size:32px;font-weight:700;line-height:1">Meet Our
													Experts</h2>
												<!-- /wp:heading -->

												<!-- wp:paragraph {"style":{"typography":{"lineHeight":"1.6"},"color":{"text":"#333333"}},"fontSize":"normal"} -->
												<p class="has-text-color has-normal-font-size" style="color:#333333;line-height:1.6">Lorem ipsum dolor
													sit amet, consectetur adipiscing elit, empor incididunt ut labore et dolore magna aliqua.Lorem ipsum
													dolor sit amet, consectet.incididunt ut labore et dolore magnaincididunt ut labore et dolore magna
													aliqua.Lorem ipsum dolor sit amet, consectet.incididunt ut labore et dolore magna aliqua.Lorem ipsum
													dolor sit amet, consectet. incididunt ut labore et dolore magna aliqua.Lorem ipsum dolor sit amet,
													consectet. Lorem ipsum dolor sit amet, consectetur adipiscing elit, empor incididunt ut labore et
													Lorem ipsum dolor sit amet,</p>
												<!-- /wp:paragraph -->

												<!-- wp:buttons -->
												<div class="wp-block-buttons">
													<!-- wp:button {"style":{"color":{"background":"#3c63ae"},"border":{"radius":"5px"},"spacing":{"padding":{"top":"15px","bottom":"15px","left":"30px","right":"30px"}},"typography":{"fontSize":"18px"}}} -->
													<div class="wp-block-button has-custom-font-size" style="font-size:18px"><a
															class="wp-block-button__link has-background"
															style="border-radius:5px;background-color:#3c63ae;padding-top:15px;padding-right:30px;padding-bottom:15px;padding-left:30px">Learn
															More</a></div>
													<!-- /wp:button -->
												</div>
												<!-- /wp:buttons -->
											</div>
											<!-- /wp:column -->
										</div>
										<!-- /wp:columns -->
									</div>
								</div>
								<!-- /wp:cover -->';
	register_block_pattern(
		'responsive-fse/video-text-button',
		array(
			'title'      => __( 'Video with text & button', 'responsive-fse' ),
			'categories' => array( 'responsive-fse-design' ),
			'keywords'   => array( 'video', 'text', 'button' ),
			'content'    => $video_text_button_content,
		)
	);

	/**
	 * Team Pattern
	 */
	$team_pattern_content = '<!-- wp:cover {"overlayColor":"whisper","style":{"spacing":{"padding":{"top":"70px","bottom":"70px","right":"0px","left":"0px"}}}} -->
	<div class="wp-block-cover has-whisper-background-color has-background-dim"
		style="padding-top:70px;padding-right:0px;padding-bottom:70px;padding-left:0px">
		<div class="wp-block-cover__inner-container">
			<!-- wp:paragraph {"align":"center","style":{"color":{"text":"#f9636b"},"typography":{"lineHeight":"1.6"}},"fontSize":"normal"} -->
			<p class="has-text-align-center has-text-color has-normal-font-size" style="color:#f9636b;line-height:1.6">Who
				we are</p>
			<!-- /wp:paragraph -->
	
			<!-- wp:heading {"textAlign":"center","style":{"typography":{"fontSize":"50px","fontWeight":"600","lineHeight":"1"}},"textColor":"dark"} -->
			<h2 class="has-text-align-center has-dark-color has-text-color"
				style="font-size:50px;font-weight:600;line-height:1">Our Team</h2>
			<!-- /wp:heading -->
	
			<!-- wp:spacer {"height":50} -->
			<div style="height:50px" aria-hidden="true" class="wp-block-spacer"></div>
			<!-- /wp:spacer -->
	
			<!-- wp:columns {"verticalAlignment":"top"} -->
			<div class="wp-block-columns are-vertically-aligned-top">
				<!-- wp:column {"verticalAlignment":"top"} -->
				<div class="wp-block-column is-vertically-aligned-top">
					<!-- wp:image {"align":"center","id":108,"sizeSlug":"full","linkDestination":"none","className":"is-style-rounded"} -->
					<div class="wp-block-image is-style-rounded">
						<figure class="aligncenter size-full"><img
								src="' . esc_url( get_theme_file_uri( 'assets/images/team1.jpg' ) ) . '" alt=""
								class="wp-image-108" /></figure>
					</div>
					<!-- /wp:image -->
	
					<!-- wp:heading {"textAlign":"center","style":{"typography":{"fontWeight":"500","lineHeight":"1"},"color":{"text":"#333333"}},"fontSize":"normal"} -->
					<h2 class="has-text-align-center has-text-color has-normal-font-size"
						style="color:#333333;font-weight:500;line-height:1">JOHN DOE</h2>
					<!-- /wp:heading -->
	
					<!-- wp:spacer {"height":20} -->
					<div style="height:20px" aria-hidden="true" class="wp-block-spacer"></div>
					<!-- /wp:spacer -->
	
					<!-- wp:heading {"textAlign":"center","style":{"typography":{"fontWeight":"500","lineHeight":"1"},"color":{"text":"#7a7a7a"}},"fontSize":"normal"} -->
					<h2 class="has-text-align-center has-text-color has-normal-font-size"
						style="color:#7a7a7a;font-weight:500;line-height:1">Web Developer</h2>
					<!-- /wp:heading -->
	
					<!-- wp:social-links {"customIconColor":"#73ac52","iconColorValue":"#73ac52","size":"has-normal-icon-size","align":"center","className":"is-style-logos-only","layout":{"type":"flex"}} -->
					<ul class="wp-block-social-links aligncenter has-normal-icon-size has-icon-color is-style-logos-only">
						<!-- wp:social-link {"url":"#","service":"facebook"} /-->
	
						<!-- wp:social-link {"url":"#","service":"twitter"} /-->
	
						<!-- wp:social-link {"url":"#","service":"mail"} /-->
					</ul>
					<!-- /wp:social-links -->
				</div>
				<!-- /wp:column -->
	
				<!-- wp:column {"verticalAlignment":"top"} -->
				<div class="wp-block-column is-vertically-aligned-top">
					<!-- wp:image {"align":"center","id":109,"sizeSlug":"full","linkDestination":"none","className":"is-style-rounded"} -->
					<div class="wp-block-image is-style-rounded">
						<figure class="aligncenter size-full"><img
								src="' . esc_url( get_theme_file_uri( 'assets/images/team2.jpg' ) ) . '" alt=""
								class="wp-image-109" /></figure>
					</div>
					<!-- /wp:image -->
	
					<!-- wp:heading {"textAlign":"center","style":{"typography":{"fontWeight":"500","lineHeight":"1"},"color":{"text":"#333333"}},"fontSize":"normal"} -->
					<h2 class="has-text-align-center has-text-color has-normal-font-size"
						style="color:#333333;font-weight:500;line-height:1">JANE DOE</h2>
					<!-- /wp:heading -->
	
					<!-- wp:spacer {"height":20} -->
					<div style="height:20px" aria-hidden="true" class="wp-block-spacer"></div>
					<!-- /wp:spacer -->
	
					<!-- wp:heading {"textAlign":"center","style":{"typography":{"fontWeight":"500","lineHeight":"1"},"color":{"text":"#7a7a7a"}},"fontSize":"normal"} -->
					<h2 class="has-text-align-center has-text-color has-normal-font-size"
						style="color:#7a7a7a;font-weight:500;line-height:1">Sr. Tester</h2>
					<!-- /wp:heading -->
	
					<!-- wp:social-links {"customIconColor":"#73ac52","iconColorValue":"#73ac52","size":"has-normal-icon-size","align":"center","className":"is-style-logos-only","layout":{"type":"flex"}} -->
					<ul class="wp-block-social-links aligncenter has-normal-icon-size has-icon-color is-style-logos-only">
						<!-- wp:social-link {"url":"#","service":"facebook"} /-->
	
						<!-- wp:social-link {"url":"#","service":"twitter"} /-->
	
						<!-- wp:social-link {"url":"#","service":"mail"} /-->
					</ul>
					<!-- /wp:social-links -->
				</div>
				<!-- /wp:column -->
	
				<!-- wp:column {"verticalAlignment":"top"} -->
				<div class="wp-block-column is-vertically-aligned-top">
					<!-- wp:image {"align":"center","id":110,"sizeSlug":"full","linkDestination":"none","className":"is-style-rounded"} -->
					<div class="wp-block-image is-style-rounded">
						<figure class="aligncenter size-full"><img
								src="' . esc_url( get_theme_file_uri( 'assets/images/team3.jpg' ) ) . '" alt=""
								class="wp-image-110" /></figure>
					</div>
					<!-- /wp:image -->
	
					<!-- wp:heading {"textAlign":"center","style":{"typography":{"fontWeight":"500","lineHeight":"1"},"color":{"text":"#333333"}},"fontSize":"normal"} -->
					<h2 class="has-text-align-center has-text-color has-normal-font-size"
						style="color:#333333;font-weight:500;line-height:1">RICHARD SMITH</h2>
					<!-- /wp:heading -->
	
					<!-- wp:spacer {"height":20} -->
					<div style="height:20px" aria-hidden="true" class="wp-block-spacer"></div>
					<!-- /wp:spacer -->
	
					<!-- wp:heading {"textAlign":"center","style":{"typography":{"fontWeight":"500","lineHeight":"1"},"color":{"text":"#7a7a7a"}},"fontSize":"normal"} -->
					<h2 class="has-text-align-center has-text-color has-normal-font-size"
						style="color:#7a7a7a;font-weight:500;line-height:1">Marketing Executive</h2>
					<!-- /wp:heading -->
	
					<!-- wp:social-links {"customIconColor":"#73ac52","iconColorValue":"#73ac52","size":"has-normal-icon-size","align":"center","className":"is-style-logos-only","layout":{"type":"flex"}} -->
					<ul class="wp-block-social-links aligncenter has-normal-icon-size has-icon-color is-style-logos-only">
						<!-- wp:social-link {"url":"#","service":"facebook"} /-->
	
						<!-- wp:social-link {"url":"#","service":"twitter"} /-->
	
						<!-- wp:social-link {"url":"#","service":"mail"} /-->
					</ul>
					<!-- /wp:social-links -->
				</div>
				<!-- /wp:column -->
	
				<!-- wp:column {"verticalAlignment":"top"} -->
				<div class="wp-block-column is-vertically-aligned-top">
					<!-- wp:image {"align":"center","id":111,"sizeSlug":"full","linkDestination":"none","className":"is-style-rounded"} -->
					<div class="wp-block-image is-style-rounded">
						<figure class="aligncenter size-full"><img
								src="' . esc_url( get_theme_file_uri( 'assets/images/team4.jpg' ) ) . '" alt=""
								class="wp-image-111" /></figure>
					</div>
					<!-- /wp:image -->
	
					<!-- wp:heading {"textAlign":"center","style":{"typography":{"fontWeight":"500","lineHeight":"1"},"color":{"text":"#333333"}},"fontSize":"normal"} -->
					<h2 class="has-text-align-center has-text-color has-normal-font-size"
						style="color:#333333;font-weight:500;line-height:1">REAL JONES</h2>
					<!-- /wp:heading -->
	
					<!-- wp:spacer {"height":20} -->
					<div style="height:20px" aria-hidden="true" class="wp-block-spacer"></div>
					<!-- /wp:spacer -->
	
					<!-- wp:heading {"textAlign":"center","style":{"typography":{"fontWeight":"500","lineHeight":"1"},"color":{"text":"#7a7a7a"}},"fontSize":"normal"} -->
					<h2 class="has-text-align-center has-text-color has-normal-font-size"
						style="color:#7a7a7a;font-weight:500;line-height:1">Team Leader</h2>
					<!-- /wp:heading -->
	
					<!-- wp:social-links {"customIconColor":"#73ac52","iconColorValue":"#73ac52","size":"has-normal-icon-size","align":"center","className":"is-style-logos-only","layout":{"type":"flex"}} -->
					<ul class="wp-block-social-links aligncenter has-normal-icon-size has-icon-color is-style-logos-only">
						<!-- wp:social-link {"url":"#","service":"facebook"} /-->
	
						<!-- wp:social-link {"url":"#","service":"twitter"} /-->
	
						<!-- wp:social-link {"url":"#","service":"mail"} /-->
					</ul>
					<!-- /wp:social-links -->
				</div>
				<!-- /wp:column -->
			</div>
			<!-- /wp:columns -->
		</div>
	</div>
	<!-- /wp:cover -->';

	register_block_pattern(
		'responsive-fse/team-pattern',
		array(
			'title'      => __( 'Team', 'responsive-fse' ),
			'categories' => array( 'responsive-fse-design' ),
			'keywords'   => array( 'team' ),
			'content'    => $team_pattern_content,
		)
	);

	/**
	 * Portfolio Pattern
	 */
	$portfolio_pattern_content = '<!-- wp:cover {"overlayColor":"whisper","style":{"spacing":{"padding":{"top":"70px","bottom":"70px","right":"0px","left":"0px"}}}} -->
	<div class="wp-block-cover has-whisper-background-color has-background-dim"
		style="padding-top:70px;padding-right:0px;padding-bottom:70px;padding-left:0px">
		<div class="wp-block-cover__inner-container">
			<!-- wp:paragraph {"align":"center","style":{"color":{"text":"#f9636b"},"typography":{"lineHeight":"1.6"}},"fontSize":"normal"} -->
			<p class="has-text-align-center has-text-color has-normal-font-size" style="color:#f9636b;line-height:1.6">
				Portfolio</p>
			<!-- /wp:paragraph -->
	
			<!-- wp:heading {"textAlign":"center","style":{"typography":{"fontSize":"50px","fontWeight":"600","lineHeight":"1"}},"textColor":"dark"} -->
			<h2 class="has-text-align-center has-dark-color has-text-color"
				style="font-size:50px;font-weight:600;line-height:1">Latest Work</h2>
			<!-- /wp:heading -->
	
			<!-- wp:spacer {"height":20} -->
			<div style="height:20px" aria-hidden="true" class="wp-block-spacer"></div>
			<!-- /wp:spacer -->
	
			<!-- wp:gallery {"ids":[100,101,102,103,105,106],"linkTo":"file"} -->
			<figure class="wp-block-gallery columns-3 is-cropped">
				<ul class="blocks-gallery-grid">
					<li class="blocks-gallery-item">
						<figure><a href="' . esc_url( get_theme_file_uri( 'assets/images/portfolio1.jpg' ) ) . '"><img
									src="' . esc_url( get_theme_file_uri( 'assets/images/portfolio1.jpg' ) ) . '" alt=""
									data-id="100"
									data-full-url="' . esc_url( get_theme_file_uri( 'assets/images/portfolio1.jpg' ) ) . '"
									data-link="http://one.wordpress.test/sample-page/portfolio1/"
									class="wp-image-100" /></a></figure>
					</li>
					<li class="blocks-gallery-item">
						<figure><a href="' . esc_url( get_theme_file_uri( 'assets/images/portfolio2.jpg' ) ) . '"><img
									src="' . esc_url( get_theme_file_uri( 'assets/images/portfolio2.jpg' ) ) . '" alt=""
									data-id="101"
									data-full-url="' . esc_url( get_theme_file_uri( 'assets/images/portfolio2.jpg' ) ) . '"
									data-link="http://one.wordpress.test/sample-page/portfolio2/"
									class="wp-image-101" /></a></figure>
					</li>
					<li class="blocks-gallery-item">
						<figure><a href="' . esc_url( get_theme_file_uri( 'assets/images/portfolio3.jpg' ) ) . '"><img
									src="' . esc_url( get_theme_file_uri( 'assets/images/portfolio3.jpg' ) ) . '" alt=""
									data-id="102"
									data-full-url="' . esc_url( get_theme_file_uri( 'assets/images/portfolio3.jpg' ) ) . '"
									data-link="http://one.wordpress.test/sample-page/portfolio3/"
									class="wp-image-102" /></a></figure>
					</li>
					<li class="blocks-gallery-item">
						<figure><a href="' . esc_url( get_theme_file_uri( 'assets/images/portfolio4.jpg' ) ) . '"><img
									src="' . esc_url( get_theme_file_uri( 'assets/images/portfolio4.jpg' ) ) . '" alt=""
									data-id="103"
									data-full-url="' . esc_url( get_theme_file_uri( 'assets/images/portfolio4.jpg' ) ) . '"
									data-link="http://one.wordpress.test/sample-page/portfolio4/"
									class="wp-image-103" /></a></figure>
					</li>
					<li class="blocks-gallery-item">
						<figure><a href="' . esc_url( get_theme_file_uri( 'assets/images/portfolio5.jpg' ) ) . '"><img
									src="' . esc_url( get_theme_file_uri( 'assets/images/portfolio5.jpg' ) ) . '" alt=""
									data-id="105"
									data-full-url="' . esc_url( get_theme_file_uri( 'assets/images/portfolio5.jpg' ) ) . '"
									data-link="http://one.wordpress.test/sample-page/portfolio5/"
									class="wp-image-105" /></a></figure>
					</li>
					<li class="blocks-gallery-item">
						<figure><a href="' . esc_url( get_theme_file_uri( 'assets/images/portfolio6.jpg' ) ) . '"><img
									src="' . esc_url( get_theme_file_uri( 'assets/images/portfolio6.jpg' ) ) . '" alt=""
									data-id="106"
									data-full-url="' . esc_url( get_theme_file_uri( 'assets/images/portfolio6.jpg' ) ) . '"
									data-link="http://one.wordpress.test/sample-page/portfolio6/"
									class="wp-image-106" /></a></figure>
					</li>
				</ul>
			</figure>
			<!-- /wp:gallery -->
		</div>
	</div>
	<!-- /wp:cover -->';

	register_block_pattern(
		'responsive-fse/portfolio-pattern',
		array(
			'title'      => __( 'Portfolio', 'responsive-fse' ),
			'categories' => array( 'responsive-fse-design' ),
			'keywords'   => array( 'portfolio' ),
			'content'    => $portfolio_pattern_content,
		)
	);

}
