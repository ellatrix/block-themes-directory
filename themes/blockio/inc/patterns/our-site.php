<?php
/**
 * Our Site
 */
return array(
	'title'      => __( 'Our Site', 'blockio' ),
	'categories' => ['blockio-patterns'],
	'content'    => '<!-- wp:group {"style":{"spacing":{"padding":{"top":"100px","bottom":"100px"}}},"layout":{"inherit":true}} -->
<div class="wp-block-group" style="padding-top:100px;padding-bottom:100px"><!-- wp:columns -->
	<div class="wp-block-columns"><!-- wp:column {"verticalAlignment":"center"} -->
		<div class="wp-block-column is-vertically-aligned-center"><!-- wp:group -->
			<div class="wp-block-group"><!-- wp:heading {"textColor":"purple-main","fontSize":"regular"} -->
				<h2 class="has-purple-main-color has-text-color has-regular-font-size"><strong>' . esc_html__( 'Build Your WordPress Site', 'blockio' ) . '</strong></h2>
				<!-- /wp:heading --></div>
			<!-- /wp:group -->

			<!-- wp:paragraph -->
			<p>' . esc_html__( 'Donec gravida facilisis hendrerit. Integer dapibus libero at eros mattis, vulputate tincidunt diam malesuada. In pharetra maximus elementum. Mauris in mattis nunc. Proin eget consequat lorem, quis sagittis quam. Mauris placerat vel odio ut iaculis. Morbi tincidunt leo est, in consequat purus condimentum ut. Nulla dictum lobortis nisi eu pretium. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae', 'blockio' ) . '</p>
			<!-- /wp:paragraph -->

			<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button">' . esc_html__( 'Reading more...', 'blockio' ) . '</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->
			
			</div>
		<!-- /wp:column -->

		<!-- wp:column -->
		<div class="wp-block-column"><!-- wp:image {"align":"right","width":507,"height":612,"sizeSlug":"full","linkDestination":"none"} -->
			<figure class="wp-block-image alignright size-full is-resized"><img src="' . esc_url(get_template_directory_uri()) . '/assets/images/web_site.jpg" alt="' . esc_attr__( 'Build your website', 'blockio' ) . '" width="507" height="612"/></figure>
			<!-- /wp:image --></div>
		<!-- /wp:column --></div>
	<!-- /wp:columns --></div>
<!-- /wp:group -->',
);
