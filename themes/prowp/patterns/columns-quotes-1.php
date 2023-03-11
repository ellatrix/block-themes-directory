<?php
/**
 * Title: Section with three (3) quotes
 * Slug: prowp/columns-quotes-1
 * Categories: columns
 * Keywords: testimonials
 * Block Types: core/columns
 */
?>

<!-- wp:group {"templateLock":"contentOnly","align":"wide","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide">
	<!-- wp:columns -->
	<div class="wp-block-columns">
		<!-- wp:column {"width":"25%"} -->
		<div class="wp-block-column" style="flex-basis:25%">
			<!-- wp:heading {"textColor":"secondary","fontSize":"normal"} -->
			<h2 class="has-secondary-color has-text-color has-normal-font-size"><?php echo esc_html_x( 'Section main title', 'sample title for section', 'prowp' ); ?></h2>
			<!-- /wp:heading -->
		</div>
		<!-- /wp:column -->
		<!-- wp:column {"width":"50%"} -->
		<div class="wp-block-column" style="flex-basis:50%">
			<!-- wp:columns {"style":{"spacing":{}}} -->
			<div class="wp-block-columns">
				<!-- wp:column {"width":"160px"} -->
				<div class="wp-block-column" style="flex-basis:160px">
					<!-- wp:image {"width":160,"height":160,"sizeSlug":"large","className":"is-style-default"} -->
					<figure class="wp-block-image size-large is-resized is-style-default"><img src="<?php echo esc_url( get_template_directory_uri() ) . '/assets/img/patterns/160x160.webp'; ?>" alt="" width="160" height="160"/></figure>
					<!-- /wp:image -->
				</div>
				<!-- /wp:column -->
				<!-- wp:column {"width":""} -->
				<div class="wp-block-column">
					<!-- wp:quote {"align":"left","className":"th-flex-1 is-style-plain"} -->
					<blockquote class="wp-block-quote has-text-align-left th-flex-1 is-style-plain">
						<!-- wp:paragraph -->
						<p>"<?php echo esc_html_x( 'WordPress is software designed for everyone, emphasizing accessibility, performance, security, and ease of use. We believe great software should work with minimum set up, so you can focus on sharing your story, product, or services freely.', 'sample description for section', 'prowp' ); ?>"</p>
						<!-- /wp:paragraph --><cite><mark style="background-color:rgba(0, 0, 0, 0)" class="has-inline-color has-secondary-color">Jane Smith</mark></cite>
					</blockquote>
					<!-- /wp:quote -->
				</div>
				<!-- /wp:column -->
			</div>
			<!-- /wp:columns -->
			<!-- wp:columns {"style":{"spacing":{}}} -->
			<div class="wp-block-columns">
				<!-- wp:column {"width":"160px"} -->
				<div class="wp-block-column" style="flex-basis:160px">
					<!-- wp:image {"width":160,"height":160,"sizeSlug":"large","className":"is-style-default"} -->
					<figure class="wp-block-image size-large is-resized is-style-default"><img src="<?php echo esc_url( get_template_directory_uri() ) . '/assets/img/patterns/160x160.webp'; ?>" alt="" width="160" height="160"/></figure>
					<!-- /wp:image -->
				</div>
				<!-- /wp:column -->
				<!-- wp:column {"width":""} -->
				<div class="wp-block-column">
					<!-- wp:quote {"align":"left","className":"th-flex-1 is-style-plain"} -->
					<blockquote class="wp-block-quote has-text-align-left th-flex-1 is-style-plain">
						<!-- wp:paragraph -->
						<p>"<?php echo esc_html_x( 'The basic WordPress software is simple and predictable so you can easily get started. It also offers powerful features for growth and success.', 'sample description for section', 'prowp' ); ?>"</p>
						<!-- /wp:paragraph --><cite><mark style="background-color:rgba(0, 0, 0, 0)" class="has-inline-color has-secondary-color">Tom Doe</mark></cite>
					</blockquote>
					<!-- /wp:quote -->
				</div>
				<!-- /wp:column -->
			</div>
			<!-- /wp:columns -->
			<!-- wp:columns {"style":{"spacing":{}}} -->
			<div class="wp-block-columns">
				<!-- wp:column {"width":"160px"} -->
				<div class="wp-block-column" style="flex-basis:160px">
					<!-- wp:image {"width":160,"height":160,"sizeSlug":"large","className":"is-style-default"} -->
					<figure class="wp-block-image size-large is-resized is-style-default"><img src="<?php echo esc_url( get_template_directory_uri() ) . '/assets/img/patterns/160x160.webp'; ?>" alt="" width="160" height="160"/></figure>
					<!-- /wp:image -->
				</div>
				<!-- /wp:column -->
				<!-- wp:column {"width":""} -->
				<div class="wp-block-column">
					<!-- wp:quote {"align":"left","className":"th-flex-1 is-style-plain"} -->
					<blockquote class="wp-block-quote has-text-align-left th-flex-1 is-style-plain">
						<!-- wp:paragraph -->
						<p>"<?php echo esc_html_x( 'The WordPress community is welcoming and inclusive. Our contributors passion drives the success of WordPress which, in turn, helps you reach your goals.', 'sample description for section', 'prowp' ); ?></p>
						<!-- /wp:paragraph -->
						<!-- wp:paragraph -->
						<p><?php echo esc_html_x( 'WordPress is open source software that is both free and priceless.', 'sample description for section', 'prowp' ); ?>"</p>
						<!-- /wp:paragraph --><cite><mark style="background-color:rgba(0, 0, 0, 0)" class="has-inline-color has-secondary-color">Kate Passion</mark></cite>
					</blockquote>
					<!-- /wp:quote -->
				</div>
				<!-- /wp:column -->
			</div>
			<!-- /wp:columns -->
		</div>
		<!-- /wp:column -->
		<!-- wp:column {"width":"25%","style":{"border":{"left":{"color":"var:preset|color|tertiary","width":"1px"}},"spacing":{"padding":{"left":"var:preset|spacing|60"}}},"fontSize":"small"} -->
		<div class="wp-block-column has-small-font-size" style="border-left-color:var(--wp--preset--color--tertiary);border-left-width:1px;padding-left:var(--wp--preset--spacing--60);flex-basis:25%">
			<!-- wp:paragraph -->
			<p><?php echo esc_html_x( 'This pattern displays list of three (3) quotes with images and captions. The pattern also displays a section title and description.', 'sample description for section', 'prowp' ); ?></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->
</div>
<!-- /wp:group -->
