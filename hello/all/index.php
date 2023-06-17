<?php
mb_language("ja");
mb_internal_encoding("UTF-8");
require('../all/24sekki.php');

$sekki24 = "二十四節気";
$sekkiDate = "24 Sekki";
$sekkiAbout = "divided each of the Four Seasons into 6 according to the ecliptic longitude of the Sun.";
$title = $sekki24 .' | '. $sekkiDate;
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
  <meta name="description" content="<?php echo $sekkiAbout; ?>">
  <meta property="og:title" content="<?php echo $title; ?>" />
  <meta property="og:site_name" content="<?php echo $_SERVER['HTTP_HOST']; ?>" />
  <meta property="og:url" content="<?php echo $url; ?>" />
  <meta property="og:type" content="website" />
  <meta property="og:locale" content="ja_JP" />
  <meta property="og:image" content="<?php echo $url; ?>summary.png" />
  <meta name="twitter:card" content="summary_large_image" />
  <meta name="twitter:image" content="<?php echo $url; ?>summary.png" />

  <link rel="stylesheet" href="/css/menu.css" />
  <link rel="stylesheet" href="../style.css" />
  <link rel="stylesheet" href="../css/index.css" />
  <link rel="stylesheet" href="../css/controls.css" />
  <link rel="stylesheet" href="../css/log.css" />
  <link rel="stylesheet" href="../css/mobile.css" media="screen and (max-width: 750px)" />
  <link rel="stylesheet" href="../css/72ko.css" />
  <link rel="icon" href="/ver/icon.png" type="image/png">
  <link rel="icon" href="/ver/icon/android.png" sizes="192x192" type="image/png">
  <link rel="apple-touch-icon-precomposed" href="/ver/icon/apple.png" sizes="180x180" type="image/png">
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="../css/print.css" media="print">
</head>

<body>
  <header id="menu" class="bgcolor" hidden>
    <button type="button" id="js-button"><b></b></button>
    <?php require('../all/menu.php'); ?>
  </header>
  <script src="/js/menu.js"></script>

  <main id="log">
    <button type="button" id="enter-btn" onClick="ChangeHidden()">二十四節気 24 Sekki</button>
    <div>
      <h1>
        <code id="lastModified"><?php echo $sekkiDate;?></code>
        <b><?php echo $sekki24;?></b>
      </h1>
      <h2><?php echo $sekkiAbout;?></h2>
    </div>
    <hr>
    <section>
      <ul></ul>
    </section>
    <section class="controls">
      <input type="button" class="color bgcolor" id="cancel-btn" value="⏹">
      <input type="button" class="color bgcolor" id="pause-btn" value="⏸">
      <input type="button" class="color bgcolor" id="resume-btn" value="⏯">
      <select hidden id="sekki">
        <option selected disabled>View The Collection</option>
      </select>
    </section>
  </main>

  <main id="hello" hidden>
    <section id="readme">
      <strong>
        The Year is divided into Four Seasons, <wbr/>
        but traditionally the year was also divided up into 24 Sekki.<br/>
      </strong>
      <strong>
        <?php echo $sekkiDate;?>
        <?php echo $sekkiAbout;?>
      </strong>
      <p>
        二十四節気は、四季「春」「夏」「秋」「冬」 <wbr/>
        それぞれを太陽の動きをもとに6つに分け、<wbr/>
        季節をあらわす名前をつけたもの。<br/>
        中国の中原の気候をもとに作られたため、日本で体感する気候とは季節感が合わない名称や時期があります。 <wbr/>
        また、その年によって節の始まりの日が1日程度前後することがあります。<br/>
      </p>
    </section>
    <br>
    <p>
      On This Textboard, Posts are created and read every 24 Sekki to representing the changing seasons.<br/>
      この掲示板では、季節の移り変わりを表すため、投稿を二十四節気ごとに記録・表示しています。
    </p>
    <hr>
    <input type="button" onclick="ChangeHidden()" value="閉じる Close">
  </main>

  <script src="sekki.js"></script>
  <script type="text/javascript">
  sekkiJSON('../spring/sekki.json');
  sekkiJSON('../summer/sekki.json');
  sekkiJSON('../autumn/sekki.json');
  sekkiJSON('../winter/sekki.json');

  function ChangeHidden() {
    const mainAll = document.querySelectorAll('main');
    mainAll.forEach(main => {
      if (main.hidden == false) {
        main.hidden = true;
      } else {
        main.hidden = false;
      }
    })
  };
  </script>
</body>
</html>
