<?php
/**
 * Title: Query - No results
 * Slug: prowp/hidden-query-no-results
 * Inserter: no
 */
?>

<!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group">
	<!-- wp:paragraph {"placeholder":"Add text or blocks that will display when a query returns no results.","fontSize":"medium"} -->
	<p class="has-medium-font-size"><?php echo esc_html_x( 'Sorry, but nothing matched your search terms. Please try again with some different keywords.', 'Message explaining that there are no results returned from Query block', 'prowp' ); ?></p>
	<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
