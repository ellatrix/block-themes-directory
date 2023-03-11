<?php
/**
 * Title: Short biography section
 * Slug: prowp/text-bio-1
 * Categories: text
 * Keywords: biography, bio, about
 * Block Types: core/group
 */
?>

<!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group">
	<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|60"}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"top"}} -->
	<div class="wp-block-group">
		<!-- wp:group {"style":{"spacing":{"blockGap":"1.5em"}},"layout":{"type":"constrained"}} -->
		<div class="wp-block-group">
			<!-- wp:group {"style":{"spacing":{"blockGap":"0.5em"}},"layout":{"type":"flex","orientation":"vertical"}} -->
			<div class="wp-block-group">
				<!-- wp:group {"style":{"spacing":{"blockGap":"0.25em"}},"layout":{"type":"flex","orientation":"vertical"}} -->
				<div class="wp-block-group">
					<!-- wp:heading {"level":3,"fontSize":"normal"} -->
					<h3 class="has-normal-font-size"><?php echo esc_html_x( 'Section title', 'sample title for section', 'prowp' ); ?></h3>
					<!-- /wp:heading -->
					<!-- wp:paragraph {"textColor":"secondary","fontSize":"small"} -->
					<p class="has-secondary-color has-text-color has-small-font-size"><?php echo esc_html_x( 'Short sub-title text', 'sample sub title for section', 'prowp' ); ?></p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:group -->
				<!-- wp:paragraph {"fontSize":"normal"} -->
				<p class="has-normal-font-size"><?php echo esc_html_x( 'Sample text, which can be edited using the Block editor, to fit your needs. The title can be edited as well, with an option to add a link.', 'sample description for section', 'prowp' ); ?></p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->
			<!-- wp:social-links {"iconBackgroundColor":"contrast","iconBackgroundColorValue":"#060606","showLabels":true,"size":"has-small-icon-size","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|20","left":"var:preset|spacing|20"}}},"className":"is-style-pill-shape"} -->
			<ul class="wp-block-social-links has-small-icon-size has-visible-labels has-icon-background-color is-style-pill-shape">
				<!-- wp:social-link {"url":"https://twitter.com/themesharbor?lang=en","service":"twitter"} /-->
				<!-- wp:social-link {"url":"https://www.instagram.com/themesharbor/?hl=en","service":"instagram"} /-->
			</ul>
			<!-- /wp:social-links -->
		</div>
		<!-- /wp:group -->
		<!-- wp:image {"sizeSlug":"large","linkDestination":"none"} -->
		<figure class="wp-block-image size-large"><img src="<?php echo esc_url( get_template_directory_uri() ) . '/assets/img/patterns/300x300.webp'; ?>" alt="" /></figure>
		<!-- /wp:image -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
