  <!DOCTYPE html>
  <html <?php language_attributes(); ?>>

  <head>
      <meta charset="<?php bloginfo('charset') ?>">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <meta name="robots" content="noindex" />

      <link rel="shortcut icon" href="<?php echo get_template_directory_uri() . '/assets/img/icon.png'; ?>" type="image/x-icon">

      <?php if (is_front_page()) :  ?>
          <title><?php echo get_bloginfo('name') . ' - ' . get_bloginfo('description') ?></title>
      <?php else :  ?>
          <title><?php echo wp_title('') . ' - ' . get_bloginfo('name') ?></title>
      <?php endif; ?>

      <?php wp_head(); ?>
  </head>

  <body <?php body_class(); ?>>
      <header>
          Navbar
      </header>