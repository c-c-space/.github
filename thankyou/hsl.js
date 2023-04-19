'use strict'

document.body.style.background = "#000"
document.body.style.padding = "0";
document.body.style.margin = "0";

window.addEventListener('load', (event) => {
  document.addEventListener('mousemove', touchHSL);
  document.addEventListener('touchstart', touchHSL);
  document.addEventListener('touchend', touchHSL);
  document.addEventListener('touchcancel', touchHSL);
  document.addEventListener('touchmove', touchHSL);

  let allHSL = document.querySelectorAll('.hsl');
  for (const colorHSL of allHSL) {
    colorHSL.style.color = '#000';
    colorHSL.style.filter = 'invert()';
  }

  function touchHSL(xy) {
    let hueraw = parseInt(360 - Math.round((xy.pageY + 0.1) / (window.innerHeight) * 360));

    if ((xy.pageX <= window.innerWidth / 1)) {
      let sraw = parseInt(100 - Math.round((xy.pageX + 0.1) / (window.innerWidth) * 100));
      let lraw = parseInt(Math.round((xy.pageX + 0.1) / (window.innerWidth) * 100));

      document.body.style.background = 'hsl(' + hueraw + ',' + sraw + '%,' + lraw + '%)';

      let allHSL = document.querySelectorAll('.hsl');
      for (const colorHSL of allHSL) {
        colorHSL.style.color = 'hsl(' + hueraw + ',' + sraw + '%,' + lraw + '%)';
      }
    }
  };
});

/* Copyright (C) 2021 creative-community.space */
