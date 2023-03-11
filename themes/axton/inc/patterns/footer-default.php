<?php
/**
 * Default footer
 */
return array(
	'title'      => esc_html__( 'Default footer', 'axton' ),
	'categories' => array( 'axton', 'footer' ),
	'content'    => '<!-- wp:group {"align":"full","layout":{"inherit":true}} -->
	<div class="wp-block-group alignfull"><!-- wp:group {"align":"full","layout":{"inherit":true}} -->
	<div class="wp-block-group alignfull"><!-- wp:separator {"align":"full","className":"is-style-wide"} -->
	<hr class="wp-block-separator alignfull is-style-wide"/>
	<!-- /wp:separator --></div>
	<!-- /wp:group -->
	
	<!-- wp:group {"align":"full","className":"wp-block-footer  wp-block-site-generator","layout":{"inherit":true}} -->
	<div class="wp-block-group alignfull wp-block-footer  wp-block-site-generator"><!-- wp:group {"align":"wide","className":"wp-block-site-info","layout":{"type":"flex","justifyContent":"space-between"}} -->
	<div class="wp-block-group alignwide wp-block-site-info">
	<!-- wp:paragraph -->
	<p>' .
	    sprintf(
	    /* Translators: WordPress link. */
	    ' Copyright &copy; ' .date('Y') . esc_html__( '. Powered by %s', 'axton' ),
	    '<a href="' . esc_url( esc_html__( 'https://catchthemes.com', 'axton' ) ) . '" rel="nofollow">Catch Themes</a>'
	    ) . '</p>
	<!-- /wp:paragraph -->

	<!-- wp:navigation {"layout":{"type":"flex","setCascadingProperties":true,"justifyContent":"right"}} /--></div>
	<!-- /wp:group --></div>
	<!-- /wp:group --></div>
	<!-- /wp:group -->',
);


