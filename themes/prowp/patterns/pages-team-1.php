<?php
/**
 * Title: Layout: Team Page
 * Slug: prowp/pages-team-1
 * Categories: pages
 * Keywords: Team
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
			<!-- wp:paragraph {"fontSize":"medium"} -->
			<p class="has-medium-font-size"><strong><?php echo esc_html_x( 'Additional sub-title with', 'sample sub-title for section', 'prowp' ); ?> <mark style="background-color:rgba(0, 0, 0, 0)" class="has-inline-color has-secondary-color"><em><?php echo esc_html_x( 'highlighted text', 'Example text with custom color', 'prowp' ); ?></em></mark></strong></p>
			<!-- /wp:paragraph -->
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
			<!-- wp:separator {"backgroundColor":"tertiary","className":"is-style-wide"} -->
			<hr class="wp-block-separator has-text-color has-tertiary-color has-alpha-channel-opacity has-tertiary-background-color has-background is-style-wide" />
			<!-- /wp:separator -->
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
						<p class="has-normal-font-size"><?php echo esc_html_x( 'It is possible to duplicate or to remove items in the section using the Block editor. Also, change font sizes and colors if needed.', 'sample description for section', 'prowp' ); ?></p>
						<!-- /wp:paragraph -->
					</div>
					<!-- /wp:group -->
					<!-- wp:social-links {"iconColor":"base","iconColorValue":"#f6f6f8","iconBackgroundColor":"contrast","iconBackgroundColorValue":"#060606","showLabels":true,"size":"has-small-icon-size","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|20","left":"var:preset|spacing|20"}}},"className":"is-style-pill-shape"} -->
					<ul class="wp-block-social-links has-small-icon-size has-visible-labels has-icon-color has-icon-background-color is-style-pill-shape">
						<!-- wp:social-link {"url":"#","service":"linkedin"} /-->
					</ul>
					<!-- /wp:social-links -->
				</div>
				<!-- /wp:group -->
				<!-- wp:image {"sizeSlug":"large","linkDestination":"none"} -->
				<figure class="wp-block-image size-large"><img src="<?php echo esc_url( get_template_directory_uri() ) . '/assets/img/patterns/300x300.webp'; ?>" alt="" /></figure>
				<!-- /wp:image -->
			</div>
			<!-- /wp:group -->
			<!-- wp:separator {"backgroundColor":"tertiary","className":"is-style-wide"} -->
			<hr class="wp-block-separator has-text-color has-tertiary-color has-alpha-channel-opacity has-tertiary-background-color has-background is-style-wide" />
			<!-- /wp:separator -->
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
						<p class="has-normal-font-size"><?php echo esc_html_x( 'Use List View in the top toolbar of the Block editor to select main Group block of the section. Then, click Modify to make changes.', 'sample description for section', 'prowp' ); ?></p>
						<!-- /wp:paragraph -->
					</div>
					<!-- /wp:group -->
					<!-- wp:social-links {"iconColor":"base","iconColorValue":"#f6f6f8","iconBackgroundColor":"contrast","iconBackgroundColorValue":"#060606","showLabels":true,"size":"has-small-icon-size","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|20","left":"var:preset|spacing|20"}}},"className":"is-style-pill-shape"} -->
					<ul class="wp-block-social-links has-small-icon-size has-visible-labels has-icon-color has-icon-background-color is-style-pill-shape">
						<!-- wp:social-link {"url":"https://wordpress.org/themes/prowp/","service":"wordpress"} /-->
						<!-- wp:social-link {"url":"#","service":"dribbble"} /-->
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
		<!-- /wp:column -->
		<!-- wp:column {"width":"25%","style":{"spacing":{"padding":{"left":"var:preset|spacing|60"}},"border":{"left":{"color":"var:preset|color|tertiary","width":"1px"}}},"fontSize":"small"} -->
		<div class="wp-block-column has-small-font-size" style="border-left-color:var(--wp--preset--color--tertiary);border-left-width:1px;padding-left:var(--wp--preset--spacing--60);flex-basis:25%">
			<!-- wp:paragraph -->
			<p><?php echo esc_html_x( 'This pattern displays a page header section, with main page title, sub-title text, and additional content for the page.', 'sample description for section', 'prowp' ); ?></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->
	<!-- wp:separator {"backgroundColor":"tertiary","className":"is-style-wide"} -->
	<hr class="wp-block-separator has-text-color has-tertiary-color has-alpha-channel-opacity has-tertiary-background-color has-background is-style-wide" />
	<!-- /wp:separator -->
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
			<!-- wp:paragraph {"fontSize":"medium"} -->
			<p class="has-medium-font-size"><strong><?php echo esc_html_x( 'Additional sub-title with', 'sample sub-title for section', 'prowp' ); ?> <mark style="background-color:rgba(0, 0, 0, 0)" class="has-inline-color has-secondary-color"><em><?php echo esc_html_x( 'highlighted text', 'Example text with custom color', 'prowp' ); ?></em></mark></strong>
			</p>
			<!-- /wp:paragraph -->
			<!-- wp:columns {"isStackedOnMobile":false} -->
			<div class="wp-block-columns is-not-stacked-on-mobile">
				<!-- wp:column {"width":"75%"} -->
				<div class="wp-block-column" style="flex-basis:75%">
					<!-- wp:group {"style":{"spacing":{"blockGap":"0.75em"}},"layout":{"type":"flex","orientation":"vertical"}} -->
					<div class="wp-block-group">
						<!-- wp:group {"style":{"spacing":{"blockGap":"0.45em"}},"layout":{"type":"flex","orientation":"vertical"}} -->
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
			<!-- wp:separator {"backgroundColor":"tertiary","className":"is-style-wide"} -->
			<hr class="wp-block-separator has-text-color has-tertiary-color has-alpha-channel-opacity has-tertiary-background-color has-background is-style-wide" />
			<!-- /wp:separator -->
			<!-- wp:columns {"isStackedOnMobile":false} -->
			<div class="wp-block-columns is-not-stacked-on-mobile">
				<!-- wp:column {"width":"75%"} -->
				<div class="wp-block-column" style="flex-basis:75%">
					<!-- wp:group {"style":{"spacing":{"blockGap":"0.75em"}},"layout":{"type":"flex","orientation":"vertical"}} -->
					<div class="wp-block-group">
						<!-- wp:group {"style":{"spacing":{"blockGap":"0.45em"}},"layout":{"type":"flex","orientation":"vertical"}} -->
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
			<!-- wp:separator {"backgroundColor":"tertiary","className":"is-style-wide"} -->
			<hr class="wp-block-separator has-text-color has-tertiary-color has-alpha-channel-opacity has-tertiary-background-color has-background is-style-wide" />
			<!-- /wp:separator -->
			<!-- wp:columns {"isStackedOnMobile":false} -->
			<div class="wp-block-columns is-not-stacked-on-mobile">
				<!-- wp:column {"width":"75%"} -->
				<div class="wp-block-column" style="flex-basis:75%">
					<!-- wp:group {"style":{"spacing":{"blockGap":"0.75em"}},"layout":{"type":"flex","orientation":"vertical"}} -->
					<div class="wp-block-group">
						<!-- wp:group {"style":{"spacing":{"blockGap":"0.45em"}},"layout":{"type":"flex","orientation":"vertical"}} -->
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
		<!-- /wp:column -->
		<!-- wp:column {"width":"25%","style":{"spacing":{"padding":{"left":"var:preset|spacing|60"}},"border":{"left":{"color":"var:preset|color|tertiary","width":"1px"}}},"fontSize":"small"} -->
		<div class="wp-block-column has-small-font-size" style="border-left-color:var(--wp--preset--color--tertiary);border-left-width:1px;padding-left:var(--wp--preset--spacing--60);flex-basis:25%">
			<!-- wp:paragraph -->
			<p><?php echo esc_html_x( 'This pattern displays a page header section, with main page title, sub-title text, and additional content for the page.', 'sample description for section', 'prowp' ); ?></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->
</div>
<!-- /wp:group -->
