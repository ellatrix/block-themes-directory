<?php
$pro_purchase_url = "https://olivethemes.com/wordpress-themes/exo-pro/";
$doc_url = "https://olivethemes.com/documentations/";
$support_url = "https://olivethemes.com/support/";

$theme_name = esc_html( $theme->Name );
$free_theme_name = str_replace( ' Pro', '',$theme_name );
$slug = $theme->template;
$free_theme_slug = str_replace( '-pro', '',$slug );

?>
<div class="exo--about-page--wrapper">
        <div id="exo-admin-about-page">
                <div class="exo-admin-card-header">
                        <div class="exo-header-left">
                                <h2>
                                        <?php   echo esc_html( $theme->Name ); ?>
                                </h2>
                                <p>
                                        <?php esc_html_e( 'Multipurpose WordPress Full Site Editing Theme', 'exo' ); ?>
                                </p>

                        </div>
                        <div class="exo-header-right">
                                <div class="exo-card-header-button-group">
                                        <!-- <a href="<?php echo $pro_purchase_url; ?>"
                                                class="exo-admin-button"
                                                target="_blank">
                                                <span class="dashicons dashicons-admin-customizer"></span>
                                                <?php printf( esc_html( 'Get %s Pro', 'exo' ), $theme->Name ); ?>
                                        </a> -->
                                        <a href="<?php echo $doc_url; ?>"
                                                class="exo-admin-button premium-button" target="_blank"
                                                rel="noreferrer"><span class="dashicons dashicons-book-alt"></span>
                                                <?php esc_html_e( 'Documentations', 'exo' ); ?>
                                        </a>
                                </div>
                        </div>
                </div>



                <div class="feature-list">
                        <div class="exo-about-container">
                                <div class="exo-admin-card features">
                                        <div class="exo-about-container exo-compare-table">
                                                <div class="admin-grid-1">
                                                        <h3>
                                                                <?php echo esc_html( $free_theme_name ); ?>
                                                                <?php esc_html_e( 'Free Vs Pro', 'exo' ); ?>
                                                        </h3>
                                                        <!-- <p class="exo-compare-table-subtitle"><a
                                                                        href="<?php echo $pro_purchase_url; ?>"
                                                                        target="__blank">
                                                                        <?php printf( esc_html( 'Get %s Pro', 'exo' ), $free_theme_name ); ?>
                                                                        <i
                                                                                class="dashicons dashicons-arrow-right-alt"></i>
                                                                </a></p> -->
                                                        <table>
                                                                <thead>
                                                                        <tr>
                                                                                <th>
																				<?php echo esc_html( $free_theme_name ); ?> <?php esc_html_e( 'Free', 'exo' ); ?>
                                                                                </th>
                                                                                <th>
                                                                                        <?php esc_html_e( 'Features', 'exo' ); ?>
                                                                                </th>
                                                                                <th>
																				<?php echo esc_html( $free_theme_name ); ?> <?php esc_html_e( 'Pro', 'exo' ); ?>
                                                                                </th>
                                                                        </tr>
                                                                </thead>
                                                                <tbody>
                                                                        <tr>
                                                                                <td><span
                                                                                                class="dashicons dashicons-yes"></span>
                                                                                        </td>
                                                                                <td>
                                                                                        <?php esc_html_e( 'Easy Setup', 'exo' ); ?>
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
                                                                                        <?php esc_html_e( 'Responsive', 'exo' ); ?>
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
                                                                                        <?php esc_html_e( 'Advance Color Options', 'exo' ); ?>
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
                                                                                        <?php esc_html_e( 'Multiple Block Layout', 'exo' ); ?>
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
                                                                                        <?php esc_html_e( '100+ Fonts', 'exo' ); ?>
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
                                                                                        <?php esc_html_e( 'Advance Slider Block ', 'exo' ); ?>
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
                                                                                        <?php esc_html_e( 'Post Listing Block', 'exo' ); ?>
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
                                                                                        <?php esc_html_e( 'WooCommerce Filter Block', 'exo' ); ?>
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
                                                                                        <?php esc_html_e( 'Gallery Block', 'exo' ); ?>
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
                                                                                        <?php esc_html_e( 'Star Rating Block', 'exo' ); ?>
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
                                                                                        <?php esc_html_e( 'Icon Block', 'exo' ); ?>
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
                                                                                        <?php esc_html_e( 'Post Carousel Block', 'exo' ); ?>
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
                                                                                        <?php esc_html_e( 'Google Map Block', 'exo' ); ?>
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
                                                                                        <?php esc_html_e( 'Testimonials Block', 'exo' ); ?>
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
                                                                                        <?php esc_html_e( 'Team Block', 'exo' ); ?>
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
                        <div class="exo-about-side">
                                <div class="exo-admin-card member"><span><i class="fa fa-star"
                                                        aria-hidden="true"></i> <i class="fa fa-star"
                                                        aria-hidden="true"></i> <i class="fa fa-star"
                                                        aria-hidden="true"></i> <i class="fa fa-star"
                                                        aria-hidden="true"></i> <i class="fa fa-star"
                                                        aria-hidden="true"></i></span>
                                        <h3 class="exo-admin-card-title is-small">
                                                <?php esc_html_e( 'Love our product?', 'exo' ); ?>
                                        </h3>
                                        <h4 class="exo-admin-card-title is-small">
                                                <?php esc_html_e( 'Motivate us by
                                                giving 5 star on
                                                our profile.', 'exo' ); ?>
                                        </h4><a href="https://wordpress.org/support/theme/<?php echo $free_theme_slug; ?>/reviews/?filter=5"
                                                class="exo-admin-button large is-default"
                                                target="__blank">
                                                <?php esc_html_e( 'Rate Us', 'exo' ); ?>
                                        </a>
                                </div>
                                <div class="exo-admin-card cart-two">
                                        <h3 class="exo-admin-card-title is-small">
                                                <?php esc_html_e( 'Still have question?
                                                Ask Us, now!', 'exo' ); ?>
                                        </h3>
                                        <p>
                                                <?php esc_html_e( 'Don\'t hesitate to ask any questions you have regarding our products.', 'exo' ); ?>
                                        </p><a href="<?php echo $support_url; ?>"
                                                class="exo-admin-button primary large" target="_blank">
                                                <?php esc_html_e( 'Get Support', 'exo' ); ?>
                                        </a>
                                </div>
                        </div>
                </div>
        </div>
        <div class="exo-card-header-button-group">
                <!-- <a href="<?php echo $doc_url; ?>" class="exo-admin-button" rel="noreferrer"
                        target="_blank"><i class="fa fa-paint-brush"></i>
                        <?php printf( esc_html( 'Get %s Pro', 'exo' ), $theme->Name ); ?>
                </a> -->
                <a href="<?php echo $doc_url; ?>" class="exo-admin-button premium-button"
                        target="_blank" rel="noreferrer"><i class="fa fa-book"></i>
                        <?php esc_html_e( 'Documentations', 'exo' ); ?>
                </a>
        </div>
</div>
