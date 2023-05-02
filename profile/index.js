const log = document.querySelector('#log')

if(localStorage.getItem('sign')) {
  const yourSign = JSON.parse(localStorage.getItem('sign'))
  const sign = document.createElement("li")
  sign.setAttribute('id','sign')
  sign.innerHTML += `
  <span>自分の気持ちを知る・表す</span>
  <span>
  <button class="color bgcolor" onclick="location.assign('/sign/')">Sign</button>
  </span>
  <span></span>
  <span>You Posted <b>${yourSign.length}</b> Colors & Symbols That Suits on You</span>
  `
  log.prepend(sign)
}

if(!localStorage.getItem('yourInfo')) {
} else {
  const yourInfo = JSON.parse(localStorage.getItem('yourInfo'))
  const info = document.querySelector("#info")
  info.innerHTML += `
  <span>IP ${yourInfo.ip} | PORT ${yourInfo.port}</span>
  <span>USER AGENT ${yourInfo.os}</span>
  `
}

const newColorAll = document.querySelectorAll('#log li span')
for (const newColor of newColorAll) {
  newColor.classList.add("color")
}
