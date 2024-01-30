'use strict'

const info = document.querySelector('#info')

if (localStorage.getItem('goout')) {
  const yourLocation = JSON.parse(localStorage.getItem('goout'))
  const yourMap = document.createElement("li")
  yourMap.innerHTML += `
  <span>行ったことのない場所へ行く</span>
  <span>
  <button class="color bgcolor" onclick="location.assign('/map/profile/')">Go Out</button>
  </span>
  <span></span>
  <span>You Posted <b>${yourLocation.length}</b> Location</span>
  `
  info.before(yourMap);
}

if (localStorage.getItem('sign')) {
  const yourSign = JSON.parse(localStorage.getItem('sign'))
  const sign = document.createElement("li")
  sign.innerHTML += `
  <span>自分の気持ちを知る・表す</span>
  <span>
  <button class="color bgcolor" onclick="location.assign('/sign/')">Sign</button>
  </span>
  <span></span>
  <span>You Posted <b>${yourSign.length}</b> Colors & Symbols That Suit You</span>
  `
  info.before(sign)
}