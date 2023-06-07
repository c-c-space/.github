<?php
$season = "autumn";
$sekki = "shosho";
$seasonName = "秋";
$sekkiName = "処暑";
$date = "August 23 - September 7";
$description = "Hot weather abates";
$hello = "暑さが和らぐ頃。マツムシや鈴虫など心地よい虫の声が聞こえ、朝夕は心地よい涼風が吹く。同時に台風の季節も到来する。";

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
        <small>8月23日 ~ 8月27日頃</small><br/>
        <ruby>
          綿 <rp>(</rp><rt>わた</rt><rp>)</rp>
        </ruby>
        を
        <ruby>
          包 <rp>(</rp><rt>つつ</rt><rp>)</rp>
        </ruby>
        む
        <ruby>
          萼 <rp>(</rp><rt>がく</rt><rp>)</rp>
        </ruby>
        が
        <ruby>
          開 <rp>(</rp><rt>ひら</rt><rp>)</rp>
        </ruby>
        く
      </p>
      <p>
        <small>8月28日 ~ 9月2日頃</small><br/>
        ようやく
        <ruby>
          暑 <rp>(</rp><rt>あつ</rt><rp>)</rp>
        </ruby>
        さが
        <ruby>
          暑 <rp>(</rp><rt>しずま</rt><rp>)</rp>
        </ruby>
        まる
      </p>
      <p>
        <small>9月3日 ~ 9月7日頃</small><br/>
        <ruby>
          稲 <rp>(</rp><rt>いね</rt><rp>)</rp>
        </ruby>
        が
        <ruby>
          実 <rp>(</rp><rt>みの</rt><rp>)</rp>
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
        <b><?php echo $sekkiName;?> <?php echo $sekki;?></b><br/>
        <code id="lastModified"><?php echo $date;?></code>
      </h1>
      <h2><?php echo $description;?></h2>
    </div>
    <section>
      <ul id="ko">
        <li>
          <p>
            <code>August 23 - August 27</code>
          </p>
          <p>
            <button type="button" data-name="Daniel" lang="en-GB" data-pitch="0.9" data-rate="0.9" data-hello="Cotton flowers bloom">
              綿柎開 <i>Wata no hana shibe hiraku</i>
            </button>
          </p>
        </li>
        <li>
          <p>
            <code>August 28 - September 2</code>
          </p>
          <p>
            <button type="button" data-name="Daniel" lang="en-GB" data-pitch="0.9" data-rate="0.9" data-hello="Heat finally subsides">
              天地始粛 <i>Tenchi hajimete samushi</i>
            </button>
          </p>
        </li>
        <li>
          <p>
            <code>September 3 - September 7</code>
          </p>
          <p>
            <button type="button" data-name="Daniel" lang="en-GB" data-pitch="0.9" data-rate="0.9" data-hello="Rice grows">
              禾乃登 <i>Kokumono sunawachi minoru</i>
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
