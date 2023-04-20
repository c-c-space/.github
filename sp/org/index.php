<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="format-detection" content="telephone=no" />
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="../style.css">
  <style type="text/css">
  .box {
    font-family: -apple-system, 'Hiragino Kaku Gothic ProN', 'BlinkMacSystemFont', 'メイリオ', Sans-Serif;
  }

  .box {
    font-size: 2rem;
  }

  #random {
    background-repeat: no-repeat;
    background-position: center;
    background-size: cover;
  }

  @media screen and (max-width: 550px) {
    .box {
      font-size: 5vw;
    }
  }
  </style>
</head>
<body>
  <button type="button" id="mainBtn" onclick="changeHidden()">ORG</button>
  <button type="button" class="backBtn" onclick="window.history.back(); return false;">↩︎</button>

  <main>
    <?php require('log.php'); ?>
  </main>

  <main id="readme" hidden></main>
  <script type="text/javascript">
  async function readme() {
    fetch('readme.md')
    .then(response => response.text())
    .then(readme => {
      document.querySelector('#readme').innerHTML = readme.replace(/\n/g, "<br>")
    });
  }
  readme();

  function changeHidden() {
    const mainAll = document.querySelectorAll('main');
    mainAll.forEach(main => {
      if (main.hidden == false) {
        main.hidden = true;
      } else {
        main.hidden = false;
      }
    })
  }
  </script>
</body>
</html>
