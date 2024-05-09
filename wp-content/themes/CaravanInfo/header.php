<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
  <?php wp_head(); ?>
  <header class="header" id="header">
    <div class="container">
      <div class="header__inner">
        <!-- Логотип -->
        <?php
        if (has_custom_logo()) {
          echo get_custom_logo();
        }
        ?>
        <div class="header__items">

          <!-- Элементы навигации -->
          <?php wp_nav_menu([
            'theme_location'  => 'header',
            'menu'            => '',
            'container'       => 'div',
            'container_class' => '',
            'menu_class'      => 'header__links',
          ]) ?>

          <span class="header__burger"></span>
        </div>

      </div>

      <div class="header__content">
        <?php wp_nav_menu([
          'theme_location'  => 'dropdown_header_countries',
          'menu'            => '',
          'container'       => 'div',
          'container_class' => '',
          'menu_class'      => 'header__country',
        ]) ?>

        <?php wp_nav_menu([
          'theme_location'  => 'dropdown_header_blogs',
          'menu'            => '',
          'container'       => 'div',
          'container_class' => '',
          'menu_class'      => 'header__category',
        ]) ?>
      </div>
    </div>
  </header>