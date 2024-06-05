/*
$(function () {
  if ($(".calendar").length) {
    $(".calendar caption").each(function () {
      $(this).text($(this).text().replace(/\d/g, ""));
    });

    // Оборачивание сегодняшнего дня в спан
    $(".calendar tbody td#today").each(function () {
      var cellContent = $(this).html();
      $(this).html("<span>" + cellContent + "</span>");
    });

    // стрелки переключения месяца
    calendarNav();

    function calendarNav() {
      let prevArrow =
        '<svg width="15" height="24" viewBox="0 0 15 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M13.5547 2L1.99913 12.6296L13.5547 22.2222" stroke="black" stroke-width="2.16667" stroke-linecap="round"/></svg>';

      let nextArrow =
        '<svg width="16" height="24" viewBox="0 0 16 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M2 2L13.5556 12.6296L2 22.2222" stroke="black" stroke-width="2.16667" stroke-linecap="round"/></svg>';
      $(".wp-calendar-nav-prev a").html(prevArrow);
      $(".wp-calendar-nav-next a").html(nextArrow);

      $(".wp-calendar-nav").css(
        "max-width",
        `${$(".calendar caption").eq(1).width() + 60}px`
      );
    }

    for (let i = 0; i < $(".calendar tbody").length; i++) {
      tableFixer($($(".calendar tbody").get(i)));
      console.log(i);
    }

    // Деление ячеек таблицы
    function tableFixer(calendar) {
      // Удаление объединения ячеек
      let cells = calendar.find("td[colspan]");
      cells.removeAttr("colspan");

      // Проверка и добавление ячеек в первой строке
      let firstRow = calendar.find("tr:first");

      while (firstRow.children().length < 7) {
        if (firstRow.children().length === 0) {
          firstRow.append("<td></td>");
        } else {
          firstRow.prepend("<td></td>");
        }
      }

      // Проверка и добавление ячеек в последней строке
      let lastRow = calendar.find("tr:last");
      while (lastRow.children().length < 7) {
        lastRow.append("<td></td>");
      }
    }
  }
});
*/

var clndCap = document.querySelectorAll(".calendar caption");
var clnd = document.querySelectorAll(".calendar tbody");
var clndNavPrev = document.querySelectorAll(".wp-calendar-nav-prev a");
var clndNavNext = document.querySelectorAll(".wp-calendar-nav-next a");

var prevArrow =
  '<svg width="15" height="24" viewBox="0 0 15 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M13.5547 2L1.99913 12.6296L13.5547 22.2222" stroke="black" stroke-width="2.16667" stroke-linecap="round"/></svg>';
var nextArrow =
  '<svg width="16" height="24" viewBox="0 0 16 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M2 2L13.5556 12.6296L2 22.2222" stroke="black" stroke-width="2.16667" stroke-linecap="round"/></svg>';

prevChanger(clndNavPrev);
nextChanger(clndNavNext);

function prevChanger(nav) {
  nav.forEach((el) => {
    el.innerHTML = prevArrow;
  });
}

function nextChanger(nav) {
  nav.forEach((el) => {
    el.innerHTML = nextArrow;
  });
}

clndCap.forEach(function (caption) {
  caption.textContent = caption.textContent.replace(/\d/g, "").trim();
});

clnd.forEach((el) => {
  tableFixer(el);
});

navPoser(clndCap);

function navPoser(calendarCap) {
  let ew = [];
  calendarCap.forEach((el) => {
    ew.push(el.offsetWidth);
    document.querySelectorAll(".wp-calendar-nav").forEach((el) => {
      el.style.cssText = `max-width: ${Math.max(...ew) + 60}px`;
    });
  });
}

function tableFixer(calendar) {
  // Удаление объединения ячеек
  let cells = calendar.querySelectorAll("td[colspan]");
  cells.forEach(function (cell) {
    cell.removeAttribute("colspan");
  });

  // Проверка и добавление ячеек в первой строке
  let firstRow = calendar.querySelector("tr:first-child");

  while (firstRow.children.length < 7) {
    if (firstRow.children.length === 0) {
      let newCell = document.createElement("td");
      firstRow.appendChild(newCell);
    } else {
      let newCell = document.createElement("td");
      firstRow.insertBefore(newCell, firstRow.firstChild);
    }
  }

  // Проверка и добавление ячеек в последней строке
  let lastRow = calendar.querySelector("tr:last-child");
  while (lastRow.children.length < 7) {
    let newCell = document.createElement("td");
    lastRow.appendChild(newCell);
  }
}

var todayCells = document.querySelectorAll(".calendar tbody td#today");

todayCells.forEach(function (cell) {
  var cellContent = cell.innerHTML;
  cell.innerHTML = "<span>" + cellContent + "</span>";
});
