<?php
mb_language("ja");
mb_internal_encoding("UTF-8");
require('../all/greeting.php');
require('../all/24sekki.php');

$this = "summer";
$thisSeason = "夏 Summer";
$thisDate = "May 5 - August 7";
$description = "View The Collection of Traditional Japanese Seasonal Color";
$title = $thisSeason .' | '. $thisDate;
$site = 'http' . (isset($_SERVER['HTTPS']) ? 's' : '') . '://' . "{$_SERVER['HTTP_HOST']}";
$url = "{$site}" . "{$_SERVER['REQUEST_URI']}";
?>

<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="format-detection" content="telephone=no" />
  <title><?php echo $title; ?></title>
  <meta name="description" content="<?php echo $description; ?>">
  <meta property="og:title" content="<?php echo $title; ?>" />
  <meta property="og:site_name" content="<?php echo $_SERVER['HTTP_HOST']; ?>" />
  <meta property="og:url" content="<?php echo $url; ?>" />
  <meta property="og:type" content="website" />
  <meta property="og:locale" content="ja_JP" />
  <meta property="og:image" content="<?php echo $url; ?>summary.png" />
  <meta name="twitter:card" content="summary_large_image" />
  <meta name="twitter:image" content="<?php echo $url; ?>summary.png" />
  <link rel="stylesheet" href="../../css/menu.css" />
  <link rel="stylesheet" href="../css/colors.css" />
</head>

<body>
  <header id="menu" class="bgcolor" hidden>
    <button class="color bgcolor" id="js-button"><b></b></button>
    <nav id="contents">
      <a href="/hello/">
        <i>Speech to Text to Text to Speech</i>
        <p><b><?php echo $greeting; ?></b></p>
        <u>↩︎</u>
      </a>
      <a onclick="window.location.replace('/hello/<?php echo $this; ?>/');">
        <i><?php echo $thisDate; ?></i>
        <p><b><?php echo $thisSeason; ?></b></p>
      </a>
    </nav>
  </header>
  <script src="/js/menu.js"></script>
  <main id="about">
    <h1>
      <ruby>
        <b id="name">日本の伝統的なの色</b>
        <rp>(</rp>
        <rt id="yomi"><?php echo $title; ?></rt>
        <rp>)</rp>
      </ruby>
    </h1>
    <code id="hex"></code>
    <p id="note"></p>
    <p id="description"><?php echo $description; ?></p>
    <p id="hidden" hidden></p>
    <button type="button" onclick="ChangeHidden()">↩︎</button>
  </main>
  <main hidden>
    <ul id="color"></ul>
  </main>
  <script src="../all/colors.js"></script>
</body>
</html>
