<?php
/**
 * Title: Section with quote, image and caption.
 * Slug: prowp/quote-1
 * Categories: quotes
 * Keywords: quote, feedback, testimonial
 * Block Types: core/quote
 */
?>

<!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group">
	<!-- wp:quote {"className":"is-style-plain"} -->
	<blockquote class="wp-block-quote is-style-plain">
		<!-- wp:paragraph -->
		<p><?php echo esc_html_x( 'WordPress is software designed for everyone, emphasizing accessibility, performance, security, and ease of use. We believe great software should work with minimum set up, so you can focus on sharing your story, product, or services freely.', 'sample description for section', 'prowp' ); ?></p>
		<!-- /wp:paragraph -->
	</blockquote>
	<!-- /wp:quote -->
	<!-- wp:columns -->
	<div class="wp-block-columns">
		<!-- wp:column {"width":"64px"} -->
		<div class="wp-block-column" style="flex-basis:64px">
			<!-- wp:image {"id":25,"sizeSlug":"large","linkDestination":"none"} -->
			<figure class="wp-block-image size-large"><img src="<?php echo esc_url( get_template_directory_uri() ) . '/assets/img/patterns/96x96.webp'; ?>" alt="" class="wp-image-25"/></figure>
			<!-- /wp:image -->
		</div>
		<!-- /wp:column -->
		<!-- wp:column {"verticalAlignment":"center","width":"100%","style":{"spacing":{"blockGap":"0.25em"}}} -->
		<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:100%">
			<!-- wp:paragraph {"fontSize":"normal"} -->
			<p class="has-normal-font-size"><strong><?php echo esc_html_x( 'Themes Harbor', 'sample name for quote', 'prowp' ); ?></strong></p>
			<!-- /wp:paragraph -->
			<!-- wp:paragraph {"textColor":"secondary","fontSize":"small"} -->
			<p class="has-secondary-color has-text-color has-small-font-size"><?php echo esc_html_x( 'WordPress Developer', 'sample caption for quote', 'prowp' ); ?></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->
</div>
<!-- /wp:group -->
