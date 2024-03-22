<?php

/*
*header file
*/

?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
  <?php wp_body_open(); ?>

  <div class="main-container text-with-shadow">
    <div class="menu-container">
      <!-- Hamburger menu button -->
      <div class="mobile-menu">
        <div class="hamburger-menu">
          <span></span>
          <span></span>
          <span></span>
        </div>
        <div class="site-title">
          <a href="<?php echo esc_url(home_url('/')); ?>">
            <?php bloginfo('name'); ?>
          </a>
        </div>
      </div>
      <?php if (has_nav_menu('primary-menu')) : ?>
        <?php wp_nav_menu(
          [
            'theme_location' => 'primary-menu',
            'container' => 'nav',
          ]
        );
        ?>
      <?php endif; ?>
    </div>