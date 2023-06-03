'use strict'

const dateAll = document.querySelectorAll('#log ul li button')
for (const dateLi of dateAll) {
  dateLi.addEventListener('click', function () {
    const sekkiName = document.querySelector('#log h1 b')
    sekkiName.innerText = this.innerText

    const sekkiDates = document.querySelector('#lastModified')
    sekkiDates.innerText = this.dataset.date

    const sekkiAbout = document.querySelector('#log h2')
    sekkiAbout.innerText = this.dataset.hello
  }, false)
}

const helloLiAll = document.querySelectorAll('#log ul li button')
for (const helloLi of helloLiAll) {
  helloLi.addEventListener('click', function () {
    const uttr = new SpeechSynthesisUtterance()
    uttr.text = this.dataset.hello
    uttr.lang = "ja-JP"
    uttr.voice = speechSynthesis
    .getVoices()

    uttr.pitch = 1
    uttr.rate = 1
    speechSynthesis.speak(uttr)

    const output = document.querySelector('#log h1 b')
    output.innerText = this.dataset.hello

    const lastModified = document.querySelector('#lastModified')
    lastModified.innerText = this.innerText
  }, false)
}
