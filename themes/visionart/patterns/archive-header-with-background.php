<?php
 /**
  * Title: Archive Header With Background
  * Slug: VisionArt/archive-header-with-background
  * Categories: VisionArt, header
  */
?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"0px","right":"0px","bottom":"0px","left":"0px"}}},"className":"banner","layout":{"inherit":false}} -->
<div class="wp-block-group alignfull banner" style="padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px">
	<!-- wp:cover {"gradient":"diagonal-top-to-bottom","isDark":false} -->
	<div class="wp-block-cover is-light">
		<span aria-hidden="true" class="wp-block-cover__background has-background-dim-100 has-background-dim has-background-gradient has-diagonal-top-to-bottom-gradient-background"></span>
		<div class="wp-block-cover__inner-container">
			<!-- wp:group {"layout":{"inherit":true,"type":"constrained"}} -->
			<div class="wp-block-group">
				<!-- wp:group {"className":"alignwide"} -->
				<div class="wp-block-group alignwide">
					<!-- wp:query-title {"type":"archive","textAlign":"center","textColor":"foreground"} /-->
					<!-- wp:term-description {"textAlign":"center"} /-->
				</div>
				<!-- /wp:group -->
			</div>
			<!-- /wp:group -->
		</div>
	</div>
	<!-- /wp:cover -->
</div>
<!-- /wp:group -->

