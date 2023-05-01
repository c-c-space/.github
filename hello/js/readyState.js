'use strict'

function ChangeHidden() {
  const mainAll = document.querySelectorAll('main');
  mainAll.forEach(main => {
    if (main.hidden == false) {
      main.hidden = true;
    } else {
      main.hidden = false;
    }
  })
};

document.addEventListener('readystatechange', event => {
  if (event.target.readyState === 'loading') {
  } else if (event.target.readyState === 'complete') {
    const greeting = document.querySelector('#log div h1 b')

    let timeframe = (new Date()).getHours()
    if (timeframe <= 5) { greeting.innerText = "Good Night おやすみ" }
    else if (timeframe <= 11) { greeting.innerText = "Good Morning おはよう" }
    else if (timeframe <= 17) { greeting.innerText = "Hello こんにちは" }
    else if (timeframe <= 23 ) { greeting.innerText = "Good Evening こんばんは" }
    else { greeting.innerText = "Good Night おやすみ" }

    const mainLog = document.querySelector('#log')
    const logAll = document.querySelector('#log section')
    const lastModified = document.querySelector('#lastModified')

    if(localStorage.getItem('yourInfo')) {
      document.querySelector('#now .controls').remove()

      async function about() {
        fetch('about.php')
        .then(response => response.text())
        .then(about => {
          document.querySelector('#about').innerHTML = about
        });
      }
      about();

      async function readmeMD() {
        fetch('readme.md')
        .then(response => response.text())
        .then(readme => {
          logAll.innerHTML = readme.replace(/\n/g, "<br>")
        });
      }
      readmeMD();

      lastModified.innerHTML = document.URL

      logAll.style.padding = "1rem 0.5rem"
    } else {
      const enterBtn = document.createElement('button')
      enterBtn.setAttribute('type','button')
      enterBtn.setAttribute('id','enter-btn')
      enterBtn.setAttribute('onclick','ChangeHidden()')
      enterBtn.innerText = '掲示板 Message Board'
      mainLog.prepend(enterBtn)

      lastModified.innerHTML =
      'Last Modified <time datetime="' + document.lastModified + '">' + document.lastModified + '</time>'

      async function readmeMD() {
        fetch('readme.md')
        .then(response => response.text())
        .then(readme => {
          document.querySelector('#about').innerHTML = readme.replace(/\n/g, "<br>")
        });
      }
      readmeMD();

      const submitBtn = document.querySelector("#submit-btn")
      submitBtn.addEventListener('click', function () {
        const thisText = document.querySelector('#readme')
        const voiceIndex = document.querySelector('#voice-select')
        const selectVoice = voiceIndex.selectedIndex
        const thisPitch = document.querySelector("#pitch").value
        const thisRate = document.querySelector("#rate").value

        let thisHello = {
          timestamp : new Date().toLocaleString(),
          hello : thisText.innerText,
          voice : voiceIndex.options[selectVoice].value,
          lang : voiceIndex.options[selectVoice].lang,
          pitch : thisPitch,
          rate : thisRate
        };

        const helloJSON = JSON.stringify(thisHello);
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
    }

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

        const lastModified = document.querySelector('#lastModified')
        lastModified.innerText = this.innerText
      }, false)
    }
  }
});
