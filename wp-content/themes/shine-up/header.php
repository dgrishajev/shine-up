<!DOCTYPE HTML>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?php if(is_front_page()) { echo 'Shine Up'; } else { wp_title( ' | Shine Up', true, 'right' ); } ?></title>
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
  
  <header class="main-header">

    <div class="header-logo">
      <a href="<?php echo home_url(); ?>" class="header-logo-link">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/build/img/logo.svg" alt="Shine Up logo">
      </a>
    </div>

    <div class="header-menu-wrap">
    
      <?php

        $defaults = array(
         'container' => false,
         'theme_location' => 'top-menu',
         'menu_class' => 'top-menu'
        );

        wp_nav_menu($defaults);

      ?>

      </div>

  </header>