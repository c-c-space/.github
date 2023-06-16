<?php
$season = "spring";
$sekki = "seimei";
$seasonName = "春";
$sekkiName = "清明";
$date = "April 4 - April 18";
$description = "Clear and Bright, Plants flower";
$hello = "清浄明潔の略。晴れ渡った空には当に清浄明潔という語にふさわしい。つばめが飛来し、爽やかな風が吹く頃。地上に目を移せば、百花が咲き競う。";

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
        <small>4月4日 ~ 4月8日頃</small><br/>
        <ruby>
          燕 <rp>(</rp><rt>つばめ</rt><rp>)</rp>
        </ruby>
        が
        <ruby>
          南 <rp>(</rp><rt>みなみ</rt><rp>)</rp>
        </ruby>
        からやって
        <ruby>
          来 <rp>(</rp><rt>く</rt><rp>)</rp>
        </ruby>
        る
      </p>
      <p>
        <small>4月9日 ~ 4月13日頃</small><br/>
        <ruby>
          雁 <rp>(</rp><rt>がん</rt><rp>)</rp>
        </ruby>
        が
        <ruby>
          北 <rp>(</rp><rt>きた</rt><rp>)</rp>
        </ruby>
        へ
        <ruby>
          渡 <rp>(</rp><rt>わた</rt><rp>)</rp>
        </ruby>
        って
        <ruby>
          行 <rp>(</rp><rt>い</rt><rp>)</rp>
        </ruby>
        く
      </p>
      <p>
        <small>4月14日 ~ 4月18日頃</small><br/>
        <ruby>
          雨 <rp>(</rp><rt>あめ</rt><rp>)</rp>
        </ruby>
        の
        <ruby>
          後 <rp>(</rp><rt>あと</rt><rp>)</rp>
        </ruby>
        に
        <ruby>
          虹 <rp>(</rp><rt>にじ</rt><rp>)</rp>
        </ruby>
        が
        <ruby>
          出始 <rp>(</rp><rt>ではじ</rt><rp>)</rp>
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
            <code>April 4 - April 8</code>
          </p>
          <p>
            <button type="button" data-name="Daniel" lang="en-GB" data-pitch="0.9" data-rate="0.9" data-hello="Swallows arrive from the south">
              玄鳥至 <i>Tsubame kitaru</i>
            </button>
          </p>
        </li>
        <li>
          <p>
            <code>April 9 - April 13</code>
          </p>
          <p>
            <button type="button" data-name="Daniel" lang="en-GB" data-pitch="0.9" data-rate="0.9" data-hello="Geese fly north">
              鴻雁北 <i>Kōgan kaeru</i>
            </button>
          </p>
        </li>
        <li>
          <p>
            <code>April 14 - April 18</code>
          </p>
          <p>
            <button type="button" data-name="Daniel" lang="en-GB" data-pitch="0.9" data-rate="0.9" data-hello="Rainbows appear after rain">
              虹始見 <i>Niji hajimete arawaru</i>
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
