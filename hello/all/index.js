async function helloCSV(csv) {
    const response = await fetch(csv + '?' + Date.now())
    const text = await response.text()
    const data = text.trim().split('\n')
        .map(line => line.split(',').map(x => x.trim()))
        .map(comma => {
            let voice = comma[1].replaceAll('"', "");
            let lang = comma[2].replaceAll('"', "");
            let pitch = comma[3].replaceAll('"', "");
            let rate = comma[4].replaceAll('"', "");
            let hello = comma[5].replaceAll('"', "");
            const section = document.createElement('section')
            document.querySelector('#log article').appendChild(section)

            const code = document.createElement('code')
            code.textContent = `${voice} (${lang})`;
            section.appendChild(code)

            const button = document.createElement('button')
            section.appendChild(button)
            button.textContent = comma[0].replaceAll('"', "");
            button.setAttribute('type', 'button');
            button.addEventListener('click', function () {
                const uttr = new SpeechSynthesisUtterance()
                uttr.text = hello;
                uttr.lang = lang;
                uttr.voice = speechSynthesis
                    .getVoices()
                    .filter(voice => voice.name === voice)[0]

                uttr.pitch = pitch;
                uttr.rate = rate;
                speechSynthesis.speak(uttr)

                const output = document.querySelector('#log h1 b')
                const logH2 = document.querySelector('#log h2')
                output.innerText = hello;
                logH2.innerText = comma[0].replaceAll('"', "");
                lastModified.innerText = 'Pitch (音域) ' + pitch + ' | Rate (速度)' + rate;
            }, false)
        }, false)
    let posts = data.length;
}