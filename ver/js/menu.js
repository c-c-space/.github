'use strict'

// #menuの生成(/ver/css/menu.css を併用) と フェッチ操作

async function fetchHTML(url, query) {
  fetch(url)
    .then(response => response.text())
    .then(html => {
      document.querySelector(query).innerHTML = html;
    })
}

async function fetchText(url, query) {
  fetch(url)
    .then(response => response.text())
    .then(text => {
      document.querySelector(query).innerText = text;
    })
}

async function menuJSON(requestURL) {
  const request = new Request(requestURL)
  const response = await fetch(request)
  const jsonIndex = await response.text()

  const index = JSON.parse(jsonIndex)
  menuContents(index)
}

function menuContents(obj) {
  const contents = document.querySelector('#contents')
  const contentsORG = obj.contents;

  for (const content of contentsORG) {
    const contentA = document.createElement('a')
    contentA.href = content.url;
    contents.appendChild(contentA)

    const contentI = document.createElement('i')
    contentI.textContent = content.date;
    contentA.appendChild(contentI)

    const contentB = document.createElement('b')
    contentB.textContent = content.name;
    contentA.appendChild(contentB)

    if (!content.hidden) {
      const contentU = document.createElement('u')
      contentU.textContent = content.ver;
      contentA.appendChild(contentU)
    }
  }

  // Add .randomRGBbg
  const menuAll = document.querySelectorAll('#contents a')
  for (const contentEach of menuAll) {
    contentEach.addEventListener('mouseenter', function (event) {
      event.target.style.background = randomRGB()
    });

    contentEach.addEventListener('mouseleave', function (event) {
      event.target.style.background = "";
    });
  }
}

document.addEventListener('readystatechange', event => {
  if (event.target.readyState === 'interactive') {
    const menu = document.querySelector('#menu')
    if (localStorage.getItem('yourInfo')) {
      menu.hidden = false;
      menu.style.display = "grid";
    } else {
      menu.hidden = true;
      menu.style.display = "none";
    }
  } else if (event.target.readyState === 'complete') {
    const button = document.querySelector('#menu button')
    button.addEventListener('click', function () {
      menu.classList.toggle('active')
      document.body.classList.toggle('open')
    });
  }
});

function random(number) {
  return Math.floor(Math.random() * (number + 1))
}

function randomRGB() {
  let random255 = `rgb(${random(255)}, ${random(255)}, ${random(255)})`;
  return random255;
}
