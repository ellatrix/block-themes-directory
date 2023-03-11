<?php
/**
 * Block Patterns
 *
 * @link https://developer.wordpress.org/reference/functions/register_block_pattern/
 * @link https://developer.wordpress.org/reference/functions/register_block_pattern_category/
 *
 * @package Pria
 */

register_block_pattern_category(
	'pria-design',
	array( 'label' => __( 'Pria - Design', 'pria' ) )
);

register_block_pattern_category(
	'pria-blog',
	array( 'label' => __( 'Pria - Blog', 'pria' ) )
);

register_block_pattern(
	'pria-design/image-content-offset',
	array(
		'title'         => __( 'Image & Content Offset', 'pria' ),
		'blockTypes'    => array( 'core/columns' ),
		'categories'    => array( 'pria-design' ),
		'keywords'		=> array( 'column', 'media', 'text' ),
		'viewportWidth' => 1440,
		'content'       => '<!-- wp:group {"className":"is-style-image-content-offset"} -->
<div class="wp-block-group is-style-image-content-offset"><!-- wp:image {"className":"is-style-rounded-corners"} -->
<figure class="wp-block-image size-large is-style-rounded-corners"><img src="' . esc_url( get_theme_file_uri( 'assets/images/post-placeholder.jpg' ) ) . '" alt=""/><figcaption>An example caption</figcaption></figure>
<!-- /wp:image -->

<!-- wp:group {"textColor":"white","gradient":"cassis-to-gold","className":"is-style-rounded-corners"} -->
<div class="wp-block-group is-style-rounded-corners has-white-color has-cassis-to-gold-gradient-background has-text-color has-background"><!-- wp:heading {"textColor":"white","className":"is-style-no-margin"} -->
<h2 class="is-style-no-margin has-white-color has-text-color">Example Heading</h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>Lorem ipsum dolor sit amet consectetur adipiscing elit duis nibh sodales lectus, fusce nunc tellus auctor aenean risus nullam iaculis magna rutrum.</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p>Lorem ipsum dolor sit amet consectetur adipiscing elit duis nibh sodales lectus, fusce nunc tellus auctor aenean risus nullam iaculis magna rutrum.</p>
<!-- /wp:paragraph -->

</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->',
	)
);

register_block_pattern(
	'pria-design/image-content-offset-2',
	array(
		'title'         => __( 'Image & Content Offset 2', 'pria' ),
		'blockTypes'    => array( 'core/columns' ),
		'categories'    => array( 'pria-design' ),
		'keywords'		=> array( 'column', 'media', 'text' ),
		'viewportWidth' => 1440,
		'content'       => '<!-- wp:group {"className":"is-style-image-content-offset-right"} -->
<div class="wp-block-group is-style-image-content-offset-right"><!-- wp:image -->
<figure class="wp-block-image"><img src="' . esc_url( get_theme_file_uri( 'assets/images/post-placeholder.jpg' ) ) . '" alt=""/><figcaption>An example caption</figcaption></figure>
<!-- /wp:image -->

<!-- wp:group {"textColor":"black","backgroundColor":"pink"} -->
<div class="wp-block-group has-black-color has-pink-background-color has-text-color has-background"><!-- wp:heading {"textColor":"black","className":"is-style-no-margin"} -->
<h2 class="is-style-no-margin has-black-color has-text-color">Example Heading</h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>Lorem ipsum dolor sit amet consectetur adipiscing elit duis nibh sodales lectus, fusce nunc tellus auctor aenean risus nullam iaculis magna rutrum.</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p>Lorem ipsum dolor sit amet consectetur adipiscing elit duis nibh sodales lectus, fusce nunc tellus auctor aenean risus nullam iaculis magna rutrum.</p>
<!-- /wp:paragraph -->

</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->',
	)
);

register_block_pattern(
	'pria-design/call-to-action',
	array(
		'title'         => __( 'Call to Action', 'pria' ),
		'blockTypes'    => array( 'core/columns' ),
		'categories'    => array( 'pria-design' ),
		'keywords'		=> array( 'cta', 'button', 'column' ),
		'viewportWidth' => 1440,
		'content'       => '<!-- wp:columns -->
<div class="wp-block-columns"><!-- wp:column -->
<div class="wp-block-column"><!-- wp:image {"linkDestination":"none","className":"is-style-rounded-corners"} -->
<figure class="wp-block-image is-style-rounded-corners"><img src="' . esc_url( get_theme_file_uri( 'assets/images/pattern-01.jpg' ) ) . '" alt="" class=""/></figure>
<!-- /wp:image --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:spacer -->
<div style="height:100px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:group {"style":{"elements":{"link":{"color":{"text":"var:preset|color|orange"}}}},"backgroundColor":"purple","textColor":"white","className":"is-style-rounded-corners"} -->
<div class="wp-block-group is-style-rounded-corners has-white-color has-purple-background-color has-text-color has-background has-link-color"><!-- wp:paragraph {"className":"is-style-default","fontSize":"huge"} -->
<p class="is-style-default has-huge-font-size">Want to learn more?</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"is-style-default","fontSize":"large"} -->
<p class="is-style-default has-large-font-size">Check it out today</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p>Lorem ipsum dolor sit amet consectetur adipiscing elit duis nibh sodales lectus, fusce nunc tellus auctor aenean risus nullam iaculis magna rutrum.</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p>Lorem ipsum dolor sit amet consectetur adipiscing elit duis nibh sodales lectus, fusce nunc tellus auctor aenean risus nullam iaculis magna rutrum.</p>
<!-- /wp:paragraph -->

<!-- wp:spacer {"height":40} -->
<div style="height:40px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"textColor":"orange","className":"is-style-outline"} -->
<div class="wp-block-button is-style-outline"><a class="wp-block-button__link has-orange-color has-text-color"><strong>Get in Touch →</strong></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->',
	)
);

register_block_pattern(
	'pria-design/call-to-action-2',
	array(
		'title'         => __( 'Call to Action 2', 'pria' ),
		'blockTypes'    => array( 'core/columns' ),
		'categories'    => array( 'pria-design' ),
		'keywords'		=> array( 'cta', 'button', 'column' ),
		'viewportWidth' => 1440,
		'content'       => '<!-- wp:columns -->
<div class="wp-block-columns"><!-- wp:column -->
<div class="wp-block-column"><!-- wp:spacer -->
<div style="height:100px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:group {"style":{"elements":{"link":{"color":{"text":"var:preset|color|pink"}}}},"textColor":"white","gradient":"green-to-gold","className":"is-style-rounded-corners"} -->
<div class="wp-block-group is-style-rounded-corners has-white-color has-green-to-gold-gradient-background has-text-color has-background has-link-color"><!-- wp:paragraph {"className":"is-style-default","fontSize":"huge"} -->
<p class="is-style-default has-huge-font-size">Want to learn more?</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"is-style-default","fontSize":"large"} -->
<p class="is-style-default has-large-font-size">Check it out today</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p>Lorem ipsum dolor sit amet consectetur adipiscing elit duis nibh sodales lectus, fusce nunc tellus auctor aenean risus nullam iaculis magna rutrum.</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p>Lorem ipsum dolor sit amet consectetur adipiscing elit duis nibh sodales lectus, fusce nunc tellus auctor aenean risus nullam iaculis magna rutrum.</p>
<!-- /wp:paragraph -->

<!-- wp:spacer {"height":40} -->
<div style="height:40px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"backgroundColor":"green","textColor":"white","className":"is-style-outline"} -->
<div class="wp-block-button is-style-outline"><a class="wp-block-button__link has-white-color has-green-background-color has-text-color has-background"><strong>Get in Touch →</strong></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:image {"linkDestination":"none","className":"is-style-rounded-corners"} -->
<figure class="wp-block-image is-style-rounded-corners"><img src="' . esc_url( get_theme_file_uri( 'assets/images/pattern-02.jpg' ) ) . '" alt=""/></figure>
<!-- /wp:image --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->',
	)
);

register_block_pattern(
	'pria-blog/latest-posts-offset',
	array(
		'title'         => __( 'Latest Posts - Offset', 'pria' ),
		'blockTypes'    => array( 'core/query' ),
		'categories'    => array( 'pria-blog', 'query' ),
		'keywords'		=> array( 'blog', 'query' ),
		'viewportWidth' => 1440,
		'content'       => '<!-- wp:query {"queryId":1,"query":{"offset":0,"perPage":"5","postType":"post","categoryIds":[],"tagIds":[],"order":"desc","orderBy":"date","author":"","search":"","sticky":"exclude","inherit":false},"displayLayout":{"type":"list"},"className":"is-style-offset"} -->
<div class="wp-block-query is-style-offset"><!-- wp:post-template -->
<!-- wp:group {"className":"is-style-offset-wrap"} -->
<div class="wp-block-group is-style-offset-wrap"><!-- wp:post-featured-image {"isLink":true} /-->

<!-- wp:group {"backgroundColor":"cream","className":"is-style-offset-inner"} -->
<div class="wp-block-group has-cream-background-color has-background is-style-offset-inner"><!-- wp:post-title {"isLink":true} /-->

<!-- wp:post-excerpt {"moreText":"Read More","className":"is-style-read-more-arrow-2"} /-->

<!-- wp:post-terms {"term":"category","className":"is-style-term-button"} /-->

<!-- wp:post-terms {"term":"post_tag","className":"is-style-term-button"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
<!-- /wp:post-template --></div>
<!-- /wp:query -->',
	)
);

register_block_pattern(
	'pria-blog/latest-posts-offset-rounded',
	array(
		'title'         => __( 'Latest Posts - Offset with Rounded Corners', 'pria' ),
		'blockTypes'    => array( 'core/query' ),
		'categories'    => array( 'pria-blog', 'query' ),
		'keywords'		=> array( 'blog', 'query' ),
		'viewportWidth' => 1440,
		'content'       => '<!-- wp:query {"queryId":1,"query":{"offset":0,"perPage":"5","postType":"post","categoryIds":[],"tagIds":[],"order":"desc","orderBy":"date","author":"","search":"","sticky":"exclude","inherit":false},"displayLayout":{"type":"list"},"className":"is-style-offset"} -->
<div class="wp-block-query is-style-offset"><!-- wp:post-template -->
<!-- wp:group {"className":"is-style-offset-wrap"} -->
<div class="wp-block-group is-style-offset-wrap"><!-- wp:post-featured-image {"isLink":true,"className":"is-style-rounded-corners"} /-->

<!-- wp:group {"backgroundColor":"cream","className":"is-style-offset-inner is-style-rounded-corners"} -->
<div class="wp-block-group has-cream-background-color has-background is-style-offset-inner is-style-rounded-corners"><!-- wp:post-title {"isLink":true} /-->

<!-- wp:post-excerpt {"moreText":"Read More","className":"is-style-read-more-arrow-2"} /-->

<!-- wp:post-terms {"term":"category","className":"is-style-term-button"} /-->

<!-- wp:post-terms {"term":"post_tag","className":"is-style-term-button"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
<!-- /wp:post-template --></div>
<!-- /wp:query -->',
	)
);

register_block_pattern(
	'pria-blog/latest-posts-2-columns',
	array(
		'title'         => __( 'Latest Posts - 2 Columns', 'pria' ),
		'blockTypes'    => array( 'core/query' ),
		'categories'    => array( 'pria-blog', 'query' ),
		'keywords'		=> array( 'blog', 'query' ),
		'viewportWidth' => 1440,
		'content'       => '<!-- wp:query {"queryId":1,"query":{"offset":0,"perPage":"5","postType":"post","categoryIds":[],"tagIds":[],"order":"desc","orderBy":"date","author":"","search":"","sticky":"exclude","inherit":false},"displayLayout":{"type":"flex","columns":2}} -->
<div class="wp-block-query"><!-- wp:post-template -->
<!-- wp:group -->
<div class="wp-block-group"><!-- wp:post-featured-image {"isLink":true} /-->

<!-- wp:group {"backgroundColor":"cream"} -->
<div class="wp-block-group has-cream-background-color has-background"><!-- wp:post-title {"isLink":true} /-->

<!-- wp:post-excerpt {"moreText":"Read More","className":"is-style-read-more-arrow-2"} /-->

<!-- wp:post-terms {"term":"category","className":"is-style-term-button"} /-->

<!-- wp:post-terms {"term":"post_tag","className":"is-style-term-button"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
<!-- /wp:post-template --></div>
<!-- /wp:query -->',
	)
);
