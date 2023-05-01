<?php

mb_language("ja");
mb_internal_encoding("UTF-8");
date_default_timezone_set('Asia/Tokyo');

if (date("H") >= 6 and date("H") <= 11) {
  $timeframe = "morning";
} elseif (date("H") >= 12 and date("H") <= 17) {
  $timeframe = "afternoon";
} elseif (date("H") >= 18 and date("H") <= 23) {
  $timeframe = "evening";
} else {
  $timeframe = "night";
}

if (isset($_GET["timeframe"])) {
  $timeframe = $_GET["timeframe"];
}

$source_file = fopen($timeframe . ".csv", 'r');
while ($row = fgetcsv($source_file)) {
  $rows[] = $row;
}

$post = count($rows);

function h($str) {
  return htmlspecialchars($str, ENT_QUOTES, 'UTF-8');
}
?>

<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="format-detection" content="telephone=no" />
  <script src="/js/index.js" async></script>
  <link rel="stylesheet" href="../style.css" />
  <link rel="stylesheet" href="../css/controls.css" />
  <link rel="stylesheet" href="../css/log.css" />
  <link rel="stylesheet" href="../css/mobile.css" media="screen and (max-width: 750px)" />
  <style type="text/css">
  #menu {
    background: #000;
  }

  #js-button {
    background: #fff;
  }

  #contents {
    mix-blend-mode: difference;
  }

  #contents a {
    filter: invert();
  }

  #log button {
    color: inherit;
  }

  #readme,
  #log {
    pointer-events: auto;
    user-select: auto;
  }

  #log section div {
    pointer-events: none;
    user-select: none;
  }

  #now {
    position: fixed;
    z-index: 100;
    width: 100%;
    bottom: 0;
    padding: 1rem;
  }

  @media screen and (max-width: 750px) {
    #now {
      padding: 2.5%;
    }
  }
  </style>
</head>
