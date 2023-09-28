'use strict'

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

document.addEventListener('readystatechange', event => {
  if (event.target.readyState === 'interactive') {
    const loginBtn = document.querySelector('#login-btn');
    const helloForm = document.querySelector("#form");

    if (!localStorage.getItem('yourInfo')) {
      loginBtn.setAttribute('onclick', 'setLOG()');
      loginBtn.textContent = 'Submit Your Info to Enter This Site';
      fetchHTML('../profile/yourinfo.php', '#log h2')
      document.querySelector('#now .controls').remove()
      fetchText('readme.md', '#about')
    } else {
      helloForm.addEventListener('submit', function () {
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
        };

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
        thisText.innerText = ""

        setTimeout(() => {
          location.reload()
        }, 1500)
      })

      fetchText('readme.md', '#howto')
    }
  } else if (event.target.readyState === 'complete') {
    const mainLog = document.querySelector('#log');
    const logAll = document.querySelector('#log section');
    const modalH3 = document.querySelector('#modal h3');

    const lastModified = document.querySelector('#lastModified');
    lastModified.innerHTML = 'Last Modified <time datetime="'
      + document.lastModified + '">'
      + document.lastModified + '</time>'

    const helloLiAll = document.querySelectorAll('#log ul li button')
    for (const helloLi of helloLiAll) {
      helloLi.addEventListener('click', function () {
        const uttr = new SpeechSynthesisUtterance()
        uttr.text = this.dataset.hello
        uttr.lang = this.lang
        uttr.voice = speechSynthesis
          .getVoices()
          .filter(voice => voice.name === this.dataset.name)[0]

        uttr.pitch = this.dataset.pitch
        uttr.rate = this.dataset.rate
        speechSynthesis.speak(uttr)

        const output = document.querySelector('#log h1 b')
        output.innerText = this.dataset.hello

        lastModified.innerText = this.innerText
      }, false)
    }
  }
})
