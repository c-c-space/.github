<?php
mb_language("ja");
mb_internal_encoding("UTF-8");
date_default_timezone_set('Asia/Tokyo');

$season = "秋 Autumn";
$date = "Aug 8 - Nov 7";
$description = "「あき」は草木が紅（あか）く染まる季節";
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
</head>

<body>
  <script src="/js/menu.js"></script>
  <header id="menu" class="bgcolor" hidden>
    <button class="color bgcolor" id="js-button"><b></b></button>
    <nav id="contents">
      <a href="#" onclick="window.history.back(); return false;">
        <p><b>creative-community.space</b></p>
        <u>↩︎</u>
      </a>
    </nav>
  </header>

  <main id="log">
    <div>
      <h1>
        <code id="lastModified"><?php echo $date;?></code>
        <b><?php echo $season;?></b>
      </h1>
      <h2><?php echo $description;?></h2>
    </div>
    <section>
      <ul>
        <li>
          <p>
            <date>Aug 8</date> -
            <date>Aug 22</date>
          </p>
          <button type="button" data-date="8月8日 - 8月22日頃" data-hello="The Beginning of Autumn">
            立秋 (<b>risshu</b>)
          </button>
          <p>
            この日から立冬の前日までが秋。<br/>
            一年で一番暑い頃であるが、一番暑いと言うことはあとは涼しくなるばかり。<br/>
            暑中見舞いはこの前日まで、この日以降は残暑見舞い。
          </p>
          <br/>
        </li>
        <li>
          <p>
            <date>Aug 23</date> -
            <date>Sep 7</date>
          </p>
          <button type="button" data-date="8月23日 - 9月7日頃" data-hello="Hot weather abates">
            処暑 (<b>shosho</b>)
          </button>
          <p>
            処暑は暑さが止むと言う意味。<br/>
            萩の花が咲き、朝夕は心地よい涼風が吹く頃だが、台風のシーズンでもある。
          </p>
          <br/>
        </li>
        <li>
          <p>
            <date>Sep 8</date> -
            <date>Sep 22</date>
          </p>
          <button type="button" data-date="9月8日 - 9月22日頃" data-hello="Dew forms on the leaves">
            白露 (<b>hakuro</b>)
          </button>
          <p>
            野には薄の穂が顔を出し、秋の趣がひとしお感じられる頃。<br/>
            朝夕の心地よい涼風に、幾分の肌寒さを感じさせる冷風が混じり始める。
          </p>
          <br/>
        </li>
        <li>
          <p>
            <date>Sep 23</date> -
            <date>Oct 7</date>
          </p>
          <button type="button" data-date="9月23日 - 10月7日頃" data-hello="The Autumn Equinox">
            秋分 (<b>shuubun</b>)
          </button>
          <p>
            暑い日は減り代わりに冷気を感ずる日が増える。<br/>
            昼と夜の長さがほぼ同じになる、秋の七草が咲き揃う頃。
          </p>
          <br/>
        </li>
        <li>
          <p>
            <date>Oct 8</date> -
            <date>Oct 23</date>
          </p>
          <button type="button" data-date="10月8日 - 10月23日頃" data-hello="Weather becomes colder">
            寒露 (<b>kanro</b>)
          </button>
          <p>
            冷たい露の結ぶ頃。秋もいよいよ本番。<br/>
            菊の花が咲き始め、山の木々の葉は紅葉の準備に入る。
          </p>
          <br/>
        </li>
        <li>
          <p>
            <date>Oct 24</date> -
            <date>Nov 7</date>
          </p>
          <button type="button" data-date="10月24日 - 11月7日頃" data-hello="The season of frost">
            霜降 (<b>soukou</b>)
          </button>
          <p>
            北国や山間部では、霜が降りて朝には草木が白く化粧をする頃。<br/>
            野の花の数は減り始める、代わって山を紅葉が飾る頃である。
          </p>
          <br/>
        </li>
      </ul>
    </section>
  </main>
  <script src="../js/sekki.js"></script>

  <dialog id="modal" class="color bgcolor">
    <h3><?php echo $season;?></h3>
    <button class="color bgcolor" id="closeButton">×</button>
  </dialog>
</body>
</html>
