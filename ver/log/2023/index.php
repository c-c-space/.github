<!DOCTYPE html>
<html lang="ja">

<head>
  <?php
  mb_language("ja");
  mb_internal_encoding("UTF-8");
  date_default_timezone_set('Asia/Tokyo');

  $year = "2023";
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
  
  <link rel="icon" href="/ver/icon/favicon.png" type="image/png">
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
    <select id="month" name="month">
      <option disabled selected hidden>Select Month</option>
      <option value="01"><?php echo $year; ?>年1月</option>
      <option value="02"><?php echo $year; ?>年2月</option>
      <option value="03"><?php echo $year; ?>年3月</option>
      <option value="04"><?php echo $year; ?>年4月</option>
      <option value="05"><?php echo $year; ?>年5月</option>
      <option value="06"><?php echo $year; ?>年6月</option>
      <option value="07"><?php echo $year; ?>年7月</option>
      <option value="08"><?php echo $year; ?>年8月</option>
      <option value="09"><?php echo $year; ?>年9月</option>
      <option value="10"><?php echo $year; ?>年10月</option>
      <option value="11"><?php echo $year; ?>年11月</option>
      <option value="12"><?php echo $year; ?>年12月</option>
    </select>
    <button type="submit">Access Log</button>
  </form>
</body>

</html>