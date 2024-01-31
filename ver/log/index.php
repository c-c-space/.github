<!DOCTYPE html>
<html lang="ja">

<head>
  <?php
  mb_language("ja");
  mb_internal_encoding("UTF-8");
  date_default_timezone_set('Asia/Tokyo');

  $year = date("Y");
  $month = date("m");
  if (isset($_GET["month"])) {
    $month = $_GET["month"];
  }

  $title = 'Access Log | creative-community.space';
  $description = $year . ' 年 ' . $month . ' 月 の アクセス履歴';

  $timestamp = date("j.M.y.D g:i:s A T");

  $site = 'http' . (isset($_SERVER['HTTPS']) ? 's' : '') . '://' . "{$_SERVER['HTTP_HOST']}";
  $url = "{$site}" . "{$_SERVER['REQUEST_URI']}";
  $source_file = $year . '/' . $month . '.csv';
  $fp = fopen($source_file, 'a');
  flock($fp, LOCK_SH);
  require('head.php');
  ?>

  <meta property="og:image" content="https://creative-community.space/ver/log/summary.png">
  <meta name="twitter:image" content="https://creative-community.space/ver/log/summary.png">

  <script src="/ver/js/menu.js"></script>
  <script type="text/javascript">
    if (!localStorage.getItem('yourInfo')) {
      window.onload = (event) => {
        const logAll = document.querySelectorAll('li.log, #now')
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
    #log li {
      filter: blur(0.25rem);
    }

    #log li:nth-last-child(1) {
      filter: blur(0);
    }

    #log li:hover,
    #log li:focus,
    #log li:active {
      filter: blur(0);
      transition: all 500ms ease;
    }

    @media print {

      #menu,
      #now,
      #now * {
        display: none;
      }

      #log li {
        filter: blur(0);
      }
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
      <a href="/profile/" target="_parent">
        <i>The Information About Network & Browser</i>
        <b>通信情報／ブラウザ等情報</b>
      </a>
    </menu>
  </header>

  <ul id="log">
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
  <script src="../js/selectmonth.js"></script>
</body>

</html>