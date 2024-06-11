<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
  <?php wp_head(); ?>
  <noscript class="js-alert">
    <div>
      Ваш браузер не&nbsp;поддерживает JavaScript или JavaScript отключен. Пожалуйста, включите JavaScript для лучшего взаимодействия с&nbsp;сайтом.
    </div>
    <div>
      <a href="https://www.enablejavascript.io/ru" target="_blank" style="color: red;">
        Нажмите сюда чтобы посмотреть как включить JavaScript
      </a>
    </div>

  </noscript>
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

          <div onclick="langChanger()" class="header__lang">
            <span>Ru <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M0.882812 1.41956C0.882812 1.41956 5.55957 10.4899 5.91932 10.4899C6.27907 10.4899 10.9558 1.41956 10.9558 1.41956" stroke="white" stroke-width="1.5" stroke-linecap="round" />
              </svg>
            </span>
            <div class="header__langs">
              <span>Ru</span>
              <span>Kz</span>
              <span>Uzs</span>
              <span>Tjs</span>
              <span>Kgs</span>
            </div>
          </div>

          <span class="header__burger"></span>
        </div>

      </div>

      <div class="header__content">
        <div class="header__content-top">
          <?php
          if (has_custom_logo()) {
            echo get_custom_logo();
          }
          ?>
        </div>
        <?php wp_nav_menu([
          'theme_location'  => 'header',
          'menu'            => '',
          'container'       => 'div',
          'container_class' => '',
          'menu_class'      => 'header__links',
        ]) ?>


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
          'menu_class'      => 'header__themes',
        ]) ?>
      </div>
    </div>
  </header>