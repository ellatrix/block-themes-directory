<?php

/**
 * Theme admin functions.
 *
 * @package Ona
 */
if ( !defined( 'ABSPATH' ) ) {
    exit( 'Direct script access denied.' );
}
/**
* Add admin menu
*
* @since 1.0.0
*/
function ona_theme_admin_menu()
{
    add_theme_page(
        esc_html__( 'Ona Getting Started', 'ona' ),
        esc_html__( 'Ona', 'ona' ),
        'manage_options',
        'ona-theme',
        'ona_admin_page_content',
        30
    );
}

add_action( 'admin_menu', 'ona_theme_admin_menu' );
/**
* Add admin page content
*
* @since 1.0.0
*/
function ona_admin_page_content()
{
    $theme = wp_get_theme();
    $theme_name = 'Ona';
    $theme_slug = get_option( 'stylesheet' );
    $active_theme_name = $theme->get( 'Name' );
    $docs_url = 'https://docs.deothemes.com/ona/knowledgebase/';
    $urls = array(
        'theme-url'       => 'https://ona.deothemes.com/',
        'rating-url'      => 'https://wordpress.org/support/theme/ona/reviews/?rate=5#new-post',
        'docs'            => 'https://docs.deothemes.com/ona',
        'video-tutorials' => 'https://www.youtube.com/watch?v=R9tPDGK1q-Q&list=PLaPNmyRO67T0BsLPlGdrXO0T_5SxM5A4-&ab_channel=DeoThemes',
        'fonts'           => 'https://docs.deothemes.com/ona/knowledgebase/fonts/',
    );
    $demos = array(
        array(
        'title'   => esc_html__( 'Main', 'ona' ),
        'url'     => $urls['theme-url'],
        'preview' => ONA_URI . '/assets/admin/img/main_preview.jpg',
        'slug'    => 'ona',
        'pro'     => false,
    ),
        array(
        'title'   => esc_html__( 'Minimal', 'ona' ),
        'url'     => $urls['theme-url'] . 'minimal',
        'preview' => ONA_URI . '/assets/admin/img/minimal_preview.jpg',
        'slug'    => 'ona-minimal',
        'pro'     => false,
    ),
        array(
        'title'   => esc_html__( 'Creative', 'ona' ),
        'url'     => $urls['theme-url'] . 'creative',
        'preview' => ONA_URI . '/assets/admin/img/creative_preview.jpg',
        'slug'    => 'ona-creative',
        'pro'     => false,
    ),
        array(
        'title'   => esc_html__( 'Travel', 'ona' ),
        'url'     => $urls['theme-url'] . 'travel',
        'preview' => ONA_URI . '/assets/admin/img/travel_preview.jpg',
        'slug'    => 'ona-travel',
        'pro'     => false,
    ),
        array(
        'title'   => esc_html__( 'Environmental', 'ona' ),
        'url'     => $urls['theme-url'] . 'environmental',
        'preview' => ONA_URI . '/assets/admin/img/environmental_preview.jpg',
        'slug'    => 'ona-environmental',
        'pro'     => false,
    ),
        array(
        'title'   => esc_html__( 'Business', 'ona' ),
        'url'     => $urls['theme-url'] . 'business',
        'preview' => ONA_URI . '/assets/admin/img/business_preview.jpg',
        'slug'    => 'ona-business',
        'pro'     => false,
    ),
        array(
        'title'   => esc_html__( 'Magazine', 'ona' ),
        'url'     => $urls['theme-url'] . 'magazine',
        'preview' => ONA_URI . '/assets/admin/img/magazine_preview.jpg',
        'slug'    => 'ona-magazine',
        'pro'     => true,
    ),
        array(
        'title'   => esc_html__( 'Online Store', 'ona' ),
        'url'     => $urls['theme-url'] . 'online-store',
        'preview' => ONA_URI . '/assets/admin/img/online_store_preview.jpg',
        'slug'    => 'ona-online-store',
        'pro'     => true,
    ),
        array(
        'title'   => esc_html__( 'Recipes', 'ona' ),
        'url'     => $urls['theme-url'] . 'recipes',
        'preview' => ONA_URI . '/assets/admin/img/recipes_preview.jpg',
        'slug'    => 'ona-recipes',
        'pro'     => true,
    ),
        array(
        'title'   => esc_html__( 'Health', 'ona' ),
        'url'     => $urls['theme-url'] . 'health',
        'preview' => ONA_URI . '/assets/admin/img/health_preview.jpg',
        'slug'    => 'ona-health',
        'pro'     => true,
    ),
        array(
        'title'   => esc_html__( 'Coffee Shop', 'ona' ),
        'url'     => $urls['theme-url'] . 'coffee-shop',
        'preview' => ONA_URI . '/assets/admin/img/coffee_shop_preview.jpg',
        'slug'    => 'ona-coffee-shop',
        'pro'     => true,
    ),
        array(
        'title'   => esc_html__( 'Fashion', 'ona' ),
        'url'     => $urls['theme-url'] . 'fashion',
        'preview' => ONA_URI . '/assets/admin/img/fashion_preview.jpg',
        'slug'    => 'ona-fashion',
        'pro'     => true,
    ),
        array(
        'title'   => esc_html__( 'Agency', 'ona' ),
        'url'     => $urls['theme-url'] . 'agency',
        'preview' => ONA_URI . '/assets/admin/img/agency_preview.jpg',
        'slug'    => 'ona-agency',
        'pro'     => true,
    ),
        array(
        'title'   => esc_html__( 'Startup', 'ona' ),
        'url'     => $urls['theme-url'] . 'startup',
        'preview' => ONA_URI . '/assets/admin/img/startup_preview.jpg',
        'slug'    => 'ona-startup',
        'pro'     => true,
    )
    );
    $videos = array(
        'theme-installation'       => array(
        'links' => array( array(
        'link_url'     => 'https://www.youtube.com/watch?v=W02j1SU0zNo&list=PLaPNmyRO67T2R252KsIRvP5cN9EY69OIN&index=1&ab_channel=DeoThemes',
        'link_text'    => __( 'Theme Installation', 'ona' ),
        'link_img_src' => ONA_URI . '/assets/admin/img/videos/theme_installation.jpg',
    ) ),
    ),
        'edit-templates-and-pages' => array(
        'links' => array( array(
        'link_url'     => 'https://www.youtube.com/watch?v=hQbl77zvspI&list=PLaPNmyRO67T2R252KsIRvP5cN9EY69OIN&index=2&ab_channel=DeoThemes',
        'link_text'    => __( 'Edit Templates and Pages', 'ona' ),
        'link_img_src' => ONA_URI . '/assets/admin/img/videos/edit_templates_and_pages.jpg',
    ) ),
    ),
    );
    ?>

		<div class="ona-page-header">
			<div class="ona-page-header__container">
				<div class="ona-page-header__branding">
					<a href="<?php 
    echo  esc_url( $urls['theme-url'] ) ;
    ?>" target="_blank" rel="noopener" >
						<img src="<?php 
    echo  esc_url( ONA_URI . '/assets/admin/img/theme_logo.png' ) ;
    ?>" class="ona-page-header__logo" alt="<?php 
    echo  esc_attr__( 'Ona', 'ona' ) ;
    ?>" />
					</a>
					<span class="ona-theme-version"><?php 
    echo  esc_html( ONA_VERSION ) ;
    ?></span>
				</div>
				<div class="ona-page-header__tagline">
					<span  class="ona-page-header__tagline-text">				
						<?php 
    echo  esc_html__( 'Made by ', 'ona' ) ;
    ?>
						<a href="https://deothemes.com/"><?php 
    echo  esc_html__( 'DeoThemes', 'ona' ) ;
    ?></a>						
					</span>					
				</div>				
			</div>
		</div>

		<div class="wrap ona-container">
			<div class="ona-grid">

				<div class="ona-grid-content">
					<div class="ona-body">

						<h1 class="ona-title"><?php 
    esc_html_e( 'Getting Started', 'ona' );
    ?></h1>
						<p class="ona-intro-text">
							<?php 
    echo  esc_html__( 'Ona is now installed and ready to use. Get ready to build something beautiful. We hope you enjoy it! If you have any suggestion of how to improve this theme feel free to contact us.', 'ona' ) ;
    ?>
						</p>

						<?php 
    ?>
						
						<!-- Demos -->
						<section class="ona-section">
							<h2 class="ona-heading"><?php 
    echo  esc_html( $theme_name ) . esc_html__( ' Demos', 'ona' ) ;
    ?></h2>
							<p id="child-theme-text" class="ona-notice notice"></p>
							<ul class="ona-demos">
								<?php 
    foreach ( $demos as $index => $demo ) {
        ?>
									<li class="ona-demos__item">

										<?php 
        ?>
										
										<div class="ona-demos__item-container">
											<a href="<?php 
        echo  esc_url( $demo['url'] ) ;
        ?>" target="_blank" class="ona-demos__item-url" <?php 
        the_title_attribute( $demo['title'] );
        ?>>
												<?php 
        
        if ( $demo['pro'] && !ona_fs()->can_use_premium_code__premium_only() ) {
            ?>
													<span class="ona-demos__label"><?php 
            echo  esc_html__( 'Pro', 'ona' ) ;
            ?></span>
												<?php 
        }
        
        ?>

												<img src="<?php 
        echo  esc_url( $demo['preview'] ) ;
        ?>" alt="<?php 
        echo  esc_attr( $demo['title'] ) ;
        ?>">
											</a>
											<div class="ona-demos__item-title-holder">
												<h2 class="ona-demos__item-title"><?php 
        echo  esc_html( $demo['title'] ) ;
        ?></h2>
											
												<?php 
        $theme_dir = get_theme_root() . '/' . $demo['slug'];
        // Theme does not exist
        
        if ( !file_exists( $theme_dir ) ) {
            ?>

														<?php 
            ?>
															<a href="<?php 
            echo  esc_url( $demo['url'] ) ;
            ?>" target="_blank" class="button button-primary <?php 
            echo  ( $demo['pro'] ? "ona-preview-demo" : "ona-install-child-theme" ) ;
            ?>"
																data-theme="<?php 
            echo  esc_attr( $demo['slug'] ) ;
            ?>"
																data-theme-index="<?php 
            echo  esc_attr( absint( $index ) ) ;
            ?>"
																data-theme-pro="<?php 
            echo  ( $demo['pro'] ? 'true' : 'false' ) ;
            ?>"
																>
																<?php 
            echo  ( $demo['pro'] ? esc_html__( 'Preview', 'ona' ) : esc_html__( 'Install', 'ona' ) ) ;
            ?>
															</a>
														<?php 
            ?>

														<?php 
            ?>

													<!-- Theme exist but not active -->
													<?php 
        } elseif ( $theme_slug !== $demo['slug'] ) {
            ?>

														<?php 
            ?>
															<a href="<?php 
            echo  esc_url( $demo['url'] ) ;
            ?>" target="_blank" class="button button-primary <?php 
            echo  ( $demo['pro'] ? "ona-preview-demo" : "ona-install-child-theme" ) ;
            ?>"
															data-theme="<?php 
            echo  esc_attr( $demo['slug'] ) ;
            ?>"
															data-theme-index="<?php 
            echo  esc_attr( absint( $index ) ) ;
            ?>"
															data-theme-pro="<?php 
            echo  ( $demo['pro'] ? 'true' : 'false' ) ;
            ?>"
															target="_blank"
															>
																<?php 
            echo  ( $demo['pro'] ? esc_html__( 'Preview', 'ona' ) : esc_html__( 'Activate', 'ona' ) ) ;
            ?>
															</a>
														<?php 
            ?>

														<?php 
            ?>

													<!-- Theme active and ready for import -->
													<?php 
        } else {
            ?>

														<?php 
            ?>
															<a href="<?php 
            echo  esc_url( $demo['url'] ) ;
            ?>" class="ona-import-content button button-primary"
															data-theme="<?php 
            echo  esc_attr( $demo['slug'] ) ;
            ?>"
															data-theme-index="<?php 
            echo  esc_attr( absint( $index ) ) ;
            ?>"
															target="_blank"
															>
																<?php 
            echo  esc_html__( 'Preview', 'ona' ) ;
            ?>
															</a>
														<?php 
            ?>

														<?php 
            ?>
														
													<?php 
        }
        
        ?>

											</div> <!-- .ona-demos__item-title-holder -->
										</div> <!-- .ona-demos__item-container -->

									</li>
								<?php 
    }
    ?>
							</ul>
						</section>

					</div> <!-- .body -->

				</div> <!-- .content -->
				
				<!-- Sidebar -->
				<aside class="ona-grid-sidebar">
					<div class="ona-grid-sidebar-widget-area">
						
						<!-- Useful Links -->
						<div class="ona-widget">
							<h2 class="ona-widget-title"><?php 
    echo  esc_html__( 'Useful Links', 'ona' ) ;
    ?></h2>
							<ul class="ona-useful-links">
								<li>
									<a href="https://docs.deothemes.com/ona/" target="_blank"><?php 
    echo  esc_html__( 'Documentation', 'ona' ) ;
    ?></a>
								</li>
								<li>
									<a href="https://wordpress.org/support/theme/ona/reviews/#new-post" target="_blank"><?php 
    echo  esc_html__( 'Rate us ★★★★★', 'ona' ) ;
    ?></a>
								</li>

								<?php 
    ?>

								<li>
									<a href="https://twitter.com/deothemes"><?php 
    echo  esc_html__( 'Follow us', 'ona' ) ;
    ?></a>
								</li>
							</ul>
						</div>
						
						<!-- Settings -->
						<div class="ona-widget">
							<h2 class="ona-widget-title"><?php 
    echo  esc_html__( 'Settings', 'ona' ) ;
    ?></h2>
							<ul class="ona-useful-links">
								<li>
									<a href="<?php 
    echo  admin_url( 'site-editor.php' ) ;
    ?>"><?php 
    echo  esc_html__( 'Site Editor', 'ona' ) ;
    ?></a>
								</li>
								<li>
									<a href="<?php 
    echo  admin_url( 'customize.php' ) ;
    ?>"><?php 
    echo  esc_html__( 'Customizer', 'ona' ) ;
    ?></a>
								</li>
								<li>
									<a href="<?php 
    echo  ( ona_fs()->can_use_premium_code__premium_only() ? admin_url( 'customize.php?autofocus[section]=ona_core_settings_typography' ) : esc_url( $urls['fonts'] ) ) ;
    ?>"><?php 
    echo  esc_html__( 'Edit Fonts', 'ona' ) ;
    ?>
										<?php 
    ?>
											<span class="ona-pro-label"><?php 
    echo  esc_html__( 'Pro', 'ona' ) ;
    ?></span>
										<?php 
    ?>
									</a>
								</li>
							</ul>
						</div>
						
						<!-- Videos -->
						<div class="ona-widget ona-widget-video-tutorials">
							<h2 class="ona-widget-title"><?php 
    esc_html_e( 'Video Tutorials', 'ona' );
    ?></h2>
							<ul class="ona-video-tutorials">
								<?php 
    foreach ( (array) $videos as $video => $info ) {
        echo  '<li class="ona-video-tutorials__item">' ;
        foreach ( $info['links'] as $key => $link ) {
            echo  '<a href="' . esc_url( $link['link_url'] ) . '" class="ona-video-tutorials__url" target="_blank" rel="noopener">' ;
            echo  '<img src="' . esc_url( $link['link_img_src'] ) . '" alt="' . esc_html( $link['link_text'] ) . '" class="ona-video-tutorials__img" />' ;
            echo  '<span class="ona-video-tutorials__label">' . esc_html( $link['link_text'] ) . '</span>' ;
            echo  '</a>' ;
        }
        echo  '</li>' ;
    }
    ?>
							</ul>											
						</div>

					</div>					
				</aside>	

			</div> <!-- .grid -->

		</div>
	<?php 
}

/**
 * Install and activate child theme via Ajax
 */
function ona_activate_child_theme()
{
    check_ajax_referer( 'ona_ajax_nonce', 'wpnonce' );
    global  $wp_filesystem ;
    WP_Filesystem();
    if ( !empty($_POST['slug']) ) {
        $slug = sanitize_key( $_POST['slug'] );
    }
    if ( !empty($_POST['pro']) ) {
        $pro = $_POST['pro'];
    }
    if ( !empty($_POST['download_link']) ) {
        $source = esc_url( $_POST['download_link'] );
    }
    $path = get_theme_root() . '/' . $slug;
    // Check if child theme already exist
    
    if ( !file_exists( $path ) ) {
        $zip_file = get_theme_root() . '/' . $slug . '.zip';
        file_put_contents( $zip_file, file_get_contents( $source ) );
        $unzipfile = unzip_file( $zip_file, get_theme_root() );
        
        if ( !is_wp_error( $unzipfile ) ) {
            unlink( $zip_file );
            // Switch
            $allowed_themes = get_option( 'allowedthemes' );
            $allowed_themes[$slug] = true;
            update_option( 'allowedthemes', $allowed_themes );
            switch_theme( $slug );
            wp_send_json( array(
                'done'    => 1,
                'message' => esc_html__( 'Awesome. Your child theme is now activated. Proceed to importing the content.', 'ona' ),
            ) );
        } else {
            wp_send_json( array(
                'done'    => 1,
                'message' => esc_html__( 'There was an error unzipping the file.', 'ona' ),
            ) );
        }
    
    } else {
        switch_theme( $slug );
        wp_send_json( array(
            'done'    => 1,
            'message' => esc_html__( 'The existing child theme was activated. Proceed to importing the content.', 'ona' ),
        ) );
    }

}

add_action( 'wp_ajax_ona_activate_child_theme', 'ona_activate_child_theme' );
/**
 * Update child theme
 */
function ona_update_child_theme()
{
    check_ajax_referer( 'ona_ajax_nonce', 'wpnonce' );
    global  $wp_filesystem ;
    WP_Filesystem();
    if ( !empty($_POST['slug']) ) {
        $slug = sanitize_key( $_POST['slug'] );
    }
    $existing_theme_path = get_theme_root() . '/' . $slug;
    $remove_theme = $wp_filesystem->rmdir( $existing_theme_path, true );
    
    if ( $remove_theme ) {
        $source = ONA_DIR . '/inc/child-themes/' . $slug . '.zip';
        $unzipfile = unzip_file( $source, get_theme_root() );
        
        if ( !is_wp_error( $unzipfile ) ) {
            wp_send_json( array(
                'done'    => 1,
                'message' => esc_html__( 'Awesome. Your child theme is now updated.', 'ona' ),
            ) );
        } else {
            wp_send_json_error( array(
                'done'    => 1,
                'message' => esc_html__( 'Oops... Something went wrong. Please try again.', 'ona' ),
            ) );
        }
    
    }

}

add_action( 'wp_ajax_ona_update_child_theme', 'ona_update_child_theme' );
/**
* Adds an admin notice upon successful activation.
*/
function ona_activation_admin_notice()
{
    global  $current_user ;
    global  $current_screen ;
    // Don't show on theme main admin page
    if ( $current_screen->id === 'appearance_page_ona-theme' || $current_screen->id === 'toplevel_page_ona' ) {
        return;
    }
    
    if ( is_admin() ) {
        $current_theme = wp_get_theme();
        $welcome_dismissed = get_user_meta( $current_user->ID, 'ona_wizard_admin_notice' );
        if ( ($current_theme->get( 'Name' ) == "Ona" || $current_theme->get( 'Name' ) == "Ona Pro") && !$welcome_dismissed ) {
            add_action( 'admin_notices', 'ona_wizard_admin_notice', 99 );
        }
        wp_enqueue_style( 'ona-wizard-notice-css', get_template_directory_uri() . '/assets/admin/css/wizard-notice.css' );
    }

}

add_action( 'current_screen', 'ona_activation_admin_notice' );
/**
* Adds a button to dismiss the notice
*/
function ona_dismiss_wizard_notice()
{
    global  $current_user ;
    $user_id = $current_user->ID;
    if ( isset( $_GET['ona_wizard_dismiss'] ) && $_GET['ona_wizard_dismiss'] == '1' ) {
        add_user_meta(
            $user_id,
            'ona_wizard_admin_notice',
            'true',
            true
        );
    }
}

add_action( 'admin_init', 'ona_dismiss_wizard_notice', 1 );
/**
* Display an admin notice linking to the wizard screen
*/
function ona_wizard_admin_notice()
{
    
    if ( current_user_can( 'customize' ) ) {
        ?>
		<div class="notice theme-notice">
			<div class="theme-notice-logo">
				<img src="<?php 
        echo  esc_url( ONA_URI . '/assets/admin/img/theme_thumb.png' ) ;
        ?>" alt="<?php 
        esc_attr_e( 'Ona', 'ona' );
        ?>">
			</div>
			<div class="theme-notice-message wp-theme-fresh">
				<h2><?php 
        esc_html_e( 'Thank you for choosing Ona!', 'ona' );
        ?></h2>
				<?php 
        
        if ( class_exists( 'Merlin' ) ) {
            ?>
					<p class="about-description"><?php 
            esc_html_e( 'Run the Setup Wizard to configure your new theme and begin customizing your site.', 'ona' );
            ?></p>
				<?php 
        } else {
            ?>
					<p class="about-description"><?php 
            esc_html_e( 'Follow the steps to configure your new theme and begin customizing your site.', 'ona' );
            ?></p>
				<?php 
        }
        
        ?>
			</div>
			<div class="theme-notice-cta">
				<a href="<?php 
        echo  esc_url( admin_url( 'themes.php?page=ona-theme' ) ) ;
        ?>" class="button button-primary button-hero" style="text-decoration: none;"><?php 
        esc_html_e( 'Setup Instructions', 'ona' );
        ?></a>
				<a href="<?php 
        echo  esc_url( wp_nonce_url( add_query_arg( 'ona_wizard_dismiss', '1' ) ) ) ;
        ?>" class="notice-dismiss" target="_parent"></a>
			</div>
		</div>
	<?php 
    }

}

/**
* Change theme icon
*
* @since 1.0.0
*/
function ona_fs_custom_icon()
{
    return ONA_DIR . '/assets/admin/img/theme_thumb.png';
}

ona_fs()->add_filter( 'plugin_icon', 'ona_fs_custom_icon' );
/**
 * Add extra permissions to Freemius
 */
function ona_freemius_extra_permissions( $permissions )
{
    $permissions['newsletter'] = array(
        'icon-class' => 'dashicons dashicons-email-alt',
        'label'      => ona_fs()->get_text_inline( 'Newsletter', 'ona' ),
        'desc'       => ona_fs()->get_text_inline( 'Your email is added to our newsletter. Updates, announcements, marketing, no spam. Unsubscribe anytime.', 'ona' ),
        'priority'   => 15,
    );
    return $permissions;
}

ona_fs()->add_filter( 'permission_list', 'ona_freemius_extra_permissions' );
/**
* Show the contact submenu item only when the user have a valid non-expired license.
*
* @param $is_visible The filtered value. Whether the submenu item should be visible or not.
* @param $menu_id    The ID of the submenu item.
*
* @return bool If true, the menu item should be visible.
*/
function ona_is_submenu_visible( $is_visible, $menu_id )
{
    if ( 'contact' != $menu_id ) {
        return $is_visible;
    }
    return ona_fs()->can_use_premium_code();
}

ona_fs()->add_filter(
    'is_submenu_visible',
    'ona_is_submenu_visible',
    10,
    2
);