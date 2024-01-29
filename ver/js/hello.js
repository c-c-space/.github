'use strict'

/*
#hello の子要素に、 Web Speech API に使用する セレクターとボタンを生成
#hello #speech 内のテキストを 音声に変換する
*/

window.addEventListener('load', function () {
  const hello = document.querySelector('#hello')
  const speechAPI = document.createElement('nav')
  const voiceSelect = document.createElement('select')
  voiceSelect.setAttribute('id', 'voice-select')

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
    })
  }

  appendVoices()
  speechSynthesis.onvoiceschanged = e => {
    appendVoices()
  }

  const playBtn = document.createElement('input')
  const stopBtn = document.createElement('input')

  playBtn.setAttribute('type', 'button')
  playBtn.id = 'speak-btn';
  playBtn.value = 'Play';

  stopBtn.setAttribute('type', 'button')
  stopBtn.id = 'cancel-btn';
  stopBtn.value = 'Stop';

  hello.prepend(speechAPI)
  speechAPI.appendChild(voiceSelect)
  speechAPI.appendChild(playBtn)
  speechAPI.appendChild(stopBtn)

  const textToSpeech = document.querySelector('#hello #speech')
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
})
