const info = document.querySelector('#info')

if(localStorage.getItem('geolocation')) {
  const yourGEO = JSON.parse(localStorage.getItem('geolocation'))
  const geolocation = document.createElement("li")
  geolocation.innerHTML += `
  <span>行ったことのない場所へ行く</span>
  <span>
  <button class="color bgcolor" onclick="location.assign('/map/')">Go Out</button>
  </span>
  <span></span>
  <span>Latitude: <b>${yourGEO.latitude}°</b> Longitude: <b>${yourGEO.longitude}°</b></span>
  `
  info.before(geolocation)
}

if(localStorage.getItem('sign')) {
  const yourSign = JSON.parse(localStorage.getItem('sign'))
  const sign = document.createElement("li")
  sign.innerHTML += `
  <span>自分の気持ちを知る・表す</span>
  <span>
  <button class="color bgcolor" onclick="location.assign('/sign/')">Sign</button>
  </span>
  <span></span>
  <span>You Posted <b>${yourSign.length}</b> Colors & Symbols That Suits on You</span>
  `
  info.before(sign)
}


const connectionInfo = navigator.connection;
if (connectionInfo !== undefined) {
  const init = function() {
    document.getElementById('network').textContent += ' Network Information: ' + connectionInfo.type;
    document.getElementById('network').textContent += ' ' + connectionInfo.effectiveType;
    document.getElementById('network').textContent += ' ' + connectionInfo.downlink + ' Mb/s';
    document.getElementById('network').textContent += ' ' + connectionInfo.downlinkMax + ' Mb/s';
    document.getElementById('network').textContent += ' ' + connectionInfo.rtt + ' ms';
  };
  init();

  if ('onchange' in connectionInfo) {
    connectionInfo.addEventListener('change', init);
  } else if ('ontypechange' in connectionInfo) {
    connectionInfo.addEventListener('typechange', init);
  }
}

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
  const outScreenWidth = document.getElementById("outScreenWidth")
  outScreenWidth.innerText = screen.availWidth;

  const outScreenheight = document.getElementById("outScreenheight")
  outScreenheight.innerText = screen.availHeight;

  const outInnerWidth = document.getElementById("outInnerWidth")
  outInnerWidth.innerText = window.innerWidth;

  const outInnerHeight = document.getElementById("outInnerHeight")
  outInnerHeight.innerText = window.innerHeight;
}

const memory = navigator.deviceMemory
const hardware = navigator.hardwareConcurrency
document.querySelector('#navigator').innerText = `This device has at least ${memory} GiB of RAM | ${hardware} CPU available.`


const newColorAll = document.querySelectorAll('#log li span')
for (const newColor of newColorAll) {
  newColor.classList.add("color")
}
