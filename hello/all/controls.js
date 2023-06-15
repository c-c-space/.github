'use strict'

async function colorJSON(requestURL) {
  const request = new Request(requestURL);
  const response = await fetch(request);
  const colorAll = await response.text();

  const colors = JSON.parse(colorAll);
  colorIndex(colors);
}

function colorIndex(i) {
  let namesForm = document.querySelectorAll('#bgcolor, #color');
  for (const names of namesForm) {
    const allColors = i.color;
    for (const color of allColors) {
      let option = document.createElement('option')
      option.textContent = color.yomi
      option.value = color.hex
      names.appendChild(option)
    }
  }
}
