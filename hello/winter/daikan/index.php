<?php
$season = "winter";
$sekki = "daikan";
$seasonName = "冬";
$sekkiName = "大寒";
$date = "January 20 - February 3";
$description = "Coldest time of the year";
$hello = "一年で一番寒さの厳しい頃。逆の見方をすれば、これからは暖かくなると言うこと。春はもう目前。蕗の花が咲き、鶏が卵を産みはじめ、春の足音が聞こえはじめる。";

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
        <small>1月20日 ~ 1月24日頃</small><br/>
        <ruby>
          蕗 <rp>(</rp><rt>ふき</rt><rp>)</rp>
        </ruby>
        の
        <ruby>
          薹 <rp>(</rp><rt>とう</rt><rp>)</rp>
        </ruby>
        が
        <ruby>
          蕾 <rp>(</rp><rt>つぼみ</rt><rp>)</rp>
        </ruby>
        を
        <ruby>
          出 <rp>(</rp><rt>だ</rt><rp>)</rp>
        </ruby>
        す
      </p>
      <p>
        <small>1月25日 ~ 1月29日頃</small><br/>
        <ruby>
          沢 <rp>(</rp><rt>さわ</rt><rp>)</rp>
        </ruby>
        に
        <ruby>
          氷 <rp>(</rp><rt>こおり</rt><rp>)</rp>
        </ruby>
        が
        <ruby>
          厚 <rp>(</rp><rt>あつ</rt><rp>)</rp>
        </ruby>
        く
        <ruby>
          張 <rp>(</rp><rt>は</rt><rp>)</rp>
        </ruby>
        りつめる
      </p>
      <p>
        <small>1月30日 ~ 2月3日頃</small><br/>
        <ruby>
          鶏 <rp>(</rp><rt>にわとり</rt><rp>)</rp>
        </ruby>
        が
        <ruby>
          卵 <rp>(</rp><rt>たまご</rt><rp>)</rp>
        </ruby>
        を
        <ruby>
          産 <rp>(</rp><rt>う</rt><rp>)</rp>
        </ruby>
        み
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
            <code>January 20 - January 24</code>
          </p>
          <p>
            <button type="button" data-name="Daniel" lang="en-GB" data-pitch="0.9" data-rate="0.9" data-hello="Butterbur sprouts bud">
              款冬華 <i>Fuki no hana saku</i>
            </button>
          </p>
        </li>
        <li>
          <p>
            <code>January 25 - January 29</code>
          </p>
          <p>
            <button type="button" data-name="Daniel" lang="en-GB" data-pitch="0.9" data-rate="0.9" data-hello="Ice thickens on the streams">
              水沢腹堅 <i>Sawamizu kōri tsumeru</i>
            </button>
          </p>
        </li>
        <li>
          <p>
            <code>January 30 - February 3</code>
          </p>
          <p>
            <button type="button" data-name="Daniel" lang="en-GB" data-pitch="0.9" data-rate="0.9" data-hello="Chickens start laying eggs">
              鶏始乳 <i>Niwatori hajimete toya ni tsuku</i>
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
  <script src="../../js/setStyles.js"></script>
</body>
</html>
