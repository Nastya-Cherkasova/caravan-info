<section class="sidebar">
  <?php dynamic_sidebar( 'sidebar-main' ); ?>
  <div class="stars">
    <!-- Блок только для тэга "Караван Историй" -->
    <?php
    global $post;

    $query = new WP_Query([
      'posts_per_page' => 1,
      'tag' => 'stars',
    ]);

    if ($query->have_posts()) {
      while ($query->have_posts()) {
        $query->the_post();
    ?>
        <div class="post" data-stars>
          <div class="post__image">
            <?php the_post_thumbnail(); ?>
          </div>
          <span class="post__date"> <?php echo get_the_date('d.m.Y'); ?></span>
          <a href="<?php echo get_the_permalink(); ?>" class="post__title"><?php the_title() ?></a>
          <div class="post-content">
            <?php the_content(); ?>
          </div>
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
</section>