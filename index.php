<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <meta name="format-detection" content="telephone=no" />
  <script src="js/menu.js"></script>
  <script src="js/index.js"></script>
  <script src="js/modal.js"></script>
  <script src="js/userMedia.js"></script>
  <script>
    menuJSON('index.json')
  </script>

  <!--og:meta-->
  <meta content="website" property="og:type">
  <title>Index | creative-community.space</title>
  <meta content="Index | creative-community.space" property="og:title">
  <meta content="このウェブサイトは、誰にでもできることを自分らしく行うことの美しさを形にするコミュニティサイトです。" name="description">
  <meta content="このウェブサイトは、誰にでもできることを自分らしく行うことの美しさを形にするコミュニティサイトです。" name="og:description">

  <meta name="author" content="creative-community.space">
  <meta name="reply-to" content="pehu@creative-community.space">

  <!--for Twitter-->
  <meta content="summary_large_image" name="twitter:card">
  <meta content="https://creative-community.space/" property="og:url">
  <meta content="https://creative-community.space/ver/card.png" property="og:image">
  <meta content="https://creative-community.space/ver/card.png" name="twitter:image:src">

  <?php require('ver/icon/all.html'); ?>

  <link rel="stylesheet" href="css/menu.css" />
  <link rel="stylesheet" href="css/index.css" />
  <link rel="stylesheet" href="css/controls.css" />
  <link rel="stylesheet" href="css/modal.css">
  <link rel="stylesheet" href="thankyou/style.css">
  <link rel="stylesheet" href="thankyou/www.css" media="print" />
</head>

<body>
  <header id="menu" class="hsl" hidden>
    <button><b></b></button>
    <menu id="contents">
      <a href="/ver/" target="_parent">
        <p>Index | creative-community.space</p>
        <u>ver.2.1</u>
      </a>
    </menu>
  </header>

  <main id="hello" class="hsl">
    <article>
      <section id="speech">
        <h1>
          <?php require('hello/all/greeting.php'); ?>
          <b>
            <?php echo $greeting; ?>
          </b>
          <br>
          IP <code><?php echo $_SERVER["REMOTE_ADDR"]; ?></code>
        </h1>
        <h2>
          Thank you for visiting
          <u data-id="website">The Website</u>
          <b id="website" class="hide">
            that
            <u data-id="create">Creates</u>
            <b id="create" class="hide">beautiful things through</b>
            <u data-id="communicate">Communication</u>
            <b id="communicate" class="hide">that everyone can do</b>
            <small>このウェブサイトは、誰にでもできることを自分らしく行うことの美しさを形にするコミュニティサイトです。</small>
          </b>
        </h2>
      </section>
      <button type="button" id="submit-btn"></button>
    </article>
    <script src="js/hello.js"></script>
  </main>

  <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
  <script>
    $(function() {
      $("#hello u").on("click", function() {
        let show = $(this).data("id");
        $("#" + show).show(1000);
      })
    });
  </script>

  <main id="yourinfo" class="hsl" hidden>
    <form id="login" method="post">
      <button onclick="openModal()" type="button">あなたの通信情報／ブラウザ等情報</button>
      <p>
        <?php require('profile/yourinfo.php'); ?>
      </p>
      <section>
        <button type="submit" id="enter-btn">Enter</button>
        <button type="button" id="back-btn">Back</button>
      </section>
    </form>
    <script src="js/login.js"></script>
  </main>

  <dialog id="modal">
    <button id="closeModal">Close 閉じる</button>
    <section></section>
  </dialog>

  <footer id="now" class="hsl">
    <time id="showDate" class="cc"></time>
    <time id="showTime" class="cc"></time>
    <script src="js/now.js"></script>
  </footer>
  
  <script src="thankyou/hsl.js"></script>
  <p class="hue hsl" hidden>Hue <span id="huecount"></span></p>
  <p class="saturation hsl" hidden>Saturation <span id="saturationcount"></span></p>
  <p class="lightness hsl" hidden>Lightness <span id="lightnesscount"></span></p>
  <div id="sketch"></div>
  <script src="thankyou/sketch.js"></script>

  <article id="www" hidden></article>

  <script type="text/javascript">
    function forMobile() {
      document.querySelector('#sketch').remove()
    }

    if (/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent)) {
      forMobile()
      console.log("Mobile Detected");
    }

    var isMobile = {
      Android: function() {
        return navigator.userAgent.match(/Android/i);
      },
      BlackBerry: function() {
        return navigator.userAgent.match(/BlackBerry/i);
      },
      iOS: function() {
        return navigator.userAgent.match(/iPhone|iPad|iPod/i);
      },
      Opera: function() {
        return navigator.userAgent.match(/Opera Mini/i);
      },
      Windows: function() {
        return navigator.userAgent.match(/IEMobile/i);
      },
      any: function() {
        return (isMobile.Android() || isMobile.BlackBerry() || isMobile.iOS() || isMobile.Opera() || isMobile.Windows());
      }
    };

    if (isMobile.any()) {
      forMobile()
      console.log("This is a Mobile Device");
    }

    var iOS = (navigator.userAgent.match(/(iPad|iPhone|iPod)/g) ? true : false);
    if (iOS) {
      forMobile()
      console.log('This is a iPad|iPhone|iPod');
    }

    if (!(/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent))) {
      console.log("This is a not Mobile Device");

      fetchHTML('thankyou/www.html', '#www')

      const main = document.querySelector('main');
      main.style.pointerEvents = "none";
      main.style.userSelect = "none";

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
      })
    }
  </script>
</body>

</html>