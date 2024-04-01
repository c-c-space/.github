<!DOCTYPE html>
<html lang="ja">

<head>
  <?php
  $datetime = date('06-05');
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
        <small>6月5日 ~ 6月9日頃</small>
        <br />
        <ruby>
          螳螂 <rp>(</rp>
          <rt>かまきり</rt>
          <rp>)</rp>
        </ruby>
        が
        <ruby>
          生 <rp>(</rp>
          <rt>う</rt>
          <rp>)</rp>
        </ruby>
        まれ
        <ruby>
          出 <rp>(</rp>
          <rt>で</rt>
          <rp>)</rp>
        </ruby>
        る
      </p>
      <p>
        <small>6月10日 ~ 6月15日頃</small>
        <br />
        <ruby>
          腐 <rp>(</rp>
          <rt>くさ</rt>
          <rp>)</rp>
        </ruby>
        った
        <ruby>
          草 <rp>(</rp>
          <rt>くさ</rt>
          <rp>)</rp>
        </ruby>
        が
        <ruby>
          蒸 <rp>(</rp>
          <rt>む</rt>
          <rp>)</rp>
        </ruby>
        れ
        <ruby>
          蛍 <rp>(</rp>
          <rt>ほたる</rt>
          <rp>)</rp>
        </ruby>
        になる
      </p>
      <p>
        <small>6月16日 ~ 6月20日頃</small>
        <br />
        <ruby>
          梅 <rp>(</rp>
          <rt>うめ</rt>
          <rp>)</rp>
        </ruby>
        の
        <ruby>
          実 <rp>(</rp>
          <rt>み</rt>
          <rp>)</rp>
        </ruby>
        が
        <ruby>
          黄 <rp>(</rp>
          <rt>き</rt>
          <rp>)</rp>
        </ruby>
        ばんで
        <ruby>
          熟 <rp>(</rp>
          <rt>じゅく</rt>
          <rp>)</rp>
        </ruby>
        す
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