<?php

/**
 * Title: A full width cover with address, opening hours and a button
 * Slug: molten/location-cover-with-hours-and-button
 * Categories: molten-location
 */
?>
<!-- wp:cover {"overlayColor":"foreground","align":"full"} -->
<div class="wp-block-cover alignfull"><span aria-hidden="true" class="wp-block-cover__background has-foreground-background-color has-background-dim-100 has-background-dim"></span>
    <div class="wp-block-cover__inner-container">
        <!-- wp:group {"style":{"spacing":{"padding":{"top":"72px","bottom":"72px"}}},"layout":{"inherit":true}} -->
        <div class="wp-block-group" style="padding-top:72px;padding-bottom:72px">
            <!-- wp:heading {"textAlign":"center","align":"full","style":{"spacing":{"margin":{"bottom":"48px"}},"typography":{"lineHeight":1.2}}} -->
            <h2 class="alignfull has-text-align-center" style="line-height:1.2;margin-bottom:48px"><?php esc_html_e('123 Test Street', 'molten') ?><br><?php esc_html_e('Braddon, ACT 2612', 'molten') ?></h2>
            <!-- /wp:heading -->

            <!-- wp:columns {"style":{"spacing":{"margin":{"bottom":"48px"}}}} -->
            <div class="wp-block-columns" style="margin-bottom:48px">
                <!-- wp:column -->
                <div class="wp-block-column">
                    <!-- wp:paragraph {"align":"center"} -->
                    <p class="has-text-align-center"><strong><?php esc_html_e('Lunch', 'molten') ?><br></strong><em><?php esc_html_e('Monday – Sunday', 'molten') ?></em><br><?php esc_html_e('11:30am to 2:30pm', 'molten') ?></p>
                    <!-- /wp:paragraph -->
                </div>
                <!-- /wp:column -->

                <!-- wp:column -->
                <div class="wp-block-column">
                    <!-- wp:paragraph {"align":"center"} -->
                    <p class="has-text-align-center"><strong><strong><?php esc_html_e('Dinner', 'molten') ?></strong><br></strong><em><?php esc_html_e('Monday – Sunday', 'molten') ?></em><br><?php esc_html_e('5:30pm to 9:30pm', 'molten') ?></p>
                    <!-- /wp:paragraph -->
                </div>
                <!-- /wp:column -->
            </div>
            <!-- /wp:columns -->

            <!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
            <div class="wp-block-buttons">
                <!-- wp:button {"backgroundColor":"background","textColor":"foreground","className":"is-style-outline"} -->
                <div class="wp-block-button is-style-outline"><a class="wp-block-button__link has-foreground-color has-background-background-color has-text-color has-background"><?php esc_html_e('Make a reservation', 'molten') ?></a></div>
                <!-- /wp:button -->
            </div>
            <!-- /wp:buttons -->
        </div>
        <!-- /wp:group -->
    </div>
</div>
<!-- /wp:cover -->
