<?php
/**
 * Title: Hidden Search sidebar
 * Slug: prowp/hidden-search-sidebar
 * Inserter: no
 */
?>

<!-- wp:group {"layout":{"type":"constrained","contentSize":"25rem"},"fontSize":"small"} -->
<div class="wp-block-group has-small-font-size">
	<!-- wp:group {"style":{"spacing":{"blockGap":"0.75em"}},"layout":{"type":"constrained"}} -->
	<div class="wp-block-group">
		<!-- wp:heading {"fontSize":"small"} -->
		<h2 class="has-small-font-size"><?php echo esc_html_x( 'Sidebar section title', 'Example title for a section', 'prowp' ); ?></h2>
		<!-- /wp:heading -->
		<!-- wp:paragraph -->
		<p><?php echo esc_html_x( 'The Search template is displayed when using a search form. Depending on the search term, the template displays either a list of found pages or a message with search info.', 'Help text for sidebar area shown on search pages', 'prowp' ); ?></p>
		<!-- /wp:paragraph -->
	</div>
	<!-- /wp:group -->
	<!-- wp:group {"style":{"spacing":{"blockGap":"0.75em"}},"layout":{"type":"constrained"}} -->
	<div class="wp-block-group">
		<!-- wp:heading {"fontSize":"small"} -->
		<h2 class="has-small-font-size"><?php echo esc_html_x( 'Sidebar section title', 'Example title for a section', 'prowp' ); ?></h2>
		<!-- /wp:heading -->
		<!-- wp:paragraph -->
		<p><?php echo esc_html_x( 'Use the Block editor to modify the sidebar section, and add as many additional content to the sidebar as needed.', 'Help text for sidebar area shown on search pages', 'prowp' ); ?></p>
		<!-- /wp:paragraph -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
