const swiper = new Swiper(".swiper", {
  // Optional parameters
  loop: true,
  slidesPerView: "auto",
  spaceBetween: 35,

  // Navigation arrows
  navigation: {
    nextEl: ".partners__arrow-next",
    prevEl: ".partners__arrow-prev",
  },
  breakpoints: {
    // when window width is >= 320px
    320: {
      spaceBetween: 25,
    },
    1440: {
      spaceBetween: 35,
    },
  },
});
