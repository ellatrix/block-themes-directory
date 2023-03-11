<?php
$pro_purchase_url = "https://olivethemes.com/wordpress-themes/medicity-pro/";
$doc_url = "https://olivethemes.com/documentations/";
$support_url = "https://olivethemes.com/support/";

$theme_name = esc_html( $theme->Name );
$free_theme_name = str_replace( ' Pro', '',$theme_name );
$plugin_is_installed = file_exists( WP_PLUGIN_DIR. '/olive-one-click-demo-import' );
$plugin_is_active = is_plugin_active( 'olive-one-click-demo-import/olive-one-click-demo-import.php' );
?>
<div class="medicity--about-page--wrapper">
        <div id="medicity-admin-about-page">
                <div class="medicity-admin-card-header">
                        <div class="medicity-header-left">
                                <h2>
                                        <?php echo esc_html( $theme->Name ); ?>
                                </h2>
                                <p>
                                        <?php esc_html_e( 'Multipurpose WordPress Full Site Editing Theme', 'medicity' ); ?>
                                </p>

                        </div>
                        <div class="medicity-header-right">
                                <div class="medicity-card-header-button-group">
                                        <!-- <a href="<?php echo $pro_purchase_url; ?>"
                                                class="medicity-admin-button"
                                                target="_blank">
                                                <span class="dashicons dashicons-admin-customizer"></span>
                                                <?php printf( esc_html( 'Get Medicity Pro', 'medicity' ), $theme->Name ); ?>
                                        </a> -->
                                        <a href="<?php echo $doc_url; ?>"
                                                class="medicity-admin-button premium-button" target="_blank"
                                                rel="noreferrer"><span class="dashicons dashicons-book-alt"></span>
                                                <?php esc_html_e( 'Documentations', 'medicity' ); ?>
                                        </a>
                                </div>
                        </div>
                </div>

				<div class="olive-one-click-demo-import-banner">
						<h2><?php esc_html_e( 'Download Advanced Site Templates for Free!', 'medicity' ); ?></h2>
						<p><?php esc_html_e( 'Install', 'medicity' ); ?> <a href="https://wordpress.org/plugins/olive-one-click-demo-import/" target="__blank"><?php esc_html_e( 'Olive One Click Demo Import', 'medicity' ); ?></a> <?php esc_html_e( 'and access to all the Olive Demo templates. This plugin will help you download site template in few clicks.', 'medicity' ); ?></p>
						<?php if ( ! $plugin_is_installed  ): ?>
						<a href="javascript:void(0);"  class="medicity-admin-button medicity-install-plugin" >
                                                <span class="dashicons dashicons-arrow-down-alt"></span>
                                                <?php printf( esc_html( 'Install Plugin', 'medicity' ), $theme->Name ); ?>
                                        </a>
						<?php elseif ( $plugin_is_installed && ! $plugin_is_active ): ?>
							<a href="javascript:void(0);"  class="medicity-admin-button medicity-activate-plugin" >
                                                <span class="dashicons dashicons-arrow-down-alt"></span>
                                                <?php printf( esc_html( 'Activate Plugin', 'medicity' ), $theme->Name ); ?>
                                        </a>
						<?php else:?>
							<a href="<?php echo esc_url( admin_url( 'themes.php?page=olive-one-click-demo-import' ) ); ?>"  class="medicity-admin-button" >
                                                <span class="dashicons dashicons-arrow-down-alt"></span>
                                                <?php printf( esc_html( 'Explore Site Templates', 'medicity' ), $theme->Name ); ?>
                                        </a>
						<?php endif; ?>
						<small><?php esc_html_e( 'Note: Clicking the button will both install and activate Olive One Click Demo Import plugin', 'medicity' ); ?></small>
				</div>

                <div class="feature-list">
                        <div class="medicity-about-container">
                                <div class="medicity-admin-card features">
                                        <div class="medicity-about-container medicity-compare-table">
                                                <div class="admin-grid-1">
                                                        <h3>
                                                                <?php echo esc_html( $free_theme_name ); ?>
                                                                <?php esc_html_e( 'Free Vs Pro', 'medicity' ); ?>
                                                        </h3>
                                                        <p class="medicity-compare-table-subtitle"><a
                                                                        href="<?php echo $pro_purchase_url; ?>"
                                                                        target="__blank">
                                                                        <?php echo esc_html( 'Get Medicity Pro', 'medicity' ); ?>
                                                                        <i
                                                                                class="dashicons dashicons-arrow-right-alt"></i>
                                                                </a></p>
                                                        <table>
                                                                <thead>
                                                                        <tr>
                                                                                <th>
																				<?php echo esc_html( $theme->Name ); ?> <?php esc_html_e( 'Free', 'medicity' ); ?>
                                                                                </th>
                                                                                <th>
                                                                                        <?php esc_html_e( 'Features', 'medicity' ); ?>
                                                                                </th>
                                                                                <th>
																				<?php esc_html_e( 'Medicity Pro', 'medicity' ); ?>
                                                                                </th>
                                                                        </tr>
                                                                </thead>
                                                                <tbody>
                                                                        <tr>
                                                                                <td><span
                                                                                                class="dashicons dashicons-yes"></span>
                                                                                        </td>
                                                                                <td>
                                                                                        <?php esc_html_e( 'Easy Setup', 'medicity' ); ?>
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
                                                                                        <?php esc_html_e( 'Responsive', 'medicity' ); ?>
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
                                                                                        <?php esc_html_e( 'Advance Color Options', 'medicity' ); ?>
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
                                                                                        <?php esc_html_e( 'Multiple Block Layout', 'medicity' ); ?>
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
                                                                                        <?php esc_html_e( '100+ Fonts', 'medicity' ); ?>
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
                                                                                        <?php esc_html_e( 'Advance Slider Block ', 'medicity' ); ?>
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
                                                                                        <?php esc_html_e( 'Post Listing Block', 'medicity' ); ?>
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
                                                                                        <?php esc_html_e( 'WooCommerce Filter Block', 'medicity' ); ?>
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
                                                                                        <?php esc_html_e( 'Gallery Block', 'medicity' ); ?>
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
                                                                                        <?php esc_html_e( 'Star Rating Block', 'medicity' ); ?>
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
                                                                                        <?php esc_html_e( 'Icon Block', 'medicity' ); ?>
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
                                                                                        <?php esc_html_e( 'Post Carousel Block', 'medicity' ); ?>
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
                                                                                        <?php esc_html_e( 'Google Map Block', 'medicity' ); ?>
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
                                                                                        <?php esc_html_e( 'Testimonials Block', 'medicity' ); ?>
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
                                                                                        <?php esc_html_e( 'Team Block', 'medicity' ); ?>
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
                        <div class="medicity-about-side">
                                <div class="medicity-admin-card member"><span><i class="fa fa-star"
                                                        aria-hidden="true"></i> <i class="fa fa-star"
                                                        aria-hidden="true"></i> <i class="fa fa-star"
                                                        aria-hidden="true"></i> <i class="fa fa-star"
                                                        aria-hidden="true"></i> <i class="fa fa-star"
                                                        aria-hidden="true"></i></span>
                                        <h3 class="medicity-admin-card-title is-small">
                                                <?php esc_html_e( 'Love our product?', 'medicity' ); ?>
                                        </h3>
                                        <h4 class="medicity-admin-card-title is-small">
                                                <?php esc_html_e( 'Motivate us by
                                                giving 5 star on
                                                our profile.', 'medicity' ); ?>
                                        </h4><a href="https://wordpress.org/support/theme/medicity/reviews/?filter=5"
                                                class="medicity-admin-button large is-default"
                                                target="__blank">
                                                <?php esc_html_e( 'Rate Us', 'medicity' ); ?>
                                        </a>
                                </div>
                                <div class="medicity-admin-card cart-two">
                                        <h3 class="medicity-admin-card-title is-small">
                                                <?php esc_html_e( 'Still have question?
                                                Ask Us, now!', 'medicity' ); ?>
                                        </h3>
                                        <p>
                                                <?php esc_html_e( 'Don\'t hesitate to ask any questions you have regarding our products.', 'medicity' ); ?>
                                        </p><a href="<?php echo $support_url; ?>"
                                                class="medicity-admin-button primary large"
                        target="_blank">
                                                <?php esc_html_e( 'Get Support', 'medicity' ); ?>
                                        </a>
                                </div>
                        </div>
                </div>
        </div>
        <div class="medicity-card-header-button-group">
                <a href="<?php echo $pro_purchase_url; ?>" class="medicity-admin-button" rel="noreferrer"
                        target="_blank"><i class="fa fa-paint-brush"></i>
                        <?php printf( esc_html( 'Get Medicity Pro', 'medicity' ), $theme->Name ); ?>
                </a>
                <a href="<?php echo $doc_url; ?>" class="medicity-admin-button premium-button"
                        target="_blank" rel="noreferrer"><i class="fa fa-book"></i>
                        <?php esc_html_e( 'Documentations', 'medicity' ); ?>
                </a>
        </div>
</div>
