<?php
/**
 * Title: Section with grid of items, each item displays title, description
 * Slug: prowp/columns-grid-2
 * Categories: columns
 * Keywords: grid
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
			<!-- wp:columns -->
			<div class="wp-block-columns">
				<!-- wp:column -->
				<div class="wp-block-column">
					<!-- wp:group {"style":{"spacing":{"blockGap":"0.5em"}},"layout":{"type":"flex","orientation":"vertical"}} -->
					<div class="wp-block-group">
						<!-- wp:heading {"level":3,"fontSize":"medium"} -->
						<h3 class="has-medium-font-size"><?php echo esc_html_x( 'Section title', 'sample title for section', 'prowp' ); ?></h3>
						<!-- /wp:heading -->
						<!-- wp:paragraph {"fontSize":"normal"} -->
						<p class="has-normal-font-size"><?php echo esc_html_x( 'Sample text, which can be edited using the Block editor, to fit your needs. The title can be edited as well, with an option to add a link.', 'sample description for section', 'prowp' ); ?></p>
						<!-- /wp:paragraph -->
					</div>
					<!-- /wp:group -->
				</div>
				<!-- /wp:column -->
				<!-- wp:column -->
				<div class="wp-block-column">
					<!-- wp:group {"style":{"spacing":{"blockGap":"0.5em"}},"layout":{"type":"flex","orientation":"vertical"}} -->
					<div class="wp-block-group">
						<!-- wp:heading {"level":3,"fontSize":"medium"} -->
						<h3 class="has-medium-font-size"><?php echo esc_html_x( 'Section title', 'sample title for section', 'prowp' ); ?></h3>
						<!-- /wp:heading -->
						<!-- wp:paragraph {"fontSize":"normal"} -->
						<p class="has-normal-font-size"><?php echo esc_html_x( 'Use List View in the top toolbar of the Block editor to select main Group block of the section. Then, click Modify to make changes.', 'sample description for section', 'prowp' ); ?></p>
						<!-- /wp:paragraph -->
					</div>
					<!-- /wp:group -->
				</div>
				<!-- /wp:column -->
			</div>
			<!-- /wp:columns -->
			<!-- wp:columns -->
			<div class="wp-block-columns">
				<!-- wp:column -->
				<div class="wp-block-column">
					<!-- wp:group {"style":{"spacing":{"blockGap":"0.5em"}},"layout":{"type":"flex","orientation":"vertical"}} -->
					<div class="wp-block-group">
						<!-- wp:heading {"level":3,"fontSize":"medium"} -->
						<h3 class="has-medium-font-size"><?php echo esc_html_x( 'Section title', 'sample title for section', 'prowp' ); ?></h3>
						<!-- /wp:heading -->
						<!-- wp:paragraph {"fontSize":"normal"} -->
						<p class="has-normal-font-size"><?php echo esc_html_x( 'It is possible to duplicate or to remove items in the section using the Block editor. Also, change font sizes and colors if needed.', 'sample description for section', 'prowp' ); ?></p>
						<!-- /wp:paragraph -->
					</div>
					<!-- /wp:group -->
				</div>
				<!-- /wp:column -->
				<!-- wp:column -->
				<div class="wp-block-column">
					<!-- wp:group {"style":{"spacing":{"blockGap":"0.5em"}},"layout":{"type":"flex","orientation":"vertical"}} -->
					<div class="wp-block-group">
						<!-- wp:heading {"level":3,"fontSize":"medium"} -->
						<h3 class="has-medium-font-size"><?php echo esc_html_x( 'Section title', 'sample title for section', 'prowp' ); ?></h3>
						<!-- /wp:heading -->
						<!-- wp:paragraph {"fontSize":"normal"} -->
						<p class="has-normal-font-size"><?php echo esc_html_x( 'Once finished making changes, select main Group block again and click Done to lock the newly made changes for the section.', 'sample description for section', 'prowp' ); ?></p>
						<!-- /wp:paragraph -->
					</div>
					<!-- /wp:group -->
				</div>
				<!-- /wp:column -->
			</div>
			<!-- /wp:columns -->
		</div>
		<!-- /wp:column -->
		<!-- wp:column {"width":"25%","style":{"spacing":{"padding":{"left":"var:preset|spacing|60"}},"border":{"left":{"color":"var:preset|color|tertiary","width":"1px"}}},"fontSize":"small"} -->
		<div class="wp-block-column has-small-font-size" style="border-left-color:var(--wp--preset--color--tertiary);border-left-width:1px;padding-left:var(--wp--preset--spacing--60);flex-basis:25%">
			<!-- wp:paragraph -->
			<p><?php echo esc_html_x( 'This pattern displays a grid of items with title and description. Also, the pattern displays main page title and description.', 'sample description for section', 'prowp' ); ?></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->
</div>
<!-- /wp:group -->
