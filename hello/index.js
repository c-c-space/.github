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

document.addEventListener('readystatechange', event => {
  if (event.target.readyState === 'interactive') {
    if (!localStorage.getItem('yourInfo')) {
      const loginBtn = document.querySelector('#login-btn')
      loginBtn.setAttribute('onclick', 'setLOG()')
      loginBtn.textContent = 'Submit Your Info to Enter'

      const removeAll = document.querySelectorAll('#log article, #now .controls')
      for (const i of removeAll) {
        i.remove()
      }
      fetchText('readme.md', '#about')
      fetchHTML('../profile/yourinfo.php', '#log h2')
    } else {
      const form = document.querySelector("#hello form")
      form.addEventListener('submit', function (event) {
        event.preventDefault()

        const thisText = document.querySelector('#readme')
        const voiceIndex = document.querySelector('#voice-select')
        const selectVoice = voiceIndex.selectedIndex
        const thisPitch = document.querySelector("#pitch").value
        const thisRate = document.querySelector("#rate").value

        let thisHello = {
          timestamp: new Date().toLocaleString(),
          hello: thisText.innerText,
          voice: voiceIndex.options[selectVoice].value,
          lang: voiceIndex.options[selectVoice].lang,
          pitch: thisPitch,
          rate: thisRate
        }

        const helloJSON = JSON.stringify(thisHello)
        async function submitThis() {
          let url = 'submit.php'
          let response = await fetch(url, {
            method: 'POST',
            headers: {
              'Content-Type': 'application/json;charset=utf-8'
            },
            body: helloJSON
          })
            .then(response => response.json())
            .then(data => {
              console.log(data)
            })
            .catch(error => {
              console.log(error)
            });
        }

        submitThis()
        setTimeout(() => {
          location.reload()
        }, 1500)
      })
      fetchText('readme.md', '#howto')
    }
  } else if (event.target.readyState === 'complete') {
    const lastModified = document.querySelector('#lastModified');
    lastModified.innerHTML = 'Last Modified <time datetime="'
      + document.lastModified + '">'
      + document.lastModified + '</time>'

    const logAll = document.querySelectorAll('#logAll li button')
    for (const i of logAll) {
      i.addEventListener('click', function () {
        const uttr = new SpeechSynthesisUtterance()
        uttr.text = i.dataset.hello
        uttr.lang = i.lang
        uttr.voice = speechSynthesis
          .getVoices()
          .filter(voice => voice.name === i.dataset.name)[0]

        uttr.pitch = i.dataset.pitch
        uttr.rate = i.dataset.rate
        speechSynthesis.speak(uttr)

        const output = document.querySelector('#log h1 b')
        output.innerText = i.dataset.hello

        lastModified.innerText = i.innerText
      }, false)
    }
  }
})
