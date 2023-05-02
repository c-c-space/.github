const info = document.querySelector('#info')

if(localStorage.getItem('geolocation')) {
  const yourGEO = JSON.parse(localStorage.getItem('geolocation'))
  const geolocation = document.createElement("li")
  geolocation.innerHTML += `
  <span>行ったことのない場所へ行く</span>
  <span>
  <button class="color bgcolor" onclick="location.assign('/map/')">Go Out</button>
  </span>
  <span></span>
  <span>Latitude: <b>${yourGEO.latitude}°</b> Longitude: <b>${yourGEO.longitude}°</b></span>
  `
  info.before(geolocation)
}

if(localStorage.getItem('sign')) {
  const yourSign = JSON.parse(localStorage.getItem('sign'))
  const sign = document.createElement("li")
  sign.innerHTML += `
  <span>自分の気持ちを知る・表す</span>
  <span>
  <button class="color bgcolor" onclick="location.assign('/sign/')">Sign</button>
  </span>
  <span></span>
  <span>You Posted <b>${yourSign.length}</b> Colors & Symbols That Suits on You</span>
  `
  info.before(sign)
}

const newColorAll = document.querySelectorAll('#log li span')
for (const newColor of newColorAll) {
  newColor.classList.add("color")
}
