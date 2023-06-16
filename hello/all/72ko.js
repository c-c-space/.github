'use strict'

async function koJSON(requestURL) {
  const request = new Request(requestURL)
  const response = await fetch(request)
  const jsonKo = await response.text()

  const koAll = JSON.parse(jsonKo)
  koIndex(koAll)
}

function koIndex(obj) {
  let ul = document.querySelector('#ko')
  const allKo = obj.ko;
  for (const ko of allKo) {
    let li = document.createElement('li')
    let date = document.createElement('p')
    date.innerHTML = `
    <code>${ko.start} - ${ko.end}</code>
    `
    let buttonP = document.createElement('p')
    let button = document.createElement('button')
    button.type = 'button'
    button.setAttribute('data-name', 'Daniel')
    button.setAttribute('data-hello', ko.description)
    button.innerHTML = `
    ${ko.name} <i>${ko.value}</i>
    `
    ul.appendChild(li)
    li.appendChild(date)
    li.appendChild(buttonP)
    buttonP.appendChild(button)

    button.addEventListener('click', function () {
      const uttr = new SpeechSynthesisUtterance()
      uttr.text = this.dataset.hello
      uttr.lang = "en-GB"
      uttr.voice = speechSynthesis
      .getVoices()
      .filter(voice => voice.name === this.dataset.name)[0]

      uttr.pitch = 0.9
      uttr.rate = 0.9
      speechSynthesis.speak(uttr)

      const h1B = document.querySelector('#log h1 b')
      h1B.innerText = this.dataset.hello

      const description = document.querySelector('#lastModified')
      description.innerText = this.innerText
    }, false)
  }
}
