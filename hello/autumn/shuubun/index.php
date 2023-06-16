<?php
$season = "autumn";
$sekki = "shuubun";
$seasonName = "秋";
$sekkiName = "秋分";
$date = "September 23 - October 7";
$description = "The Autumn Equinox";
$hello = "「暑さ寒さも彼岸まで」の言葉通り、暑い日に代わり冷気を感ずる日が増えはじめ、秋が深まっていく。秋の七草が咲き揃う頃。";

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
        <small>9月23日 ~ 9月27日頃</small><br/>
        <ruby>
          雷 <rp>(</rp><rt>かみなり</rt><rp>)</rp>
        </ruby>
        が
        <ruby>
          鳴 <rp>(</rp><rt>な</rt><rp>)</rp>
        </ruby>
        り
        <ruby>
          響 <rp>(</rp><rt>ひび</rt><rp>)</rp>
        </ruby>
        かなくなる
      </p>
      <p>
        <small>9月28日 ~ 10月2日頃</small><br/>
        <ruby>
          虫 <rp>(</rp><rt>むし</rt><rp>)</rp>
        </ruby>
        が
        <ruby>
          土中 <rp>(</rp><rt>どちゅう</rt><rp>)</rp>
        </ruby>
        に
        <ruby>
          掘 <rp>(</rp><rt>ほ</rt><rp>)</rp>
        </ruby>
        った
        <ruby>
          穴 <rp>(</rp><rt>あな</rt><rp>)</rp>
        </ruby>
        をふさぐ
      </p>
      <p>
        <small>10月3日 ~ 10月7日頃</small><br/>
        <ruby>
          田畑 <rp>(</rp><rt>たはた</rt><rp>)</rp>
        </ruby>
        の
        <ruby>
          水 <rp>(</rp><rt>みず</rt><rp>)</rp>
        </ruby>
        を
        <ruby>
          干 <rp>(</rp><rt>ほ</rt><rp>)</rp>
        </ruby>
        し
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
        <b><?php echo $sekkiName;?> <?php echo $sekki;?></b><br/>
        <code id="lastModified"><?php echo $date;?></code>
      </h1>
      <h2><?php echo $description;?></h2>
    </div>
    <section>
      <ul id="ko">
        <li>
          <p>
            <code>September 23 - September 27</code>
          </p>
          <p>
            <button type="button" data-name="Daniel" lang="en-GB" data-pitch="0.9" data-rate="0.9" data-hello="Thunder stops ringing">
              雷乃収声 <i>Kaminari sunawachi koe o osamu</i>
            </button>
          </p>
        </li>
        <li>
          <p>
            <code>September 28 - October 2</code>
          </p>
          <p>
            <button type="button" data-name="Daniel" lang="en-GB" data-pitch="0.9" data-rate="0.9" data-hello="Insects go underground and fill holes">
              蟄虫坏戸 <i>Mushi kakurete to o fusagu</i>
            </button>
          </p>
        </li>
        <li>
          <p>
            <code>October 3 - October 7</code>
          </p>
          <p>
            <button type="button" data-name="Daniel" lang="en-GB" data-pitch="0.9" data-rate="0.9" data-hello="Farmers drain water from the fields">
              水始涸 <i>Mizu hajimete karuru</i>
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
