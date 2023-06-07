<?php
$season = "summer";
$sekki = "shousho";
$seasonName = "夏";
$sekkiName = "小暑";
$date = "July 7 - July 22";
$description = "End of the rainy season";
$hello = "梅雨明けが近く、本格的な暑さが始まる集中豪雨のシーズン。蓮の花が咲き、蝉の合唱が始まる「暑中見舞い」を出す頃。";

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
        <small>7月7日 ~ 7月12日頃</small><br/>
        <ruby>
          暖 <rp>(</rp><rt>あたたか</rt><rp>)</rp>
        </ruby>
        い
        <ruby>
          風 <rp>(</rp><rt>かぜ</rt><rp>)</rp>
        </ruby>
        が
        <ruby>
          吹 <rp>(</rp><rt>ふ</rt><rp>)</rp>
        </ruby>
        いて
        <ruby>
          来 <rp>(</rp><rt>く</rt><rp>)</rp>
        </ruby>
        る
      </p>
      <p>
        <small>7月13日 ~ 7月17日頃</small><br/>
        <ruby>
          蓮 <rp>(</rp><rt>はす</rt><rp>)</rp>
        </ruby>
        の
        <ruby>
          花 <rp>(</rp><rt>はな</rt><rp>)</rp>
        </ruby>
        が
        <ruby>
          開 <rp>(</rp><rt>ひら</rt><rp>)</rp>
        </ruby>
        き
        <ruby>
          始 <rp>(</rp><rt>はじ</rt><rp>)</rp>
        </ruby>
        める
      </p>
      <p>
        <small>7月18日 ~ 7月22日頃</small><br/>
        <ruby>
          鷹 <rp>(</rp><rt>たか</rt><rp>)</rp>
        </ruby>
        の
        <ruby>
          幼鳥 <rp>(</rp><rt>ようちょう</rt><rp>)</rp>
        </ruby>
        が
        <ruby>
          飛 <rp>(</rp><rt>と</rt><rp>)</rp>
        </ruby>
        ぶことを
        <ruby>
          覚 <rp>(</rp><rt>おぼ</rt><rp>)</rp>
        </ruby>
        える
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
            <code>July 7 - July 12</code>
          </p>
          <p>
            <button type="button" data-name="Daniel" lang="en-GB" data-pitch="0.9" data-rate="0.9" data-hello="Warm breezes">
              温風至 <i>Atsukaze itaru</i>
            </button>
          </p>
        </li>
        <li>
          <p>
            <code>July 13 - July 17</code>
          </p>
          <p>
            <button type="button" data-name="Daniel" lang="en-GB" data-pitch="0.9" data-rate="0.9" data-hello="Lotus flowers begin to open">
              蓮始開 <i>Hasu hajimete hiraku</i>
            </button>
          </p>
        </li>
        <li>
          <p>
            <code>July 18 - July 22</code>
          </p>
          <p>
            <button type="button" data-name="Daniel" lang="en-GB" data-pitch="0.9" data-rate="0.9" data-hello="Young hawks learn to fly">
              鷹乃学習 <i>Taka sunawachi waza o narau</i>
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
  <script src="../color.js"></script>
  <script type="text/javascript">
  let namesForm = document.querySelectorAll('#bgcolor, #color')
  for (const names of namesForm) {
    Object.entries(colors).forEach(eachArr => {
      let option = document.createElement('option')
      option.textContent = Object.values(eachArr)[0]
      option.value = Object.values(eachArr)[1]
      names.appendChild(option)
    })
  }
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
