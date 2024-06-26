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

  <section class="home-page-section" id="home-page-section">
    <div class="container">
      <div class="home-page-section__inner">
        <section class="news">
          <!-- Выводим 3 свежих поста -->
          <?php

          global $post;
          $query = new WP_Query([
            'posts_per_page' => 3,
            'orderby'        => 'date',
            'tag__not_in' => array(35, 36, 44)
          ]);

          if ($query->have_posts()) {
            while ($query->have_posts()) {
              $query->the_post();
          ?>
              <div class="post">
                <div class="post__image">
                  <?php the_post_thumbnail(); ?>
                </div>
                <span class="post__date"> <?php echo get_the_date('d.m.Y'); ?></span>
                <a href="<?php echo get_the_permalink(); ?>" class="post__title"><?php the_title() ?></a>
                <a href="<?php echo get_the_permalink(); ?>" class="post__btn">Подробнее</a>
                <div class="post__tags">
                  <?php
                  the_category();
                  the_tags('', '');
                  ?>
                </div>
              </div>
          <?php
            }
          } else {
            // Постов не найдено
          }

          wp_reset_postdata(); // Сбрасываем $post
          ?>
          <!-- Конец вывода постов -->

        </section>

        <!-- SideBar start-->
        <?php
        get_template_part('/sidebar'); ?>
        <!-- SideBar end -->
      </div>
    </div>
  </section>

  <section class="other-news">
    <div class="container">
      <div class="other-news__inner ">
        <!-- Вывод постов без 3 первых -->
        <?php
        global $post;

        $query = new WP_Query([
          'posts_per_page' => -1,
          'offset'      => 3,
          'tag__not_in' => array(35, 36, 44)
        ]);

        if ($query->have_posts()) {
          while ($query->have_posts()) {
            $query->the_post();
        ?>
            <div class="post" hidden>
              <div class="post__image">
                <?php the_post_thumbnail(); ?>
              </div>
              <span class="post__date"> <?php echo get_the_date('d.m.Y'); ?></span>
              <a href="<?php echo get_the_permalink(); ?>" class="post__title"><?php the_title() ?></a>
              <p>
                <?php custom_the_excerpt(15); ?>
              </p>
              <a href="<?php echo get_the_permalink(); ?>" class="post__btn">Подробнее</a>
              <div class="post__tags">
                <?php
                the_category();
                the_tags('', '');
                ?>
              </div>
            </div>
        <?php
          }
        } else {
          // Постов не найдено
        }

        wp_reset_postdata(); // Сбрасываем $post
        ?>
        <!-- Конец вывода постов -->
      </div>
      <button class="other-news__show-more">Показать еще</button>
    </div>
  </section>


  <?php
  get_template_part('assets/parts/info'); ?>


  <?php
  get_template_part('assets/parts/caravan-of-history'); ?>

  <?php
  get_template_part('assets/parts/partners'); ?>

  <section class="sidebar-bottom">
    <div class="container">
      <div class="sidebar-bottom__inner">
        <?php dynamic_sidebar('sidebar-main'); ?>
      </div>
    </div>
  </section>
</main>

<?php get_footer(); ?>