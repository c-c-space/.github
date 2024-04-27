'use strict'

window.addEventListener("DOMContentLoaded", function () {
  windowScreen()
}, false)

window.onresize = tmResize;
function tmResize() {
  if (typeof pageResize == "function") {
    pageResize()
  }
}

function pageOnload() {
  windowScreen()
}
function pageResize() {
  windowScreen()
}

function windowScreen() {
  const outScreenWidth = document.getElementById("outScreenWidth")
  outScreenWidth.innerText = screen.availWidth;

  const outScreenheight = document.getElementById("outScreenheight")
  outScreenheight.innerText = screen.availHeight;

  const outInnerWidth = document.getElementById("outInnerWidth")
  outInnerWidth.innerText = window.innerWidth;

  const outInnerHeight = document.getElementById("outInnerHeight")
  outInnerHeight.innerText = window.innerHeight;
}