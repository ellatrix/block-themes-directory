<?php
/**
 * Title: Layout: Services Page
 * Slug: prowp/pages-services-1
 * Categories: pages
 * Keywords: Services
 * Block Types: core/post-content
 * Post Types: page
 */
?>

<!-- wp:group {"align":"wide","layout":{"type":"default"}} -->
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

<!-- wp:separator {"align":"wide","backgroundColor":"tertiary","className":"is-style-wide"} -->
<hr class="wp-block-separator alignwide has-text-color has-tertiary-color has-alpha-channel-opacity has-tertiary-background-color has-background is-style-wide"/>
<!-- /wp:separator -->

<!-- wp:group {"align":"wide","layout":{"type":"default"}} -->
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

<!-- wp:separator {"align":"wide","backgroundColor":"tertiary","className":"is-style-wide"} -->
<hr class="wp-block-separator alignwide has-text-color has-tertiary-color has-alpha-channel-opacity has-tertiary-background-color has-background is-style-wide"/>
<!-- /wp:separator -->

<!-- wp:group {"align":"wide","layout":{"type":"default"}} -->
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
					<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"flex","orientation":"vertical"}} -->
					<div class="wp-block-group">
						<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|40"}},"layout":{"type":"flex","orientation":"vertical"}} -->
						<div class="wp-block-group">
							<!-- wp:image {"id":25,"sizeSlug":"large","linkDestination":"none"} -->
							<figure class="wp-block-image size-large"><img src="<?php echo esc_url( get_template_directory_uri() ) . '/assets/img/patterns/640x426.webp'; ?>" alt="" class="wp-image-25"/></figure>
							<!-- /wp:image -->
							<!-- wp:heading {"level":3,"fontSize":"medium"} -->
							<h3 class="has-medium-font-size"><?php echo esc_html_x( 'Section title', 'sample title for section', 'prowp' ); ?></h3>
							<!-- /wp:heading -->
						</div>
						<!-- /wp:group -->
						<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"flex","orientation":"vertical"}} -->
						<div class="wp-block-group">
							<!-- wp:paragraph {"fontSize":"normal"} -->
							<p class="has-normal-font-size"><?php echo esc_html_x( 'Sample text, which can be edited using the Block editor, to fit your needs. The title can be edited as well, with an option to add a link.', 'sample description for section', 'prowp' ); ?></p>
							<!-- /wp:paragraph -->
							<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|secondary"}}}},"fontSize":"small"} -->
							<p class="has-link-color has-small-font-size"><a href="#"><?php echo esc_html_x( 'Learn more', 'sample label for link', 'prowp' ); ?></a></p>
							<!-- /wp:paragraph -->
						</div>
						<!-- /wp:group -->
					</div>
					<!-- /wp:group -->
				</div>
				<!-- /wp:column -->
				<!-- wp:column -->
				<div class="wp-block-column">
					<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"flex","orientation":"vertical"}} -->
					<div class="wp-block-group">
						<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|40"}},"layout":{"type":"flex","orientation":"vertical"}} -->
						<div class="wp-block-group">
							<!-- wp:image {"id":25,"sizeSlug":"large","linkDestination":"none"} -->
							<figure class="wp-block-image size-large"><img src="<?php echo esc_url( get_template_directory_uri() ) . '/assets/img/patterns/640x426.webp'; ?>" alt="" class="wp-image-25"/></figure>
							<!-- /wp:image -->
							<!-- wp:heading {"level":3,"fontSize":"medium"} -->
							<h3 class="has-medium-font-size"><?php echo esc_html_x( 'Section title', 'sample title for section', 'prowp' ); ?></h3>
							<!-- /wp:heading -->
						</div>
						<!-- /wp:group -->
						<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"flex","orientation":"vertical"}} -->
						<div class="wp-block-group">
							<!-- wp:paragraph {"fontSize":"normal"} -->
							<p class="has-normal-font-size"><?php echo esc_html_x( 'Use List View in the top toolbar of the Block editor to select main Group block of the section. Then, click Modify to make changes.', 'sample description for section', 'prowp' ); ?></p>
							<!-- /wp:paragraph -->
							<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|secondary"}}}},"fontSize":"small"} -->
							<p class="has-link-color has-small-font-size"><a href="#"><?php echo esc_html_x( 'Learn more', 'sample label for link', 'prowp' ); ?></a></p>
							<!-- /wp:paragraph -->
						</div>
						<!-- /wp:group -->
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
					<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"flex","orientation":"vertical"}} -->
					<div class="wp-block-group">
						<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|40"}},"layout":{"type":"flex","orientation":"vertical"}} -->
						<div class="wp-block-group">
							<!-- wp:image {"id":25,"sizeSlug":"large","linkDestination":"none"} -->
							<figure class="wp-block-image size-large"><img src="<?php echo esc_url( get_template_directory_uri() ) . '/assets/img/patterns/640x426.webp'; ?>" alt="" class="wp-image-25"/></figure>
							<!-- /wp:image -->
							<!-- wp:heading {"level":3,"fontSize":"medium"} -->
							<h3 class="has-medium-font-size"><?php echo esc_html_x( 'Section title', 'sample title for section', 'prowp' ); ?></h3>
							<!-- /wp:heading -->
						</div>
						<!-- /wp:group -->
						<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"flex","orientation":"vertical"}} -->
						<div class="wp-block-group">
							<!-- wp:paragraph {"fontSize":"normal"} -->
							<p class="has-normal-font-size"><?php echo esc_html_x( 'It is possible to duplicate or to remove items in the section using the Block editor. Also, change font sizes and colors if needed.', 'sample description for section', 'prowp' ); ?></p>
							<!-- /wp:paragraph -->
							<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|secondary"}}}},"fontSize":"small"} -->
							<p class="has-link-color has-small-font-size"><a href="#"><?php echo esc_html_x( 'Learn more', 'sample label for link', 'prowp' ); ?></a></p>
							<!-- /wp:paragraph -->
						</div>
						<!-- /wp:group -->
					</div>
					<!-- /wp:group -->
				</div>
				<!-- /wp:column -->
				<!-- wp:column -->
				<div class="wp-block-column">
					<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"flex","orientation":"vertical"}} -->
					<div class="wp-block-group">
						<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|40"}},"layout":{"type":"flex","orientation":"vertical"}} -->
						<div class="wp-block-group">
							<!-- wp:image {"id":25,"sizeSlug":"large","linkDestination":"none"} -->
							<figure class="wp-block-image size-large"><img src="<?php echo esc_url( get_template_directory_uri() ) . '/assets/img/patterns/640x426.webp'; ?>" alt="" class="wp-image-25"/></figure>
							<!-- /wp:image -->
							<!-- wp:heading {"level":3,"fontSize":"medium"} -->
							<h3 class="has-medium-font-size"><?php echo esc_html_x( 'Section title', 'sample title for section', 'prowp' ); ?></h3>
							<!-- /wp:heading -->
						</div>
						<!-- /wp:group -->
						<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"flex","orientation":"vertical"}} -->
						<div class="wp-block-group">
							<!-- wp:paragraph {"fontSize":"normal"} -->
							<p class="has-normal-font-size"><?php echo esc_html_x( 'Once finished making changes, select main Group block again and click Done to lock the newly made changes for the section.', 'sample description for section', 'prowp' ); ?></p>
							<!-- /wp:paragraph -->
							<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|secondary"}}}},"fontSize":"small"} -->
							<p class="has-link-color has-small-font-size"><a href="#"><?php echo esc_html_x( 'Learn more', 'sample label for link', 'prowp' ); ?></a></p>
							<!-- /wp:paragraph -->
						</div>
						<!-- /wp:group -->
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
			<p><?php echo esc_html_x( 'This pattern displays a grid of items with image, title, text and link. Also, the pattern displays a main section title and description.', 'sample description for section', 'prowp' ); ?></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->
</div>
<!-- /wp:group -->
