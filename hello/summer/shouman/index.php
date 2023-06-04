<?php

$season = "小満 shouman";
$date = "May 20 - Jun 4";
$description = "Plants come into full leaf";
$title = $season .' | '. $date;
$site = 'http' . (isset($_SERVER['HTTPS']) ? 's' : '') . '://' . "{$_SERVER['HTTP_HOST']}";
$url = "{$site}" . "{$_SERVER['REQUEST_URI']}";

require_once('../php/head.php');
?>

<body>
  <main id="log">
    <div>
      <h1>
      <code id="lastModified"></code><br/>
        <b><?php echo $season;?></b>
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
</body>
</html>
