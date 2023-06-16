<?php
mb_language("ja");
mb_internal_encoding("UTF-8");
require('../all/greeting.php');
require('../all/24sekki.php');

$thisSeason = "春 Spring";
$thisDate = "February 4 - May 4";
$description = "「はる」は万物が発る季節。";
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
        春の真ん中、昼夜の長さがほぼ当分に二分される(日本の場合、実際には昼の方が14分ほど長い)春分の日は国民の祝日。「自然をたたえ、生物をいつくしむ」日。
      </h2>
    </div>
    <section>
      <ul>
        <li>
          <p>
            <date>February 4</date> -
            <date>February 18</date>
          </p>
          <button type="button" data-name="立春" data-date="The Beginning of Spring" data-hello="旧暦では、一年のはじまりは立春から。まだ寒さの厳しい時期だが日脚は徐々に伸び、暖かい地方では梅が咲き始める。">
            (りっしゅん)
          </button>
        </li>
        <li>
          <p>
            <date>February 19</date> -
            <date>March 4</date>
          </p>
          <button type="button" data-name="雨水" data-date="Snow melts into water" data-hello="空から降るものが雪から雨に替わる頃。深く積もった雪も融け始める。草木がほんのり色づく様子や、春霞を楽しめる季節。">
            (うすい)
          </button>
        </li>
        <li>
          <p>
            <date>March 5</date> -
            <date>March 19</date>
          </p>
          <button type="button" data-name="啓蟄" data-date="Insects emerge from the ground" data-hello="冬眠をしていた虫が穴から出てくる頃。蝶々が飛びはじめ、柳の若芽が芽吹き、蕗のとうの花や桃の花が咲く頃。">
            (けいちつ)
          </button>
        </li>
        <li>
          <p>
            <date>March 20</date> -
            <date>April 3</date>
          </p>
          <button type="button" data-name="春分" data-date="The Spring Equinox" data-hello="春分日をはさんで前後7日間が彼岸。雀が巣をつくり始め、桜が開花する頃。花冷えや寒の戻りがあるので暖かいと言っても油断は禁物。この後は昼の時間が長くなって行く。">
            (しゅんぶん)
          </button>
        </li>
        <li>
          <p>
            <date>April 4</date> -
            <date>April 18</date>
          </p>
          <button type="button" data-name="清明" data-date="Clear and Bright, Plants flower" data-hello="清浄明潔の略。晴れ渡った空には当に清浄明潔という語にふさわしい。つばめが飛来し、爽やかな風が吹く頃。地上に目を移せば、百花が咲き競う。">
            (せいめい)
          </button>
        </li>
        <li>
          <p>
            <date>April 19</date> -
            <date>May 4</date>
          </p>
          <button type="button" data-name="穀雨" data-date="Spring rains and seed sowing" data-hello="田んぼや畑の準備が整い、それに合わせるように柔らかな春の雨が降る頃。この頃より変りやすい春の天気も安定し日差しも強まる。植物が緑一色に輝きはじめる。">
            (こくう)
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
        <option value="risshun">February 4 - February 18</option>
        <option value="usui">February 19 - March 4</option>
        <option value="keichitsu">March 5 - March 19</option>
        <option value="shunbun">March 20 - April 3</option>
        <option value="seimei">April 4 - April 18</option>
        <option value="kokuu">April 19 - May 4</option>
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
  <script type="text/javascript">
    colorJSON('color.json');
  </script>
  <script src="../all/24sekki.js"></script>
  <script src="../../profile/js/setStyles.js"></script>
</body>
</html>
