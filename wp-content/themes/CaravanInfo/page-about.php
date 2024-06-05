<?php
/*
Template Name: Шаблон страницы о нас
Template Post Type: page
*/
?>
<?php get_header(); ?>
<main>
  <?php
  $title = 'О нас';
  $subtitle = 'Информационное агентство &laquo;Караван Инфо&raquo; создано в&nbsp;2024 году в&nbsp;условиях непростой информационной повестки дня на&nbsp;постсоветском пространстве и&nbsp;во&nbsp;всем мире. Это авторитетный источник информации о&nbsp;происходящих событиях в&nbsp;мире&nbsp;и, прежде всего, о&nbsp;России, Казахстане, Узбекистане, Кыргызстане, Таджикистане. Между тем интерес и&nbsp;влияние Агентства распространяется и&nbsp;на&nbsp;страны ЮВА, Африки.';

  // Вызов шаблона и передача аргументов
  get_template_part('assets/parts/page-top', null, array(
    'title' => $title,
    'subtitle' => $subtitle,
  ));
  ?>

  <section class="cards" id="cards">
    <div class="container">
      <div class="cards__inner">

        <div class="card">
          <div class="card__image"><img src="<?php bloginfo('template_url'); ?>/assets/img/page-about/card1.jpg" alt=""></div>
          <div class="card__text">
            <span class="card__title">&laquo;Караван инфо&raquo; активно вошел в&nbsp;сферу информационного обмена, предоставляя ценные и&nbsp;достоверные сведения о&nbsp;событиях, происходящих в&nbsp;регионе Центральной Азии.</span>
            <span class="card__descr">Ключевым активом агентства при этом является актуальность и&nbsp;проверенность подаваемой информации, которая берется из&nbsp;надежных источников. Новости, основанные исключительно на&nbsp;фактах из&nbsp;официальных источников, находит живой интерес у&nbsp;специалистов и&nbsp;обычных людей, стремящихся знать правду, когда информационное пространство насыщенно огромным количеством непроверенных сведений. Преимуществом Агентства является предоставление первичной информации по&nbsp;наиболее актуальным событиям от&nbsp;своих корреспондентов в&nbsp;странах Центральной Азии.</span>
          </div>
        </div>

        <div class="card">
          <div class="card__image"><img src="<?php bloginfo('template_url'); ?>/assets/img/page-about/card2.jpg" alt=""></div>
          <div class="card__text">
            <span class="card__title">«Караван инфо» обеспечивает доступность информации для широкой аудитории </span>
            <span class="card__descr">
              <p>Играет важную роль в&nbsp;формировании восприятия о&nbsp;происходящих событиях, при этом обеспечивая прозрачность и&nbsp;открытость в&nbsp;информационном пространстве Центральной Азии. Деятельность агентства способствует укреплению свободы слова и&nbsp;информационной безопасности.</p>
              <p>Главной задачей нашего информагентства является стремление быть надежным источником информации, которая должна помочь читателям разобраться в&nbsp;современных реалиях сложного мира, быть в&nbsp;курсе последних событий как у&nbsp;себя в&nbsp;регионе, так и&nbsp;за&nbsp;рубежом.</p>
            </span>
          </div>
        </div>

        <div class="card">
          <div class="card__image"><img src="<?php bloginfo('template_url'); ?>/assets/img/page-about/card3.jpg" alt=""></div>
          <div class="card__text">
            <span class="card__title">Наша цель</span>
            <span class="card__descr">
              <p>Предоставлять актуальную информацию о&nbsp;ключевых событиях, которые происходят в&nbsp;России и&nbsp;Центральной Азии. Помимо этого, мы&nbsp;анализируем новости и&nbsp;даем качественные и&nbsp;объективные комментарии нашим читателям.</p>
              <p>Команда Агентства состоит из&nbsp;профессионалов, специализирующихся на&nbsp;создании качественного информационного продукта и&nbsp;освещении событий в&nbsp;области экономики, бизнеса, политики и&nbsp;культуры.</p>
              <p>Мы&nbsp;работаем для того, чтобы наше Информагентство стало вашим надежным источником информации в&nbsp;мире новостей из&nbsp;России и&nbsp;Центральной Азии.</p>
            </span>
          </div>
        </div>

        <div class="card">
          <div class="card__image"><img src="<?php bloginfo('template_url'); ?>/assets/img/page-about/card1.jpg" alt=""></div>
          <div class="card__text">
            <span class="card__title">Агентство является источником знаний</span>
            <span class="card__descr">и&nbsp;караваном в&nbsp;пустыне информации, стремится к&nbsp;беспристрастности и&nbsp;является мостом между миром событий и&nbsp;людьми, приносит знания тем, кто в&nbsp;этом нуждается.</span>
          </div>
        </div>

      </div>
    </div>
  </section>

  <?php
  get_template_part('assets/parts/partners'); ?>

  <?php
  get_template_part('assets/parts/widget-panel'); ?>
</main>
<?php get_footer(); ?>