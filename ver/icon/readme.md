# icon()
代表的なアイコンサイズのcanvas要素に円と文字を描画しアイコンを作成

```
function icon() {
  const canvasAll = document.querySelectorAll('canvas');
  for  (let canvas of canvasAll) {
    if (canvas.getContext) {
      const ctx = canvas.getContext('2d');

      const circle = new Path2D();
      const x = (canvas.width / 2);
      const y = (canvas.height / 2);

      circle.arc(x, y, canvas.width/2.5, 0, Math.PI * 2, true);
      ctx.lineWidth = canvas.width/10;
      ctx.strokeStyle = '#000';
      ctx.fillStyle = '#fff';
      ctx.stroke(circle);
      ctx.fill(circle);

      ctx.font = `${x * 1.23}px 'ipag', monospace`;
      ctx.textAlign = "center";
      ctx.textBaseline = "middle";
      ctx.fillStyle = '#000';
      ctx.fillText('CC', x, y, x);
      ctx.scale(1, 1.25);
    }
  }
}
```

## キャンバス要素に幅・高さを設定

タブに表示される画像・ブックマークした際に表示される画像
ファビコン（favicon）を生成
```
<canvas width="32" height="32"></canvas>
```

iOS端末・Android端末のホーム画面にショートカット(ブックマーク)を設定する
Webクリップアイコンを生成

```
<canvas width="180" height="180"></canvas>
<canvas width="192" height="192"></canvas>
```


Windowsのスタート画面にウェブページを保存した時に表示される画像
Windows用アイコンを生成

```
<canvas width="70" height="70"></canvas>
<canvas width="150" height="150"></canvas>
<canvas width="310" height="150"></canvas>
<canvas width="320" height="320"></canvas>
```


Twitterカード
Summary （サマリーカード）を生成

```
<canvas width="800" height="800"></canvas>
```

***

HTMLにファビコン・Webクリップアイコンを設定
```
<link rel="icon" type="image/png" href="/ver/icon.png" sizes="32x32">
<link rel="icon" href="/ver/icon/android.png" sizes="192x192" type="image/png">
<link rel="apple-touch-icon-precomposed" href="/ver/icon/apple.png" sizes="180x180" type="image/png">
```

HTMLにWindows用アイコンを設定
```
<meta name="application-name" content="creative-community.space"/>
<meta name="msapplication-TileImage" content="/ver/icon/tile-medium.png"/>
<meta name="msapplication-square70x70logo" content="/ver/icon/tile-small.png"/>
<meta name="msapplication-square150x150logo" content="/ver/icon/tile-medium.png"/>
<meta name="msapplication-wide310x150logo" content="/ver/icon/tile-wide.png"/>
<meta name="msapplication-square310x310logo" content="/ver/icon/tile-large.png"/>
<meta name="msapplication-TileColor" content="#fff"/>
```

HTMLにSummary （サマリーカード）を設定
```
<meta name="twitter:card" content="summary">
<meta name="twitter:image" content="summary.png">
```
