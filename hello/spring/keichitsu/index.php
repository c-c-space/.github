<?php
$season = "spring";
$sekki = "keichitsu";
$seasonName = "春";
$sekkiName = "啓蟄";
$date = "March 5 - March 19";
$description = "Insects emerge from the ground";
$hello = "冬眠をしていた虫が穴から出てくる頃。蝶々が飛びはじめ、柳の若芽が芽吹き、蕗のとうの花や桃の花が咲く頃。";

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
        <small>3月5日 ~ 3月9日頃</small><br/>
        <ruby>
          冬籠 <rp>(</rp><rt>ふゆごも</rt><rp>)</rp>
        </ruby>
        りの
        <ruby>
          虫 <rp>(</rp><rt>むし</rt><rp>)</rp>
        </ruby>
        が
        <ruby>
          出 <rp>(</rp><rt>で</rt><rp>)</rp>
        </ruby>
        て
        <ruby>
          来 <rp>(</rp><rt>く</rt><rp>)</rp>
        </ruby>
        る
      </p>
      <p>
        <small>3月10日 ~ 3月14日頃</small><br/>
        <ruby>
          桃 <rp>(</rp><rt>もも</rt><rp>)</rp>
        </ruby>
        の
        <ruby>
          花 <rp>(</rp><rt>はな</rt><rp>)</rp>
        </ruby>
        が
        <ruby>
          咲 <rp>(</rp><rt>さ</rt><rp>)</rp>
        </ruby>
        き
        <ruby>
          始 <rp>(</rp><rt>はじ</rt><rp>)</rp>
        </ruby>
        める
      </p>
      <p>
        <small>3月15日 ~ 3月19日頃</small><br/>
        <ruby>
          青虫 <rp>(</rp><rt>あおむし</rt><rp>)</rp>
        </ruby>
        が
        <ruby>
          羽化 <rp>(</rp><rt>うか</rt><rp>)</rp>
        </ruby>
        して
        <ruby>
          紋白蝶 <rp>(</rp><rt>もんしろちょう</rt><rp>)</rp>
        </ruby>
        になる
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
            <code>March 4 - March 8</code>
          </p>
          <p>
            <button type="button" data-name="Daniel" lang="en-GB" data-pitch="0.9" data-rate="0.9" data-hello="Insects come out from their winter cages">
              蟄虫啓戸 <i>Sugomori mushito o hiraku</i>
            </button>
          </p>
        </li>
        <li>
          <p>
            <code>March 5 - March 14</code>
          </p>
          <p>
            <button type="button" data-name="Daniel" lang="en-GB" data-pitch="0.9" data-rate="0.9" data-hello="Peach blossoms appear">
              桃始笑 <i>Momo hajimete saku</i>
            </button>
          </p>
        </li>
        <li>
          <p>
            <code>March 15 - March 19</code>
          </p>
          <p>
            <button type="button" data-name="Daniel" lang="en-GB" data-pitch="0.9" data-rate="0.9" data-hello="Green caterpillars become white butterflies">
              菜虫化蝶 <i>Namushi chō to naru</i>
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
