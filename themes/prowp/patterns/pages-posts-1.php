<?php
/**
 * Title: Layout: Blog Page (#1)
 * Slug: prowp/pages-posts-1
 * Categories: pages
 * Keywords: blog, news
 * Block Types: core/post-content
 * Post Types: page
 */
?>

<!-- wp:columns {"align":"wide"} -->
<div class="wp-block-columns alignwide">
	<!-- wp:column {"width":"25%","fontSize":"small","style":{"spacing":{"blockGap":"0.5em"}}} -->
	<div class="wp-block-column has-small-font-size" style="flex-basis:25%">
		<!-- wp:post-title {"level":1,"textColor":"secondary","fontSize":"normal"} /-->
		<!-- wp:categories {"displayAsDropdown":true} /-->
	</div>
	<!-- /wp:column -->
	<!-- wp:column {"width":"50%"} -->
	<div class="wp-block-column" style="flex-basis:50%">
		<!-- wp:query {"queryId":16,"query":{"perPage":"10","pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false},"displayLayout":{"type":"list"}} -->
		<div class="wp-block-query">
			<!-- wp:post-template -->
			<!-- wp:group {"align":"wide","layout":{"type":"constrained"}} -->
			<div class="wp-block-group alignwide">
				<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|40"}},"layout":{"type":"constrained"}} -->
				<div class="wp-block-group">
					<!-- wp:group {"style":{"spacing":{"blockGap":"0.5em"}},"layout":{"type":"flex","orientation":"vertical"}} -->
					<div class="wp-block-group">
						<!-- wp:post-title {"isLink":true,"fontSize":"medium"} /-->
						<!-- wp:group {"style":{"elements":{"link":{"color":{"text":"var:preset|color|secondary"}}}},"textColor":"secondary","layout":{"type":"flex","flexWrap":"wrap"},"fontSize":"small"} -->
						<div class="wp-block-group has-secondary-color has-text-color has-link-color has-small-font-size">
							<!-- wp:post-date {"style":{"typography":{"fontStyle":"normal","fontWeight":"600"}}} /-->
							<!-- wp:post-terms {"term":"category"} /-->
						</div>
						<!-- /wp:group -->
					</div>
					<!-- /wp:group -->
					<!-- wp:post-featured-image {"width":"100%","height":"160px","style":{"spacing":{"margin":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60"}}}} /-->
					<!-- wp:post-excerpt {"moreText":"Read More","fontSize":"normal"} /-->
				</div>
				<!-- /wp:group -->
				<!-- wp:separator {"backgroundColor":"tertiary","className":"is-style-wide"} -->
				<hr class="wp-block-separator has-text-color has-tertiary-color has-alpha-channel-opacity has-tertiary-background-color has-background is-style-wide"/>
				<!-- /wp:separator -->
			</div>
			<!-- /wp:group -->
			<!-- /wp:post-template -->
			<!-- wp:query-pagination {"layout":{"type":"flex","justifyContent":"space-between"}} -->
			<!-- wp:query-pagination-previous {"fontSize":"small"} /-->
			<!-- wp:query-pagination-numbers {"fontSize":"normal"} /-->
			<!-- wp:query-pagination-next {"fontSize":"small"} /-->
			<!-- /wp:query-pagination -->
		</div>
		<!-- /wp:query -->
	</div>
	<!-- /wp:column -->
	<!-- wp:column {"width":"25%","style":{"border":{"left":{"color":"var:preset|color|tertiary","width":"1px"}},"spacing":{"padding":{"left":"var:preset|spacing|60"}}},"fontSize":"small"} -->
	<div class="wp-block-column has-small-font-size" style="border-left-color:var(--wp--preset--color--tertiary);border-left-width:1px;padding-left:var(--wp--preset--spacing--60);flex-basis:25%">
		<!-- wp:group {"style":{"spacing":{"blockGap":"0.75em"}},"layout":{"type":"constrained"}} -->
		<div class="wp-block-group">
			<!-- wp:group {"layout":{"type":"flex","orientation":"vertical"}} -->
			<div class="wp-block-group">
				<!-- wp:image {"id":25,"sizeSlug":"large","linkDestination":"none"} -->
				<figure class="wp-block-image size-large"><img src="<?php echo esc_url( get_template_directory_uri() ) . '/assets/img/patterns/160x160.webp'; ?>" alt="" class="wp-image-25"/></figure>
				<!-- /wp:image -->
				<!-- wp:heading {"fontSize":"small"} -->
				<h2 class="has-small-font-size"><?php echo esc_html_x( 'Sidebar section title', 'Example title for a section', 'prowp' ); ?></h2>
				<!-- /wp:heading -->
			</div>
			<!-- /wp:group -->
			<!-- wp:paragraph -->
			<p><?php echo esc_html_x( 'Use the Block editor to modify the sidebar section, and add as many additional content to the sidebar as needed.', 'Help text for sidebar area', 'prowp' ); ?></p>
			<!-- /wp:paragraph -->
			<!-- wp:paragraph -->
			<p><a href="https://themesharbor.com/"><?php echo esc_html_x( 'Learn more', 'sample label for link', 'prowp' ); ?></a></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->
		<!-- wp:separator {"backgroundColor":"tertiary"} -->
		<hr class="wp-block-separator has-text-color has-tertiary-color has-alpha-channel-opacity has-tertiary-background-color has-background"/>
		<!-- /wp:separator -->
		<!-- wp:group {"style":{"spacing":{"blockGap":"0.75em"}},"layout":{"type":"constrained"}} -->
		<div class="wp-block-group">
			<!-- wp:heading {"fontSize":"small"} -->
			<h2 class="has-small-font-size"><?php echo esc_html_x( 'Sidebar section title', 'Example title for a section', 'prowp' ); ?></h2>
			<!-- /wp:heading -->
			<!-- wp:paragraph -->
			<p><?php echo esc_html_x( 'Use the Block editor to modify the sidebar section, and add as many additional content to the sidebar as needed.', 'Help text for sidebar area', 'prowp' ); ?></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->
	</div>
	<!-- /wp:column -->
</div>
<!-- /wp:columns -->
