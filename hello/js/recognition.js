// Web Speech API の 音声認識を設定
SpeechRecognition = webkitSpeechRecognition || SpeechRecognition;
let recognition = new SpeechRecognition()

window.addEventListener('load', () => {
    // 音声認識の開始・停止
    const stop = () => {
        recognition.stop()
        speechBtn.style.color = "inherit";
        speechBtn.style.background = "inherit";
        speechBtn.textContent = "Speech to Text";
    };

    const start = () => {
        recognition.start()
        speechBtn.style.color = "#fff";
        speechBtn.style.background = "red";
        speechBtn.textContent = "Stop";
    }

    let speechToText = false;
    const speechBtn = document.querySelector('#speech-btn')
    speechBtn.addEventListener("click", () => {
        speechToText ? stop() : start();
        speechToText = !speechToText;
    })

    // 音声認識結果の受け取り
    const readme = document.querySelector('#readme')
    let finalTranscript = '';

    recognition.interimResults = true;
    recognition.continuous = true;

    if (localStorage.getItem('uttr')) {
        let uttrJson = JSON.parse(localStorage.getItem('uttr'));
        recognition.lang = uttrJson.yourLang;
    }

    recognition.onresult = (event) => {
        let interimTranscript = '';
        for (let i = event.resultIndex; i < event.results.length; i++) {
            let transcript = event.results[i][0].transcript;
            if (event.results[i].isFinal) {
                finalTranscript += transcript;
            } else {
                interimTranscript = transcript;
            }
        }
        readme.innerHTML = finalTranscript + '<i style="color:#aaa;">' + interimTranscript + '</i>';
    }

    const voiceSelect = document.querySelector('#voice-select')
    voiceSelect.addEventListener('change', () => {
        if (localStorage.getItem('uttr')) {
            let uttrJson = JSON.parse(localStorage.getItem('uttr'));
            recognition.lang = uttrJson.yourLang;
        }
    }, false)
})