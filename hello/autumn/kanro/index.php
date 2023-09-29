<!DOCTYPE html>
<html lang="ja">

<head>
  <?php
  $datetime = date('10-08');
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

  <main id="hello" hidden>
    <section id="readme">
      <input type="button" onclick="changeHidden()" value="<?php echo $sekkiName; ?> <?php echo $sekki; ?>">
      <p>
        <small>10月8日 ~ 10月13日頃</small><br />
        <ruby>
          雁 <rp>(</rp>
          <rt>がん</rt>
          <rp>)</rp>
        </ruby>
        が
        <ruby>
          飛来 <rp>(</rp>
          <rt>ひらい</rt>
          <rp>)</rp>
        </ruby>
        し
        <ruby>
          始 <rp>(</rp>
          <rt>はじ</rt>
          <rp>)</rp>
        </ruby>
        める
      </p>
      <p>
        <small>10月14日 ~ 10月18日頃</small><br />
        <ruby>
          菊 <rp>(</rp>
          <rt>きく</rt>
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
          咲 <rp>(</rp>
          <rt>さ</rt>
          <rp>)</rp>
        </ruby>
        く
      </p>
      <p>
        <small>10月19日 ~ 10月23日頃</small><br />
        <ruby>
          蟋蟀 <rp>(</rp>
          <rt>きりぎりす</rt>
          <rp>)</rp>
        </ruby>
        が
        <ruby>
          戸 <rp>(</rp>
          <rt>と</rt>
          <rp>)</rp>
        </ruby>
        の
        <ruby>
          辺 <rp>(</rp>
          <rt>あた</rt>
          <rp>)</rp>
        </ruby>
        りで
        <ruby>
          鳴 <rp>(</rp>
          <rt>な</rt>
          <rp>)</rp>
        </ruby>
        く
      </p>
    </section>
    <hr>
    <?php require('../../all/72ko.html'); ?>
  </main>
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
    function h($str)
    {
      return htmlspecialchars($str, ENT_QUOTES, 'UTF-8');
    }
    require_once('../../log.php');
    ?>
  </main>

  <dialog id="modal">
    <button type="button" id="closeModal">×</button>
    <section id="about">
      <h3>
        <?php echo $sekkiName + ' ' + $sekki; ?>
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
    colorJSON('color.json')
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
  <script src="../../js/setStyles.js"></script>
</body>

</html>