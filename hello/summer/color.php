<?php
mb_language("ja");
mb_internal_encoding("UTF-8");
require('../all/greeting.php');

$season = "summer";
$thisSeason = "夏";
$thisDate = "May 5 - August 7";
$description = "The Collection of Traditional Japanese Seasonal Color";
$title = $season .' | '. $thisDate;
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
  <link rel="icon" href="/ver/icon.png" type="image/png">
  <link rel="icon" href="/ver/icon/android.png" sizes="192x192" type="image/png">
  <link rel="apple-touch-icon-precomposed" href="/ver/icon/apple.png" sizes="180x180" type="image/png">
</head>

<body>
  <dialog id="modal">
    <h1>
      <ruby>
        <b id="name">日本の伝統的な<?php echo $thisSeason; ?>の色</b>
        <rp>(</rp>
        <rt id="yomi"><?php echo $title; ?></rt>
        <rp>)</rp>
      </ruby>
    </h1>
    <code id="hex"></code>
    <p id="note"><?php echo $description; ?></p>
    <p id="description">cite from
      <a href="https://irocore.com/" target="_blank" rel="nofollow noreferrer">伝統色のいろは</a>
    </p>
    <p id="hidden" hidden></p>
    <button type="button">×</button>
  </dialog>
  <main>
    <ul id="color"></ul>
  </main>
  <script src="../all/colors.js"></script>
</body>
</html>
