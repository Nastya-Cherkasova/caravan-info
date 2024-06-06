<section class="widget-panel" id="widget-panel">
  <div class="container">
    <div class="widget-panel__inner">
      <div class="widget-panel__other">

        <div class="weather">
          <!-- <img src="<?php bloginfo('template_url'); ?>/assets/img/common/weather.png" alt=""> -->

          <!-- Москва -->
          <div class="weather__city" data-moscow>
            <div class="weather__top">
              <span data-name>Мосвка</span>
              <div>
                <span data-day></span>
                <span data-dayName></span>
              </div>
            </div>
            <div class="weather__bot">
              <img class="weather__bot-img" data-image>
              <div class="weather__bot-temp">
                <span data-max></span>
                <span data-min></span>
              </div>
            </div>
            <span hidden="hidden" data-descr></span>
          </div>

          <!-- Нур-Султан -->
          <div class="weather__city" data-astana>
            <div class="weather__top">
              <span data-name>Астана</span>
              <div>
                <span data-day></span>
                <span data-dayName></span>
              </div>
            </div>
            <div class="weather__bot">
              <img class="weather__bot-img" data-image>
              <div class="weather__bot-temp">
                <span data-max></span>
                <span data-min></span>
              </div>
            </div>
            <span hidden="hidden" data-descr></span>
          </div>

          <!-- Ташкент -->
          <div class="weather__city" data-tashkent>
            <span class="weather__top-scnd" data-name>Тошкент</span>
            <div class="weather__mid">
              <span data-day></span>
              <img class="weather__img" data-image>
              <span data-dayName></span>
            </div>
            <div class="weather__bot-scnd">
              <span data-max></span>
              <span data-min></span>
            </div>
            <span hidden="hidden" data-descr></span>
          </div>

          <!-- Бишкек -->
          <div class="weather__city" data-bishkek>
            <span class="weather__top-scnd" data-name>Бишкек</span>
            <div class="weather__mid">
              <span data-day></span>
              <img class="weather__img" data-image>
              <span data-dayName></span>
            </div>
            <div class="weather__bot-scnd">
              <span data-max></span>
              <span data-min></span>
            </div>
            <span hidden="hidden" data-descr></span>
          </div>

          <!-- Душанбе -->
          <div class="weather__city" data-dushanbe>
            <span class="weather__top-scnd" data-name>Душанбе</span>
            <div class="weather__mid">
              <span data-day></span>
              <img class="weather__img" data-image>
              <span data-dayName></span>
            </div>
            <div class="weather__bot-scnd">
              <span data-max></span>
              <span data-min></span>
            </div>
            <span hidden="hidden" data-descr></span>
          </div>

        </div>

        <?php wp_nav_menu([
          'theme_location'  => 'widget-themes',
          'menu'            => '',
          'container'       => 'div',
          'container_class' => 'widget-panel__themes',
          'menu_class'      => 'widget-panel__list',
        ]) ?>
      </div>
      <div class="widget-panel__sidebar">
        <?php dynamic_sidebar('sidebar-main'); ?>
      </div>
    </div>
  </div>
  </div>
</section>