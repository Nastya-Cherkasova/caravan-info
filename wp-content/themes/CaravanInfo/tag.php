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

  <div class="filter">
    <div class="container">
      <div class="filter__content">

        <div class="filter__top">
          <!-- Вывод постов без 4 первых -->
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
        <button class="other-news__show-more">Показать еще</button>
      </div>
      </section>


      <?php
      get_template_part('assets/parts/info'); ?>


      <!-- Блок только для тэга "Караван Историй" -->
    </div>
    <div class="filter__bot">
      <?php
      // Запрос WP_Query для получения постов с определенной меткой
      $args = array(
        'post_type' => 'post',
        'tag' => $tag, // Название метки
        'offset' => 4,
      );
      $query = new WP_Query($args);
      // Цикл для вывода постов
      if ($query->have_posts()) :
        while ($query->have_posts()) : $query->the_post();
      ?>
          <div class="post">
            <div class="post__image">
              <?php the_post_thumbnail(); ?>
            </div>
            <span class="post__date"> <?php echo get_the_date('d.m.Y'); ?></span>
            <a href="<?php echo get_the_permalink(); ?>" class="post__title"><?php the_title() ?></a>
            <a href="<?php echo get_the_permalink(); ?>" class="post__btn">Подробнее</a>
            <div class="post__tags"><?php the_tags('', ''); ?></div>
          </div>
      <?php
        endwhile;
        wp_reset_postdata();
      else :
        // Если нет постов с этой меткой
        echo '<p>Посты с этой меткой не найдены.</p>';
      endif;
      ?>
    </div>
  </div>
  </div>
  </div>
</main>
<?php get_footer(); ?>