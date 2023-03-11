<?php
/**
 * Title: Section with grid of items, each item displays image, title, description
 * Slug: prowp/columns-grid-1
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
					<!-- wp:columns {"isStackedOnMobile":false} -->
					<div class="wp-block-columns is-not-stacked-on-mobile">
						<!-- wp:column {"width":"96px"} -->
						<div class="wp-block-column" style="flex-basis:96px">
							<!-- wp:image {"id":25,"width":96,"height":96,"sizeSlug":"thumbnail","linkDestination":"none"} -->
							<figure class="wp-block-image size-thumbnail is-resized"><img src="<?php echo esc_url( get_template_directory_uri() ) . '/assets/img/patterns/96x96.webp'; ?>" alt="" class="wp-image-25" width="96" height="96"/></figure>
							<!-- /wp:image -->
						</div>
						<!-- /wp:column -->
						<!-- wp:column {"style":{"spacing":{"blockGap":"0.5em"}}} -->
						<div class="wp-block-column">
							<!-- wp:heading {"level":3,"fontSize":"normal"} -->
							<h3 class="has-normal-font-size"><?php echo esc_html_x( 'Section title', 'sample title for section', 'prowp' ); ?></h3>
							<!-- /wp:heading -->
							<!-- wp:paragraph {"textColor":"secondary","fontSize":"small"} -->
							<p class="has-secondary-color has-text-color has-small-font-size"><?php echo esc_html_x( 'Sample text, which can be edited using the Block editor, to fit your needs.', 'sample description for section', 'prowp' ); ?></p>
							<!-- /wp:paragraph -->
						</div>
						<!-- /wp:column -->
					</div>
					<!-- /wp:columns -->
					<!-- wp:columns {"isStackedOnMobile":false} -->
					<div class="wp-block-columns is-not-stacked-on-mobile">
						<!-- wp:column {"width":"96px"} -->
						<div class="wp-block-column" style="flex-basis:96px">
							<!-- wp:image {"id":25,"width":96,"height":96,"sizeSlug":"thumbnail","linkDestination":"none"} -->
							<figure class="wp-block-image size-thumbnail is-resized"><img src="<?php echo esc_url( get_template_directory_uri() ) . '/assets/img/patterns/96x96.webp'; ?>" alt="" class="wp-image-25" width="96" height="96"/></figure>
							<!-- /wp:image -->
						</div>
						<!-- /wp:column -->
						<!-- wp:column {"style":{"spacing":{"blockGap":"0.5em"}}} -->
						<div class="wp-block-column">
							<!-- wp:heading {"level":3,"fontSize":"normal"} -->
							<h3 class="has-normal-font-size"><?php echo esc_html_x( 'Section title', 'sample title for section', 'prowp' ); ?></h3>
							<!-- /wp:heading -->
							<!-- wp:paragraph {"textColor":"secondary","fontSize":"small"} -->
							<p class="has-secondary-color has-text-color has-small-font-size"><?php echo esc_html_x( 'Select main Group block of the section and click Modify to make changes.', 'sample description for section', 'prowp' ); ?></p>
							<!-- /wp:paragraph -->
						</div>
						<!-- /wp:column -->
					</div>
					<!-- /wp:columns -->
				</div>
				<!-- /wp:column -->
				<!-- wp:column -->
				<div class="wp-block-column">
					<!-- wp:columns {"isStackedOnMobile":false} -->
					<div class="wp-block-columns is-not-stacked-on-mobile">
						<!-- wp:column {"width":"96px"} -->
						<div class="wp-block-column" style="flex-basis:96px">
							<!-- wp:image {"id":25,"width":96,"height":96,"sizeSlug":"thumbnail","linkDestination":"none"} -->
							<figure class="wp-block-image size-thumbnail is-resized"><img src="<?php echo esc_url( get_template_directory_uri() ) . '/assets/img/patterns/96x96.webp'; ?>" alt="" class="wp-image-25" width="96" height="96"/></figure>
							<!-- /wp:image -->
						</div>
						<!-- /wp:column -->
						<!-- wp:column {"style":{"spacing":{"blockGap":"0.5em"}}} -->
						<div class="wp-block-column">
							<!-- wp:heading {"level":3,"fontSize":"normal"} -->
							<h3 class="has-normal-font-size"><?php echo esc_html_x( 'Section title', 'sample title for section', 'prowp' ); ?></h3>
							<!-- /wp:heading -->
							<!-- wp:paragraph {"textColor":"secondary","fontSize":"small"} -->
							<p class="has-secondary-color has-text-color has-small-font-size"><?php echo esc_html_x( 'You can duplicate or remove items in the section  using the Block editor.', 'sample description for section', 'prowp' ); ?></p>
							<!-- /wp:paragraph -->
						</div>
						<!-- /wp:column -->
					</div>
					<!-- /wp:columns -->
					<!-- wp:columns {"isStackedOnMobile":false} -->
					<div class="wp-block-columns is-not-stacked-on-mobile">
						<!-- wp:column {"width":"96px"} -->
						<div class="wp-block-column" style="flex-basis:96px">
							<!-- wp:image {"id":25,"width":96,"height":96,"sizeSlug":"thumbnail","linkDestination":"none"} -->
							<figure class="wp-block-image size-thumbnail is-resized"><img src="<?php echo esc_url( get_template_directory_uri() ) . '/assets/img/patterns/96x96.webp'; ?>" alt="" class="wp-image-25" width="96" height="96"/></figure>
							<!-- /wp:image -->
						</div>
						<!-- /wp:column -->
						<!-- wp:column {"style":{"spacing":{"blockGap":"0.5em"}}} -->
						<div class="wp-block-column">
							<!-- wp:heading {"level":3,"fontSize":"normal"} -->
							<h3 class="has-normal-font-size"><?php echo esc_html_x( 'Section title', 'sample title for section', 'prowp' ); ?></h3>
							<!-- /wp:heading -->
							<!-- wp:paragraph {"textColor":"secondary","fontSize":"small"} -->
							<p class="has-secondary-color has-text-color has-small-font-size"><?php echo esc_html_x( 'After making changes, select main Group block again and click Done.', 'sample description for section', 'prowp' ); ?></p>
							<!-- /wp:paragraph -->
						</div>
						<!-- /wp:column -->
					</div>
					<!-- /wp:columns -->
				</div>
				<!-- /wp:column -->
			</div>
			<!-- /wp:columns -->
		</div>
		<!-- /wp:column -->
		<!-- wp:column {"width":"25%","style":{"border":{"left":{"color":"var:preset|color|tertiary","width":"1px"}},"spacing":{"padding":{"left":"var:preset|spacing|60"}}},"fontSize":"small"} -->
		<div class="wp-block-column has-small-font-size" style="border-left-color:var(--wp--preset--color--tertiary);border-left-width:1px;padding-left:var(--wp--preset--spacing--60);flex-basis:25%">
			<!-- wp:paragraph -->
			<p><?php echo esc_html_x( 'This pattern displays a grid of items with image, title, and description. Also, the pattern displays a section title and description.', 'sample description for section', 'prowp' ); ?></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->
</div>
<!-- /wp:group -->
