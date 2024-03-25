<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <meta name="format-detection" content="telephone=no" />

  <script src="/ver/js/menu.js"></script>
  <script type="text/javascript">
    async function fetchHTML(url = '', query = '') {
      fetch(url)
        .then(response => response.text())
        .then(html => {
          document.querySelector(query).innerHTML = html
        })
    }

    fetchHTML('recognition.html', '#recognition')
    fetchHTML('synthesis.html', '#synthesis')
  </script>

  <title>音声認識・音声合成 | Web Speech API</title>
  <meta content="Speech Recognition & Text to Speech" name="description">
  
  <!-- Facebook Meta Tags -->
  <meta property="og:url" content="https://creative-community.space/hello/js/">
  <meta property="og:type" content="website">
  <meta property="og:title" content="音声認識・音声合成 | Web Speech API">
  <meta property="og:description" content="Speech Recognition & Text to Speech">
  
  <!-- Twitter Meta Tags -->
  <meta name="twitter:card" content="summary_large_image">
  <meta property="twitter:domain" content="creative-community.space">
  <meta property="twitter:url" content="https://creative-community.space/hello/js/">
  <meta name="twitter:title" content="音声認識・音声合成 | Web Speech API">
  <meta name="twitter:description" content="Speech Recognition & Text to Speech">
  
  <?php
  //現在の日時を取得
  $datetime = date('m-d');

  //四季を表示
  if ($datetime >= '02-04' and $datetime <= '05-04') {
    $season = "spring";
  } elseif ($datetime >= '05-05' and $datetime <= '08-07') {
    $season = "summer";
  } elseif ($datetime >= '08-08' and $datetime <= '11-07') {
    $season = "autumn";
  } else {
    $season = "winter";
  }
  ?>
  
  <meta property="og:image" content="<?php echo "https://creative-community.space/hello/" . $season . "/summary.png"; ?>">
  <meta name="twitter:image" content="<?php echo "https://creative-community.space/hello/" . $season . "/summary.png"; ?>">

  <link rel="icon" href="/ver/icon/favicon.png" type="image/png">
  <link rel="stylesheet" href="/ver/css/menu.css" />
  <link rel="stylesheet" href="/ver/css/controls.css" />
  <link rel="stylesheet" href="../css/index.css" />

  <style>
    pre {
      font-family: inherit;
    }
  </style>
</head>

<body>
  <header id="menu" hidden>
    <button><b></b></button>
    <menu id="contents">
      <a href="#" onclick="window.history.back(); return false;">
        <p>creative-community.space</p>
        <u>↩︎</u>
      </a>
      <a href="/hello/" target="_parent">
        <i>Hello</i>
        <b>Speech to Text to Text to Speech</b>
      </a>
      <a href="/hello/all/" target="_parent">
        <i>24 Sekki</i>
        <b>二十四節気</b>
      </a>
      <a href="/hello/all/color.php" target="_parent">
        <i>The Collection of Traditional Seasonal Colors of Japan</i>
        <b>日本の伝統的な季節の色</b>
      </a>
    </menu>
  </header>
  
  <main id="hello">
    <details id="recognition"></details>
    <details id="synthesis"></details>
    <hr>
    <form>
      <?php require('form.html'); ?>
    </form>
  </main>

  <nav id="now" class="hidden">
    <section class="controls">
      <input type="button" class="color bgcolor" id="cancel-btn" value="⏹">
      <input type="button" class="color bgcolor" id="pause-btn" value="⏸">
      <input type="button" class="color bgcolor" id="resume-btn" value="⏯">
    </section>
  </nav>

  <script src="controls.js"></script>
  <script src="recognition.js"></script>
</body>

</html>
