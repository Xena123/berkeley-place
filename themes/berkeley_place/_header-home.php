
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<?php wp_head(); ?>
	</head>
	<body <?php body_class(); ?>>
		<!-- Begin Site Header -->
		<header class="c-header">
      <div class="u-flex--init u-flex-space-between">
        <img src="<?php echo home_url();?>/wp-content/themes/berkeley_place/img/logo.png">
  			<nav class="u-flex--init u-align-center">
          <?php
            $args = array(
              'menu' => 'Header Menu',
              'theme_location' => 'header-menu',
              'container' => '',
              'menu_class' => 'u-flex--init u-text-white u-uppercase',
              'menu_id' => '',
              'depth' => 0
            );
            wp_nav_menu( $args );

          ?>
          <a href="http://www.houzz.co.uk" class="u-margin-right--15"><img src="<?php echo home_url();?>/wp-content/themes/berkeley_place/img/houzz.png"></a>
          <a href="http://www.instagram.com" class="u-margin-right--15"><img src="<?php echo home_url();?>/wp-content/themes/berkeley_place/img/instagram.png"></a>
  			</nav>
      </div>
		</header>
		<!-- End Site Header -->
