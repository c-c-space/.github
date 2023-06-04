<?php
mb_language("ja");
mb_internal_encoding("UTF-8");
date_default_timezone_set('Asia/Tokyo');

if (date("H") >= 6 and date("H") <= 11) {
  $greeting = "Good Morning おはよう";
  $timeframe = "morning";
} elseif (date("H") >= 12 and date("H") <= 17) {
  $greeting = "Hello こんにちは";
  $timeframe = "afternoon";
} elseif (date("H") >= 18 and date("H") <= 23) {
  $greeting = "Good Evening こんばんは";
  $timeframe = "evening";
} else {
  $greeting = "Good Night おやすみ";
  $timeframe = "night";
}

$source_file = fopen($timeframe.".csv", 'r');
while ($row = fgetcsv($source_file)) {
  $rows[] = $row;
}

function h($str) {
  return htmlspecialchars($str, ENT_QUOTES, 'UTF-8');
}

$post = count($rows);
?>

<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="format-detection" content="telephone=no" />
  <link rel="stylesheet" href="../../style.css" />
  <link rel="stylesheet" href="../../css/index.css" />
  <link rel="stylesheet" href="../../css/controls.css" />
  <link rel="stylesheet" href="../../css/log.css" />
  <link rel="stylesheet" href="../../css/mobile.css" media="screen and (max-width: 750px)" />
</head>


<body>
</body>
</html>
