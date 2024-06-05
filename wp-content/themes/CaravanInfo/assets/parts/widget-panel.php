<section class="widget-panel" id="widget-panel">
  <div class="container">
    <div class="widget-panel__inner">
      <div class="widget-panel__other">

        <div class="weather">
          <img src="<?php bloginfo('template_url'); ?>/assets/img/common/weather.png" alt="">
          <!-- <div id="19a2b17fe451f28c6c40149ca898ca0b" class="ww-informers-box-854753">
            <p class="ww-informers-box-854754"><a href="https://world-weather.ru/">world-weather.ru</a><br><a href="https://world-weather.ru/pogoda/russia/saint_petersburg/">Прогноз погоды в Санкт-Петербурге на завтра</a></p>
          </div>
          <script async type="text/javascript" charset="utf-8" src="https://world-weather.ru/wwinformer.php?userid=19a2b17fe451f28c6c40149ca898ca0b"></script>
          <style>
            .ww-informers-box-854754 {
              -webkit-animation-name: ww-informers54;
              animation-name: ww-informers54;
              -webkit-animation-duration: 1.5s;
              animation-duration: 1.5s;
              white-space: nowrap;
              overflow: hidden;
              -o-text-overflow: ellipsis;
              text-overflow: ellipsis;
              font-size: 12px;
              font-family: Arial;
              line-height: 18px;
              text-align: center
            }

            @-webkit-keyframes ww-informers54 {

              0%,
              80% {
                opacity: 0
              }

              100% {
                opacity: 1
              }
            }

            @keyframes ww-informers54 {

              0%,
              80% {
                opacity: 0
              }

              100% {
                opacity: 1
              }
            }
          </style> -->
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