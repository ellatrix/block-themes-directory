<?php
/**
 * Title: Hidden 404
 * Slug: prowp/hidden-404
 * Inserter: no
 */
?>

<!-- wp:columns {"align":"wide"} -->
<div class="wp-block-columns alignwide">
	<!-- wp:column {"width":"25%"} -->
	<div class="wp-block-column" style="flex-basis:25%">
		<!-- wp:heading {"level":1,"fontSize":"normal"} -->
		<h1 class="has-normal-font-size"><?php echo esc_html_x( '404: Page not found', 'Error title for a webpage that is not found', 'prowp' ); ?></h1>
		<!-- /wp:heading -->
	</div>
	<!-- /wp:column -->
	<!-- wp:column {"width":"50%"} -->
	<div class="wp-block-column" style="flex-basis:50%">
		<!-- wp:paragraph {"fontSize":"large"} -->
		<p class="has-large-font-size"><?php echo esc_html_x( 'It looks like nothing was found at this location. Maybe try a search?', 'Message to convey that a webpage could not be found', 'prowp' ); ?></p>
		<!-- /wp:paragraph -->
	</div>
	<!-- /wp:column -->
	<!-- wp:column {"width":"25%","style":{"border":{"left":{"color":"var:preset|color|tertiary","width":"1px"}},"spacing":{"padding":{"left":"var:preset|spacing|60"}}}} -->
	<div class="wp-block-column" style="border-left-color:var(--wp--preset--color--tertiary);border-left-width:1px;padding-left:var(--wp--preset--spacing--60);flex-basis:25%">
		<!-- wp:group {"layout":{"type":"constrained","contentSize":"25rem"},"fontSize":"small"} -->
		<div class="wp-block-group has-small-font-size">
			<!-- wp:group {"style":{"spacing":{"blockGap":"0.75em"}},"layout":{"type":"constrained"}} -->
			<div class="wp-block-group">
				<!-- wp:heading {"fontSize":"small"} -->
				<h2 class="has-small-font-size"><?php echo esc_html_x( 'Section title', 'Example title for a section', 'prowp' ); ?></h2>
				<!-- /wp:heading -->
				<!-- wp:paragraph -->
				<p><?php echo esc_html_x( 'The 404 template appears when a user lands on a page that does not exist. Use the sidebar to help the user navigate the website with additional info or links.', 'Help text for sidebar area shown on 404 page', 'prowp' ); ?></p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:group -->
	</div>
	<!-- /wp:column -->
</div>
<!-- /wp:columns -->
