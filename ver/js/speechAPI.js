'use strict'

/*
Web Speech API に使用する セレクターとボタンを生成
テキストを 音声に変換する
*/

function creatVoises(query, lang) {
  const speechAPI = document.querySelector(query)
  const voiceSelect = document.createElement('select')
  voiceSelect.setAttribute('id', 'voice-select')
  speechAPI.appendChild(voiceSelect)

  function appendVoices() {
    const voices = speechSynthesis.getVoices()
    voiceSelect.innerHTML = '';
    voices.forEach(voice => {
      if (!voice.lang.match(lang)) return;
      const option = document.createElement('option')
      option.value = voice.name;
      option.text = `${voice.name} (${voice.lang})`;
      option.dataset.lang = voice.lang;

      if (localStorage.getItem('uttr')) {
        let uttrJson = JSON.parse(localStorage.getItem('uttr'));
        if (voice.name === uttrJson.voice) {
          option.setAttribute('selected', true)
        }
      }
      voiceSelect.appendChild(option)
    })
  }

  appendVoices()

  speechSynthesis.onvoiceschanged = e => {
    appendVoices()
  }

  voiceSelect.addEventListener('change', () => {
    for (let i = 0; i < voiceSelect.selectedOptions.length; i++) {
      const uttr = {
        voice: voiceSelect.value,
        yourLang: voiceSelect.selectedOptions[i].dataset.lang
      }
      localStorage.setItem('uttr', JSON.stringify(uttr))
    }
  }, false)
}

function playStop(query, speech) {
  const playBtn = document.createElement('input')
  playBtn.setAttribute('type', 'button')
  playBtn.id = 'speak-btn';
  playBtn.value = 'Play';
  document.querySelector(query).appendChild(playBtn)

  const stopBtn = document.createElement('input')
  stopBtn.setAttribute('type', 'button')
  stopBtn.id = 'cancel-btn';
  stopBtn.value = 'Stop';
  document.querySelector(query).appendChild(stopBtn)

  const textToSpeech = document.querySelector(speech)
  playBtn.addEventListener('click', function () {
    const voiceSelect = document.querySelector('#voice-select')
    const uttr = new SpeechSynthesisUtterance(textToSpeech.innerText)
    uttr.voice = speechSynthesis
      .getVoices()
      .filter(voice => voice.name === voiceSelect.value)[0]
    speechSynthesis.speak(uttr)
  })

  stopBtn.addEventListener('click', function () {
    speechSynthesis.cancel()
  })
}

// 発話の停止・一時停止・再開
function speechCancel() {
  speechSynthesis.cancel()
}

function speechPause() {
  speechSynthesis.pause()
}

function speechResume() {
  speechSynthesis.resume()
}