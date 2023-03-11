<?php
 /**
  * Title: Product Sidebar
  * Slug: VisionArt/product-sidebar
  * Categories: VisionArt, page
  */
?>

<!-- wp:group {"className":"wp-block-widget-area wp-block-sidebar"} -->
<div class="wp-block-group wp-block-widget-area wp-block-sidebar">
    <!-- wp:group {"className":"wp-block-widget"} -->
    <div class="wp-block-group wp-block-widget">
        <!-- wp:heading {"style":{"spacing":{"margin":{"top":"0px","right":"0px","bottom":"18px","left":"0px"}},"typography":{"textTransform":"uppercase","letterSpacing":"0.1em","lineHeight":"1.3"}},"fontSize":"extra-small"} -->
        <h2 class="has-extra-small-font-size" id="product-categories" style="margin-top: 0px; margin-right: 0px; margin-bottom: 18px; margin-left: 0px; letter-spacing: 0.1em; line-height: 1.3; text-transform: uppercase;">
            <?php esc_html_e ( 'Product Categories', 'visionart' ) ?>
        </h2>
        <!-- /wp:heading -->

        <!-- wp:woocommerce/product-categories /-->
    </div>
    <!-- /wp:group -->

    <!-- wp:group {"className":"wp-block-widget"} -->
    <div class="wp-block-group wp-block-widget">
        <!-- wp:heading {"style":{"spacing":{"margin":{"top":"0px","right":"0px","bottom":"18px","left":"0px"}},"typography":{"textTransform":"uppercase","letterSpacing":"0.1em","lineHeight":"1.3"}},"fontSize":"extra-small"} -->
        <h2 class="has-extra-small-font-size" id="filter-by-price" style="margin-top: 0px; margin-right: 0px; margin-bottom: 18px; margin-left: 0px; letter-spacing: 0.1em; line-height: 1.3; text-transform: uppercase;"><?php esc_html_e ( 'Filter by price', 'visionart' ) ?></h2>
        <!-- /wp:heading -->

        <!-- wp:woocommerce/price-filter {"heading":""} -->
        <div class="wp-block-woocommerce-price-filter is-loading" data-showinputfields="true" data-showfilterbutton="false" data-heading="" data-heading-level="3">
            <span aria-hidden="true" class="wc-block-product-categories__placeholder"></span>
        </div>
        <!-- /wp:woocommerce/price-filter -->
    </div>
    <!-- /wp:group -->

    <!-- wp:group {"className":"wp-block-widget"} -->
    <div class="wp-block-group wp-block-widget">
        <!-- wp:heading {"style":{"spacing":{"margin":{"top":"0px","right":"0px","bottom":"18px","left":"0px"}},"typography":{"textTransform":"uppercase","letterSpacing":"0.1em","lineHeight":"1.3"}},"fontSize":"extra-small"} -->
        <h2 class="has-extra-small-font-size" id="filter-by-size" style="margin-top: 0px; margin-right: 0px; margin-bottom: 18px; margin-left: 0px; letter-spacing: 0.1em; line-height: 1.3; text-transform: uppercase;"><?php esc_html_e ( 'Filter by size', 'visionart' ) ?></h2>
        <!-- /wp:heading -->

        <!-- wp:woocommerce/attribute-filter {"attributeId":2,"heading":""} -->
        <div class="wp-block-woocommerce-attribute-filter is-loading" data-attribute-id="2" data-show-counts="true" data-query-type="or" data-heading="" data-heading-level="3">
            <span aria-hidden="true" class="wc-block-product-attribute-filter__placeholder"></span>
        </div>
        <!-- /wp:woocommerce/attribute-filter -->
    </div>
    <!-- /wp:group -->

    <!-- wp:group {"className":"wp-block-widget"} -->
    <div class="wp-block-group wp-block-widget">
        <!-- wp:heading {"style":{"spacing":{"margin":{"top":"0px","right":"0px","bottom":"18px","left":"0px"}},"typography":{"textTransform":"uppercase","letterSpacing":"0.1em","lineHeight":"1.3"}},"fontSize":"extra-small"} -->
        <h2 class="has-extra-small-font-size" id="filter-by-color" style="margin-top: 0px; margin-right: 0px; margin-bottom: 18px; margin-left: 0px; letter-spacing: 0.1em; line-height: 1.3; text-transform: uppercase;"><?php esc_html_e ( 'Filter by Color', 'visionart' ) ?></h2>
        <!-- /wp:heading -->

        <!-- wp:woocommerce/attribute-filter {"attributeId":1,"heading":""} -->
        <div class="wp-block-woocommerce-attribute-filter is-loading" data-attribute-id="1" data-show-counts="true" data-query-type="or" data-heading="" data-heading-level="3">
            <span aria-hidden="true" class="wc-block-product-attribute-filter__placeholder"></span>
        </div>
        <!-- /wp:woocommerce/attribute-filter -->
    </div>
    <!-- /wp:group -->
</div>
<!-- /wp:group -->
