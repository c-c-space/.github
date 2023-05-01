<?php
mb_language("ja");
mb_internal_encoding("UTF-8");
date_default_timezone_set('Asia/Tokyo');

$title = 'Access Log | creative-community.space';
$description = 'アクセス履歴 | あなたの通信情報／ブラウザ等情報';
$site = 'http' . (isset($_SERVER['HTTPS']) ? 's' : '') . '://' . "{$_SERVER['HTTP_HOST']}";
$url = "{$site}" . "{$_SERVER['REQUEST_URI']}";

$timestamp = date("j.M.y.D g:i:s A T");

$year = date("Y");
$month = date("m");
if (isset($_GET["month"])) {
  $month = $_GET["month"];
}

$source_file = $year . $month . ".csv";
$fp = fopen($source_file, 'r');
flock($fp, LOCK_SH);
?>

<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="format-detection" content="telephone=no" />
  <script src="readyState.js"></script>

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

  <link rel="stylesheet" href="style.css" />
  <link rel="stylesheet" href="selectmonth.css" />
  <link rel="icon" href="/profile/icon.png" type="image/png">
  <link rel="icon" href="/profile/android.png" sizes="192x192" type="image/png">
  <link rel="apple-touch-icon-precomposed" href="/profile/apple.png" sizes="180x180" type="image/png">
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

  #log li:nth-last-child(1),
  #log li:nth-last-child(2) {
    filter: blur(0);
  }

  #log li:hover,
  #log li:focus,
  #log li:active {
    filter: blur(0);
    transition: all 500ms ease;
  }

  @media print {
    body {
      height: 100vh;
      max-height: -webkit-fill-available;
    }

    #menu,
    #now,
    #now *,
    #log li:not(#yourInfo) {
      display: none;
    }
  }
  </style>
</head>
<body>
  <script src="/js/menu.js"></script>
  <header id="menu" hidden>
    <button id="js-button"><b></b></button>
    <nav id="contents">
      <a href="/ver/" target="_parent">
        <p><b>Index | creative-community.space</b></p>
        <u>更新情報</u>
      </a>
      <a href="/ver/log/" target="_parent">
        <i>Access Log</i>
        <p>あなたの通信情報／ブラウザ等情報</p>
      </a>
    </nav>
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
    <li class="log">
      <?php
      echo "<span>アクセス履歴</span>";
      echo "<span><b>" . $year . "</b> 年</span>";
      echo "<span><b>" . $month . "</b> 月</span>";
      ?>
      <span class="realtimeuserscounter">
        <b><?php echo sizeof(file($source_file)); ?></b>
        people entered
        <?php
        echo $_SERVER['HTTPS'] . " ";
        echo $_SERVER['SERVER_PROTOCOL'] . " ";
        echo $_SERVER['SERVER_NAME'] . "<br/>";

        $hostname = $_SERVER['SERVER_NAME'];
        $hostip = gethostbyname($hostname);
        echo $hostip . " ";

        echo $_SERVER['SERVER_PORT'] . " ";
        echo $_SERVER['SERVER_SOFTWARE'];
        ?>
      </span>
    </li>
    <li id="yourInfo">
      <span>あなたの通信情報／ブラウザ等情報</span>
      <span><button id="update" type="button" onclick="setLOG()">Enter</button></span>
      <?php
      echo "<span><small id='hqdn'>" . $_SERVER["REMOTE_PORT"] . "</small>";
      echo "<small id='ip'>" . $_SERVER["REMOTE_ADDR"] . "</small></span>";
      echo "<span id='os'>" . $_SERVER["HTTP_USER_AGENT"] . "</span>";
      ?>
    </li>
  </ul>
  <script src="/js/log.js"></script>

  <form id="now" method="GET" class="hidden">
    <select id="month" name="month"></select>
    <button type="submit">Access Log</button>
  </form>
  <script src="selectmonth.js"></script>

  <video id="userMedia" autoplay playsinline></video>
</body>
</html>
