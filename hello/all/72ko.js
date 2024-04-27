'use strict'

async function koJSON(requestURL) {
    const request = new Request(requestURL)
    const response = await fetch(request)
    const jsonKO = await response.text()

    const koAll = JSON.parse(jsonKO)
    createKo(koAll)
}

function createKo(obj) {
    const submit = document.querySelector('#submit')
    const article = document.createElement('article')
    submit.appendChild(article)
    const sekkiName = document.querySelector('#log h1 b')
    const sekkiDate = document.querySelector('#log h1 code')
    const sekkiAbout = document.querySelector('#log h2')
    for (const ko of obj.sekki) {
        let section = document.createElement('section')
        section.className = "ko";
        article.appendChild(section)
        const code = document.createElement('code')
        code.innerHTML = `${ko.start} - ${ko.end}`;
        section.appendChild(code)

        let button = document.createElement('button')
        button.innerText = ko.name + ' ' + ko.yomi;
        button.setAttribute('type', 'button');
        section.appendChild(button)

        const thisDescription = ko.description;
        button.addEventListener('click', function () {
            const uttr = new SpeechSynthesisUtterance()
            uttr.text = ko.yomi + ' ' + thisDescription;
            uttr.lang = "ja-JP";
            uttr.pitch = 0.9;
            uttr.rate = 0.9;
            speechSynthesis.speak(uttr)

            sekkiName.innerText = this.innerText;
            sekkiDate.innerText = `${ko.start} - ${ko.end}`;
            sekkiAbout.innerText = ko.note;
        }, false)
    }
}