
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
  </head>
  <body <?php body_class(); ?>>
    <!-- Begin Site Header -->
    <nav class="c-mobile-nav-wrap u-offscreen-menu-display">
      <?php
          $args = array(
            'menu' => 'Header Menu',
            'theme_location' => 'header-menu',
            'container' => '',
            'container_class' => '',
            'menu_class' => 'c-nav--mobile',
            'menu_id' => '',
            'depth' => 0
          );
          wp_nav_menu( $args );
        ?>
    </nav>
    <header class="c-header">
      <div class="c-header__title u-flex--init u-flex-space-between">
        <a href="<?php echo home_url();?>"><div class="c-header__title-img o-bg-icon" style="background-image: url('<?php echo home_url();?>/wp-content/themes/berkeley_place/img/bp_logo_white.png');"></div></a>
        <nav class="u-flex--init u-align-center">
          <a class="u-order-3 c-menu-trigger u-offscreen-menu-display js-menu-trigger">
            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="menu-trigger" x="0px" y="0px" width="20px" height="20px" viewBox="0 0 124 124" style="enable-background:new 0 0 124 124;" xml:space="preserve">
              <g>
                <path id="menu_top" d="M112,6H12C5.4,6,0,11.4,0,18s5.4,12,12,12h100c6.6,0,12-5.4,12-12S118.6,6,112,6z" fill="#FFFFFF"/>
                <path id="menu_center" d="M112,50H12C5.4,50,0,55.4,0,62c0,6.6,5.4,12,12,12h100c6.6,0,12-5.4,12-12C124,55.4,118.6,50,112,50z" fill="#FFFFFF"/>
                <path id="menu_bottom" d="M112,94H12c-6.6,0-12,5.4-12,12s5.4,12,12,12h100c6.6,0,12-5.4,12-12S118.6,94,112,94z" fill="#FFFFFF"/>
              </g>
            </svg>
          </a>
          <?php
            $args = array(
              'menu' => 'Header Menu',
              'theme_location' => 'header-menu',
              'container' => '',
              'menu_class' => 'u-flex--init u-text-white u-uppercase c-header__nav',
              'menu_id' => '',
              'depth' => 0
            );
            wp_nav_menu( $args );

          ?>
          <a href="https://www.houzz.co.uk/pro/nick9859/berkeley-place" target="_blank" class="u-margin-right--15 c-social-link c-houzz"><img src="<?php echo home_url();?>/wp-content/themes/berkeley_place/img/houzz.png"></a>
          <a href="https://www.instagram.com/berkeley_place/" target="_blank" class="u-margin-right--5 c-social-link c-insta"><img src="<?php echo home_url();?>/wp-content/themes/berkeley_place/img/instagram.png"></a>
        </nav>
      </div>
    </header>
    <!-- End Site Header -->
