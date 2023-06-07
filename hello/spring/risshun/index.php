<?php
$season = "spring";
$sekki = "risshun";
$seasonName = "春";
$sekkiName = "立春";
$date = "February 4 - February 18";
$description = "The Beginning of Spring";
$hello = "旧暦では、一年のはじまりは立春から。まだ寒さの厳しい時期だが日脚は徐々に伸び、暖かい地方では梅が咲き始める。";

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
        <small>2月4日 ~ 2月8日頃</small><br/>
        <ruby>
          東風 <rp>(</rp><rt>とうふう</rt><rp>)</rp>
        </ruby>
        が
        <ruby>
          厚 <rp>(</rp><rt>あつ</rt><rp>)</rp>
        </ruby>
        い
        <ruby>
          氷 <rp>(</rp><rt>こおり</rt><rp>)</rp>
        </ruby>
        を
        <ruby>
          解 <rp>(</rp><rt>と</rt><rp>)</rp>
        </ruby>
        かし
        <ruby>
          始 <rp>(</rp><rt>はじ</rt><rp>)</rp>
        </ruby>
        める
      </p>
      <p>
        <small>2月9日 ~ 2月13日頃</small><br/>
        <ruby>
          鶯 <rp>(</rp><rt>うぐいす</rt><rp>)</rp>
        </ruby>
        が
        <ruby>
          山里 <rp>(</rp><rt>やまざと</rt><rp>)</rp>
        </ruby>
        で
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
        <small>2月14日 ~ 2月18日頃</small><br/>
        <ruby>
          割 <rp>(</rp><rt>わ</rt><rp>)</rp>
        </ruby>
        れた
        <ruby>
          氷 <rp>(</rp><rt>こおり</rt><rp>)</rp>
        </ruby>
        の
        <ruby>
          間 <rp>(</rp><rt>あいだ</rt><rp>)</rp>
        </ruby>
        から
        <ruby>
          魚 <rp>(</rp><rt>さかな</rt><rp>)</rp>
        </ruby>
        が
        <ruby>
          飛 <rp>(</rp><rt>と</rt><rp>)</rp>
        </ruby>
        び
        <ruby>
          出 <rp>(</rp><rt>で</rt><rp>)</rp>
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
            <code>February 4 - February 8</code>
          </p>
          <p>
            <button type="button" data-name="Daniel" lang="en-GB" data-pitch="0.9" data-rate="0.9" data-hello="The east wind begins to melt the ice">
              東風解凍 <i>Harukaze kōri o toku</i>
            </button>
          </p>
        </li>
        <li>
          <p>
            <code>February 9 - February 13</code>
          </p>
          <p>
            <button type="button" data-name="Daniel" lang="en-GB" data-pitch="0.9" data-rate="0.9" data-hello="Songbirds in mountain villages">
              黄鶯睍睆 <i>Kōō kenkan su</i>
            </button>
          </p>
        </li>
        <li>
          <p>
            <code>February 14 - February 18</code>
          </p>
          <p>
            <button type="button" data-name="Daniel" lang="en-GB" data-pitch="0.9" data-rate="0.9" data-hello="Fish emerge from the broken ice">
              魚上氷 <i>Uo kōri o izuru</i>
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
