<!DOCTYPE html>
<html lang="ja">

<head>
  <?php
  $datetime = date('07-23');
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
        <small>7月23日 ~ 7月27日頃</small>
        <br />
        <ruby>
          桐 <rp>(</rp>
          <rt>きり</rt>
          <rp>)</rp>
        </ruby>
        の
        <ruby>
          花 <rp>(</rp>
          <rt>はな</rt>
          <rp>)</rp>
        </ruby>
        が(
        <ruby>
          来年 <rp>(</rp>
          <rt>らいねん</rt>
          <rp>)</rp>
        </ruby>
        の)
        <ruby>
          蕾 <rp>(</rp>
          <rt>つぼみ</rt>
          <rp>)</rp>
        </ruby>
        をつける
      </p>
      <p>
        <small>7月28日 ~ 8月1日頃</small>
        <br />
        <ruby>
          土 <rp>(</rp>
          <rt>つち</rt>
          <rp>)</rp>
        </ruby>
        がしめって
        <ruby>
          蒸 <rp>(</rp>
          <rt>む</rt>
          <rp>)</rp>
        </ruby>
        し
        <ruby>
          暑 <rp>(</rp>
          <rt>あつ</rt>
          <rp>)</rp>
        </ruby>
        くなる
      </p>
      <p>
        <small>8月2日 ~ 8月7日頃</small>
        <br />
        <ruby>
          時 <rp>(</rp>
          <rt>とき</rt>
          <rp>)</rp>
        </ruby>
        として
        <ruby>
          大雨 <rp>(</rp>
          <rt>おおあめ</rt>
          <rp>)</rp>
        </ruby>
        が
        <ruby>
          降 <rp>(</rp>
          <rt>ふ</rt>
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