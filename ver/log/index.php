<?php
mb_language("ja");
mb_internal_encoding("UTF-8");
date_default_timezone_set('Asia/Tokyo');

$title = 'Access Log | creative-community.space';
$description = $year . ' 年 ' . $month . ' 月 の アクセス履歴';
$site = 'http' . (isset($_SERVER['HTTPS']) ? 's' : '') . '://' . "{$_SERVER['HTTP_HOST']}";
$url = "{$site}" . "{$_SERVER['REQUEST_URI']}";

$timestamp = date("j.M.y.D g:i:s A T");

$year = date("Y");
$month = date("m");
if (isset($_GET["month"])) {
  $month = $_GET["month"];
}

$source_file = $year . '/' . $month . '.csv';
$fp = fopen($source_file, 'r');
flock($fp, LOCK_SH);
?>

<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <meta name="format-detection" content="telephone=no" />
  <script src="readyState.js"></script>

  <!--og:meta-->
  <meta content="website" property="og:type">
  <meta content="ja_JP" property="og:locale" />
  <title><?php echo $title; ?></title>
  <meta content="<?php echo $title; ?>" property="og:title">
  <meta content="<?php echo $description; ?>" name="description">
  <meta content="<?php echo $description; ?>" name="og:description">
  <meta content="<?php echo $description; ?>" name="og:description">

  <!--for Twitter-->
  <meta content="summary_large_image" name="twitter:card">
  <meta content="<?php echo $_SERVER['HTTP_HOST']; ?>" property="og:site_name" />
  <meta content="<?php echo $url; ?>" property="og:url" />
  <meta content="<?php echo $url; ?>summary.png" property="og:image">
  <meta content="<?php echo $url; ?>summary.png" name="twitter:image:src">

  <link rel="icon" href="../icon/favicon.png" type="image/png">

  <link rel="stylesheet" href="../../css/menu.css" />
  <link rel="stylesheet" href="../../css/selectmonth.css" />
  <link rel="stylesheet" href="style.css" />

<style>
    header,
    #log,
    #now {
      mix-blend-mode: difference;
    }

    #js-button,
    #contents a,
    #log,
    #now {
      filter: invert();
    }

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

    body {
      padding: 0.5rem;
      margin: 0;
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
  <header id="menu">
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
  <script src="/js/menu.js"></script>

  <ul id="log" class="hidden">
    <li hidden>
      <span>Your Info</span>
      <?php
      echo "<span id='hqdn'>" . $_SERVER["REMOTE_PORT"] . "</span>";
      echo "<span id='ip'>" . $_SERVER["REMOTE_ADDR"] . "</span>";
      echo "<span id='os'>" . $_SERVER["HTTP_USER_AGENT"] . "</span>";
      ?>
    </li>
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
      <span><button id="update" type="button" onclick="setLOG()">Enter</button></span>
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
  <script src="/js/log.js"></script>

  <form id="now" method="GET" class="hidden">
    <select id="month" name="month"></select>
    <button type="submit">Access Log</button>
  </form>
  <script src="../../js/selectmonth.js"></script>
</body>

</html>