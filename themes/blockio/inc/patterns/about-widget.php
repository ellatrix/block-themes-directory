<?php
/**
 * About Widget
 */
return array(
	'title'      => __( 'About Widget', 'blockio' ),
	'categories' => ['blockio-patterns'] ,
	'content'    => '<!-- wp:group {"style":{"spacing":{"padding":"20px"},"blockGap":"10px"},"layout":{"type":"default"}} -->
<div class="wp-block-group" style="padding: 20px;"><!-- wp:heading {"textAlign":"center"} -->
    <h2 class="has-text-align-center">' . esc_html__( 'ABOUT ME', 'blockio' ) . '</h2>
    <!-- /wp:heading -->

    <!-- wp:image {"align":"center","sizeSlug":"full","linkDestination":"none"} -->
    <figure class="wp-block-image aligncenter size-full"><img
                src="' . esc_url(get_template_directory_uri() ) . '/assets/images/author.jpg"  alt="' . esc_attr__( 'About Me', 'blockio' ) . '"/>
        <figcaption>' . esc_html__( 'Amelia Peterson', 'blockio' ) . '</figcaption>
    </figure>
    <!-- /wp:image -->

    <!-- wp:paragraph -->
    <p>' . esc_html__( 'On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by
        the charms of pleasure of the moment, so blinded by desire, that they cannot foresee the pain and trouble that
        are bound to ensue; and equal blame belongs to those who fail in their duty through weakness of will, which
        is.', 'blockio' ) . '
    </p>
    <!-- /wp:paragraph -->

</div>
<!-- /wp:group -->',
);


