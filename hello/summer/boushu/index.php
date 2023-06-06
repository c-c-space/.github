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

  <main id="log">
    <div>
      <h1>
        <b>
          <code><?php echo $greeting;?></code>
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
            <code>Kamakiri shōzu</code>
          </p>
          <p>
            <button type="button" lang="en-GB" data-pitch="0.9" data-rate="0.9" data-hello="Praying mantises hatch">
              螳螂生（かまきりしょうず）
            </button>
          </p>
        </li>
        <li>
          <p>
            <code>Jun 10 - Jun 14</code>
            <code>Kusaretaru kusa hotaru to naru</code>
          </p>
          <p>
            <button type="button" lang="en-GB" data-pitch="0.9" data-rate="0.9" data-hello="Rotten grass becomes fireflies">
              腐草為螢（くされたるくさほたるとなる）
            </button>
          </p>
        </li>
        <li>
          <p>
            <code>Jun 15 - Jun 20</code>
            <code>Ume no mi kibamu</code>
          </p>
          <p>
            <button type="button" lang="en-GB" data-pitch="0.9" data-rate="0.9" data-hello="Plums turn yellow">
              梅子黄（うめのみきばむ）
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
  </script>
  <script src="../../../profile/js/setStyles.js"></script>
</body>
</html>
