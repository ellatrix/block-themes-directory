<?php
/**
 * Default header
 */
return [
	'title' => __('Header: Default', 'elyn'),
	'categories' => ['elyn-headers'],
	'blockTypes' => ['core/template-part/header'],
	'content' => '<!-- wp:group {"style":{"spacing":{"padding":{"top":"1.5rem","bottom":"1.5rem"}},"color":{"text":"#ffffff"},"elements":{"link":{"color":{"text":"#ffffff"}}}},"backgroundColor":"secondary","layout":{"inherit":true}} -->
<div class="wp-block-group has-secondary-background-color has-text-color has-background has-link-color" style="color: #ffffff; padding-top: 1.5rem; padding-bottom: 1.5rem">
	<!-- wp:columns {"verticalAlignment":"center","isStackedOnMobile":false,"align":"wide","style":{"spacing":{"margin":{"top":"0px","bottom":"0px"}}}} -->
	<div class="wp-block-columns alignwide are-vertically-aligned-center is-not-stacked-on-mobile" style="margin-top: 0px; margin-bottom: 0px">
		<!-- wp:column {"verticalAlignment":"center","width":"25%"} -->
		<div class="wp-block-column is-vertically-aligned-center" style="flex-basis: 25%">
			<!-- wp:site-title {"style":{"spacing":{"margin":{"top":"0px","right":"0px","bottom":"0px","left":"0px"}},"elements":{"link":{"color":{"text":"var:preset|color|quaternary"}}}},"textColor":"quaternary","fontSize":"xl"} /-->
		</div>
		<!-- /wp:column -->

		<!-- wp:column {"verticalAlignment":"center","width":"50%"} -->
		<div class="wp-block-column is-vertically-aligned-center" style="flex-basis: 50%"><!-- wp:navigation {"ref":12,"layout":{"type":"flex","justifyContent":"center"}} /--></div>
		<!-- /wp:column -->

		<!-- wp:column {"verticalAlignment":"center","width":"25%"} -->
		<div class="wp-block-column is-vertically-aligned-center" style="flex-basis: 25%">
			<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"right"}} -->
			<div class="wp-block-buttons">
				<!-- wp:button {"className":"is-style-fill"} -->
				<div class="wp-block-button is-style-fill"><a class="wp-block-button__link" href="https://elyn.unisonthemes.com/contact/">Contact Us</a></div>
				<!-- /wp:button -->
			</div>
			<!-- /wp:buttons -->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->
</div>
<!-- /wp:group -->

',
];
