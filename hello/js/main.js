window.addEventListener('load', (event) => {
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

      const lastModified = document.querySelector('#lastModified');
      lastModified.innerText = this.innerText
    }, false);
  }

  const lastModified = document.querySelector('#lastModified');

  lastModified.innerHTML =
  'Last Modified <time datetime="' + document.lastModified + '">' + document.lastModified + '</time>'
});

// 発話の停止・一時停止・再開
const cancelBtn = document.querySelector('#cancel-btn')
const pauseBtn = document.querySelector('#pause-btn')
const resumeBtn = document.querySelector('#resume-btn')

cancelBtn.addEventListener('click', function () {
  speechSynthesis.cancel()
})

pauseBtn.addEventListener('click', function () {
  speechSynthesis.pause()
})

resumeBtn.addEventListener('click', function () {
  speechSynthesis.resume()
})
