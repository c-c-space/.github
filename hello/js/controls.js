// 変数の設定
const txtSpeech = document.querySelector('#readme'),
speakBtn = document.querySelector('#speak-btn'),
cancelBtn = document.querySelector('#cancel-btn'),
pauseBtn = document.querySelector('#pause-btn'),
resumeBtn = document.querySelector('#resume-btn');

// ピッチとレートの値の更新
const pitch = document.querySelector("#pitch"),
rate = document.querySelector("#rate"),
pitchValue = document.querySelector(".pitch-value"),
rateValue = document.querySelector(".rate-value");

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
