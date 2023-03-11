<?php
/**
 * Handwritten text block pattern
 */
return array(
	'title'	  => __( 'Handwritten text', 'bricksy' ),
	'categories' => array( 'bricksy-general', 'featured' ),
	'content'	=> '<!-- wp:paragraph {"className":"handwritten","fontSize":"gigantic"} -->
	<p class="handwritten has-gigantic-font-size">' . esc_html__( 'freedom', 'bricksy' ) . '</p>
	<!-- /wp:paragraph -->',
);
