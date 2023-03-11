<?php

/**
 * Page latest post
 */
return array(
    'title'      => __( 'Latest Post Section', 'bioxlog' ),
    'categories' => array('pages'),
    'content'    => '
    <!-- wp:spacer {"height":"25px"} -->
    <div style="height:25px" aria-hidden="true" class="wp-block-spacer"></div>
    <!-- /wp:spacer -->

    <!-- wp:group -->
    <div class="wp-block-group"><!-- wp:columns -->
    <div class="wp-block-columns"><!-- wp:column -->
    <div class="wp-block-column"><!-- wp:heading {"textAlign":"center","style":{"typography":{"fontStyle":"normal","fontWeight":"700","fontSize":"60px"}}} -->
    <h2 class="has-text-align-center" style="font-size:60px;font-style:normal;font-weight:700">' . esc_html__( 'Latest Blog', 'bioxlog' ). '</h2>
    <!-- /wp:heading -->

    <!-- wp:paragraph {"align":"center"} -->
    <p class="has-text-align-center">' . esc_html__( 'Adipisicing Lorem ipsum dolor sit amet, consectetur elit, sed do eiusmod tempor incididunt ut labore et dolore ,magna aliqua.', 'bioxlog' ). '</p>
    <!-- /wp:paragraph -->

    <!-- wp:spacer {"height":"10px"} -->
    <div style="height:10px" aria-hidden="true" class="wp-block-spacer"></div>
    <!-- /wp:spacer --></div>
    <!-- /wp:column --></div>
    <!-- /wp:columns -->

    <!-- wp:columns -->
    <div class="wp-block-columns"><!-- wp:column -->
    <div class="wp-block-column"><!-- wp:query {"queryId":44,"query":{"perPage":3,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false},"displayLayout":{"type":"flex","columns":3}} -->
    <div class="wp-block-query"><!-- wp:post-template -->
    <!-- wp:post-title {"level":3,"isLink":true,"style":{"typography":{"fontSize":"32px","fontStyle":"normal","fontWeight":"700"}}} /-->

    <!-- wp:post-date {"isLink":true} /-->

    <!-- wp:post-excerpt {"moreText":"\u003cstrong\u003eRead More\u003c/strong\u003e","style":{"typography":{"fontSize":"18px"}}} /-->
    <!-- /wp:post-template -->

    <!-- wp:query-no-results -->
    <!-- wp:paragraph {"placeholder":"Add text or blocks that will display when the query returns no results."} -->
    <p><strong>' . esc_html__( 'No, posts were found.', 'bioxlog' ). '</strong></p>
    <!-- /wp:paragraph -->
    <!-- /wp:query-no-results --></div>
    <!-- /wp:query --></div>
    <!-- /wp:column --></div>
    <!-- /wp:columns --></div>
    <!-- /wp:group -->

    <!-- wp:spacer {"height":"25px"} -->
    <div style="height:25px" aria-hidden="true" class="wp-block-spacer"></div>
    <!-- /wp:spacer -->',
);
