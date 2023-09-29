<!DOCTYPE html>
<html lang="ja">

<head>
  <?php
  $datetime = date('10-24');
  require_once('../../all/24sekki.php');
  require_once('../../all/greeting.php');

  $title = $sekkiName . ' | ' . $date;
  $thisDescription = $description . ' | ' . $hello;

  require_once('../../head.php');
  ?>
  <meta content="<?php echo $url; ?>" property="og:url">

  <link rel="stylesheet" href="/css/modal.css" />
  <link rel="stylesheet" href="/hello/css/index.css" />
</head>

<body>
  <?php require('../../menu.php'); ?>

  <main id="log">
    <button type="button" onclick="changeHidden()" id="login-btn">
      七十二候 72 kō
    </button>
    <div>
      <h1>
        <b><?php echo $sekkiName; ?> <?php echo $sekki; ?></b><br />
        <code id="lastModified"><?php echo $date; ?></code>
      </h1>
      <h2><?php echo $description; ?></h2>
    </div>
    <ul id="ko"></ul>
    <?php
    require_once('../../all/alllog.php');
    require_once('../../log.php');
    ?>
  </main>

  <main id="hello" hidden>
    <section id="readme">
      <input type="button" onclick="changeHidden()" value="<?php echo $sekkiName; ?> <?php echo $sekki; ?>">
      <p>
        <small>10月24日 ~ 10月28日頃</small><br />
        <ruby>
          霜 <rp>(</rp>
          <rt>しも</rt>
          <rp>)</rp>
        </ruby>
        が
        <ruby>
          降 <rp>(</rp>
          <rt>ふ</rt>
          <rp>)</rp>
        </ruby>
        り
        <ruby>
          始 <rp>(</rp>
          <rt>はじ</rt>
          <rp>)</rp>
        </ruby>
        める
      </p>
      <p>
        <small>10月29日 ~ 11月2日頃</small><br />
        <ruby>
          小雨 <rp>(</rp>
          <rt>こさめ</rt>
          <rp>)</rp>
        </ruby>
        がしとしと
        <ruby>
          降 <rp>(</rp>
          <rt>ふ</rt>
          <rp>)</rp>
        </ruby>
        る
      </p>
      <p>
        <small>11月3日 ~ 11月7日頃</small><br />
        <ruby>
          楓 <rp>(</rp>
          <rt>かえで</rt>
          <rp>)</rp>
        </ruby>
        や
        <ruby>
          蔦 <rp>(</rp>
          <rt>つた</rt>
          <rp>)</rp>
        </ruby>
        が
        <ruby>
          黄葉 <rp>(</rp>
          <rt>こうよう</rt>
          <rp>)</rp>
        </ruby>
        する
      </p>
    </section>
    <?php require('../../all/72ko.html'); ?>
  </main>

  <dialog id="modal">
    <button type="button" id="closeModal">×</button>
    <section id="about">
      <h3>
        <?php echo $sekkiName; ?>
        <?php echo $sekki; ?>
      </h3>
      <p><?php echo $description; ?></p>
      <p><?php echo $hello; ?></p>
    </section>
    <section id="color-size"></section>
  </dialog>

  <?php require('../../controls.html'); ?>
  <script src="../../all/72ko.js"></script>
  <script type="text/javascript">
    colorSize()
    colorJSON('../color.json')
    koJSON('ko.json')

    function changeHidden() {
      const mainAll = document.querySelectorAll('main');
      mainAll.forEach(main => {
        if (main.hidden == false) {
          main.hidden = true;
        } else {
          main.hidden = false;
        }
      })
    };
  </script>
  <script src="../../js/log.js"></script>
  <script src="../../js/setStyles.js"></script>
</body>

</html>