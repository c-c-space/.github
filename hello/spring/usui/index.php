<!DOCTYPE html>
<html lang="ja">

<head>
  <?php
  $datetime = date('02-19');
  require_once('../../all/24sekki.php');
  require_once('../../greeting.php');

  $title = $sekkiName . ' | ' . $date;
  $thisDescription = $description . ' | ' . $hello;

  require_once('../../head.php');
  ?>
  <meta property="og:image" content="<?php echo $url . "card.png"; ?>">
  <meta name="twitter:image" content="<?php echo $url . "card.png"; ?>">

  <script src="/ver/js/menu.js"></script>
  <script src="/ver/js/modal.js"></script>

  <link rel="stylesheet" href="/ver/css/menu.css" />
  <link rel="stylesheet" href="/ver/css/controls.css" />
  <link rel="stylesheet" href="/ver/css/modal.v1.css" />
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
        <small>2月19日 ~ 2月23日頃</small><br />
        <ruby>
          雨 <rp>(</rp>
          <rt>あめ</rt>
          <rp>)</rp>
        </ruby>
        が
        <ruby>
          降 <rp>(</rp>
          <rt>ふ</rt>
          <rp>)</rp>
        </ruby>
        って
        <ruby>
          土 <rp>(</rp>
          <rt>つち</rt>
          <rp>)</rp>
        </ruby>
        が
        <ruby>
          湿 <rp>(</rp>
          <rt>しめ</rt>
          <rp>)</rp>
        </ruby>
        り
        <ruby>
          気 <rp>(</rp>
          <rt>け</rt>
          <rp>)</rp>
        </ruby>
        を
        <ruby>
          含 <rp>(</rp>
          <rt>ふく</rt>
          <rp>)</rp>
        </ruby>
        む
      </p>
      <p>
        <small>2月24日 ~ 2月28日頃</small><br />
        <ruby>
          霞 <rp>(</rp>
          <rt>かすみ</rt>
          <rp>)</rp>
        </ruby>
        がたなびき
        <ruby>
          始 <rp>(</rp>
          <rt>はじ</rt>
          <rp>)</rp>
        </ruby>
        める
      </p>
      <p>
        <small>3月1日 ~ 3月4日頃</small><br />
        <ruby>
          草木 <rp>(</rp>
          <rt>くさき</rt>
          <rp>)</rp>
        </ruby>
        が
        <ruby>
          芽吹 <rp>(</rp>
          <rt>めぶ</rt>
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
