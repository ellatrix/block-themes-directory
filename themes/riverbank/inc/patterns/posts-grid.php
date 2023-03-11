<?php
/**
 * Pattern
 *
 * @author Themeisle
 * @package riverbank
 * @since 1.0.0
 *
 * slug: posts-grid
 * title: Posts grid
 * categories: Riverbank
 * keywords: posts, grid
 */

return array(
	'title'      => __( 'Posts grid', 'riverbank' ),
	'categories' => array( 'riverbank' ),
	'content'    => '
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"64px","bottom":"64px"},"margin":{"top":"0px","bottom":"0px"}}},"layout":{"inherit":true,"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="margin-top:0px;margin-bottom:0px;padding-top:64px;padding-bottom:64px">
	<!-- wp:query {"queryId":2,"query":{"perPage":"4","pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false},"displayLayout":{"type":"flex","columns":2},"align":"wide"} -->
	<div class="wp-block-query alignwide">
		<!-- wp:post-template -->
		
			<!-- wp:group {"style":{"border":{"width":"2px"},"spacing":{"padding":{"top":"0px","right":"0px","bottom":"0px","left":"0px"}}},"backgroundColor":"ti-bg-alt","layout":{"inherit":true,"type":"constrained"}} -->
			<div class="wp-block-group has-ti-bg-alt-background-color has-background" style="border-width:2px;padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px">
				<!-- wp:post-featured-image {"style":{"spacing":{"margin":{"top":"0","right":"0","bottom":"0","left":"0"}}}} /-->
				<!-- wp:group {"style":{"spacing":{"padding":{"top":"24px","right":"24px","bottom":"24px","left":"24px"},"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained"}} -->
				<div class="wp-block-group" style="margin-top:0;margin-bottom:0;padding-top:24px;padding-right:24px;padding-bottom:24px;padding-left:24px">
					<!-- wp:post-title {"textAlign":"center","isLink":true,"fontSize":"x-large"} /-->
					<!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"center"},"fontSize":"small"} -->
					<div class="wp-block-group has-small-font-size">
						<!-- wp:post-terms {"term":"category"} /-->
						<!-- wp:post-date /-->
					</div>
					<!-- /wp:group -->
				</div>
				<!-- /wp:group -->
			</div>
			<!-- /wp:group -->
			
			<!-- wp:spacer {"height":"20px"} -->
			<div style="height:20px" aria-hidden="true" class="wp-block-spacer"></div>
			<!-- /wp:spacer -->
		<!-- /wp:post-template -->
	
		<!-- wp:group {"style":{"spacing":{"margin":{"top":"24px"}}}} -->
		<div class="wp-block-group" style="margin-top:24px">
			<!-- wp:query-pagination {"textColor":"ti-fg","layout":{"type":"flex","justifyContent":"space-between"}} -->
			<!-- wp:query-pagination-previous /-->
			<!-- wp:query-pagination-numbers /-->
			<!-- wp:query-pagination-next /-->
			<!-- /wp:query-pagination -->
		</div>
		<!-- /wp:group -->
	
		<!-- wp:query-no-results -->
			<!-- wp:paragraph {"align":"center","placeholder":"Add text or blocks that will display when the query returns no results.","backgroundColor":"ti-bg-alt"} -->
			<p class="has-text-align-center has-ti-bg-alt-background-color has-background">' . __( 'Unfortunately no posts were found', 'riverbank' ) . '</p>
			<!-- /wp:paragraph -->
		<!-- /wp:query-no-results -->
	</div>
	<!-- /wp:query -->
</div>
<!-- /wp:group -->',
);

