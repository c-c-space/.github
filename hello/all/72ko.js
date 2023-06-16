'use strict'

async function koJSON(requestURL) {
  const request = new Request(requestURL)
  const response = await fetch(request)
  const jsonKo = await response.text()

  const koAll = JSON.parse(jsonKo)
  koIndex(koAll)
}

function koIndex(obj) {
  let ul = document.querySelector('#ko')
  const allKo = obj.ko;
  for (const ko of allKo) {
    let li = document.createElement('li')
    let date = document.createElement('p')
    date.innerHTML = `
    <code>${ko.start} - ${ko.end}</code>
    `
    let buttonP = document.createElement('p')
    let button = document.createElement('button')
    button.type = 'button'
    button.lang = 'en-GB'
    button.setAttribute('data-name', 'Daniel')
    button.setAttribute('data-pitch', '0.9')
    button.setAttribute('data-rate', '0.9')
    button.setAttribute('data-hello', ko.description)
    button.innerHTML = `
    ${ko.name} <i>${ko.value}</i>
    `
    ul.appendChild(li)
    li.appendChild(date)
    li.appendChild(buttonP)
    buttonP.appendChild(button)
  }
}
