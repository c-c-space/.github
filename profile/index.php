<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="format-detection" content="telephone=no" />
  <script src="/js/index.js" async></script>
  <link rel="stylesheet" href="../ver/log/style.css" />
  <link rel="stylesheet" href="../css/menu.css" />
  <link rel="stylesheet" href="../css/modal.css" />
  <link rel="stylesheet" href="../css/userMedia.css" />
  <link rel="stylesheet" href="style.css" />
  <?php require('../ver/icon.html');?>
</head>
<body ononline="update(true)" onoffline="update(false)" onload="update(navigator.onLine)">
  <header id="menu" hidden>
    <button id="js-button" class="color bgcolor"><b></b></button>
    <nav id="contents">
      <a href="#" onclick="window.history.back(); return false;">
        <p><b>creative-community.space</b></p>
        <u>↩︎</u>
      </a>
    </nav>
  </header>
  <script src="/js/menu.js"></script>

  <ul id="log" class="hidden">
    <li id="battery">
      <span>
        <button class="color bgcolor" onclick="location.assign('js/battery.html')">Battery Status</button>
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
    <script src="js/navigator.js"></script>
    <script src="js/window.js"></script>

    <li>
      <span>
        <button class="color bgcolor openModal" type="button" onclick="fetchHTML('yourinfo.html','#about')">通信情報／ブラウザ等情報</button>
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
    <script src="../js/log.js"></script>
  </ul>

  <dialog id="modal">
    <button id="closeButton">Close 閉じる</button>
    <section id="about"></section>
  </dialog>

  <script type="text/javascript">
  if (/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent)) {
    const battery = document.querySelector('#battery')
    battery.style.display = "none"
  }

  async function fetchHTML(url = '', query = '') {
    fetch(url)
    .then(response => response.text())
    .then(html => {
      document.querySelector(query).innerHTML = html
    });
  }

  const dialogModal = document.querySelector('#modal');
  const openModalAll = document.querySelectorAll('.openModal');
  for (const openModal of openModalAll) {
    openModal.addEventListener('click', function onModal() {
      if (typeof dialogModal.showModal === "function") {
        dialogModal.showModal();
      } else {
        alert("The <dialog> API is not supported by this browser");
      }
    }, false);
  }

  const closeButton = document.querySelector('#closeButton');
  closeButton.addEventListener('click', () => {
    dialogModal.close();
  });
  </script>

  <video id="userMedia" autoplay playsinline></video>
  <script type="text/javascript">
  const userMedia = document.querySelector("#userMedia")
  userMedia.style.width = window.innerWidth
  userMedia.style.height = window.innerHeight

  const media = navigator.mediaDevices.getUserMedia({
    video: true,
    video: { facingMode: "environment" }, //背面カメラ
    //video: { facingMode: "user" }, //インカメラ
    audio: false,
  });

  media.then((stream) => {
    userMedia.srcObject = stream;
  });
  </script>
  <script src="index.js"></script>
</body>
</html>
