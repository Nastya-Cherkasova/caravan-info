<?php
extract($args);
?>

<section class="page-top">
  <div class="container">
    <div class="page-top__inner">
      <span class="page-top__text">
        <h1 class="page-top__title"><?php echo $title; ?></h1>
        <h2 class="page-top__subtitle"><?php echo $subtitle; ?></h2>
      </span>
      <div class="page-top__logo">
        <img src="<?php bloginfo('template_url'); ?>/assets/img/common/big-logo.png" alt="">
      </div>
    </div>
  </div>
  <span class="angles"></span>
  <span class="rama">
    <span class="rama2"></span>
  </span>
</section>