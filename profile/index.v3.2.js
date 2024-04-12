'use strict'

if (!localStorage.getItem('yourInfo')) {
  location.replace('/')
}

function clearAll() {
  localStorage.clear()
  setTimeout(() => {
    location.reload()
  }, 1000)
}

document.addEventListener('DOMContentLoaded', () => {
  const info = document.querySelector('#info')

  if (localStorage.getItem('heard')) {
    const youHeard = JSON.parse(localStorage.getItem('heard'))
    const mapHeard = document.createElement("li")
    mapHeard.innerHTML += `
    <span>あなたが聞いたこと</span>
    <span>
    <button class="color bgcolor" onclick="location.assign('/map/')">things that i (we) heard</button>
    </span>
    <span></span>
    <span>You Posted <b>${youHeard.length}</b> things you heard</span>
    `;
    info.before(mapHeard)
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
    `;
    info.before(sign)
  }
})
