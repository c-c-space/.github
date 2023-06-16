<?php
$season = "autumn";
$sekki = "kanro";
$seasonName = "秋";
$sekkiName = "寒露";
$date = "October 8 - October 23";
$description = "Weather becomes colder";
$hello = "夜が長くなり露がつめたく感じられる頃。菊の花が咲き始め、山の木々の葉は紅葉の準備に入る。安定して秋晴れの日が多くなる。";

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
        <small>10月8日 ~ 10月13日頃</small><br/>
        <ruby>
          雁 <rp>(</rp><rt>がん</rt><rp>)</rp>
        </ruby>
        が
        <ruby>
          飛来 <rp>(</rp><rt>ひらい</rt><rp>)</rp>
        </ruby>
        し
        <ruby>
          始 <rp>(</rp><rt>はじ</rt><rp>)</rp>
        </ruby>
        める
      </p>
      <p>
        <small>10月14日 ~ 10月18日頃</small><br/>
        <ruby>
          菊 <rp>(</rp><rt>きく</rt><rp>)</rp>
        </ruby>
        の
        <ruby>
          花 <rp>(</rp><rt>はな</rt><rp>)</rp>
        </ruby>
        が
        <ruby>
          咲 <rp>(</rp><rt>さ</rt><rp>)</rp>
        </ruby>
        く
      </p>
      <p>
        <small>10月19日 ~ 10月23日頃</small><br/>
        <ruby>
          蟋蟀 <rp>(</rp><rt>きりぎりす</rt><rp>)</rp>
        </ruby>
        が
        <ruby>
          戸 <rp>(</rp><rt>と</rt><rp>)</rp>
        </ruby>
        の
        <ruby>
          辺 <rp>(</rp><rt>あた</rt><rp>)</rp>
        </ruby>
        りで
        <ruby>
          鳴 <rp>(</rp><rt>な</rt><rp>)</rp>
        </ruby>
        く
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
            <code>October 8 - October 13</code>
          </p>
          <p>
            <button type="button" data-name="Daniel" lang="en-GB" data-pitch="0.9" data-rate="0.9" data-hello="Geese fly south">
              鴻雁来 <i>Kōgan kitaru</i>
            </button>
          </p>
        </li>
        <li>
          <p>
            <code>October 14 - October 18</code>
          </p>
          <p>
            <button type="button" data-name="Daniel" lang="en-GB" data-pitch="0.9" data-rate="0.9" data-hello="Chrysanthemum flowers bloom">
              菊花開 <i>Kiku no hana hiraku</i>
            </button>
          </p>
        </li>
        <li>
          <p>
            <code>October 19 - October 23</code>
          </p>
          <p>
            <button type="button" data-name="Daniel" lang="en-GB" data-pitch="0.9" data-rate="0.9" data-hello="Crickets chirp near doors">
              蟋蟀在戸 <i>Kirigirisu to ni ari</i>
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
