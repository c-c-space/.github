'use strict'


document.addEventListener('DOMContentLoaded', () => {
  const info = document.querySelector('#info')

  if (localStorage.getItem('heard')) {
    const youHeard = JSON.parse(localStorage.getItem('heard'))
    const mapHeard = document.createElement("li")
    mapHeard.innerHTML += `
    <span>あなたが聞いた言葉</span>
    <span>
    <button class="color bgcolor" onclick="location.assign('/map/heard/')">things that i (we) heard</button>
    </span>
    <span></span>
    <span>You Posted <b>${youHeard.length}</b> things you heard</span>
    `
    info.before(mapHeard);
  }

  if (localStorage.getItem('goout')) {
    const yourLocation = JSON.parse(localStorage.getItem('goout'))
    const yourMap = document.createElement("li")
    yourMap.innerHTML += `
    <span>あなたがいた場所のコレクション</span>
    <span>
    <button class="color bgcolor" onclick="location.assign('/map/profile/')">Go Out</button>
    </span>
    <span></span>
    <span>You Posted <b>${yourLocation.length}</b> Locations</span>
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
})
