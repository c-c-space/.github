<?php
$season = "summer";
$sekki = "taisho";
$seasonName = "夏";
$sekkiName = "大暑";
$date = "July 23 - August 7";
$description = "Hottest time of the year";
$hello = "最も暑い節という意味だが実際は次の節の方が暑い。学校は夏休みに入り、空には雲の峰が高々とそびえるようになる。夏の土用の時期。";

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
        <small>7月23日 ~ 7月27日頃</small><br/>
        <ruby>
          桐 <rp>(</rp><rt>きり</rt><rp>)</rp>
        </ruby>
        の
        <ruby>
          花 <rp>(</rp><rt>はな</rt><rp>)</rp>
        </ruby>
        が(
        <ruby>
          来年 <rp>(</rp><rt>らいねん</rt><rp>)</rp>
        </ruby>
        の)
        <ruby>
          蕾 <rp>(</rp><rt>つぼみ</rt><rp>)</rp>
        </ruby>
        をつける
      </p>
      <p>
        <small>7月28日 ~ 8月1日頃</small><br/>
        <ruby>
          土 <rp>(</rp><rt>つち</rt><rp>)</rp>
        </ruby>
        がしめって
        <ruby>
          蒸 <rp>(</rp><rt>む</rt><rp>)</rp>
        </ruby>
        し
        <ruby>
          暑 <rp>(</rp><rt>あつ</rt><rp>)</rp>
        </ruby>
        くなる
      </p>
      <p>
        <small>8月2日 ~ 8月7日頃</small><br/>
        <ruby>
          時 <rp>(</rp><rt>とき</rt><rp>)</rp>
        </ruby>
        として
        <ruby>
          大雨 <rp>(</rp><rt>おおあめ</rt><rp>)</rp>
        </ruby>
        が
        <ruby>
          降 <rp>(</rp><rt>ふ</rt><rp>)</rp>
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
            <code>July 23 - July 27</code>
          </p>
          <p>
            <button type="button" data-name="Daniel" lang="en-GB" data-pitch="0.9" data-rate="0.9" data-hello="Paulownia flowers bud for the next year">
              桐始結花 <i>Kiri hajimete hana o musubu</i>
            </button>
          </p>
        </li>
        <li>
          <p>
            <code>July 28 - August 1</code>
          </p>
          <p>
            <button type="button" data-name="Daniel" lang="en-GB" data-pitch="0.9" data-rate="0.9" data-hello="Damp soil, humid air">
              土潤溽暑 <i>Tsuchi uruōte mushi atsushi</i>
            </button>
          </p>
        </li>
        <li>
          <p>
            <code>August 2 - August 7</code>
          </p>
          <p>
            <button type="button" data-name="Daniel" lang="en-GB" data-pitch="0.9" data-rate="0.9" data-hello="Heavy rains sometimes fall">
              大雨時行 <i>Taiu tokidoki furu</i>
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
