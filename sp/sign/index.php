<?php
$title = "自分の気持ちを知る・表す";
$year = "2021";
$month = "03";

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

  <main>
    <?php require('/sign/beta/viewall.php'); ?>
  </main>
  <script src="/sign/js/flash.js"></script>

  <?php require('/sign/now.php'); ?>
  <script src="/sign/js/viewall.js"></script>
</body>
</html>
