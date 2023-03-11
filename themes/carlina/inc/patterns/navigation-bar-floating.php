<?php
register_block_pattern(
    'carlina/navigation-bar-floating',
    array(
        'title'       => 'Floating Navigation Bar',
        'description' => 'A navigation bar with floating effect',
        'content'     => '<!-- wp:navigation {"overlayTextColor":"primary","className":"floating","layout":{"type":"flex","justifyContent":"center"}} -->
        <!-- wp:page-list {"isNavigationChild":true,"showSubmenuIcon":true,"openSubmenusOnClick":false} /-->
        <!-- /wp:navigation -->',
        'categories'  => array( 'navigations', 'featured'),
        'keywords'    => array( 'navigations'),
    )
);

