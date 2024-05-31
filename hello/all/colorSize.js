'use strict'

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
            option.textContent = color.name;
            option.value = color.hex;
            names.appendChild(option)
        }
    }
}

document.addEventListener('readystatechange', event => {
    if (event.target.readyState === 'interactive') {
        const colorSize = document.querySelector('#color-size')
        colorSize.innerHTML = `
        <u>Choose A Traditional Japanese Seasonal Color to Change Text & Background Colors</u>
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
        <small>コントロールから日本の伝統的な季節の色を選択すると、文字・背景の色が変更されます。</small>
        `;
    } else if (event.target.readyState === 'complete') {
        const colorSelect = document.querySelector('#color')
        const bgcolorSelect = document.querySelector('#bgcolor')
        const fontSize = document.querySelector('#fontSize')

        colorSelect.addEventListener('change', () => {
            setStyle('color', colorSelect.value)
        })

        bgcolorSelect.addEventListener('change', () => {
            setStyle('bgcolor', bgcolorSelect.value)
        })

        fontSize.addEventListener('change', () => {
            setStyle('fontSize', fontSize.value)
        })

        if (localStorage.getItem('color')) {
            setStyle('color', localStorage.getItem('color'))
        } else {
            setStyle('color', colorSelect.value)
        }

        if (localStorage.getItem('bgcolor')) {
            setStyle('bgcolor', localStorage.getItem('bgcolor'))
        } else {
            setStyle('bgcolor', bgcolorSelect.value)
        }

        if (localStorage.getItem('fontSize')) {
            setStyle('fontSize', localStorage.getItem('fontSize'))
            fontSize.value = localStorage.getItem('fontSize')
        } else {
            setStyle('fontSize', fontSize.value)
        }

        function setStyle(style, value) {
            localStorage.setItem(style, value)

            if (style === 'color') {
                const colorAll = document.querySelectorAll('body, #modal, .color')
                for (const color of colorAll) {
                    color.style.color = value;
                }
            } else if (style === 'bgcolor') {
                const bgcolorAll = document.querySelectorAll('body, #modal, .bgcolor')
                for (const color of bgcolorAll) {
                    color.style.backgroundColor = value;
                }
            } else if (style === 'fontSize') {
                const mainAll = document.querySelectorAll('main, #modal')
                for (const main of mainAll) {
                    main.style.fontSize = value;
                }
            }
        }
    }
});