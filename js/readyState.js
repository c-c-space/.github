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

async function fetchHTML(url = '', query = '') {
  fetch(url)
  .then(response => response.text())
  .then(html => {
    document.querySelector(query).innerHTML = html
  });
}

function createVideo() {
  document.body.insertAdjacentHTML ('beforeend', '<video id="userMedia" autoplay playsinline></video>')
  const userMedia = document.querySelector('#userMedia')
  userMedia.style.width = window.innerWidth
  userMedia.style.height = window.innerHeight

  let media = navigator.mediaDevices.getUserMedia({
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
  if (event.target.readyState === 'interactive') {
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

      const backBtn = document.querySelector('#back-btn')
      backBtn.addEventListener('click', function () {
        const stream = userMedia.srcObject;
        const tracks = stream.getTracks();

        tracks.forEach(function(track) {
          track.stop();
        });

        userMedia.remove()
      })
    } else {
      fetchHTML('welcome.php','#readme h1')

      const yourStrage = document.querySelector('#readme p')
      yourStrage.style.pointerEvents = 'auto'
      yourStrage.style.userSelect = 'text'
      yourStrage.style.display = 'inline-block'
      yourStrage.innerHTML = '<u>You Posted</u><br/>'

      if(!localStorage.getItem('sign')) {
        yourStrage.innerHTML += '<a href="/sign/">0</a>'
      } else {
        const yourSign = JSON.parse(localStorage.getItem('sign'))
        yourStrage.innerHTML += `<a href="/sign/">${yourSign.length}</a>`
      }
      yourStrage.innerHTML += ' Colors & Symbols that Suit You<br/>'

      const yourInfo = JSON.parse(localStorage.getItem('yourInfo'))
      submit.innerHTML += '<p>by <b>' + yourInfo.os + '</b></p>'
      if(localStorage.getItem('geolocation')) {
        const geolocation = JSON.parse(localStorage.getItem('geolocation'))
        submit.innerHTML += `<p>Last Known Location : Latitude <b>${geolocation.latitude}°</b> Longitude <b>${geolocation.longitude}°</b></p>`
      } else {
        submit.innerHTML += '<p>Enterd from <b>' + yourInfo.ip + '</b></p>'
      }

      const resetBtn = document.createElement('button')
      resetBtn.setAttribute('type','button')
      resetBtn.textContent = 'すべて削除 Delete All'
      submit.appendChild(resetBtn)
      resetBtn.addEventListener('click', function () {
        localStorage.clear()
        setTimeout(() => {
          location.reload()
        }, 1000)
      })
    }
  }
});
