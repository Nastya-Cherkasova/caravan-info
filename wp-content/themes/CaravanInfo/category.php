<?php get_header(); ?>
<main class="main" id="main">
  <?php
  $title = 'КАРАВАН ИНФО';
  $subtitle = 'о&nbsp;главных событиях в&nbsp;регионе';

  if ($tag == 'business') {
    $title = 'Бизнес';
    $subtitle = 'Актуальные новости и&nbsp;статьи в&nbsp;сфере маркетинга и&nbsp;бизнеса.';
  }
  if ($tag == 'society') {
    $title = 'Общество';
    $subtitle = '';
  }
  if ($tag == 'culture') {
    $title = 'Культура';
    $subtitle = '';
  }
  if ($tag == 'science') {
    $title = 'Наука';
    $subtitle = '';
  }
  if ($tag == 'sport') {
    $title = 'Спорт';
    $subtitle = '';
  }
  if ($tag == 'apk') {
    $title = 'Новости АПК';
    $subtitle = '';
  }
  if ($tag == 'tourism') {
    $title = 'Туризм';
    $subtitle = '';
  }
  if ($tag == 'edu') {
    $title = 'Образование';
    $subtitle = '';
  }
  if ($tag == 'stars') {
    $title = 'Выдающиеся личности';
    $subtitle = '';
  }
  if ($tag == 'history') {
    $title = 'Караван историй';
    $subtitle = '';
  }

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
          global $post;

          $term = get_queried_object();

          if ($term && !is_wp_error($term)) {
            $slug = $term->slug;
          } else {
            $slug = 'rus';
          }


          // Выводим имя категории
          $query = new WP_Query([
            'post_type' => 'post',
            'posts_per_page' => 4, // Все посты
            'category_name' => $slug,
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


      </div>
    </div>

  </section>

  <!-- Список остальных новостей -->
  <?php
  if ($term && !is_wp_error($term)) {
    $slug = $term->slug;
  } else {
    $slug = 'rus';
  }

  $type = 'category_name';
  $typeValue = $slug;

  // Вызов шаблона и передача аргументов
  get_template_part('assets/parts/other-news', null, array(
    'type' => $type,
    'typeValue' => $typeValue
  ));
  ?>

  <!-- Widget-panel start-->
  <?php
  $widget_panel = get_template_part('assets/parts/widget-panel');
  echo $widget_panel;
  ?>
  <!-- Widget-panel end -->

  <!-- Блок информации -->
  <?php
  get_template_part('assets/parts/info'); ?>
</main>
<?php get_footer(); ?>