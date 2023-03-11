<?php
/**
* Title: Blog Posts
* Slug: bergify/blog-posts
* Categories: blog
* Inserter: yes
* Description: Regular posts grid with 3 columns
* Block Types: core/query
*/
?>
<!-- wp:query {"queryId":2,"query":{"perPage":"6","pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"exclude","inherit":false},"displayLayout":{"type":"flex","columns":3},"layout":{"inherit":true}} -->
<div class="wp-block-query"><!-- wp:post-template -->
	<!-- wp:template-part {"slug":"post","theme":"bergify"} /-->
	<!-- /wp:post-template -->
	
	<!-- wp:query-pagination -->
	<!-- wp:query-pagination-previous /-->

	<!-- wp:query-pagination-numbers /-->

	<!-- wp:query-pagination-next /-->
	<!-- /wp:query-pagination -->

	<!-- wp:query-no-results -->
	<!-- wp:paragraph {"placeholder":"Add text or blocks that will display when the query returns no results."} -->
	<p></p>
	<!-- /wp:paragraph -->
	<!-- /wp:query-no-results -->
</div>
<!-- /wp:query -->

<!-- wp:spacer {"height":"50px"} -->
<div style="height:50px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->
