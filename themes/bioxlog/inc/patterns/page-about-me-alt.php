<?php
/**
 * About Me Alt Section
 */
return array(
	'title'      => __( 'About Me Alt Section', 'bioxlog' ),
	'categories' => array( 'pages' ),
	'content'    => '
    <!-- wp:group {"align":"wide","layout":{"inherit":false,"contentSize":"","wideSize":""}} -->
	<div class="wp-block-group alignwide">
	
	<!-- wp:spacer {"height":"25px"} -->
	<div style="height:25px" aria-hidden="true" class="wp-block-spacer"></div>
	<!-- /wp:spacer -->

	<!-- wp:media-text {"mediaPosition":"left","mediaId":426,"mediaLink":"","mediaType":"image"} -->
	<div class="wp-block-media-text alignwide has-media-on-the-left is-stacked-on-mobile">
		<figure class="wp-block-media-text__media">
			<img src="' .esc_url( get_template_directory_uri() ) . '/assets/images/about-hero.png'.'" alt="" class="wp-image-426 size-full"/>
		</figure>
	<div class="wp-block-media-text__content">

	<!-- wp:heading {"style":{"typography":{"fontSize":"70px","fontStyle":"normal","fontWeight":"700","lineHeight":"1"}}} -->
	<h2 style="font-size:70px;font-style:normal;font-weight:700;line-height:1">' . esc_html__( 'About Me.', 'bioxlog' ). '</h2>
	<!-- /wp:heading -->

	<!-- wp:paragraph {"style":{"typography":{"fontSize":"20px"}}} -->
	<p style="font-size:20px">
	' . esc_html__( 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ducimus voluptatem voluptates laudantium voluptatibus quo, cumque ex exercitationem accusamus saepe, similique quia quae iure? Tempore totam nesciunt maxime, dolores earum nihil beatae vero fugiat libero id enim ipsum consectetur aliquam in ullam nostrum praesentium illum voluptatem! Illo tempore beatae temporibus aliquid magni repellat ad perferendis, explicabo blanditiis vitae velit. Voluptates, similique?', 'bioxlog' ). '
	</p>
	<!-- /wp:paragraph -->

	<!-- wp:spacer {"height":"15px"} -->
	<div style="height:15px" aria-hidden="true" class="wp-block-spacer"></div>
	<!-- /wp:spacer -->

	<!-- wp:buttons -->
	<div class="wp-block-buttons"><!-- wp:button {"className":"is-style-fill"} -->
	<div class="wp-block-button is-style-fill"><a class="wp-block-button__link" href="#">' . esc_html__( 'Portfolio', 'bioxlog' ) . '</a></div>
	<!-- /wp:button -->

	<!-- wp:button {"className":"is-style-outline"} -->
	<div class="wp-block-button is-style-outline"><a class="wp-block-button__link" href="#">' . esc_html__( 'Contact', 'bioxlog' ) . '</a></div>
	<!-- /wp:button --></div>
	<!-- /wp:buttons -->

	<!-- wp:spacer {"height":"75px"} -->
	<div style="height:75px" aria-hidden="true" class="wp-block-spacer"></div>
	<!-- /wp:spacer --></div></div>
	<!-- /wp:media-text -->

	<!-- wp:spacer {"height":"25px"} -->
	<div style="height:25px" aria-hidden="true" class="wp-block-spacer"></div>
	<!-- /wp:spacer --></div>
	<!-- /wp:group -->',
);
