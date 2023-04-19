// 変数の設定
const txtSpeech = document.querySelector('#readme')
const speakBtn = document.querySelector('#speak-btn')
const cancelBtn = document.querySelector('#cancel-btn')
const pauseBtn = document.querySelector('#pause-btn')
const resumeBtn = document.querySelector('#resume-btn')

// ピッチとレートの値の更新
const pitch = document.querySelector("#pitch")
const rate = document.querySelector("#rate")
const pitchValue = document.querySelector(".pitch-value")
const rateValue = document.querySelector(".rate-value")

pitchValue.textContent = pitch.value
rateValue.textContent = rate.value

pitch.onchange = function () {
  pitchValue.textContent = pitch.value
};

rate.onchange = function () {
  rateValue.textContent = rate.value
};

// テキストの発話
speakBtn.addEventListener('click', function () {
  const uttr = new SpeechSynthesisUtterance(txtSpeech.innerText)
  uttr.voice = speechSynthesis
  .getVoices()
  .filter(voice => voice.name === voiceSelect.value)[0]
  uttr.pitch = pitch.value
  uttr.rate = rate.value
  speechSynthesis.speak(uttr)
})


// 発話の停止・一時停止・再開
cancelBtn.addEventListener('click', function () {
  speechSynthesis.cancel()
})

pauseBtn.addEventListener('click', function () {
  speechSynthesis.pause()
})

resumeBtn.addEventListener('click', function () {
  speechSynthesis.resume()
})
