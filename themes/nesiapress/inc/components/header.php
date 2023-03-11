<?php
/**
 * NesiaPress Header Hook.
 * 
 * @since 2.1.0
 *
 * @package nesiapress
 */

if ( ! defined( 'ABSPATH' ) ) {
  exit; // Exit if accessed directly.
}

if ( ! function_exists( 'nesiapress_header_hook' ) ) {
  add_action( 'nesiapress_header', 'nesiapress_header_hook' );
  /**
   * Build the nesiapress header.
   *
   * @since 2.1.0
   */
  function nesiapress_header_hook() {

  /**
   * nesiapress_before_header hook.
   *
   * @since 2.1.0
   *
   */
  do_action( 'nesiapress_before_header' ); ?>
  
  <header id="masthead" class="site-header">
    <div class="np-header-container">
      <div class="header-inner">
        <div class="site-branding">
          <?php
          the_custom_logo();
          if ( is_front_page() && is_home() ) :
            ?>
            <h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
            <?php
          else :
            ?>
            <p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
            <?php
          endif;
          $nesiapress_description = get_bloginfo( 'description', 'display' );
          if ( $nesiapress_description || is_customize_preview() ) :
            ?>
            <p class="site-description"><?php echo $nesiapress_description; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></p>
          <?php endif; ?>
        </div><!-- .site-branding -->

        <div class="menu-button-wrapper">
          <button id="menu-toggle" class="menu-toggle">
            <svg viewBox="0 0 20 20" class="toggle-icon" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
              <g  stroke="none" stroke-width="1" fill="currentColor" fill-rule="evenodd">
                <g id="icon-shape">
                  <path d="M0,3 L20,3 L20,5 L0,5 L0,3 Z M0,9 L20,9 L20,11 L0,11 L0,9 Z M0,15 L20,15 L20,17 L0,17 L0,15 Z" id="Combined-Shape"></path>
                </g>
              </g>
            </svg><!-- .toggle-icon -->	
            <?php _e( 'Menu', 'nesiapress' ); ?>
          </button> <!-- .menu-toggle -->
        </div> <!-- .menu-button-wrapper -->

        <div id="site-menu-inner" class="site-menu-inner">
          <nav id="site-navigation" class="main-navigation" role="navigation" aria-label="<?php esc_attr_e( 'Primary Menu', 'nesiapress' ); ?>">
            <?php
              wp_nav_menu(
                array(
                  'theme_location' => 'primary',
                  'menu_class' 	  => 'primary-menu',
                )
              );
            ?>
          </nav><!-- .main-navigation -->
        </div><!-- .site-menu-inner -->

      </div><!-- .header-inner -->
    </div><!-- .header-wrapper -->
  </header><!-- #site-header -->
    
  <?php
  /**
	 * nesiapress_after_header hook.
	 *
	 * @since 2.1.0
	 *
	 */
	do_action( 'nesiapress_after_header' ); }
}