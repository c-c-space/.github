<?php
$season = "autumn";
$sekki = "soukou";
$seasonName = "秋";
$sekkiName = "霜降";
$date = "October 24 - November 7";
$description = "The Season of Frost";
$hello = "北国や山間部では、朝霜が降りて草木が白く化粧をする頃。野の花の数は減り始め、代わって山を紅葉が飾る。人々や動物たちの冬仕度が始まる。";

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
        <small>10月24日 ~ 10月28日頃</small><br/>
        霜が降り始める
      </p>
      <p>
        <small>10月29日 ~ 11月2日頃</small><br/>
        小雨がしとしと降る
      </p>
      <p>
        <small>11月3日 ~ 11月7日頃</small><br/>
        もみじや蔦が黄葉する
      </p>
    </section>
    <hr>
    <p id="ko"></p>
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
            <code>October 24 - October 28</code>
          </p>
          <p>
            <button type="button" data-name="Daniel" lang="en-GB" data-pitch="0.9" data-rate="0.9" data-hello="First frost">
              霜始降 <i>Shimo hajimete furu</i>
            </button>
          </p>
        </li>
        <li>
          <p>
            <code>October 29 - November 2</code>
          </p>
          <p>
            <button type="button" data-name="Daniel" lang="en-GB" data-pitch="0.9" data-rate="0.9" data-hello="Light rains sometimes fall">
              霎時施 <i>Kosame tokidoki furu</i>
            </button>
          </p>
        </li>
        <li>
          <p>
            <code>November 3 - November 7</code>
          </p>
          <p>
            <button type="button" data-name="Daniel" lang="en-GB" data-pitch="0.9" data-rate="0.9" data-hello="Maple leaves and ivy turn yellow">
              楓蔦黄 <i>Momiji tsuta kibamu</i>
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

  fetch('../../all/72ko.txt')
  .then(response => response.text())
  .then(text => {
    document.querySelector('#ko').innerText = text
  });
  </script>
  <script src="../../../profile/js/setStyles.js"></script>
</body>
</html>
