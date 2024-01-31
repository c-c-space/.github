'use strict'

const storage = localStorage;

if (!storage.getItem('fontSize')) {
  setfontSize()
  setBGcolor()
  setCcolor()
} else {
  setStyles()
}

document.addEventListener('readystatechange', event => {
  if (event.target.readyState === 'interactive') {
    const fontSize = document.querySelector('#fontSize')
    const bgcolorForm = document.querySelector('#bgcolor')
    const colorForm = document.querySelector('#color')

    fontSize.onchange = setfontSize;
    bgcolorForm.onchange = setBGcolor;
    colorForm.onchange = setCcolor;

    function setfontSize() {
      storage.setItem('fontSize', fontSize.value)
      setStyles()
    }

    function setBGcolor() {
      storage.setItem('bgcolor', bgcolorForm.value)
      setStyles()
    }

    function setCcolor() {
      storage.setItem('color', colorForm.value)
      setStyles()
    }

    function setStyles() {
      const currentSize = storage.getItem('fontSize')
      const currentBG = storage.getItem('bgcolor')
      const currentColor = storage.getItem('color')

      fontSize.value = currentSize;
      bgcolorForm.value = currentBG;
      colorForm.value = currentColor;

      const mainAll = document.querySelectorAll('html')
      for (const main of mainAll) {
        main.style.fontSize = currentSize;
      }

      const bgcolorAll = document.querySelectorAll('body, .bgcolor, #modal')
      for (const bgcolor of bgcolorAll) {
        bgcolor.style.backgroundColor = currentBG;
      }

      const colorAll = document.querySelectorAll('body, .color, #modal')
      for (const color of colorAll) {
        color.style.color = currentColor;
      }

      console.info(
        "Font-Size:", currentSize,
        "Background-Color:", currentBG,
        "Color:", currentColor
      )
    }
  }
})