<?php
mb_language("ja");
mb_internal_encoding("UTF-8");
date_default_timezone_set('Asia/Tokyo');

function h($str) {
  return htmlspecialchars($str, ENT_QUOTES, 'UTF-8');
}

$season = "秋 Autumn";
$date = "Aug 8 - Nov 7";
$description = "「あき」は草木が紅（あか）く染まる季節";
$one = "risshu";
$two = "shosho";
$three = "hakuro";
$four = "shuubun";
$five = "kanro";
$six = "soukou";
?>

<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="format-detection" content="telephone=no" />
  <link rel="stylesheet" href="../style.css" />
  <link rel="stylesheet" href="../css/index.css" />
  <link rel="stylesheet" href="../css/controls.css" />
  <link rel="stylesheet" href="../css/log.css" />
  <link rel="stylesheet" href="../css/mobile.css" media="screen and (max-width: 750px)" />
</head>

<body>
  <script src="/js/menu.js"></script>
  <header id="menu" class="bgcolor" hidden>
    <button class="color bgcolor" id="js-button"><b></b></button>
    <nav id="contents">
      <a href="#" onclick="window.history.back(); return false;">
        <p><b>creative-community.space</b></p>
        <u>↩︎</u>
      </a>
    </nav>
  </header>

  <main id="log">
    <div>
      <h1>
        <code id="lastModified"><?php echo $date;?></code><br/>
        <b><?php echo $season;?></b>
      </h1>
      <h2><?php echo $description;?></h2>
    </div>
  </main>

  <dialog id="modal" class="color bgcolor">
    <h3><?php echo $season;?></h3>
    <button class="color bgcolor" id="closeButton">×</button>
  </dialog>
</body>
</html>
