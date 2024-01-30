<!DOCTYPE html>
<html lang="ja">

<head>
  <?php
  $datetime = date('07-07');
  require_once('../../all/24sekki.php');
  require_once('../../greeting.php');

  $title = $sekkiName . ' | ' . $date;
  $thisDescription = $description . ' | ' . $hello;

  require_once('../../head.php');
  ?>
  <meta property="og:image" content="<?php echo $url . "card.png"; ?>">
  <meta name="twitter:image" content="<?php echo $url . "card.png"; ?>">

  <link rel="stylesheet" href="/ver/css/modal.css" />
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
        <small>7月7日 ~ 7月12日頃</small>
        <br />
        <ruby>
          暖 <rp>(</rp>
          <rt>あたたか</rt>
          <rp>)</rp>
        </ruby>
        い
        <ruby>
          風 <rp>(</rp>
          <rt>かぜ</rt>
          <rp>)</rp>
        </ruby>
        が
        <ruby>
          吹 <rp>(</rp>
          <rt>ふ</rt>
          <rp>)</rp>
        </ruby>
        いて
        <ruby>
          来 <rp>(</rp>
          <rt>く</rt>
          <rp>)</rp>
        </ruby>
        る
      </p>
      <p>
        <small>7月13日 ~ 7月17日頃</small>
        <br />
        <ruby>
          蓮 <rp>(</rp>
          <rt>はす</rt>
          <rp>)</rp>
        </ruby>
        の
        <ruby>
          花 <rp>(</rp>
          <rt>はな</rt>
          <rp>)</rp>
        </ruby>
        が
        <ruby>
          開 <rp>(</rp>
          <rt>ひら</rt>
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
        <small>7月18日 ~ 7月22日頃</small>
        <br />
        <ruby>
          鷹 <rp>(</rp>
          <rt>たか</rt>
          <rp>)</rp>
        </ruby>
        の
        <ruby>
          幼鳥 <rp>(</rp>
          <rt>ようちょう</rt>
          <rp>)</rp>
        </ruby>
        が
        <ruby>
          飛 <rp>(</rp>
          <rt>と</rt>
          <rp>)</rp>
        </ruby>
        ぶことを
        <ruby>
          覚 <rp>(</rp>
          <rt>おぼ</rt>
          <rp>)</rp>
        </ruby>
        える
      </p>
    </section>
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