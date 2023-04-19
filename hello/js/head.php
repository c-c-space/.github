<?php

mb_language("ja");
mb_internal_encoding("UTF-8");
date_default_timezone_set('Asia/Tokyo');

$morning = fopen("morning.csv", 'r');
$afternoon = fopen("afternoon.csv", 'r');
$evening = fopen("evening.csv", 'r');
$night = fopen("night.csv", 'r');

while ($row = fgetcsv($morning)) {
  $rows[] = $row;
}

while ($row = fgetcsv($afternoon)) {
  $rows[] = $row;
}

while ($row = fgetcsv($evening)) {
  $rows[] = $row;
}

while ($row = fgetcsv($night)) {
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

  <link rel="stylesheet" href="../style.css" />
  <link rel="stylesheet" href="../css/controls.css" />
  <link rel="stylesheet" href="../css/log.css" />
  <link rel="stylesheet" href="../css/mobile.css" media="screen and (max-width: 750px)" />
  <style type="text/css">
  #js-button,
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
