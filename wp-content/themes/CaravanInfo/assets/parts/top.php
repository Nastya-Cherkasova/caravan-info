<?php
extract($args);
?>

<section class="top">
  <div class="container">
    <div class="top__inner">
      <span class="top__text">
        <h1 class="top__title"><?php echo $title; ?></h1>
        <h2 class="top__subtitle"><?php echo $subtitle; ?></h2>
      </span>
      <?php wp_nav_menu([
        'theme_location'  => 'top',
        'menu'            => '',
        'container'       => 'div',
        'container_class' => '',
        'menu_class'      => 'top__country',
      ]) ?>
    </div>
  
  </div>
</section>