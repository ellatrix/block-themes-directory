<?php
/**
 * Title: Layout: Blog Page (#2)
 * Slug: prowp/pages-posts-2
 * Categories: pages
 * Keywords: blog, news, archive
 * Block Types: core/post-content
 * Post Types: page
 */
?>

<!-- wp:group {"align":"wide","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide">
	<!-- wp:columns {"align":"wide"} -->
	<div class="wp-block-columns alignwide">
		<!-- wp:column {"width":"25%","style":{"spacing":{"blockGap":"1em"}},"fontSize":"small"} -->
		<div class="wp-block-column has-small-font-size" style="flex-basis:25%">
			<!-- wp:post-title {"level":1,"style":{"typography":{"fontStyle":"normal","fontWeight":"600"}},"textColor":"secondary","fontSize":"normal"} /-->
			<!-- wp:paragraph {"style":{"spacing":{"padding":{"right":"var:preset|spacing|60"}}}} -->
			<p style="padding-right:var(--wp--preset--spacing--60)"><?php echo esc_html_x( 'This pattern uses multiple Posts List blocks, by default it shows all recent posts but it is possible to filter by category or tag', 'sample sub-title for section', 'prowp' ); ?></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:column -->
		<!-- wp:column {"width":"50%"} -->
		<div class="wp-block-column" style="flex-basis:50%">
			<!-- wp:search {"label":"Search","showLabel":false,"placeholder":"Search website...","buttonText":"Search","buttonPosition":"button-inside","fontSize":"normal"} /-->
			<!-- wp:separator {"backgroundColor":"tertiary","className":"is-style-wide"} -->
			<hr class="wp-block-separator has-text-color has-tertiary-color has-alpha-channel-opacity has-tertiary-background-color has-background is-style-wide" />
			<!-- /wp:separator -->
			<!-- wp:group {"align":"wide","layout":{"type":"constrained"}} -->
			<div class="wp-block-group alignwide">
				<!-- wp:heading {"textColor":"secondary","fontSize":"small"} -->
				<h2 class="has-secondary-color has-text-color has-small-font-size"><?php echo esc_html_x( 'Section title', 'sample title for section', 'prowp' ); ?></h2>
				<!-- /wp:heading -->
				<!-- wp:query {"queryId":3,"query":{"perPage":"4","pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false,"taxQuery":null},"displayLayout":{"type":"flex","columns":2},"align":"wide"} -->
				<div class="wp-block-query alignwide">
					<!-- wp:post-template -->
					<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|40"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
					<div class="wp-block-group">
						<!-- wp:post-featured-image {"width":"96px","height":"96px"} /-->
						<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"className":"th-flex-1","layout":{"type":"flex","orientation":"vertical"}} -->
						<div class="wp-block-group th-flex-1">
							<!-- wp:post-title {"isLink":true,"fontSize":"normal"} /-->
							<!-- wp:post-date {"textColor":"secondary","fontSize":"small"} /-->
						</div>
						<!-- /wp:group -->
					</div>
					<!-- /wp:group -->
					<!-- /wp:post-template -->
					<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|secondary"}}}},"textColor":"secondary","fontSize":"small"} -->
					<p class="has-secondary-color has-text-color has-link-color has-small-font-size"><a href="#"><strong><?php echo esc_html_x( 'Call to action link', 'sample label for call to action', 'prowp' ); ?></strong></a></p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:query -->
			</div>
			<!-- /wp:group -->
			<!-- wp:separator {"backgroundColor":"tertiary","className":"is-style-wide"} -->
			<hr class="wp-block-separator has-text-color has-tertiary-color has-alpha-channel-opacity has-tertiary-background-color has-background is-style-wide" />
			<!-- /wp:separator -->
			<!-- wp:group {"align":"wide","layout":{"type":"constrained"}} -->
			<div class="wp-block-group alignwide">
				<!-- wp:heading {"textColor":"secondary","fontSize":"small"} -->
				<h2 class="has-secondary-color has-text-color has-small-font-size"><?php echo esc_html_x( 'Section title', 'sample title for section', 'prowp' ); ?></h2>
				<!-- /wp:heading -->
				<!-- wp:query {"queryId":3,"query":{"perPage":"4","pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false},"displayLayout":{"type":"flex","columns":2},"align":"wide"} -->
				<div class="wp-block-query alignwide">
					<!-- wp:post-template -->
					<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|40"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
					<div class="wp-block-group">
						<!-- wp:post-featured-image {"width":"96px","height":"96px"} /-->
						<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"className":"th-flex-1","layout":{"type":"flex","orientation":"vertical"}} -->
						<div class="wp-block-group th-flex-1">
							<!-- wp:post-title {"isLink":true,"fontSize":"normal"} /-->
							<!-- wp:post-date {"textColor":"secondary","fontSize":"small"} /-->
						</div>
						<!-- /wp:group -->
					</div>
					<!-- /wp:group -->
					<!-- /wp:post-template -->
					<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|secondary"}}}},"textColor":"secondary","fontSize":"small"} -->
					<p class="has-secondary-color has-text-color has-link-color has-small-font-size"><a href="#"><strong><?php echo esc_html_x( 'Call to action link', 'sample label for call to action', 'prowp' ); ?></strong></a></p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:query -->
			</div>
			<!-- /wp:group -->
			<!-- wp:separator {"backgroundColor":"tertiary","className":"is-style-wide"} -->
			<hr class="wp-block-separator has-text-color has-tertiary-color has-alpha-channel-opacity has-tertiary-background-color has-background is-style-wide" />
			<!-- /wp:separator -->
			<!-- wp:group {"align":"wide","layout":{"type":"constrained"}} -->
			<div class="wp-block-group alignwide">
				<!-- wp:heading {"textColor":"secondary","fontSize":"small"} -->
				<h2 class="has-secondary-color has-text-color has-small-font-size"><?php echo esc_html_x( 'Section title', 'sample title for section', 'prowp' ); ?></h2>
				<!-- /wp:heading -->
				<!-- wp:query {"queryId":3,"query":{"perPage":"4","pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false},"displayLayout":{"type":"flex","columns":2},"align":"wide"} -->
				<div class="wp-block-query alignwide">
					<!-- wp:post-template -->
					<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|40"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
					<div class="wp-block-group">
						<!-- wp:post-featured-image {"width":"96px","height":"96px"} /-->
						<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"className":"th-flex-1","layout":{"type":"flex","orientation":"vertical"}} -->
						<div class="wp-block-group th-flex-1">
							<!-- wp:post-title {"isLink":true,"fontSize":"normal"} /-->
							<!-- wp:post-date {"textColor":"secondary","fontSize":"small"} /-->
						</div>
						<!-- /wp:group -->
					</div>
					<!-- /wp:group -->
					<!-- /wp:post-template -->
					<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|secondary"}}}},"textColor":"secondary","fontSize":"small"} -->
					<p class="has-secondary-color has-text-color has-link-color has-small-font-size"><a href="#"><strong><?php echo esc_html_x( 'Call to action link', 'sample label for call to action', 'prowp' ); ?></strong></a></p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:query -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->
		<!-- wp:column {"width":"25%","style":{"border":{"left":{"color":"var:preset|color|tertiary","width":"1px"}},"spacing":{"padding":{"left":"var:preset|spacing|60"}}},"fontSize":"small"} -->
		<div class="wp-block-column has-small-font-size" style="border-left-color:var(--wp--preset--color--tertiary);border-left-width:1px;padding-left:var(--wp--preset--spacing--60);flex-basis:25%">
			<!-- wp:image {"id":1533,"sizeSlug":"full","linkDestination":"none"} -->
			<figure class="wp-block-image size-full"><img src="<?php echo esc_url( get_template_directory_uri() ) . '/assets/img/patterns/300x300.webp'; ?>" alt="" class="wp-image-1533" />
				<figcaption class="wp-element-caption"><?php echo esc_html_x( 'Add optional caption. It is possible to use ads instead of image in the sidebar.', 'Example caption for a section', 'prowp' ); ?></figcaption>
			</figure>
			<!-- /wp:image -->
			<!-- wp:separator {"backgroundColor":"tertiary","className":"is-style-wide"} -->
			<hr class="wp-block-separator has-text-color has-tertiary-color has-alpha-channel-opacity has-tertiary-background-color has-background is-style-wide" />
			<!-- /wp:separator -->
			<!-- wp:group {"style":{"spacing":{"blockGap":"0.75em"}},"layout":{"type":"constrained"}} -->
			<div class="wp-block-group">
				<!-- wp:heading {"fontSize":"small"} -->
				<h2 class="has-small-font-size"><?php echo esc_html_x( 'Sidebar section title', 'Example title for a section', 'prowp' ); ?></h2>
				<!-- /wp:heading -->
				<!-- wp:categories {"style":{"spacing":{"padding":{"left":"var:preset|spacing|40"}}}} /-->
			</div>
			<!-- /wp:group -->
			<!-- wp:separator {"backgroundColor":"tertiary","className":"is-style-wide"} -->
			<hr class="wp-block-separator has-text-color has-tertiary-color has-alpha-channel-opacity has-tertiary-background-color has-background is-style-wide" />
			<!-- /wp:separator -->
			<!-- wp:group {"style":{"spacing":{"blockGap":"0.75em"}},"layout":{"type":"constrained"}} -->
			<div class="wp-block-group">
				<!-- wp:heading {"fontSize":"small"} -->
				<h2 class="has-small-font-size"><?php echo esc_html_x( 'Sidebar section title', 'Example title for a section', 'prowp' ); ?></h2>
				<!-- /wp:heading -->
				<!-- wp:list {"style":{"spacing":{"padding":{"left":"var:preset|spacing|40"}}}} -->
				<ul style="padding-left:var(--wp--preset--spacing--40)">
					<!-- wp:list-item -->
					<li><?php echo esc_html_x( 'List item', 'Example label for a section', 'prowp' ); ?></li>
					<!-- /wp:list-item -->
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
			<!-- wp:separator {"backgroundColor":"tertiary","className":"is-style-wide"} -->
			<hr class="wp-block-separator has-text-color has-tertiary-color has-alpha-channel-opacity has-tertiary-background-color has-background is-style-wide" />
			<!-- /wp:separator -->
			<!-- wp:group {"style":{"spacing":{"blockGap":"0.75em"}},"layout":{"type":"constrained"}} -->
			<div class="wp-block-group">
				<!-- wp:heading {"fontSize":"small"} -->
				<h2 class="has-small-font-size"><?php echo esc_html_x( 'Sidebar section title', 'Example title for a section', 'prowp' ); ?></h2>
				<!-- /wp:heading -->
				<!-- wp:tag-cloud {"smallestFontSize":"1em","largestFontSize":"1em"} /-->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->
</div>
<!-- /wp:group -->
