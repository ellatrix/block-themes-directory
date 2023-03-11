<?php
register_block_pattern(
    'carlina/header-standard',
    array(
        'title'       => 'Header with an image',
        'description' => 'Header with a standard size of image as background with tagline in animation',
        'content'     => '<!-- wp:cover {"url":"' . get_template_directory_uri() . '/assets/images/carlina_background.jpg","dimRatio":10,"isDark":false,"align":"full"} -->
        <div class="wp-block-cover alignfull is-light"><span aria-hidden="true" class="has-background-dim-10 wp-block-cover__gradient-background has-background-dim"></span><img class="wp-block-cover__image-background" alt="flowers" src="' . get_template_directory_uri() . '/assets/images/carlina_background.jpg" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:group {"className":"headerline"} -->
        <div class="wp-block-group headerline"><!-- wp:site-title /-->

        <!-- wp:site-tagline /--></div>
        <!-- /wp:group --></div></div>
        <!-- /wp:cover -->
        ',
        'categories'  => array( 'headers' ),
        'keywords'    => array( 'header', 'animation', 'image' ),
    )
);
