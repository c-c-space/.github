'use strict'

document.querySelector('#about').innerHTML = `
<p>
<u>24 SEKKI</u><br/>
The year is divided into four seasons, but traditionally the year was also divided into 24 solar terms.
</p>
<p>
<u>二十四節気（にじゅうしせっき）</u><br/>
4つの季節「春」「夏」「秋」「冬」それぞれを太陽の動きをもとに6つに分け、季節をあらわす名前をつけたもの。
</p>
<p>
<small>
二十四節気は、中国の中原の気候をもとに名付けられているため、日本で体感する気候とは季節感が合わない名称や時期があります。<br/>
また、その年によって節の始まりの日が1日程度前後することがあります。
</small>
</p>
<br/>
<p>
<u>Choose A Traditional Japanese Seasonal Color to Change Text & Background Colors</u><br/>
下記のコントロールから日本の伝統的な季節の色を選択し、文字・背景の色を変更できます。
</p>
`

let namesForm = document.querySelectorAll('#bgcolor, #color')
for (const names of namesForm) {
  Object.entries(colors).forEach(eachArr => {
    let option = document.createElement('option')
    option.textContent = Object.values(eachArr)[0]
    option.value = Object.values(eachArr)[1]
    names.appendChild(option)
  })
}

const dateAll = document.querySelectorAll('#log ul li button')
for (const dateLi of dateAll) {
  dateLi.addEventListener('click', function () {
    const uttr = new SpeechSynthesisUtterance()
    uttr.text = this.innerText + this.dataset.date
    uttr.lang = "ja-JP"
    uttr.pitch = 0.9
    uttr.rate = 0.9
    speechSynthesis.speak(uttr)

    const sekkiName = document.querySelector('#log h1 b')
    sekkiName.innerText = this.dataset.name + this.innerText

    const sekkiDates = document.querySelector('#lastModified')
    sekkiDates.innerText = this.dataset.date

    const sekkiAbout = document.querySelector('#log h2')
    sekkiAbout.innerText = this.dataset.hello
  }, false)
}

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
