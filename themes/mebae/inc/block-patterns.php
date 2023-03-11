<?php

/*  Register Block Pattern Category */
if ( function_exists( 'register_block_pattern_category' ) ) {

	register_block_pattern_category( 'mebae', array( 
        'label' => esc_html__( 'mebae', 'mebae' ) 
        )
	);
}

/*  Register Block Patterns */
if ( function_exists( 'register_block_pattern' ) ) {

     // Hero with gradient heading and star background
    register_block_pattern(
		'mebae/cover-gradient-heading',
		array(
			'title'         => esc_html__( 'Cover with gradient heading', 'mebae' ),
			'categories'    => array( 'mebae' ),
			'viewportWidth' => 1440,
			'description'   => esc_html_x( 'Cover with starts', 'Block pattern description', 'mebae' ),
            'content'       =>  '<!-- wp:cover {"url":"' . esc_url( get_template_directory_uri() ) . '/assets/img/star.png","id":23924,"dimRatio":0,"focalPoint":{"x":"1.00","y":0},"minHeight":40,"minHeightUnit":"vh","contentPosition":"center center","align":"full","className":"cover-stars"} -->
            <div class="wp-block-cover alignfull cover-stars" style="min-height:40vh"><img class="wp-block-cover__image-background wp-image-23924" alt="" src="' . esc_url( get_template_directory_uri() ) . '/assets/img/star.png" style="object-position:100% 0%" data-object-fit="cover" data-object-position="100% 0%"/><div class="wp-block-cover__inner-container"><!-- wp:group {"layout":{"inherit":true}} -->
            <div class="wp-block-group"><!-- wp:group {"align":"wide","layout":{"inherit":false}} -->
            <div class="wp-block-group alignwide"><!-- wp:heading {"level":1,"style":{"typography":{"fontWeight":"700"}},"className":"gradient-text","fontSize":"huge"} -->
            <h1 class="gradient-text has-huge-font-size" style="font-weight:700">Midnight Gallery</h1>
            <!-- /wp:heading --></div>
            <!-- /wp:group --></div>
            <!-- /wp:group -->
            <!-- wp:paragraph -->
            <p>We are delighted to present our next exhibit, the Monsters. Curated contemporary art gallery dedicated to fun artworks. Located in New York, London, Paris, and Tokyo.</p>
            <!-- /wp:paragraph --></div></div>
            <!-- /wp:cover -->'
		)
	);

    // Call to action with button. Star background
    register_block_pattern(
    'mebae/call-to-action',
    array(
        'title'         => esc_html__( 'Call to action', 'mebae' ),
        'categories'    => array( 'mebae' ),
        'viewportWidth' => 1440,
        'description'   => esc_html_x( 'Call to action with button', 'Block pattern description', 'mebae' ),
        'content'       =>  '<!-- wp:cover {"url":"' . esc_url( get_template_directory_uri() ) . '/assets/img/big-star.png","id":206,"overlayColor":"background"} -->
        <div class="wp-block-cover has-background-background-color has-background-dim"><img class="wp-block-cover__image-background wp-image-206" alt="" src="' . esc_url( get_template_directory_uri() ) . '/assets/img/big-star.png" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:paragraph {"align":"center","placeholder":"Write title…","className":"gradient-text","fontSize":"huge"} -->
        <p class="has-text-align-center gradient-text has-huge-font-size"><strong>Midnight Gallery</strong></p>
        <!-- /wp:paragraph -->
        
        <!-- wp:paragraph {"align":"center"} -->
        <p class="has-text-align-center">re delighted to present our next exciting exhibit the monster arts. Curated contemporary art gallery dedicated to the monsters located in New York, London, Paris and Tokyo.</p>
        <!-- /wp:paragraph -->
        
        <!-- wp:spacer {"height":50} -->
        <div style="height:50px" aria-hidden="true" class="wp-block-spacer"></div>
        <!-- /wp:spacer -->
        
        <!-- wp:buttons {"contentJustification":"center"} -->
        <div class="wp-block-buttons is-content-justification-center"><!-- wp:button {"className":"is-style-outline"} -->
        <div class="wp-block-button is-style-outline"><a class="wp-block-button__link" href="#">Find out more</a></div>
        <!-- /wp:button --></div>
        <!-- /wp:buttons -->
        
        <!-- wp:spacer {"height":50} -->
        <div style="height:50px" aria-hidden="true" class="wp-block-spacer"></div>
        <!-- /wp:spacer --></div></div>
        <!-- /wp:cover -->'
    )
);

    // Blog posts in three columns
    register_block_pattern(
		'mebae/three-posts',
		array(
			'title'         => esc_html__( 'Three posts in three columns', 'mebae' ),
			'categories'    => array( 'mebae' ),
			'viewportWidth' => 1440,
			'description'   => esc_html_x( 'Three posts in three columns', 'Block pattern description', 'mebae' ),
            'content'       =>  '<!-- wp:query {"queryId":1,"query":{"perPage":3,"pages":0,"offset":0,"postType":"post","categoryIds":[],"tagIds":[],"order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"exclude","inherit":false},"displayLayout":{"type":"flex","columns":3},"className":"mebae-posts"} -->
            <div class="wp-block-query mebae-posts"><!-- wp:post-template -->
            <!-- wp:group {"className":"mebae-post","layout":{"inherit":false}} -->
            <div class="wp-block-group mebae-post"><!-- wp:post-featured-image {"isLink":true,"align":"center"} /-->
            <!-- wp:post-title {"textAlign":"center","isLink":true,"style":{"typography":{"fontStyle":"normal","fontWeight":"400"},"elements":{"link":{"color":{"text":"var:preset|color|primary"}}}},"textColor":"primary","fontSize":"large"} /--></div>
            <!-- /wp:group -->
            <!-- /wp:post-template -->
            
            <!-- wp:query-pagination {"paginationArrow":"arrow","align":"center"} -->
            <div class="wp-block-query-pagination aligncenter"><!-- wp:query-pagination-previous /-->
            
            <!-- wp:query-pagination-numbers /-->
            
            <!-- wp:query-pagination-next /--></div>
            <!-- /wp:query-pagination --></div>
            <!-- /wp:query -->'
		)
	);

    // Blog posts with rounded images in three columns
    register_block_pattern(
		'mebae/three-posts-rounded-images',
		array(
			'title'         => esc_html__( 'Three posts with rounded images in three columns', 'mebae' ),
			'categories'    => array( 'mebae' ),
			'viewportWidth' => 1440,
			'description'   => esc_html_x( 'Three posts with rounded images in three columns', 'Block pattern description', 'mebae' ),
            'content'       =>  '<!-- wp:query {"queryId":1,"query":{"perPage":3,"pages":0,"offset":0,"postType":"post","categoryIds":[],"tagIds":[],"order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"exclude","inherit":false},"displayLayout":{"type":"flex","columns":3},"className":"mebae-posts"} -->
            <div class="wp-block-query mebae-posts"><!-- wp:post-template -->
            <!-- wp:group {"className":"mebae-post","layout":{"inherit":false}} -->
            <div class="wp-block-group mebae-post"><!-- wp:post-featured-image {"isLink":true,"align":"center","className":"is-style-mebae-border-radius"} /-->
            
            <!-- wp:post-title {"textAlign":"center","isLink":true,"style":{"typography":{"fontStyle":"normal","fontWeight":"400"},"elements":{"link":{"color":{"text":"var:preset|color|primary"}}}},"textColor":"primary","fontSize":"large"} /--></div>
            <!-- /wp:group -->
            <!-- /wp:post-template -->
            
            <!-- wp:query-pagination {"paginationArrow":"arrow","align":"center"} -->
            <div class="wp-block-query-pagination aligncenter"><!-- wp:query-pagination-previous /-->
            
            <!-- wp:query-pagination-numbers /-->
            
            <!-- wp:query-pagination-next /--></div>
            <!-- /wp:query-pagination --></div>
            <!-- /wp:query -->'
		)
	);

    // Gradient heading with text
    register_block_pattern(
		'mebae/gradient-heading',
		array(
			'title'         => esc_html__( 'Gradient heading with text', 'mebae' ),
			'categories'    => array( 'mebae' ),
			'viewportWidth' => 1440,
			'description'   => esc_html_x( 'Gradient heading with text', 'Block pattern description', 'mebae' ),
            'content'       =>  '<!-- wp:columns -->
            <div class="wp-block-columns"><!-- wp:column -->
            <div class="wp-block-column"><!-- wp:heading {"className":"gradient-text","fontSize":"xlarge"} -->
            <h2 class="gradient-text has-xlarge-font-size"><strong>Information</strong></h2>
            <!-- /wp:heading -->
            
            <!-- wp:paragraph -->
            <p>Amet nulla facilisi morbi tempus iaculis. Phasellus faucibus scelerisque eleifend donec pretium vulputate. Hendrerit dolor magna eget est lorem ipsum dolor sit amet. Etiam sit amet nisl purus in. In fermentum posuere urna nec tincidunt praesent semper feugiat. Risus viverra adipiscing at in tellus. Tempor orci dapibus ultrices in iaculis nunc sed. Eget mi proin sed libero enim.</p>
            <!-- /wp:paragraph --></div>
            <!-- /wp:column --></div>
            <!-- /wp:columns -->'
		)
	);

    // Text & button in two columns 
    register_block_pattern(
		'mebae/text-two-columns',
		array(
			'title'         => esc_html__( 'Text and button in two columns', 'mebae' ),
			'categories'    => array( 'mebae' ),
			'viewportWidth' => 1440,
			'description'   => esc_html_x( 'Text and button in two columns', 'Block pattern description', 'mebae' ),
            'content'       =>  '<!-- wp:group -->
            <div class="wp-block-group"><!-- wp:columns -->
            <div class="wp-block-columns"><!-- wp:column -->
            <div class="wp-block-column"><!-- wp:heading {"className":"gradient-text","fontSize":"xlarge"} -->
            <h2 class="gradient-text has-xlarge-font-size"><strong>Upcoming Events</strong></h2>
            <!-- /wp:heading -->
            
            <!-- wp:columns -->
            <div class="wp-block-columns"><!-- wp:column -->
            <div class="wp-block-column"><!-- wp:heading {"level":3,"fontSize":"large"} -->
            <h3 class="has-large-font-size"><strong>Outdoor BBQ</strong></h3>
            <!-- /wp:heading -->
            
            <!-- wp:paragraph -->
            <p>October 22 2021. Shine or Rain. Sn tellus integer feugiat scelerisque varius morbi enim. Eget magna fermentum iaculis eu non diam. </p>
            <!-- /wp:paragraph -->
            
            <!-- wp:buttons -->
            <div class="wp-block-buttons"><!-- wp:button {"style":{"border":{"radius":"10px"}},"className":"is-style-outline"} -->
            <div class="wp-block-button is-style-outline"><a class="wp-block-button__link" style="border-radius:10px">Detail</a></div>
            <!-- /wp:button --></div>
            <!-- /wp:buttons --></div>
            <!-- /wp:column -->
            
            <!-- wp:column -->
            <div class="wp-block-column"><!-- wp:heading {"level":3,"fontSize":"large"} -->
            <h3 class="has-large-font-size">Monster 10K Race</h3>
            <!-- /wp:heading -->
            
            <!-- wp:paragraph -->
            <p>November 5 2021. Shine or Rain.  Sodales ut eu sem integer. Aliquam malesuada bibendum arcu vitae elementum curabitur vitae. </p>
            <!-- /wp:paragraph -->
            
            <!-- wp:buttons -->
            <div class="wp-block-buttons"><!-- wp:button {"style":{"border":{"radius":"10px"}},"className":"is-style-outline"} -->
            <div class="wp-block-button is-style-outline"><a class="wp-block-button__link" style="border-radius:10px">Detail</a></div>
            <!-- /wp:button --></div>
            <!-- /wp:buttons --></div>
            <!-- /wp:column --></div>
            <!-- /wp:columns --></div>
            <!-- /wp:column --></div>
            <!-- /wp:columns --></div>
            <!-- /wp:group -->'
		)
	);

}