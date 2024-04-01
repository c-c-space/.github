<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <meta name="format-detection" content="telephone=no" />
  <meta name="author" content="creative-community.space">
  <meta name="reply-to" content="pehu@creative-community.space">

  <script src="index.3.1.js"></script>
  <?php require ('ver/icon/all.html'); ?>

  <title>Index | creative-community.space</title>
  <meta name="description" content="このウェブサイトは、誰にでもできることを自分らしく行うことの美しさを形にするコミュニティサイトです。">

  <!-- Facebook Meta Tags -->
  <meta property="og:url" content="https://creative-community.space/">
  <meta property="og:type" content="website">
  <meta property="og:title" content="Index | creative-community.space">
  <meta property="og:description" content="このウェブサイトは、誰にでもできることを自分らしく行うことの美しさを形にするコミュニティサイトです。">
  <meta property="og:image" content="https://creative-community.space/ver/card.png">

  <!-- Twitter Meta Tags -->
  <meta name="twitter:card" content="summary_large_image">
  <meta property="twitter:domain" content="creative-community.space">
  <meta property="twitter:url" content="https://creative-community.space/">
  <meta name="twitter:title" content="Index | creative-community.space">
  <meta name="twitter:description" content="このウェブサイトは、誰にでもできることを自分らしく行うことの美しさを形にするコミュニティサイトです。">
  <meta name="twitter:image" content="https://creative-community.space/ver/card.png">

  <script src="ver/js/menu.js"></script>
  <script src="ver/js/modal.js"></script>
  <script src="profile/userMedia/script.js"></script>

  <script>
    menuJSON('index.json')
  </script>

  <link rel="stylesheet" href="ver/css/menu.css" />
  <link rel="stylesheet" href="ver/css/index.css" />
  <link rel="stylesheet" href="ver/css/modal.v1.css">
  <link rel="stylesheet" href="ver/css/controls.css" />
  <link rel="stylesheet" href="profile/thankyou/style.css">
  <link rel="stylesheet" href="profile/thankyou/www.css" media="print" />

  <!-- WHOIS -->
  <script src="members/assets/js/script.v1.0.js"></script>
  <script src="members/assets/js/localStorage.js"></script>
  <link rel="stylesheet" href="members/assets/css/style.css" />
  <link rel="stylesheet" href="members/assets/css/submitForm.css" />
</head>

<body>
  <header id="menu" class="hsl" hidden>
    <button><b></b></button>
    <menu id="contents">
      <a href="/ver/" target="_parent">
        <p>Index | creative-community.space</p>
        <u>ver.3.1</u>
      </a>
    </menu>
  </header>

  <main id="hello" class="hsl">
    <article>
      <section id="speech">
        <h1>
          <?php require ('hello/greeting.php'); ?>
          <strong><?php echo $greeting; ?></strong>
          <br>
          IP <code><?php echo $_SERVER["REMOTE_ADDR"]; ?></code>
        </h1>
        <h2>
          Thank you for visiting
          <u data-id="website">The Website</u>
          <strong id="website" class="hide">
            that
            <u data-id="create">Creates</u>
            <b id="create" class="hide">beautiful things through</b>
            <u data-id="communicate">Communication</u>
            <b id="communicate" class="hide">that everyone can do</b>
            <small>このウェブサイトは、誰にでもできることを自分らしく行うことの美しさを形にするコミュニティサイトです。</small>
          </strong>
        </h2>
      </section>
      <button type="button" id="submit-btn"></button>
    </article>

    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src="ver/js/hello.js"></script>
    <script>
      $(function() {
        $("#hello u").on("click", function() {
          let show = $(this).data("id");
          $("#" + show).show(1000);
        })
      });
    </script>
  </main>

  <main id="yourinfo" class="hsl" hidden>
    <form id="login" method="post">
      <button onclick="openModal()" type="button">あなたの通信情報／ブラウザ等情報</button>
      <p><?php require ('profile/yourinfo.php'); ?></p>
      <section>
        <button type="submit" id="enter-btn">Enter</button>
        <button type="button" id="back-btn">Back</button>
      </section>
    </form>
    <script src="ver/js/login.js"></script>
  </main>

  <dialog id="modal">
    <button id="closeModal">Close 閉じる</button>
    <section>
      <aside id="whois">
          <p class="age">0.000000000</p>
          <p class="data">
              <span class="name">WHOIS</span>
              <time>DD MMM YYYY</time>
          </p>
      </aside>

      <form id="form" method="post" action="#" hidden>
          <section>
              <fieldset class="submit">
                  <legend class="label">Your Name</legend>
                  <input type="text" name="name" id="name" required>
                  <span class="validity"></span>
              </fieldset>
              <fieldset class="submit">
                  <legend class="label">Email</legend>
                  <input type="email" name="email" id="email" required>
                  <span class="validity"></span>
              </fieldset>
          </section>

          <fieldset class="submit">
              <legend class="label">Date of birth</legend>
              <p id="dateValue">
                  <time class="year">0000</time>
                  <time class="month">00</time>
                  <time class="day">00</time>
                  <time class="time">00:00</time>
              </p>
              <select id="yearForm" name="year" required>
                  <option selected disabled>YYYY</option>
              </select>
              <select id="monthForm" name="month" required>
                  <option selected disabled>MMM</option>
                  <option value="01">JAN</option>
                  <option value="02">FEB</option>
                  <option value="03">MAR</option>
                  <option value="04">APR</option>
                  <option value="05">MAY</option>
                  <option value="06">JUN</option>
                  <option value="07">JUL</option>
                  <option value="08">AUG</option>
                  <option value="09">SEP</option>
                  <option value="10">OCT</option>
                  <option value="11">NOV</option>
                  <option value="12">DEC</option>
              </select>
              <select id="dateForm" name="day" required>
                  <option selected disabled>DD</option>
              </select>
              <input type="time" name="time" id="timeForm" required>
          </fieldset>

          <nav>
              <button type="submit" class="submit">Submit</button>
              <input type="button" onclick="whoisForm()" value="Close">
          </nav>
      </form>
    </section>
  </dialog>

  <footer id="now" class="hsl">
    <time id="showDate" class="cc"></time>
    <time id="showTime" class="cc"></time>
    <script src="ver/js/now.js"></script>
  </footer>

  <script src="profile/thankyou/hsl.js"></script>
  <p class="hue hsl" hidden>Hue <span id="huecount"></span></p>
  <p class="saturation hsl" hidden>Saturation <span id="saturationcount"></span></p>
  <p class="lightness hsl" hidden>Lightness <span id="lightnesscount"></span></p>
  <div id="sketch"></div>
  <script src="profile/thankyou/sketch.js"></script>

  <article id="www" hidden></article>

  <script type="text/javascript">
    function forMobile() {
      window.addEventListener("load", (event) => {
        document.querySelector('#sketch').remove()
      });
    }

    if (!/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent)) {
      const pc = document.querySelector('#hello')
      pc.style.pointerEvents = "none";
      pc.style.userSelect = "none";

      const COLOURS = ['#EEE'];
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
      })

      fetchHTML('www.html', '#www')
      console.log("This is a not Mobile Device")
    } else {
      forMobile()
      console.log("Mobile Detected")
    }

    var isMobile = {
      Android: function() {
        return navigator.userAgent.match(/Android/i)
      },
      BlackBerry: function() {
        return navigator.userAgent.match(/BlackBerry/i)
      },
      iOS: function() {
        return navigator.userAgent.match(/iPhone|iPad|iPod/i)
      },
      Opera: function() {
        return navigator.userAgent.match(/Opera Mini/i)
      },
      Windows: function() {
        return navigator.userAgent.match(/IEMobile/i)
      },
      any: function() {
        return (isMobile.Android() || isMobile.BlackBerry() || isMobile.iOS() || isMobile.Opera() || isMobile.Windows())
      }
    };

    if (isMobile.any()) {
      forMobile()
      console.log("This is a Mobile Device")
    }

    var iOS = (navigator.userAgent.match(/(iPad|iPhone|iPod)/g) ? true : false)
    if (iOS) {
      forMobile()
      console.log('This is a iPad|iPhone|iPod')
    }
  </script>
</body>

</html>