'use strict'

// 現在位置の地理座標・位置情報を取得
function geoFindMe() {
    const findMe = document.querySelector('#findMe');
    if (!navigator.geolocation) {
        findMe.textContent = 'Geolocation API is not supported by your browser';
    } else {
        findMe.textContent = 'Locating…';
        navigator.geolocation.getCurrentPosition(success, error);
    }

    // 現在地の取得に失敗した場合
    function error() {
        findMe.textContent = 'Unable to retrieve your location';
    }

    // 現在地の取得に成功した場合
    function success(position) {
        // 緯度経度を変数に代入
        const latitude = position.coords.latitude;
        const longitude = position.coords.longitude;

        weatherAPI(latitude, longitude)
    }
}

function weatherAPI(lat, lon) {
    // Weather API ID
    const api = "557b466129cf7d7427b03e5b7886a4bb";
    const base =
        `http://api.openweathermap.org/data/2.5/weather` +
        `?lat=${lat}&lon=${lon}&appid=${api}`;

    const findMe = document.querySelector('#findMe');
    findMe.textContent = "";
    const kelvin = 273.15;
    let temperature = document.createElement("i");
    let weather = document.createElement("b");
    let city = document.createElement("u");
    findMe.appendChild(temperature)
    findMe.appendChild(weather)
    findMe.appendChild(city)

    // Calling the Weather API
    fetch(base)
        .then((response) => {
            return response.json();
        })
        .then((data) => {
            console.log(data);
            temperature.textContent = Math.floor(data.main.temp - kelvin) + "°C";
            weather.textContent = data.weather[0].description;
            city.textContent = data.name + ", " + data.sys.country;
        });
}