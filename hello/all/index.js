'use strict'

let helloAll = {
    index: []
};

async function csvtojson(csv) {
    const response = await fetch(csv + '?' + Date.now())
    const text = await response.text()
    const data = text.trim().split('\n')
        .map(line => line.split(',').map(x => x.trim()))
        .map(comma => {
            if (data.length <= 0) {
                let voice = comma[1].replaceAll('"', "");
                let lang = comma[2].replaceAll('"', "");
                let pitch = comma[3].replaceAll('"', "");
                let rate = comma[4].replaceAll('"', "");
                let hello = comma[5].replaceAll('"', "");
                let timestamp = comma[0].replaceAll('"', "");

                let helloThis = {
                    voice: voice,
                    lang: lang,
                    pitch: pitch,
                    rate: rate,
                    hello: hello,
                    timestamp: timestamp
                };
                helloAll.index.push(helloThis);
            }
        }, false)
}

window.addEventListener('load', () => {
    for (const post of shuffle(helloAll.index)) {
        const section = document.createElement('section')
        document.querySelector('#submit').appendChild(section)
        const code = document.createElement('code')
        code.textContent = `${post.voice} (${post.lang})`;
        section.appendChild(code)

        const button = document.createElement('button')
        button.setAttribute('type', 'button')
        button.textContent = post.timestamp;
        section.appendChild(button)

        button.addEventListener('click', function () {
            const uttr = new SpeechSynthesisUtterance()
            uttr.text = post.hello;
            uttr.lang = post.lang;
            uttr.voice = speechSynthesis
                .getVoices()
                .filter(voice => voice.name === post.voice)[0]

            uttr.pitch = post.pitch;
            uttr.rate = post.rate;
            speechSynthesis.speak(uttr)

            const output = document.querySelector('#log h1 b')
            const logH2 = document.querySelector('#log h2')
            output.innerText = post.hello;
            logH2.innerText = post.timestamp;
            lastModified.innerText = 'Pitch (音域) ' + post.pitch + ' | Rate (速度)' + post.rate;
        }, false)
    }
}, false)

function shuffle(arrays) {
    const array = arrays.slice();
    for (let i = array.length - 1; i >= 0; i--) {
        const shuffleArr = Math.floor(Math.random() * (i + 1));
        [array[i], array[shuffleArr]] = [array[shuffleArr], array[i]];
    }
    return array;
}