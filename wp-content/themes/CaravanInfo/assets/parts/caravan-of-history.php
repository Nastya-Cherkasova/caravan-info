<?php
global $post;

$query = new WP_Query([
  'tag' => 'history'
]);

if ($query->have_posts()) {
  while ($query->have_posts()) {
    $query->the_post();
?>

<?php
  }
} else {
  // Постов не найдено
}

wp_reset_postdata(); // Сбрасываем $post
?>
<!-- Конец вывода постов -->

<section class="history" id="history">
  <div class="container">
    <!-- Блок только для тэга "Караван Историй" -->
    <?php
    global $post;

    $query = new WP_Query([
      'tag' => 'history'
    ]);

    if ($query->have_posts()) {
      while ($query->have_posts()) {
        $query->the_post();
    ?>
        <div class="history-block">
          <div class="history-block__left">
            <?php the_tags('', ''); ?>

            <h1 class="history-block__title"><?php the_title(); ?></h1>
          </div>
          <div class="history-block__mid">
            <p class="history-block__descr">
              <?php the_excerpt_rss(); ?>
            </p>
            <a href="<?php echo get_the_permalink(); ?>" class="history-block__btn">Подробнее</a>
          </div>
          <div class="history-block__right">
            <?php the_post_thumbnail(); ?>
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
</section>