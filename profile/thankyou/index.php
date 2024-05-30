<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <meta name="format-detection" content="telephone=no" />

  <meta property="og:type" content="website">
  <title>Thank You | creative-community.space</title>
  <meta property="og:title" content="Thank You | creative-community.space">
  <meta name="description" content="OMG! Your Drawing is Seems So Beautiful">
  <meta property="og:description" content="OMG! Your Drawing is Seems So Beautiful">

  <meta name="twitter:card" content="summary_large_image">
  <meta property="twitter:domain" content="creative-community.space">
  <meta property="og:url" content="https://creative-community.space/profile/thankyou/">
  <meta property="og:image" content="https://creative-community.space/profile/thankyou/card.png">
  <meta name="twitter:image" content="https://creative-community.space/profile/thankyou/card.png">

  <link rel="icon" href="/ver/icon/favicon.png" type="image/png">
  <link rel="stylesheet" href="/ver/css/menu.css" />
  <script src="/ver/js/menu.js"></script>
  <script type="text/javascript">
    if (/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent)) {
      location.assign('touch.html')
    }
    menuJSON('index.json')
  </script>

  <link rel="stylesheet" href="style.css?v=1.0" />
  <style>
    #sketch {
      filter: invert();
    }

    #hello {
      display: grid;
      place-items: center;
      padding: 1rem;
      position: fixed;
      top: 0;
      left: 0;
      right: 0;
      width: 100%;
      height: 100vh;
      max-height: -webkit-fill-available;
      pointer-events: none;
      user-select: none;
      z-index: 10;
    }

    #hello h1,
    #hello section {
      color: #fff;
      margin: 1rem;
    }

    #hello h1 {
      font-family: "Times New Roman", serif;
      font-weight: 500;
      font-size: 200%;
    }

    #hello a {
      border: 0.1rem solid;
      border-radius: 3rem;
      display: inline-block;
      font-size: 125%;
      text-decoration: none;
      padding: 0.5rem 0.75rem;
      margin: 0.25rem 0.5rem 0.25rem 0;
      pointer-events: auto;
      user-select: auto;
    }

    #hello h1 sup,
    #hello section {
      font-family: "ipag", "Arial Narrow", monospace;
    }

    #hello h1 sup {
      font-size: 55%;
    }
  </style>
  <link rel="stylesheet" href="www.css" media="print" />
</head>

<body>
  <header id="menu" class="hsl" hidden>
    <button><b></b></button>
    <menu id="contents">
      <a href="#" onclick="window.history.back(); return false;">
        <p>creative-community.space</p>
        <u>↩︎</u>
      </a>
    </menu>
  </header>

  <main id="hello">
    <h1>
      <sup>Thank You for Visiting</sup><br />
      <i class="hsl">Your Drawing is Seems So Beautiful</i>
    </h1>
    <section>
      <p>
        あなたの書いた落書きをPDFに出力する<br />
        <a class="hsl" href="#" onclick="window.print();">📄</a>
        をクリック or ⌘ + P → 出力先 「PDFに保存」
      </p>
      <p>あなたが描いた落書きを右クリックし「名前をつけて画像を保存…」？！</p>
    </section>
  </main>

  <main id="www" hidden>
    <section class="hsl">
      <p class="cc">Drawing by</p>
      <p class="cc">
        IP <?php echo $_SERVER['REMOTE_ADDR']; ?>
      </p>
    </section>
    <aside>
      <h2>
        OMG!<br />
        <i>Your Drawing is Seems So Beautiful</i><br />
        Let's <i>Print to PDF</i> and <i>Send it</i> to us !!<br />
        <a class="cc" href="mailto:pehu@creative-community.space">pehu@creative-community.space</a> *
      </h2>
      <p class="cc">creative-community.space</p>
    </aside>
  </main>

  <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
  <script src="sketch.js"></script>
  <div id="sketch"></div>
  <p class="hue hsl">Hue <span id="huecount"></span></p>
  <p class="saturation hsl">Saturation <span id="saturationcount"></span></p>
  <p class="lightness hsl">Lightness <span id="lightnesscount"></span></p>
  <script src="hsl.js"></script>

  <script type="text/javascript">
    const COLOURS = ['#111'];
    let radius = 0;

    Sketch.create({
      container: document.getElementById('sketch'),
      autoclear: false,
      retina: 'auto',

      setup: function() {
        console.log('setup')
      },
      update: function() {
        radius = 2 + abs(sin(this.millis * 0.002) * 25)
      },

      touchmove: function() {

        for (let i = this.touches.length - 1, touch; i >= 0; i--) {
          touch = this.touches[i];
          this.lineCap = 'round';
          this.lineJoin = 'round';
          this.fillStyle = this.strokeStyle = COLOURS[i % COLOURS.length];
          this.lineWidth = radius;

          this.beginPath()
          this.moveTo(touch.ox, touch.oy)
          this.lineTo(touch.x, touch.y)
          this.stroke()
        }
      }
    });
  </script>
</body>

</html>