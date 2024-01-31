'use strict'

async function koJSON(requestURL) {
  const request = new Request(requestURL)
  const response = await fetch(request)
  const jsonKo = await response.text()

  const koAll = JSON.parse(jsonKo)
  koIndex(koAll)
}

function koIndex(obj) {
  let hello = document.querySelector('#hello')
  let ko = document.createElement('p')
  ko.innerHTML = `
  <small>
  七十二候（しちじゅうにこう）は、二十四節気をさらに約5日ずつの3つの季節に分けたもの<br>
  繊細な季節のうつろい、気象の動きや動植物の変化を短い文で表します。
  </small>
  `;
  hello.appendChild(ko)

  let ul = document.querySelector('#ko')
  const allKo = obj.ko;
  for (const ko of allKo) {
    let li = document.createElement('li')
    let date = document.createElement('p')
    date.innerHTML = `
    <code>${ko.start} - ${ko.end}</code>
    `;

    let buttonP = document.createElement('p')
    let button = document.createElement('button')
    button.setAttribute('data-name', 'Daniel')
    button.setAttribute('data-hello', ko.description)
    button.type = 'button';
    button.innerHTML = `
    ${ko.name} <i>${ko.value}</i>
    `;

    ul.appendChild(li)
    li.appendChild(date)
    li.appendChild(buttonP)
    buttonP.appendChild(button)

    button.addEventListener('click', function () {
      const uttr = new SpeechSynthesisUtterance()
      uttr.text = this.dataset.hello;
      uttr.lang = "en-GB";
      uttr.voice = speechSynthesis
        .getVoices()
        .filter(voice => voice.name === this.dataset.name)[0]

      uttr.pitch = 0.9;
      uttr.rate = 0.9;
      speechSynthesis.speak(uttr)

      const h1B = document.querySelector('#log h1 b')
      h1B.innerText = this.dataset.hello;

      const description = document.querySelector('#lastModified')
      description.innerText = this.innerText;
    }, false)
  }
}

// 発話の停止・一時停止・再開
const cancelBtn = document.querySelector('#cancel-btn')
const pauseBtn = document.querySelector('#pause-btn')
const resumeBtn = document.querySelector('#resume-btn')

cancelBtn.addEventListener('click', function () {
  speechSynthesis.cancel()
})

pauseBtn.addEventListener('click', function () {
  speechSynthesis.pause()
})

resumeBtn.addEventListener('click', function () {
  speechSynthesis.resume()
})
