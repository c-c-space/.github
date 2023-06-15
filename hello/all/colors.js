'use strict'

function ChangeHidden() {
  const mainAll = document.querySelectorAll('main')
  mainAll.forEach(main => {
    if (main.hidden == false) {
      main.hidden = true;
    } else {
      main.hidden = false;
    }
  })
}

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
    li.setAttribute("data-name", color.name)
    li.setAttribute("data-yomi", color.yomi)
    li.setAttribute("data-note", color.note)
    li.setAttribute("data-description", color.description)
    li.innerHTML = `
    <p>
    <code>${color.hex}</code><br/>
    <button type="button">${color.name}</button>
    </p>
    `
    li.style.background = color.hex
    ul.appendChild(li)

    let about = document.querySelector('main#about'),
    name = document.querySelector('main#about #name'),
    yomi = document.querySelector('main#about #yomi'),
    hex = document.querySelector('main#about #hex'),
    note = document.querySelector('main#about #note'),
    description = document.querySelector('main#about #description'),
    hidden = document.querySelector('main#about #hidden');

    hidden.innerText += `${color.hex}, `
    about.style.backgroundImage = "conic-gradient(" + hidden.innerText + "#fff)"

    li.addEventListener('click', function () {
      ChangeHidden()
      about.style.background = this.style.background
      name.innerText = this.dataset.name
      yomi.innerText = this.dataset.yomi
      hex.innerText = this.style.background
      note.innerText = this.dataset.note
      description.innerText = this.dataset.description
    }, false)
  }
}
indexJSON('color.json');
