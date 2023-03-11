<?php
return array(
			'title'         => __( 'Footer Centered (light)', 'sampler' ),
			'categories'    => array( 'sampler-footers' ),
			'blockTypes'    => array( 'core/template-part/footer' ),
			'viewportWidth' => 1200,
			'content'       => '
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"4em","bottom":"4em"}},"elements":{"link":{"color":{"text":"var:preset|color|black"}}}},"backgroundColor":"very-light-gray","textColor":"very-dark-gray","className":"site-footer","layout":{"inherit":false}} -->
<div class="wp-block-group alignfull site-footer has-very-dark-gray-color has-very-light-gray-background-color has-text-color has-background has-link-color" style="padding-top:4em;padding-bottom:4em"><!-- wp:group -->

	<div class="wp-block-group">
		<!-- wp:site-logo {"width":200,"align":"center"} /-->
	</div>
	<!-- /wp:group -->

	<!-- wp:group {"style":{"spacing":{"margin":{"top":"3em"}}}} -->
	<div class="wp-block-group" style="margin-top:3em">
		<!-- wp:social-links {"layout":{"type":"flex","justifyContent":"center"}} -->
		<ul class="wp-block-social-links">
			<!-- wp:social-link {"url":"https://facebook.com","service":"facebook"} /-->
			<!-- wp:social-link {"url":"https://twitter.com","service":"twitter"} /-->
			<!-- wp:social-link {"url":"https://instagram.com","service":"instagram"} /-->
			<!-- wp:social-link {"url":"https://youtube.com","service":"youtube"} /-->
		</ul>
		<!-- /wp:social-links -->
	</div>
	<!-- /wp:group -->

	<!-- wp:group {"style":{"spacing":{"margin":{"top":"2em"}}},"layout":{"type":"flex","justifyContent":"center"}} -->
	<div class="wp-block-group" style="margin-top:2em">
		<!-- wp:paragraph {"align":"center","className":"is-style-links-underline-on-hover"} -->
		<p class="has-text-align-center is-style-links-underline-on-hover"><a href="#">About</a></p>
		<!-- /wp:paragraph -->
		<!-- wp:paragraph {"align":"center","className":"is-style-links-underline-on-hover"} -->
		<p class="has-text-align-center is-style-links-underline-on-hover"><a href="#">Contact</a></p>
		<!-- /wp:paragraph -->
	</div>
	<!-- /wp:group -->

	<!-- wp:group {"style":{"spacing":{"margin":{"top":"2em"}}}} -->
	<div class="wp-block-group" style="margin-top:2em">
		<!-- wp:pattern {"slug":"sampler/site-info-centered"} /-->
	</div>
	<!-- /wp:group -->

</div>
<!-- /wp:group -->
',
);
