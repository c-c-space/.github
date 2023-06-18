<?php
mb_language("ja");
mb_internal_encoding("UTF-8");
require('../all/greeting.php');

$title =  '日本の伝統的な季節の色';
$description = "The Collection of Traditional Seasonal Colors of Japan";
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
  <link rel="stylesheet" href="../css/colors.css" />
  <link rel="icon" href="/ver/icon.png" type="image/png">
  <link rel="icon" href="/ver/icon/android.png" sizes="192x192" type="image/png">
  <link rel="apple-touch-icon-precomposed" href="/ver/icon/apple.png" sizes="180x180" type="image/png">
</head>

<body>
  <dialog id="modal">
    <h1>
      <ruby>
        <b id="name"><?php echo $title; ?></b>
        <rp>(</rp>
        <rt id="yomi"></rt>
        <rp>)</rp>
      </ruby>
    </h1>
    <code id="hex"></code>
    <p id="note"><?php echo $description; ?></p>
    <p id="description" class="noprint">
      <a href="#" onclick="window.print();">WWW to Print</a>
      (Recommended to borderless printing)<br/>
      <small>ウェブサイトを出力する（A5横サイズ・余白なし推奨）</small>
    </p>
    <p id="hidden" hidden></p>
    <button type="button">×</button>
  </dialog>
  <main>
    <ul id="color"></ul>
    <button id="backBtn" type="button" onclick="window.location.replace('/hello/all/');">
      <b>↩︎</b>
    </button>
  </main>
  <script src="colors.js"></script>
  <script type="text/javascript">
  indexJSON('../spring/color.json');
  indexJSON('../summer/color.json');
  indexJSON('../autumn/color.json');
  indexJSON('../winter/color.json');
  </script>
</body>
</html>
