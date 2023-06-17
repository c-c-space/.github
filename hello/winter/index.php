<?php
mb_language("ja");
mb_internal_encoding("UTF-8");
require('../all/greeting.php');
require('../all/24sekki.php');

$thisSeason = "冬 Winter";
$thisDate = "November 8 - February 3";
$description = "「ふゆ」は万物が冷ゆ（ひゆ）る季節。";
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
  <link rel="stylesheet" href="../style.css" />
  <link rel="stylesheet" href="../css/index.css" />
  <link rel="stylesheet" href="../css/controls.css" />
  <link rel="stylesheet" href="../css/log.css" />
  <link rel="stylesheet" href="../css/mobile.css" media="screen and (max-width: 750px)" />
  <link rel="stylesheet" href="../css/print.css" media="print" />
  <link rel="icon" href="/ver/icon.png" type="image/png">
  <link rel="icon" href="/ver/icon/android.png" sizes="192x192" type="image/png">
  <link rel="apple-touch-icon-precomposed" href="/ver/icon/apple.png" sizes="180x180" type="image/png">
  <style media="screen">
  #log h2 {
    width: calc(100% - 1rem);
    max-width: 550px;
  }

  #log h2 {
    font-size: 100%;
    line-height: 150%;
  }

  #log button::before {
    content: attr(data-name);
  }

  @page {
    size: A5;
  }

  @media print {
    #log h2 {
      font-size: 75%;
      width: 75%;
    }

    #log section ul li {
      font-size: 1rem;
      padding: 1.5rem 1.5rem 1.5rem 0.5rem;
    }

    #log ul li p::after {
      content: attr(data-description);
      font-size: 90%;
      margin: 1rem 0 0;
    }

    #log ul li button::after {
      content: attr(data-note);
      font-size: 75%;
      margin: 1rem 0;
    }
  }
  </style>
</head>

<body>
  <header id="menu" class="bgcolor" hidden>
    <button class="color bgcolor" id="js-button"><b></b></button>
    <?php require('../all/menu.php'); ?>
  </header>
  <script src="/js/menu.js"></script>

  <main id="log">
    <div>
      <h1>
        <code id="lastModified"><?php echo $thisDate;?></code>
        <b><?php echo $thisSeason;?></b>
      </h1>
      <h2><?php echo $description;?><br/>
        冬の真ん中、北半球では1年のうちで最も夜（日没から日の出まで）の時間が長い冬至を境に太陽が生まれ変わり、陽気が増え始めるとされている。
      </h2>
    </div>
    <section>
      <ul></ul>
    </section>
  </main>

  <dialog id="modal" class="color bgcolor">
    <h3><?php echo $thisSeason;?></h3>
    <p><?php echo $description;?></p>
    <button class="color bgcolor" id="closeButton">×</button>
    <hr/>
    <section id="collection">
      <select class="color bgcolor" id="sekki">
        <option selected disabled>View The Collection</option>
      </select>
      <p><label for="sekki">コントロールを選択すると、二十四節気ごとの投稿一覧ページに移動します。</label></p>
      <hr>
    </section>
    <form method="GET">
      <p>
        <smal>
          <u>Choose A Traditional Japanese Seasonal Color to Change Text & Background Colors</u>
        </small>
      </p>
      <section>
        <label for="color">文字の色</label>
        <select class="color bgcolor" id="color">
          <option selected>Text Color</option>
        </select>
        <br/>
        <label for="bgcolor">背景の色</label>
        <select class="color bgcolor" id="bgcolor">
          <option selected>Background Color</option>
        </select>
        <hr/>
        <label for="fontSize" hidden>文字の大きさ</label>
        <select class="color bgcolor" id="fontSize" hidden>
          <option value="13px">Small</option>
          <option value="16px" selected>Medium</option>
          <option value="20px">Large</option>
        </select>
      </section>
      コントロールから日本の伝統的な季節の色を選択すると、文字・背景の色が変更されます。
    </form>
  </dialog>
  <?php require('../all/controls.html'); ?>

  <script src="../all/controls.js"></script>
  <script src="../all/sekki.js"></script>
  <script type="text/javascript">
  colorJSON('color.json')
  sekkiJSON('sekki.json')
  </script>
  <script src="../js/setStyles.js"></script>
</body>
</html>
