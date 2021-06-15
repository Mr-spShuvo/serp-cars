  <!DOCTYPE html>
  <html <?php language_attributes(); ?>>

  <head>
      <meta charset="<?php bloginfo('charset') ?>">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <meta name="robots" content="noindex" />
      <link rel="shortcut icon" href="<?php echo get_template_directory_uri() . '/assets/images/favicon.ico'; ?>" type="image/x-icon">

      <?php if (is_front_page()) :  ?>
          <title><?php echo get_bloginfo('name') . ' - ' . get_bloginfo('description') ?></title>
      <?php else :  ?>
          <title><?php echo wp_title('') . ' - ' . get_bloginfo('name') ?></title>
      <?php endif; ?>

      <?php wp_head(); ?>
  </head>

  <body <?php body_class(); ?>>
      <header class="header <?php if (is_front_page())  echo ('header--home'); ?>">
          <div class="container">
              <a class="header__logo" href="<?php echo site_url('/') ?>">
                  <img src="<?php
                            $url = is_front_page() ? '/assets/images/logo-white.svg' : '/assets/images/logo-color.svg';
                            echo (get_template_directory_uri() . $url) ?>" alt="Website Logo" />
                  SERP Cars
              </a>
              <nav class="header__nav">
                  <?php
                    wp_nav_menu(array(
                        'menu'           => 'Header Menu',
                        'theme_location' => 'header_menu',
                        'fallback_cb'    => false
                    ));
                    ?>
                  <span id="responsive-menu">
                      <i class="im im-menu"></i>
                  </span>
              </nav>
              <a class="header__c2a button button--main button--lg" href="<?php site_url('/cars') ?>">Get Started</a>
          </div>
      </header>