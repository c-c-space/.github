<?php
mb_language("ja");
mb_internal_encoding("UTF-8");
require('../all/greeting.php');
require('../all/24sekki.php');

$thisSeason = "夏 Summer";
$thisDate = "May 5 - August 7";
$description = "「なつ」は熱（ねつ）の季節。";
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
        夏の真ん中、北半球では1年のうちで最も昼（日の出から日没まで）の時間が長い夏至は、日本の大部分で梅雨の最中で、あまり実感されない。
      </h2>
    </div>
    <section>
      <ul>
        <li>
          <p>
            <date>May 5</date> -
            <date>May 19</date>
          </p>
          <button type="button" data-name="立夏" data-date="The Beginning of Summer" data-hello="一年のうちで、もっとも過ごしやすい節。野山が新緑に彩られ、夏の気配が感じられるようになる。かえるが鳴き始め、竹の子が生えてくる頃。">
            (りっか)
          </button>
        </li>
        <li>
          <p>
            <date>May 20</date> -
            <date>Jun 4</date>
          </p>
          <button type="button" data-name="小満" data-date="Plants come into full leaf" data-hello="あらゆる生命が満ちていく頃。陽気がよくなり、草木などの生物が次第に生長して生い茂る。西日本でははしり梅雨が現れる。">
            (しょうまん)
          </button>
        </li>
        <li>
          <p>
            <date>Jun 5</date> -
            <date>Jun 20</date>
          </p>
          <button type="button" data-name="芒種" data-date="Time to plant rice seedlings" data-hello="稲の穂先のように芒(とげのようなもの)のある穀物の種まきをする頃という意味だが、現在の種まきは大分早まっている。梅の実が熟し、梅雨のじめじめした空模様がはじまる。">
            (ぼうしゅ)
          </button>
        </li>
        <li>
          <p>
            <date>Jun 21</date> -
            <date>July 6</date>
          </p>
          <button type="button" data-name="夏至" data-date="The Summer Solstice" data-hello="一年で昼の時間が一番長くなる節だが、日本の大部分は梅雨の時期であまり実感されない。花しょうぶや紫陽花などの雨の似合う花が咲き、暑さが増して来る頃。">
            (げし)
          </button>
        </li>
        <li>
          <p>
            <date>July 7</date> -
            <date>July 22</date>
          </p>
          <button type="button" data-name="小暑" data-date="End of the rainy season" data-hello="梅雨明けが近く、本格的な暑さが始まる集中豪雨のシーズン。蓮の花が咲き、蝉の合唱が始まる「暑中見舞い」を出す頃。">
            (しょうしょ)
          </button>
        </li>
        <li>
          <p>
            <date>July 23</date> -
            <date>August 7</date>
          </p>
          <button type="button" data-name="大暑" data-date="Hottest time of the year" data-hello="最も暑い節という意味だが実際は次の節の方が暑い。学校は夏休みに入り、空には雲の峰が高々とそびえるようになる。夏の土用の時期。">
            (たいしょ)
          </button>
        </li>
      </ul>
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
        <option value="rikka">May 5 - May 19</option>
        <option value="shouman">May 20 - Jun 4</option>
        <option value="boushu">Jun 5 - Jun 20</option>
        <option value="geshi">Jun 21 - July 6</option>
        <option value="shousho">July 7 - July 22</option>
        <option value="taisho">July 23 - August 7</option>
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
        <select class="color bgcolor" id="bgcolor">
          <option selected>Text Color</option>
        </select>
        <br/>
        <label for="bgcolor">背景の色</label>
        <select class="color bgcolor" id="color">
          <option selected>Background Color</option>
        </select>
        <hr/>
        <label for="fontSize">文字の大きさ</label>
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
  <script type="text/javascript">
    colorJSON('color.json');
  </script>
  <script src="../all/24sekki.js"></script>
  <script src="../../profile/js/setStyles.js"></script>
</body>
</html>
