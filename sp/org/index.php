<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="format-detection" content="telephone=no" />
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="../style.css">
  <style type="text/css">
  @font-face {
    font-family: "ipag";
    src: url("https://creative-community.space/profile/ipag.ttc");
  }

  #log ul li {
    font-family: "ipag", monospace;
    font-weight: 500;
    transform: scale(1, 1.25);
  }

  main {
    overflow: auto;
  }
  </style>
</head>
<body>
  <button type="button" id="mainBtn" onclick="changeHidden()">ORG</button>
  <button type="button" class="backBtn" onclick="window.history.back(); return false;">↩︎</button>

  <main id="log">
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
