<?php
$sekki = "boushu";
$seasonName = "夏";
$sekkiName = "芒種";
$date = "Jun 5 - Jun 20";
$description = "Time to plant rice seedlings";
$hello = "稲の穂先のように芒(とげのようなもの)のある穀物の種まきをする頃という意味だが、現在の種まきは大分早まっている。梅の実が熟し、梅雨のじめじめした空模様がはじまる。";

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
      </a>
    </nav>
  </header>

  <main id="hello" hidden>
    <section id="readme">
      <b>七十二候 72 kō</b>
      <p>
        <b>6月5日 ~ 6月9日頃</b><br/>
        	螳螂が生まれ出る
      </p>
      <p>
        <b>6月10日 ~ 6月15日頃</b><br/>
        腐った草が蒸れ蛍になる
      </p>
      <p>
        <b>6月16日 ~ 6月20日頃</b><br/>
        梅の実が黄ばんで熟す
      </p>
    </section>
    <br>
    <p id="ko"></p>
    <hr>
    <button type="button" class="color bgcolor" style="float:right;" onclick="ChangeHidden()">Back</button>
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
      <ul>
        <li>
          <p>
            <code>Jun 5 - Jun 9</code>
          </p>
          <p>
            <button type="button" data-name="Daniel" lang="en-GB" data-pitch="0.9" data-rate="0.9" data-hello="Praying mantises hatch">
              螳螂生 <i>Kamakiri shōzu</i>
            </button>
          </p>
        </li>
        <li>
          <p>
            <code>Jun 10 - Jun 15</code>
          </p>
          <p>
            <button type="button" data-name="Daniel" lang="en-GB" data-pitch="0.9" data-rate="0.9" data-hello="Rotten grass becomes fireflies">
              腐草為螢 <i>Kusaretaru kusa hotaru to naru</i>
            </button>
          </p>
        </li>
        <li>
          <p>
            <code>Jun 16 - Jun 20</code>
          </p>
          <p>
            <button type="button" data-name="Daniel" lang="en-GB" data-pitch="0.9" data-rate="0.9" data-hello="Plums turn yellow">
              梅子黄 <i>Ume no mi kibamu</i>
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
    <?php require('../../all/controls.html'); ?>
  </main>
  <script src="../../js/log.js"></script>

  <dialog id="modal" class="color bgcolor">
    <h3>
      <small><?php echo $date;?></small><br/>
      <?php echo $sekkiName;?> <?php echo $sekki;?>
    </h3>
    <button class="color bgcolor" id="closeButton">×</button>
    <p><?php echo $description;?></p>
    <p><?php echo $hello;?></p>
    <br/>
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
