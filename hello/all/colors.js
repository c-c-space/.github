'use strict'


let about = document.querySelector('dialog#modal'),
name = document.querySelector('dialog#modal #name'),
yomi = document.querySelector('dialog#modal #yomi'),
hex = document.querySelector('dialog#modal #hex'),
note = document.querySelector('dialog#modal #note'),
description = document.querySelector('dialog#modal #description'),
hidden = document.querySelector('dialog#modal #hidden');

about.showModal();

const closeButton = document.querySelector('#modal button');
closeButton.addEventListener('click', () => {
  about.close();
});

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

    hidden.innerText += `${color.hex}, `
    about.style.backgroundImage = "conic-gradient(from 360deg at 100% 100%, " + hidden.innerText + "#fff)"

    li.addEventListener('click', function () {
      if (typeof about.showModal === "function") {
        about.showModal();
      } else {
        alert("The <dialog> API is not supported by this browser");
      }
      about.style.background = this.style.background
      name.innerText = this.dataset.name
      yomi.innerText = this.dataset.yomi
      hex.innerText = this.style.background
      note.innerText = this.dataset.note
      description.innerText = this.dataset.description
    }, false)
  }
}
