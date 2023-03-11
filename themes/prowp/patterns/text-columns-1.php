<?php
/**
 * Title: Section with title, text, list and call to action
 * Slug: prowp/text-columns-1
 * Categories: text
 * Keywords: job description
 * Block Types: core/columns
 */
?>

<!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group">
	<!-- wp:columns {"isStackedOnMobile":false} -->
	<div class="wp-block-columns is-not-stacked-on-mobile">
		<!-- wp:column {"width":"75%"} -->
		<div class="wp-block-column" style="flex-basis:75%">
			<!-- wp:group {"style":{"spacing":{"blockGap":"0.8em"}},"layout":{"type":"flex","orientation":"vertical"}} -->
			<div class="wp-block-group">
				<!-- wp:group {"style":{"spacing":{"blockGap":"0.5em"}},"layout":{"type":"flex","orientation":"vertical"}} -->
				<div class="wp-block-group">
					<!-- wp:heading {"level":3,"fontSize":"normal"} -->
					<h3 class="has-normal-font-size"><?php echo esc_html_x( 'Section title', 'sample title for section', 'prowp' ); ?></h3>
					<!-- /wp:heading -->
					<!-- wp:paragraph {"fontSize":"small"} -->
					<p class="has-small-font-size"><?php echo esc_html_x( 'Sample text, which can be edited using the Block editor, to fit your needs. The title can be edited as well, with an option to add a link.', 'sample description for section', 'prowp' ); ?></p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:group -->
				<!-- wp:list {"textColor":"secondary","className":"is-style-th-inline-bordered","fontSize":"small"} -->
				<ul class="is-style-th-inline-bordered has-secondary-color has-text-color has-small-font-size">
					<!-- wp:list-item -->
					<li><?php echo esc_html_x( 'List item', 'Example label for a section', 'prowp' ); ?></li>
					<!-- /wp:list-item -->
					<!-- wp:list-item -->
					<li><?php echo esc_html_x( 'List item', 'Example label for a section', 'prowp' ); ?></li>
					<!-- /wp:list-item -->
				</ul>
				<!-- /wp:list -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->
		<!-- wp:column {"width":"25%"} -->
		<div class="wp-block-column" style="flex-basis:25%">
			<!-- wp:paragraph {"align":"right","fontSize":"small"} -->
			<p class="has-text-align-right has-small-font-size"><a href="#"><strong><?php echo esc_html_x( 'Call to action', 'sample label for call to action', 'prowp' ); ?></strong></a></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->
</div>
<!-- /wp:group -->
