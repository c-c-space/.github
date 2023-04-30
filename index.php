<?php
$ip = $_SERVER["REMOTE_ADDR"];
$hqdn = $_SERVER["REMOTE_PORT"];
$os = $_SERVER["HTTP_USER_AGENT"];
?>

<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="format-detection" content="telephone=no" />
  <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
  <script src="js/index.js" async></script>
  <script src="js/hello.js"></script>
  <script src="js/readyState.js"></script>
  <link rel="stylesheet" href="hello/style.css" />
  <link rel="stylesheet" href="hello/css/controls.css" />
  <link rel="stylesheet" href="ver/log/style.css" />
  <link rel="stylesheet" href="thankyou/style.css" />
  <link rel="stylesheet" href="thankyou/print.css" media="print"/>
  <link rel="stylesheet" href="hello/css/mobile.css" media="screen and (max-width: 750px)" />
  <style>
  #js-button,
  #contents a,
  main {
    filter: invert();
  }

  #menu label {
    text-shadow:
    1px 1px 0 #fff,
    2px 2px 0 #fff,
    3px 3px 0 #fff;
  }

  header,
  main,
  #sketch,
  #userMedia {
    mix-blend-mode: difference;
  }
  </style>
  <link rel="icon" href="profile/android.png" sizes="192x192" type="image/png">
  <link rel="apple-touch-icon-precomposed" href="profile/apple.png" sizes="180x180" type="image/png">
</head>
<body>
  <script src="/js/menu.js"></script>
  <header id="menu" hidden>
    <button id="js-button"><b></b></button>
    <nav id="contents">
      <a href="/" target="_parent">
        <p><b>Index | creative-community.space</b></p>
        <u>準備中</u>
      </a>
    </nav>
  </header>

  <main id="hello">
    <section id="readme">
      <h1>
        <b>Hello こんにちは</b><br />
        IP <code><?php echo $ip; ?></code>
      </h1>
      <p>Thank you for visiting
        <u data-id="website">The Website</u>
        <b id="website" class="hide">that
          <u data-id="create">Creates</u>
          <b id="create" class="hide">beautiful things through</b>
          <u data-id="communicate">Communication</u>
          <b id="communicate" class="hide">that everyone can do</b>
          <br />
          <small>このウェブサイトは、誰にでもできることを自分らしく行うことの美しさを形にするコミュニティサイトです。</small>
        </b>
      </p>
      <script>
      $(function(){
        $("#readme u").on("click", function(){
          let show = $(this).data("id");
          $("#" + show).show(1000);
        })
      });
      </script>
    </section>
  </main>

  <main id="yourinfo" hidden>
    <form method="post">
      <strong>あなたの通信情報／ブラウザ等情報</strong>
      <p>
        <?php
        echo "<span>IP <code id='ip'>" . $ip . "</code></span>";
        echo "<span>PORT <code id='hqdn'>" . $hqdn . "</code></span>";
        echo "<span>USER AGENT <code id='os'>" . $os . "</code></span>";
        ?>
      </p>
      <section>
        <button type="button" id="enter-btn" onclick="setLOG()">Enter</button>
        <button type="button" id="back-btn" onclick="changeHidden()">Back</button>
      </section>
    </form>
    <script src="js/log.js"></script>
  </main>

  <section id="you">
    <img class="hsl" src="profile/qr.png">
    <div>
      <p class="cc">creative-community.space</p>
      <p class="cc">come on join us :)</p>
    </div>
  </section>
  <aside id="submit">
    <h2 class="cc">
      <strong>
        This is The Website that<br />
        Creates beautiful things through<br />
        Communication that everyone can do<br />
      </strong>
    </h2>
    <small class="cc">このウェブサイトは、誰にでもできることを自分らしく行うことの美しさを形にするコミュニティサイトです。</small>
  </aside>

  <footer id="now" class="hsl"></footer>
  <script src="js/now.js"></script>

  <div id="sketch">
    <script src="thankyou/hsl.js"></script>
    <script src="thankyou/sketch.js"></script>
  </div>
  <script type="text/javascript">
  const COLOURS = ['#EEE'];
  let radius = 0;

  Sketch.create({
    container: document.getElementById('sketch'),
    autoclear: false,
    retina: 'auto',

    setup: function() {
      console.log('setup');
    },
    update: function() {
      radius = 2 + abs(sin(this.millis * 0.002) * 25);
    },

    touchmove: function() {
      for (let i = this.touches.length - 1, touch; i >= 0; i--) {
        touch = this.touches[i];
        this.lineCap = 'round';
        this.lineJoin = 'round';
        this.fillStyle = this.strokeStyle = COLOURS[i % COLOURS.length];
        this.lineWidth = radius;

        this.beginPath();
        this.moveTo(touch.ox, touch.oy);
        this.lineTo(touch.x, touch.y);
        this.stroke();
      }
    }
  });
  </script>
</body>
</html>
