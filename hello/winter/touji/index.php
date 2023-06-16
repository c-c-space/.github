<?php
$season = "winter";
$sekki = "touji";
$seasonName = "冬";
$sekkiName = "冬至";
$date = "December 22 - January 5";
$description = "The Winter Solstice";
$hello = "冬至日より日が伸び始めることから、古くには年の始点と考えられた。栄養価の高いかぼちゃを食べ、柚子湯に浸かり無病息災を願う。";

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
        <small>12月22日 ~ 12月26日頃</small><br/>
        <ruby>
          夏枯草 <rp>(</rp><rt>かごそう</rt><rp>)</rp>
        </ruby>
        が
        <ruby>
          芽 <rp>(</rp><rt>め</rt><rp>)</rp>
        </ruby>
        を
        <ruby>
          出 <rp>(</rp><rt>だ</rt><rp>)</rp>
        </ruby>
        す
      </p>
      <p>
        <small>12月27日 ~ 12月31日頃</small><br/>
        <ruby>
          大鹿 <rp>(</rp><rt>おおしか</rt><rp>)</rp>
        </ruby>
        が
        <ruby>
          角 <rp>(</rp><rt>つの</rt><rp>)</rp>
        </ruby>
        を
        <ruby>
          落 <rp>(</rp><rt>お</rt><rp>)</rp>
        </ruby>
        とす
      </p>
      <p>
        <small>1月1日 ~ 1月5日頃</small><br/>
        <ruby>
          雪 <rp>(</rp><rt>ゆき</rt><rp>)</rp>
        </ruby>
        の
        <ruby>
          下 <rp>(</rp><rt>した</rt><rp>)</rp>
        </ruby>
        で
        <ruby>
          麦 <rp>(</rp><rt>むぎ</rt><rp>)</rp>
        </ruby>
        が
        <ruby>
          芽 <rp>(</rp><rt>め</rt><rp>)</rp>
        </ruby>
        を
        <ruby>
          出 <rp>(</rp><rt>だ</rt><rp>)</rp>
        </ruby>
        す
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
            <code>December 22 - December 26</code>
          </p>
          <p>
            <button type="button" data-name="Daniel" lang="en-GB" data-pitch="0.9" data-rate="0.9" data-hello="The summer herb sprouts">
              乃東生 <i>Natsukarekusa shōzu</i>
            </button>
          </p>
        </li>
        <li>
          <p>
            <code>December 27 - December 31</code>
          </p>
          <p>
            <button type="button" data-name="Daniel" lang="en-GB" data-pitch="0.9" data-rate="0.9" data-hello="Big deer shed their antlers">
              麋角解 <i>Sawashika no tsuno otsuru</i>
            </button>
          </p>
        </li>
        <li>
          <p>
            <code>January 1 - January 5</code>
          </p>
          <p>
            <button type="button" data-name="Daniel" lang="en-GB" data-pitch="0.9" data-rate="0.9" data-hello="Wheat sprouts under snow">
              雪下出麦 <i>Yuki watarite mugi nobiru</i>
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
