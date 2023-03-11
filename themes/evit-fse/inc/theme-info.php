<?php
$pro_purchase_url = "https://www.eaglevisionit.com/downloads/evit-fse/";
$doc_url = "https://www.eaglevisionit.com/downloads/evit-fse/";
$live_demo_url = "https://demos.eaglevisionit.com/evit-fse-pro/";
$support_url = "https://www.eaglevisionit.com/contact-us/";

$theme_name = esc_html( $theme->Name );
$free_theme_name = str_replace( ' Pro', '',$theme_name );
?>
<div class="evit-fse--about-page--wrapper">
    <div id="evit-fse-admin-about-page">
        <div class="evit-fse-admin-card-header">
            <div class="evit-fse-header-left">
                <h2>
                    <?php echo esc_html( $theme->Name ); ?>
                </h2>
                <p>
                    <?php esc_html_e( 'Evit FSE - A Multipurpose, browser & device-friendly Full Site Editing Theme for WordPress', 'evit-fse' ); ?>
                </p>

            </div>
            <div class="evit-fse-header-right">
                <div class="evit-fse-card-header-button-group">
                    <!-- <a href="<?php echo $pro_purchase_url; ?>"
                                                class="evit-fse-admin-button"
                                                target="_blank">
                                                <span class="dashicons dashicons-admin-customizer"></span>
                                                <?php printf( esc_html( 'Get Pro', 'evit-fse' ), $theme->Name ); ?>
                                        </a> -->
                    <a href="<?php echo $live_demo_url; ?>" class="evit-fse-admin-button premium-button" target="_blank"
                        rel="noreferrer"><span class="dashicons dashicons-book-alt"></span>
                        <?php esc_html_e( 'Pro Live Demo', 'evit-fse' ); ?>
                    </a>
                </div>
            </div>
        </div>

        <div class="feature-list">
            <div class="evit-fse-about-container">
                <div class="evit-fse-admin-card features">
                    <div class="evit-fse-about-container evit-fse-compare-table">
                        <div class="admin-grid-1">
                            <h3>
                                <?php echo esc_html( $free_theme_name ); ?>
                                <?php esc_html_e( 'Free Vs Pro', 'evit-fse' ); ?>
                            </h3>
                            <p class="evit-fse-compare-table-subtitle"><a href="<?php echo $pro_purchase_url; ?>"
                                    target="__blank">
                                    <?php echo esc_html( 'Get evit FSE Pro', 'evit-fse' ); ?>
                                    <i class="dashicons dashicons-arrow-right-alt"></i>
                                </a></p>
                            <table>
                                <thead>
                                    <tr>
                                        <th>
                                            <?php echo esc_html( $theme->Name ); ?>
                                            <?php esc_html_e( 'Free', 'evit-fse' ); ?>
                                            <?php esc_html_e( '( Limited blocks available )', 'evit-fse' ); ?>
                                            
                                        </th>
                                        <th>
                                            <?php esc_html_e( 'Features', 'evit-fse' ); ?>
                                        </th>
                                        <th>
                                            <?php esc_html_e( 'Evit FSE Pro ( More Blocks & Settings available )', 'evit-fse' ); ?>
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><span class="dashicons dashicons-yes"></span>
                                        </td>
                                        <td>
                                            <?php esc_html_e( 'Easy Setup', 'evit-fse' ); ?>
                                        </td>
                                        <td>
                                            <!-- <span class="dashicons dashicons-yes"></span> -->
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><span class="dashicons dashicons-yes"></span>
                                        </td>
                                        <td>
                                            <?php esc_html_e( 'Responsive', 'evit-fse' ); ?>
                                        </td>
                                        <td>
                                            <!-- <span class="dashicons dashicons-yes"></span> -->
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><span class="dashicons dashicons-yes"></span>
                                        </td>
                                        <td>
                                            <?php esc_html_e( 'Color Options', 'evit-fse' ); ?>
                                        </td>
                                        <td>
                                            <!-- <span class="dashicons dashicons-yes"></span> -->
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><span class="dashicons dashicons-no"></span>
                                        </td>
                                        <td>
                                            <?php esc_html_e( 'Section', 'evit-fse' ); ?>
                                        </td>
                                        <td>
                                            <!-- <span class="dashicons dashicons-yes"></span> -->
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><span class="dashicons dashicons-no"></span>
                                        </td>
                                        <td>
                                            <?php esc_html_e( 'Heading Advance', 'evit-fse' ); ?>
                                        </td>
                                        <td>
                                            <!-- <span class="dashicons dashicons-yes"></span> -->
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><span class="dashicons dashicons-no"></span>
                                        </td>
                                        <td>
                                            <?php esc_html_e( 'Page Slider', 'evit-fse' ); ?>
                                        </td>
                                        <td>
                                            <!-- <span class="dashicons dashicons-yes"></span> -->
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><span class="dashicons dashicons-no"></span>
                                        </td>
                                        <td>
                                            <?php esc_html_e( 'Profile Slider', 'evit-fse' ); ?>
                                        </td>
                                        <td>
                                            <!-- <span class="dashicons dashicons-yes"></span> -->
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><span class="dashicons dashicons-no"></span>
                                        </td>
                                        <td>
                                            <?php esc_html_e( 'Inbox Icons', 'evit-fse' ); ?>
                                        </td>
                                        <td>
                                            <!-- <span class="dashicons dashicons-yes"></span> -->
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><span class="dashicons dashicons-no"></span>
                                        </td>
                                        <td>
                                            <?php esc_html_e( 'News and Blogs', 'evit-fse' ); ?>
                                        </td>
                                        <td>
                                            <!-- <span class="dashicons dashicons-yes"></span> -->
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><span class="dashicons dashicons-no"></span>
                                        </td>
                                        <td>
                                            <?php esc_html_e( 'Counter', 'evit-fse' ); ?>
                                        </td>
                                        <td>
                                            <!-- <span class="dashicons dashicons-yes"></span> -->
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><span class="dashicons dashicons-no"></span>
                                        </td>
                                        <td>
                                            <?php esc_html_e( 'Call To Action', 'evit-fse' ); ?>
                                        </td>
                                        <td>
                                            <!-- <span class="dashicons dashicons-yes"></span> -->
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><span class="dashicons dashicons-no"></span>
                                        </td>
                                        <td>
                                            <?php esc_html_e( 'Advance Button', 'evit-fse' ); ?>
                                        </td>
                                        <td>
                                            <!-- <span class="dashicons dashicons-yes"></span> -->
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><span class="dashicons dashicons-no"></span>
                                        </td>
                                        <td>
                                            <?php esc_html_e( 'Social Link', 'evit-fse' ); ?>
                                        </td>
                                        <td>
                                            <!-- <span class="dashicons dashicons-yes"></span> -->
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><span class="dashicons dashicons-no"></span>
                                        </td>
                                        <td>
                                            <?php esc_html_e( 'Accordion', 'evit-fse' ); ?>
                                        </td>
                                        <td>
                                            <!-- <span class="dashicons dashicons-yes"></span> -->
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><span class="dashicons dashicons-no"></span>
                                        </td>
                                        <td>
                                            <?php esc_html_e( 'Image Slider', 'evit-fse' ); ?>
                                        </td>
                                        <td>
                                            <!-- <span class="dashicons dashicons-yes"></span> -->
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><span class="dashicons dashicons-no"></span>
                                        </td>
                                        <td>
                                            <?php esc_html_e( 'Comming Soon More', 'evit-fse' ); ?>
                                        </td>
                                        <td>
                                            <!-- <span class="dashicons dashicons-yes"></span> -->
                                        </td>
                                    </tr>

                                    <tr>
                                        <td><span class="dashicons dashicons-yes"></span>
                                        </td>
                                        <td>
                                            <?php esc_html_e( 'WooCommerce Integration', 'evit-fse' ); ?>
                                        </td>
                                        <td>
                                            <!-- <span class="dashicons dashicons-yes"></span> -->
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><span class="dashicons dashicons-no"></span>
                                        </td>
                                        <td>
                                            <?php esc_html_e( 'Video Block', 'evit-fse' ); ?>
                                        </td>
                                        <td>
                                            <!-- <span class="dashicons dashicons-yes"></span> -->
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="evit-fse-about-side">
                <div class="evit-fse-admin-card cart-two">
                    <h3 class="evit-fse-admin-card-title is-small">
                        <?php esc_html_e( 'Questions Welcome - We\'re here to help', 'evit-fse' ); ?>
                    </h3>
                    <p>
                        <?php esc_html_e( '"Fearless Setup - Our Dedicated Team will have your website up in minutes', 'evit-fse' ); ?>
                    </p><a href="<?php echo $support_url; ?>" class="evit-fse-admin-button primary large"
                        target="_blank">
                        <?php esc_html_e( 'Get Support', 'evit-fse' ); ?>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="evit-fse-card-header-button-group">
        <a href="<?php echo $pro_purchase_url; ?>" class="evit-fse-admin-button" rel="noreferrer" target="_blank"><i
                class="fa fa-paint-brush"></i>
            <?php printf( esc_html( 'Get Pro', 'evit-fse' ), $theme->Name ); ?>
        </a>
        <a href="<?php echo $doc_url; ?>" class="evit-fse-admin-button premium-button" target="_blank"
            rel="noreferrer"><i class="fa fa-book"></i>
            <?php esc_html_e( 'Documentations', 'evit-fse' ); ?>
        </a>
    </div>
</div>