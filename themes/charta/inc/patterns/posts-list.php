<?php
/**
 * Postmeta block pattern for blog and archive pages
 */
return array(
	'title'      => __( 'Posts List', 'charta' ),
	'categories' => array( 'charta_posts' ),
	'content'    => '<!-- wp:query {"queryId":1,"query":{"perPage":3,"pages":0,"offset":0,"postType":"post","categoryIds":[],"tagIds":[],"order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":true}} -->
					<div class="wp-block-query">
					
						<!-- wp:post-template -->
					
							<!-- wp:group {"backgroundColor":"white"} -->
							<div class="wp-block-group has-white-background-color has-background">

								<!-- wp:columns {"style":{"spacing":{"margin":{"bottom":"0px"}}}} -->
								<div class="wp-block-columns" style="margin-bottom:0px">
					
									<!-- wp:column {"width":"40%"} -->
									<div class="wp-block-column" style="flex-basis: 40%;">
										<!-- wp:post-featured-image {"isLink":true,"style":{"spacing":{"margin":{"top":"0px"}}}} /-->
									</div>
									<!-- /wp:column -->
					
									<!-- wp:column {"width":"60%"} -->
									<div class="wp-block-column" style="flex-basis: 60%;">
					
										<!-- wp:post-title {"isLink":true,"style":{"spacing":{"margin":{"top":"0px"}}}} /-->
					
										<!-- wp:pattern {"slug":"charta/postmeta-blog"} /-->
					
										<!-- wp:post-excerpt {"moreText":"\u003cstrong\u003eContinue reading\u003c/strong\u003e","style":{"spacing":{"margin":{"bottom":"0px"}}}} /-->
					
									</div>
									<!-- /wp:column -->
					
								</div>
								<!-- /wp:columns -->
					
							</div>
							<!-- /wp:group -->
					
						<!-- /wp:post-template -->
					
						<!-- wp:query-pagination {"backgroundColor":"white","layout":{"type":"flex","flexWrap":"nowrap"}} -->
						<!-- wp:query-pagination-numbers /-->
						<!-- /wp:query-pagination -->
					
					</div>
					<!-- /wp:query -->',
);
