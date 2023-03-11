<?php
/**
 * Title: Exotic title and text section
 * Slug: blockette/section-exotic
 * Categories: blockette-sections
 * Block Types: core/group, core/cover
 * Viewport Width: 1024
 *
 * @package blockette
 * @since 1.0.0
 */

?>

<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"0px","right":"0px","bottom":"0px","left":"0px"}}},"gradient":"vertical-background-secondary"} -->
<div class="wp-block-group alignwide has-vertical-background-secondary-gradient-background has-background"
	style="padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px">
	<!-- wp:group {"style":{"spacing":{"padding":{"top":"0px","right":"0px","bottom":"0px","left":"0px"}}},"gradient":"vertical-primary-background"} -->
	<div class="wp-block-group has-vertical-primary-background-gradient-background has-background"
		style="padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px">
		<!-- wp:spacer {"height":"10px"} -->
		<div style="height:10px" aria-hidden="true" class="wp-block-spacer"></div>
		<!-- /wp:spacer -->
	</div>
	<!-- /wp:group -->

	<!-- wp:spacer {"height":"2vw"} -->
	<div style="height:2vw" aria-hidden="true" class="wp-block-spacer"></div>
	<!-- /wp:spacer -->

	<!-- wp:columns -->
	<div class="wp-block-columns">
		<!-- wp:column {"width":"30%","style":{"spacing":{"padding":{"top":"2vw","right":"2vw","bottom":"2vw","left":"2vw"}}}} -->
		<div class="wp-block-column"
			style="padding-top:2vw;padding-right:2vw;padding-bottom:2vw;padding-left:2vw;flex-basis:30%">
			<!-- wp:heading {"textAlign":"right","level":3} -->
			<h3 class="has-text-align-right">
				<?php echo esc_html_x( 'Create your exotic look.', 'Sample text for the heading', 'blockette' ); ?>
			</h3>
			<!-- /wp:heading -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column {"verticalAlignment":"center","width":"70%","style":{"spacing":{"padding":{"top":"2vw","right":"2vw","bottom":"2vw","left":"2vw"}}}} -->
		<div class="wp-block-column is-vertically-aligned-center"
			style="padding-top:2vw;padding-right:2vw;padding-bottom:2vw;padding-left:2vw;flex-basis:70%">
			<!-- wp:paragraph -->
			<p><?php echo esc_html_x( 'Undoubtedly we have no questions to ask which are unanswerable. We must trust the perfection of the creation so far, as to believe that whatever curiosity the order of things has awakened in our minds...', 'Sample text for the section', 'blockette' ); ?>
			</p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->

	<!-- wp:spacer {"height":"var(--wp--custom--v-spacing, 4vw)"} -->
	<div style="height:var(--wp--custom--v-spacing, 4vw)" aria-hidden="true" class="wp-block-spacer"></div>
	<!-- /wp:spacer -->

</div>
<!-- /wp:group -->
