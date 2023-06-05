'use strict'

const hello = document.querySelector('#hello')

window.addEventListener('load', event => {
  const speechAPI = document.createElement('section')
  const voiceSelect = document.createElement('select')
  voiceSelect.setAttribute('id','voice-select')

  function appendVoices() {
    const voices = speechSynthesis.getVoices()
    voiceSelect.innerHTML = ''
    voices.forEach(voice => {
      if (!voice.lang.match('ja|en')) return
      const option = document.createElement('option')
      option.value = voice.name
      option.text = `${voice.name} (${voice.lang})`
      option.setAttribute('selected', voice.default)
      voiceSelect.appendChild(option)
    });
  }

  appendVoices()
  speechSynthesis.onvoiceschanged = e => {
    appendVoices()
  }

  const playBtn = document.createElement('input')
  playBtn.setAttribute('type','button')
  playBtn.setAttribute('id','speak-btn')
  playBtn.setAttribute('value','Play')

  const stopBtn = document.createElement('input')
  stopBtn.setAttribute('type','button')
  stopBtn.setAttribute('id','cancel-btn')
  stopBtn.setAttribute('value','Stop')

  hello.prepend(speechAPI)
  speechAPI.appendChild(voiceSelect)
  speechAPI.appendChild(playBtn)
  speechAPI.appendChild(stopBtn)

  const textToSpeech = document.querySelector('#readme')
  playBtn.addEventListener('click', function () {
    const uttr = new SpeechSynthesisUtterance(textToSpeech.innerText)
    uttr.voice = speechSynthesis
    .getVoices()
    .filter(voice => voice.name === voiceSelect.value)[0]
    speechSynthesis.speak(uttr)
  })

  stopBtn.addEventListener('click', function () {
    speechSynthesis.cancel()
  })
});
