$(function () {
  headerScroll();
  initMenu();
  initShowMore();
  tagColor();
  partnerRepeater();
  flagsInit();
  icoInit();

  // Активировать шапку после скролла
  function headerScroll() {
    let header = document.querySelector(".header");
    let targetBlock = document.querySelector("#main-content-section");

    function headerTint() {
      window.scrollY > 10
        ? header.classList.add("header--scrolled")
        : header.classList.remove("header--scrolled");

      if (window.scrollY > targetBlock.offsetTop) {
        header.classList.add("active");
      } else {
        header.classList.remove("active");
      }
    }
    window.addEventListener("scroll", () => {
      headerTint();
    }),
      headerTint();
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
      currentCards.slice(0, 3).addClass("show");
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
      tags = $(".post__tag");

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
    let category = $(".post__category");

    function countryClass(el, cls) {
      el.addClass(cls);
    }

    category.each(function () {
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

    console.log(category);
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
      tag = $(".post__tag");

    function tagClass(el, cls) {
      el.addClass(cls);
    }

    tag.each(function () {
      switch ($(this)[0].innerHTML) {
        case business:
          tagClass($(this), "category _business");
          break;
        case society:
          tagClass($(this), "category _society");
          break;
        case culture:
          tagClass($(this), "category _culture");
          break;
        case science:
          tagClass($(this), "category _science");
          break;
        case sports:
          tagClass($(this), "category _sport");
          break;
        case agriculturalNews:
          tagClass($(this), "category _apk");
          break;
        case tourism:
          tagClass($(this), "category _tourism");
          break;
        case education:
          tagClass($(this), "category _edu");
          break;
        case outstandingPersonalities:
          tagClass($(this), "category _stars");
          break;
        case caravanOfStories:
          tagClass($(this), "category _history");
          break;
      }
    });

    console.log(tag);
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
