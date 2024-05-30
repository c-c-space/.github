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

        const findMe = document.querySelector('#findMe');
        findMe.innerHTML = `
        <u>
        緯度 Latitude <b>${latitude}</b> |
        経度 Longitude <b>${longitude}</b>
        </u>
        `;
        const googleMap = `http://maps.google.com/maps?q=${latitude},${longitude}`;
        findMe.addEventListener('click', () => {
            window.open(googleMap, '_blank')
        })
    }
}