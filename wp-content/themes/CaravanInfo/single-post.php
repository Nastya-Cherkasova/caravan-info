<?php get_header(); ?>
<main class="main">
  <div class="blog">
    <div class="container">
      <div class="blog__inner">
        <h1 class="blog__title"><?php the_title(); ?></h1>
        <?php the_post_thumbnail(); ?>
        <?php the_content(); ?>
      </div>
    </div>
  </div>
</main>

<?php

$tag = get_term_by('name', 'узбекистан', 'post_tag');

if ($tag) {
  $tag_id = $tag->term_id;
  echo "ID метки 'узбекистан' равен: " . $tag_id;
} else {
  echo "Метка 'узбекистан' не найдена";
}

?>
<?php get_footer(); ?>