'use strict'

const menuCSS = document.createElement("link");
menuCSS.href = "/css/menu.css";
menuCSS.type = "text/css";
menuCSS.rel = "stylesheet";

document.getElementsByTagName("head")[0].prepend(menuCSS);

document.addEventListener('readystatechange', event => {
  if (event.target.readyState === 'loading') {
    // 文書の読み込み中に実行する
  } else if (event.target.readyState === 'interactive') {
    const button = document.querySelector('#js-button');
    const menu = document.querySelector('#menu');
    const box = document.querySelector('body');

    if(!localStorage.getItem('yourInfo')) {
      menu.hidden = true;
    } else {
      menu.hidden = false;
    }

    button.addEventListener('click', function () {
      menu.classList.toggle('active');
      box.classList.toggle('open');
    });
  } else if (event.target.readyState === 'complete') {
    // Add .randomRGBbg
    const newRGBbgAll = document.querySelectorAll('#contents a');
    for (const newRGBbg of newRGBbgAll) {
      newRGBbg.classList.add("randomRGBbg")
    }

    function random(number) {
      return Math.floor(Math.random() * (number + 1));
    }

    function randomRGB() {
      let random255 = `rgb(${random(255)}, ${random(255)}, ${random(255)})`;
      return random255;
    }

    const randomRGBbgAll = document.querySelectorAll('.randomRGBbg');
    for (const randomRGBbg of randomRGBbgAll) {
      randomRGBbg.addEventListener('mouseenter', function(event) {
        event.target.style.background = randomRGB();
      });

      randomRGBbg.addEventListener('mouseleave', function(event) {
        event.target.style.background = "";
      });
    }
  }
});
