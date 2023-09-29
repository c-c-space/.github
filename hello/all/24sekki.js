'use strict'

async function sekkiJSON(requestURL) {
  const request = new Request(requestURL);
  const response = await fetch(request);
  const jsonSekki = await response.text();

  const sekkiAll = JSON.parse(jsonSekki);
  sekkiIndex(sekkiAll);

  const collection = document.querySelector('#collection');
  if(!localStorage.getItem('yourInfo')) {
    collection.remove()
  } else {
    sekkiSekect(sekkiAll)
  }
}

function sekkiIndex(obj) {
  let ul = document.querySelector('#log ul')
  const allSekki = obj.sekki;
  for (const sekki of allSekki) {
    let li = document.createElement('li')
    let date = document.createElement('p')
    date.setAttribute('data-description', sekki.description)
    date.innerHTML = `
    <date>${sekki.start}</date> -
    <date>${sekki.end}</date>
    `
    let button = document.createElement('button')
    button.type = 'button';
    button.setAttribute('data-name', sekki.name)
    button.setAttribute('data-note', sekki.note)
    button.setAttribute('data-description', sekki.description)
    button.innerText = sekki.name + ' ' + sekki.yomi
    ul.appendChild(li)
    li.appendChild(date)
    li.appendChild(button)

    button.addEventListener('click', function () {
      const uttr = new SpeechSynthesisUtterance()
      uttr.text = this.innerText + this.dataset.description
      uttr.lang = "ja-JP"
      uttr.pitch = 0.9
      uttr.rate = 0.9
      speechSynthesis.speak(uttr)

      const sekkiName = document.querySelector('#log h1 b')
      sekkiName.innerText = this.innerText

      const sekkiDates = document.querySelector('#lastModified')
      sekkiDates.innerText = this.dataset.description

      const sekkiAbout = document.querySelector('#log h2')
      sekkiAbout.innerText = this.dataset.note
    }, false)
  }
}

function sekkiSekect(obj) {
  let select = document.querySelector('#sekki')
  const allSekki = obj.sekki;
  for (const sekki of allSekki) {
    let option = document.createElement('option')
    option.value = sekki.value
    option.innerText = `${sekki.name}（${sekki.start} - ${sekki.end}）`
    select.appendChild(option)
  }

  const optionAll = document.querySelectorAll("#sekki option");
  select.addEventListener('change', function() {
    const index =  this.selectedIndex;
    location.replace(optionAll[index].value);
  });
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
