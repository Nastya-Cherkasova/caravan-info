$(function () {
  scrollTargetInit();
  initMenu();
  headerScroll();
  initShowMore();
  tagColor();
  infoStyling();
  partnerRepeater();
  flagsInit();
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

  // Цвет всем тегам в соотвествии с текстом тега
  function tagColor() {
    let business = "Бизнес",
      tourism = "Туризм",
      culture = "Культура",
      science = "Наука",
      sports = "Спорт",
      society = "Общество",
      agriculturalNews = "Новости АПК",
      education = "Образование",
      caravanOfStories = "Караван историй",
      outstandingPersonalities = "Выдающиеся личности",
      tags = $(".post__theme");

    function bgChange(el, cls) {
      el.addClass(cls);
    }

    tags.each(function () {
      switch ($(this)[0].innerHTML) {
        case business:
          bgChange($(this), "red");
          break;
        case society:
          bgChange($(this), "yellow");
          break;
        case culture:
          bgChange($(this), "pink");
          break;
        case science:
          bgChange($(this), "blue");
          break;
        case sports:
          bgChange($(this), "green");
          break;
        case agriculturalNews:
          bgChange($(this), "brown");
          break;
        case tourism:
          bgChange($(this), "cyan");
          break;
        case education:
          bgChange($(this), "sky");
          break;
        case outstandingPersonalities:
          bgChange($(this), "gray");
          break;
        case caravanOfStories:
          bgChange($(this), "purple");
          break;
      }
    });
  }

  // Добавляет флаги тегам
  function flagsInit() {
    let theme = $(".post__country");

    function countryClass(el, cls) {
      el.addClass(cls);
    }

    theme.each(function () {
      $(this).addClass("country");
      switch ($(this)[0].innerHTML) {
        case "Таджикистан":
          countryClass($(this), "_taj");
          break;
        case "Кыргызстан":
          countryClass($(this), "_kg");
          break;
        case "Узбекистан":
          countryClass($(this), "_uz");
          break;
        case "Россия":
          countryClass($(this), "_ru");
          break;
        case "Казахстан":
          countryClass($(this), "_kz");
          break;
      }
    });
  }

  // Добавляет иконки тегам
  function icoInit() {
    let business = "Бизнес",
      tourism = "Туризм",
      culture = "Культура",
      science = "Наука",
      sports = "Спорт",
      society = "Общество",
      agriculturalNews = "Новости АПК",
      education = "Образование",
      caravanOfStories = "Караван историй",
      outstandingPersonalities = "Выдающиеся личности",
      tag = $(".post__theme");

    function tagClass(el, cls) {
      el.addClass(cls);
    }

    tag.each(function () {
      switch ($(this)[0].innerHTML) {
        case business:
          tagClass($(this), "theme _business");
          break;
        case society:
          tagClass($(this), "theme _society");
          break;
        case culture:
          tagClass($(this), "theme _culture");
          break;
        case science:
          tagClass($(this), "theme _science");
          break;
        case sports:
          tagClass($(this), "theme _sport");
          break;
        case agriculturalNews:
          tagClass($(this), "theme _apk");
          break;
        case tourism:
          tagClass($(this), "theme _tourism");
          break;
        case education:
          tagClass($(this), "theme _edu");
          break;
        case outstandingPersonalities:
          tagClass($(this), "theme _stars");
          break;
        case caravanOfStories:
          tagClass($(this), "theme _history");
          break;
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
