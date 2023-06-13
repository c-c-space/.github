<?php
mb_language("ja");
mb_internal_encoding("UTF-8");
date_default_timezone_set('Asia/Tokyo');

$title = 'Access Log | creative-community.space';
$site = 'http' . (isset($_SERVER['HTTPS']) ? 's' : '') . '://' . "{$_SERVER['HTTP_HOST']}";
$url = "{$site}" . "{$_SERVER['REQUEST_URI']}";

$timestamp = date("j.M.y.D g:i:s A T");

$year = "2022";
$month = "10";
if (isset($_GET["month"])) {
  $month = $_GET["month"];
}

$description = $year .' 年 '. $month .' 月 の アクセス履歴';
$source_file = $month . ".csv";
$fp = fopen($source_file, 'r');
flock($fp, LOCK_SH);
?>

<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="format-detection" content="telephone=no" />
  <script src="../readyState.js"></script>

  <title><?php echo $title; ?></title>
  <meta name="description" content="<?php echo $description; ?>">
  <meta property="og:title" content="<?php echo $title; ?>" />
  <meta property="og:description" content="<?php echo $description; ?>" />
  <meta property="og:site_name" content="<?php echo $_SERVER['HTTP_HOST']; ?>" />
  <meta property="og:url" content="<?php echo $url; ?>" />
  <meta property="og:type" content="website" />
  <meta property="og:locale" content="ja_JP" />
  <meta property="og:image" content="<?php echo $url; ?>summary.png" />
  <meta name="twitter:card" content="summary_large_image" />
  <meta name="twitter:image" content="<?php echo $url; ?>summary.png" />

  <link rel="stylesheet" href="../style.css" />
  <link rel="stylesheet" href="../selectmonth.css" />
  <link rel="stylesheet" href="../mobile.css" media="screen and (max-width: 750px)" />
  <link rel="icon" href="/ver/icon.png" type="image/png">
  <link rel="icon" href="/ver/icon/android.png" sizes="192x192" type="image/png">
  <link rel="apple-touch-icon-precomposed" href="/ver/icon/apple.png" sizes="180x180" type="image/png">
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
    body {
      height: 100vh;
      max-height: -webkit-fill-available;
    }

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
  <script src="/js/menu.js"></script>
  <header id="menu" hidden>
    <button id="js-button"><b></b></button>
    <nav id="contents">
      <a href="#" onclick="window.history.back(); return false;">
        <p><b>creative-community.space</b></p>
        <u>↩︎</u>
      </a>
      <a href="/ver/" target="_parent">
        <i>更新履歴</i>
        <p><b>New Contents & Version Up</b></p>
      </a>
      <a href="/ver/log/" target="_parent">
        <i>creative-community.space</i>
        <p><b>アクセス履歴 | Access Log</b></p>
      </a>
    </nav>
  </header>

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
    <select id="month" name="month">
      <option disabled selected hidden>Select Month</option>
      <option value="10"><?php echo $year; ?>年10月</option>
      <option value="11"><?php echo $year; ?>年11月</option>
      <option value="12"><?php echo $year; ?>年12月</option>
    </select>
    <button type="submit">Access Log</button>
  </form>
  <script src="../../../thankyou/hsl.js"></script></body>
</html>
