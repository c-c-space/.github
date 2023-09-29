<!DOCTYPE html>
<html lang="ja">

<head>
  <?php
  $datetime = date('08-08');
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
        <small>8月8日 ~ 8月12日頃</small><br />
        <ruby>
          涼 <rp>(</rp>
          <rt>すず</rt>
          <rp>)</rp>
        </ruby>
        しい
        <ruby>
          風 <rp>(</rp>
          <rt>かぜ</rt>
          <rp>)</rp>
        </ruby>
        が
        <ruby>
          立 <rp>(</rp>
          <rt>た</rt>
          <rp>)</rp>
        </ruby>
        ち
        <ruby>
          始 <rp>(</rp>
          <rt>はじ</rt>
          <rp>)</rp>
        </ruby>
        める
      </p>
      <p>
        <small>8月13日 ~ 8月17日頃</small><br />
        <ruby>
          蜩 <rp>(</rp>
          <rt>ひぐらし</rt>
          <rp>)</rp>
        </ruby>
        が
        <ruby>
          鳴 <rp>(</rp>
          <rt>な</rt>
          <rp>)</rp>
        </ruby>
        き
        <ruby>
          始 <rp>(</rp>
          <rt>はじ</rt>
          <rp>)</rp>
        </ruby>
        める
      </p>
      <p>
        <small>8月18日 ~ 8月22日頃</small><br />
        <ruby>
          深 <rp>(</rp>
          <rt>ふか</rt>
          <rp>)</rp>
        </ruby>
        い
        <ruby>
          霧 <rp>(</rp>
          <rt>きり</rt>
          <rp>)</rp>
        </ruby>
        が
        <ruby>
          立 <rp>(</rp>
          <rt>た</rt>
          <rp>)</rp>
        </ruby>
        ち
        <ruby>
          込 <rp>(</rp>
          <rt>こ</rt>
          <rp>)</rp>
        </ruby>
        める
      </p>
    </section>
    <?php require('../../all/72ko.html'); ?>
  </main>

  <dialog id="modal">
    <button type="button" id="closeModal">×</button>
    <section id="about">
      <small><?php echo $date; ?></small>
      <h3>
        <?php echo $sekkiName; ?>
        <?php echo $sekki; ?>
      </h3>
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