<?php
mb_language("ja");
mb_internal_encoding("UTF-8");
date_default_timezone_set('Asia/Tokyo');

$season = "秋 Autumn";
$date = "August 8 - November 7";
$description = "「あき」は草木が紅（あか）く染まる季節。";
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
        秋の真ん中、昼夜の長さがほぼ当分に二分される(日本の場合、実際には昼の方が14分ほど長い)秋分の日は国民の祝日。「祖先をうやまい、なくなつた人々をしのぶ」日。
      </h2>
    </div>
    <section>
      <ul>
        <li>
          <p>
            <date>August 8</date> -
            <date>August 22</date>
          </p>
          <button type="button" data-name="立秋" data-date="The Beginning of Autumn" data-hello="一年で一番暑い頃。一番暑いと言うことはあとは涼しくなるばかり。季節の挨拶が「残暑見舞い」に替わる。">
            (りっしゅう)
          </button>
        </li>
        <li>
          <p>
            <date>August 23</date> -
            <date>September 7</date>
          </p>
          <button type="button" data-name="処暑" data-date="Hot weather abates" data-hello="暑さが和らぐ頃。マツムシや鈴虫など心地よい虫の声が聞こえ、萩の花が咲き、朝夕は心地よい涼風が吹く。同時に台風の季節も到来する。">
            (しょしょ)
          </button>
        </li>
        <li>
          <p>
            <date>September 8</date> -
            <date>September 22</date>
          </p>
          <button type="button" data-name="白露" data-date="Dew forms on the leaves" data-hello="野には薄の穂が顔を出し、朝露がつき白い粒のように光って見える頃。朝夕の心地よい涼風に、幾分の肌寒さを感じさせる冷風が混じり始める。">
            (はくろ)
          </button>
        </li>
        <li>
          <p>
            <date>September 23</date> -
            <date>October 7</date>
          </p>
          <button type="button" data-name="秋分" data-date="The Autumn Equinox" data-hello="「暑さ寒さも彼岸まで」の言葉通り、暑い日は減り代わりに冷気を感ずる日が増える。しだいに秋が深まっていく、秋の七草が咲き揃う頃。">
            (しゅうぶん)
          </button>
        </li>
        <li>
          <p>
            <date>October 8</date> -
            <date>October 23</date>
          </p>
          <button type="button" data-name="寒露" data-date="Weather becomes colder" data-hello="夜が長くなり、露がつめたく感じられる。菊の花が咲き始め、山の木々の葉は紅葉の準備に入る。安定して秋晴れの日が多くなる頃。">
            (かんろ)
          </button>
        </li>
        <li>
          <p>
            <date>October 24</date> -
            <date>November 7</date>
          </p>
          <button type="button" data-name="霜降" data-date="The Season of Frost" data-hello="北国や山間部では、朝霜が降りて草木が白く化粧をする頃。野の花の数は減り始め、代わって山を紅葉が飾る。人々や動物たちの冬仕度が始まる。">
            (そうこう)
          </button>
        </li>
      </ul>
    </section>
  </main>

  <dialog id="modal" class="color bgcolor">
    <h3><?php echo $season;?></h3>
    <p><?php echo $description;?></p>
    <button class="color bgcolor" id="closeButton">×</button>
    <section id="about"></section>
    <hr/>
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

  <script src="color.js"></script>
  <script src="../all/24sekki.js"></script>
  <script src="../../profile/js/setStyles.js"></script>
</body>
</html>
