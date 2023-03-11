<?php
$pro_purchase_url = "https://olivethemes.com/wordpress-themes/axl-pro/";
$doc_url = "https://olivethemes.com/documentations/";
$support_url = "https://olivethemes.com/support/";

$theme_name = esc_html( $theme->Name );
$free_theme_name = str_replace( ' Pro', '',$theme_name );
$plugin_is_installed = file_exists( WP_PLUGIN_DIR. '/olive-one-click-demo-import' );
$plugin_is_active = is_plugin_active( 'olive-one-click-demo-import/olive-one-click-demo-import.php' );
?>
<div class="axl-fse--about-page--wrapper">
        <div id="axl-fse-admin-about-page">
                <div class="axl-fse-admin-card-header">
                        <div class="axl-fse-header-left">
                                <h2>
                                        <?php echo esc_html( $theme->Name ); ?>
                                </h2>
                                <p>
                                        <?php esc_html_e( 'Multipurpose WordPress Full Site Editing Theme', 'axl-fse' ); ?>
                                </p>

                        </div>
                        <div class="axl-fse-header-right">
                                <div class="axl-fse-card-header-button-group">
                                        <!-- <a href="<?php echo $pro_purchase_url; ?>"
                                                class="axl-fse-admin-button"
                                                target="_blank">
                                                <span class="dashicons dashicons-admin-customizer"></span>
                                                <?php printf( esc_html( 'Get Axl Pro', 'axl-fse' ), $theme->Name ); ?>
                                        </a> -->
                                        <a href="<?php echo $doc_url; ?>"
                                                class="axl-fse-admin-button premium-button" target="_blank"
                                                rel="noreferrer"><span class="dashicons dashicons-book-alt"></span>
                                                <?php esc_html_e( 'Documentations', 'axl-fse' ); ?>
                                        </a>
                                </div>
                        </div>
                </div>

				<div class="olive-one-click-demo-import-banner">
						<h2><?php esc_html_e( 'Download Advanced Site Templates for Free!', 'axl-fse' ); ?></h2>
						<p><?php esc_html_e( 'Install', 'axl-fse' ); ?> <a href="https://wordpress.org/plugins/olive-one-click-demo-import/" target="__blank"><?php esc_html_e( 'Olive One Click Demo Import', 'axl-fse' ); ?></a> <?php esc_html_e( 'and access to all the Olive Demo templates. This plugin will help you download site template in few clicks.', 'axl-fse' ); ?></p>
						<?php if ( ! $plugin_is_installed  ): ?>
						<a href="javascript:void(0);"  class="axl-fse-admin-button axl-fse-install-plugin" >
                                                <span class="dashicons dashicons-arrow-down-alt"></span>
                                                <?php printf( esc_html( 'Install Plugin', 'axl-fse' ), $theme->Name ); ?>
                                        </a>
						<?php elseif ( $plugin_is_installed && ! $plugin_is_active ): ?>
							<a href="javascript:void(0);"  class="axl-fse-admin-button axl-fse-activate-plugin" >
                                                <span class="dashicons dashicons-arrow-down-alt"></span>
                                                <?php printf( esc_html( 'Activate Plugin', 'axl-fse' ), $theme->Name ); ?>
                                        </a>
						<?php else:?>
							<a href="<?php echo esc_url( admin_url( 'themes.php?page=olive-one-click-demo-import' ) ); ?>"  class="axl-fse-admin-button" >
                                                <span class="dashicons dashicons-arrow-down-alt"></span>
                                                <?php printf( esc_html( 'Explore Site Templates', 'axl-fse' ), $theme->Name ); ?>
                                        </a>
						<?php endif; ?>
						<small><?php esc_html_e( 'Note: Clicking the button will both install and activate Olive One Click Demo Import plugin', 'axl-fse' ); ?></small>
				</div>

                <div class="feature-list">
                        <div class="axl-fse-about-container">
                                <div class="axl-fse-admin-card features">
                                        <div class="axl-fse-about-container axl-fse-compare-table">
                                                <div class="admin-grid-1">
                                                        <h3>
                                                                <?php echo esc_html( $free_theme_name ); ?>
                                                                <?php esc_html_e( 'Free Vs Pro', 'axl-fse' ); ?>
                                                        </h3>
                                                        <p class="axl-fse-compare-table-subtitle"><a
                                                                        href="<?php echo $pro_purchase_url; ?>"
                                                                        target="__blank">
                                                                        <?php echo esc_html( 'Get Axl Pro', 'axl-fse' ); ?>
                                                                        <i
                                                                                class="dashicons dashicons-arrow-right-alt"></i>
                                                                </a></p>
                                                        <table>
                                                                <thead>
                                                                        <tr>
                                                                                <th>
																				<?php echo esc_html( $theme->Name ); ?> <?php esc_html_e( 'Free', 'axl-fse' ); ?>
                                                                                </th>
                                                                                <th>
                                                                                        <?php esc_html_e( 'Features', 'axl-fse' ); ?>
                                                                                </th>
                                                                                <th>
																				<?php esc_html_e( 'Axl Pro', 'axl-fse' ); ?>
                                                                                </th>
                                                                        </tr>
                                                                </thead>
                                                                <tbody>
                                                                        <tr>
                                                                                <td><span
                                                                                                class="dashicons dashicons-yes"></span>
                                                                                        </td>
                                                                                <td>
                                                                                        <?php esc_html_e( 'Easy Setup', 'axl-fse' ); ?>
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
                                                                                        <?php esc_html_e( 'Responsive', 'axl-fse' ); ?>
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
                                                                                        <?php esc_html_e( 'Advance Color Options', 'axl-fse' ); ?>
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
                                                                                        <?php esc_html_e( 'Multiple Block Layout', 'axl-fse' ); ?>
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
                                                                                        <?php esc_html_e( '100+ Fonts', 'axl-fse' ); ?>
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
                                                                                        <?php esc_html_e( 'Advance Slider Block ', 'axl-fse' ); ?>
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
                                                                                        <?php esc_html_e( 'Post Listing Block', 'axl-fse' ); ?>
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
                                                                                        <?php esc_html_e( 'WooCommerce Filter Block', 'axl-fse' ); ?>
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
                                                                                        <?php esc_html_e( 'Gallery Block', 'axl-fse' ); ?>
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
                                                                                        <?php esc_html_e( 'Star Rating Block', 'axl-fse' ); ?>
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
                                                                                        <?php esc_html_e( 'Icon Block', 'axl-fse' ); ?>
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
                                                                                        <?php esc_html_e( 'Post Carousel Block', 'axl-fse' ); ?>
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
                                                                                        <?php esc_html_e( 'Google Map Block', 'axl-fse' ); ?>
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
                                                                                        <?php esc_html_e( 'Testimonials Block', 'axl-fse' ); ?>
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
                                                                                        <?php esc_html_e( 'Team Block', 'axl-fse' ); ?>
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
                        <div class="axl-fse-about-side">
                                <div class="axl-fse-admin-card member"><span><i class="fa fa-star"
                                                        aria-hidden="true"></i> <i class="fa fa-star"
                                                        aria-hidden="true"></i> <i class="fa fa-star"
                                                        aria-hidden="true"></i> <i class="fa fa-star"
                                                        aria-hidden="true"></i> <i class="fa fa-star"
                                                        aria-hidden="true"></i></span>
                                        <h3 class="axl-fse-admin-card-title is-small">
                                                <?php esc_html_e( 'Love our product?', 'axl-fse' ); ?>
                                        </h3>
                                        <h4 class="axl-fse-admin-card-title is-small">
                                                <?php esc_html_e( 'Motivate us by
                                                giving 5 star on
                                                our profile.', 'axl-fse' ); ?>
                                        </h4><a href="https://wordpress.org/support/theme/axl-fse/reviews/?filter=5"
                                                class="axl-fse-admin-button large is-default"
                                                target="__blank">
                                                <?php esc_html_e( 'Rate Us', 'axl-fse' ); ?>
                                        </a>
                                </div>
                                <div class="axl-fse-admin-card cart-two">
                                        <h3 class="axl-fse-admin-card-title is-small">
                                                <?php esc_html_e( 'Still have question?
                                                Ask Us, now!', 'axl-fse' ); ?>
                                        </h3>
                                        <p>
                                                <?php esc_html_e( 'Don\'t hesitate to ask any questions you have regarding our products.', 'axl-fse' ); ?>
                                        </p><a href="<?php echo $support_url; ?>"
                                                class="axl-fse-admin-button primary large"
                        target="_blank">
                                                <?php esc_html_e( 'Get Support', 'axl-fse' ); ?>
                                        </a>
                                </div>
                        </div>
                </div>
        </div>
        <div class="axl-fse-card-header-button-group">
                <a href="<?php echo $pro_purchase_url; ?>" class="axl-fse-admin-button" rel="noreferrer"
                        target="_blank"><i class="fa fa-paint-brush"></i>
                        <?php printf( esc_html( 'Get Axl Pro', 'axl-fse' ), $theme->Name ); ?>
                </a>
                <a href="<?php echo $doc_url; ?>" class="axl-fse-admin-button premium-button"
                        target="_blank" rel="noreferrer"><i class="fa fa-book"></i>
                        <?php esc_html_e( 'Documentations', 'axl-fse' ); ?>
                </a>
        </div>
</div>
