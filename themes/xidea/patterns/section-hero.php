<?php
/**
 * Title: Hero Section
 * Slug: xidea/section-hero
 * Categories: featured
 */
?>
<!-- wp:group {"tagName":"section","style":{"color":{"background":"#fef5f0"}},"className":"mt-0","layout":{"inherit":false}} -->
<section id="hero-section" class="wp-block-group mt-0 has-background" style="background-color:#fef5f0"><!-- wp:group {"className":"container"} -->
    <div class="wp-block-group container"><!-- wp:group {"className":"row"} -->
        <div class="wp-block-group row"><!-- wp:columns -->
            <div class="wp-block-columns"><!-- wp:column {"verticalAlignment":"center"} -->
                <div class="wp-block-column is-vertically-aligned-center"><!-- wp:heading {"textAlign":"center","style":{"spacing":{"margin":{"top":"0px","right":"0px","bottom":"0px","left":"0px"}},"typography":{"fontStyle":"normal","fontWeight":"800"}},"textColor":"primary","fontSize":"x-large"} -->
                    <h2 class="has-text-align-center has-primary-color has-text-color has-x-large-font-size" style="font-style:normal;font-weight:800;margin-top:0px;margin-right:0px;margin-bottom:0px;margin-left:0px">Welcome to my</h2>
                    <!-- /wp:heading -->

                    <!-- wp:heading {"textAlign":"center","style":{"spacing":{"margin":{"top":"0px","right":"0px","bottom":"0px","left":"0px"}},"typography":{"fontStyle":"normal","fontWeight":"800"}},"fontSize":"x-large"} -->
                    <h2 class="has-text-align-center has-x-large-font-size" style="font-style:normal;font-weight:800;margin-top:0px;margin-right:0px;margin-bottom:0px;margin-left:0px">Creative Blog</h2>
                    <!-- /wp:heading -->

                    <!-- wp:paragraph {"align":"center","className":"m-3","fontSize":"medium"} -->
                    <p class="has-text-align-center m-3 has-medium-font-size">Art, photography, culture, books and other things. You are in the right place…</p>
                    <!-- /wp:paragraph --></div>
                <!-- /wp:column -->

                <!-- wp:column -->
                <div class="wp-block-column"><!-- wp:image {"sizeSlug":"large","linkDestination":"none","className":"p-2 m-2"} -->
                    <figure class="wp-block-image size-large p-2 m-2"><img src="<?php echo esc_url(get_template_directory_uri().'/assets/img/hero_image.jpg')?>" alt=""/></figure>
                    <!-- /wp:image --></div>
                <!-- /wp:column --></div>
            <!-- /wp:columns --></div>
        <!-- /wp:group --></div>
    <!-- /wp:group --></section>
<!-- /wp:group -->