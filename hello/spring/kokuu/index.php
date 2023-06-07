<?php
$season = "spring";
$sekki = "kokuu";
$seasonName = "春";
$sekkiName = "穀雨";
$date = "April 19 - May 4";
$description = "Spring rains and seed sowing";
$hello = "田んぼや畑の準備が整い、それに合わせるように柔らかな春の雨が降る頃。この頃より変りやすい春の天気も安定し日差しも強まる。植物が緑一色に輝きはじめる。";

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
        <small>4月19日 ~ 4月24日頃</small><br/>
        <ruby>
          葦 <rp>(</rp><rt>あし</rt><rp>)</rp>
        </ruby>
        が
        <ruby>
          芽 <rp>(</rp><rt>め</rt><rp>)</rp>
        </ruby>
        を
        <ruby>
          吹 <rp>(</rp><rt>ふ</rt><rp>)</rp>
        </ruby>
        き
        <ruby>
          始 <rp>(</rp><rt>はじ</rt><rp>)</rp>
        </ruby>
        める
      </p>
      <p>
        <small>4月25日 ~ 4月29日頃</small><br/>
        <ruby>
          霜 <rp>(</rp><rt>しも</rt><rp>)</rp>
        </ruby>
        が
        <ruby>
          終 <rp>(</rp><rt>お</rt><rp>)</rp>
        </ruby>
        り
        <ruby>
          稲 <rp>(</rp><rt>いね</rt><rp>)</rp>
        </ruby>
        の
        <ruby>
          稲苗<rp>(</rp><rt>なえ</rt><rp>)</rp>
        </ruby>
        が
        <ruby>
          生長<rp>(</rp><rt>せいちょう</rt><rp>)</rp>
        </ruby>
        する
      </p>
      <p>
        <small>4月30日 ~ 5月4日頃</small><br/>
        <ruby>
          牡丹 <rp>(</rp><rt>ぼたん</rt><rp>)</rp>
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
            <code>April 19 - April 24</code>
          </p>
          <p>
            <button type="button" data-name="Daniel" lang="en-GB" data-pitch="0.9" data-rate="0.9" data-hello="Reeds begin to sprout">
              葭始生 <i>Ashi hajimete shōzu</i>
            </button>
          </p>
        </li>
        <li>
          <p>
            <code>April 25 - April 29</code>
          </p>
          <p>
            <button type="button" data-name="Daniel" lang="en-GB" data-pitch="0.9" data-rate="0.9" data-hello="Frost is over, rice seedlings grow">
              霜止出苗 <i>Shimo yamite nae izuru</i>
            </button>
          </p>
        </li>
        <li>
          <p>
            <code>April 30 - May 4</code>
          </p>
          <p>
            <button type="button" data-name="Daniel" lang="en-GB" data-pitch="0.9" data-rate="0.9" data-hello="Peonies bloom">
              牡丹華 <i>Botan hana saku</i>
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
