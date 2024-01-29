<!DOCTYPE html>
<html lang="ja">

<head>
  <?php
  $datetime = date('12-07');
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
        <small>12月7日 ~ 12月11日頃</small>
        <br />
        <ruby>
          天地 <rp>(</rp>
          <rt>てんち</rt>
          <rp>)</rp>
        </ruby>
        の
        <ruby>
          気 <rp>(</rp>
          <rt>き</rt>
          <rp>)</rp>
        </ruby>
        が
        <ruby>
          塞 <rp>(</rp>
          <rt>ふさが</rt>
          <rp>)</rp>
        </ruby>
        がって
        <ruby>
          冬 <rp>(</rp>
          <rt>ふゆ</rt>
          <rp>)</rp>
        </ruby>
        となる
      </p>
      <p>
        <small>12月12日 ~ 12月16日頃</small>
        <br />
        <ruby>
          熊 <rp>(</rp>
          <rt>くま</rt>
          <rp>)</rp>
        </ruby>
        が
        <ruby>
          冬眠 <rp>(</rp>
          <rt>とうみん</rt>
          <rp>)</rp>
        </ruby>
        のために
        <ruby>
          穴 <rp>(</rp>
          <rt>あな</rt>
          <rp>)</rp>
        </ruby>
        に
        <ruby>
          隠 <rp>(</rp>
          <rt>かく</rt>
          <rp>)</rp>
        </ruby>
        れる
      </p>
      <p>
        <small>12月17日 ~ 12月21日頃</small>
        <br />
        <ruby>
          鮭 <rp>(</rp>
          <rt>さけ</rt>
          <rp>)</rp>
        </ruby>
        が
        <ruby>
          群 <rp>(</rp>
          <rt>むら</rt>
          <rp>)</rp>
        </ruby>
        がり
        <ruby>
          川 <rp>(</rp>
          <rt>かわ</rt>
          <rp>)</rp>
        </ruby>
        を
        <ruby>
          上 <rp>(</rp>
          <rt>のぼ</rt>
          <rp>)</rp>
        </ruby>
        る
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
