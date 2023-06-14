const info = document.querySelector('#info');

if(localStorage.getItem('geolocation')) {
  const geolocation = JSON.parse(localStorage.getItem('geolocation'));
  const yourLocation = JSON.parse(localStorage.getItem('map'))
  const yourMap = document.createElement("li");
  yourMap.innerHTML += `
  <span>行ったことのない場所へ行く</span>
  <span>
  <button class="color bgcolor" onclick="location.assign('/map/')">Go Out</button>
  </span>
  <span></span>
  <span>You Posted <b>${yourLocation.length}</b> Location</span>
  `
  info.before(yourMap);
}

if(localStorage.getItem('sign')) {
  const yourSign = JSON.parse(localStorage.getItem('sign'));
  const sign = document.createElement("li");
  sign.innerHTML += `
  <span>自分の気持ちを知る・表す</span>
  <span>
  <button class="color bgcolor" onclick="location.assign('/sign/')">Sign</button>
  </span>
  <span></span>
  <span>You Posted <b>${yourSign.length}</b> Colors & Symbols That Suit You</span>
  `
  info.before(sign);
}

const connectionInfo = navigator.connection;
if (connectionInfo !== undefined) {
  const init = function() {
    document.getElementById('network').innerHTML =
    'Network Type <b>' + connectionInfo.effectiveType + '</b> <b>' + connectionInfo.type + '</b> | '
    + 'Downlink <b>' + connectionInfo.downlink + '</b> Mb/s | '
    + 'RTT <b>'+ connectionInfo.rtt + '</b> ms'
  };
  init();

  if ('onchange' in connectionInfo) {
    connectionInfo.addEventListener('change', init);
  } else if ('ontypechange' in connectionInfo) {
    connectionInfo.addEventListener('typechange', init);
  }
}

const memory = navigator.deviceMemory;
const hardware = navigator.hardwareConcurrency;
document.querySelector('#navigator').innerHTML = `This Device has at least <b>${memory}</b> GiB of RAM | <b>${hardware}</b> CPU available.`;


window.addEventListener("DOMContentLoaded", function () {
  windowScreen();
}, false);

window.onresize = tmResize;
function tmResize() {
  if (typeof pageResize == "function") {
    pageResize();
  }
}

function pageOnload() {
  windowScreen();
}
function pageResize() {
  windowScreen();
}

function windowScreen() {
  const outScreenWidth = document.getElementById("outScreenWidth");
  outScreenWidth.innerText = screen.availWidth;

  const outScreenheight = document.getElementById("outScreenheight");
  outScreenheight.innerText = screen.availHeight;

  const outInnerWidth = document.getElementById("outInnerWidth");
  outInnerWidth.innerText = window.innerWidth;

  const outInnerHeight = document.getElementById("outInnerHeight");
  outInnerHeight.innerText = window.innerHeight;
}

const newColorAll = document.querySelectorAll('#log li span');
for (const newColor of newColorAll) {
  newColor.classList.add("color");
}
