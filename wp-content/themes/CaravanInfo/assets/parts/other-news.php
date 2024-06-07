<?php
extract($args);
?>

<section class="other-news">
  <div class="container">
    <div class="other-news__inner ">
      <!-- Вывод постов без 3 первых -->
      <?php
      global $post;

      $query = new WP_Query([
        'tag__not_in' => array(35, 36, 44),
        'offset' => 4,
        $type => $typeValue
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
              if (is_tag()) {
                the_category();
              }
              if (is_category()) {
                the_tags('', '');
              }
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