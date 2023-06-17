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

if (isset($_GET["timeframe"])) {
  $timeframe = $_GET["timeframe"];
}

$source_file = $timeframe . ".csv";
$fp = fopen($source_file, 'a+b');
$post = sizeof(file($source_file));

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
  <title><?php echo $title; ?></title>
  <meta name="description" content="<?php echo $description; ?>">
  <meta property="og:title" content="<?php echo $title; ?>" />
  <meta property="og:site_name" content="<?php echo $_SERVER['HTTP_HOST']; ?>" />
  <meta property="og:url" content="<?php echo $url; ?>" />
  <meta property="og:type" content="website" />
  <meta property="og:locale" content="ja_JP" />
  <meta property="og:image" content="../summary.png" />
  <meta name="twitter:card" content="summary_large_image" />
  <meta name="twitter:image" content="../summary.png" />

  <link rel="stylesheet" href="/css/menu.css" />
  <link rel="stylesheet" href="../../style.css" />
  <link rel="stylesheet" href="../../css/index.css" />
  <link rel="stylesheet" href="../../css/controls.css" />
  <link rel="stylesheet" href="../../css/log.css" />
  <link rel="stylesheet" href="../../css/mobile.css" media="screen and (max-width: 750px)" />
  <link rel="stylesheet" href="../../css/72ko.css" />
  <link rel="stylesheet" href="../../css/print.css" media="print"/>
  <style media="screen">


  @media print {
    #log div,
    #log hr {
      display: none;
    }

    main {
      break-after: page;
    }

    #hello #readme p,
    #hello input[type="button"] {
      font-size: 75%;
    }

    #hello #readme p,
    #hello input[type="button"] {
      padding: 0;
      margin: 0;
    }

    #hello input[type="button"] {
      border: none;
      cursor: none;
      text-decoration: underline;
    }

    #log ul li button::after {
      content: attr(data-hello);
      font-size: 75%;
      margin: 1rem 0;
    }
  }

  </style>
  <link rel="icon" href="/ver/icon.png" type="image/png">
  <link rel="icon" href="/ver/icon/android.png" sizes="192x192" type="image/png">
  <link rel="apple-touch-icon-precomposed" href="/ver/icon/apple.png" sizes="180x180" type="image/png">
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
      <a href="/hello/<?php echo $season; ?>/">
        <i><?php echo $sekkiName; ?> is the season in</i>
        <p><b><?php echo $seasonName; ?></b> <?php echo $season; ?></p>
      </a>
    </nav>
  </header>
  <script src="/js/menu.js"></script>
