<section class="partners" id="partners">
  <div class="container">
    <div class="partners__inner">
      <div class="partners__top">
        <h3 class="partner__title">Партнеры</h3>
        <div class="partners__control">
          <div class="partners__arrow partners__arrow-prev"><svg width="18" height="25" viewBox="0 0 18 25" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M16.5088 2.01365L3.01254 12.9158L16.5088 23.4995" stroke="black" stroke-width="3" />
            </svg>
          </div>
          <div class="partners__arrow partners__arrow-next"><svg width="18" height="25" viewBox="0 0 18 25" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M1.49121 2.01365L14.9875 12.9158L1.49121 23.4995" stroke="black" stroke-width="3" />
            </svg>
          </div>
        </div>
      </div>
      <div class="swiper">
        <div class="swiper-wrapper">
          <!-- Начало вывода поста  -->
          <?php
          global $post;

          $query = new WP_Query([
            'tag' => 'partner',
          ]);

          if ($query->have_posts()) {
            while ($query->have_posts()) {
              $query->the_post();
          ?>
              <div class="swiper-slide partner__item">
                <? the_post_thumbnail(); ?>
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
    </div>
  </div>
</section>