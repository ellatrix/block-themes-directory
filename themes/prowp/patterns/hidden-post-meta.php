<?php
/**
 * Title: Hidden Post meta (categories and tags)
 * Slug: prowp/hidden-post-meta
 * Inserter: no
 */
?>

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group">
	<!-- wp:group {"style":{"spacing":{"blockGap":"0.25em"}},"layout":{"type":"flex","flexWrap":"wrap"}} -->
	<div class="wp-block-group">
		<!-- wp:paragraph -->
		<p><strong><?php echo esc_html_x( 'Posted in:', 'Label for a list of post categories', 'prowp' ); ?></strong></p>
		<!-- /wp:paragraph -->
		<!-- wp:post-terms {"term":"category"} /-->
	</div>
	<!-- /wp:group -->
	<!-- wp:group {"style":{"spacing":{"blockGap":"0.25em"}},"className":"is-tags-section","layout":{"type":"flex","flexWrap":"wrap"}} -->
	<div class="wp-block-group is-tags-section">
		<!-- wp:paragraph -->
		<p><strong><?php echo esc_html_x( 'Tagged with:', 'Label for a list of post tags', 'prowp' ); ?></strong></p>
		<!-- /wp:paragraph -->
		<!-- wp:post-terms {"term":"post_tag"} /-->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
