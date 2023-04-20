// キャンバス要素に幅・高さを設定
// <canvas width="30" height="30"></canvas>
// <canvas width="180" height="180"></canvas>
// <canvas width="192" height="192"></canvas>
// <canvas width="320" height="320"></canvas>
// <canvas width="400" height="400"></canvas>
// <canvas width="800" height="800"></canvas>

// 入力欄と描画を実行するボタン要素
// <input type="text" id="textHere" value="Text Here">
// <button onclick="drawingText()">drawingText()</button>

// 入力欄のテキストをすべてのキャンバス要素に描画
function drawingText() {
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
