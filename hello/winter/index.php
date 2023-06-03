<?php
mb_language("ja");
mb_internal_encoding("UTF-8");
date_default_timezone_set('Asia/Tokyo');

$season = "冬 Winter";
$date = "November 8 - February 3";
$description = "「ふゆ」は万物が冷ゆ（ひゆ）る季節";
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

  #log button b::before {
    content: "("attr(data-name)")";
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
      <h2><?php echo $description;?></h2>
    </div>
    <section>
      <ul>
        <li>
          <p>
            <date>November 8</date> -
            <date>November 21</date>
          </p>
          <button type="button" data-date="Snow appears on distant mountains" data-hello="この日から立春の前日までが冬。日は短くなり時雨が降る季節。北国や高山からは初雪の知らせも届き、関東では空っ風が吹く頃。">
            小雪 <b data-name="shousetsu"></b>
          </button>
        </li>
        <li>
          <p>
            <date>November 22</date> -
            <date>December 6</date>
          </p>
          <button type="button" data-date="Plants come into full leaf" data-hello="陽射しは弱まり、冷え込みが厳しくなる季節。木々の葉は落ち、平地にも初雪が舞い始める頃。">
            小満 <b data-name="shouman"></b>
          </button>
        </li>
        <li>
          <p>
            <date>December 7</date> -
            <date>December 21</date>
          </p>
          <button type="button" data-date="Cold winds blow from Siberia" data-hello="朝夕には池や川に氷を見るようになる。大地の霜柱を踏むのもこの頃から。山々は雪の衣を纏って冬の姿となる頃。">
            大雪 <b data-name="taisetsu"></b>
          </button>
        </li>
        <li>
          <p>
            <date>December 22</date> -
            <date>January 5</date>
          </p>
          <button type="button" data-date="The Winter Solstice" data-hello="一年中で最も夜の長い日。この日より日が伸び始めることから、古くはこの日を年の始点と考えられた。冬至南瓜や柚湯の慣習が残る日。">
            冬至 <b data-name="touji"></b>
          </button>
        </li>
        <li>
          <p>
            <date>January 6</date> -
            <date>January 19</date>
          </p>
          <button type="button" data-date="Cold weather nears its peak" data-hello="この日は寒の入り、これから節分までの期間が「寒」である。寒さはこれからが本番。池や川の氷も厚みをます頃。">
            小寒 <b data-name="shoukan"></b>
          </button>
        </li>
        <li>
          <p>
            <date>January 20</date> -
            <date>February 3</date>
          </p>
          <button type="button" data-date="Coldest time of the year" data-hello="一年で一番寒さの厳しい頃 。逆の見方をすれば、これからは暖かくなると言うことである。春はもう目前。">
            大寒 <b data-name="daikan"></b>
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
