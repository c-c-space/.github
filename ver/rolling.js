'use strict'

const menuCSS = document.createElement("link");
menuCSS.href = "https://creative-community.space/ver/rolling.css";
menuCSS.type = "text/css";
menuCSS.rel = "stylesheet";

document.getElementsByTagName("head")[0].appendChild(menuCSS);


var leading = 0
var wheel = 0
var offset = 0
var lastOffset = 0
var lastY = 0

var x = y = z = lastX = lastY = lastZ = 0


window.addEventListener('devicemotion', function(event) {
  x = event.accelerationIncludingGravity.x
  y = event.accelerationIncludingGravity.y
  z = event.accelerationIncludingGravity.z

  var deltaX = lastX - x
  var deltaY = lastY - y
  var deltaZ = lastZ - z

  var deltaA = Math.max(deltaX, deltaY, deltaZ)

  if (Math.abs(deltaA) > 0.1) onOffset()

  lastX = x
  lastY = y
  lastZ = z
})

window.addEventListener('touchstart', function(event) {
  lastY = event.touches[0].clientY
})

window.addEventListener('touchmove', function(event) {
  var currentY = event.touches[0].clientY
  var delta = currentY - lastY

  wheel += delta

  offset = Math.floor((wheel / leading)) * leading

  if (lastOffset !== offset) onOffset(delta > 0)

  lastOffset = offset
  lastY = currentY
})

window.addEventListener('mousewheel', function(event) {
  wheel += event.deltaY

  offset = Math.floor((wheel / leading)) * leading

  if (lastOffset !== offset) onOffset(event.deltaY > 0)

  lastOffset = offset
})

function onOffset(up) {
  Array.from(document.querySelectorAll('.col')).forEach(function(el, i) {
    var lines = el.innerHTML.trim().split('\n')

    if (i % 2 === (up ? 0 : 1)) {
      lines.push(lines.shift())
    } else {
      lines.unshift(lines.pop())
    }

    el.innerHTML = lines.join('\n')
  })
}
