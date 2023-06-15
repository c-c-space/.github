'use strict'

async function indexJSON(requestURL) {
  const request = new Request(requestURL);
  const response = await fetch(request);
  const jsonIndex = await response.text();

  const index = JSON.parse(jsonIndex);
  indexObject(index);
}

function indexObject(obj) {
  let ul = document.querySelector('ul#color');
  const allColors = obj.color;
  for (const color of allColors) {
    let li = document.createElement('li')
    li.innerHTML = `
    <p>
    <code>${color.hex}</code>
    <button type="button" data-note="${color.note}">${color.name}</button>
    <small>${color.description}</small>
    </p>
    `
    li.style.background = color.hex
    ul.appendChild(li)
  }
}
indexJSON('color.json');

const dateAll = document.querySelectorAll('#color li button')
for (const dateLi of dateAll) {
  dateLi.addEventListener('click', function () {
    const uttr = new SpeechSynthesisUtterance()
    uttr.text = this.dataset.note
    uttr.lang = "ja-JA"
    uttr.pitch = 0.8
    uttr.rate = 0.8
    speechSynthesis.speak(uttr)
  }, false)
}
