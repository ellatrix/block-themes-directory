<?php
/**
 * Title: Page header with title, sub-title, image, text and side content.
 * Slug: prowp/header-columns-2
 * Categories: header
 * Keywords: header
 * Block Types: core/columns
 */
?>

<!-- wp:group {"templateLock":"contentOnly","align":"wide","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide">
	<!-- wp:columns -->
	<div class="wp-block-columns">
		<!-- wp:column {"width":"25%"} -->
		<div class="wp-block-column" style="flex-basis:25%">
			<!-- wp:post-title {"level":1,"textColor":"secondary","fontSize":"normal"} /-->
		</div>
		<!-- /wp:column -->
		<!-- wp:column {"width":"50%"} -->
		<div class="wp-block-column" style="flex-basis:50%">
			<!-- wp:paragraph {"style":{"typography":{"lineHeight":"1.4"}},"fontSize":"large"} -->
			<p class="has-large-font-size" style="line-height:1.4"><strong><?php echo esc_html_x( 'Sub-title for the page, to share mission, slogan, etc', 'sample sub-title for section', 'prowp' ); ?></strong></p>
			<!-- /wp:paragraph -->
			<!-- wp:image {"id":25,"sizeSlug":"large","linkDestination":"none"} -->
			<figure class="wp-block-image size-large"><img src="<?php echo esc_url( get_template_directory_uri() ) . '/assets/img/patterns/1920x1080.webp'; ?>" alt="" class="wp-image-25"/></figure>
			<!-- /wp:image -->
			<!-- wp:paragraph {"fontSize":"normal"} -->
			<p class="has-normal-font-size"><?php echo esc_html_x( 'The basic WordPress software is simple and predictable so you can easily get started. It also offers powerful features for growth and success.', 'sample description for section', 'prowp' ); ?></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:column -->
		<!-- wp:column {"width":"25%","style":{"border":{"left":{"color":"var:preset|color|tertiary","width":"1px"}},"spacing":{"padding":{"left":"var:preset|spacing|60"}}},"fontSize":"small"} -->
		<div class="wp-block-column has-small-font-size" style="border-left-color:var(--wp--preset--color--tertiary);border-left-width:1px;padding-left:var(--wp--preset--spacing--60);flex-basis:25%">
			<!-- wp:paragraph -->
			<p><?php echo esc_html_x( 'This pattern displays a page header section, with main page title, sub-title, image, text, and additional content for the page.', 'sample description for section', 'prowp' ); ?></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->
</div>
<!-- /wp:group -->
