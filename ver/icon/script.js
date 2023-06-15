// <input type="text" id="textHere" value="Text Here">
// <button onclick="canvasIcons()">canvasIcons()</button>


'use strict'

function canvasIcons() {
  const text = document.querySelector('#textHere');

  const canvasAll = document.querySelectorAll('canvas');
  for  (let canvas of canvasAll) {
    if (canvas.getContext) {
      const ctx = canvas.getContext('2d');
      const x = (canvas.width / 2);
      const y = (canvas.height / 2);

      // キャンバス全体の消去
      ctx.clearRect(0, 0, canvas.width, canvas.height);

      // テキストのスタイル付け
      ctx.font = `${x * 1.11}px 'ipag', monospace`;
      ctx.textAlign = "center";
      ctx.textBaseline = "middle";
      ctx.fillStyle = '#000';

      // 入力欄のテキストを塗りつぶして描画
      ctx.fillText(text.value, x, y, x * 1.75);
    }
  }
}

/* Copyright (C) 2021 creative-community.space */
