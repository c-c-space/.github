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
      welcome.innerHTML = 'Welcome ようこそ'
      const yourStrage = document.querySelector('#readme p')
      yourStrage.style.pointerEvents = 'auto'
      yourStrage.style.userSelect = 'text'
      yourStrage.innerHTML = "<u>Your Date</u>"

      if(!localStorage.getItem('sign')) {
        yourStrage.innerHTML += `<br/><a href="/sign/">Not Signed Yet</a>`
      } else {
        const yourSign = JSON.parse(localStorage.getItem('sign'))
        yourStrage.innerHTML += `<br/><a href="/sign/">${yourSign.length}</a> Colors & Symbols`
      }

      const os = document.createElement('p')
      const yourInfo = JSON.parse(localStorage.getItem('yourInfo'))
      os.innerHTML += 'by <b>' + yourInfo.os + '</b><br/>'
      submit.appendChild(os)


      if(!localStorage.getItem('geolocation')) {
        os.innerHTML += 'Enterd from <b>' + yourInfo.ip + '</b><br/>'
      } else {
        const geolocation = JSON.parse(localStorage.getItem('geolocation'))
        os.innerHTML += `Located on Latitude: <b>${geolocation.latitude}°</b>, Longitude: <b>${geolocation.longitude}°</b><br/>`
      }


      const resetBtn = document.createElement('button')
      resetBtn.setAttribute('type','button')
      resetBtn.textContent = 'Clear All'
      submit.appendChild(resetBtn)
      resetBtn.addEventListener('click', function () {
        localStorage.clear()
      })
    }
  }
});
