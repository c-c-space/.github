<?php
mb_language("ja");
mb_internal_encoding("UTF-8");
date_default_timezone_set('Asia/Tokyo');

$season = "春 Spring";
$date = "February 4 - May 4";
$description = "「はる」は万物が発る季節。";
$title = $season .' | '. $date;
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
    width: 95%;
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
  <main id="log">
    <div>
      <h1>
        <code id="lastModified"><?php echo $date;?></code>
        <b><?php echo $season;?></b>
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
          <button type="button" data-name="立春" data-date="The Beginning of Spring" data-hello="この日から立夏の前日までが春。まだ寒さの厳しい時期ではあるが日脚は徐々に伸び、暖かい地方では梅が咲き始める。">
            (りっしゅん)
          </button>
        </li>
        <li>
          <p>
            <date>February 19</date> -
            <date>March 4</date>
          </p>
          <button type="button" data-name="雨水" data-date="Snow melts into water" data-hello="空から降るものが雪から雨に替わる頃、深く積もった雪も融け始める。春一番が吹き、九州南部ではうぐいすの鳴き声が聞こえ始める。">
            (うすい)
          </button>
        </li>
        <li>
          <p>
            <date>March 5</date> -
            <date>March 19</date>
          </p>
          <button type="button" data-name="啓蟄" data-date="Insects emerge from the ground" data-hello="啓蟄は冬眠をしていた虫が穴から出てくる頃という意味。実際に虫が活動を始めるのはもう少し先。柳の若芽が芽吹き蕗のとうの花が咲く頃。">
            (けいちつ)
          </button>
        </li>
        <li>
          <p>
            <date>March 20</date> -
            <date>April 3</date>
          </p>
          <button type="button" data-name="春分" data-date="The Spring Equinox" data-hello="この日をはさんで前後7日間が彼岸。花冷えや寒の戻りがあるので暖かいと言っても油断は禁物。昼夜の長さがほぼ同じ頃であり、この後は昼の時間が長くなって行く。">
            (しゅんぶん)
          </button>
        </li>
        <li>
          <p>
            <date>April 4</date> -
            <date>April 18</date>
          </p>
          <button type="button" data-name="清明" data-date="Clear and Bright, Plants flower" data-hello="清浄明潔の略。晴れ渡った空には当に清浄明潔という語ふさわしい。地上に目を移せば、百花が咲き競う季節。">
            (せいめい)
          </button>
        </li>
        <li>
          <p>
            <date>April 19</date> -
            <date>May 4</date>
          </p>
          <button type="button" data-name="穀雨" data-date="Spring rains and seed sowing" data-hello="田んぼや畑の準備が整い、それに合わせるように、柔らかな春の雨が降る頃。この頃より変りやすい春の天気も安定し日差しも強まる。">
            (こくう)
          </button>
        </li>
      </ul>
    </section>
  </main>

  <dialog id="modal" class="color bgcolor">
    <h3><?php echo $season;?></h3>
    <p><?php echo $description;?></p>
    <button class="color bgcolor" id="closeButton">×</button>
    <br/>
    <form method="GET">
      <section>
        <label for="bgcolor">Background Color</label>
        <select class="color bgcolor" id="bgcolor"></select>
        <br/>
        <label for="color">Color</label>
        <select class="color bgcolor" id="color"></select>
        <hr/>
        <label for="fontSize">Font Size</label>
        <select class="color bgcolor" id="fontSize">
          <option value="13px">Small</option>
          <option value="16px" selected>Medium</option>
          <option value="20px">Large</option>
        </select>
      </section>
    </form>
  </dialog>

  <?php require('../all/controls.html'); ?>

  <script src="../js/sekki.js"></script>
  <script src="../../profile/js/jscolor.js"></script>
  <script src="../../profile/js/setStyles.js"></script>
</body>
</html>
