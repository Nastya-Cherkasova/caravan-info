// Проверяем, существует ли элемент с классом "widget_currencyconverter_table"
if (document.querySelector(".widget_currencyconverter_table")) {
  // Получаем все изображения внутри <tbody> -> <tr> -> <td>
  var images = document.querySelectorAll("tbody tr td img");

  images.forEach(function (img) {
    // Создаем новый элемент <div> с классом flag__wrapper
    var wrapper = document.createElement("div");
    wrapper.className = "flag__wrapper";

    // Обертываем изображение в созданный элемент <div>
    img.parentNode.insertBefore(wrapper, img);
    wrapper.appendChild(img);
  });

  // Находим все элементы с классом .widget_currencyconverter_table
  let converter = document.querySelectorAll(".widget_currencyconverter_table");

  // Вызываем функцию spanAdd для каждого найденного элемента
  converter.forEach((el) => spanAdd(el));

  function spanAdd(el) {
    // Находим таблицу внутри каждого элемента
    let table = el.querySelector("table");

    if (table) {
      // Создаем новый элемент span
      let span = document.createElement("span");
      span.textContent = "*Отнашение национальной валюты к рублю"; // Замените на нужный вам текст или оставьте пустым

      // Находим элемент tbody
      let tbody = table.querySelector("tbody");

      if (tbody && tbody.nextSibling) {
        // Вставляем span после tbody
        tbody.parentNode.insertBefore(span, tbody.nextSibling);
      } else {
        // Вставляем span в конец таблицы, если нет следующего элемента после tbody
        table.appendChild(span);
      }
    }
  }
}
