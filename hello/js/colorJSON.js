'use strict'

function colorSize() {
  const colorSize = document.querySelector('#color-size')
  colorSize.innerHTML = `
  <p>
    <u>Choose A Traditional Japanese Seasonal Color to Change Text & Background Colors</u>
  </p>
  <p>
    <label for="color">文字の色</label>
    <select class="color bgcolor" id="color">
      <option value="#111" selected>Text Color</option>
    </select>
    <br/>
    <label for="bgcolor">背景の色</label>
    <select class="color bgcolor" id="bgcolor">
      <option value="#fff" selected>Background Color</option>
    </select>
  </p>
  <p>
    <label for="fontSize">文字の大きさ</label>
    <select class="color bgcolor" id="fontSize">
      <option value="13px">Small</option>
      <option value="16px" selected>Medium</option>
      <option value="20px">Large</option>
    </select>
  </p>
  コントロールから日本の伝統的な季節の色を選択すると、文字・背景の色が変更されます。
  `;
}

async function colorJSON(requestURL) {
  const request = new Request(requestURL)
  const response = await fetch(request)
  const colorAll = await response.text()

  const colors = JSON.parse(colorAll)
  colorIndex(colors)
}

function colorIndex(i) {
  const namesForm = document.querySelectorAll('#bgcolor, #color')
  for (const names of namesForm) {
    const colors = i.color;
    for (const color of colors) {
      let option = document.createElement('option')
      option.textContent = color.yomi;
      option.value = color.hex;
      names.appendChild(option)
    }
  }
}
