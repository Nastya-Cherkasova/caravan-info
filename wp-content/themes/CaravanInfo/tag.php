<?php
// Получаем название метки из URL
$tag = get_query_var('tag');
// echo 'tag-' . $tag;


?>

<?php get_header(); ?>
<main class="main">

  <?php
  $title = 'КАРАВАН ИНФО';
  $subtitle = 'о&nbsp;главных событиях в&nbsp;регионе';

  if ($tag == 'business') {
    $title = 'Бизнес';
    $subtitle = 'Актуальные новости и&nbsp;статьи в&nbsp;сфере маркетинга и&nbsp;бизнеса.';
  }
  if ($tag == 'society') {
    $title = 'Общество';
    $subtitle = 'Актуальные новости и&nbsp;статьи в&nbsp;сфере общества и&nbsp;социальной жизни.';
  }
  if ($tag == 'culture') {
    $title = 'Культура';
    $subtitle = 'Актуальные новости и&nbsp;статьи в&nbsp;сфере культуры и&nbsp;развития.';
  }
  if ($tag == 'science') {
    $title = 'Наука';
    $subtitle = 'Актуальные новости и&nbsp;статьи в&nbsp;сфере научных достижений и&nbsp;открытий.';
  }
  if ($tag == 'sport') {
    $title = 'Спорт';
    $subtitle = 'Актуальные новости и&nbsp;статьи в&nbsp;сфере спортивной жизни регионов.';
  }
  if ($tag == 'apk') {
    $title = 'Новости АПК';
    $subtitle = 'Актуальные новости и&nbsp;статьи в&nbsp;сфере агропромышленного комплекса.';
  }
  if ($tag == 'tourism') {
    $title = 'Туризм';
    $subtitle = 'Актуальные новости и&nbsp;статьи в&nbsp;сфере туризма и&nbsp;путешествий.';
  }
  if ($tag == 'edu') {
    $title = 'Образование';
    $subtitle = 'Актуальные новости и&nbsp;статьи в&nbsp;сфере образования и&nbsp;учёбы.';
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

  <div class="filter">
    <div class="container">
      <div class="filter__content">

        <div class="filter__top">
          <?php
          global $post;

          $query = new WP_Query([
            'post_type' => 'post',
            'posts_per_page' => 4, // Все посты
            'tag' => $tag // Название метки
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
      </section>
    </div>
  </div>

  <?php

  $type = 'tag';
  $typeValue = $tag;

  // Вызов шаблона и передача аргументов
  get_template_part('assets/parts/other-news', null, array(
    'type' => $type,
    'typeValue' => $typeValue
  ));
  ?>

  <?php
  get_template_part('assets/parts/widget-panel'); ?>

  <?php
  get_template_part('assets/parts/info'); ?>

  <!-- Блок только для тэга "Караван Историй" -->
  <?php
  get_template_part('assets/parts/history'); ?>

  </div>
  </div>
</main>
<?php get_footer(); ?>