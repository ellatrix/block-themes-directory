<?php
/**
 * About Us
 */
return array(
	'title'      => esc_html__( 'About Us', 'pentatonic' ),
	'categories' => array( 'pentatonic', 'featured', 'pages' ),
	// 'blockTypes' => array( 'core/template-part/footer' ),
	'content'    => '<!-- wp:group {"align":"full","className":"wp-block-section","layout":{"inherit":true}} -->
<div class="wp-block-group alignfull wp-block-section">
    <!-- wp:media-text {"mediaPosition":"right","mediaLink":"' . get_parent_theme_file_uri( '/assets/images/about-us-with-stats.png' ) . '","mediaType":"image"} -->
    <div class="wp-block-media-text alignwide has-media-on-the-right is-stacked-on-mobile">
        <figure class="wp-block-media-text__media"><img
                src="' . get_parent_theme_file_uri( '/assets/images/about-us-with-stats.png' ) . '"
                alt="" /></figure>
        <div class="wp-block-media-text__content">
            <!-- wp:heading {"level":6,"style":{"typography":{"textTransform":"uppercase"}},"className":"has-body-text-color has-text-color"} -->
            <h6 class="has-body-text-color has-text-color" style="text-transform:uppercase">' . esc_html__( 'About Us', 'pentatonic' ) . '</h6>
            <!-- /wp:heading -->

            <!-- wp:heading -->
            <h2>' . esc_html__( 'Fresh ideas for every business', 'pentatonic' ) . '</h2>
            <!-- /wp:heading -->

            <!-- wp:paragraph -->
            <p>' . esc_html__( 'Lorem ipsum dolor sit amet, consectetur Integer pretium condimentum tristique aenean luctus mauris lorem ipsum dolor sit amet consectetur.', 'pentatonic' ) . '</p>
            <!-- /wp:paragraph -->

            <!-- wp:buttons -->
            <div class="wp-block-buttons">
                <!-- wp:button -->
                <div class="wp-block-button"><a class="wp-block-button__link">' . esc_html__( 'Get started', 'pentatonic' ) . '</a></div>
                <!-- /wp:button -->
            </div>
            <!-- /wp:buttons -->
        </div>
    </div>
    <!-- /wp:media-text -->
</div>
<!-- /wp:group -->',
);
