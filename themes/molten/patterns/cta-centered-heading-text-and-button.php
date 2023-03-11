<?php

/**
 * Title: Centered heading, text and button
 * Slug: molten/cta-centered-heading-text-and-button
 * Categories: molten-cta
 */
?>

<!-- wp:group {"style":{"spacing":{"margin":{"top":"var(--wp--custom--spacing--gap--vertical, 32px)","bottom":"var(--wp--custom--spacing--gap--vertical, 32px)"},"blockGap":"24px"}}} -->
<div class="wp-block-group" style="margin-top:var(--wp--custom--spacing--gap--vertical, 32px);margin-bottom:var(--wp--custom--spacing--gap--vertical, 32px)">
    <!-- wp:heading {"textAlign":"center"} -->
    <h2 class="has-text-align-center"><?php esc_html_e('Make a reservation', 'molten') ?></h2>
    <!-- /wp:heading -->

    <!-- wp:paragraph {"align":"center"} -->
    <p class="has-text-align-center"><?php esc_html_e('For bookings more than 8 people or for private events, please email: ', 'molten') ?><br>restaurant@email.com</p>
    <!-- /wp:paragraph -->

    <!-- wp:paragraph {"align":"center"} -->
    <p class="has-text-align-center"><?php esc_html_e('We look forward to welcoming you at Molten.', 'molten') ?></p>
    <!-- /wp:paragraph -->

    <!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
    <div class="wp-block-buttons">
        <!-- wp:button -->
        <div class="wp-block-button"><a class="wp-block-button__link"><?php esc_html_e('Make reservation', 'molten') ?></a></div>
        <!-- /wp:button -->
    </div>
    <!-- /wp:buttons -->
</div>
<!-- /wp:group -->
