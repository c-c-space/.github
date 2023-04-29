'use strict'

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
      const welcome = document.querySelector('#readme h1')
      welcome.innerHTML = "Welcome ようこそ"
      const yourStrage = document.querySelector('#readme p')
      yourStrage.style.pointerEvents = "auto"
      yourStrage.style.userSelect = "text"

      if(!localStorage.getItem('sign')) {
        async function readme() {
          fetch('readme.md')
          .then(response => response.text())
          .then(readme => {
            yourStrage.innerHTML = readme;
          });
        }
        readme();
      } else {
        let yourSign = JSON.parse(localStorage.getItem('sign'))
        yourStrage.innerHTML = `You Posted<br/>
        <a href="/sign/">${yourSign.length}</a> Colors & Symbols
        `
      }

      const yourInfo = JSON.parse(localStorage.getItem('yourInfo'))

      const os = document.createElement('p')
      os.innerText = "by " + yourInfo.os
      submit.appendChild(os)
    }

    const resetBtn = document.createElement('button')
    resetBtn.setAttribute('type','button')
    resetBtn.textContent = 'Clear All'
    submit.appendChild(resetBtn)
    resetBtn.addEventListener('click', function () {
      localStorage.clear()
    })
  }
});
