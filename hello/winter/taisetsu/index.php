<?php
$season = "winter";
$sekki = "taisetsu";
$seasonName = "冬";
$sekkiName = "大雪";
$date = "December 7 - December 21";
$description = "Cold winds blow from Siberia";
$hello = "山々は雪の衣を纏って冬の姿となり、動物たちが冬ごもりに入る時期。鮭が川を遡上し、鱈など冬の魚の漁が盛んになる。";

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
        <small>12月7日 ~ 12月11日頃</small><br/>
        <ruby>
          天地 <rp>(</rp><rt>てんち</rt><rp>)</rp>
        </ruby>
        の
        <ruby>
          気 <rp>(</rp><rt>き</rt><rp>)</rp>
        </ruby>
        が
        <ruby>
          塞 <rp>(</rp><rt>ふさが</rt><rp>)</rp>
        </ruby>
        がって
        <ruby>
          冬 <rp>(</rp><rt>ふゆ</rt><rp>)</rp>
        </ruby>
        となる
      </p>
      <p>
        <small>12月12日 ~ 12月16日頃</small><br/>
        <ruby>
          熊 <rp>(</rp><rt>くま</rt><rp>)</rp>
        </ruby>
        が
        <ruby>
          冬眠 <rp>(</rp><rt>とうみん</rt><rp>)</rp>
        </ruby>
        のために
        <ruby>
          穴 <rp>(</rp><rt>あな</rt><rp>)</rp>
        </ruby>
        に
        <ruby>
          隠 <rp>(</rp><rt>かく</rt><rp>)</rp>
        </ruby>
        れる
      </p>
      <p>
        <small>12月17日 ~ 12月21日頃</small><br/>
        <ruby>
          鮭 <rp>(</rp><rt>さけ</rt><rp>)</rp>
        </ruby>
        が
        <ruby>
          群 <rp>(</rp><rt>むら</rt><rp>)</rp>
        </ruby>
        がり
        <ruby>
          川 <rp>(</rp><rt>かわ</rt><rp>)</rp>
        </ruby>
        を
        <ruby>
          上 <rp>(</rp><rt>のぼ</rt><rp>)</rp>
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
            <code>December 7 - December 11</code>
          </p>
          <p>
            <button type="button" data-name="Daniel" lang="en-GB" data-pitch="0.9" data-rate="0.9" data-hello="The skies close for winter">
              閉塞成冬 <i>Sora samuku fuyu to naru</i>
            </button>
          </p>
        </li>
        <li>
          <p>
            <code>December 12 - December 16</code>
          </p>
          <p>
            <button type="button" data-name="Daniel" lang="en-GB" data-pitch="0.9" data-rate="0.9" data-hello="Bears hibernate in their dens">
              熊蟄穴 <i>Kuma ana ni komoru</i>
            </button>
          </p>
        </li>
        <li>
          <p>
            <code>December 17 - December 21</code>
          </p>
          <p>
            <button type="button" data-name="Daniel" lang="en-GB" data-pitch="0.9" data-rate="0.9" data-hello="Salmon swim upstream together">
              鱖魚群 <i>Sake no uo muragaru</i>
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
