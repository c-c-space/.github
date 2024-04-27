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

document.addEventListener('readystatechange', event => {
  if (event.target.readyState === 'loading') {
    //
  } else if (event.target.readyState === 'interactive') {
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
      <span>You Posted <b>${youHeard.length}</b> things that you heard</span>
      `;
      info.before(mapHeard)
    }

    if (localStorage.getItem('emoji')) {
      const yourEmoji = JSON.parse(localStorage.getItem('emoji'))
      const emotions = document.createElement("li")
      emotions.innerHTML += `
      <span>月の満ち欠けと感情（その強さ）</span>
      <span>
      <button class="color bgcolor" onclick="location.assign('/org/')">● ◐ ◑ ○</button>
      </span>
      <span></span>
      <span>You Posted <b>${yourEmoji.length}</b> Emoji that Your Emotions</span>
      `;
      info.before(emotions)
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

    if (localStorage.getItem('uttr')) {
      const yourUTTR = JSON.parse(localStorage.getItem('uttr'))
      const lang = document.querySelector('#lang b')
      lang.textContent = yourUTTR.yourLang;
      const voice = document.querySelector('#voice')
      voice.textContent = yourUTTR.voice;
    }
  }
}, false)
