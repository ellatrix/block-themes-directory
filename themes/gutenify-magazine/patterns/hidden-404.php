
<?php
 /**
  * Title: Hidden 404
  * Slug: gutenify-magazine/hidden-404
  * Categories: gutenify-magazine
  */
?>
<!-- wp:group {"tagName":"main","style":{"spacing":{"padding":{"top":"80px","bottom":"80px"}}}} -->
<main class="wp-block-group" style="padding-top: 80px; padding-bottom: 80px">
	<!-- wp:group {"layout":{"inherit":true}} -->
	<div class="wp-block-group">
		<!-- wp:query-title {"type":"archive","textAlign":"center"} /-->

		<!-- wp:heading {"style":{"typography":{"fontSize":"clamp(4rem, 40vw, 20rem)","fontWeight":"200","lineHeight":"1"}},"textColor":"foreground","className":"has-text-align-center"} -->
		<h2
			class="has-text-align-center has-foreground-color has-text-color"
			style="
				font-size: clamp(4rem, 40vw, 20rem);
				font-weight: 200;
				line-height: 1;
			"
		>
			4<mark
				style="background-color: rgba(0, 0, 0, 0); color: #01dacc"
				class="has-inline-color"
				>0</mark
			>4
		</h2>
		<!-- /wp:heading -->

		<!-- wp:paragraph {"align":"center"} -->
		<p class="has-text-align-center">
			<?php echo esc_html__( 'This page could not be found. Maybe try a search?', 'gutenify-magazine' ); ?>
		</p>
		<!-- /wp:paragraph -->

		<!-- wp:search {"label":"Search","showLabel":false,"width":75,"widthUnit":"%","buttonText":"Search","buttonUseIcon":true,"align":"center","backgroundColor":"vivid-red","textColor":"background"} /-->
	</div>
	<!-- /wp:group -->
</main>
<!-- /wp:group -->
