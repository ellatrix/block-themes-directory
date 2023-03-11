<?php
 /**
  * Title: Footer Dark
  * Slug: laventa/footer-dark
  * Categories: laventa, footer
  */
?>

<!-- wp:group {"align":"full","className":"wp-block-footer-dark","layout":{"inherit":true}} -->
<div class="wp-block-group alignfull wp-block-footer-dark">
    <!-- wp:group {"align":"full","className":"wp-block-footer  wp-block-site-generator","layout":{"inherit":true}} -->
    <div class="wp-block-group alignfull wp-block-footer wp-block-site-generator">
        <!-- wp:group {"align":"wide","layout":{"inherit":false}} -->
        <div class="wp-block-group alignwide">
            <!-- wp:paragraph {"align":"center"} -->
            <p class="has-text-align-center"><?php printf(
            _x( 'Copyright &copy; %1$s %2$s', '1: Year, 2: Site Title with home URL, 3: Privacy Policy Link', 'laventa' ),
            esc_attr( date_i18n( __( 'Y', 'laventa' ) ) ),
            '<a href="'. esc_url( home_url( '/' ) ) .'">'. esc_attr( get_bloginfo( 'name', 'display' ) ) . '</a><span class="sep"> </span>  by <a target="_blank" href="https://catchthemes.com">Catch Themes</a>' ); ?></p>
            <!-- /wp:paragraph -->
            <!-- wp:social-links {"className":"is-style-logos-only","layout":{"type":"flex","justifyContent":"center"}} -->
            <ul class="wp-block-social-links is-style-logos-only">
                <!-- wp:social-link {"url":"#","service":"facebook"} /-->
                <!-- wp:social-link {"url":"#","service":"twitter"} /-->
                <!-- wp:social-link {"url":"#","service":"linkedin"} /-->
                <!-- wp:social-link {"url":"#","service":"youtube"} /-->
                <!-- wp:social-link {"url":"#","service":"instagram"} /-->
            </ul>
            <!-- /wp:social-links -->
        </div>
        <!-- /wp:group -->
    </div>
    <!-- /wp:group -->
</div>
<!-- /wp:group -->

