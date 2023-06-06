<?php
mb_language("ja");
mb_internal_encoding("UTF-8");
require('../all/greeting.php');

$season = "冬 Winter";
$seasonDate = "November 8 - February 3";
$description = "「ふゆ」は万物が冷ゆ（ひゆ）る季節。";
$title = $season .' | '. $seasonDate;
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
    width: 90%;
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
  <script src="/js/menu.js"></script>
  <header id="menu" class="bgcolor" hidden>
    <button class="color bgcolor" id="js-button"><b></b></button>
    <?php require('../all/menu.php'); ?>
  </header>

  <main id="log">
    <div>
      <h1>
        <code id="lastModified"><?php echo $seasonDate;?></code>
        <b><?php echo $season;?></b>
      </h1>
      <h2><?php echo $description;?><br/>
        冬の真ん中、北半球では1年のうちで最も夜（日没から日の出まで）の時間が長い冬至を境に太陽が生まれ変わり、陽気が増え始めるとされている。
      </h2>
    </div>
    <section>
      <ul>
        <li>
          <p>
            <date>November 8</date> -
            <date>November 21</date>
          </p>
          <button type="button" data-name="立冬" data-date="The Beginning of Winter" data-hello="日は短くなり時雨が降る。木枯らしが吹き、北国や高山からは初雪の知らせも届く頃。冬枯れの景色の中で山茶花や水仙の花が咲きはじめる。">
            (りっとう)
          </button>
        </li>
        <li>
          <p>
            <date>November 22</date> -
            <date>December 6</date>
          </p>
          <button type="button" data-name="小雪" data-date="Snow appears on distant mountains" data-hello="陽射しは弱まり、冷え込みが厳しくなる。木々の葉は落ち、平地にも初雪が舞い始める。「お歳暮」の準備をする期間。">
            (しょうせつ)
          </button>
        </li>
        <li>
          <p>
            <date>December 7</date> -
            <date>December 21</date>
          </p>
          <button type="button" data-name="大雪" data-date="Cold winds blow from Siberia" data-hello="山々は雪の衣を纏って冬の姿となり、動物たちが冬ごもりに入る時期。鮭が川を遡上し、鱈など冬の魚の漁が盛んになる。">
            (たいせつ)
          </button>
        </li>
        <li>
          <p>
            <date>December 22</date> -
            <date>January 5</date>
          </p>
          <button type="button" data-name="冬至" data-date="The Winter Solstice" data-hello="冬至日より日が伸び始めることから、古くには年の始点と考えられた。栄養価の高いかぼちゃを食べ、柚子湯に浸かり無病息災を願う。">
            (とうじ)
          </button>
        </li>
        <li>
          <p>
            <date>January 6</date> -
            <date>January 19</date>
          </p>
          <button type="button" data-name="小寒" data-date="Cold weather nears its peak" data-hello="「寒の入り」といい、寒さが厳しくなる頃。寒さはこれからが本番。これから節分までの期間が「寒」である。「寒中見舞い」を出しはじめる時期。">
            (しょうかん)
          </button>
        </li>
        <li>
          <p>
            <date>January 20</date> -
            <date>February 3</date>
          </p>
          <button type="button" data-name="大寒" data-date="Coldest time of the year" data-hello="一年で一番寒さの厳しい頃。逆の見方をすれば、これからは暖かくなると言うこと。春はもう目前。鶏が卵を産み、蕗の花が咲いたり、春に向けての足音が聞こえはじめる。">
            (だいかん)
          </button>
        </li>
      </ul>
    </section>
  </main>

  <dialog id="modal" class="color bgcolor">
    <h3><?php echo $season;?></h3>
    <p><?php echo $description;?></p>
    <button class="color bgcolor" id="closeButton">×</button>
    <hr/>
    <section id="collection">
      <select class="color bgcolor" id="sekki">
        <option selected disabled>View The Collection</option>
        <option value="rittou">November 8 - November 21</option>
        <option value="shousetsu">November 22 - December 6</option>
        <option value="taisetsu">December 7 - December 21</option>
        <option value="touji">December 22 - January 5</option>
        <option value="shoukan">January 6 - January 19</option>
        <option value="daikan">January 20 - February 3</option>
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
        <label for="color">Text Color</label>
        <select class="color bgcolor" id="color"></select>
        <br/>
        <label for="bgcolor">Background Color</label>
        <select class="color bgcolor" id="bgcolor"></select>
        <hr/>
        <label for="fontSize" hidden>Font Size</label>
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

  <script src="color.js"></script>
  <script src="../all/24sekki.js"></script>
  <script src="../../profile/js/setStyles.js"></script>
</body>
</html>
