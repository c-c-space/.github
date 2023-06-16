<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="format-detection" content="telephone=no" />
  <script src="/js/index.js" async></script>
  <link rel="stylesheet" href="/css/menu.css" />
  <link rel="stylesheet" href="../style.css" />
  <link rel="stylesheet" href="../css/controls.css" />
  <link rel="stylesheet" href="../../ver/howto.css" />
  <link rel="stylesheet" href="../css/mobile.css" media="screen and (max-width: 750px)" />
</head>

<body>
  <header id="menu" hidden>
    <button id="js-button"><b></b></button>
    <nav id="contents">
      <a href="#" onclick="window.history.back(); return false;">
        <p><b>creative-community.space</b></p>
        <u>↩︎</u>
      </a>
    </nav>
  </header>
  <script src="/js/menu.js"></script>

  <main id="hello">
    <?php require('form.html');?>
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
