<!DOCTYPE html>
<html lang="ja">

<head>
  <?php
  $datetime = date('03-05');
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
        <small>3月5日 ~ 3月9日頃</small><br />
        <ruby>
          冬籠 <rp>(</rp>
          <rt>ふゆごも</rt>
          <rp>)</rp>
        </ruby>
        りの
        <ruby>
          虫 <rp>(</rp>
          <rt>むし</rt>
          <rp>)</rp>
        </ruby>
        が
        <ruby>
          出 <rp>(</rp>
          <rt>で</rt>
          <rp>)</rp>
        </ruby>
        て
        <ruby>
          来 <rp>(</rp>
          <rt>く</rt>
          <rp>)</rp>
        </ruby>
        る
      </p>
      <p>
        <small>3月10日 ~ 3月14日頃</small><br />
        <ruby>
          桃 <rp>(</rp>
          <rt>もも</rt>
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
        き
        <ruby>
          始 <rp>(</rp>
          <rt>はじ</rt>
          <rp>)</rp>
        </ruby>
        める
      </p>
      <p>
        <small>3月15日 ~ 3月19日頃</small><br />
        <ruby>
          青虫 <rp>(</rp>
          <rt>あおむし</rt>
          <rp>)</rp>
        </ruby>
        が
        <ruby>
          羽化 <rp>(</rp>
          <rt>うか</rt>
          <rp>)</rp>
        </ruby>
        して
        <ruby>
          紋白蝶 <rp>(</rp>
          <rt>もんしろちょう</rt>
          <rp>)</rp>
        </ruby>
        になる
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
