<!DOCTYPE html>
<html lang="ja">

<head>
  <?php
  mb_language("ja");
  mb_internal_encoding("UTF-8");
  date_default_timezone_set('Asia/Tokyo');

  $year = "2024";
  $month = "01";
  if (isset($_GET["month"])) {
    $month = $_GET["month"];
  }

  $title = 'Access Log | creative-community.space';
  $description = $year . ' 年 ' . $month . ' 月 の アクセス履歴';

  $site = 'http' . (isset($_SERVER['HTTPS']) ? 's' : '') . '://' . "{$_SERVER['HTTP_HOST']}";
  $url = "{$site}" . "{$_SERVER['REQUEST_URI']}";
  $source_file = $month . ".csv";
  $fp = fopen($source_file, 'r');
  flock($fp, LOCK_SH);
  require('../head.php');
  ?>

  <meta property="og:image" content="https://creative-community.space/ver/log/summary.png">
  <meta name="twitter:image" content="https://creative-community.space/ver/log/summary.png">

  <script src="/ver/js/menu.js"></script>
  <script type="text/javascript">
    if (!localStorage.getItem('yourInfo')) {
      window.onload = (event) => {
        const logAll = document.querySelectorAll('li.log')
        logAll.forEach((logEach) => {
          logEach.remove()
        })
      }
    }
  </script>

  <link rel="icon" href="/ver/icon.png" type="image/png">
  <link rel="stylesheet" href="/ver/css/menu.css" />
  <link rel="stylesheet" href="/ver/css/log.css" />
  <link rel="stylesheet" href="/ver/css/selectmonth.css" />

  <style>
    body {
      padding: 0;
      margin: 0;
    }
  </style>
</head>

<body>
  <header id="menu" hidden>
    <button><b></b></button>
    <menu id="contents">
      <a href="#" onclick="window.history.back(); return false;">
        <p>creative-community.space</p>
        <u>↩︎</u>
      </a>
      <a href="/ver/" target="_parent">
        <i>更新履歴</i>
        <b>New Contents & Version Up</b>
      </a>
      <a href="/ver/log/" target="_parent">
        <i>creative-community.space</i>
        <b>アクセス履歴 | Access Log</b>
      </a>
    </menu>
  </header>

  <ul id="log" class="hidden">
    <?php
    while ($line = fgetcsv($fp)) {
      echo "<li class='log'>";
      for ($i = 0; $i < count($line); $i++) {
        echo "<span>" . $line[$i] . "</span>";
      }
      echo "</li>";
    }
    fclose($fp);
    ?>

    <li>
      <span>
        <?php
        echo "<b>" . $year . "</b> 年 <b>" . $month . "</b> 月";
        ?>
      </span>
      <span></span>
      <span>アクセス履歴</span>
      <span>
        <b><?php echo sizeof(file($source_file)); ?></b>
        people entered
        <?php
        echo $_SERVER['HTTPS'] . " ";
        echo $_SERVER['SERVER_NAME'] . "<br/>";
        echo $_SERVER['SERVER_PROTOCOL'] . " ";

        $hostname = $_SERVER['SERVER_NAME'];
        $hostip = gethostbyname($hostname);
        echo $hostip . " ";

        echo $_SERVER['SERVER_PORT'] . " ";
        echo $_SERVER['SERVER_SOFTWARE'];
        ?>
      </span>
    </li>
  </ul>

  <form id="now" method="GET" class="hidden">
    <select id="month" name="month"></select>
    <button type="submit">Access Log</button>
  </form>
  <script src="../../js/selectmonth.js"></script>
</body>

</html>