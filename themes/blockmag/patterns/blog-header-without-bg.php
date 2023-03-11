<?php
 /**
  * Title: Blog Header Without BG
  * Slug: blockmag/blog-header-without-bg
  * Categories: blockmag, header
  */
?>

<!-- wp:group {"align":"full","className":"no-margin-top header-media-inner-post without-bg","layout":{"inherit":true}} -->
<div class="wp-block-group alignfull no-margin-top header-media-inner-post without-bg">
	<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"0px","right":"0px","bottom":"0px","left":"0px"}}},"layout":{"inherit":false}} -->
	<div class="wp-block-group alignfull" style="padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px">
		<!-- wp:group {"layout":{"inherit":true}} -->
		<div class="wp-block-group">
			<!-- wp:group {"className":"alignwide"} -->
			<div class="wp-block-group alignwide">
				<!-- wp:heading {"textAlign":"center","level":1,"className":"wp-block-post-title"} -->
				<h1 class="has-text-align-center wp-block-post-title"><?php esc_html_e ( 'Recent From Blog', 'blockmag' ) ?></h1>
				<!-- /wp:heading -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:group -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
