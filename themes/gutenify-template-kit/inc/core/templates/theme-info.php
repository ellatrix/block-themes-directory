<?php
$gutenify_is_installed = file_exists( WP_PLUGIN_DIR. '/gutenify' );
$gutenify_is_active = is_plugin_active( 'gutenify/gutenify.php' );
?>
<div class="gutenify-template-kit--getting-started--wrapper">
        <div id="gutenify-template-kit-admin-about-page">
                <div class="gutenify-template-kit-about-container  gutenify-admin-card gutenify-admin-card-header admin-grid-2">
                        <div class="gutenify-template-kit-header-left admin-col">
                                <h2>
                                        <?php echo esc_html( $theme->Name ); ?>
                                </h2>
                                <p>
                                        <?php esc_html_e( 'Free Full Site Editing WordPress Theme', 'gutenify-template-kit' ); ?>
                                </p>

               			 </div>
						<div class="gutenify-template-kit-header-left admin-col">
							<div class="gutenify-template-kit-card-header-button-group">
								<?php if ( defined('GUTENIFY_VERSION') && class_exists( 'Gutenify_Pro' ) ) : ?>
								<a href="<?php echo esc_url( admin_url( 'admin.php?page=gutenify-template-kits' ) ); ?>"
                                                class="gutenify-template-kit-admin-button" rel="noreferrer"><span class="dashicons dashicons-admin-customizer"></span> <?php esc_html_e( 'Site Demo', 'gutenify-template-kit' ); ?></a>
								<?php endif; ?>
								<?php if ( ! $gutenify_is_installed && ! $gutenify_is_active ) : ?>
								<a href="javascript:void(0);" class="gutenify-template-kit-admin-button gutenify-template-kit-install-gutenify"><span class="dashicons dashicons-admin-customizer"></span> <?php esc_html_e( 'Import Site Demo', 'gutenify-template-kit' ); ?> </a>
								<?php endif; ?>
								<?php if ( $gutenify_is_installed && ! $gutenify_is_active ) : ?>
								<a href="javascript:void(0);" class="gutenify-template-kit-admin-button gutenify-template-kit-activate-gutenify"><span class="dashicons dashicons-admin-customizer"></span> <?php esc_html_e( 'Import Site Demo', 'gutenify-template-kit' ); ?> </a>
								<?php endif; ?>
								<?php if ( $gutenify_is_active && ! class_exists( 'Gutenify_Pro' ) ) : ?>
								<a href="<?php echo esc_url( __( 'https://gutenify.com/pricing', 'gutenify-template-kit' ) ); ?>" class="gutenify-template-kit-admin-button" rel="noreferrer" target="_blank"><i
                                                        class="fa fa-paint-brush"></i> <?php esc_html_e( 'Get Gutenify Pro', 'gutenify-template-kit' ); ?> </a>
								<?php endif; ?>
								<a  href="<?php echo esc_url( __( 'https://gutenify.com/documentations/', 'gutenify-template-kit' ) ); ?>" class="gutenify-template-kit-admin-button premium-button"
                                                target="_blank" rel="noreferrer"><span class="dashicons dashicons-book-alt"></span> <?php esc_html_e( 'Documentations', 'gutenify-template-kit' ); ?></a></div>
                        		</div>
							</div>
                <div class="gutenify-template-kit-about-container subscribe-panel admin-grid-3">
                        <div class="admin-col">
                                <div class="gutentor-get-started-content">
                                        <h3><?php esc_html_e( 'Gutenify Site Demo', 'gutenify-template-kit' ); ?></h3>
                                        <p><?php esc_html_e( 'Gutenify has pre-built site demos for your site which will give your
                                                website a base structure.', 'gutenify-template-kit' ); ?></p>
                                        <ul>
                                                <li> <span class="dashicons dashicons-welcome-learn-more"></span> <a
                                                                href="https://gutenify.com/documentations/template-kits/"
                                                                target="_blank" rel="noreferrer"><?php esc_html_e( 'Learn about site demo', 'gutenify-template-kit' ); ?></a></li>
												<?php if ( defined('GUTENIFY_VERSION') ) : ?>
                                                <li> <span class="dashicons dashicons-search"></span> <a
                                                                href="<?php echo esc_url( admin_url( 'admin.php?page=gutenify-template-kits' ) ); ?>"
                                                                rel="noreferrer"><?php esc_html_e( 'Browse Site Demo', 'gutenify-template-kit' ); ?></a></li>
												<?php endif; ?>
												<?php if ( ! defined('GUTENIFY_VERSION') ) : ?>
                                                <li> <span class="dashicons dashicons-search"></span> <a
                                                                href="https://gutenify.com/template-kits/" target="_blank"
                                                                rel="noreferrer"><?php esc_html_e( 'Browse Site Demo', 'gutenify-template-kit' ); ?></a></li>
												<?php endif; ?>
                                        </ul>
                                </div>
                        </div>
                        <div class="admin-col">
                                <div class="gutenify-template-kit-get-started-content">
                                        <h3><?php esc_html_e( 'Import Patterns', 'gutenify-template-kit' ); ?></h3>
                                        <p><?php esc_html_e( 'From Edit screen of page/post, you can easily import Beautiful
                                                Patterns', 'gutenify-template-kit' ); ?></p>
                                        <ul>
                                                <li> <span class="dashicons dashicons-welcome-learn-more"></span> <a
                                                                href="https://gutenify.com/documentations/what-are-templates-how-do-we-add-templates-in-our-page-posts/"
                                                                target="_blank" rel="noreferrer"><?php esc_html_e( 'Learn about
                                                                Patterns', 'gutenify-template-kit' ); ?></a></li>
                                                <li> <span class="dashicons dashicons-edit"></span> <a
                                                                href="<?php echo esc_url( admin_url( 'post-new.php?post_type=page' ) ); ?>"
                                                                rel="noreferrer"><?php esc_html_e( 'Create page to add pattern', 'gutenify-template-kit' ); ?></a>
                                                </li>
                                        </ul>
                                </div>
                        </div>
                        <div class="admin-col">
                                <div class="subscribe-panel">
                                        <h3><?php esc_html_e( 'To add fresh block follow below steps', 'gutenify-template-kit' ); ?></h3>
                                        <ul>
                                                <li><span class="dashicons dashicons-yes"></span>
												<?php esc_html_e( 'At the top left corner of the
                                                        page/post edit
                                                        Screen, click on Sign', 'gutenify-template-kit' ); ?></li>
                                                <li><span class="dashicons dashicons-yes"></span>
												<?php esc_html_e( 'Type Block name in search bar, if
                                                        you already know
                                                        the block name.', 'gutenify-template-kit' ); ?></li>
                                                <li><span class="dashicons dashicons-yes"></span>
												<?php esc_html_e( 'OR Scroll down and navigate to
                                                        Gutenify section and
                                                        Add New Block.', 'gutenify-template-kit' ); ?></li>
                                        </ul>
                                </div>
                        </div>
                </div>
                <div class="gutenify-template-kit-about-container gutenify-template-kit-compare-table">
                        <div class="admin-grid-1">
                                <h3>
                                        <?php esc_html_e( 'Compare Free Vs Pro', 'gutenify-template-kit' ); ?>
									</h3>
									<p class="gutenify-template-kit-compare-table-subtitle"><a href="<?php echo esc_url( __( 'https://gutenify.com/pricing', 'gutenify-template-kit' ) ); ?>" target="__blank"><?php esc_html_e( 'Checkout all features', 'gutenify-template-kit' ); ?> <i class="dashicons dashicons-arrow-right-alt"></i></a></p>
                                <table>
                                        <thead>
                                                <tr>
                                                        <th>
                                                                <?php esc_html_e( 'Features', 'gutenify-template-kit' ); ?>
                                                        </th>
                                                        <th>
                                                                <?php esc_html_e( 'Free Gutenify Theme', 'gutenify-template-kit' ); ?>
                                                        </th>
                                                        <th>
                                                                <?php esc_html_e( 'Gutenify Pro Plugin', 'gutenify-template-kit' ); ?>
                                                        </th>
                                                </tr>
                                        </thead>
                                        <tbody>
                                                <tr>
                                                        <td>
                                                                <?php esc_html_e( 'Responsive Design', 'gutenify-template-kit' ); ?>
                                                                </th>
                                                        <td><span class="dashicons dashicons-yes"></span></th>
                                                        <td><span class="dashicons dashicons-yes"></span></th>
                                                </tr>
                                                <tr>
                                                        <td>
                                                                <?php esc_html_e( 'Painless Setup', 'gutenify-template-kit' ); ?>
                                                                </th>
                                                        <td><span class="dashicons dashicons-yes"></span></th>
                                                        <td><span class="dashicons dashicons-yes"></span></th>
                                                </tr>
                                                <tr>
                                                        <td>
                                                                <?php esc_html_e( 'Color Options', 'gutenify-template-kit' ); ?>
                                                                </th>
                                                        <td><span class="dashicons dashicons-yes"></span></th>
                                                        <td><span class="dashicons dashicons-yes"></span></th>
                                                </tr>
                                                <tr>
                                                        <td>
                                                                <?php esc_html_e( 'Premium site demos', 'gutenify-template-kit' ); ?>
                                                                </th>
                                                        <td><span class="dashicons dashicons-no"></span></th>
                                                        <td><span class="dashicons dashicons-yes"></span></th>
                                                </tr>
                                                <tr>
                                                        <td>
                                                                <?php esc_html_e( 'Multiple Block Layout', 'gutenify-template-kit' ); ?>
                                                                </th>
                                                        <td><span class="dashicons dashicons-no"></span></th>
                                                        <td><span class="dashicons dashicons-yes"></span></th>
                                                </tr>
                                                <tr>
                                                        <td>
                                                                <?php esc_html_e( 'Premium Patterns', 'gutenify-template-kit' ); ?>
                                                                </th>
                                                        <td><span class="dashicons dashicons-no"></span></th>
                                                        <td><span class="dashicons dashicons-yes"></span></th>
                                                </tr>
                                                <tr>
                                                        <td>
                                                                <?php esc_html_e( 'Multiple Fonts', 'gutenify-template-kit' ); ?>
                                                                </th>
                                                        <td><span class="dashicons dashicons-no"></span></th>
                                                        <td><span class="dashicons dashicons-yes"></span></th>
                                                </tr>
                                                <tr>
                                                        <td>
                                                                <?php esc_html_e( 'Slider Block ', 'gutenify-template-kit' ); ?>
                                                                </th>
                                                        <td><span class="dashicons dashicons-no"></span></th>
                                                        <td><span class="dashicons dashicons-yes"></span></th>
                                                </tr>
                                                <tr>
                                                        <td>
                                                                <?php esc_html_e( 'Post Listing Block', 'gutenify-template-kit' ); ?>
                                                                </th>
                                                        <td><span class="dashicons dashicons-no"></span></th>
                                                        <td><span class="dashicons dashicons-yes"></span></th>
                                                </tr>
                                                <tr>
                                                        <td>
                                                                <?php esc_html_e( 'WooCommerce Filter Block', 'gutenify-template-kit' ); ?>
                                                                </th>
                                                        <td><span class="dashicons dashicons-no"></span></th>
                                                        <td><span class="dashicons dashicons-yes"></span></th>
                                                </tr>
                                                <tr>
                                                        <td>
                                                                <?php esc_html_e( 'Gallery Block', 'gutenify-template-kit' ); ?>
                                                                </th>
                                                        <td><span class="dashicons dashicons-no"></span></th>
                                                        <td><span class="dashicons dashicons-yes"></span></th>
                                                </tr>
                                                <tr>
                                                        <td>
                                                                <?php esc_html_e( 'Star Rating Block', 'gutenify-template-kit' ); ?>
                                                                </th>
                                                        <td><span class="dashicons dashicons-no"></span></th>
                                                        <td><span class="dashicons dashicons-yes"></span></th>
                                                </tr>
                                                <tr>
                                                        <td>
                                                                <?php esc_html_e( 'Icon Block', 'gutenify-template-kit' ); ?>
                                                                </th>
                                                        <td><span class="dashicons dashicons-no"></span></th>
                                                        <td><span class="dashicons dashicons-yes"></span></th>
                                                </tr>
                                                <tr>
                                                        <td>
                                                                <?php esc_html_e( 'Post Carousel Block', 'gutenify-template-kit' ); ?>
                                                                </th>
                                                        <td><span class="dashicons dashicons-no"></span></th>
                                                        <td><span class="dashicons dashicons-yes"></span></th>
                                                </tr>
                                                <tr>
                                                        <td>
                                                                <?php esc_html_e( 'Google Map Block', 'gutenify-template-kit' ); ?>
                                                                </th>
                                                        <td><span class="dashicons dashicons-no"></span></th>
                                                        <td><span class="dashicons dashicons-yes"></span></th>
                                                </tr>
                                                <tr>
                                                        <td>
                                                                <?php esc_html_e( 'Testimonials Block', 'gutenify-template-kit' ); ?>
                                                                </th>
                                                        <td><span class="dashicons dashicons-no"></span></th>
                                                        <td><span class="dashicons dashicons-yes"></span></th>
                                                </tr>
                                                <tr>
                                                        <td>
                                                                <?php esc_html_e( 'Team Block', 'gutenify-template-kit' ); ?>
                                                                </th>
                                                        <td><span class="dashicons dashicons-no"></span></th>
                                                        <td><span class="dashicons dashicons-yes"></span></th>
                                                </tr>
                                        </tbody>
                                </table>
                        </div>
                </div>

                <div class="feature-list">
                        <div class="gutenify-template-kit-about-container gutenify-about-content">
                                <div class="gutenify-template-kit-admin-card features">
                                        <h4 class="gutenify-template-kit-admin-card-title is-medium is-sub"><?php esc_html_e( 'gutenify Core Features', 'gutenify-template-kit' ); ?>
                                        </h4>
                                        <ul class="gutenify-template-kit-options-features">
                                                <li><span class="dashicons dashicons-yes"></span>
												<?php esc_html_e( 'Global page settings(typography,
                                                        color, ...)', 'gutenify-template-kit' ); ?> </li>
                                                <li><span class="dashicons dashicons-yes"></span>
												<?php esc_html_e( 'Site Demo', 'gutenify-template-kit' ); ?>   </li>
                                                <li><span class="dashicons dashicons-yes"></span>
												<?php esc_html_e( 'Predefined sections', 'gutenify-template-kit' ); ?>   </li>
                                                <li><span class="dashicons dashicons-yes"></span>
												<?php esc_html_e( 'Fully Responsive', 'gutenify-template-kit' ); ?>   </li>
                                                <li><span class="dashicons dashicons-yes"></span>
												<?php esc_html_e( 'Highly customizable row columns', 'gutenify-template-kit' ); ?>
                                                </li>
                                                <li><span class="dashicons dashicons-yes"></span>
												<?php esc_html_e( 'Color Options', 'gutenify-template-kit' ); ?>   </li>
                                                <li><span class="dashicons dashicons-yes"></span>
												<?php esc_html_e( 'Device specific responsive controls', 'gutenify-template-kit' ); ?>
                                                </li>
                                                <li><span class="dashicons dashicons-yes"></span>
												<?php esc_html_e( 'Google fonts', 'gutenify-template-kit' ); ?> </li>
                                                <li><span class="dashicons dashicons-yes"></span>
												<?php esc_html_e( 'Classic &amp; gradient color and
                                                        background', 'gutenify-template-kit' ); ?></li>
                                                <li><span class="dashicons dashicons-yes"></span>
												<?php esc_html_e( 'Box-shadow', 'gutenify-template-kit' ); ?></li>
                                                <li><span class="dashicons dashicons-yes"></span>
												<?php esc_html_e( 'Border', 'gutenify-template-kit' ); ?> </li>
                                                <li><span class="dashicons dashicons-yes"></span>
												<?php esc_html_e( 'Advanced Typography', 'gutenify-template-kit' ); ?> </li>
                                                <li><span class="dashicons dashicons-yes"></span>
												<?php esc_html_e( 'Font Awesome 4 icon picker', 'gutenify-template-kit' ); ?></li>
                                                <li><span class="dashicons dashicons-yes"></span>
												<?php esc_html_e( '&amp; More...', 'gutenify-template-kit' ); ?> </li>
                                        </ul>
                                </div>
                        </div>
                        <div class="gutenify-template-kit-about-side">
                                <div class="gutenify-template-kit-admin-card member"><span><i class="fa fa-star"
                                                        aria-hidden="true"></i> <i class="fa fa-star"
                                                        aria-hidden="true"></i> <i class="fa fa-star"
                                                        aria-hidden="true"></i> <i class="fa fa-star"
                                                        aria-hidden="true"></i> <i class="fa fa-star"
                                                        aria-hidden="true"></i></span>
                                        <h3 class="gutenify-template-kit-admin-card-title is-small"><?php esc_html_e( 'Love our product?', 'gutenify-template-kit' ); ?>
                                        </h3>
                                        <h4 class="gutenify-template-kit-admin-card-title is-small"><?php esc_html_e( 'Motivate us by
                                                giving 5 star on
                                                our profile.', 'gutenify-template-kit' ); ?></h4><a
                                                href="https://wordpress.org/support/theme/gutenify-template-kit/reviews/?filter=5"
                                                class="gutenify-template-kit-admin-button large gutenify-block is-default"
                                                target="__blank"><?php esc_html_e( 'Rate Us', 'gutenify-template-kit' ); ?></a>
                                </div>
                                <div class="gutenify-template-kit-admin-card cart-two">
                                        <h3 class="gutenify-template-kit-admin-card-title is-small"><?php esc_html_e( 'Still have question?
                                                Ask Us, now!', 'gutenify-template-kit' ); ?>
                                        </h3>
                                        <p><?php esc_html_e( 'We are always ready with all fix issues you stuck to ensure smoothly works with gutenify', 'gutenify-template-kit' ); ?></p><a href="<?php echo esc_url( __( 'https://gutenify.com/contact/', 'gutenify-template-kit' ) ); ?>"
                                                class="gutenify-template-kit-admin-button primary large gutenify-block"><?php esc_html_e( 'Get Support', 'gutenify-template-kit' ); ?></a>
                                </div>
                        </div>
                </div>
        </div>
        <div class="gutenify-template-kit-card-header-button-group">

		<?php if ( defined('GUTENIFY_VERSION') && class_exists( 'Gutenify_Pro' ) ) : ?>
								<a href="<?php echo esc_url( admin_url( 'admin.php?page=gutenify-template-kits' ) ); ?>"
                                                class="gutenify-template-kit-admin-button" rel="noreferrer"><i
                                                        class="fa fa-paint-brush"></i> <?php esc_html_e( 'Site Demo', 'gutenify-template-kit' ); ?></a>
								<?php endif; ?>
								<?php if ( ! defined('GUTENIFY_VERSION') || ! class_exists( 'Gutenify_Pro' ) ) : ?>
								<a href="<?php echo esc_url( __( 'https://gutenify.com/pricing', 'gutenify-template-kit' ) ); ?>" class="gutenify-template-kit-admin-button" rel="noreferrer" target="_blank"><i
                                                        class="fa fa-paint-brush"></i> <?php esc_html_e( 'Get Gutenify Pro', 'gutenify-template-kit' ); ?> </a>
								<?php endif; ?>
								<a  href="<?php echo esc_url( __( 'https://gutenify.com/documentations/', 'gutenify-template-kit' ) ); ?>" class="gutenify-template-kit-admin-button premium-button"
                                                target="_blank" rel="noreferrer"><i class="fa fa-book"></i>
                                                <?php esc_html_e( 'Documentations', 'gutenify-template-kit' ); ?></a>
							</div>
</div>
