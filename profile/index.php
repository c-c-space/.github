<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <meta name="format-detection" content="telephone=no" />
  <link rel="icon" href="/ver/icon/favicon.png">

  <script src="index.js?v=1"></script>

  <meta property="og:type" content="website">
  <title>通信情報／ブラウザ等情報 | creative-community.space</title>
  <meta property="og:title" content="通信情報／ブラウザ等情報 | creative-community.space">
  <meta name="description" content="The Information About Network & Browser for connection to The Internet">
  <meta property="og:description" content="The Information About Network & Browser for connection to The Internet">

  <meta name="twitter:card" content="summary_large_image">
  <meta property="twitter:domain" content="creative-community.space">
  <meta property="og:url" content="https://creative-community.space/profile/">
  <meta property="og:image" content="https://creative-community.space/ver/card.png">
  <meta name="twitter:image" content="https://creative-community.space/ver/card.png">

  <script src="../ver/js/menu.js?v=1"></script>
  <script src="../ver/js/modal.js?v=1"></script>
  <script src="js/userMedia.js?v=1"></script>
  <script src="js/window.js?v=1"></script>
  <script type="text/javascript">
    menuJSON('index.json')

    window.addEventListener('load', function () {
      userStream()
      fetchHTML('yourinfo.html', '#about')
    }, false);
  </script>

  <link rel="stylesheet" href="../ver/css/menu.css?v=1" />
  <link rel="stylesheet" href="../ver/css/log.css?v=1" />
  <link rel="stylesheet" href="../ver/css/modal.css?v=1" />
  <link rel="stylesheet" href="style.css" />
</head>

<body ononline="update(true)" onoffline="update(false)" onload="update(navigator.onLine)">
  <header id="menu" hidden>
    <button><b></b></button>
    <menu id="contents">
      <a href="#" onclick="window.history.back(); return false;">
        <p>creative-community.space</p>
        <u>↩︎</u>
      </a>
    </menu>
  </header>

  <main>

    <ul id="log">
      <li id="battery">
        <span><u>Battery Status</u></span>
        <span id="level"></span>
        <span><meter id="progress" min="0" low="10" high="20" max="100"></meter></span>
        <span>
          <b id="charging"></b>
          <u>
            <small id="chargingTime"></small>
            <small id="dischargingTime"></small>
          </u>
        </span>
      </li>
      <script src="js/battery.js"></script>

      <li id="window">
        <span><u>Window Size</u></span>
        <span>Width: <code id="outInnerWidth"></code> px</span>
        <span>Height: <code id="outInnerHeight"></code> px</span>
        <span id="network"></span>
      </li>
      <li id="screen">
        <span>
          <u>Screen Size</u>
        </span>
        <span>Width: <code id="outScreenWidth"></code> px</span>
        <span>Height: <code id="outScreenheight"></code> px</span>
        <span id="navigator"></span>
      </li>
      <script src="js/navigator.js"></script>

      <li id="info">
        <span>
          <button id="status" type="button" onclick="openModal()">(Online or Offline?)</button>
        </span>
        <span id="lang">LANGUAGE <b></b></span>
        <span></span>
        <span id="voice"></span>
      </li>

      <li>
        <span>
          <button type="button" onclick="openModal()">通信情報／ブラウザ等情報</button>
        </span>
        <?php require ('yourinfo.php'); ?>
      </li>
    </ul>
  </main>

  <dialog id="modal">
    <button id="closeModal">Close 閉じる</button>
    <section id="about"></section>
  </dialog>

  <footer>
    <button type="button" onclick="clearAll()">すべて削除 Delete All</button>
  </footer>
</body>

</html>