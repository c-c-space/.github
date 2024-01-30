'use strict'

window.addEventListener('load', () => {
  if (!localStorage.getItem('yourInfo')) {
    const removeAll = document.querySelectorAll('#logAll li')
    for (const i of removeAll) {
      i.remove()
    }
  }

  const helloLiAll = document.querySelectorAll('#logAll li button')
  for (const helloLi of helloLiAll) {
    helloLi.addEventListener('click', function () {
      const uttr = new SpeechSynthesisUtterance()
      uttr.text = this.dataset.hello;
      uttr.lang = this.lang;
      uttr.voice = speechSynthesis
        .getVoices()
        .filter(voice => voice.name === this.dataset.name)[0];

      uttr.pitch = this.dataset.pitch;
      uttr.rate = this.dataset.rate;
      speechSynthesis.speak(uttr)

      const output = document.querySelector('#log h1 b')
      output.innerText = this.dataset.hello;

      const lastModified = document.querySelector('#lastModified')
      lastModified.innerText = this.innerText;
    }, false);
  }

  const lastModified = document.querySelector('#lastModified')
  lastModified.innerHTML =
    'Last Modified <time datetime="' + document.lastModified + '">' + document.lastModified + '</time>';
})
