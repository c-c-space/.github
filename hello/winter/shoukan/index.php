<?php
$season = "winter";
$sekki = "shoukan";
$seasonName = "冬";
$sekkiName = "小寒";
$date = "January 6 - January 19";
$description = "Cold weather nears its peak";
$hello = "「寒の入り」といい、寒さが厳しくなる頃。これから節分までの期間が「寒」。「寒中見舞い」を出しはじめる時期。";

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
        <small>1月6日 ~ 1月10日頃</small><br/>
        <ruby>
          芹 <rp>(</rp><rt>せり</rt><rp>)</rp>
        </ruby>
        がよく
        <ruby>
          生育 <rp>(</rp><rt>せいいく</rt><rp>)</rp>
        </ruby>
        する
      </p>
      <p>
        <small>1月11日 ~ 1月15日頃</small><br/>
        <ruby>
          地中 <rp>(</rp><rt>ちちゅう</rt><rp>)</rp>
        </ruby>
        で
        <ruby>
          凍 <rp>(</rp><rt>こお</rt><rp>)</rp>
        </ruby>
        った
        <ruby>
          泉 <rp>(</rp><rt>いずみ</rt><rp>)</rp>
        </ruby>
        が
        <ruby>
          動 <rp>(</rp><rt>うご</rt><rp>)</rp>
        </ruby>
        き
        <ruby>
          始 <rp>(</rp><rt>はじ</rt><rp>)</rp>
        </ruby>
        める
      </p>
      <p>
        <small>1月16日 ~ 1月19日頃</small><br/>
        <ruby>
          雄 <rp>(</rp><rt>おす</rt><rp>)</rp>
        </ruby>
        の
        <ruby>
          雉 <rp>(</rp><rt>きじ</rt><rp>)</rp>
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
            <code>January 6 - January 10</code>
          </p>
          <p>
            <button type="button" data-name="Daniel" lang="en-GB" data-pitch="0.9" data-rate="0.9" data-hello="Parsley flourishes">
              芹乃栄 <i>Seri sunawachi sakau</i>
            </button>
          </p>
        </li>
        <li>
          <p>
            <code>January 11 - January 15</code>
          </p>
          <p>
            <button type="button" data-name="Daniel" lang="en-GB" data-pitch="0.9" data-rate="0.9" data-hello="Frozen springs start to thaw">
              水泉動 <i>Shimizu atataka o fukumu</i>
            </button>
          </p>
        </li>
        <li>
          <p>
            <code>January 16 - January 19</code>
          </p>
          <p>
            <button type="button" data-name="Daniel" lang="en-GB" data-pitch="0.9" data-rate="0.9" data-hello="Male pheasants begin crying">
              雉始雊 <i>Kiji hajimete naku</i>
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
