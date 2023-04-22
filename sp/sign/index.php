<?php
$title = "自分の気持ちを知る・表す";

mb_language("ja");
mb_internal_encoding("UTF-8");

$source_file = "index.csv";
$fp = fopen($source_file, "r");
$post = sizeof(file($source_file));

$sign = $post .'の色と記号';
$description = '色と記号';

$site = "http".(isset($_SERVER["HTTPS"])?"s":"")."://"."{$_SERVER["HTTP_HOST"]}";
$url = "{$site}"."{$_SERVER['REQUEST_URI']}";

function h($str)
{
  return htmlspecialchars($str, ENT_QUOTES, "UTF-8");
}

while ($row = fgetcsv($fp)) {
  $rows[] = $row;
}

fclose($fp);
?>

<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="format-detection" content="telephone=no" />
  <title><?php echo $title . $sign;?></title>
  <meta name="description" content="<?php echo $title . $description;?>">
  <meta property="og:title" content="<?php echo $title . $sign; ?>">
  <meta property="og:description" content="<?php echo $title . $description;?>">
  <meta property="og:site_name" content="<?php echo $site;?>">
  <meta property="og:url" content="<?php echo $url;?>" />
  <meta property="og:type" content="website" />
  <meta property="og:locale" content="ja_JP" />
  <meta property="og:image" content="../card.png" />
  <meta name="twitter:card" content="summary" />
  <meta name="twitter:image" content="../card.png" />

  <link rel="stylesheet" href="../style.css">
  <link rel="stylesheet" href="../coding/images.css" />
  <link rel="stylesheet" href="/sign/style.css" />
  <link rel="stylesheet" href="/sign/css/flash.css" />
  <link rel="stylesheet" href="/sign/css/viewall.css" />

  <link rel="icon" href="../icon.png" type="image/png">
  <link rel="apple-touch-icon-precomposed" href="../icon.png" type="image/png">
  <style type="text/css">
  html {
    height: -webkit-fill-available;
  }

  body {
    min-height: -webkit-fill-available;
  }

  #modal h1,
  #modal p,
  button {
    font-family: 'Times New Roman', serif;
    font-weight: 500;
    font-stretch: condensed;
    font-variant: common-ligatures tabular-nums;
    transform: scale(1, 1.1);
    word-spacing: -0.25ch;
  }
  </style>
</head>

<body style="background-image: linear-gradient(0deg,
  <?php if (!empty($rows)):?>
  <?php foreach ($rows as $row):?>
  #<?= h($row[1])?>,
  <?php endforeach;?>
  <?php else:?>
  #000,
  <?php endif;?>
  #fff);">

  <button type="button" id="mainBtn" class="viewAll" onclick="onModal()">Sign</button>
  <button type="button" class="backBtn" onclick="window.history.back(); return false;">↩︎</button>

  <dialog id="modal">
    <h1>自分の気持ちを知る・表す</h1>
    <p>
      2021年10月10日(日) - 30日(土)<br/>
      展覧会「新しい生活を集める」へ ご来場した皆様の気持ちを知る・表す 色と記号
    </p>
    <ul class="images"></ul>
    <br/>
    <button id="closeButton">Close</button>
  </dialog>

  <script type="text/javascript">
  const now = new Date();
  const hour = now.getHours();

  if (hour >= 0 && hour <= 10) {
    images = {
      'close/001.jpeg': ['令和三年三月の気持ちを表す色を印刷した布'],
      'close/002.jpeg': ['布が松の木の枝に絡まってほつれている'],
      'close/003.jpeg': ['松の木にほつれた糸が絡まっている'],
      'close/004.jpeg': ['布の切断面もほつれている'],
      'close/005.jpeg': ['ピントがぶれている写真'],
      'close/006.jpeg': ['今は布を手製の木枠に貼っています'],
    }
  } else if (hour >= 11 && hour <= 15) {
    images = {
      'day/001.gif': ['楽観のテクニック'],
      'day/002.gif': ['楽観のテクニック'],
      'day/003.gif': ['楽観のテクニック'],
      'day/004.gif': ['楽観のテクニック'],
      'day/005.gif': ['楽観のテクニック'],
    }
  } else if (hour >= 16 && hour <= 20) {
    images = {
      'night/001.gif': ['楽観のテクニック'],
      'night/002.gif': ['楽観のテクニック'],
      'night/003.gif': ['楽観のテクニック'],
      'night/004.gif': ['楽観のテクニック'],
    }
  } else if (hour >= 21 && hour <= 23) {
    images = {
      'close/001.jpeg': ['令和三年三月の気持ちを表す色を印刷した布'],
      'close/002.jpeg': ['布が松の木の枝に絡まってほつれている'],
      'close/003.jpeg': ['松の木にほつれた糸が絡まっている'],
      'close/004.jpeg': ['布の切断面もほつれている'],
      'close/005.jpeg': ['ピントがぶれている写真'],
      'close/006.jpeg': ['今は布を手製の木枠に貼っています'],
    }
  }
  </script>
  <script src="../coding/images.js"></script>

  <main>
    <?php require('../../sign/beta/viewall.php'); ?>
  </main>
  <script src="../../sign/js/flash.js"></script>

  <?php require('../../sign/beta/now.php'); ?>
  <script src="../../sign/js/viewall.js"></script>
  <script src="../dialog.js"></script>
</body>
</html>
