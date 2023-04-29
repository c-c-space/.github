'use strict'

const yourInfo = JSON.parse(localStorage.getItem('yourInfo'))

function changeHidden() {
  const mainAll = document.querySelectorAll('main')
  mainAll.forEach(main => {
    if (main.hidden == false) {
      main.hidden = true
    } else {
      main.hidden = false
    }
  })
}

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

document.addEventListener('readystatechange', event => {

  if (event.target.readyState === 'loading') {
    // 文書の読み込み中に実行する
  }

  else if (event.target.readyState === 'interactive') {
    if(localStorage.getItem('yourInfo')) {
      const greeting = document.querySelector('#readme h1 b')
      let timeframe = (new Date()).getHours()
      if (timeframe <= 5) { greeting.innerText = "Good Night おやすみ" }	// 0時から5時
      else if (timeframe <= 11) { greeting.innerText = "Good Moning おはよう" }	// 6時から11時
      else if (timeframe <= 17) { greeting.innerText = "Hello こんにちは" }	// 12時から17時
      else if (timeframe <= 22 ) { greeting.innerText = "Good Evening こんばんは" }	// 18時から22時
      else { greeting.innerText = "Good Night おやすみ" }
    }
  }

  else if (event.target.readyState === 'complete') {
    const submit = document.createElement('section')
    submit.classList.add('submit')
    hello.appendChild(submit)

    if(!localStorage.getItem('yourInfo')) {
      const submitBtn = document.createElement('button')
      submitBtn.setAttribute('type','button')
      submitBtn.setAttribute('id','submit-btn')
      submitBtn.textContent = 'Your Info'
      submit.appendChild(submitBtn)
      submitBtn.addEventListener('click', function () {
        createVideo()
        changeHidden()
      })
    }

    else {
      const ip = document.querySelector('#readme h1 code')
      const os = document.querySelector('#readme p')

      ip.innerText = yourInfo.ip
      os.innerText = yourInfo.os
    }
  }
});
