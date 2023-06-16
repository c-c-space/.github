<?php
$season = "spring";
$sekki = "usui";
$seasonName = "春";
$sekkiName = "雨水";
$date = "February 19 - March 4";
$description = "Snow melts into water";
$hello = "空から降るものが雪から雨に替わる頃。深く積もった雪も融け始める。草木がほんのり色づく様子や、春霞を楽しめる季節。";

$title = $sekkiName .' | '. $date;
$site = 'http' . (isset($_SERVER['HTTPS']) ? 's' : '') . '://' . "{$_SERVER['HTTP_HOST']}";
$url = "{$site}" . "{$_SERVER['REQUEST_URI']}";

require_once('../../all/head.php');
require('../../all/greeting.php');
?>

<body>
  <script src="/js/menu.js"></script>
  <header id="menu" class="bgcolor" hidden>
    <button class="color bgcolor" id="js-button"><b></b></button>
    <nav id="contents">
      <a href="/hello/">
        <i>Speech to Text to Text to Speech</i>
        <p><b><?php echo $greeting; ?></b></p>
        <u>↩︎</u>
      </a>
      <a href="/hello/<?php echo $season; ?>/">
        <i><?php echo $sekkiName; ?> is the season in</i>
        <p><b><?php echo $seasonName; ?></b> <?php echo $season; ?></p>
      </a>
    </nav>
  </header>

  <main id="hello" hidden>
    <section id="readme">
      <input type="button" class="color bgcolor" onclick="ChangeHidden()" value="<?php echo $sekkiName; ?> <?php echo $sekki; ?>">
      <p>
        <small>2月19日 ~ 2月23日頃</small><br/>
        <ruby>
          雨 <rp>(</rp><rt>あめ</rt><rp>)</rp>
        </ruby>
        が
        <ruby>
          降 <rp>(</rp><rt>ふ</rt><rp>)</rp>
        </ruby>
        って
        <ruby>
          土 <rp>(</rp><rt>つち</rt><rp>)</rp>
        </ruby>
        が
        <ruby>
          湿 <rp>(</rp><rt>しめ</rt><rp>)</rp>
        </ruby>
        り
        <ruby>
          気 <rp>(</rp><rt>け</rt><rp>)</rp>
        </ruby>
        を
        <ruby>
          含 <rp>(</rp><rt>ふく</rt><rp>)</rp>
        </ruby>
        む
      </p>
      <p>
        <small>2月24日 ~ 2月28日頃</small><br/>
        <ruby>
          霞 <rp>(</rp><rt>かすみ</rt><rp>)</rp>
        </ruby>
        がたなびき
        <ruby>
          始 <rp>(</rp><rt>はじ</rt><rp>)</rp>
        </ruby>
        める
      </p>
      <p>
        <small>2月29日 ~ 3月4日頃</small><br/>
        <ruby>
          草木 <rp>(</rp><rt>くさき</rt><rp>)</rp>
        </ruby>
        が
        <ruby>
          芽吹 <rp>(</rp><rt>めぶ</rt><rp>)</rp>
        </ruby>
        き
        <ruby>
          始 <rp>(</rp><rt>はじ</rt><rp>)</rp>
        </ruby>
        める
      </p>
    </section>
    <hr>
    <?php require('../../all/72ko.html');?>
  </main>

  <main id="log">
    <button type="button" id="enter-btn" onClick="ChangeHidden()">七十二候 72 kō</button>
    <hr>
    <div>
      <h1>
        <b>
          <?php echo $sekkiName;?> <?php echo $sekki;?>
        </b><br/>
        <code id="lastModified"><?php echo $date;?></code>
      </h1>
      <h2><?php echo $description;?></h2>
    </div>
    <section>
      <ul id="ko">
        <li>
          <p>
            <code>February 19 - February 23</code>
          </p>
          <p>
            <button type="button" data-name="Daniel" lang="en-GB" data-pitch="0.9" data-rate="0.9" data-hello="Rain and moist soil">
              土脉潤起 <i>Tsuchi no shō uruoi okoru</i>
            </button>
          </p>
        </li>
        <li>
          <p>
            <code>February 24 - February 28</code>
          </p>
          <p>
            <button type="button" data-name="Daniel" lang="en-GB" data-pitch="0.9" data-rate="0.9" data-hello="Mist starts to linger">
              霞始靆 <i>Kasumi hajimete tanabiku</i>
            </button>
          </p>
        </li>
        <li>
          <p>
            <code>February 29 - March 4</code>
          </p>
          <p>
            <button type="button" data-name="Daniel" lang="en-GB" data-pitch="0.9" data-rate="0.9" data-hello="Plants begin to sprout">
              草木萌動 <i>Sōmoku mebae izuru</i>
            </button>
          </p>
        </li>
      </ul>
    </section>
    <?php
    function h($str) {
      return htmlspecialchars($str, ENT_QUOTES, 'UTF-8');
    }
    require('../../all/log.php');
    ?>
  </main>
  <?php require('../../all/controls.html'); ?>
  <script src="../../js/log.js"></script>

  <dialog id="modal" class="color bgcolor">
    <h3>
      <small><?php echo $date;?></small><br/>
      <?php echo $sekkiName;?> <?php echo $sekki;?>
    </h3>
    <button class="color bgcolor" id="closeButton">×</button>
    <p><?php echo $description;?></p>
    <p><?php echo $hello;?></p>
    <?php require('../../all/timeframe.html'); ?>
  </dialog>

  <script src="../../all/controls.js"></script>
  <script type="text/javascript">
  colorJSON('../color.json')

  function ChangeHidden() {
    const mainAll = document.querySelectorAll('main');
    mainAll.forEach(main => {
      if (main.hidden == false) {
        main.hidden = true;
      } else {
        main.hidden = false;
      }
    })
  };
  </script>
  <script src="../../../profile/js/setStyles.js"></script>
</body>
</html>
