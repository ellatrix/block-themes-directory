<?php
$pro_purchase_url = "https://olivethemes.com/wordpress-themes/gokyo-pro/";
$doc_url = "https://olivethemes.com/documentations/";
$support_url = "https://olivethemes.com/support/";

$theme_name = esc_html( $theme->Name );
$free_theme_name = str_replace( ' Pro', '',$theme_name );
$plugin_is_installed = file_exists( WP_PLUGIN_DIR. '/olive-one-click-demo-import' );
$plugin_is_active = is_plugin_active( 'olive-one-click-demo-import/olive-one-click-demo-import.php' );
?>
<div class="gokyo-fse--about-page--wrapper">
        <div id="gokyo-fse-admin-about-page">
                <div class="gokyo-fse-admin-card-header">
                        <div class="gokyo-fse-header-left">
                                <h2>
                                        <?php echo esc_html( $theme->Name ); ?>
                                </h2>
                                <p>
                                        <?php esc_html_e( 'Multipurpose WordPress Full Site Editing Theme', 'gokyo-fse' ); ?>
                                </p>

                        </div>
                        <div class="gokyo-fse-header-right">
                                <div class="gokyo-fse-card-header-button-group">
                                        <!-- <a href="<?php echo $pro_purchase_url; ?>"
                                                class="gokyo-fse-admin-button"
                                                target="_blank">
                                                <span class="dashicons dashicons-admin-customizer"></span>
                                                <?php printf( esc_html( 'Get Gokyo Pro', 'gokyo-fse' ), $theme->Name ); ?>
                                        </a> -->
                                        <a href="<?php echo $doc_url; ?>"
                                                class="gokyo-fse-admin-button premium-button" target="_blank"
                                                rel="noreferrer"><span class="dashicons dashicons-book-alt"></span>
                                                <?php esc_html_e( 'Documentations', 'gokyo-fse' ); ?>
                                        </a>
                                </div>
                        </div>
                </div>

				<div class="olive-one-click-demo-import-banner">
						<h2><?php esc_html_e( 'Download Advanced Site Templates for Free!', 'gokyo-fse' ); ?></h2>
						<p><?php esc_html_e( 'Install', 'gokyo-fse' ); ?> <a href="https://wordpress.org/plugins/olive-one-click-demo-import/" target="__blank"><?php esc_html_e( 'Olive One Click Demo Import', 'gokyo-fse' ); ?></a> <?php esc_html_e( 'and access to all the Olive Demo templates. This plugin will help you download site template in few clicks.', 'gokyo-fse' ); ?></p>
						<?php if ( ! $plugin_is_installed  ): ?>
						<a href="javascript:void(0);"  class="gokyo-fse-admin-button gokyo-fse-install-plugin" >
                                                <span class="dashicons dashicons-arrow-down-alt"></span>
                                                <?php printf( esc_html( 'Install Plugin', 'gokyo-fse' ), $theme->Name ); ?>
                                        </a>
						<?php elseif ( $plugin_is_installed && ! $plugin_is_active ): ?>
							<a href="javascript:void(0);"  class="gokyo-fse-admin-button gokyo-fse-activate-plugin" >
                                                <span class="dashicons dashicons-arrow-down-alt"></span>
                                                <?php printf( esc_html( 'Activate Plugin', 'gokyo-fse' ), $theme->Name ); ?>
                                        </a>
						<?php else:?>
							<a href="<?php echo esc_url( admin_url( 'themes.php?page=olive-one-click-demo-import' ) ); ?>"  class="gokyo-fse-admin-button" >
                                                <span class="dashicons dashicons-arrow-down-alt"></span>
                                                <?php printf( esc_html( 'Explore Site Templates', 'gokyo-fse' ), $theme->Name ); ?>
                                        </a>
						<?php endif; ?>
						<small><?php esc_html_e( 'Note: Clicking the button will both install and activate Olive One Click Demo Import plugin', 'gokyo-fse' ); ?></small>
				</div>

                <div class="feature-list">
                        <div class="gokyo-fse-about-container">
                                <div class="gokyo-fse-admin-card features">
                                        <div class="gokyo-fse-about-container gokyo-fse-compare-table">
                                                <div class="admin-grid-1">
                                                        <h3>
                                                                <?php echo esc_html( $free_theme_name ); ?>
                                                                <?php esc_html_e( 'Free Vs Pro', 'gokyo-fse' ); ?>
                                                        </h3>
                                                        <p class="gokyo-fse-compare-table-subtitle"><a
                                                                        href="<?php echo $pro_purchase_url; ?>"
                                                                        target="__blank">
                                                                        <?php echo esc_html( 'Get Gokyo Pro', 'gokyo-fse' ); ?>
                                                                        <i
                                                                                class="dashicons dashicons-arrow-right-alt"></i>
                                                                </a></p>
                                                        <table>
                                                                <thead>
                                                                        <tr>
                                                                                <th>
																				<?php echo esc_html( $theme->Name ); ?> <?php esc_html_e( 'Free', 'gokyo-fse' ); ?>
                                                                                </th>
                                                                                <th>
                                                                                        <?php esc_html_e( 'Features', 'gokyo-fse' ); ?>
                                                                                </th>
                                                                                <th>
																				<?php esc_html_e( 'Gokyo Pro', 'gokyo-fse' ); ?>
                                                                                </th>
                                                                        </tr>
                                                                </thead>
                                                                <tbody>
                                                                        <tr>
                                                                                <td><span
                                                                                                class="dashicons dashicons-yes"></span>
                                                                                        </td>
                                                                                <td>
                                                                                        <?php esc_html_e( 'Easy Setup', 'gokyo-fse' ); ?>
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
                                                                                        <?php esc_html_e( 'Responsive', 'gokyo-fse' ); ?>
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
                                                                                        <?php esc_html_e( 'Advance Color Options', 'gokyo-fse' ); ?>
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
                                                                                        <?php esc_html_e( 'Multiple Block Layout', 'gokyo-fse' ); ?>
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
                                                                                        <?php esc_html_e( '100+ Fonts', 'gokyo-fse' ); ?>
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
                                                                                        <?php esc_html_e( 'Advance Slider Block ', 'gokyo-fse' ); ?>
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
                                                                                        <?php esc_html_e( 'Post Listing Block', 'gokyo-fse' ); ?>
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
                                                                                        <?php esc_html_e( 'WooCommerce Filter Block', 'gokyo-fse' ); ?>
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
                                                                                        <?php esc_html_e( 'Gallery Block', 'gokyo-fse' ); ?>
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
                                                                                        <?php esc_html_e( 'Star Rating Block', 'gokyo-fse' ); ?>
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
                                                                                        <?php esc_html_e( 'Icon Block', 'gokyo-fse' ); ?>
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
                                                                                        <?php esc_html_e( 'Post Carousel Block', 'gokyo-fse' ); ?>
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
                                                                                        <?php esc_html_e( 'Google Map Block', 'gokyo-fse' ); ?>
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
                                                                                        <?php esc_html_e( 'Testimonials Block', 'gokyo-fse' ); ?>
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
                                                                                        <?php esc_html_e( 'Team Block', 'gokyo-fse' ); ?>
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
                        <div class="gokyo-fse-about-side">
                                <div class="gokyo-fse-admin-card member"><span><i class="fa fa-star"
                                                        aria-hidden="true"></i> <i class="fa fa-star"
                                                        aria-hidden="true"></i> <i class="fa fa-star"
                                                        aria-hidden="true"></i> <i class="fa fa-star"
                                                        aria-hidden="true"></i> <i class="fa fa-star"
                                                        aria-hidden="true"></i></span>
                                        <h3 class="gokyo-fse-admin-card-title is-small">
                                                <?php esc_html_e( 'Love our product?', 'gokyo-fse' ); ?>
                                        </h3>
                                        <h4 class="gokyo-fse-admin-card-title is-small">
                                                <?php esc_html_e( 'Motivate us by
                                                giving 5 star on
                                                our profile.', 'gokyo-fse' ); ?>
                                        </h4><a href="https://wordpress.org/support/theme/gokyo-fse/reviews/?filter=5"
                                                class="gokyo-fse-admin-button large is-default"
                                                target="__blank">
                                                <?php esc_html_e( 'Rate Us', 'gokyo-fse' ); ?>
                                        </a>
                                </div>
                                <div class="gokyo-fse-admin-card cart-two">
                                        <h3 class="gokyo-fse-admin-card-title is-small">
                                                <?php esc_html_e( 'Still have question?
                                                Ask Us, now!', 'gokyo-fse' ); ?>
                                        </h3>
                                        <p>
                                                <?php esc_html_e( 'Don\'t hesitate to ask any questions you have regarding our products.', 'gokyo-fse' ); ?>
                                        </p><a href="<?php echo $support_url; ?>"
                                                class="gokyo-fse-admin-button primary large"
                        target="_blank">
                                                <?php esc_html_e( 'Get Support', 'gokyo-fse' ); ?>
                                        </a>
                                </div>
                        </div>
                </div>
        </div>
        <div class="gokyo-fse-card-header-button-group">
                <a href="<?php echo $pro_purchase_url; ?>" class="gokyo-fse-admin-button" rel="noreferrer"
                        target="_blank"><i class="fa fa-paint-brush"></i>
                        <?php printf( esc_html( 'Get Gokyo Pro', 'gokyo-fse' ), $theme->Name ); ?>
                </a>
                <a href="<?php echo $doc_url; ?>" class="gokyo-fse-admin-button premium-button"
                        target="_blank" rel="noreferrer"><i class="fa fa-book"></i>
                        <?php esc_html_e( 'Documentations', 'gokyo-fse' ); ?>
                </a>
        </div>
</div>
