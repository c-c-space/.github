'use strict'

async function indexJSON(requestURL) {
  const request = new Request(requestURL);
  const response = await fetch(request);
  const jsonIndex = await response.text();

  const index = JSON.parse(jsonIndex);
  indexObject(index);
}

function indexObject(obj) {
  let namesForm = document.querySelectorAll('#bgcolor, #color');
  for (const names of namesForm) {
    const allColors = obj.color;
    for (const color of allColors) {
      let option = document.createElement('option')
      option.textContent = color.yomi
      option.value = color.hex
      names.appendChild(option)
    }
  }
}
