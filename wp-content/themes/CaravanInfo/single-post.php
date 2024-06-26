<?php get_header(); ?>
<main class="main">
  <div class="blog">
    <div class="blog__banner">
      <?php the_post_thumbnail(); ?>
      <h1>
        <?php the_title(); ?>
      </h1>
    </div>
    <div class="container">
      <div class="blog__inner">
        <div class="blog__content">
          <span class="blog__date"> <?php echo get_the_date('d.m.Y'); ?></span>
          <h1 class="blog__title"> <?php the_title() ?></h1>
          <span class="blog__text"> <?php the_content() ?></span>
          <button class="blog__button" onclick="history.back()">Вернуться назад</button>
          <div class="blog__tags">
            <?php
            the_category();
            the_tags('', '');
            ?>
          </div>
        </div>
      </div>
    </div>
  </div>

  <?php
  get_template_part('assets/parts/widget-panel'); ?>

  <?php
  get_template_part('assets/parts/info'); ?>

</main>

<?php get_footer(); ?>