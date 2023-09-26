'use strict'

async function fetchHTML(url = '', query = '') {
  fetch(url)
    .then(response => response.text())
    .then(html => {
      document.querySelector(query).innerHTML = html
    })
}

function changeHidden() {
  const mainAll = document.querySelectorAll('main')
  mainAll.forEach(main => {
    if (main.hidden == false) {
      main.hidden = true;
    } else {
      main.hidden = false;
    }
  })
}

function userStream() {
  const userMedia = document.createElement('video')
  userMedia.id = "userMedia"
  userMedia.setAttribute('autoplay', 'true')
  userMedia.setAttribute('playsinline', 'true')
  userMedia.style.width = window.innerWidth
  userMedia.style.height = window.innerHeight
  document.body.appendChild(userMedia)

  let media = navigator.mediaDevices.getUserMedia({
    video: true,
    video: { facingMode: 'environment' }, //背面カメラ
    //video: { facingMode: 'user' }, //インカメラ
    audio: false,
  });
  media.then((stream) => {
    userMedia.srcObject = stream
  });
}

function stopStream() {
  const userMedia = document.querySelector('#userMedia')
  const stream = userMedia.srcObject
  const tracks = stream.getTracks()
  tracks.forEach(function (track) {
    track.stop()
  })
  userMedia.remove()
}

function openModal() {
  const dialogModal = document.querySelector('#modal')
  if (typeof dialogModal.showModal === "function") {
    dialogModal.showModal()
  } else {
    alert("The <dialog> API is not supported by this browser")
  }
}

document.addEventListener('readystatechange', event => {
  if (event.target.readyState === 'interactive') {
    fetchHTML('profile/yourinfo.html', '#modal section')

    const dialogModal = document.querySelector('#modal')
    const closeModal = document.querySelector('#closeModal')
    closeModal.addEventListener('click', () => {
      dialogModal.close()
    })
  } else if (event.target.readyState === 'complete') {
    const nextBtn = document.querySelector('#submit-btn')

    if (localStorage.getItem('yourInfo')) {
      // localStorage
      fetchHTML('hello/welcome.php', '#hello h1')

      const yourStrage = document.querySelector('#hello h2')
      yourStrage.innerHTML = '<u>You Posted</u><br/>'
      if(!localStorage.getItem('sign')) {
        yourStrage.innerHTML += '<a href="/sign/">0</a>'
      } else {
        const yourSign = JSON.parse(localStorage.getItem('sign'))
        yourStrage.innerHTML += `<a href="/sign/">${yourSign.length}</a>`
      }
      yourStrage.innerHTML += ' Colors & Symbols that Suit You<br/>'

      nextBtn.textContent = "すべて削除 Delete All"
      nextBtn.addEventListener('click', function () {
        localStorage.clear()
        setTimeout(() => {
          location.reload()
        }, 1000)
      })
    } else {
      nextBtn.textContent = "Your Info";
      nextBtn.addEventListener('click', function () {
        changeHidden()
        userStream()
      }, false)
      const backBtn = document.querySelector('#back-btn')
      backBtn.addEventListener('click', function () {
        changeHidden()
        stopStream()
      }, false)
    }
  }
});
