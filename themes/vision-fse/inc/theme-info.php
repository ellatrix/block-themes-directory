<?php
$pro_purchase_url = "https://www.eaglevisionit.com/downloads/vision-fse/";
$doc_url = "https://www.eaglevisionit.com/downloads/vision-fse/";
$live_demo_url = "https://demos.eaglevisionit.com/vision-fse-pro/";
$support_url = "https://www.eaglevisionit.com/contact-us/";

$theme_name = esc_html( $theme->Name );
$free_theme_name = str_replace( ' Pro', '',$theme_name );
?>
<div class="vision-fse--about-page--wrapper">
    <div id="vision-fse-admin-about-page">
        <div class="vision-fse-admin-card-header">
            <div class="vision-fse-header-left">
                <h2>
                    <?php echo esc_html( $theme->Name ); ?>
                </h2>
                <p>
                    <?php esc_html_e( 'Vision FSE - A Multipurpose, browser & device-friendly Full Site Editing Theme for WordPress', 'vision-fse' ); ?>
                </p>

            </div>
            <div class="vision-fse-header-right">
                <div class="vision-fse-card-header-button-group">
                    <!-- <a href="<?php echo $pro_purchase_url; ?>"
                                                class="vision-fse-admin-button"
                                                target="_blank">
                                                <span class="dashicons dashicons-admin-customizer"></span>
                                                <?php printf( esc_html( 'Get Pro', 'vision-fse' ), $theme->Name ); ?>
                                        </a> -->
                    <a href="<?php echo $live_demo_url; ?>" class="vision-fse-admin-button premium-button" target="_blank"
                        rel="noreferrer"><span class="dashicons dashicons-book-alt"></span>
                        <?php esc_html_e( 'Pro Live Demo', 'vision-fse' ); ?>
                    </a>
                </div>
            </div>
        </div>

        <div class="feature-list">
            <div class="vision-fse-about-container">
                <div class="vision-fse-admin-card features">
                    <div class="vision-fse-about-container vision-fse-compare-table">
                        <div class="admin-grid-1">
                            <h3>
                                <?php echo esc_html( $free_theme_name ); ?>
                                <?php esc_html_e( 'Free Vs Pro', 'vision-fse' ); ?>
                            </h3>
                            <p class="vision-fse-compare-table-subtitle"><a href="<?php echo $pro_purchase_url; ?>"
                                    target="__blank">
                                    <?php echo esc_html( 'Get Vision FSE Pro', 'vision-fse' ); ?>
                                    <i class="dashicons dashicons-arrow-right-alt"></i>
                                </a></p>
                            <table>
                                <thead>
                                    <tr>
                                        <th>
                                            <?php echo esc_html( $theme->Name ); ?>
                                            <?php esc_html_e( 'Free', 'vision-fse' ); ?>
                                            <?php esc_html_e( '( Limited blocks available )', 'vision-fse' ); ?>
                                            
                                        </th>
                                        <th>
                                            <?php esc_html_e( 'Features', 'vision-fse' ); ?>
                                        </th>
                                        <th>
                                            <?php esc_html_e( 'Vision FSE Pro ( More Blocks & Settings available )', 'vision-fse' ); ?>
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><span class="dashicons dashicons-yes"></span>
                                        </td>
                                        <td>
                                            <?php esc_html_e( 'Easy Setup', 'vision-fse' ); ?>
                                        </td>
                                        <td><span class="dashicons dashicons-yes"></span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><span class="dashicons dashicons-yes"></span>
                                        </td>
                                        <td>
                                            <?php esc_html_e( 'Responsive', 'vision-fse' ); ?>
                                        </td>
                                        <td><span class="dashicons dashicons-yes"></span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><span class="dashicons dashicons-yes"></span>
                                        </td>
                                        <td>
                                            <?php esc_html_e( 'Color Options', 'vision-fse' ); ?>
                                        </td>
                                        <td><span class="dashicons dashicons-yes"></span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><span class="dashicons dashicons-no"></span>
                                        </td>
                                        <td>
                                            <?php esc_html_e( 'Section', 'vision-fse' ); ?>
                                        </td>
                                        <td><span class="dashicons dashicons-yes"></span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><span class="dashicons dashicons-no"></span>
                                        </td>
                                        <td>
                                            <?php esc_html_e( 'Heading Advance', 'vision-fse' ); ?>
                                        </td>
                                        <td><span class="dashicons dashicons-yes"></span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><span class="dashicons dashicons-no"></span>
                                        </td>
                                        <td>
                                            <?php esc_html_e( 'Page Slider', 'vision-fse' ); ?>
                                        </td>
                                        <td><span class="dashicons dashicons-yes"></span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><span class="dashicons dashicons-no"></span>
                                        </td>
                                        <td>
                                            <?php esc_html_e( 'Profile Slider', 'vision-fse' ); ?>
                                        </td>
                                        <td><span class="dashicons dashicons-yes"></span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><span class="dashicons dashicons-no"></span>
                                        </td>
                                        <td>
                                            <?php esc_html_e( 'Inbox Icons', 'vision-fse' ); ?>
                                        </td>
                                        <td><span class="dashicons dashicons-yes"></span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><span class="dashicons dashicons-no"></span>
                                        </td>
                                        <td>
                                            <?php esc_html_e( 'News and Blogs', 'vision-fse' ); ?>
                                        </td>
                                        <td><span class="dashicons dashicons-yes"></span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><span class="dashicons dashicons-no"></span>
                                        </td>
                                        <td>
                                            <?php esc_html_e( 'Counter', 'vision-fse' ); ?>
                                        </td>
                                        <td><span class="dashicons dashicons-yes"></span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><span class="dashicons dashicons-no"></span>
                                        </td>
                                        <td>
                                            <?php esc_html_e( 'Call To Action', 'vision-fse' ); ?>
                                        </td>
                                        <td><span class="dashicons dashicons-yes"></span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><span class="dashicons dashicons-no"></span>
                                        </td>
                                        <td>
                                            <?php esc_html_e( 'Advance Button', 'vision-fse' ); ?>
                                        </td>
                                        <td><span class="dashicons dashicons-yes"></span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><span class="dashicons dashicons-no"></span>
                                        </td>
                                        <td>
                                            <?php esc_html_e( 'Social Link', 'vision-fse' ); ?>
                                        </td>
                                        <td><span class="dashicons dashicons-yes"></span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><span class="dashicons dashicons-no"></span>
                                        </td>
                                        <td>
                                            <?php esc_html_e( 'Accordion', 'vision-fse' ); ?>
                                        </td>
                                        <td><span class="dashicons dashicons-yes"></span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><span class="dashicons dashicons-no"></span>
                                        </td>
                                        <td>
                                            <?php esc_html_e( 'Image Slider', 'vision-fse' ); ?>
                                        </td>
                                        <td><span class="dashicons dashicons-yes"></span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><span class="dashicons dashicons-no"></span>
                                        </td>
                                        <td>
                                            <?php esc_html_e( 'Comming Soon More', 'vision-fse' ); ?>
                                        </td>
                                        <td><span class="dashicons dashicons-yes"></span>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td><span class="dashicons dashicons-no"></span>
                                        </td>
                                        <td>
                                            <?php esc_html_e( 'WooCommerce Integration', 'vision-fse' ); ?>
                                        </td>
                                        <td><span class="dashicons dashicons-yes"></span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><span class="dashicons dashicons-no"></span>
                                        </td>
                                        <td>
                                            <?php esc_html_e( 'Video Block', 'vision-fse' ); ?>
                                        </td>
                                        <td><span class="dashicons dashicons-yes"></span>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="vision-fse-about-side">
                <div class="vision-fse-admin-card cart-two">
                    <h3 class="vision-fse-admin-card-title is-small">
                        <?php esc_html_e( 'Questions Welcome - We\'re here to help', 'vision-fse' ); ?>
                    </h3>
                    <p>
                        <?php esc_html_e( '"Fearless Setup - Our Dedicated Team will have your website up in minutes', 'vision-fse' ); ?>
                    </p><a href="<?php echo $support_url; ?>" class="vision-fse-admin-button primary large"
                        target="_blank">
                        <?php esc_html_e( 'Get Support', 'vision-fse' ); ?>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="vision-fse-card-header-button-group">
        <a href="<?php echo $pro_purchase_url; ?>" class="vision-fse-admin-button" rel="noreferrer" target="_blank"><i
                class="fa fa-paint-brush"></i>
            <?php printf( esc_html( 'Get Pro', 'vision-fse' ), $theme->Name ); ?>
        </a>
        <a href="<?php echo $doc_url; ?>" class="vision-fse-admin-button premium-button" target="_blank"
            rel="noreferrer"><i class="fa fa-book"></i>
            <?php esc_html_e( 'Documentations', 'vision-fse' ); ?>
        </a>
    </div>
</div>