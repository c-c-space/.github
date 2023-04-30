'use strict'

const menuCSS = document.createElement("link");
menuCSS.href = "/menu.css";
menuCSS.type = "text/css";
menuCSS.rel = "stylesheet";

document.getElementsByTagName("head")[0].prepend(menuCSS);

document.addEventListener('readystatechange', event => {

  if (event.target.readyState === 'loading') {
    // 文書の読み込み中に実行する
  }

  else if (event.target.readyState === 'interactive') {
    // 使用するウェブストレージの種類を設定
    const storage = localStorage;

    const button = document.querySelector('#js-button');
    const menu = document.querySelector('#menu');
    const box = document.querySelector('body');

    // Web Storageにアイテムが存在しているかを確認する
    if(!storage.getItem('yourInfo')) {
      // アイテムが存在しない場合に実行する文
      menu.hidden = true;
    } else {
      // アイテムが存在する場合に実行する文
      menu.hidden = false;
    }

    button.addEventListener('click', function () {
      menu.classList.toggle('active');
      box.classList.toggle('open');
    });
  }

  else if (event.target.readyState === 'complete') {
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
