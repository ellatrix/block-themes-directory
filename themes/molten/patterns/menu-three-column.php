<?php

/**
 * Title: Three menu items with a name, description and price arranged into three columns.
 * Slug: molten/menu-three-column
 * Categories: molten-menu
 */
?>
<!-- wp:columns {"verticalAlignment":"top","align":"wide","style":{"spacing":{"margin":{"bottom":"6vw"},"blockGap":"6vw"}},"className":"is-vertically-aligned-top"} -->
<div class="wp-block-columns alignwide are-vertically-aligned-top is-vertically-aligned-top" style="margin-bottom:6vw">
    <!-- wp:column {"verticalAlignment":"top","style":{"spacing":{"blockGap":"8px"}}} -->
    <div class="wp-block-column is-vertically-aligned-top">
        <!-- wp:heading {"level":3} -->
        <h3><strong><?php esc_html_e('Benedict', 'molten') ?></strong></h3>
        <!-- /wp:heading -->

        <!-- wp:paragraph -->
        <p><?php esc_html_e('Sourdough Toast, Spinach, Poached Eggs, Hollandaise Sauce, Sliced Avocado.<br>Choose: Smoked Bacon/Smoked Salmon +1/ Leg Ham', 'molten') ?></p>
        <!-- /wp:paragraph -->

        <!-- wp:paragraph -->
        <p><?php esc_html_e('A$19.00', 'molten') ?></p>
        <!-- /wp:paragraph -->
    </div>
    <!-- /wp:column -->

    <!-- wp:column {"verticalAlignment":"top","style":{"spacing":{"blockGap":"8px"}}} -->
    <div class="wp-block-column is-vertically-aligned-top">
        <!-- wp:heading {"level":3} -->
        <h3><strong><?php esc_html_e('Breakfast fritters', 'molten') ?></strong></h3>
        <!-- /wp:heading -->

        <!-- wp:paragraph -->
        <p><?php esc_html_e('Corn, zucchini &amp; Haloumi fritters, Moroccan couscous, locally sourced free range poached eggs, beetroot hummus, dukkha &amp; tzatziki yoghurt', 'molten') ?></p>
        <!-- /wp:paragraph -->

        <!-- wp:paragraph -->
        <p><?php esc_html_e('A$20.00', 'molten') ?></p>
        <!-- /wp:paragraph -->
    </div>
    <!-- /wp:column -->

    <!-- wp:column {"verticalAlignment":"top","style":{"spacing":{"blockGap":"8px"}}} -->
    <div class="wp-block-column is-vertically-aligned-top">
        <!-- wp:heading {"level":3} -->
        <h3><strong><?php esc_html_e('Big Breakfast', 'molten') ?></strong></h3>
        <!-- /wp:heading -->

        <!-- wp:paragraph -->
        <p><?php esc_html_e('Sourdough Toast, Smoked Bacon, Free Range Eggs, Avocado, Grilled Halloumi, Hash Brown, Wilted Greens, Garlic Thyme Mushroom, Warmed Tomato', 'molten') ?></p>
        <!-- /wp:paragraph -->

        <!-- wp:paragraph -->
        <p><?php esc_html_e('A$35.00', 'molten') ?></p>
        <!-- /wp:paragraph -->
    </div>
    <!-- /wp:column -->
</div>
<!-- /wp:columns -->
