<?php

$sekkiName = "小満 shouman";
$date = "May 20 - Jun 4";
$description = "Plants come into full leaf";
$hello = "あらゆる生命が満ちていく頃。陽気がよくなり、草木などの生物が次第に生長して生い茂る。西日本でははしり梅雨が現れる。";

$title = $sekkiName .' | '. $date;
$site = 'http' . (isset($_SERVER['HTTPS']) ? 's' : '') . '://' . "{$_SERVER['HTTP_HOST']}";
$url = "{$site}" . "{$_SERVER['REQUEST_URI']}";

require_once('../../all/head.php');
?>

<body>
  <main id="log">
    <div>
      <h1>
        <b>
          <code><?php echo $greeting;?></code>
          <?php echo $sekkiName;?>
        </b><br/>
        <code id="lastModified"><?php echo $date;?></code>
      </h1>
      <h2><?php echo $description;?></h2>
    </div>
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
      <?php echo $sekkiName;?>
    </h3>
    <p><?php echo $description;?></p>
    <button class="color bgcolor" id="closeButton">×</button>
    <br/>
    <?php require('../../all/timeframe.php'); ?>
  </dialog>
  <script src="../../../profile/js/jscolor.js"></script>
  <script src="../../../profile/js/setStyles.js"></script>
</body>
</html>
