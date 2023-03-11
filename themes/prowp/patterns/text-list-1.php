<?php
/**
 * Title: Section with list of media and text, and introduction above
 * Slug: prowp/text-list-1
 * Categories: text
 * Keywords: list, columns
 * Block Types: core/columns
 */
?>

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|60"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group">
	<!-- wp:paragraph -->
	<p><strong><?php echo esc_html_x( 'Example of bold text.', 'sample text for section', 'prowp' ); ?></strong> <?php echo esc_html_x( 'This is a pre-made pattern layout that displays Paragraph block with text as introduction. Below, the pattern displays list with Columns with text and media.', 'sample text for section', 'prowp' ); ?></p>
	<!-- /wp:paragraph -->
	<!-- wp:separator {"backgroundColor":"tertiary","className":"is-style-wide"} -->
	<hr class="wp-block-separator has-text-color has-tertiary-color has-alpha-channel-opacity has-tertiary-background-color has-background is-style-wide" />
	<!-- /wp:separator -->
	<!-- wp:columns {"isStackedOnMobile":false,"style":{"spacing":{}}} -->
	<div class="wp-block-columns is-not-stacked-on-mobile">
		<!-- wp:column {"width":"96px"} -->
		<div class="wp-block-column" style="flex-basis:96px">
			<!-- wp:image {"id":1533,"sizeSlug":"full","linkDestination":"none"} -->
			<figure class="wp-block-image size-full"><img src="<?php echo esc_url( get_template_directory_uri() ) . '/assets/img/patterns/300x300.webp'; ?>" alt="" class="wp-image-1533" /></figure>
			<!-- /wp:image -->
		</div>
		<!-- /wp:column -->
		<!-- wp:column {"width":"100%"} -->
		<div class="wp-block-column" style="flex-basis:100%">
			<!-- wp:group {"style":{"spacing":{"blockGap":"0.25em","padding":{"right":"2vw"}}},"layout":{"type":"flex","orientation":"vertical"}} -->
			<div class="wp-block-group" style="padding-right:2vw">
				<!-- wp:heading {"level":3,"className":"wp-block-heading","fontSize":"normal"} -->
				<h3 class="wp-block-heading has-normal-font-size"><?php echo esc_html_x( 'Section title', 'sample title for section', 'prowp' ); ?></h3>
				<!-- /wp:heading -->
				<!-- wp:paragraph {"textColor":"secondary","fontSize":"normal"} -->
				<p class="has-secondary-color has-text-color has-normal-font-size"><?php echo esc_html_x( 'This is example of section description text. The text has custom color, which can be changed in Color settings in Settings Sidebar.', 'sample text for section', 'prowp' ); ?></p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->
	<!-- wp:separator {"backgroundColor":"tertiary","className":"is-style-wide"} -->
	<hr class="wp-block-separator has-text-color has-tertiary-color has-alpha-channel-opacity has-tertiary-background-color has-background is-style-wide" />
	<!-- /wp:separator -->
	<!-- wp:columns {"isStackedOnMobile":false,"style":{"spacing":{}}} -->
	<div class="wp-block-columns is-not-stacked-on-mobile">
		<!-- wp:column {"width":"96px"} -->
		<div class="wp-block-column" style="flex-basis:96px">
			<!-- wp:image {"id":1533,"sizeSlug":"full","linkDestination":"none"} -->
			<figure class="wp-block-image size-full"><img src="<?php echo esc_url( get_template_directory_uri() ) . '/assets/img/patterns/300x300.webp'; ?>" alt="" class="wp-image-1533" /></figure>
			<!-- /wp:image -->
		</div>
		<!-- /wp:column -->
		<!-- wp:column {"width":"100%"} -->
		<div class="wp-block-column" style="flex-basis:100%">
			<!-- wp:group {"style":{"spacing":{"blockGap":"0.25em","padding":{"right":"1.5vw"}}},"layout":{"type":"flex","orientation":"vertical"}} -->
			<div class="wp-block-group" style="padding-right:1.5vw">
				<!-- wp:heading {"level":3,"className":"wp-block-heading","fontSize":"normal"} -->
				<h3 class="wp-block-heading has-normal-font-size"><?php echo esc_html_x( 'Section title', 'sample title for section', 'prowp' ); ?></h3>
				<!-- /wp:heading -->
				<!-- wp:paragraph {"textColor":"secondary","fontSize":"normal"} -->
				<p class="has-secondary-color has-text-color has-normal-font-size"><?php echo esc_html_x( 'Use editor options to customize content of this pattern by Themes Harbor. WordPress provides many options by default.', 'sample text for section', 'prowp' ); ?></p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->
	<!-- wp:separator {"backgroundColor":"tertiary","className":"is-style-wide"} -->
	<hr class="wp-block-separator has-text-color has-tertiary-color has-alpha-channel-opacity has-tertiary-background-color has-background is-style-wide" />
	<!-- /wp:separator -->
	<!-- wp:columns {"isStackedOnMobile":false,"style":{"spacing":{}}} -->
	<div class="wp-block-columns is-not-stacked-on-mobile">
		<!-- wp:column {"width":"96px"} -->
		<div class="wp-block-column" style="flex-basis:96px">
			<!-- wp:image {"id":1533,"sizeSlug":"full","linkDestination":"none"} -->
			<figure class="wp-block-image size-full"><img src="<?php echo esc_url( get_template_directory_uri() ) . '/assets/img/patterns/300x300.webp'; ?>" alt="" class="wp-image-1533" /></figure>
			<!-- /wp:image -->
		</div>
		<!-- /wp:column -->
		<!-- wp:column {"width":"100%"} -->
		<div class="wp-block-column" style="flex-basis:100%">
			<!-- wp:group {"style":{"spacing":{"blockGap":"0.25em","padding":{"right":"1.5vw"}}},"layout":{"type":"flex","orientation":"vertical"}} -->
			<div class="wp-block-group" style="padding-right:1.5vw">
				<!-- wp:heading {"level":3,"className":"wp-block-heading","fontSize":"normal"} -->
				<h3 class="wp-block-heading has-normal-font-size"><?php echo esc_html_x( 'Section title', 'sample title for section', 'prowp' ); ?></h3>
				<!-- /wp:heading -->
				<!-- wp:paragraph {"textColor":"secondary","fontSize":"normal"} -->
				<p class="has-secondary-color has-text-color has-normal-font-size"><?php echo esc_html_x( 'The title can be edited as well, with an option to add a link. It is possible to duplicate or to remove items in the section.', 'sample text for section', 'prowp' ); ?></p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->
</div>
<!-- /wp:group -->
