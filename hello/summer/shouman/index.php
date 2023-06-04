<?php

$season = "小満 shouman";
$date = "May 20 - Jun 4";
$description = "Plants come into full leaf";
$title = $season .' | '. $date;
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
          <?php echo $season;?>
        </b><br/>
        <code id="lastModified"><?php echo $date;?></code>
      </h1>
      <h2><?php echo $post;?> Posts</h2>
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
      <?php echo $season;?>
    </h3>
    <button class="color bgcolor" id="closeButton">×</button>
    <br/>
    <?php require('../../all/timeframe.php'); ?>
  </dialog>
  <script src="../../../profile/js/jscolor.js"></script>
  <script src="../../../profile/js/setStyles.js"></script>
</body>
</html>
