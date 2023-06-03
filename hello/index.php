<?php
mb_language("ja");
mb_internal_encoding("UTF-8");
date_default_timezone_set('Asia/Tokyo');

if (date("H") >= 6 and date("H") <= 11) {
  $greeting = "Good Morning おはよう";
  $timeframe = "morning";
} elseif (date("H") >= 12 and date("H") <= 17) {
  $greeting = "Hello こんにちは";
  $timeframe = "afternoon";
} elseif (date("H") >= 18 and date("H") <= 23) {
  $greeting = "Good Evening こんばんは";
  $timeframe = "evening";
} else {
  $greeting = "Good Night おやすみ";
  $timeframe = "night";
}

//現在の日時を取得
$datetime = date('m-d');

if ($datetime >= '02-04' && $datetime < '02-18') {
  $season = "spring";
  $seasonName = "立春（りっしゅん）";
  $seasonID = "risshun";
} elseif ($datetime >= '02-19' && $datetime < '03-04') {
  $season = "spring";
  $seasonName = "雨水（うすい）";
  $seasonID = "usui";
} elseif ($datetime >= '03-05' && $datetime < '03-19') {
  $season = "spring";
  $seasonName = "啓蟄（けいちつ）";
  $seasonID = "keichitsu";
} elseif ($datetime >= '03-20' && $datetime < '04-03') {
  $season = "spring";
  $seasonName = "春分（しゅんぶん）";
  $seasonID = "shunbun";
} elseif ($datetime >= '04-04' && $datetime < '04-18') {
  $season = "spring";
  $seasonName = "清明（せいめい）";
  $seasonID = "seimei";
} elseif ($datetime >= '04-19' && $datetime < '05-04') {
  $season = "spring";
  $seasonName = "穀雨（こくう）";
  $seasonID = "kokuu";
} elseif ($datetime >= '05-05' && $datetime < '05-19') {
  $season = "summer";
  $seasonName = "立夏（りっか）";
  $seasonID = "rikka";
} elseif ($datetime >= '05-20' && $datetime < '06-04') {
  $season = "summer";
  $seasonName = "小満（しょうまん）";
  $seasonID = "shouman";
} elseif ($datetime >= '06-05' && $datetime < '06-20') {
  $season = "summer";
  $seasonName = "芒種（ぼうしゅ）";
  $seasonID = "boushu";
} elseif ($datetime >= '06-21' && $datetime < '07-06') {
  $season = "summer";
  $seasonName = "夏至（げし）";
  $seasonID = "geshi";
} elseif ($datetime >= '07-07' && $datetime < '07-22') {
  $season = "summer";
  $seasonName = "小暑（しょうしょ）";
  $seasonID = "shousho";
} elseif ($datetime >= '07-23' && $datetime < '08-07') {
  $season = "summer";
  $seasonName = "大暑（たいしょ）";
  $seasonID = "taisho";
} elseif ($datetime >= '08-08' && $datetime < '08-22') {
  $season = "autumn";
  $seasonName = "立秋（りっしゅう）";
  $seasonID = "risshu";
} elseif ($datetime >= '08-21' && $datetime < '09-07') {
  $season = "autumn";
  $seasonName = "処暑（しょしょ）";
  $seasonID = "shosho";
} elseif ($datetime >= '09-08' && $datetime < '09-22') {
  $season = "autumn";
  $seasonName = "白露（はくろ）";
  $seasonID = "hakuro";
} elseif ($datetime >= '09-23' && $datetime < '10-07') {
  $season = "autumn";
  $seasonName = "秋分（しゅうぶん）";
  $seasonID = "shuubun";
} elseif ($datetime >= '10-08' && $datetime < '10-23') {
  $season = "autumn";
  $seasonName = "寒露（かんろ）";
  $seasonID = "kanro";
} elseif ($datetime >= '10-24' && $datetime < '11-07') {
  $season = "autumn";
  $seasonName = "霜降（そうこう）";
  $seasonID = "soukou";
} elseif ($datetime >= '11-08' && $datetime < '11-21') {
  $season = "winter";
  $seasonName = "立冬（りっとう）";
  $seasonID = "rittou";
} elseif ($datetime >= '11-22' && $datetime < '12-06') {
  $season = "winter";
  $seasonName = "小雪（しょうせつ）";
  $seasonID = "shousetsu";
} elseif ($datetime >= '12-07' && $datetime < '12-21') {
  $season = "winter";
  $seasonName = "大雪（たいせつ）";
  $seasonID = "taisetsu";
} elseif ($datetime >= '12-22' && $datetime < '01-05') {
  $season = "winter";
  $seasonName = "冬至（とうじ）";
  $seasonID = "touji";
} elseif ($datetime >= '01-06' && $datetime < '01-19') {
  $season = "winter";
  $seasonName = "小寒（しょうかん）";
  $seasonID = "shoukan";
} elseif ($datetime >= '01-20' && $datetime < '02-03') {
  $season = "winter";
  $seasonName = "大寒（だいかん）";
  $seasonID = "daikan";
}

$source_file = $season . "/". $seasonID . "/". $timeframe . ".csv";

function h($str) {
  return htmlspecialchars($str, ENT_QUOTES, 'UTF-8');
}

$fp = fopen($source_file, 'a+b');
while ($row = fgetcsv($fp)) {
  $rows[] = $row;
}

$post = count($rows);
flock($fp, LOCK_SH);
?>

<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="format-detection" content="telephone=no" />
  <script src="/js/index.js" async></script>
  <script src="js/readyState.js" async></script>
  <link rel="stylesheet" href="style.css" />
  <link rel="stylesheet" href="css/controls.css" />
  <link rel="stylesheet" href="css/log.css" />
  <link rel="stylesheet" href="css/mobile.css" media="screen and (max-width: 750px)" />
  <style type="text/css">
  #menu {
    background: #000;
  }

  #js-button {
    background: #fff;
  }

  #contents {
    mix-blend-mode: difference;
  }

  #contents a {
    filter: invert();
  }

  #log button {
    color: inherit;
  }

  #now {
    position: fixed;
    z-index: 100;
    width: 100%;
    bottom: 0;
    padding: 1rem;
  }

  @media screen and (max-width: 750px) {
    #now {
      padding: 2.5%;
    }
  }
  </style>
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

  <main id="hello" hidden>
    <form method="post">
      <section>
        <label for="voice-select">言語・声の種類を選択</label><br/>
        <select id="voice-select" class="color bgcolor" name="voice" required></select>
        <p>
          <label for="speech-btn">音声認識（選択した言語の音声をテキストに変換）</label><br/>
          <button type="button" class="color bgcolor" id="speech-btn">Speech to Text</button>
        </p>
      </section>
      <hr/>
      <section id="readme" contenteditable="true"></section>
      <hr/>
      <br/>
      <label for="speak-btn">音声合成（テキストを選択した言語・声の音声に変換）</label>
      <section>
        <input type="button" class="color bgcolor" id="speak-btn" value="Text to Speech">
      </section>
      <br/>
      <label>音声合成のピッチとレート(速度)を選択</label>
      <section class="range">
        <label for="pitch">Pitch</label>
        <input id="pitch" class="color bgcolor" name="pitch" type="range" min="0" max="2" value="1" step="0.1" />
        <code class="pitch-value"></code>
      </section>
      <section class="range">
        <label for="rate">Rate</label>
        <input id="rate" class="color bgcolor" name="rate" type="range" min="0.1" max="2" value="1" step="0.1" />
        <code class="rate-value"></code>
      </section>
      <hr/>
      <section id="next">
        <button type="button" class="color bgcolor" id="submit-btn">Submit</button>
        <button type="button" class="color bgcolor" id="back-btn" onclick="ChangeHidden()">Back</button>
      </section>
    </form>
  </main>
  <script src="js/recognition.js"></script>

  <?php require('php/log.php'); ?>
  <nav id="now" class="hidden">
    <section class="controls">
      <input type="button" class="color bgcolor" id="cancel-btn" value="⏹">
      <input type="button" class="color bgcolor" id="pause-btn" value="⏸">
      <input type="button" class="color bgcolor" id="resume-btn" value="⏯">
    </section>
    <button id="openModal" class="color bgcolor" type="button">?</button>
  </nav>
  <script src="js/controls.js"></script>

  <dialog id="modal" class="color bgcolor">
    <h3></h3>
    <button type="button" class="color bgcolor" id="closeButton">×</button>
    <section id="about"></section>
    <hr/>
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
  </dialog>
  <script src="../profile/js/jscolor.js"></script>
  <script src="../profile/js/setStyles.js"></script>
  <script src="../js/log.js"></script>
</body>
</html>
