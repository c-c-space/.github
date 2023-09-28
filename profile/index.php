<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <meta name="format-detection" content="telephone=no" />
  <script src="../js/menu.js"></script>
  <script src="../js/modal.js"></script>
  <script src="../js/userMedia.js"></script>
  <script type="text/javascript">
    menuJSON('index.json')

    document.addEventListener('DOMContentLoaded', function() {
      fetchHTML('yourinfo.html', '#about')
    });

    window.addEventListener('load', function() {
      userStream()
    }, false);
  </script>

  <!--og:meta-->
  <meta content="website" property="og:type">
  <title>通信情報／ブラウザ等情報 | creative-community.space</title>
  <meta content="通信情報／ブラウザ等情報 | creative-community.space" property="og:title">
  <meta content="The Information About Network & Browser for connection to The Internet" name="description">
  <meta content="The Information About Network & Browser for connection to The Internet" name="og:description">

  <!--for Twitter-->
  <meta content="summary_large_image" name="twitter:card">
  <meta content="https://creative-community.space/profile/" property="og:url">
  <meta content="https://creative-community.space/ver/card.png" property="og:image">
  <meta content="https://creative-community.space/ver/card.png" name="twitter:image:src">

  <link rel="icon" href="../ver/icon/favicon.png" type="image/png">

  <link rel="stylesheet" href="../css/menu.css" />
  <link rel="stylesheet" href="../css/log.css" />
  <link rel="stylesheet" href="../css/modal.css" />
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

  <ul id="log">
    <li id="battery">
      <span>
        <button onclick="location.assign('js/battery.html')">Battery Status</button>
      </span>
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
    <script src="js/window.js"></script>

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
        <button id="status" type="button" onclick="setLOG()">(Online or Offline?)</button>
      </span>
      <?php
      echo "<span>LANGUAGE " . $_SERVER['HTTP_ACCEPT_LANGUAGE'] . "</span>";
      echo "<span>ENCODING " . $_SERVER['HTTP_ACCEPT_ENCODING'] . "</span>";
      echo "<span>" . $_SERVER['HTTP_ACCEPT'] . "</span>";
      ?>
    </li>

    <li>
      <span>
        <button type="button" onclick="openModal()">通信情報／ブラウザ等情報</button>
      </span>
      <?php require('yourinfo.php'); ?>
    </li>
    <script src="../js/login.js"></script>
  </ul>

  <dialog id="modal">
    <button id="closeModal">Close 閉じる</button>
    <section id="about"></section>
  </dialog>

  <script src="index.js"></script>
</body>

</html>