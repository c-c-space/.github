'use strict'

window.addEventListener('load', () => {
    // 変数の設定
    const txtSpeech = document.querySelector('#readme'),
        speakBtn = document.querySelector('#speak-btn');
    const voiceIndex = document.querySelector('#voice-select')
    const selectVoice = voiceIndex.selectedIndex;

    // テキストの発話
    speakBtn.addEventListener('click', function () {
        const uttr = new SpeechSynthesisUtterance(txtSpeech.innerText)
        uttr.voice = speechSynthesis
            .getVoices()
            .filter(voice => voice.name === voiceIndex.options[selectVoice].value)[0];
        uttr.pitch = pitch.value;
        uttr.rate = rate.value;
        uttr.volume = 0.75;
        speechSynthesis.speak(uttr)
    })

    // ピッチとレートの値の更新
    const pitch = document.querySelector("#pitch"),
        rate = document.querySelector("#rate"),
        pitchValue = document.querySelector(".pitch-value"),
        rateValue = document.querySelector(".rate-value");

    pitchValue.textContent = pitch.value;
    rateValue.textContent = rate.value;

    pitch.onchange = function () {
        pitchValue.textContent = pitch.value;
    };

    rate.onchange = function () {
        rateValue.textContent = rate.value;
    };
})