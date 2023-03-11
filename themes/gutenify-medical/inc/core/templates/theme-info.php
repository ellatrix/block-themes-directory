<?php
$gutenify_is_installed = file_exists( WP_PLUGIN_DIR. '/gutenify' );
$gutenify_is_active = is_plugin_active( 'gutenify/gutenify.php' );
?>
<div class="gutenify-medical--getting-started--wrapper">
        <div id="gutenify-medical-admin-about-page">
                <div class="gutenify-medical-about-container  gutenify-admin-card gutenify-admin-card-header admin-grid-2">
                        <div class="gutenify-medical-header-left admin-col">
                                <h2>
                                        <?php echo esc_html( $theme->Name ); ?>
                                </h2>
                                <p>
                                        <?php esc_html_e( 'Free Full Site Editing WordPress Theme', 'gutenify-medical' ); ?>
                                </p>

               			 </div>
						<div class="gutenify-medical-header-left admin-col">
							<div class="gutenify-medical-card-header-button-group">
								<?php if ( defined('GUTENIFY_VERSION') && class_exists( 'Gutenify_Pro' ) ) : ?>
								<a href="<?php echo esc_url( admin_url( 'admin.php?page=gutenify-template-kits' ) ); ?>"
                                                class="gutenify-medical-admin-button" rel="noreferrer"><span class="dashicons dashicons-admin-customizer"></span> <?php esc_html_e( 'Site Demo', 'gutenify-medical' ); ?></a>
								<?php endif; ?>
								<?php if ( ! $gutenify_is_installed && ! $gutenify_is_active ) : ?>
								<a href="javascript:void(0);" class="gutenify-medical-admin-button gutenify-medical-install-gutenify"><span class="dashicons dashicons-admin-customizer"></span> <?php esc_html_e( 'Import Site Demo', 'gutenify-medical' ); ?> </a>
								<?php endif; ?>
								<?php if ( $gutenify_is_installed && ! $gutenify_is_active ) : ?>
								<a href="javascript:void(0);" class="gutenify-medical-admin-button gutenify-medical-activate-gutenify"><span class="dashicons dashicons-admin-customizer"></span> <?php esc_html_e( 'Import Site Demo', 'gutenify-medical' ); ?> </a>
								<?php endif; ?>
								<?php if ( $gutenify_is_active && ! class_exists( 'Gutenify_Pro' ) ) : ?>
								<a href="<?php echo esc_url( __( 'https://gutenify.com/pricing', 'gutenify-medical' ) ); ?>" class="gutenify-medical-admin-button" rel="noreferrer" target="_blank"><i
                                                        class="fa fa-paint-brush"></i> <?php esc_html_e( 'Get Gutenify Pro', 'gutenify-medical' ); ?> </a>
								<?php endif; ?>
								<a  href="<?php echo esc_url( __( 'https://gutenify.com/documentations/', 'gutenify-medical' ) ); ?>" class="gutenify-medical-admin-button premium-button"
                                                target="_blank" rel="noreferrer"><span class="dashicons dashicons-book-alt"></span> <?php esc_html_e( 'Documentations', 'gutenify-medical' ); ?></a></div>
                        		</div>
							</div>
                <div class="gutenify-medical-about-container subscribe-panel admin-grid-3">
                        <div class="admin-col">
                                <div class="gutentor-get-started-content">
                                        <h3><?php esc_html_e( 'Gutenify Site Demo', 'gutenify-medical' ); ?></h3>
                                        <p><?php esc_html_e( 'Gutenify has pre-built site demos for your site which will give your
                                                website a base structure.', 'gutenify-medical' ); ?></p>
                                        <ul>
                                                <li> <span class="dashicons dashicons-welcome-learn-more"></span> <a
                                                                href="https://gutenify.com/documentations/template-kits/"
                                                                target="_blank" rel="noreferrer"><?php esc_html_e( 'Learn about site demo', 'gutenify-medical' ); ?></a></li>
												<?php if ( defined('GUTENIFY_VERSION') ) : ?>
                                                <li> <span class="dashicons dashicons-search"></span> <a
                                                                href="<?php echo esc_url( admin_url( 'admin.php?page=gutenify-template-kits' ) ); ?>"
                                                                rel="noreferrer"><?php esc_html_e( 'Browse Site Demo', 'gutenify-medical' ); ?></a></li>
												<?php endif; ?>
												<?php if ( ! defined('GUTENIFY_VERSION') ) : ?>
                                                <li> <span class="dashicons dashicons-search"></span> <a
                                                                href="https://gutenify.com/template-kits/" target="_blank"
                                                                rel="noreferrer"><?php esc_html_e( 'Browse Site Demo', 'gutenify-medical' ); ?></a></li>
												<?php endif; ?>
                                        </ul>
                                </div>
                        </div>
                        <div class="admin-col">
                                <div class="gutenify-medical-get-started-content">
                                        <h3><?php esc_html_e( 'Import Patterns', 'gutenify-medical' ); ?></h3>
                                        <p><?php esc_html_e( 'From Edit screen of page/post, you can easily import Beautiful
                                                Patterns', 'gutenify-medical' ); ?></p>
                                        <ul>
                                                <li> <span class="dashicons dashicons-welcome-learn-more"></span> <a
                                                                href="https://gutenify.com/documentations/what-are-templates-how-do-we-add-templates-in-our-page-posts/"
                                                                target="_blank" rel="noreferrer"><?php esc_html_e( 'Learn about
                                                                Patterns', 'gutenify-medical' ); ?></a></li>
                                                <li> <span class="dashicons dashicons-edit"></span> <a
                                                                href="<?php echo esc_url( admin_url( 'post-new.php?post_type=page' ) ); ?>"
                                                                rel="noreferrer"><?php esc_html_e( 'Create page to add pattern', 'gutenify-medical' ); ?></a>
                                                </li>
                                        </ul>
                                </div>
                        </div>
                        <div class="admin-col">
                                <div class="subscribe-panel">
                                        <h3><?php esc_html_e( 'To add fresh block follow below steps', 'gutenify-medical' ); ?></h3>
                                        <ul>
                                                <li><span class="dashicons dashicons-yes"></span>
												<?php esc_html_e( 'At the top left corner of the
                                                        page/post edit
                                                        Screen, click on Sign', 'gutenify-medical' ); ?></li>
                                                <li><span class="dashicons dashicons-yes"></span>
												<?php esc_html_e( 'Type Block name in search bar, if
                                                        you already know
                                                        the block name.', 'gutenify-medical' ); ?></li>
                                                <li><span class="dashicons dashicons-yes"></span>
												<?php esc_html_e( 'OR Scroll down and navigate to
                                                        Gutenify section and
                                                        Add New Block.', 'gutenify-medical' ); ?></li>
                                        </ul>
                                </div>
                        </div>
                </div>
                <div class="gutenify-medical-about-container gutenify-medical-compare-table">
                        <div class="admin-grid-1">
                                <h3>
                                        <?php esc_html_e( 'Compare Free Vs Pro', 'gutenify-medical' ); ?>
									</h3>
									<p class="gutenify-medical-compare-table-subtitle"><a href="<?php echo esc_url( __( 'https://gutenify.com/pricing', 'gutenify-medical' ) ); ?>" target="__blank"><?php esc_html_e( 'Checkout all features', 'gutenify-medical' ); ?> <i class="dashicons dashicons-arrow-right-alt"></i></a></p>
                                <table>
                                        <thead>
                                                <tr>
                                                        <th>
                                                                <?php esc_html_e( 'Features', 'gutenify-medical' ); ?>
                                                        </th>
                                                        <th>
                                                                <?php esc_html_e( 'Free Gutenify Theme', 'gutenify-medical' ); ?>
                                                        </th>
                                                        <th>
                                                                <?php esc_html_e( 'Gutenify Pro Plugin', 'gutenify-medical' ); ?>
                                                        </th>
                                                </tr>
                                        </thead>
                                        <tbody>
                                                <tr>
                                                        <td>
                                                                <?php esc_html_e( 'Responsive Design', 'gutenify-medical' ); ?>
                                                                </th>
                                                        <td><span class="dashicons dashicons-yes"></span></th>
                                                        <td><span class="dashicons dashicons-yes"></span></th>
                                                </tr>
                                                <tr>
                                                        <td>
                                                                <?php esc_html_e( 'Painless Setup', 'gutenify-medical' ); ?>
                                                                </th>
                                                        <td><span class="dashicons dashicons-yes"></span></th>
                                                        <td><span class="dashicons dashicons-yes"></span></th>
                                                </tr>
                                                <tr>
                                                        <td>
                                                                <?php esc_html_e( 'Color Options', 'gutenify-medical' ); ?>
                                                                </th>
                                                        <td><span class="dashicons dashicons-yes"></span></th>
                                                        <td><span class="dashicons dashicons-yes"></span></th>
                                                </tr>
                                                <tr>
                                                        <td>
                                                                <?php esc_html_e( 'Premium site demos', 'gutenify-medical' ); ?>
                                                                </th>
                                                        <td><span class="dashicons dashicons-no"></span></th>
                                                        <td><span class="dashicons dashicons-yes"></span></th>
                                                </tr>
                                                <tr>
                                                        <td>
                                                                <?php esc_html_e( 'Multiple Block Layout', 'gutenify-medical' ); ?>
                                                                </th>
                                                        <td><span class="dashicons dashicons-no"></span></th>
                                                        <td><span class="dashicons dashicons-yes"></span></th>
                                                </tr>
                                                <tr>
                                                        <td>
                                                                <?php esc_html_e( 'Premium Patterns', 'gutenify-medical' ); ?>
                                                                </th>
                                                        <td><span class="dashicons dashicons-no"></span></th>
                                                        <td><span class="dashicons dashicons-yes"></span></th>
                                                </tr>
                                                <tr>
                                                        <td>
                                                                <?php esc_html_e( 'Multiple Fonts', 'gutenify-medical' ); ?>
                                                                </th>
                                                        <td><span class="dashicons dashicons-no"></span></th>
                                                        <td><span class="dashicons dashicons-yes"></span></th>
                                                </tr>
                                                <tr>
                                                        <td>
                                                                <?php esc_html_e( 'Slider Block ', 'gutenify-medical' ); ?>
                                                                </th>
                                                        <td><span class="dashicons dashicons-no"></span></th>
                                                        <td><span class="dashicons dashicons-yes"></span></th>
                                                </tr>
                                                <tr>
                                                        <td>
                                                                <?php esc_html_e( 'Post Listing Block', 'gutenify-medical' ); ?>
                                                                </th>
                                                        <td><span class="dashicons dashicons-no"></span></th>
                                                        <td><span class="dashicons dashicons-yes"></span></th>
                                                </tr>
                                                <tr>
                                                        <td>
                                                                <?php esc_html_e( 'WooCommerce Filter Block', 'gutenify-medical' ); ?>
                                                                </th>
                                                        <td><span class="dashicons dashicons-no"></span></th>
                                                        <td><span class="dashicons dashicons-yes"></span></th>
                                                </tr>
                                                <tr>
                                                        <td>
                                                                <?php esc_html_e( 'Gallery Block', 'gutenify-medical' ); ?>
                                                                </th>
                                                        <td><span class="dashicons dashicons-no"></span></th>
                                                        <td><span class="dashicons dashicons-yes"></span></th>
                                                </tr>
                                                <tr>
                                                        <td>
                                                                <?php esc_html_e( 'Star Rating Block', 'gutenify-medical' ); ?>
                                                                </th>
                                                        <td><span class="dashicons dashicons-no"></span></th>
                                                        <td><span class="dashicons dashicons-yes"></span></th>
                                                </tr>
                                                <tr>
                                                        <td>
                                                                <?php esc_html_e( 'Icon Block', 'gutenify-medical' ); ?>
                                                                </th>
                                                        <td><span class="dashicons dashicons-no"></span></th>
                                                        <td><span class="dashicons dashicons-yes"></span></th>
                                                </tr>
                                                <tr>
                                                        <td>
                                                                <?php esc_html_e( 'Post Carousel Block', 'gutenify-medical' ); ?>
                                                                </th>
                                                        <td><span class="dashicons dashicons-no"></span></th>
                                                        <td><span class="dashicons dashicons-yes"></span></th>
                                                </tr>
                                                <tr>
                                                        <td>
                                                                <?php esc_html_e( 'Google Map Block', 'gutenify-medical' ); ?>
                                                                </th>
                                                        <td><span class="dashicons dashicons-no"></span></th>
                                                        <td><span class="dashicons dashicons-yes"></span></th>
                                                </tr>
                                                <tr>
                                                        <td>
                                                                <?php esc_html_e( 'Testimonials Block', 'gutenify-medical' ); ?>
                                                                </th>
                                                        <td><span class="dashicons dashicons-no"></span></th>
                                                        <td><span class="dashicons dashicons-yes"></span></th>
                                                </tr>
                                                <tr>
                                                        <td>
                                                                <?php esc_html_e( 'Team Block', 'gutenify-medical' ); ?>
                                                                </th>
                                                        <td><span class="dashicons dashicons-no"></span></th>
                                                        <td><span class="dashicons dashicons-yes"></span></th>
                                                </tr>
                                        </tbody>
                                </table>
                        </div>
                </div>

                <div class="feature-list">
                        <div class="gutenify-medical-about-container gutenify-about-content">
                                <div class="gutenify-medical-admin-card features">
                                        <h4 class="gutenify-medical-admin-card-title is-medium is-sub"><?php esc_html_e( 'gutenify Core Features', 'gutenify-medical' ); ?>
                                        </h4>
                                        <ul class="gutenify-medical-options-features">
                                                <li><span class="dashicons dashicons-yes"></span>
												<?php esc_html_e( 'Global page settings(typography,
                                                        color, ...)', 'gutenify-medical' ); ?> </li>
                                                <li><span class="dashicons dashicons-yes"></span>
												<?php esc_html_e( 'Site Demo', 'gutenify-medical' ); ?>   </li>
                                                <li><span class="dashicons dashicons-yes"></span>
												<?php esc_html_e( 'Predefined sections', 'gutenify-medical' ); ?>   </li>
                                                <li><span class="dashicons dashicons-yes"></span>
												<?php esc_html_e( 'Fully Responsive', 'gutenify-medical' ); ?>   </li>
                                                <li><span class="dashicons dashicons-yes"></span>
												<?php esc_html_e( 'Highly customizable row columns', 'gutenify-medical' ); ?>
                                                </li>
                                                <li><span class="dashicons dashicons-yes"></span>
												<?php esc_html_e( 'Color Options', 'gutenify-medical' ); ?>   </li>
                                                <li><span class="dashicons dashicons-yes"></span>
												<?php esc_html_e( 'Device specific responsive controls', 'gutenify-medical' ); ?>
                                                </li>
                                                <li><span class="dashicons dashicons-yes"></span>
												<?php esc_html_e( 'Google fonts', 'gutenify-medical' ); ?> </li>
                                                <li><span class="dashicons dashicons-yes"></span>
												<?php esc_html_e( 'Classic &amp; gradient color and
                                                        background', 'gutenify-medical' ); ?></li>
                                                <li><span class="dashicons dashicons-yes"></span>
												<?php esc_html_e( 'Box-shadow', 'gutenify-medical' ); ?></li>
                                                <li><span class="dashicons dashicons-yes"></span>
												<?php esc_html_e( 'Border', 'gutenify-medical' ); ?> </li>
                                                <li><span class="dashicons dashicons-yes"></span>
												<?php esc_html_e( 'Advanced Typography', 'gutenify-medical' ); ?> </li>
                                                <li><span class="dashicons dashicons-yes"></span>
												<?php esc_html_e( 'Font Awesome 4 icon picker', 'gutenify-medical' ); ?></li>
                                                <li><span class="dashicons dashicons-yes"></span>
												<?php esc_html_e( '&amp; More...', 'gutenify-medical' ); ?> </li>
                                        </ul>
                                </div>
                        </div>
                        <div class="gutenify-medical-about-side">
                                <div class="gutenify-medical-admin-card member"><span><i class="fa fa-star"
                                                        aria-hidden="true"></i> <i class="fa fa-star"
                                                        aria-hidden="true"></i> <i class="fa fa-star"
                                                        aria-hidden="true"></i> <i class="fa fa-star"
                                                        aria-hidden="true"></i> <i class="fa fa-star"
                                                        aria-hidden="true"></i></span>
                                        <h3 class="gutenify-medical-admin-card-title is-small"><?php esc_html_e( 'Love our product?', 'gutenify-medical' ); ?>
                                        </h3>
                                        <h4 class="gutenify-medical-admin-card-title is-small"><?php esc_html_e( 'Motivate us by
                                                giving 5 star on
                                                our profile.', 'gutenify-medical' ); ?></h4><a
                                                href="https://wordpress.org/support/theme/gutenify-medical/reviews/?filter=5"
                                                class="gutenify-medical-admin-button large gutenify-block is-default"
                                                target="__blank"><?php esc_html_e( 'Rate Us', 'gutenify-medical' ); ?></a>
                                </div>
                                <div class="gutenify-medical-admin-card cart-two">
                                        <h3 class="gutenify-medical-admin-card-title is-small"><?php esc_html_e( 'Still have question?
                                                Ask Us, now!', 'gutenify-medical' ); ?>
                                        </h3>
                                        <p><?php esc_html_e( 'We are always ready with all fix issues you stuck to ensure smoothly works with gutenify', 'gutenify-medical' ); ?></p><a href="<?php echo esc_url( __( 'https://gutenify.com/contact/', 'gutenify-medical' ) ); ?>"
                                                class="gutenify-medical-admin-button primary large gutenify-block"><?php esc_html_e( 'Get Support', 'gutenify-medical' ); ?></a>
                                </div>
                        </div>
                </div>
        </div>
        <div class="gutenify-medical-card-header-button-group">

		<?php if ( defined('GUTENIFY_VERSION') && class_exists( 'Gutenify_Pro' ) ) : ?>
								<a href="<?php echo esc_url( admin_url( 'admin.php?page=gutenify-template-kits' ) ); ?>"
                                                class="gutenify-medical-admin-button" rel="noreferrer"><i
                                                        class="fa fa-paint-brush"></i> <?php esc_html_e( 'Site Demo', 'gutenify-medical' ); ?></a>
								<?php endif; ?>
								<?php if ( ! defined('GUTENIFY_VERSION') || ! class_exists( 'Gutenify_Pro' ) ) : ?>
								<a href="<?php echo esc_url( __( 'https://gutenify.com/pricing', 'gutenify-medical' ) ); ?>" class="gutenify-medical-admin-button" rel="noreferrer" target="_blank"><i
                                                        class="fa fa-paint-brush"></i> <?php esc_html_e( 'Get Gutenify Pro', 'gutenify-medical' ); ?> </a>
								<?php endif; ?>
								<a  href="<?php echo esc_url( __( 'https://gutenify.com/documentations/', 'gutenify-medical' ) ); ?>" class="gutenify-medical-admin-button premium-button"
                                                target="_blank" rel="noreferrer"><i class="fa fa-book"></i>
                                                <?php esc_html_e( 'Documentations', 'gutenify-medical' ); ?></a>
							</div>
</div>
