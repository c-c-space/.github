<?php
$season = "summer";
$sekki = "rikka";
$seasonName = "夏";
$sekkiName = "立夏";
$date = "May 5 - May 19";
$description = "The Beginning of Summer";
$hello = "一年のうちで、もっとも過ごしやすい節。野山が新緑に彩られ、夏の気配が感じられるようになる。かえるが鳴き始め、竹の子が生えてくる頃。";

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
        <small>5月5日 ~ 5月9日頃</small><br/>
        <ruby>
          蛙 <rp>(</rp><rt>かえる</rt><rp>)</rp>
        </ruby>
        が
        <ruby>
          鳴 <rp>(</rp><rt>な</rt><rp>)</rp>
        </ruby>
        き
        <ruby>
          始 <rp>(</rp><rt>はじ</rt><rp>)</rp>
        </ruby>
        める
      </p>
      <p>
        <small>5月10日 ~ 5月14日頃</small><br/>
        <ruby>
          蚯蚓 <rp>(</rp><rt>みみず</rt><rp>)</rp>
        </ruby>
        が
        <ruby>
          地上 <rp>(</rp><rt>ちじょう</rt><rp>)</rp>
        </ruby>
        に
        <ruby>
          這出 <rp>(</rp><rt>はいで</rt><rp>)</rp>
        </ruby>
        る
      </p>
      <p>
        <small>5月15日 ~ 5月19日頃</small><br/>
        <ruby>
          筍 <rp>(</rp><rt>たけのこ</rt><rp>)</rp>
        </ruby>
        が
        <ruby>
          生 <rp>(</rp><rt>は</rt><rp>)</rp>
        </ruby>
        えて
        <ruby>
          来 <rp>(</rp><rt>く</rt><rp>)</rp>
        </ruby>
        る
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
            <code>May 5 - May 9</code>
          </p>
          <p>
            <button type="button" data-name="Daniel" lang="en-GB" data-pitch="0.9" data-rate="0.9" data-hello="Frogs begin singing">
              蛙始鳴 <i>Kawazu hajimete naku</i>
            </button>
          </p>
        </li>
        <li>
          <p>
            <code>May 10 - May 14</code>
          </p>
          <p>
            <button type="button" data-name="Daniel" lang="en-GB" data-pitch="0.9" data-rate="0.9" data-hello="Earthworms surface from the earth">
              蚯蚓出 <i>Mimizu izuru</i>
            </button>
          </p>
        </li>
        <li>
          <p>
            <code>May 15 - May 19</code>
          </p>
          <p>
            <button type="button" data-name="Daniel" lang="en-GB" data-pitch="0.9" data-rate="0.9" data-hello="Bamboo shoots grow">
              竹笋生 <i>Takenoko shōzu</i>
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
