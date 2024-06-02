'use strict'

let thisSekki,
  thisSeason,
  thisDate,
  thisDescription,
  thisHello;

async function sekkiJSON(requestURL) {
  const request = new Request(requestURL)
  const response = await fetch(request)
  const jsonSekki = await response.text()

  const sekkiAll = JSON.parse(jsonSekki)
  collection(sekkiAll)
}

function collection(obj) {
  const sekkiName = document.querySelector('#log h1 b')
  const sekkiDate = document.querySelector('#log h1 code')
  const sekkiAbout = document.querySelector('#log h2')

  sekkiName.textContent = thisSeason;
  sekkiDate.textContent = thisDate;
  sekkiAbout.textContent = thisDescription;

  document.querySelector('#about h3 strong').textContent = thisSeason;
  document.querySelector('#about small').textContent = thisDescription;
  document.querySelector('#about p').textContent = thisHello;

  let select = document.querySelector('#sekki')
  if (localStorage.getItem('yourInfo')) {
    for (const sekki of obj.sekki) {
      let option = document.createElement('option')
      option.value = sekki.value;
      option.innerText = `${sekki.name}（${sekki.start} - ${sekki.end}）`;
      select.appendChild(option)
    }

    const optionAll = document.querySelectorAll("#sekki option")
    select.addEventListener('change', function () {
      const index = this.selectedIndex;
      location.assign(`?sekki=${optionAll[index].value}`)
    })
  } else {
    document.querySelector('#collection').remove()
  }
}

async function getAllCSV() {
  csvtojson(`${thisSekki}/morning.csv`)
  csvtojson(`${thisSekki}/afternoon.csv`)
  csvtojson(`${thisSekki}/evening.csv`)
  csvtojson(`${thisSekki}/night.csv`)
  await viewTheCollection();
}

function viewTheCollection() {
  return new Promise(() => {
    setTimeout(() => {
      viewAll()
    }, 2000);
  });
}

document.addEventListener('DOMContentLoaded', () => {
  sekkiJSON('sekki.json')
  colorJSON('color.json')
  if (location.search) {
    koJSON(`${thisSekki}/ko.json`)
    getAllCSV()
  } else {
    koJSON('sekki.json')
  }
}, false)
