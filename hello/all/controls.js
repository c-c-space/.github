'use strict'

async function colorJSON(requestURL) {
  const request = new Request(requestURL);
  const response = await fetch(request);
  const colorAll = await response.text();

  const colors = JSON.parse(colorAll);
  colorIndex(colors);
}

function colorIndex(obj) {
  let namesForm = document.querySelectorAll('#bgcolor, #color');
  for (const names of namesForm) {
    const allColors = obj.color;
    for (const eachColor of allColors) {
      let option = document.createElement('option')
      option.textContent = eachColor.yomi
      option.value = eachColor.hex
      names.appendChild(option)
    }
  }
}
