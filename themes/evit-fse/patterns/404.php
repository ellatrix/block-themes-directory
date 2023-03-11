<?php
 /**
  * Title: 404
  * Slug: evit-fse/404
  * Categories: evit-fse
  */
?>

<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80","left":"var:preset|spacing|50","right":"5rem"},"blockGap":"0","margin":{"top":"0","bottom":"0"}}},"layout":{"type":"default"}} -->
<div class="wp-block-group"
    style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--80);padding-right:5rem;padding-bottom:var(--wp--preset--spacing--80);padding-left:var(--wp--preset--spacing--50)">
    <!-- wp:group {"layout":{"type":"flex","orientation":"vertical","justifyContent":"center"}} -->
    <div class="wp-block-group">
        <!-- wp:heading {"textAlign":"center","level":1,"style":{"typography":{"fontSize":"35px","lineHeight":"1.7","textDecoration":"none"}},"textColor":"foreground","fontFamily":"poppins"} -->
        <h1 class="has-text-align-center has-foreground-color has-text-color has-poppins-font-family"
            style="font-size:35px;line-height:1.7;text-decoration:none">URL not found</h1>
        <!-- /wp:heading -->

        <!-- wp:spacer {"height":"88px"} -->
        <div style="height:88px" aria-hidden="true" class="wp-block-spacer"></div>
        <!-- /wp:spacer -->

        <!-- wp:group {"layout":{"type":"flex","orientation":"vertical","justifyContent":"center"}} -->
        <div class="wp-block-group"><!-- wp:heading {"style":{"typography":{"fontSize":"200px"}}} -->
            <h2 style="font-size:200px"><?php echo esc_html__( '404', 'evit-fse' ); ?></h2>
            <!-- /wp:heading -->

            <!-- wp:heading {"textAlign":"center","level":3,"style":{"typography":{"fontSize":"42px","lineHeight":1.4}}} -->
            <h3 class="has-text-align-center" style="font-size:42px;line-height:1.4">Oops…</h3>
            <!-- /wp:heading -->

            <!-- wp:paragraph {"align":"center","style":{"spacing":{"margin":{"top":"var:preset|spacing|30","right":"var:preset|spacing|30","bottom":"var:preset|spacing|30","left":"var:preset|spacing|30"}}},"fontSize":"medium","fontFamily":"heebo"} -->
            <p class="has-text-align-center has-heebo-font-family has-medium-font-size"
                style="margin-top:var(--wp--preset--spacing--30);margin-right:var(--wp--preset--spacing--30);margin-bottom:var(--wp--preset--spacing--30);margin-left:var(--wp--preset--spacing--30)"><?php echo esc_html__( 'We’re sorry, but', 'evit-fse' ); ?><br><?php echo esc_html__( 'something went wrong.', 'evit-fse' ); ?></p>
            <!-- /wp:paragraph -->

            <!-- wp:buttons -->
            <div class="wp-block-buttons">
                <!-- wp:button {"style":{"border":{"radius":"0px"},"typography":{"fontStyle":"normal","fontWeight":"600"}},"fontSize":"normal"} -->
                <div class="wp-block-button has-custom-font-size has-normal-font-size"
                    style="font-style:normal;font-weight:600"><a class="wp-block-button__link wp-element-button"
                        href="#" style="border-radius:0px"><?php echo esc_html__( 'Homepage', 'evit-fse' ); ?></a></div>
                <!-- /wp:button -->
            </div>
            <!-- /wp:buttons -->
        </div>
        <!-- /wp:group -->
    </div>
    <!-- /wp:group -->
</div>
<!-- /wp:group -->