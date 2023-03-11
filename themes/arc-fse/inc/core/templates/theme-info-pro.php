<?php
$pro_purchase_url = "https://olivethemes.com/wordpress-themes/arc-fse-pro/";
$doc_url = "https://olivethemes.com/documentations/";
$support_url = "https://olivethemes.com/support/";

$theme_name = esc_html( $theme->Name );
$free_theme_name = str_replace( ' Pro', '',$theme_name );
$slug = $theme->template;
$free_theme_slug = str_replace( '-pro', '',$slug );

?>
<div class="arc-fse--about-page--wrapper">
        <div id="arc-fse-admin-about-page">
                <div class="arc-fse-admin-card-header">
                        <div class="arc-fse-header-left">
                                <h2>
                                        <?php   echo esc_html( $theme->Name ); ?>
                                </h2>
                                <p>
                                        <?php esc_html_e( 'Multipurpose WordPress Full Site Editing Theme', 'arc-fse' ); ?>
                                </p>

                        </div>
                        <div class="arc-fse-header-right">
                                <div class="arc-fse-card-header-button-group">
                                        <!-- <a href="<?php echo $pro_purchase_url; ?>"
                                                class="arc-fse-admin-button"
                                                target="_blank">
                                                <span class="dashicons dashicons-admin-customizer"></span>
                                                <?php printf( esc_html( 'Get %s Pro', 'arc-fse' ), $theme->Name ); ?>
                                        </a> -->
                                        <a href="<?php echo $doc_url; ?>"
                                                class="arc-fse-admin-button premium-button" target="_blank"
                                                rel="noreferrer"><span class="dashicons dashicons-book-alt"></span>
                                                <?php esc_html_e( 'Documentations', 'arc-fse' ); ?>
                                        </a>
                                </div>
                        </div>
                </div>



                <div class="feature-list">
                        <div class="arc-fse-about-container">
                                <div class="arc-fse-admin-card features">
                                        <div class="arc-fse-about-container arc-fse-compare-table">
                                                <div class="admin-grid-1">
                                                        <h3>
                                                                <?php echo esc_html( $free_theme_name ); ?>
                                                                <?php esc_html_e( 'Free Vs Pro', 'arc-fse' ); ?>
                                                        </h3>
                                                        <!-- <p class="arc-fse-compare-table-subtitle"><a
                                                                        href="<?php echo $pro_purchase_url; ?>"
                                                                        target="__blank">
                                                                        <?php printf( esc_html( 'Get %s Pro', 'arc-fse' ), $free_theme_name ); ?>
                                                                        <i
                                                                                class="dashicons dashicons-arrow-right-alt"></i>
                                                                </a></p> -->
                                                        <table>
                                                                <thead>
                                                                        <tr>
                                                                                <th>
																				<?php echo esc_html( $free_theme_name ); ?> <?php esc_html_e( 'Free', 'arc-fse' ); ?>
                                                                                </th>
                                                                                <th>
                                                                                        <?php esc_html_e( 'Features', 'arc-fse' ); ?>
                                                                                </th>
                                                                                <th>
																				<?php echo esc_html( $free_theme_name ); ?> <?php esc_html_e( 'Pro', 'arc-fse' ); ?>
                                                                                </th>
                                                                        </tr>
                                                                </thead>
                                                                <tbody>
                                                                        <tr>
                                                                                <td><span
                                                                                                class="dashicons dashicons-yes"></span>
                                                                                        </td>
                                                                                <td>
                                                                                        <?php esc_html_e( 'Easy Setup', 'arc-fse' ); ?>
                                                                                        </td>
                                                                                <td><span
                                                                                                class="dashicons dashicons-yes"></span>
                                                                                        </td>
                                                                        </tr>
                                                                        <tr>
                                                                                <td><span
                                                                                                class="dashicons dashicons-yes"></span>
                                                                                        </td>
                                                                                <td>
                                                                                        <?php esc_html_e( 'Responsive', 'arc-fse' ); ?>
                                                                                        </td>
                                                                                <td><span
                                                                                                class="dashicons dashicons-yes"></span>
                                                                                        </td>
                                                                        </tr>
                                                                        <tr>
                                                                                <td><span
                                                                                                class="dashicons dashicons-yes"></span>
                                                                                        </td>
                                                                                <td>
                                                                                        <?php esc_html_e( 'Advance Color Options', 'arc-fse' ); ?>
                                                                                        </td>
                                                                                <td><span
                                                                                                class="dashicons dashicons-yes"></span>
                                                                                        </td>
                                                                        </tr>
                                                                        <tr>
                                                                                <td><span
                                                                                                class="dashicons dashicons-no"></span>
                                                                                        </td>
                                                                                <td>
                                                                                        <?php esc_html_e( 'Multiple Block Layout', 'arc-fse' ); ?>
                                                                                        </td>
                                                                                <td><span
                                                                                                class="dashicons dashicons-yes"></span>
                                                                                        </td>
                                                                        </tr>
                                                                        <tr>
                                                                                <td><span
                                                                                                class="dashicons dashicons-no"></span>
                                                                                        </td>
                                                                                <td>
                                                                                        <?php esc_html_e( '100+ Fonts', 'arc-fse' ); ?>
                                                                                        </td>
                                                                                <td><span
                                                                                                class="dashicons dashicons-yes"></span>
                                                                                        </td>
                                                                        </tr>
                                                                        <tr>
                                                                                <td><span
                                                                                                class="dashicons dashicons-no"></span>
                                                                                        </td>
                                                                                <td>
                                                                                        <?php esc_html_e( 'Advance Slider Block ', 'arc-fse' ); ?>
                                                                                        </td>
                                                                                <td><span
                                                                                                class="dashicons dashicons-yes"></span>
                                                                                        </td>
                                                                        </tr>
                                                                        <tr>
                                                                                <td><span
                                                                                                class="dashicons dashicons-no"></span>
                                                                                        </td>
                                                                                <td>
                                                                                        <?php esc_html_e( 'Post Listing Block', 'arc-fse' ); ?>
                                                                                        </td>
                                                                                <td><span
                                                                                                class="dashicons dashicons-yes"></span>
                                                                                        </td>
                                                                        </tr>
                                                                        <tr>
                                                                                <td><span
                                                                                                class="dashicons dashicons-no"></span>
                                                                                        </td>
                                                                                <td>
                                                                                        <?php esc_html_e( 'WooCommerce Filter Block', 'arc-fse' ); ?>
                                                                                        </td>
                                                                                <td><span
                                                                                                class="dashicons dashicons-yes"></span>
                                                                                        </td>
                                                                        </tr>
                                                                        <tr>
                                                                                <td><span
                                                                                                class="dashicons dashicons-no"></span>
                                                                                        </td>
                                                                                <td>
                                                                                        <?php esc_html_e( 'Gallery Block', 'arc-fse' ); ?>
                                                                                        </td>
                                                                                <td><span
                                                                                                class="dashicons dashicons-yes"></span>
                                                                                        </td>
                                                                        </tr>
                                                                        <tr>
                                                                                <td><span
                                                                                                class="dashicons dashicons-no"></span>
                                                                                        </td>
                                                                                <td>
                                                                                        <?php esc_html_e( 'Star Rating Block', 'arc-fse' ); ?>
                                                                                        </td>
                                                                                <td><span
                                                                                                class="dashicons dashicons-yes"></span>
                                                                                        </td>
                                                                        </tr>
                                                                        <tr>
                                                                                <td><span
                                                                                                class="dashicons dashicons-no"></span>
                                                                                        </td>
                                                                                <td>
                                                                                        <?php esc_html_e( 'Icon Block', 'arc-fse' ); ?>
                                                                                        </td>
                                                                                <td><span
                                                                                                class="dashicons dashicons-yes"></span>
                                                                                        </td>
                                                                        </tr>
                                                                        <tr>
                                                                                <td><span
                                                                                                class="dashicons dashicons-no"></span>
                                                                                        </td>
                                                                                <td>
                                                                                        <?php esc_html_e( 'Post Carousel Block', 'arc-fse' ); ?>
                                                                                        </td>
                                                                                <td><span
                                                                                                class="dashicons dashicons-yes"></span>
                                                                                        </td>
                                                                        </tr>
                                                                        <tr>
                                                                                <td><span
                                                                                                class="dashicons dashicons-no"></span>
                                                                                        </td>
                                                                                <td>
                                                                                        <?php esc_html_e( 'Google Map Block', 'arc-fse' ); ?>
                                                                                        </td>
                                                                                <td><span
                                                                                                class="dashicons dashicons-yes"></span>
                                                                                        </td>
                                                                        </tr>
                                                                        <tr>
                                                                                <td><span
                                                                                                class="dashicons dashicons-no"></span>
                                                                                        </td>
                                                                                <td>
                                                                                        <?php esc_html_e( 'Testimonials Block', 'arc-fse' ); ?>
                                                                                        </td>
                                                                                <td><span
                                                                                                class="dashicons dashicons-yes"></span>
                                                                                        </td>
                                                                        </tr>
                                                                        <tr>
                                                                                <td><span
                                                                                                class="dashicons dashicons-no"></span>
                                                                                        </td>
                                                                                <td>
                                                                                        <?php esc_html_e( 'Team Block', 'arc-fse' ); ?>
                                                                                        </td>
                                                                                <td><span
                                                                                                class="dashicons dashicons-yes"></span>
                                                                                        </td>
                                                                        </tr>
                                                                </tbody>
                                                        </table>
                                                </div>
                                        </div>
                                </div>
                        </div>
                        <div class="arc-fse-about-side">
                                <div class="arc-fse-admin-card member"><span><i class="fa fa-star"
                                                        aria-hidden="true"></i> <i class="fa fa-star"
                                                        aria-hidden="true"></i> <i class="fa fa-star"
                                                        aria-hidden="true"></i> <i class="fa fa-star"
                                                        aria-hidden="true"></i> <i class="fa fa-star"
                                                        aria-hidden="true"></i></span>
                                        <h3 class="arc-fse-admin-card-title is-small">
                                                <?php esc_html_e( 'Love our product?', 'arc-fse' ); ?>
                                        </h3>
                                        <h4 class="arc-fse-admin-card-title is-small">
                                                <?php esc_html_e( 'Motivate us by
                                                giving 5 star on
                                                our profile.', 'arc-fse' ); ?>
                                        </h4><a href="https://wordpress.org/support/theme/<?php echo $free_theme_slug; ?>/reviews/?filter=5"
                                                class="arc-fse-admin-button large is-default"
                                                target="__blank">
                                                <?php esc_html_e( 'Rate Us', 'arc-fse' ); ?>
                                        </a>
                                </div>
                                <div class="arc-fse-admin-card cart-two">
                                        <h3 class="arc-fse-admin-card-title is-small">
                                                <?php esc_html_e( 'Still have question?
                                                Ask Us, now!', 'arc-fse' ); ?>
                                        </h3>
                                        <p>
                                                <?php esc_html_e( 'Don\'t hesitate to ask any questions you have regarding our products.', 'arc-fse' ); ?>
                                        </p><a href="<?php echo $support_url; ?>"
                                                class="arc-fse-admin-button primary large" target="_blank">
                                                <?php esc_html_e( 'Get Support', 'arc-fse' ); ?>
                                        </a>
                                </div>
                        </div>
                </div>
        </div>
        <div class="arc-fse-card-header-button-group">
                <!-- <a href="<?php echo $doc_url; ?>" class="arc-fse-admin-button" rel="noreferrer"
                        target="_blank"><i class="fa fa-paint-brush"></i>
                        <?php printf( esc_html( 'Get %s Pro', 'arc-fse' ), $theme->Name ); ?>
                </a> -->
                <a href="<?php echo $doc_url; ?>" class="arc-fse-admin-button premium-button"
                        target="_blank" rel="noreferrer"><i class="fa fa-book"></i>
                        <?php esc_html_e( 'Documentations', 'arc-fse' ); ?>
                </a>
        </div>
</div>
