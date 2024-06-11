<?php get_header(); ?>
<main class="main" id="main">
  <?php
  $title = 'КАРАВАН ИНФО';
  $subtitle = 'о&nbsp;главных событиях в&nbsp;регионе';

  // Вызов шаблона и передача аргументов
  get_template_part('assets/parts/top', null, array(
    'title' => $title,
    'subtitle' => $subtitle,
  ));
  ?>

  <section class="themes">
    <div class="container">
      <?php wp_nav_menu([
        'theme_location'  => 'under_top',
        'menu'            => '',
        'container'       => 'div',
        'container_class' => '',
        'menu_class'      => 'themes__list',
      ]) ?>
    </div>
  </section>

  <section class="filter">
    <div class="container">
      <div class="filter__content">

        <div class="filter__top">
          <!-- Начало вывода поста  -->
          <?php

          // Получаем параметры года, месяца и дня из запроса
          $year = get_query_var('year');
          $month = get_query_var('monthnum');
          $day = get_query_var('day');

          // Инициализируем массив параметров запроса
          $query_args = array(
            'posts_per_page' => 4,
            'post_type' => 'post',
            'tag__not_in' => array(35, 36, 44),
          );

          // Проверяем, были ли переданы параметры из виджета календаря
          if ($year && $month && $day) {
            // Если параметры 'year', 'monthnum' и 'day' переданы, значит пользователь кликнул на день

            $query_args['year'] = $year;
            $query_args['monthnum'] = $month;
            $query_args['day'] = $day;
          } elseif ($year && $month) {
            // Если параметры 'year' и 'monthnum' переданы, значит пользователь кликнул на месяц
            $page_title = date('F Y', strtotime("$year-$month-01"));
            echo '<h1>' . $page_title . '</h1>';

            $query_args['year'] = $year;
            $query_args['monthnum'] = $month;
          }

          // Создаем новый WP_Query с параметрами
          $query = new WP_Query($query_args);

          if ($query->have_posts()) {
            while ($query->have_posts()) {
              $query->the_post();
              setup_postdata($post); // Установка данных поста
          ?>
              <div class="post">
                <div class="post__image">
                  <?php the_post_thumbnail(); ?>
                </div>
                <span class="post__date"> <?php echo get_the_date('d.m.Y'); ?></span>
                <a href="<?php echo get_the_permalink(); ?>" class="post__title"><?php the_title(); ?></a>
                <a href="<?php echo get_the_permalink(); ?>" class="post__btn">Подробнее</a>
                <div class="post__tags">
                  <?php the_tags('', ''); ?>
                </div>
              </div>
          <?php
            }
          } else {
            // Постов не найдено
            echo '<p>Постов не найдено</p>';
          }

          wp_reset_postdata(); // Сбрасываем $post

          ?>


          <!-- Конец вывода постов -->
        </div>
      </div>
    </div>
  </section>
  <section class="other-news">
    <div class="container">
      <div class="other-news__inner ">
        <!-- Начало вывода поста  -->
        <?php

        // Получаем параметры года, месяца и дня из запроса
        $year = get_query_var('year');
        $month = get_query_var('monthnum');
        $day = get_query_var('day');

        // Инициализируем массив параметров запроса
        $query_args = array(
          'offset' => 4,
          'post_type' => 'post',
          'posts_per_page' => -1,
          'tag__not_in' => array(35, 36, 44),
        );

        // Проверяем, были ли переданы параметры из виджета календаря
        if ($year && $month && $day) {

          $query_args['year'] = $year;
          $query_args['monthnum'] = $month;
          $query_args['day'] = $day;
        } elseif ($year && $month) {
          // Если параметры 'year' и 'monthnum' переданы, значит пользователь кликнул на месяц
          $page_title = date('F Y', strtotime("$year-$month-01"));
          echo '<h1>' . $page_title . '</h1>';

          $query_args['year'] = $year;
          $query_args['monthnum'] = $month;
        }

        // Создаем новый WP_Query с параметрами
        $query = new WP_Query($query_args);

        if ($query->have_posts()) {
          while ($query->have_posts()) {
            $query->the_post();
            setup_postdata($post); // Установка данных поста
        ?>
            <div class="post" hidden>
              <div class="post__image">
                <?php the_post_thumbnail(); ?>
              </div>
              <span class="post__date"> <?php echo get_the_date('d.m.Y'); ?></span>
              <a href="<?php echo get_the_permalink(); ?>" class="post__title"><?php the_title(); ?></a>
              <p>
              <?php custom_the_excerpt(15); ?>
            </p>
              <a href="<?php echo get_the_permalink(); ?>" class="post__btn">Подробнее</a>
              <div class="post__tags">
                <?php the_tags('', ''); ?>
                <?php the_category(); ?>
              </div>
            </div>
        <?php
          }
        } else {
          // Постов не найдено
          echo '<p>Постов не найдено</p>';
        }

        wp_reset_postdata(); // Сбрасываем $post

        ?>

        <!-- Конец вывода постов -->
      </div>
      <button class="other-news__show-more">Показать еще</button>
    </div>
  </section>
  <?php
  get_template_part('assets/parts/widget-panel');


  get_template_part('assets/parts/info');

  get_template_part('assets/parts/history'); ?>
</main>
<?php get_footer(); ?>