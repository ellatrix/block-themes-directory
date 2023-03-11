<?php
return array(
			'title'         => __( 'Posts - bordered', 'sampler' ),
			'blockTypes'	=> array( 'core/query' ),
			'categories'    => array( 'sampler-posts' ),
			'keywords'		=> array( 'query', 'blog' ),
			'viewportWidth' => 1200,
			'content'       => '
<!-- wp:query {"queryId":1,"query":{"offset":0,"perPage":10,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","sticky":"","inherit":false},"displayLayout":{"type":"flex","columns":2},"align":"wide","className":"is-style-posts-equal-height"} -->
<div class="wp-block-query alignwide is-style-posts-equal-height">

	<!-- wp:post-template -->

		<!-- wp:group {"backgroundColor":"white","style":{"spacing":{"padding":{"top":"0px","right":"0px","bottom":"0px","left":"0px"}},"border":{"width":"1px","radius":"11px","style":"solid"}},"borderColor":"very-light-gray","className":"is-style-shadow-hover"} -->
		<div class="wp-block-group has-background has-white-background-color has-border-color has-very-light-gray-border-color is-style-shadow-hover" style="padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px;border-radius:11px;border-width:1px;border-style:solid">

			<!-- wp:post-featured-image /-->

			<!-- wp:group {"style":{"spacing":{"padding":{"top":"1.25em","right":"2.375em","bottom":"1.25em","left":"2.375em"}}},"className":"is-style-zero-top-margin"} -->
			<div class="wp-block-group is-style-zero-top-margin" style="padding-top:1.25em;padding-right:2.375em;padding-bottom:1.25em;padding-left:2.375em">

				<!-- wp:post-title {"isLink":true,"className":"is-style-links-underline-on-hover"} /-->

				<!-- wp:post-excerpt /-->

				<!-- wp:group {"layout":{"type":"flex","justifyContent":"right"}} -->
				<div class="wp-block-group">
					<!-- wp:post-author {"showAvatar":false} /-->
					<!-- wp:post-date /-->
				</div>
				<!-- /wp:group -->

			</div>
			<!-- /wp:group -->

		</div>
		<!-- /wp:group -->

	<!-- /wp:post-template -->

	<!-- wp:group {"style":{"spacing":{"margin":{"top":"3em"}}}} -->
	<div class="wp-block-group" style="margin-top:3em">

		<!-- wp:query-pagination {"paginationArrow":"arrow","layout":{"type":"flex","justifyContent":"space-between"}} -->
			<!-- wp:query-pagination-previous {"className":"is-style-links-underline-on-hover"} /-->

			<!-- wp:query-pagination-numbers {"className":"is-style-links-underline-on-hover"} /-->

			<!-- wp:query-pagination-next {"className":"is-style-links-underline-on-hover"} /-->
		<!-- /wp:query-pagination -->

	</div>
	<!-- /wp:group -->

</div>
<!-- /wp:query -->
',
);
