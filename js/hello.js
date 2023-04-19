'use strict'

function changeHidden() {
  const mainAll = document.querySelectorAll('main');
  mainAll.forEach(main => {
    if (main.hidden == false) {
      main.hidden = true;
    } else {
      main.hidden = false;
    }
  })
}

window.addEventListener('load', event => {
  const hello = document.querySelector('#hello')
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

  const submit = document.createElement('section')
  submit.classList.add('submit')

  const submitBtn = document.createElement('button')
  submitBtn.setAttribute('type','button')
  submitBtn.setAttribute('id','submit-btn')
  submitBtn.textContent = 'Your Info'

  hello.appendChild(submit)
  submit.appendChild(submitBtn)

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

  function createVideo() {
    document.body.insertAdjacentHTML ('beforeend', '<video id="userMedia" autoplay playsinline></video>')
    const userMedia = document.querySelector('#userMedia')
    userMedia.style.width = window.innerWidth
    userMedia.style.height = window.innerHeight

    const media = navigator.mediaDevices.getUserMedia({
      video: true,
      video: { facingMode: 'environment' }, //背面カメラ
      //video: { facingMode: "user" }, //インカメラ
      audio: false,
    });

    media.then((stream) => {
      userMedia.srcObject = stream;
    });
  }

  submitBtn.addEventListener('click', function () {
    createVideo()
    changeHidden()
  })

  const backBtn = document.querySelector('#back-btn')
  backBtn.addEventListener('click', function () {
    document.querySelector('#userMedia').remove()
  })
});
