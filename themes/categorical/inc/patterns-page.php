<?php
/**
 *
 * Adds page patterns.
 *
 * @package Categorical
 */

function categorical_register_popular_categories_patterns() {

    register_block_pattern_category( 'categorical-popular-categories', array( 'label' => esc_html__( 'Popular Categories', 'categorical' ) ) );

    $popular_content = '';

    /**
     * Filters the number of categories in the 'Popular Categories' pattern.
     *
     * @param int $num_cats Number of categories. 0 will return ALL top level categories.
     */
    $num_cats = apply_filters( 'categorical_popular_categories_count', 4 );

    /**
     * Filters which style/layout/template to use in
     * the 'Popular Categories' pattern. e.g. 1, 2, 3 etc.
     *
     * @param int Number of the pattern template.
     */
    $template_number = apply_filters( 'categorical_popular_categories_template_number', 1 );

    $categories = categorical_post_categories( true, '', $num_cats, 'popular' );

    foreach ( $categories as $category_id => $category ) {

        $category_name = $category['name'];
        $category_link = $category['link'];

        $popular_content .= categorical_patterns_template( $template_number, $category_name, $category_link, $category_id );

        $popular_content .= '
<!-- wp:spacer {"height":"6rem"} -->
<div style="height:6rem" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->
';

    }

    $quick_content = '
<!-- wp:columns {"align":"wide"} -->
<div class="wp-block-columns alignwide">
';

    $quick_categories = categorical_post_categories( true, '', 4, 'popular' );

    foreach ( $quick_categories as $quick_category_id => $quick_category ) {

        $quick_category_name = $quick_category['name'];
        $quick_category_link = $quick_category['link'];

        $quick_content .= '
    <!-- wp:column {"width":"25%"} -->
    <div class="wp-block-column" style="flex-basis:25%">
        <!-- wp:heading {"level":4,"className":"is-style-links-underline-on-hover"} -->
        <h4 class="is-style-links-underline-on-hover"><a href="' . esc_url( $quick_category_link ) . '">' . esc_html( $quick_category_name ) . '</a></h4>
        <!-- /wp:heading -->

        <!-- wp:query {"queryId":0,"query":{"perPage":"1","pages":"1","offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false,"taxQuery":{"category":[' . esc_attr( $quick_category_id ) . ']}}} -->
        <div class="wp-block-query"><!-- wp:post-template -->
        <!-- wp:post-featured-image {"isLink":true} /-->
        <!-- wp:post-title {"isLink":true,"className":"is-style-links-underline-on-hover","fontSize":"small"} /-->
        <!-- /wp:post-template --></div>
        <!-- /wp:query -->

        <!-- wp:query {"queryId":0,"query":{"perPage":"3","pages":"1","offset":1,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false,"taxQuery":{"category":[' . esc_attr( $quick_category_id ) . ']}}} -->
        <div class="wp-block-query"><!-- wp:post-template -->
        <!-- wp:post-title {"isLink":true,"className":"is-style-links-underline-on-hover","fontSize":"small"} /-->
        <!-- /wp:post-template --></div>
        <!-- /wp:query -->

    </div>
    <!-- /wp:column -->
';

    }

    $quick_content .= '
</div>
<!-- /wp:columns -->
';

    if ( categorical_user_can( 'edit_pages' ) ) {
        $inserter = true;
    } else {
        $inserter = false;
    }

    register_block_pattern(
        'categorical/popular-categories',
        array(
            'title'         => esc_html__( 'Popular categories', 'categorical' ),
            'categories'    => array( 'categorical-popular-categories' ),
            'blockTypes'    => array( 'core/query' ),
            'viewportWidth' => 1200,
            'content'       => $popular_content,
            'inserter'      => $inserter
        )
    );

    register_block_pattern(
        'categorical/quick-list',
        array(
            'title'         => esc_html__( 'Quick List', 'categorical' ),
            'categories'    => array( 'categorical-popular-categories' ),
            'blockTypes'    => array( 'core/query', 'core/latest-posts' ),
            'viewportWidth' => 1200,
            'content'       => $quick_content,
            'inserter'      => $inserter
        )
    );

}
add_action( 'init', 'categorical_register_popular_categories_patterns' );


function categorical_register_latest_posts_patterns() {

    /**
     * Filters the default 'Latest News' text
     * for the pattern category and
     * for the heading in the pattern content.
     *
     * @param string The heading text.
     */
    $latest_posts_heading = apply_filters( 'categorical_latest_posts_heading', __( 'Latest News', 'categorical' ) );

    register_block_pattern_category( 'categorical-latest-posts', array( 'label' => esc_html( $latest_posts_heading ) ) );

    /**
     * Filters the number of Latest Posts pattern layout/styles.
     *
     * @param int $total_styles Number of pattern layout/styles.
     */
    $total_styles = apply_filters( 'categorical_styles_per_latest_posts', 2 );

    if ( categorical_user_can( 'edit_pages' ) ) {
        $inserter = true;
    } else {
        $inserter = false;
    }

    /* 2 default pattern layout/styles for Latest Posts - start */
    for ( $i = 1; $i <= $total_styles; $i++ ) {

        $pattern_label = categorical_patterns_label( $i );

        /**
         * Filters the label for this pattern in the inserter.
         * 
         * The dynamic portion of the hook name, `$i`, refers to
         * the numbered order of the pattern e.g. 1, 2, 3 etc.
         * 
         * Example usage:
         * add_filter( 'categorical_latest_posts_pattern_label_1', 'my_function_latest_posts_pattern_label_1' );
         * function my_function_latest_posts_pattern_label_1 () {
         *   return 'My Pattern Label';
         * }
         *
         * @param string $pattern_label Title of this pattern.
         */
        $pattern_label = apply_filters( 'categorical_latest_posts_pattern_label_' . $i, $pattern_label );

        $pattern_content = categorical_patterns_template( $i, $latest_posts_heading, '', '', false, false, 'exclude' );

        /**
         * Filters the content for this pattern.
         * 
         * The dynamic portion of the hook name, `$i`, refers to
         * the numbered order of the pattern e.g. 1, 2, 3 etc.
         * 
         * Example usage:
         * add_filter( 'categorical_latest_posts_pattern_content_1', 'my_function_latest_posts_pattern_content_1', 10, 1 );
         * function my_function_latest_posts_pattern_content_1 ( $pattern_content ) {
         *   return '<!-- pattern content block(s) markup /-->';
         * }
         * 
         * Content should be a block or collection of blocks.
         *
         * @param string $pattern_content Content of this pattern.
         */
        $pattern_content = apply_filters( 'categorical_latest_posts_pattern_content_' . $i, $pattern_content );

        register_block_pattern(
            'categorical/latest-posts-' . $i,
            array(
                'title'         => $pattern_label,
                'categories'    => array( 'categorical-latest-posts' ),
                'blockTypes'    => array( 'core/query' ),
                'viewportWidth' => 1200,
                'content'       => $pattern_content,
                'inserter'      => $inserter
            )
        );


    }
    /* 2 default pattern layout/styles for Latest Posts - end */

}
add_action( 'init', 'categorical_register_latest_posts_patterns' );


function categorical_register_top_stories_patterns() {

    /**
     * Sticky posts not displaying correctly on front-end, unless Gutenberg is active.
     * Will remove when fix makes its way into core.
     */
    if ( ! defined( 'IS_GUTENBERG_PLUGIN' ) ) {
        return null;
    }

    /**
     * Filters the default 'Top Stories' text
     * for the pattern category and
     * for the heading in the pattern content.
     *
     * @param string The heading text.
     */
    $top_stories_heading = apply_filters( 'categorical_top_stories_heading', __( 'Top Stories', 'categorical' ) );

    /**
     * Append "(sticky posts)" helper text to the pattern
     * category label if hasn't been changed/filtered from default.
     */
    if ( $top_stories_heading === 'Top Stories' ) {
        $top_stories_heading_helper = sprintf(
            /* translators: %s: Filtered Top Stories heading. */
            __( '%s (sticky posts)', 'categorical' ),
            $top_stories_heading
        );
    } else {
        $top_stories_heading_helper = $top_stories_heading;
    }

    register_block_pattern_category( 'categorical-top-stories', array( 'label' => esc_html( $top_stories_heading_helper ) ) );

    /**
     * Filters the number of Top Stories pattern layout/styles.
     *
     * @param int $total_styles Number of pattern layout/styles.
     */
    $total_styles = apply_filters( 'categorical_styles_per_top_stories', 2 );

    if ( categorical_user_can( 'edit_pages' ) ) {
        $inserter = true;
    } else {
        $inserter = false;
    }

    /* 2 default pattern layout/styles for Top Stories - start */
    for ( $i = 1; $i <= $total_styles; $i++ ) {

        $pattern_label = categorical_patterns_label( $i );

        /**
         * Filters the label for this pattern in the inserter.
         * 
         * The dynamic portion of the hook name, `$i`, refers to
         * the numbered order of the pattern e.g. 1, 2, 3 etc.
         * 
         * Example usage:
         * add_filter( 'categorical_top_stories_pattern_label_1', 'my_function_top_stories_pattern_label_1' );
         * function my_function_top_stories_pattern_label_1 () {
         *   return 'My Pattern Label';
         * }
         *
         * @param string $pattern_label Title of this pattern.
         */
        $pattern_label = apply_filters( 'categorical_top_stories_pattern_label_' . $i, $pattern_label );

        $pattern_content = categorical_patterns_template( $i, $top_stories_heading, '', '', false, false, 'only' );

        /**
         * Filters the content for this pattern.
         * 
         * The dynamic portion of the hook name, `$i`, refers to
         * the numbered order of the pattern e.g. 1, 2, 3 etc.
         * 
         * Example usage:
         * add_filter( 'categorical_top_stories_pattern_content_1', 'my_function_top_stories_pattern_content_1', 10, 1 );
         * function my_function_top_stories_pattern_content_1 ( $pattern_content ) {
         *   return '<!-- pattern content block(s) markup /-->';
         * }
         * 
         * Content should be a block or collection of blocks.
         *
         * @param string $pattern_content Content of this pattern.
         */
        $pattern_content = apply_filters( 'categorical_top_stories_pattern_content_' . $i, $pattern_content );

        register_block_pattern(
            'categorical/top-stories-' . $i,
            array(
                'title'         => $pattern_label,
                'categories'    => array( 'categorical-top-stories' ),
                'blockTypes'    => array( 'core/query' ),
                'viewportWidth' => 1200,
                'content'       => $pattern_content,
                'inserter'      => $inserter
            )
        );


    }
    /* 2 default pattern layout/styles for Top Stories - end */

}
add_action( 'init', 'categorical_register_top_stories_patterns' );


function categorical_register_category_patterns() {

    if ( categorical_user_can( 'edit_pages' ) ) {
        $inserter = true;
    } else {
        $inserter = false;
    }

    $categories = categorical_post_categories( false );

    $category_item_number = 0;

    /* loop through post categories - start */
    foreach ( $categories as $category_id => $category ) {

        $category_item_number = $category_item_number + 1;

        $category_name = $category['name'];
        $category_slug = $category['slug'];
        $category_link = $category['link'];
        $category_count = $category['count'];

        $category_label = sprintf(
            /* translators: %s: Name of category, %d: Number of posts. */
            esc_html__( '%s (%d)', 'categorical' ),
            $category_name,
            $category_count
        );

        /* Register this post category as a pattern category. Inclusion of 'zzz' in slug to ensure ordered after general patterns. */
        register_block_pattern_category( 'categorical-zzz-cat-' . esc_attr( $category_item_number ) . '-' . esc_attr( $category_id ), array( 'label' => $category_label ) );

        /**
         * Filters the number of pattern layout/styles per category.
         *
         * @param int $total_styles Number of pattern layout/styles per category.
         */
        $total_styles = apply_filters( 'categorical_styles_per_cat', 2 );

        /* 2 default pattern layout/styles for this category - start */
        for ( $i = 1; $i <= $total_styles; $i++ ) {

            $pattern_label = categorical_patterns_label( $i );

            /**
             * Filters the label for this pattern in the inserter.
             * 
             * The dynamic portion of the hook name, `$i`, refers to
             * the numbered order of the pattern e.g. 1, 2, 3 etc.
             * 
             * Example usage:
             * add_filter( 'categorical_cat_pattern_label_1', 'my_function_cat_pattern_label_1' );
             * function my_function_cat_pattern_label_1 () {
             *   return 'My Pattern Label';
             * }
             *
             * @param string $pattern_label Title of this pattern.
             */
            $pattern_label = apply_filters( 'categorical_cat_pattern_label_' . $i, $pattern_label );

            $pattern_content = categorical_patterns_template( $i, $category_name, $category_link, $category_id );

            /**
             * Filters the content for this pattern.
             * 
             * The dynamic portion of the hook name, `$i`, refers to
             * the numbered order of the pattern e.g. 1, 2, 3 etc.
             * 
             * Example usage:
             * add_filter( 'categorical_cat_pattern_content_1', 'my_function_cat_pattern_content_1', 10, 4 );
             * function my_function_cat_pattern_content_1 ( $content, $category_name, $category_link, $category_id ) {
             *   return '<!-- pattern content block(s) markup /-->';
             * }
             * 
             * Content should be a block or collection of blocks.
             *
             * @param string $pattern_content Content of this pattern.
             * @param string $category_name   Category name, available for use in Content.
             * @param string $category_link   Category URI, available for use in Content.
             * @param int    $category_id     Category term ID, available for use in a query loop in Content.
             */
            $pattern_content = apply_filters( 'categorical_cat_pattern_content_' . $i, $pattern_content, $category_name, $category_link, $category_id );

            register_block_pattern(
                'categorical/cat-pattern-style-' . $i . '-' . esc_attr( $category_slug ),
                array(
                    'title'         => $pattern_label,
                    'categories'    => array( 'categorical-zzz-cat-' . esc_attr( $category_item_number ) . '-' . esc_attr( $category_id ) ),
                    'viewportWidth' => 1200,
                    'content'       => $pattern_content,
                    'inserter'      => $inserter
                )
            );

        }
        /* 2 default pattern layout/styles for this category - end */

    }
    /* loop through post categories - end */

}
add_action( 'init', 'categorical_register_category_patterns' );
