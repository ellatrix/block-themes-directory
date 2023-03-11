<?php
return array(
			'title'         => __( 'Footer standard', 'approach' ),
			'categories'    => array( 'approach_layout' ),
			'content'       => '
<!-- wp:group {"style":{"spacing":{"padding":{"top":"55px","bottom":"15px"}}},"backgroundColor":"light-background","layout":{"contentSize":"1170px"}} -->
<div class="wp-block-group has-light-background-background-color has-background" style="padding-top:55px;padding-bottom:15px"><!-- wp:columns -->
<div class="wp-block-columns"><!-- wp:column -->
<div class="wp-block-column"><!-- wp:group -->
<div class="wp-block-group"><!-- wp:heading {"style":{"typography":{"fontSize":"28px"}}} -->
<h2 style="font-size:28px">' . esc_html__( 'About Approach', 'approach' ) . '</h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>' . esc_html__( 'Aenean ligula nibh, molestie id viverra a, dapibus dolor. In iaculis viverra neque, ac eleifend ante lobo rtis id in viverra ipsum ac eros tristique. neque ac eleifend ante lobo rtis id in viverra ipsum.', 'approach' ) . '</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:group -->
<div class="wp-block-group"><!-- wp:heading {"style":{"typography":{"fontSize":"28px"}}} -->
<h2 style="font-size:28px">' . esc_html__( 'Categories', 'approach' ) . '</h2>
<!-- /wp:heading -->

<!-- wp:categories /--></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:group -->
<div class="wp-block-group"><!-- wp:heading {"style":{"typography":{"fontSize":"28px"}}} -->
<h2 style="font-size:28px">' . esc_html__( 'Tags', 'approach' ) . '</h2>
<!-- /wp:heading -->

<!-- wp:tag-cloud /--></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:heading {"style":{"typography":{"fontSize":"28px"}}} -->
<h2 style="font-size:28px">' . esc_html__( 'Recent Posts', 'approach' ) . '</h2>
<!-- /wp:heading -->

<!-- wp:latest-posts /--></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:spacer {"height":"60px"} -->
<div style="height:60px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:separator {"opacity":"css","backgroundColor":"dark-gray","className":"is-style-wide"} -->
<hr class="wp-block-separator has-text-color has-dark-gray-color has-css-opacity has-dark-gray-background-color has-background is-style-wide"/>
<!-- /wp:separator -->

<!-- wp:group {"layout":{"type":"flex","allowOrientation":false,"justifyContent":"center"}} -->
<div class="wp-block-group"><!-- wp:paragraph -->
<p>' . esc_html__( 'Proudly powered by ', 'approach' ) . ' <a href="'. esc_url( __( 'https://wordpress.org/', 'approach' ) ) .'">WordPress</a> ' . esc_html__( '| Theme:', 'approach' ) . ' <a href="' . esc_url( __( 'https://webriti.com/approach-full-site-editing-wordpress-theme/', 'approach' ) ) . '" rel="nofollow">' . esc_html__( 'Approach ', 'approach' ) . '</a>' . esc_html__( 'by', 'approach' ). ' <a href="' . esc_url( __( 'https://webriti.com/', 'approach' ) ) . '" rel="nofollow">' . esc_html__( 'Webriti ', 'approach' ) . '</a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
',
);
