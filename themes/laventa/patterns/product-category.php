<?php
 /**
  * Title: Product Category
  * Slug: laventa/product-category
  * Categories: laventa, page
  */
?>

<!-- wp:group {"align":"full","className":"wp-block-section wp-block-product-category","layout":{"type":"default"}} -->
<div class="wp-block-group alignfull wp-block-section wp-block-product-category">
    <!-- wp:group {"align":"wide","className":"alignwide wp-product-cateogry-block","layout":{"type":"constrained"}} -->
    <div class="wp-block-group alignwide wp-product-cateogry-block">
        <!-- wp:group {"align":"wide","className":"alignwide wp-block-group-heading"} -->
        <div class="wp-block-group alignwide wp-block-group-heading">
            <!-- wp:heading {"textAlign":"center"} -->
            <h2 class="has-text-align-center"><?php esc_html_e ( 'Product Categories', 'laventa' ) ?></h2>
            <!-- /wp:heading -->
        </div>
        <!-- /wp:group -->

        <!-- wp:columns {"align":"wide"} -->
        <div class="wp-block-columns alignwide">
            <!-- wp:column -->
            <div class="wp-block-column"><!-- wp:woocommerce/featured-category /--></div>
            <!-- /wp:column -->

            <!-- wp:column -->
            <div class="wp-block-column"><!-- wp:woocommerce/featured-category /--></div>
            <!-- /wp:column -->

            <!-- wp:column -->
            <div class="wp-block-column"><!-- wp:woocommerce/featured-category /--></div>
            <!-- /wp:column -->
        </div>
        <!-- /wp:columns -->
    </div>
    <!-- /wp:group -->
</div>
<!-- /wp:group -->

