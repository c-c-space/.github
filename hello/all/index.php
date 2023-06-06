<?php
mb_language("ja");
mb_internal_encoding("UTF-8");

$season = "二十四節気";
$date = "24 Sekki";
$description = "The Year is divided into Four Seasons, but traditionally the year was also divided up into 24 Sekki";
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
  <script src="/js/menu.js"></script>
  <header id="menu" class="bgcolor" hidden>
    <button class="color bgcolor" id="js-button"><b></b></button>
    <?php require('../all/menu.php'); ?>
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
          <button type="button" data-name="雨水" data-date="Snow melts into water" data-hello="空から降るものが雪から雨に替わる頃。深く積もった雪も融け始める。春一番が吹き、草木がほんのり色づく様子や、春霞を楽しめる季節。">
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
          <button type="button" data-name="芒種" data-date="Time to plant rice seedlings" data-hello="稲の穂先のように芒(とげのようなもの)のある穀物の種まきをする頃という意味であるが、現在の種まきは大分早まっている。梅の実が熟し、梅雨のじめじめした空模様がはじまる。">
            (ぼうしゅ)
          </button>
        </li>
        <li>
          <p>
            <date>Jun 21</date> -
            <date>July 6</date>
          </p>
          <button type="button" data-name="夏至" data-date="The Summer Solstice" data-hello="一年で昼の時間が一番長くなる節だが、日本の大部分は梅雨の時期で、あまり実感されない。花しょうぶや紫陽花などの雨の似合う花が咲き、暑さが増して来る頃。">
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
          <button type="button" data-name="大暑" data-date="Hottest time of the year" data-hello="最も暑い節という意味だが実際は次の節の方が暑い。学校は夏休みに入り、空には雲の峰が高々とそびえるようになる、夏の土用の時期。夏の花が盛りになる頃。">
            (たいしょ)
          </button>
        </li>
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
          <button type="button" data-name="処暑" data-date="Hot weather abates" data-hello="暑さが和らぐ頃。マツムシや鈴虫など心地よい虫の声が聞こえ、朝夕は心地よい涼風が吹く。同時に台風の季節も到来する。">
            (しょしょ)
          </button>
        </li>
        <li>
          <p>
            <date>September 8</date> -
            <date>September 22</date>
          </p>
          <button type="button" data-name="白露" data-date="Dew forms on the leaves" data-hello="野に顔を出しはじめた薄の穂に朝露がつき、白い粒のように光って見える頃。涼風に幾分の肌寒さを感じさせる冷風が混じり始める。">
            (はくろ)
          </button>
        </li>
        <li>
          <p>
            <date>September 23</date> -
            <date>October 7</date>
          </p>
          <button type="button" data-name="秋分" data-date="The Autumn Equinox" data-hello="「暑さ寒さも彼岸まで」の言葉通り、暑い日に代わり冷気を感ずる日が増えはじめ、秋が深まっていく。秋の七草が咲き揃う頃。">
            (しゅうぶん)
          </button>
        </li>
        <li>
          <p>
            <date>October 8</date> -
            <date>October 23</date>
          </p>
          <button type="button" data-name="寒露" data-date="Weather becomes colder" data-hello="夜が長くなり露がつめたく感じられる頃。菊の花が咲き始め、山の木々の葉は紅葉の準備に入る。安定して秋晴れの日が多くなる。">
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
  <nav id="now" class="hidden">
    <section class="controls">
      <input type="button" class="color bgcolor" id="cancel-btn" value="⏹">
      <input type="button" class="color bgcolor" id="pause-btn" value="⏸">
      <input type="button" class="color bgcolor" id="resume-btn" value="⏯">
    </section>
  </nav>
  <script type="text/javascript">
  const dateAll = document.querySelectorAll('#log ul li button')
  for (const dateLi of dateAll) {
    dateLi.addEventListener('click', function () {
      const uttr = new SpeechSynthesisUtterance()
      uttr.text = this.innerText + this.dataset.date
      uttr.lang = "ja-JP"
      uttr.pitch = 0.9
      uttr.rate = 0.9
      speechSynthesis.speak(uttr)

      const sekkiName = document.querySelector('#log h1 b')
      sekkiName.innerText = this.dataset.name + this.innerText

      const sekkiDates = document.querySelector('#lastModified')
      sekkiDates.innerText = this.dataset.date

      const sekkiAbout = document.querySelector('#log h2')
      sekkiAbout.innerText = this.dataset.hello
    }, false)
  }

  // 発話の停止・一時停止・再開
  const cancelBtn = document.querySelector('#cancel-btn')
  const pauseBtn = document.querySelector('#pause-btn')
  const resumeBtn = document.querySelector('#resume-btn')

  cancelBtn.addEventListener('click', function () {
    speechSynthesis.cancel()
  })

  pauseBtn.addEventListener('click', function () {
    speechSynthesis.pause()
  })

  resumeBtn.addEventListener('click', function () {
    speechSynthesis.resume()
  })
  </script>
</body>
</html>
