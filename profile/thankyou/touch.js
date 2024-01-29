'use strict'

const canvas = document.querySelector("#canvas");
canvas.style.boxSizing = "border-box";
canvas.style.padding = "0";
canvas.style.margin = "0";
canvas.style.position = "fixed";
canvas.style.zIndex = "1";

window.addEventListener("DOMContentLoaded", function () {
  windowScreen();
  startup();
}, false);

window.onresize = tmResize;
function tmResize() {
  if (typeof pageResize == "function") {
    pageResize();
  }
}

function windowScreen() {
  canvas.width = window.innerWidth;
  canvas.height = window.innerHeight;
}

function pageResize() {
  windowScreen();
}

function startup() {
  canvas.addEventListener('touchstart', handleStart);
  canvas.addEventListener('touchend', handleEnd);
  canvas.addEventListener('touchcancel', handleCancel);
  canvas.addEventListener('touchmove', handleMove);
  log('Touch The Screen to Drawing');
}

const ongoingTouches = [];

function handleStart(evt) {
  evt.preventDefault();
  const time = new Date();
  const timeStr = time.toLocaleTimeString();
  log(`touchstart at ${timeStr}`);
  const el = document.querySelector("#canvas");
  const ctx = el.getContext('2d');
  const touches = evt.changedTouches;

  for (let i = 0; i < touches.length; i++) {
    ongoingTouches.push(copyTouch(touches[i]));
    ctx.beginPath();
    ctx.arc(touches[i].pageX, touches[i].pageY, 4, 0, 2 * Math.PI, false);
  }
}

function handleMove(evt) {
  evt.preventDefault();
  const el = document.querySelector("#canvas");
  const ctx = el.getContext('2d');
  const touches = evt.changedTouches;

  for (let i = 0; i < touches.length; i++) {
    const idx = ongoingTouchIndexById(touches[i].identifier);

    if (idx >= 0) {
      ctx.beginPath();
      ctx.moveTo(ongoingTouches[idx].pageX, ongoingTouches[idx].pageY);
      ctx.lineTo(touches[i].pageX, touches[i].pageY);
      ctx.lineWidth = 15;
      ctx.strokeStyle = '#111';
      ctx.stroke();

      ongoingTouches.splice(idx, 1, copyTouch(touches[i]));
    } else {
      log('can\'t figure out which touch to continue');
    }
  }
}

function handleEnd(evt) {
  evt.preventDefault();
  const time = new Date();
  const timeStr = time.toLocaleTimeString();
  log(`touchend at ${timeStr}`);
  const el = document.querySelector("#canvas");
  const ctx = el.getContext('2d');
  const touches = evt.changedTouches;

  for (let i = 0; i < touches.length; i++) {
    let idx = ongoingTouchIndexById(touches[i].identifier);

    if (idx >= 0) {
      ctx.beginPath();
      ctx.moveTo(ongoingTouches[idx].pageX, ongoingTouches[idx].pageY);
      ctx.lineTo(touches[i].pageX, touches[i].pageY);
      ongoingTouches.splice(idx, 1);  // remove it; we're done
    } else {
      log('can\'t figure out which touch to end');
    }
  }
}

function handleCancel(evt) {
  evt.preventDefault();
  const time = new Date();
  const timeStr = time.toLocaleTimeString();
  log(`touchcancel at ${timeStr}`);
  const touches = evt.changedTouches;

  for (let i = 0; i < touches.length; i++) {
    let idx = ongoingTouchIndexById(touches[i].identifier);
    ongoingTouches.splice(idx, 1);
  }
}

function copyTouch({ identifier, pageX, pageY }) {
  return { identifier, pageX, pageY };
}

function ongoingTouchIndexById(idToFind) {
  for (let i = 0; i < ongoingTouches.length; i++) {
    const id = ongoingTouches[i].identifier;

    if (id === idToFind) {
      return i;
    }
  }
  return -1;
}

function log(msg) {
  const container = document.querySelector("#eventLog");
  container.textContent = `${msg} \n${container.textContent}`;
}
