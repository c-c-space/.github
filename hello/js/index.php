<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <meta name="format-detection" content="telephone=no" />
  <script type="text/javascript">
    async function fetchHTML(url = '', query = '') {
      fetch(url)
        .then(response => response.text())
        .then(html => {
          document.querySelector(query).innerHTML = html
        })
    }

    fetchHTML('recognition.html', query = '#recognition')
    fetchHTML('synthesis.html', query = '#synthesis')
  </script>

  <!--og:meta-->
  <meta content="website" property="og:type">
  <title>音声認識・音声合成 | Web Speech API</title>
  <meta content="音声認識・音声合成 | Web Speech API" property="og:title">
  <meta content="Speech Recognition & Text to Speech" name="description">
  <meta content="Speech Recognition & Text to Speech" name="og:description">

  <link rel="icon" href="../../ver/icon/favicon.png" type="image/png">

  <link rel="stylesheet" href="../../css/menu.css" />
  <link rel="stylesheet" href="../../css/controls.css" />
  <link rel="stylesheet" href="../css/index.css" />
</head>

<body>
  <main id="hello">
    <?php require('form.html'); ?>
    <details id="recognition"></details>
    <details id="synthesis"></details>
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