$(function () {
  scrollTargetInit();
  flagsInit();
  initMenu();
  headerScroll();
  initShowMore();
  // tagColor();
  flagsInit();
  infoStyling();
  partnerRepeater();
  icoInit();

  // класс для body - адаптивка

  // проверка на наличие админки
  function adminCheck() {
    let admin = $("#wpadminbar"),
      header = $(".header--scrolled");

    if ($(window).width() > 600) {
      admin.length
        ? header.css("top", `${admin.height()}px`)
        : header.css("top", "0px");
    } else {
      return false;
    }
  }

  $(window).on("scroll", adminCheck);

  // Создание скролл таргета для активации шапки
  function scrollTargetInit() {
    let main = $(".main");
    let target = main.children().eq(1);

    target.addClass("scroll-target");
  }

  // Активировать шапку после скролла
  function headerScroll() {
    let header = $(".header");

    function headerTint() {
      $(window).scrollTop() > 1
        ? header.addClass("header--scrolled")
        : header.removeClass("header--scrolled");
    }

    $(window).on("scroll", function () {
      headerTint();
    });

    headerTint(); // Вызываем сразу после определения для инициализации
  }

  // Дополнительное меню при нажатии на 3 полоски (бургер) в шапке
  function initMenu() {
    $(".header__burger").on("click", function () {
      $(".header__burger").toggleClass("active");
      $(".header").toggleClass("active");
    });
  }

  // Кнопка "Показать еще" в блоке с новостями
  function initShowMore() {
    let pos;
    let currentCards = $(".other-news__inner > .post");
    {
      if ($(window).width() > 1660) {
        currentCards.slice(0, 3).addClass("show");
      } else {
        currentCards.slice(0, 4).addClass("show");
      }
    }
    window.scrollTo(0, pos);
    if ($(".other-news__inner > .post:hidden").length == 0) {
      $(".other-news__show-more").hide();
    }

    $(".other-news__show-more").on("click", function (e) {
      e.preventDefault();
      pos = window.scrollY;
      $(".other-news__inner > .post:hidden").slice(0, 6).addClass("show");

      window.scrollTo(0, pos);
      if ($(".other-news__inner > .post:hidden").length == 0) {
        $(".other-news__show-more").hide();
      }
    });
  }

  // Классы для стран
  function flagsInit() {
    let countries = document.querySelectorAll(".post__country");

    countries.forEach(
      function (el) {
        el.classList.add("country");
        if (el.href.includes("rus")) {
          el.classList.add("_ru");
        }
        if (el.href.includes("kz")) {
          el.classList.add("_kz");
        }
        if (el.href.includes("uzb")) {
          el.classList.add("_uz");
        }
        if (el.href.includes("kgz")) {
          el.classList.add("_kg");
        }
        if (el.href.includes("taj")) {
          el.classList.add("_taj");
        }
      }.bind(this)
    );
  }

  function icoInit() {
    let tag = document.querySelectorAll(".post__theme");

    tag.forEach(function (el) {
      el.classList.add("theme");
      if (el.href.includes("business")) {
        el.classList.add("_business", "red");
      }
      if (el.href.includes("tourism")) {
        el.classList.add("_tourism", "cyan");
      }
      if (el.href.includes("culture")) {
        el.classList.add("_culture", "pink");
      }
      if (el.href.includes("sport")) {
        el.classList.add("_sport", "green");
      }
      if (el.href.includes("society")) {
        el.classList.add("_society", "yellow");
      }
      if (el.href.includes("apk")) {
        el.classList.add("_apk", "brown");
      }
      if (el.href.includes("edu")) {
        el.classList.add("_edu", "sky");
      }
      if (el.href.includes("history")) {
        el.classList.add("_history", "purple");
      }
      if (el.href.includes("stars")) {
        el.classList.add("_stars", "gray");
      }
      if (el.href.includes("science")) {
        el.classList.add("_science", "blue");
      }
    });
  }

  // Стили для блока инфо
  function infoStyling() {
    $(".info-mob__inner").css(
      "padding-top",
      `${$(".info-mob__title").height() + 30}px`
    );
  }

  // Функция по повторению партнеров если их мало
  function partnerRepeater() {
    // Клонируем оригинальный элемент
    var container = $(".swiper-wrapper");
    var partners = $(".partner__item");

    if (partners.length < 5) {
      partners.each(function () {
        container.append($(this).clone());
      });
      partners.each(function () {
        container.append($(this).clone());
      });
    }
  }
});

function langChanger() {
  let langMenu = document.querySelector(".header__langs"),
    langBtn = document.querySelector(".header__lang");
  langMenu.classList.toggle("active");
  langBtn.classList.toggle("active");
}

document.addEventListener("DOMContentLoaded", function () {});
