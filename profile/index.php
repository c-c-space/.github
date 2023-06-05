<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="format-detection" content="telephone=no" />
  <script src="/js/index.js" async></script>
  <link rel="stylesheet" href="../ver/log/style.css" />
  <link rel="stylesheet" href="css/style.css" />
  <link rel="stylesheet" href="css/modal.css" />
  <link rel="icon" href="/ver/icon/android.png" sizes="192x192" type="image/png">
  <link rel="apple-touch-icon-precomposed" href="/ver/icon/apple.png" sizes="180x180" type="image/png">
  <style>
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

  #log span {
    word-break: break-all;
  }
  </style>
</head>
<body ononline="update(true)" onoffline="update(false)" onload="update(navigator.onLine)">
  <script src="/js/menu.js"></script>
  <header id="menu" hidden>
    <button id="js-button" class="color bgcolor"><b></b></button>
    <nav id="contents">
      <a href="#" onclick="window.history.back(); return false;">
        <p><b>creative-community.space</b></p>
        <u>↩︎</u>
      </a>
    </nav>
  </header>

  <ul id="log">
    <li id="battery">
      <span>Battery Status</span>
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
      <span>
        <u>Window Size</u>
      </span>
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

    <li id="info">
      <span>
        <button id="status" class="color bgcolor" type="button" onclick="setLOG()">(Online or Offline?)</button>
      </span>
      <?php
      echo "<span>LANGUAGE " . $_SERVER['HTTP_ACCEPT_LANGUAGE'] . "</span>";
      echo "<span>ENCODING " . $_SERVER['HTTP_ACCEPT_ENCODING'] . "</span>";
      echo "<span>" . $_SERVER['HTTP_ACCEPT'] . "</spsan>";
      ?>
    </li>

    <li>
      <span>
        <button id="openModal" class="color bgcolor" type="button">通信情報／ブラウザ等情報</button>
      </span>
      <?php
      $ip = $_SERVER["REMOTE_ADDR"];
      $hqdn = $_SERVER["REMOTE_PORT"];
      $os = $_SERVER["HTTP_USER_AGENT"];

      echo "<span>PORT <code id='hqdn'>" . $hqdn . "</code></span>";
      echo "<span>IP <code id='ip'>" . $ip . "</code></span>";
      echo "<span>USER AGENT <code id='os'>" . $os . "</code></span>";
      ?>
    </li>
  </ul>
  <script src="../js/log.js"></script>

  <dialog id="modal" class="color bgcolor">
    <button id="closeButton">Close 閉じる</button>
    <section id="about"></section>
  </dialog>

  <nav id="now">
    <section>
      <select class="color bgcolor" id="bgcolor">
        <option selected>Background Color</option>
      </select>
      <select class="color bgcolor" id="color">
        <option selected>Color</option>
      </select>
    </section>
    <section>
      <select class="color bgcolor" id="fontSize">
        <option value="13px">Small</option>
        <option value="16px" selected>Medium</option>
        <option value="20px">Large</option>
      </select>
    </section>
  </nav>

  <?php require('../hello/all/24sekki.php');?>
  <script src="../hello/<?php echo $season;?>/color.js"></script>
  <script type="text/javascript">
  let namesForm = document.querySelectorAll('#bgcolor, #color')
  for (const names of namesForm) {
    Object.entries(colors).forEach(eachArr => {
      let option = document.createElement('option')
      option.textContent = Object.values(eachArr)[0]
      option.value = Object.values(eachArr)[1]
      names.appendChild(option)
    })
  }
  </script>

  <script type="text/javascript">
  if (/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent)) {
    const battery = document.querySelector('#battery')
    battery.style.display = "none"
  }

  function update(online) {
    document.querySelector('#status').textContent =
    online ? 'You are: Online' : 'You are: Offline';
  }

  fetch('about.html')
  .then(response => response.text())
  .then(about => {
    document.querySelector('#about').innerHTML = about
  });
  </script>

  <script src="index.js"></script>
  <script src="js/setStyles.js"></script>
</body>
</html>
