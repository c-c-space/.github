<?php
$season = "summer";
$sekki = "shouman";
$seasonName = "夏";
$sekkiName = "小満";
$date = "May 20 - Jun 4";
$description = "Plants come into full leaf";
$hello = "あらゆる生命が満ちていく頃。陽気がよくなり、草木などの生物が次第に生長して生い茂る。西日本でははしり梅雨が現れる。";

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
        <small>5月20日 ~ 5月25日頃</small><br/>
        <ruby>
          蚕 <rp>(</rp><rt>かいこ</rt><rp>)</rp>
        </ruby>
        が
        <ruby>
          桑 <rp>(</rp><rt>くわ</rt><rp>)</rp>
        </ruby>
        を
        <ruby>
          盛 <rp>(</rp><rt>さか</rt><rp>)</rp>
        </ruby>
        んに
        <ruby>
          食 <rp>(</rp><rt>た</rt><rp>)</rp>
        </ruby>
        べ
        <ruby>
          始 <rp>(</rp><rt>はじ</rt><rp>)</rp>
        </ruby>
        める
      </p>
      <p>
        <small>5月26日 ~ 5月30日頃</small><br/>
        <ruby>
          紅花 <rp>(</rp><rt>べにばな</rt><rp>)</rp>
        </ruby>
        が
        <ruby>
          盛 <rp>(</rp><rt>さか</rt><rp>)</rp>
        </ruby>
        んに
        <ruby>
          咲 <rp>(</rp><rt>さ</rt><rp>)</rp>
        </ruby>
        く
      </p>
      <p>
        <small>5月31日 ~ 6月4日頃</small><br/>
        <ruby>
          麦 <rp>(</rp><rt>むぎ</rt><rp>)</rp>
        </ruby>
        が
        <ruby>
          熟 <rp>(</rp><rt>じゅく</rt><rp>)</rp>
        </ruby>
        し
        <ruby>
          麦秋 <rp>(</rp><rt>ばくしゅう</rt><rp>)</rp>
        </ruby>
        となる
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
            <code>May 20 - May 25</code>
          </p>
          <p>
            <button type="button" data-name="Daniel" lang="en-GB" data-pitch="0.9" data-rate="0.9" data-hello="Silkworms start eating mulberry leaves">
              蚕起食桑 <i>Kaiko okite kuwa o hamu</i>
            </button>
          </p>
        </li>
        <li>
          <p>
            <code>May 26 - May 30</code>
          </p>
          <p>
            <button type="button" data-name="Daniel" lang="en-GB" data-pitch="0.9" data-rate="0.9" data-hello="Safflowers in full bloom">
              紅花栄 <i>Benibana sakau</i>
            </button>
          </p>
        </li>
        <li>
          <p>
            <code>May 31 - Jun 4</code>
          </p>
          <p>
            <button type="button" data-name="Daniel" lang="en-GB" data-pitch="0.9" data-rate="0.9" data-hello="Wheat ripens for autumn harvest">
              麦秋至 <i>Mugi no toki itaru</i>
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
