<?php
/**
* Title: Sticky Posts
* Slug: bergify/sticky-posts
* Categories: blog
* Inserter: yes
* Description: Sticky posts grid with 2 columns
* Block Types: core/query
*/
?>
<!-- wp:query {"queryId":0,"query":{"perPage":"2","pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"only","inherit":false},"displayLayout":{"type":"flex","columns":2},"layout":{"inherit":true}} -->
<div class="wp-block-query"><!-- wp:post-template -->
	<!-- wp:template-part {"slug":"sticky-post","theme":"bergify"} /-->
	<!-- /wp:post-template -->
</div>
<!-- /wp:query -->
			
<!-- wp:spacer {"height":25} -->
<div style="height:25px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->
