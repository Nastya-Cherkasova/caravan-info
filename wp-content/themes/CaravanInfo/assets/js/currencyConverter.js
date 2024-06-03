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
}
