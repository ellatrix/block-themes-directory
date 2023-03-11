<?php
/**
 * Block Patterns
 *
 * @link https://developer.wordpress.org/reference/functions/register_block_pattern/
 * @link https://developer.wordpress.org/reference/functions/register_block_pattern_category/
 *
 * @package Hansen
 */

register_block_pattern_category(
	'hansen-design',
	array( 'label' => __( 'Hansen - Design', 'hansen' ) )
);

register_block_pattern_category(
	'hansen-blog',
	array( 'label' => __( 'Hansen - Blog', 'hansen' ) )
);

register_block_pattern_category(
	'hansen-template-parts',
	array( 'label' => __( 'Hansen - Template Parts', 'hansen' ) )
);

register_block_pattern(
	'hansen-template-parts/header',
	array(
		'title'         => __( 'Header (dark)', 'hansen' ),
		'categories'    => array( 'hansen-template-parts' ),
		'keywords'		=> array( 'template' ),
		'viewportWidth' => 1440,
		'content'       => '<!-- wp:group {"align":"full","layout":{"inherit":true},"backgroundColor":"dark","textColor":"light","className":"site-header"} -->
<div class="wp-block-group alignfull has-light-color has-dark-background-color has-text-color has-background site-header">

	<!-- wp:group {"align":"wide","className":"site-header-inner"} -->
	<div class="wp-block-group alignwide site-header-inner">

		<!-- wp:columns {"verticalAlignment":"center","isStackedOnMobile":false,"className":"is-style-no-spacing"} -->
		<div class="wp-block-columns are-vertically-aligned-center is-not-stacked-on-mobile is-style-no-spacing"><!-- wp:column {"verticalAlignment":"center"} -->
		<div class="wp-block-column is-vertically-aligned-center"><!-- wp:site-logo /-->
		<!-- wp:site-title /-->
		<!-- wp:site-tagline /--></div>
		<!-- /wp:column -->

		<!-- wp:column {"verticalAlignment":"center"} -->
		<div class="wp-block-column is-vertically-aligned-center"><!-- wp:navigation {"orientation":"horizontal","itemsJustification":"right","isResponsive":true,"overlayBackgroundColor":"light","overlayTextColor":"dark"} /--></div><!-- /wp:column --></div><!-- /wp:columns --></div><!-- /wp:group -->
</div>
<!-- /wp:group -->',
	)
);

register_block_pattern(
	'hansen-template-parts/header-light',
	array(
		'title'         => __( 'Header (light)', 'hansen' ),
		'categories'    => array( 'hansen-template-parts' ),
		'keywords'		=> array( 'template' ),
		'viewportWidth' => 1440,
		'content'       => '<!-- wp:group {"align":"full","layout":{"inherit":true},"backgroundColor":"light","textColor":"black","className":"site-header"} -->
<div class="wp-block-group alignfull has-black-color has-light-background-color has-text-color has-background site-header">

	<!-- wp:group {"align":"wide","className":"site-header-inner"} -->
	<div class="wp-block-group alignwide site-header-inner">

		<!-- wp:columns {"verticalAlignment":"center","isStackedOnMobile":false,"className":"is-style-no-spacing"} -->
		<div class="wp-block-columns are-vertically-aligned-center is-not-stacked-on-mobile is-style-no-spacing"><!-- wp:column {"verticalAlignment":"center"} -->
		<div class="wp-block-column is-vertically-aligned-center"><!-- wp:site-logo /-->
		<!-- wp:site-title {"style":{"color":{"link":"var:preset|color|blue"}}} /-->
		<!-- wp:site-tagline /--></div>
		<!-- /wp:column -->

		<!-- wp:column {"verticalAlignment":"center"} -->
		<div class="wp-block-column is-vertically-aligned-center"><!-- wp:navigation {"orientation":"horizontal","itemsJustification":"right","isResponsive":true,"overlayBackgroundColor":"dark","overlayTextColor":"light"} /--></div><!-- /wp:column --></div><!-- /wp:columns --></div><!-- /wp:group -->
</div>
<!-- /wp:group -->',
	)
);

register_block_pattern(
	'hansen-blog/latest-posts-style-1',
	array(
		'title'         => __( 'Latest Posts - Style 1', 'hansen' ),
		'blockTypes'    => array( 'core/query' ),
		'categories'    => array( 'hansen-blog', 'query' ),
		'keywords'		=> array( 'blog', 'query' ),
		'viewportWidth' => 1440,
		'content'       => '<!-- wp:query {"queryId":1,"query":{"offset":0,"perPage":6,"postType":"post","categoryIds":[],"tagIds":[],"order":"desc","orderBy":"date","author":"","search":"","sticky":"","inherit":false},"displayLayout":{"type":"flex","columns":2}} -->
<div class="wp-block-query"><!-- wp:post-template -->
<!-- wp:group {"style":{"elements":{"link":{"color":{"text":"var:preset|color|white"}}}},"backgroundColor":"dark"} -->
<div class="wp-block-group has-dark-background-color has-background has-link-color"><!-- wp:post-title {"isLink":true,"className":"is-style-no-margin"} /-->
<!-- wp:post-date {"textColor":"yellow"} /--></div>
<!-- /wp:group -->
<!-- wp:post-featured-image /-->
<!-- /wp:post-template --></div>
<!-- /wp:query -->',
	)
);

register_block_pattern(
	'hansen-blog/latest-posts-2-columns',
	array(
		'title'         => __( 'Latest Posts (2 columns)', 'hansen' ),
		'blockTypes'    => array( 'core/query' ),
		'categories'    => array( 'hansen-blog', 'query' ),
		'keywords'		=> array( 'blog', 'query' ),
		'viewportWidth' => 1440,
		'content'       => '<!-- wp:query {"queryId":1,"query":{"offset":0,"perPage":4,"postType":"post","categoryIds":[],"tagIds":[],"order":"desc","orderBy":"date","author":"","search":"","sticky":"","inherit":false},"displayLayout":{"type":"flex","columns":2},"className":"is-style-box-shadow"} -->
<div class="wp-block-query is-style-box-shadow">
<!-- wp:post-template -->
<!-- wp:post-title {"isLink":true} /-->
<!-- wp:post-date {"className":"is-style-with-icon"} /-->
<!-- wp:post-author {"showAvatar":false,"showBio":false,"className":"is-style-with-icon"} /-->
<!-- wp:post-featured-image {"isLink":true} /-->
<!-- wp:post-excerpt {"moreText":"Read More","className":"is-style-read-more-arrow"} /-->
<!-- wp:post-terms {"term":"category","className":"is-style-with-icon-cats"} /-->
<!-- wp:post-terms {"term":"post_tag","className":"is-style-with-icon-tags"} /-->
<!-- /wp:post-template -->
</div>
<!-- /wp:query -->',
	)
);

register_block_pattern(
	'hansen-blog/latest-posts-3-columns',
	array(
		'title'         => __( 'Latest Posts (3 columns)', 'hansen' ),
		'categories'    => array( 'hansen-blog' ),
		'keywords'		=> array( 'blog' ),
		'viewportWidth' => 1440,
		'content'       => '<!-- wp:query {"queryId":1,"query":{"offset":0,"perPage":6,"postType":"post","categoryIds":[],"tagIds":[],"order":"desc","orderBy":"date","author":"","search":"","sticky":"","inherit":false},"displayLayout":{"type":"flex","columns":3},"className":"is-style-box-shadow"} -->
<div class="wp-block-query is-style-box-shadow">
<!-- wp:post-template -->
<!-- wp:post-title {"isLink":true} /-->
<!-- wp:post-date {"className":"is-style-with-icon"} /-->
<!-- wp:post-author {"showAvatar":false,"showBio":false,"className":"is-style-with-icon"} /-->
<!-- wp:post-featured-image {"isLink":true} /-->
<!-- wp:post-excerpt {"moreText":"Read More","className":"is-style-read-more-arrow"} /-->
<!-- wp:post-terms {"term":"category","className":"is-style-with-icon-cats"} /-->
<!-- wp:post-terms {"term":"post_tag","className":"is-style-with-icon-tags"} /-->
<!-- /wp:post-template -->
</div>
<!-- /wp:query -->',
	)
);

register_block_pattern(
	'hansen-blog/latest-posts-3-columns-bordered',
	array(
		'title'         => __( 'Latest Posts (3 columns bordered)', 'hansen' ),
		'blockTypes'    => array( 'core/query' ),
		'categories'    => array( 'hansen-blog', 'query' ),
		'keywords'		=> array( 'blog', 'query' ),
		'viewportWidth' => 1440,
		'content'       => '<!-- wp:query {"queryId":1,"query":{"offset":0,"perPage":6,"postType":"post","categoryIds":[],"tagIds":[],"order":"desc","orderBy":"date","author":"","search":"","sticky":"","inherit":false},"displayLayout":{"type":"flex","columns":3},"className":"is-style-border"} -->
<div class="wp-block-query is-style-border">
<!-- wp:post-template -->
<!-- wp:post-title {"isLink":true} /-->
<!-- wp:post-date {"className":"is-style-with-icon"} /-->
<!-- wp:post-author {"showAvatar":false,"showBio":false,"className":"is-style-with-icon"} /-->
<!-- wp:post-featured-image {"isLink":true} /-->
<!-- wp:post-excerpt {"moreText":"Read More","className":"is-style-read-more-arrow"} /-->
<!-- wp:post-terms {"term":"category","className":"is-style-with-icon-cats"} /-->
<!-- wp:post-terms {"term":"post_tag","className":"is-style-with-icon-tags"} /-->
<!-- /wp:post-template -->
</div>
<!-- /wp:query -->',
	)
);

register_block_pattern(
	'hansen-blog/content-sidebar',
	array(
		'title'         => __( 'Content and Sidebar', 'hansen' ),
		'categories'    => array( 'hansen-blog' ),
		'keywords'		=> array( 'blog' ),
		'viewportWidth' => 1440,
		'content'       => '<!-- wp:columns {"className":"is-style-sidebar"} -->
<div class="wp-block-columns is-style-sidebar"><!-- wp:column {"width":"75%"} -->
<div class="wp-block-column" style="flex-basis:75%"><!-- wp:heading -->
<h2>A heading</h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>Some content.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"25%"} -->
<div class="wp-block-column" style="flex-basis:25%"><!-- wp:group {"backgroundColor":"white"} -->
<div class="wp-block-group has-white-background-color has-background"><div class="wp-block-group__inner-container"><!-- wp:heading {"level":4} -->
<h4>Latest Posts</h4>
<!-- /wp:heading -->

<!-- wp:latest-posts /-->

<!-- wp:heading {"level":4} -->
<h4>Recent Comments</h4>
<!-- /wp:heading -->

<!-- wp:latest-comments {"displayAvatar":false} /-->

<!-- wp:heading {"level":4} -->
<h4>Tags</h4>
<!-- /wp:heading -->

<!-- wp:tag-cloud /--></div></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->',
	)
);

register_block_pattern(
	'hansen-design/columns-and-cover',
	array(
		'title'         => __( '2 Columns of Text and a full-width Cover', 'hansen' ),
		'categories'    => array( 'hansen-design' ),
		'viewportWidth' => 1440,
		'content'       => '<!-- wp:spacer {"height":30} -->
<div style="height:30px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:columns {"verticalAlignment":"top","className":"is-style-default"} -->
<div class="wp-block-columns are-vertically-aligned-top is-style-default"><!-- wp:column {"verticalAlignment":"top","width":"25%"} -->
<div class="wp-block-column is-vertically-aligned-top" style="flex-basis:25%"><!-- wp:paragraph {"textColor":"black","fontSize":"large"} -->
<p class="has-black-color has-text-color has-large-font-size">' . __( 'Build your site with blocks', 'hansen') . '</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"top","width":"75%"} -->
<div class="wp-block-column is-vertically-aligned-top" style="flex-basis:75%"><!-- wp:paragraph {"fontSize":"medium"} -->
<p class="has-medium-font-size">' . __( 'Welcome to the Hansen full site editing theme.', 'hansen') . '</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p>' . __( 'Everything on this website is built with blocks. Not only the page content, the entire site layout too.', 'hansen') . '</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p>' . __( 'Make use of blocks to create all the various parts of your website. Design your website header, footer, pages, posts and more using the visual block editor. This is a modular approach with a great deal of flexibility.', 'hansen') . '</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:cover {"url":"' . esc_url( get_theme_file_uri( 'assets/images/cover-01.jpg' ) ) . '","dimRatio":80,"overlayColor":"dark","minHeight":600,"align":"full"} -->
<div class="wp-block-cover alignfull has-background-dim-80 has-dark-background-color has-background-dim" style="min-height:600px"><img class="wp-block-cover__image-background" alt="" src="' . esc_url( get_theme_file_uri( 'assets/images/cover-01.jpg' ) ) . '" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:paragraph {"align":"center","textColor":"light","fontSize":"huge"} -->
<p class="has-text-align-center has-light-color has-text-color has-huge-font-size">' . __( 'What is full site editing?', 'hansen') . '</p>
<!-- /wp:paragraph -->

<!-- wp:group {"align":"wide"} -->
<div class="wp-block-group alignwide"><div class="wp-block-group__inner-container"><!-- wp:paragraph {"align":"center","textColor":"light"} -->
<p class="has-text-align-center has-light-color has-text-color">' . __( 'With the new global styles feature, you can easily edit your color scheme and typography, either globally across the whole site, or by block type. This differs from the previous customizer, as it gives you more control over the design and layout of your site.', 'hansen') . '</p>
<!-- /wp:paragraph -->

<!-- wp:spacer {"height":40} -->
<div style="height:40px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:buttons {"contentJustification":"center"} -->
<div class="wp-block-buttons is-content-justification-center"><!-- wp:button {"borderRadius":6,"backgroundColor":"blue"} -->
<div class="wp-block-button"><a class="wp-block-button__link has-blue-background-color has-background" style="border-radius:6px">' . __( 'Learn More', 'hansen') . '</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div></div>
<!-- /wp:group --></div></div>
<!-- /wp:cover -->',
	)
);

register_block_pattern(
	'hansen-design/media-text-overlap',
	array(
		'title'         => __( 'Media and Text - Overlap', 'hansen' ),
		'categories'    => array( 'hansen-design' ),
		'keywords'		=> array( 'image', 'background' ),
		'viewportWidth' => 1440,
		'content'       => '<!-- wp:media-text {"mediaType":"image","imageFill":true,"className":"is-style-media-text-overlap","backgroundColor":"white"} -->
<div class="wp-block-media-text alignwide is-stacked-on-mobile is-image-fill is-style-media-text-overlap has-white-background-color has-background"><figure class="wp-block-media-text__media" style="background-image:url(' . esc_url( get_theme_file_uri( 'assets/images/cover-01.jpg' ) ) . ');background-position:50% 50%"><img src="' . esc_url( get_theme_file_uri( 'assets/images/cover-01.jpg' ) ) . '" alt=""/></figure><div class="wp-block-media-text__content"><!-- wp:paragraph {"fontSize":"large"} -->
<p class="has-large-font-size">' . __( 'Content here', 'hansen') . '</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p>' . __( 'Replace with your own text', 'hansen') . '</p>
<!-- /wp:paragraph --></div></div>
<!-- /wp:media-text -->',
	)
);

register_block_pattern(
	'hansen-design/media-text-angled',
	array(
		'title'         => __( 'Media and Text - Angled', 'hansen' ),
		'categories'    => array( 'hansen-design' ),
		'keywords'		=> array( 'image', 'background' ),
		'viewportWidth' => 1440,
		'content'		=> '<!-- wp:media-text {"mediaType":"image","imageFill":false,"className":"is-style-angled-divider","backgroundColor":"dark","textColor":"light"} -->
<div class="wp-block-media-text alignwide is-stacked-on-mobile is-style-angled-divider has-light-color has-dark-background-color has-text-color has-background"><figure class="wp-block-media-text__media"><img src="' . esc_url( get_theme_file_uri( 'assets/images/cover-01.jpg' ) ) . '" alt=""/></figure><div class="wp-block-media-text__content"><!-- wp:paragraph {"fontSize":"large"} -->
<p class="has-large-font-size">' . __( 'Content here', 'hansen') . '</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p>' . __( 'Replace with your own text', 'hansen') . '</p>
<!-- /wp:paragraph --></div></div>
<!-- /wp:media-text -->'
	)
);

register_block_pattern(
	'hansen-design/cover-offset-box',
	array(
		'title'         => __( 'Cover with Offset Box', 'hansen' ),
		'categories'    => array( 'hansen-design' ),
		'keywords'		=> array( 'image', 'background' ),
		'viewportWidth' => 1200,
		'content'		=> '<!-- wp:group {"align":"full","className":"is-style-group-cover-offset","layout":{"inherit":true}} -->
<div class="wp-block-group alignfull is-style-group-cover-offset"><!-- wp:cover {"url":"' . esc_url( get_theme_file_uri( 'assets/images/cover-02.jpg' ) ) . '","dimRatio":10,"focalPoint":{"x":0.5,"y":"0.08"},"minHeight":700,"contentPosition":"center center","align":"full"} -->
<div class="wp-block-cover alignfull has-background-dim-10 has-background-dim" style="min-height:700px"><img class="wp-block-cover__image-background" alt="" src="' . esc_url( get_theme_file_uri( 'assets/images/cover-02.jpg' ) ) . '" style="object-position:50% 8%" data-object-fit="cover" data-object-position="50% 8%"/><div class="wp-block-cover__inner-container"><!-- wp:group {"layout":{"inherit":true}} -->
<div class="wp-block-group"><!-- wp:columns {"className":"is-style-no-spacing"} -->
<div class="wp-block-columns is-style-no-spacing"><!-- wp:column {"width":"40%"} -->
<div class="wp-block-column" style="flex-basis:40%"><!-- wp:cover {"overlayColor":"yellow","style":{"spacing":{"padding":{"top":"40px","right":"40px","bottom":"40px","left":"40px"}}}} -->
<div class="wp-block-cover has-yellow-background-color has-background-dim" style="padding-top:40px;padding-right:40px;padding-bottom:40px;padding-left:40px"><div class="wp-block-cover__inner-container"><!-- wp:heading {"textColor":"black","fontSize":"huge"} -->
<h2 class="has-black-color has-text-color has-huge-font-size">' . __( 'Content here', 'hansen') . '</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"textColor":"black"} -->
<p class="has-black-color has-text-color">' . __( 'Replace with your own text', 'hansen') . '</p>
<!-- /wp:paragraph -->

<!-- wp:spacer {"height":20} -->
<div style="height:20px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"backgroundColor":"dark","textColor":"white","style":{"border":{"radius":3}}} -->
<div class="wp-block-button"><a class="wp-block-button__link has-white-color has-dark-background-color has-text-color has-background" style="border-radius:3px">' . __( 'Click Here', 'hansen') . '</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div></div>
<!-- /wp:cover --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"60%"} -->
<div class="wp-block-column" style="flex-basis:60%"></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group --></div></div>
<!-- /wp:cover --></div>
<!-- /wp:group -->'
	)
);
