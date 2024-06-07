var moscow = document.querySelector("[data-moscow]");
var astana = document.querySelector("[data-astana]");
var tashkent = document.querySelector("[data-tashkent]");
var bishkek = document.querySelector("[data-bishkek]");
var dushanbe = document.querySelector("[data-dushanbe]");
var date = new Date();
var today = date.getDate();
var month = date.getMonth();
console.log(moscow.querySelector("[data-image]").src + `dasd`);
let dayOfWeek = date.getDay();

// Массив с названиями дней недели
let days = ["(вс)", "(пн)", "(вн)", "(ср)", "(чт)", "(пт)", "(сб)"];

// Получаем название дня недели
let dayName = days[dayOfWeek];

function weatherImage(city, id) {
  // Ясно
  if (id == "03n" || id == "03d") {
    city.querySelector("[data-image]");
  }
  // Облачно
  // Небольшая Облачность
  // Дождь
}

// Запрос погоды Москвы
fetch(
  "https://api.openweathermap.org/data/2.5/weather?appid=3e377c4209e223c121ed6278ea35cd79&q=Moscow,ru&units=metric&lang=ru"
)
  .then((response) => response.json())
  .then((data) => {
    let max = Math.trunc(data.main.temp_max);
    let min = Math.trunc(data.main.temp_min);
    let descr = data.weather[0].description;

    moscow.querySelector("[data-day]").innerText = `${
      today < 10 ? "0" + today : today
    }.${month < 10 ? "0" + month : month}`;
    moscow.querySelector("[data-dayName]").innerText = dayName;
    moscow.querySelector("[data-max]").innerText = max;
    moscow.querySelector("[data-min]").innerText = min;
    moscow.querySelector("[data-image]").src = moscow.querySelector("[data-image]").src + `${data.weather[0].icon}.svg`;
    moscow.querySelector("[data-descr]").innerText = descr;
  })
  .catch((error) => {
    console.log("Произошла ошибка при получении данных:", error);
  });

// Запрос погоды Бишкека
fetch(
  "https://api.openweathermap.org/data/2.5/weather?appid=3e377c4209e223c121ed6278ea35cd79&q=Bishkek,kg&units=metric&lang=ru"
)
  .then((response) => response.json())
  .then((data) => {
    let max = Math.trunc(data.main.temp_max);
    let min = Math.trunc(data.main.temp_min);
    let descr = data.weather[0].description;

    bishkek.querySelector("[data-day]").innerText = `${
      today < 10 ? "0" + today : today
    }.${month < 10 ? "0" + month : month}`;
    bishkek.querySelector("[data-dayName]").innerText = dayName;
    bishkek.querySelector("[data-max]").innerText = max;
    bishkek.querySelector("[data-min]").innerText = min;
    bishkek.querySelector("[data-image]").src = bishkek.querySelector("[data-image]").src + `${data.weather[0].icon}.svg`;
    bishkek.querySelector("[data-descr]").innerText = descr;
  })
  .catch((error) => {
    console.log("Произошла ошибка при получении данных:", error);
  });

// Запрос погоды Астана
fetch(
  "https://api.openweathermap.org/data/2.5/weather?appid=3e377c4209e223c121ed6278ea35cd79&q=Nur-Sultan,kz&units=metric&lang=ru"
)
  .then((response) => response.json())
  .then((data) => {
    let max = Math.trunc(data.main.temp_max);
    let min = Math.trunc(data.main.temp_min);
    let descr = data.weather[0].description;

    astana.querySelector("[data-day]").innerText = `${
      today < 10 ? "0" + today : today
    }.${month < 10 ? "0" + month : month}`;
    astana.querySelector("[data-dayName]").innerText = dayName;
    astana.querySelector("[data-max]").innerText = max;
    astana.querySelector("[data-min]").innerText = min;
    astana.querySelector("[data-image]").src = astana.querySelector("[data-image]").src + `${data.weather[0].icon}.svg`;
    astana.querySelector("[data-descr]").innerText = descr;
  })
  .catch((error) => {
    console.log("Произошла ошибка при получении данных:", error);
  });

// Запрос погоды Ташкент
fetch(
  "https://api.openweathermap.org/data/2.5/weather?appid=3e377c4209e223c121ed6278ea35cd79&q=Taskent,uz&units=metric&lang=ru"
)
  .then((response) => response.json())
  .then((data) => {
    let max = Math.trunc(data.main.temp_max);
    let min = Math.trunc(data.main.temp_min);
    let descr = data.weather[0].description;

    tashkent.querySelector("[data-day]").innerText = `${
      today < 10 ? "0" + today : today
    }.${month < 10 ? "0" + month : month}`;
    tashkent.querySelector("[data-dayName]").innerText = dayName;
    tashkent.querySelector("[data-max]").innerText = max;
    tashkent.querySelector("[data-min]").innerText = min;
    tashkent.querySelector("[data-image]").src = tashkent.querySelector("[data-image]").src + `${data.weather[0].icon}.svg`;
    tashkent.querySelector("[data-descr]").innerText = descr;
  })
  .catch((error) => {
    console.log("Произошла ошибка при получении данных:", error);
  });

// Запрос погоды Душанбе
fetch(
  "https://api.openweathermap.org/data/2.5/weather?appid=3e377c4209e223c121ed6278ea35cd79&q=Dushanbe,tj&units=metric&lang=ru"
)
  .then((response) => response.json())
  .then((data) => {
    let max = Math.trunc(data.main.temp_max);
    let min = Math.trunc(data.main.temp_min);
    let descr = data.weather[0].description;

    dushanbe.querySelector("[data-day]").innerText = `${
      today < 10 ? "0" + today : today
    }.${month < 10 ? "0" + month : month}`;
    dushanbe.querySelector("[data-dayName]").innerText = dayName;
    dushanbe.querySelector("[data-max]").innerText = max;
    dushanbe.querySelector("[data-min]").innerText = min;
    dushanbe.querySelector("[data-image]").src = dushanbe.querySelector("[data-image]").src + `${data.weather[0].icon}.svg`;
    dushanbe.querySelector("[data-descr]").innerText = descr;
  })
  .catch((error) => {
    console.log("Произошла ошибка при получении данных:", error);
  });
