<?php
$gutenify_is_installed = file_exists( WP_PLUGIN_DIR. '/gutenify' );
$gutenify_is_active = is_plugin_active( 'gutenify/gutenify.php' );
?>
<div class="gutenify-civil--getting-started--wrapper">
        <div id="gutenify-civil-admin-about-page">
                <div class="gutenify-civil-about-container  gutenify-admin-card gutenify-admin-card-header admin-grid-2">
                        <div class="gutenify-civil-header-left admin-col">
                                <h2>
                                        <?php echo esc_html( $theme->Name ); ?>
                                </h2>
                                <p>
                                        <?php esc_html_e( 'Free Full Site Editing WordPress Theme', 'gutenify-civil' ); ?>
                                </p>

               			 </div>
						<div class="gutenify-civil-header-left admin-col">
							<div class="gutenify-civil-card-header-button-group">
								<?php if ( defined('GUTENIFY_VERSION') && class_exists( 'Gutenify_Pro' ) ) : ?>
								<a href="<?php echo esc_url( admin_url( 'admin.php?page=gutenify-template-kits' ) ); ?>"
                                                class="gutenify-civil-admin-button" rel="noreferrer"><span class="dashicons dashicons-admin-customizer"></span> <?php esc_html_e( 'Site Demo', 'gutenify-civil' ); ?></a>
								<?php endif; ?>
								<?php if ( ! $gutenify_is_installed && ! $gutenify_is_active ) : ?>
								<a href="javascript:void(0);" class="gutenify-civil-admin-button gutenify-civil-install-gutenify"><span class="dashicons dashicons-admin-customizer"></span> <?php esc_html_e( 'Import Site Demo', 'gutenify-civil' ); ?> </a>
								<?php endif; ?>
								<?php if ( $gutenify_is_installed && ! $gutenify_is_active ) : ?>
								<a href="javascript:void(0);" class="gutenify-civil-admin-button gutenify-civil-activate-gutenify"><span class="dashicons dashicons-admin-customizer"></span> <?php esc_html_e( 'Import Site Demo', 'gutenify-civil' ); ?> </a>
								<?php endif; ?>
								<?php if ( $gutenify_is_active && ! class_exists( 'Gutenify_Pro' ) ) : ?>
								<a href="<?php echo esc_url( __( 'https://gutenify.com/pricing', 'gutenify-civil' ) ); ?>" class="gutenify-civil-admin-button" rel="noreferrer" target="_blank"><i
                                                        class="fa fa-paint-brush"></i> <?php esc_html_e( 'Get Gutenify Pro', 'gutenify-civil' ); ?> </a>
								<?php endif; ?>
								<a  href="<?php echo esc_url( __( 'https://gutenify.com/documentations/', 'gutenify-civil' ) ); ?>" class="gutenify-civil-admin-button premium-button"
                                                target="_blank" rel="noreferrer"><span class="dashicons dashicons-book-alt"></span> <?php esc_html_e( 'Documentations', 'gutenify-civil' ); ?></a></div>
                        		</div>
							</div>
                <div class="gutenify-civil-about-container subscribe-panel admin-grid-3">
                        <div class="admin-col">
                                <div class="gutentor-get-started-content">
                                        <h3><?php esc_html_e( 'Gutenify Site Demo', 'gutenify-civil' ); ?></h3>
                                        <p><?php esc_html_e( 'Gutenify has pre-built site demos for your site which will give your
                                                website a base structure.', 'gutenify-civil' ); ?></p>
                                        <ul>
                                                <li> <span class="dashicons dashicons-welcome-learn-more"></span> <a
                                                                href="https://gutenify.com/documentations/template-kits/"
                                                                target="_blank" rel="noreferrer"><?php esc_html_e( 'Learn about site demo', 'gutenify-civil' ); ?></a></li>
												<?php if ( defined('GUTENIFY_VERSION') ) : ?>
                                                <li> <span class="dashicons dashicons-search"></span> <a
                                                                href="<?php echo esc_url( admin_url( 'admin.php?page=gutenify-template-kits' ) ); ?>"
                                                                rel="noreferrer"><?php esc_html_e( 'Browse Site Demo', 'gutenify-civil' ); ?></a></li>
												<?php endif; ?>
												<?php if ( ! defined('GUTENIFY_VERSION') ) : ?>
                                                <li> <span class="dashicons dashicons-search"></span> <a
                                                                href="https://gutenify.com/template-kits/" target="_blank"
                                                                rel="noreferrer"><?php esc_html_e( 'Browse Site Demo', 'gutenify-civil' ); ?></a></li>
												<?php endif; ?>
                                        </ul>
                                </div>
                        </div>
                        <div class="admin-col">
                                <div class="gutenify-civil-get-started-content">
                                        <h3><?php esc_html_e( 'Import Patterns', 'gutenify-civil' ); ?></h3>
                                        <p><?php esc_html_e( 'From Edit screen of page/post, you can easily import Beautiful
                                                Patterns', 'gutenify-civil' ); ?></p>
                                        <ul>
                                                <li> <span class="dashicons dashicons-welcome-learn-more"></span> <a
                                                                href="https://gutenify.com/documentations/what-are-templates-how-do-we-add-templates-in-our-page-posts/"
                                                                target="_blank" rel="noreferrer"><?php esc_html_e( 'Learn about
                                                                Patterns', 'gutenify-civil' ); ?></a></li>
                                                <li> <span class="dashicons dashicons-edit"></span> <a
                                                                href="<?php echo esc_url( admin_url( 'post-new.php?post_type=page' ) ); ?>"
                                                                rel="noreferrer"><?php esc_html_e( 'Create page to add pattern', 'gutenify-civil' ); ?></a>
                                                </li>
                                        </ul>
                                </div>
                        </div>
                        <div class="admin-col">
                                <div class="subscribe-panel">
                                        <h3><?php esc_html_e( 'To add fresh block follow below steps', 'gutenify-civil' ); ?></h3>
                                        <ul>
                                                <li><span class="dashicons dashicons-yes"></span>
												<?php esc_html_e( 'At the top left corner of the
                                                        page/post edit
                                                        Screen, click on Sign', 'gutenify-civil' ); ?></li>
                                                <li><span class="dashicons dashicons-yes"></span>
												<?php esc_html_e( 'Type Block name in search bar, if
                                                        you already know
                                                        the block name.', 'gutenify-civil' ); ?></li>
                                                <li><span class="dashicons dashicons-yes"></span>
												<?php esc_html_e( 'OR Scroll down and navigate to
                                                        Gutenify section and
                                                        Add New Block.', 'gutenify-civil' ); ?></li>
                                        </ul>
                                </div>
                        </div>
                </div>
                <div class="gutenify-civil-about-container gutenify-civil-compare-table">
                        <div class="admin-grid-1">
                                <h3>
                                        <?php esc_html_e( 'Compare Free Vs Pro', 'gutenify-civil' ); ?>
									</h3>
									<p class="gutenify-civil-compare-table-subtitle"><a href="<?php echo esc_url( __( 'https://gutenify.com/pricing', 'gutenify-civil' ) ); ?>" target="__blank"><?php esc_html_e( 'Checkout all features', 'gutenify-civil' ); ?> <i class="dashicons dashicons-arrow-right-alt"></i></a></p>
                                <table>
                                        <thead>
                                                <tr>
                                                        <th>
                                                                <?php esc_html_e( 'Features', 'gutenify-civil' ); ?>
                                                        </th>
                                                        <th>
                                                                <?php esc_html_e( 'Free Gutenify Theme', 'gutenify-civil' ); ?>
                                                        </th>
                                                        <th>
                                                                <?php esc_html_e( 'Gutenify Pro Plugin', 'gutenify-civil' ); ?>
                                                        </th>
                                                </tr>
                                        </thead>
                                        <tbody>
                                                <tr>
                                                        <td>
                                                                <?php esc_html_e( 'Responsive Design', 'gutenify-civil' ); ?>
                                                                </th>
                                                        <td><span class="dashicons dashicons-yes"></span></th>
                                                        <td><span class="dashicons dashicons-yes"></span></th>
                                                </tr>
                                                <tr>
                                                        <td>
                                                                <?php esc_html_e( 'Painless Setup', 'gutenify-civil' ); ?>
                                                                </th>
                                                        <td><span class="dashicons dashicons-yes"></span></th>
                                                        <td><span class="dashicons dashicons-yes"></span></th>
                                                </tr>
                                                <tr>
                                                        <td>
                                                                <?php esc_html_e( 'Color Options', 'gutenify-civil' ); ?>
                                                                </th>
                                                        <td><span class="dashicons dashicons-yes"></span></th>
                                                        <td><span class="dashicons dashicons-yes"></span></th>
                                                </tr>
                                                <tr>
                                                        <td>
                                                                <?php esc_html_e( 'Premium site demos', 'gutenify-civil' ); ?>
                                                                </th>
                                                        <td><span class="dashicons dashicons-no"></span></th>
                                                        <td><span class="dashicons dashicons-yes"></span></th>
                                                </tr>
                                                <tr>
                                                        <td>
                                                                <?php esc_html_e( 'Multiple Block Layout', 'gutenify-civil' ); ?>
                                                                </th>
                                                        <td><span class="dashicons dashicons-no"></span></th>
                                                        <td><span class="dashicons dashicons-yes"></span></th>
                                                </tr>
                                                <tr>
                                                        <td>
                                                                <?php esc_html_e( 'Premium Patterns', 'gutenify-civil' ); ?>
                                                                </th>
                                                        <td><span class="dashicons dashicons-no"></span></th>
                                                        <td><span class="dashicons dashicons-yes"></span></th>
                                                </tr>
                                                <tr>
                                                        <td>
                                                                <?php esc_html_e( 'Multiple Fonts', 'gutenify-civil' ); ?>
                                                                </th>
                                                        <td><span class="dashicons dashicons-no"></span></th>
                                                        <td><span class="dashicons dashicons-yes"></span></th>
                                                </tr>
                                                <tr>
                                                        <td>
                                                                <?php esc_html_e( 'Slider Block ', 'gutenify-civil' ); ?>
                                                                </th>
                                                        <td><span class="dashicons dashicons-no"></span></th>
                                                        <td><span class="dashicons dashicons-yes"></span></th>
                                                </tr>
                                                <tr>
                                                        <td>
                                                                <?php esc_html_e( 'Post Listing Block', 'gutenify-civil' ); ?>
                                                                </th>
                                                        <td><span class="dashicons dashicons-no"></span></th>
                                                        <td><span class="dashicons dashicons-yes"></span></th>
                                                </tr>
                                                <tr>
                                                        <td>
                                                                <?php esc_html_e( 'WooCommerce Filter Block', 'gutenify-civil' ); ?>
                                                                </th>
                                                        <td><span class="dashicons dashicons-no"></span></th>
                                                        <td><span class="dashicons dashicons-yes"></span></th>
                                                </tr>
                                                <tr>
                                                        <td>
                                                                <?php esc_html_e( 'Gallery Block', 'gutenify-civil' ); ?>
                                                                </th>
                                                        <td><span class="dashicons dashicons-no"></span></th>
                                                        <td><span class="dashicons dashicons-yes"></span></th>
                                                </tr>
                                                <tr>
                                                        <td>
                                                                <?php esc_html_e( 'Star Rating Block', 'gutenify-civil' ); ?>
                                                                </th>
                                                        <td><span class="dashicons dashicons-no"></span></th>
                                                        <td><span class="dashicons dashicons-yes"></span></th>
                                                </tr>
                                                <tr>
                                                        <td>
                                                                <?php esc_html_e( 'Icon Block', 'gutenify-civil' ); ?>
                                                                </th>
                                                        <td><span class="dashicons dashicons-no"></span></th>
                                                        <td><span class="dashicons dashicons-yes"></span></th>
                                                </tr>
                                                <tr>
                                                        <td>
                                                                <?php esc_html_e( 'Post Carousel Block', 'gutenify-civil' ); ?>
                                                                </th>
                                                        <td><span class="dashicons dashicons-no"></span></th>
                                                        <td><span class="dashicons dashicons-yes"></span></th>
                                                </tr>
                                                <tr>
                                                        <td>
                                                                <?php esc_html_e( 'Google Map Block', 'gutenify-civil' ); ?>
                                                                </th>
                                                        <td><span class="dashicons dashicons-no"></span></th>
                                                        <td><span class="dashicons dashicons-yes"></span></th>
                                                </tr>
                                                <tr>
                                                        <td>
                                                                <?php esc_html_e( 'Testimonials Block', 'gutenify-civil' ); ?>
                                                                </th>
                                                        <td><span class="dashicons dashicons-no"></span></th>
                                                        <td><span class="dashicons dashicons-yes"></span></th>
                                                </tr>
                                                <tr>
                                                        <td>
                                                                <?php esc_html_e( 'Team Block', 'gutenify-civil' ); ?>
                                                                </th>
                                                        <td><span class="dashicons dashicons-no"></span></th>
                                                        <td><span class="dashicons dashicons-yes"></span></th>
                                                </tr>
                                        </tbody>
                                </table>
                        </div>
                </div>

                <div class="feature-list">
                        <div class="gutenify-civil-about-container gutenify-about-content">
                                <div class="gutenify-civil-admin-card features">
                                        <h4 class="gutenify-civil-admin-card-title is-medium is-sub"><?php esc_html_e( 'gutenify Core Features', 'gutenify-civil' ); ?>
                                        </h4>
                                        <ul class="gutenify-civil-options-features">
                                                <li><span class="dashicons dashicons-yes"></span>
												<?php esc_html_e( 'Global page settings(typography,
                                                        color, ...)', 'gutenify-civil' ); ?> </li>
                                                <li><span class="dashicons dashicons-yes"></span>
												<?php esc_html_e( 'Site Demo', 'gutenify-civil' ); ?>   </li>
                                                <li><span class="dashicons dashicons-yes"></span>
												<?php esc_html_e( 'Predefined sections', 'gutenify-civil' ); ?>   </li>
                                                <li><span class="dashicons dashicons-yes"></span>
												<?php esc_html_e( 'Fully Responsive', 'gutenify-civil' ); ?>   </li>
                                                <li><span class="dashicons dashicons-yes"></span>
												<?php esc_html_e( 'Highly customizable row columns', 'gutenify-civil' ); ?>
                                                </li>
                                                <li><span class="dashicons dashicons-yes"></span>
												<?php esc_html_e( 'Color Options', 'gutenify-civil' ); ?>   </li>
                                                <li><span class="dashicons dashicons-yes"></span>
												<?php esc_html_e( 'Device specific responsive controls', 'gutenify-civil' ); ?>
                                                </li>
                                                <li><span class="dashicons dashicons-yes"></span>
												<?php esc_html_e( 'Google fonts', 'gutenify-civil' ); ?> </li>
                                                <li><span class="dashicons dashicons-yes"></span>
												<?php esc_html_e( 'Classic &amp; gradient color and
                                                        background', 'gutenify-civil' ); ?></li>
                                                <li><span class="dashicons dashicons-yes"></span>
												<?php esc_html_e( 'Box-shadow', 'gutenify-civil' ); ?></li>
                                                <li><span class="dashicons dashicons-yes"></span>
												<?php esc_html_e( 'Border', 'gutenify-civil' ); ?> </li>
                                                <li><span class="dashicons dashicons-yes"></span>
												<?php esc_html_e( 'Advanced Typography', 'gutenify-civil' ); ?> </li>
                                                <li><span class="dashicons dashicons-yes"></span>
												<?php esc_html_e( 'Font Awesome 4 icon picker', 'gutenify-civil' ); ?></li>
                                                <li><span class="dashicons dashicons-yes"></span>
												<?php esc_html_e( '&amp; More...', 'gutenify-civil' ); ?> </li>
                                        </ul>
                                </div>
                        </div>
                        <div class="gutenify-civil-about-side">
                                <div class="gutenify-civil-admin-card member"><span><i class="fa fa-star"
                                                        aria-hidden="true"></i> <i class="fa fa-star"
                                                        aria-hidden="true"></i> <i class="fa fa-star"
                                                        aria-hidden="true"></i> <i class="fa fa-star"
                                                        aria-hidden="true"></i> <i class="fa fa-star"
                                                        aria-hidden="true"></i></span>
                                        <h3 class="gutenify-civil-admin-card-title is-small"><?php esc_html_e( 'Love our product?', 'gutenify-civil' ); ?>
                                        </h3>
                                        <h4 class="gutenify-civil-admin-card-title is-small"><?php esc_html_e( 'Motivate us by
                                                giving 5 star on
                                                our profile.', 'gutenify-civil' ); ?></h4><a
                                                href="https://wordpress.org/support/theme/gutenify-civil/reviews/?filter=5"
                                                class="gutenify-civil-admin-button large gutenify-block is-default"
                                                target="__blank"><?php esc_html_e( 'Rate Us', 'gutenify-civil' ); ?></a>
                                </div>
                                <div class="gutenify-civil-admin-card cart-two">
                                        <h3 class="gutenify-civil-admin-card-title is-small"><?php esc_html_e( 'Still have question?
                                                Ask Us, now!', 'gutenify-civil' ); ?>
                                        </h3>
                                        <p><?php esc_html_e( 'We are always ready with all fix issues you stuck to ensure smoothly works with gutenify', 'gutenify-civil' ); ?></p><a href="<?php echo esc_url( __( 'https://gutenify.com/contact/', 'gutenify-civil' ) ); ?>"
                                                class="gutenify-civil-admin-button primary large gutenify-block"><?php esc_html_e( 'Get Support', 'gutenify-civil' ); ?></a>
                                </div>
                        </div>
                </div>
        </div>
        <div class="gutenify-civil-card-header-button-group">

		<?php if ( defined('GUTENIFY_VERSION') && class_exists( 'Gutenify_Pro' ) ) : ?>
								<a href="<?php echo esc_url( admin_url( 'admin.php?page=gutenify-template-kits' ) ); ?>"
                                                class="gutenify-civil-admin-button" rel="noreferrer"><i
                                                        class="fa fa-paint-brush"></i> <?php esc_html_e( 'Site Demo', 'gutenify-civil' ); ?></a>
								<?php endif; ?>
								<?php if ( ! defined('GUTENIFY_VERSION') || ! class_exists( 'Gutenify_Pro' ) ) : ?>
								<a href="<?php echo esc_url( __( 'https://gutenify.com/pricing', 'gutenify-civil' ) ); ?>" class="gutenify-civil-admin-button" rel="noreferrer" target="_blank"><i
                                                        class="fa fa-paint-brush"></i> <?php esc_html_e( 'Get Gutenify Pro', 'gutenify-civil' ); ?> </a>
								<?php endif; ?>
								<a  href="<?php echo esc_url( __( 'https://gutenify.com/documentations/', 'gutenify-civil' ) ); ?>" class="gutenify-civil-admin-button premium-button"
                                                target="_blank" rel="noreferrer"><i class="fa fa-book"></i>
                                                <?php esc_html_e( 'Documentations', 'gutenify-civil' ); ?></a>
							</div>
</div>
