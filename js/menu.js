'use strict'

async function menuJSON(requestURL) {
  const request = new Request(requestURL);
  const response = await fetch(request);
  const jsonIndex = await response.text();

  const index = JSON.parse(jsonIndex);
  menuContents(index);
}

function menuContents(obj) {
  const contents = document.querySelector('#contents');
  const contentsORG = obj.contents;

  for (const content of contentsORG) {
    const contentA = document.createElement('a');
    const contentB = document.createElement('b');
    const contentI = document.createElement('i');
    const contentU = document.createElement('u');

    contentA.href = content.url;
    contentI.textContent = content.date;
    contentB.textContent = content.name;
    contentU.textContent = content.ver;
    contentU.hidden = content.hidden;

    contents.appendChild(contentA);
    contentA.appendChild(contentI);
    contentA.appendChild(contentB);
    contentA.appendChild(contentU);
  }
}

document.addEventListener('readystatechange', event => {
  if (event.target.readyState === 'interactive') {
    const menu = document.querySelector('#menu');
    const button = document.querySelector('#menu button');
    const box = document.body;

    if(localStorage.getItem('yourInfo')) {
      menu.hidden = false;
      menu.style.display = "grid";
    } else {
      menu.hidden = true;
      menu.style.display = "none";
    }

    button.addEventListener('click', function () {
      menu.classList.toggle('active');
      box.classList.toggle('open');
    });
  } else if (event.target.readyState === 'complete') {
    // Add .randomRGBbg

    function random(number) {
      return Math.floor(Math.random() * (number + 1));
    }

    function randomRGB() {
      let random255 = `rgb(${random(255)}, ${random(255)}, ${random(255)})`;
      return random255;
    }

    const randomRGBbg = document.querySelectorAll('#contents a');
    for (const ii of randomRGBbg) {
      ii.addEventListener('mouseenter', function(event) {
        event.target.style.background = randomRGB();
      });

      ii.addEventListener('mouseleave', function(event) {
        event.target.style.background = "";
      });
    }
  }
});
